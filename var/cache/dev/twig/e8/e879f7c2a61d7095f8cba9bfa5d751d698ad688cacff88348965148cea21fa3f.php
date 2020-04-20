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

/* property/show.html.twig */
class __TwigTemplate_56b10c441bdbb2002b2baf1b507be819ff71d028c5288f6f67faf38ac36f9dbc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "property/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "  <div class=\"jumbotron\">
    <div class=\"container\">

      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <div class=\"alert alert-success\">
          ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
      ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "valid", [], "any", false, false, false, 15)) {
            // line 16
            echo "        <div class=\"alert alert-danger\">
          Erreur je ne sais pas quoi
        </div>
      ";
        }
        // line 20
        echo "
      <div class=\"row\">
        <div class=\"col-md-8\">
          ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 23, $this->source); })()), "picture", [], "any", false, false, false, 23)) {
            // line 24
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 24, $this->source); })()), "picture", [], "any", false, false, false, 24), "imageFile"), "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
          ";
        } else {
            // line 26
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter("/images/properties/empty.jpg", "medium"), "html", null, true);
            echo "\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
          ";
        }
        // line 28
        echo "        </div>
        <div class=\"col-md-4\">
          <h1>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
          <h2>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 31, $this->source); })()), "rooms", [], "any", false, false, false, 31), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 31, $this->source); })()), "surface", [], "any", false, false, false, 31), "html", null, true);
        echo " m²</h2>
          <div class=\"text-primary\" style=\"font-size: 4rem;font-weight: bold;\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 32, $this->source); })()), "formattedPrice", [], "any", false, false, false, 32), "html", null, true);
        echo " €</div>
          <a href=\"#\" class=\"btn btn-primary\" id=\"contactButton\"";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "submitted", [], "any", false, false, false, 33)) {
            echo " style=\"display: none;\"";
        }
        echo " >Contacter l'agence</a>
          <div id=\"contactForm\" class=\"mt-4\" ";
        // line 34
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "submitted", [], "any", false, false, false, 34)) {
            echo " style=\"display: none;\"";
        }
        echo ">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
            <div class=\"row align-items-end\">
              <div class=\"col\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "firstname", [], "any", false, false, false, 37), 'row');
        echo "</div>
              <div class=\"col\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "lastname", [], "any", false, false, false, 38), 'row');
        echo "</div>
            </div>
            <div class=\"row align-items-end\">
              <div class=\"col\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "phone", [], "any", false, false, false, 41), 'row');
        echo "</div>
              <div class=\"col\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'row');
        echo "</div>
            </div>
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'rest');
        echo "
            <div class=\"form-group\">
              <button class=\"btn btn-primary\">Envoyer</button>
            </div>
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"container mt-4\">
    <p>
      ";
        // line 56
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "html", null, true));
        echo "
    </p>

    <div class=\"row\">
      <div class=\"col-md-8\">
        <h2>Caractéristiques</h2>
        <table class=\"table table-striped\">
          <tr>
            <td>Surface habitable</td>
            <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 65, $this->source); })()), "surface", [], "any", false, false, false, 65), "html", null, true);
        echo " m²</td>
          </tr>
          <tr>
            <td>Pièces</td>
            <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 69, $this->source); })()), "rooms", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>Chambres</td>
            <td>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 73, $this->source); })()), "bedrooms", [], "any", false, false, false, 73), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>Etage</td>
            <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 77, $this->source); })()), "floor", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
          </tr>
          <tr>
            <td>Chauffage</td>
            <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 81, $this->source); })()), "heatType", [], "any", false, false, false, 81), "html", null, true);
        echo "</td>
          </tr>
        </table>
      </div>
      <div class=\"col-md-4\">
        <h2>Spécificités</h2>
        <ul class=\"list-group\">
          ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 88, $this->source); })()), "options", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 89
            echo "          <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </ul>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "property/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 91,  265 => 89,  261 => 88,  251 => 81,  244 => 77,  237 => 73,  230 => 69,  223 => 65,  211 => 56,  200 => 48,  193 => 44,  188 => 42,  184 => 41,  178 => 38,  174 => 37,  169 => 35,  163 => 34,  157 => 33,  153 => 32,  147 => 31,  143 => 30,  139 => 28,  133 => 26,  127 => 24,  125 => 23,  120 => 20,  114 => 16,  112 => 15,  109 => 14,  100 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title property.title %}

{% block body %}
  <div class=\"jumbotron\">
    <div class=\"container\">

      {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
          {{ message }}
        </div>
      {% endfor %}

      {% if not form.vars.valid %}
        <div class=\"alert alert-danger\">
          Erreur je ne sais pas quoi
        </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-8\">
          {% if property.picture %}
            <img src=\"{{ vich_uploader_asset(property.picture, 'imageFile') | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
          {% else %}
            <img src=\"{{ '/images/properties/empty.jpg' | imagine_filter('medium') }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\">
          {% endif %}
        </div>
        <div class=\"col-md-4\">
          <h1>{{ property.title }}</h1>
          <h2>{{ property.rooms }} pièces - {{ property.surface }} m²</h2>
          <div class=\"text-primary\" style=\"font-size: 4rem;font-weight: bold;\">{{ property.formattedPrice }} €</div>
          <a href=\"#\" class=\"btn btn-primary\" id=\"contactButton\"{% if form.vars.submitted %} style=\"display: none;\"{% endif %} >Contacter l'agence</a>
          <div id=\"contactForm\" class=\"mt-4\" {% if not form.vars.submitted %} style=\"display: none;\"{% endif %}>
            {{ form_start(form) }}
            <div class=\"row align-items-end\">
              <div class=\"col\">{{ form_row(form.firstname) }}</div>
              <div class=\"col\">{{ form_row(form.lastname) }}</div>
            </div>
            <div class=\"row align-items-end\">
              <div class=\"col\">{{ form_row(form.phone) }}</div>
              <div class=\"col\">{{ form_row(form.email) }}</div>
            </div>
            {{ form_rest(form) }}
            <div class=\"form-group\">
              <button class=\"btn btn-primary\">Envoyer</button>
            </div>
            {{ form_end(form) }}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"container mt-4\">
    <p>
      {{ property.description | nl2br }}
    </p>

    <div class=\"row\">
      <div class=\"col-md-8\">
        <h2>Caractéristiques</h2>
        <table class=\"table table-striped\">
          <tr>
            <td>Surface habitable</td>
            <td>{{ property.surface }} m²</td>
          </tr>
          <tr>
            <td>Pièces</td>
            <td>{{ property.rooms }}</td>
          </tr>
          <tr>
            <td>Chambres</td>
            <td>{{ property.bedrooms }}</td>
          </tr>
          <tr>
            <td>Etage</td>
            <td>{{ property.floor }}</td>
          </tr>
          <tr>
            <td>Chauffage</td>
            <td>{{ property.heatType }}</td>
          </tr>
        </table>
      </div>
      <div class=\"col-md-4\">
        <h2>Spécificités</h2>
        <ul class=\"list-group\">
          {% for option in property.options %}
          <li class=\"list-group-item\">{{ option.name }}</li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>
{% endblock %}

", "property/show.html.twig", "/home/diouf/projet/php/symfony/masuperagence/Symfony4/templates/property/show.html.twig");
    }
}
