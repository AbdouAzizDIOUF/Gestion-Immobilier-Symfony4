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

/* @WebProfiler/Icon/twig.svg */
class __TwigTemplate_cf5a398ea3adc0dbada80e99cc04485b0c8421e2b365af8ab2f105a280f61a60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/twig.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/twig.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M20.1,1H3.9C2.3,1,1,2.3,1,3.9v16.3C1,21.7,2.3,23,3.9,23h16.3c1.6,0,2.9-1.3,2.9-2.9V3.9
    C23,2.3,21.7,1,20.1,1z M21,20.1c0,0.5-0.4,0.9-0.9,0.9H3.9C3.4,21,3,20.6,3,20.1V3.9C3,3.4,3.4,3,3.9,3h16.3C20.6,3,21,3.4,21,3.9
    V20.1z M5,5h14v3H5V5z M5,10h3v9H5V10z M10,10h9v9h-9V10z\"/>
</svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/twig.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
<path fill=\"#AAAAAA\" d=\"M20.1,1H3.9C2.3,1,1,2.3,1,3.9v16.3C1,21.7,2.3,23,3.9,23h16.3c1.6,0,2.9-1.3,2.9-2.9V3.9
    C23,2.3,21.7,1,20.1,1z M21,20.1c0,0.5-0.4,0.9-0.9,0.9H3.9C3.4,21,3,20.6,3,20.1V3.9C3,3.4,3.4,3,3.9,3h16.3C20.6,3,21,3.4,21,3.9
    V20.1z M5,5h14v3H5V5z M5,10h3v9H5V10z M10,10h9v9h-9V10z\"/>
</svg>
", "@WebProfiler/Icon/twig.svg", "/home/diouf/projet/php/symfony/masuperagence/Symfony4/vendor/symfony/web-profiler-bundle/Resources/views/Icon/twig.svg");
    }
}
