<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Extension\Core\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\DataTransformer\ArrayToPartsTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DataTransformerChain;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeImmutableToDateTimeTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToArrayTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToHtml5LocalDateTimeTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToLocalizedStringTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToTimestampTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\ReversedTransformer;
use Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DateTimeType extends AbstractType
{
    const DEFAULT_DATE_FORMAT = \IntlDateFormatter::MEDIUM;
    const DEFAULT_TIME_FORMAT = \IntlDateFormatter::MEDIUM;

    /**
     * The HTML5 datetime-local format as defined in
     * http://w3c.github.io/html-reference/datatypes.html#form.data.datetime-local.
     */
    const HTML5_FORMAT = "yyyy-MM-dd'T'HH:mm:ss";

    private static $acceptedFormats = [
        \IntlDateFormatter::FULL,
        \IntlDateFormatter::LONG,
        \IntlDateFormatter::MEDIUM,
        \IntlDateFormatter::SHORT,
    ];

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $parts = ['year', 'month', 'day', 'hour'];
        $dateParts = ['year', 'month', 'day'];
        $timeParts = ['hour'];

        if ($options['with_minutes']) {
            $parts[] = 'minute';
            $timeParts[] = 'minute';
        }

        if ($options['with_seconds']) {
            $parts[] = 'second';
            $timeParts[] = 'second';
        }

        $dateFormat = \is_int($options['date_format']) ? $options['date_format'] : self::DEFAULT_DATE_FORMAT;
        $timeFormat = self::DEFAULT_TIME_FORMAT;
        $calendar = \IntlDateFormatter::GREGORIAN;
        $pattern = \is_string($options['format']) ? $options['format'] : null;

        if (!\in_array($dateFormat, self::$acceptedFormats, true)) {
            throw new InvalidOptionsException('The "date_format" option must be one of the IntlDateFormatter constants (FULL, LONG, MEDIUM, SHORT) or a string representing a custom format.');
        }

        if ('single_text' === $options['widget']) {
            if (self::HTML5_FORMAT === $pattern) {
                $builder->addViewTransformer(new DateTimeToHtml5LocalDateTimeTransformer(
                    $options['model_timezone'],
                    $options['view_timezone']
                ));
            } else {
                $builder->addViewTransformer(new DateTimeToLocalizedStringTransformer(
                    $options['model_timezone'],
                    $options['view_timezone'],
                    $dateFormat,
                    $timeFormat,
                    $calendar,
                    $pattern
                ));
            }
        } else {
            // when the form is compound the entries of the array are ignored in favor of children data
            // so we need to handle the cascade setting here
            $emptyData = $builder->getEmptyData() ?: [];
            // Only pass a subset of the options to children
            $dateOptions = array_intersect_key($options, array_flip([
                'years',
                'months',
                'days',
                'placeholder',
                'choice_translation_domain',
                'required',
                'translation_domain',
                'html5',
                'invalid_message',
                'invalid_message_parameters',
            ]));

            if (isset($emptyData['date'])) {
                $dateOptions['empty_data'] = $emptyData['date'];
            }

            $timeOptions = array_intersect_key($options, array_flip([
                'hours',
                'minutes',
                'seconds',
                'with_minutes',
                'with_seconds',
                'placeholder',
                'choice_translation_domain',
                'required',
                'translation_domain',
                'html5',
                'invalid_message',
                'invalid_message_parameters',
            ]));

            if (isset($emptyData['time'])) {
                $timeOptions['empty_data'] = $emptyData['time'];
            }

            if (false === $options['label']) {
                $dateOptions['label'] = false;
                $timeOptions['label'] = false;
            }

            if (null !== $options['date_widget']) {
                $dateOptions['widget'] = $options['date_widget'];
            }

            if (null !== $options['time_widget']) {
                $timeOptions['widget'] = $options['time_widget'];
            }

            if (null !== $options['date_format']) {
                $dateOptions['format'] = $options['date_format'];
            }

            $dateOptions['input'] = $timeOptions['input'] = 'array';
            $dateOptions['error_bubbling'] = $timeOptions['error_bubbling'] = true;

            $builder
                ->addViewTransformer(new DataTransformerChain([
                    new DateTimeToArrayTransformer($options['model_timezone'], $options['view_timezone'], $parts),
                    new ArrayToPartsTransformer([
                        'date' => $dateParts,
                        'time' => $timeParts,
                    ]),
                ]))
                ->add('date', __NAMESPACE__.'\DateType', $dateOptions)
                ->add('time', __NAMESPACE__.'\TimeType', $timeOptions)
            ;
        }

        if ('datetime_immutable' === $options['input']) {
            $builder->addModelTransformer(new DateTimeImmutableToDateTimeTransformer());
        } elseif ('string' === $options['input']) {
            $builder->addModelTransformer(new ReversedTransformer(
                new DateTimeToStringTransformer($options['model_timezone'], $options['model_timezone'])
            ));
        } elseif ('timestamp' === $options['input']) {
            $builder->addModelTransformer(new ReversedTransformer(
                new DateTimeToTimestampTransformer($options['model_timezone'], $options['model_timezone'])
            ));
        } elseif ('array' === $options['input']) {
            $builder->addModelTransformer(new ReversedTransformer(
                new DateTimeToArrayTransformer($options['model_timezone'], $options['model_timezone'], $parts)
            ));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['widget'] = $options['widget'];

        // Change the input to a HTML5 datetime input if
        //  * the widget is set to "single_text"
        //  * the format matches the one expected by HTML5
        //  * the html5 is set to true
        if ($options['html5'] && 'single_text' === $options['widget'] && self::HTML5_FORMAT === $options['format']) {
            $view->vars['type'] = 'datetime-local';
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $compound = function (Options $options) {
            return 'single_text' !== $options['widget'];
        };

        // Defaults to the value of "widget"
        $dateWidget = function (Options $options) {
            return $options['widget'];
        };

        // Defaults to the value of "widget"
        $timeWidget = function (Options $options) {
            return $options['widget'];
        };

        $resolver->setDefaults([
            'input' => 'datetime',
            'model_timezone' => null,
            'view_timezone' => null,
            'format' => self::HTML5_FORMAT,
            'date_format' => null,
            'widget' => null,
            'date_widget' => $dateWidget,
            'time_widget' => $timeWidget,
            'with_minutes' => true,
            'with_seconds' => false,
            'html5' => true,
            // Don't modify \DateTime classes by reference, we treat
            // them like immutable value objects
            'by_reference' => false,
            'error_bubbling' => false,
            // If initialized with a \DateTime object, FormType initializes
            // this option to "\DateTime". Since the internal, normalized
            // representation is not \DateTime, but an array, we need to unset
            // this option.
            'data_class' => null,
            'compound' => $compound,
            'empty_data' => function (Options $options) {
                return $options['compound'] ? [] : '';
            },
        ]);

        // Don't add some defaults in order to preserve the defaults
        // set in DateType and TimeType
        $resolver->setDefined([
            'placeholder',
            'choice_translation_domain',
            'years',
            'months',
            'days',
            'hours',
            'minutes',
            'seconds',
        ]);

        $resolver->setAllowedValues('input', [
            'datetime',
            'datetime_immutable',
            'string',
            'timestamp',
            'array',
        ]);
        $resolver->setAllowedValues('date_widget', [
            null, // inherit default from DateType
            'single_text',
            'text',
            'choice',
        ]);
        $resolver->setAllowedValues('time_widget', [
            null, // inherit default from TimeType
            'single_text',
            'text',
            'choice',
        ]);
        // This option will overwrite "date_widget" and "time_widget" options
        $resolver->setAllowedValues('widget', [
            null, // default, don't overwrite options
            'single_text',
            'text',
            'choice',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'datetime';
    }
}
