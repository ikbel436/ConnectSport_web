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

/* produit/new.html.twig */
class __TwigTemplate_717781ca615042df9df4bf8c7d9e4c4c8bd6459f26015dd934638e412fe0c642 extends Template
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
        return "respo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/new.html.twig"));

        $this->parent = $this->loadTemplate("respo.html.twig", "produit/new.html.twig", 1);
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

        echo "New Produit";
        
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
        echo "






    <h1>Create new Produit</h1>


        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "text-start"]]);
        echo "


    <div class=\"input-group input-group-outline my-3\">

               <label class=\"form-label\">Nom Produit</label>
               ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nomP", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nomP", [], "any", false, false, false, 23), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "

            </div>

    <div class=\"input-group input-group-outline my-3\">

        <label class=\"form-label\">Prix</label>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prix", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "

    </div>
    <label class=\"form-label\"><h5>Image</h5></label>
    <div class=\"input-group input-group-outline my-3\">


        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "image", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "btn bg-gradient-primary w-auto me-2"]]);
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "image", [], "any", false, false, false, 39), 'errors', ["attr" => ["class" => "btn bg-gradient-primary w-auto me-2"]]);
        echo "


    </div>

    <label class=\"form-label\"><h5>Categorie</h5></label>
    <div class=\"input-group input-group-outline my-3\">


        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "categorie", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "btn bg-gradient-primary dropdown-toggle"]]);
        echo "
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "categorie", [], "any", false, false, false, 49), 'errors', ["attr" => ["class" => "btn bg-gradient-primary dropdown-toggle"]]);
        echo "

    </div>

    <label class=\"form-label\"><h5>Magasin</h5></label>
    <div class=\"input-group input-group-outline my-3\">


        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "idm", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "btn bg-gradient-primary dropdown-toggle"]]);
        echo "
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "idm", [], "any", false, false, false, 58), 'errors', ["attr" => ["class" => "btn bg-gradient-primary dropdown-toggle"]]);
        echo "

    </div>


        <div class=\"text-center\">
            <button class=\"btn bg-gradient-primary my-4 mb-2\">";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 64, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        </div>
        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "



    <a  class=\"btn bg-gradient-primary my-4 mb-2\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        echo "\">back to list</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 70,  186 => 66,  181 => 64,  172 => 58,  168 => 57,  157 => 49,  153 => 48,  141 => 39,  137 => 38,  127 => 31,  123 => 30,  113 => 23,  109 => 22,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'respo.html.twig' %}

{% block title %}New Produit{% endblock %}

{% block body %}







    <h1>Create new Produit</h1>


        {{ form_start(form,{attr:{novalidate:'novalidate','class':'text-start'}}) }}


    <div class=\"input-group input-group-outline my-3\">

               <label class=\"form-label\">Nom Produit</label>
               {{ form_widget(form.nomP,{attr:{'class':'form-control'}}) }}
                {{ form_errors(form.nomP,{attr:{'class':'form-control'}}) }}

            </div>

    <div class=\"input-group input-group-outline my-3\">

        <label class=\"form-label\">Prix</label>
        {{ form_widget(form.prix,{attr:{'class':'form-control'}}) }}
        {{ form_errors(form.prix,{attr:{'class':'form-control'}}) }}

    </div>
    <label class=\"form-label\"><h5>Image</h5></label>
    <div class=\"input-group input-group-outline my-3\">


        {{ form_widget(form.image,{attr:{'class':'btn bg-gradient-primary w-auto me-2'}}) }}
        {{ form_errors(form.image,{attr:{'class':'btn bg-gradient-primary w-auto me-2'}}) }}


    </div>

    <label class=\"form-label\"><h5>Categorie</h5></label>
    <div class=\"input-group input-group-outline my-3\">


        {{ form_widget(form.categorie,{attr:{'class':'btn bg-gradient-primary dropdown-toggle'}}) }}
        {{ form_errors(form.categorie,{attr:{'class':'btn bg-gradient-primary dropdown-toggle'}}) }}

    </div>

    <label class=\"form-label\"><h5>Magasin</h5></label>
    <div class=\"input-group input-group-outline my-3\">


        {{ form_widget(form.idm,{attr:{'class':'btn bg-gradient-primary dropdown-toggle'}}) }}
        {{ form_errors(form.idm,{attr:{'class':'btn bg-gradient-primary dropdown-toggle'}}) }}

    </div>


        <div class=\"text-center\">
            <button class=\"btn bg-gradient-primary my-4 mb-2\">{{ button_label|default('Save') }}</button>
        </div>
        {{ form_end(form) }}



    <a  class=\"btn bg-gradient-primary my-4 mb-2\" href=\"{{ path('app_produit_index') }}\">back to list</a>
{% endblock %}
", "produit/new.html.twig", "C:\\wamp64\\www\\piweb\\templates\\produit\\new.html.twig");
    }
}
