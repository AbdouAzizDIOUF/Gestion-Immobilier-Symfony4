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

/* @WebProfiler/Icon/menu.svg */
class __TwigTemplate_32716511fcb3154d6cdac387fe9811eff40dadb5ad777d3247a4fa28c6a51f3c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/menu.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/menu.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"m 2.571,17.5 18.859,0 c 0.87,0 1.57,0.7 1.57,1.57 l 0,1.57 c 0,0.87 -0.7,1.57 -1.57,1.57 l -18.859,0 C 1.702,22.21 1,21.51 1,20.64 L 1,19.07 C 1,18.2 1.702,17.5 2.571,17.5 Z M 1,11.21 1,12.79 c 0,0.86 0.702,1.56 1.571,1.56 l 18.859,0 c 0.87,0 1.57,-0.7 1.57,-1.56 l 0,-1.58 C 23,10.35 22.3,9.644 21.43,9.644 l -18.859,0 C 1.702,9.644 1,10.35 1,11.21 Z M 1,3.357 1,4.929 c 0,0.869 0.702,1.572 1.571,1.572 l 18.859,0 C 22.3,6.501 23,5.798 23,4.929 L 23,3.357 C 23,2.489 22.3,1.786 21.43,1.786 l -18.859,0 C 1.702,1.786 1,2.489 1,3.357 Z\" />
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/menu.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"m 2.571,17.5 18.859,0 c 0.87,0 1.57,0.7 1.57,1.57 l 0,1.57 c 0,0.87 -0.7,1.57 -1.57,1.57 l -18.859,0 C 1.702,22.21 1,21.51 1,20.64 L 1,19.07 C 1,18.2 1.702,17.5 2.571,17.5 Z M 1,11.21 1,12.79 c 0,0.86 0.702,1.56 1.571,1.56 l 18.859,0 c 0.87,0 1.57,-0.7 1.57,-1.56 l 0,-1.58 C 23,10.35 22.3,9.644 21.43,9.644 l -18.859,0 C 1.702,9.644 1,10.35 1,11.21 Z M 1,3.357 1,4.929 c 0,0.869 0.702,1.572 1.571,1.572 l 18.859,0 C 22.3,6.501 23,5.798 23,4.929 L 23,3.357 C 23,2.489 22.3,1.786 21.43,1.786 l -18.859,0 C 1.702,1.786 1,2.489 1,3.357 Z\" />
</svg>
", "@WebProfiler/Icon/menu.svg", "/home/diouf/projet/php/symfony/masuperagence/Symfony4/vendor/symfony/web-profiler-bundle/Resources/views/Icon/menu.svg");
    }
}
