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

/* produit/fanproduit.html.twig */
class __TwigTemplate_65f5e6139bc1b0f799242ad5fb127e82b1258341e78e085c770387d9b1019f65 extends Template
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
        return "fan.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/fanproduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/fanproduit.html.twig"));

        $this->parent = $this->loadTemplate("fan.html.twig", "produit/fanproduit.html.twig", 1);
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

        echo "List Produit";
        
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
        echo "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <h1>List Produit </h1>

            <div class=\"ritekhela-main-content\">
                <div class=\"ritekhela-main-section ritekhela-fixture-list-full\">
                    <div class=\"container\">
                        <div class=\"row\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 15
            echo "                            <!--// Full Section //-->
                            <div class=\"col-md-12\">
                                <!--// Gallery //-->
                                <div class=\"ritekhela-gallery ritekhela-gallery-view1\">
                                    <ul class=\"row\">
                                        <li class=\"col-md-12\">
                                            <figure>
                                                <a data-fancybox-group=\"group\" href=\" ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 22)]), "html", null, true);
            echo " \"class=\"dropdown-item border-radius-md\"> <img style=\"width: 500px \" height=\"500\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 22))), "html", null, true);
            echo " \"> <i class=\"fa fa-plus ritekhela-bgcolor\"></i> </a>
                                                <figcaption>

                                                </figcaption>
                                            </figure>
                                            <h2>nom:";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomP", [], "any", false, false, false, 27), "html", null, true);
            echo "</h2>
                                            <h2>prix:";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 28), "html", null, true);
            echo "</h2>
                                            <h2>categorie:";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 29), "html", null, true);
            echo "</h2>
                                            <h2><button class=\"ritekhela-banner-btn\" id=\"click";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 30), "html", null, true);
            echo "\" onclick=\"\">QR</button></h2>
                                           <li class=\"add-cart active\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">Add to cart</a></li>



                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script>
        ";
            // line 44
            if (array_key_exists("qrCode", $context)) {
                // line 45
                echo "
        \$('#click";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 46), "html", null, true);
                echo "').on('click',function (){
            ";
                // line 47
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "uri", [], "any", false, false, false, 47), ("http://localhost/piweb/public/index.php/produit/qr/" . twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 47))))) {
                    // line 48
                    echo "            window.location.replace(\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qr", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 48)]), "html", null, true);
                    echo "\");
            ";
                }
                // line 50
                echo "            Swal.fire({
                title: 'Connect Sport',
                text: 'scan this qr to view infos',
                imageUrl: '";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 53, $this->source); })()), "html", null, true);
                echo "',
                imageWidth: 300,
                imageHeight: 300,
                imageAlt: 'Custom image',
            })

        })
        ";
            } else {
                // line 61
                echo "        window.location.replace(\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qr", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\");
        ";
            }
            // line 63
            echo "    </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/fanproduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 65,  192 => 63,  186 => 61,  175 => 53,  170 => 50,  164 => 48,  162 => 47,  158 => 46,  155 => 45,  153 => 44,  137 => 31,  133 => 30,  129 => 29,  125 => 28,  121 => 27,  111 => 22,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'fan.html.twig' %}

{% block title %}List Produit{% endblock %}

{% block body %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <h1>List Produit </h1>

            <div class=\"ritekhela-main-content\">
                <div class=\"ritekhela-main-section ritekhela-fixture-list-full\">
                    <div class=\"container\">
                        <div class=\"row\">
    {% for produit in produits %}
                            <!--// Full Section //-->
                            <div class=\"col-md-12\">
                                <!--// Gallery //-->
                                <div class=\"ritekhela-gallery ritekhela-gallery-view1\">
                                    <ul class=\"row\">
                                        <li class=\"col-md-12\">
                                            <figure>
                                                <a data-fancybox-group=\"group\" href=\" {{ path('app_commande_new', {'id': produit.idp}) }} \"class=\"dropdown-item border-radius-md\"> <img style=\"width: 500px \" height=\"500\" src=\"{{ asset('uploads/' ~  produit.image) }} \"> <i class=\"fa fa-plus ritekhela-bgcolor\"></i> </a>
                                                <figcaption>

                                                </figcaption>
                                            </figure>
                                            <h2>nom:{{ produit.nomP }}</h2>
                                            <h2>prix:{{ produit.prix }}</h2>
                                            <h2>categorie:{{ produit.categorie }}</h2>
                                            <h2><button class=\"ritekhela-banner-btn\" id=\"click{{produit.idp}}\" onclick=\"\">QR</button></h2>
                                           <li class=\"add-cart active\"><a href=\"{{path(\"cart_add\",{id:produit.idp})}}\">Add to cart</a></li>



                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script>
        {% if qrCode is defined %}

        \$('#click{{produit.idp}}').on('click',function (){
            {% if (app.request.uri != (\"http://localhost/piweb/public/index.php/produit/qr/\"~produit.idp)) %}
            window.location.replace(\"{{ path('qr', {'id': produit.idp})}}\");
            {% endif %}
            Swal.fire({
                title: 'Connect Sport',
                text: 'scan this qr to view infos',
                imageUrl: '{{ qrCode }}',
                imageWidth: 300,
                imageHeight: 300,
                imageAlt: 'Custom image',
            })

        })
        {% else %}
        window.location.replace(\"{{ path('qr', {'id': produit.idp})}}\");
        {% endif %}
    </script>
        {% endfor %}



{% endblock %}", "produit/fanproduit.html.twig", "C:\\wamp64\\www\\piweb\\templates\\produit\\fanproduit.html.twig");
    }
}
