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

/* @WebProfiler/Icon/no.svg */
class __TwigTemplate_75fed74b40daca78f9f0fa2d2e9514fc8de2435be2391202129de7ea8d000d47 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/no.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/no.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\" enable-background=\"new 0 0 12 12\" xml:space=\"preserve\">
    <path fill=\"#B0413E\" d=\"M10.4,8.4L8,6l2.4-2.4c0.8-0.8,0.7-1.6,0.2-2.2C10,0.9,9.2,0.8,8.4,1.6L6,4L3.6,1.6C2.8,0.8,2,0.9,1.4,1.4
    C0.9,2,0.8,2.8,1.6,3.6L4,6L1.6,8.4C0.8,9.2,0.9,10,1.4,10.6c0.6,0.6,1.4,0.6,2.2-0.2L6,8l2.4,2.4c0.8,0.8,1.6,0.7,2.2,0.2
    C11.1,10,11.2,9.2,10.4,8.4z\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/no.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"28\" height=\"28\" viewBox=\"0 0 12 12\" enable-background=\"new 0 0 12 12\" xml:space=\"preserve\">
    <path fill=\"#B0413E\" d=\"M10.4,8.4L8,6l2.4-2.4c0.8-0.8,0.7-1.6,0.2-2.2C10,0.9,9.2,0.8,8.4,1.6L6,4L3.6,1.6C2.8,0.8,2,0.9,1.4,1.4
    C0.9,2,0.8,2.8,1.6,3.6L4,6L1.6,8.4C0.8,9.2,0.9,10,1.4,10.6c0.6,0.6,1.4,0.6,2.2-0.2L6,8l2.4,2.4c0.8,0.8,1.6,0.7,2.2,0.2
    C11.1,10,11.2,9.2,10.4,8.4z\"/>
</svg>
", "@WebProfiler/Icon/no.svg", "/home/diouf/projet/php/symfony/masuperagence/Symfony4/vendor/symfony/web-profiler-bundle/Resources/views/Icon/no.svg");
    }
}
