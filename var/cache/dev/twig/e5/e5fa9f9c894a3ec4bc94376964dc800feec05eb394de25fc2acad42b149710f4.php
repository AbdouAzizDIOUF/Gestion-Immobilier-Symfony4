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

/* pages/home.html.twig */
class __TwigTemplate_309b334dc2d9b66c3d75bdcbf34a27c3ad9cf4f926aad305fcffe1cfb438bacd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Agence lorem ipsum";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <div class=\"jumbotron text-center\">
    <h1>Agence lorem ipsum</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut cumque dolore error expedita itaque iure iusto magni, molestiae numquam omnis provident quae repellat sint soluta tempora unde voluptate voluptatibus.</p>
  </div>

  <div class=\"container\">
    <h2>Les derniers biens</h2>
    <div class=\"row flex\">
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 15
            echo "        <div class=\"col-3\">
          ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["property"], "picture", [], "any", false, false, false, 16)) {
                // line 17
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["property"], "picture", [], "any", false, false, false, 17), "imageFile"), "thumb"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
          ";
            } else {
                // line 19
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/properties/empty.jpg", "thumb"), "html", null, true);
                echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
          ";
            }
            // line 21
            echo "          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("property.show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 24), "slug" => twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
              </h5>
              <p class=\"card-text\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "city", [], "any", false, false, false, 26), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "postalCode", [], "any", false, false, false, 26), "html", null, true);
            echo ")</p>
              <div class=\"text-primary\" style=\"font-weight: bold;font-size: 2rem;\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "formattedPrice", [], "any", false, false, false, 27), "html", null, true);
            echo " €</div>
            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 32,  137 => 27,  131 => 26,  124 => 24,  119 => 21,  113 => 19,  107 => 17,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title 'Agence lorem ipsum' %}

{% block body %}
  <div class=\"jumbotron text-center\">
    <h1>Agence lorem ipsum</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut cumque dolore error expedita itaque iure iusto magni, molestiae numquam omnis provident quae repellat sint soluta tempora unde voluptate voluptatibus.</p>
  </div>

  <div class=\"container\">
    <h2>Les derniers biens</h2>
    <div class=\"row flex\">
      {% for property in properties %}
        <div class=\"col-3\">
          {% if property.picture %}
            <img src=\"{{ vich_uploader_asset(property.picture, 'imageFile') | imagine_filter('thumb') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
          {% else %}
            <img src=\"{{ '/images/properties/empty.jpg' | imagine_filter('thumb') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
          {% endif %}
          <div class=\"card\">
            <div class=\"card-body\">
              <h5 class=\"card-title\">
                <a href=\"{{ path('property.show', {id: property.id, slug: property.slug}) }}\">{{ property.title }}</a>
              </h5>
              <p class=\"card-text\">{{ property.city }} ({{ property.postalCode }})</p>
              <div class=\"text-primary\" style=\"font-weight: bold;font-size: 2rem;\">{{ property.formattedPrice }} €</div>
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}
", "pages/home.html.twig", "/home/diouf/projet/php/symfony/masuperagence/Symfony4/templates/pages/home.html.twig");
    }
}
