<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Icon/search.svg */
class __TwigTemplate_15b15a0379226405b71ff0be580351cc080ab8a66e3db3603503fa1fd15722e1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/search.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/search.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M11.61,0.357c-4.4,0-7.98,3.58-7.98,7.98c0,1.696,0.526,3.308,1.524,4.679l-4.374,4.477
        c-0.238,0.238-0.369,0.554-0.369,0.891c0,0.336,0.131,0.653,0.369,0.891c0.238,0.238,0.554,0.369,0.891,0.369
        c0.336,0,0.653-0.131,0.893-0.371l4.372-4.475c1.369,0.996,2.98,1.521,4.674,1.521c4.4,0,7.98-3.58,7.98-7.98
        S16.01,0.357,11.61,0.357z M17.07,8.337c0,3.011-2.449,5.46-5.46,5.46c-3.011,0-5.46-2.449-5.46-5.46s2.449-5.46,5.46-5.46
        C14.62,2.877,17.07,5.326,17.07,8.337z\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/search.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M11.61,0.357c-4.4,0-7.98,3.58-7.98,7.98c0,1.696,0.526,3.308,1.524,4.679l-4.374,4.477
        c-0.238,0.238-0.369,0.554-0.369,0.891c0,0.336,0.131,0.653,0.369,0.891c0.238,0.238,0.554,0.369,0.891,0.369
        c0.336,0,0.653-0.131,0.893-0.371l4.372-4.475c1.369,0.996,2.98,1.521,4.674,1.521c4.4,0,7.98-3.58,7.98-7.98
        S16.01,0.357,11.61,0.357z M17.07,8.337c0,3.011-2.449,5.46-5.46,5.46c-3.011,0-5.46-2.449-5.46-5.46s2.449-5.46,5.46-5.46
        C14.62,2.877,17.07,5.326,17.07,8.337z\"/>
</svg>
", "@WebProfiler/Icon/search.svg", "/home/diouf/projet/php/symfony/masuperagence/Symfony4/vendor/symfony/web-profiler-bundle/Resources/views/Icon/search.svg");
    }
}
