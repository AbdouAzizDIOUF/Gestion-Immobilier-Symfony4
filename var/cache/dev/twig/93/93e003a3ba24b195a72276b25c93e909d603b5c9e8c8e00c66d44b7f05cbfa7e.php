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

/* @WebProfiler/Icon/validator.svg */
class __TwigTemplate_6734e34a3b9fadf937c608b201028c5b7caa5c76bd89d78d4e3fc54678110705 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/validator.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/validator.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\"><path fill=\"#aaaaaa\" d=\"M19.54,22.5H4.29a2.88,2.88,0,0,1-2.87-2.87V4.37A2.88,2.88,0,0,1,4.29,1.5H18.54a1,1,0,0,1,0,2H4.29a.88.88,0,0,0-.87.87V19.63a.88.88,0,0,0,.87.87H19.54a.88.88,0,0,0,.87-.87V11.29a1,1,0,1,1,2,0v8.33A2.88,2.88,0,0,1,19.54,22.5ZM13,17.29,22.88,6a1.5,1.5,0,1,0-2.26-2L12,14,8,9.11A1.5,1.5,0,0,0,5.65,11l5.1,6.25a1.5,1.5,0,0,0,1.14.55h0A1.5,1.5,0,0,0,13,17.29Z\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/validator.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\"><path fill=\"#aaaaaa\" d=\"M19.54,22.5H4.29a2.88,2.88,0,0,1-2.87-2.87V4.37A2.88,2.88,0,0,1,4.29,1.5H18.54a1,1,0,0,1,0,2H4.29a.88.88,0,0,0-.87.87V19.63a.88.88,0,0,0,.87.87H19.54a.88.88,0,0,0,.87-.87V11.29a1,1,0,1,1,2,0v8.33A2.88,2.88,0,0,1,19.54,22.5ZM13,17.29,22.88,6a1.5,1.5,0,1,0-2.26-2L12,14,8,9.11A1.5,1.5,0,0,0,5.65,11l5.1,6.25a1.5,1.5,0,0,0,1.14.55h0A1.5,1.5,0,0,0,13,17.29Z\"/></svg>
", "@WebProfiler/Icon/validator.svg", "/home/diouf/projet/php/symfony/masuperagence/Symfony4/vendor/symfony/web-profiler-bundle/Resources/views/Icon/validator.svg");
    }
}
