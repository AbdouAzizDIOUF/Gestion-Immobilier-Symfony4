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

/* @WebProfiler/Icon/yes.svg */
class __TwigTemplate_53c289eb7426bffa6a335c33f501e0b99345be083a5c5dc41dacf4cb9247f6b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/yes.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/yes.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\" enable-background=\"new 0 0 12 12\" xml:space=\"preserve\">
    <path fill=\"#5E976E\" d=\"M12,3.1c0,0.4-0.1,0.8-0.4,1.1L5.9,9.8c-0.3,0.3-0.6,0.4-1,0.4c-0.4,0-0.7-0.1-1-0.4L0.4,6.3
    C0.1,6,0,5.6,0,5.2c0-0.4,0.2-0.7,0.4-0.9C0.6,4,1,3.9,1.3,3.9c0.4,0,0.8,0.1,1.1,0.4l2.5,2.5l4.7-4.7c0.3-0.3,0.7-0.4,1-0.4
    c0.4,0,0.7,0.2,0.9,0.4C11.8,2.4,12,2.7,12,3.1z\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/yes.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\" enable-background=\"new 0 0 12 12\" xml:space=\"preserve\">
    <path fill=\"#5E976E\" d=\"M12,3.1c0,0.4-0.1,0.8-0.4,1.1L5.9,9.8c-0.3,0.3-0.6,0.4-1,0.4c-0.4,0-0.7-0.1-1-0.4L0.4,6.3
    C0.1,6,0,5.6,0,5.2c0-0.4,0.2-0.7,0.4-0.9C0.6,4,1,3.9,1.3,3.9c0.4,0,0.8,0.1,1.1,0.4l2.5,2.5l4.7-4.7c0.3-0.3,0.7-0.4,1-0.4
    c0.4,0,0.7,0.2,0.9,0.4C11.8,2.4,12,2.7,12,3.1z\"/>
</svg>
", "@WebProfiler/Icon/yes.svg", "/home/diouf/projet/php/symfony/masuperagence/Symfony4/vendor/symfony/web-profiler-bundle/Resources/views/Icon/yes.svg");
    }
}
