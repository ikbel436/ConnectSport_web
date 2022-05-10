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

/* front/produitfront.html.twig */
class __TwigTemplate_71262c5f3c9f7327a23a6886bf07b54f6491f29f6b52f54e7abc91d2b2b2503b extends Template
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
        // line 2
        return "fan.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/produitfront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/produitfront.html.twig"));

        $this->parent = $this->loadTemplate("fan.html.twig", "front/produitfront.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Commande";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>




                            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 14
            echo "                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\"><img class=\"img-full\" src=\"";
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["produit"], "affiche", [], "any", false, false, false, 17)), "html", null, true);
            echo "\"  height=\"350\"  ></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></h3>
                                                <div class=\"li-blog-meta\">

                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> Commentaires</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>  ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>  ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>

                                                </div>

                                                <a class=\"read-more\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Read More...</a>
                                            </div>
                                            <button class=\"ritekhela-banner-btn\" id=\"click";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 32), "html", null, true);
            echo "\" onclick=\"\">infos</button>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    ";
            // line 37
            if (array_key_exists("qrCode", $context)) {
                // line 38
                echo "
                                    \$('#click";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 39), "html", null, true);
                echo "').on('click',function (){
                                        ";
                // line 40
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "uri", [], "any", false, false, false, 40), ("http://127.0.0.1:8000/tournoi/qr/" . twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 40))))) {
                    // line 41
                    echo "                                        window.location.replace(\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qr", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 41)]), "html", null, true);
                    echo "\");
                                        ";
                }
                // line 43
                echo "                                        Swal.fire({
                                            title: 'VES!',
                                            text: 'scan this qr to view infos',
                                            imageUrl: '";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "',
                                            imageWidth: 300,
                                            imageHeight: 300,
                                            imageAlt: 'Custom image',
                                        })

                                    })
                                    ";
            }
            // line 54
            echo "                                </script>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/produitfront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 56,  180 => 54,  169 => 46,  164 => 43,  158 => 41,  156 => 40,  152 => 39,  149 => 38,  147 => 37,  139 => 32,  134 => 30,  127 => 26,  123 => 25,  114 => 21,  105 => 17,  100 => 14,  96 => 13,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'fan.html.twig' %}

{% block title %}Commande{% endblock %}

{% block body %}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"//cdn.jsdelivr.net/npm/sweetalert2@11\"></script>




                            {% for produit  in tab %}
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"li-blog-single-item pb-25\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"{{path('app_commande_new',{id : produit.idp})}}\"><img class=\"img-full\" src=\"{{asset('uploads/') ~ produit.affiche}}\"  height=\"350\"  ></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"{{path('app_commande_new',{id : produit.idp })}}\">{{produit.nom}}</a></h3>
                                                <div class=\"li-blog-meta\">

                                                    <a class=\"comment\" href=\"#\"><i class=\"fa fa-comment-o\"></i> Commentaires</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>  {{produit.prix}}</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>  {{produit.prix}}</a>

                                                </div>

                                                <a class=\"read-more\" href=\"{{path('app_commande_new',{id : produit.idp })}}\">Read More...</a>
                                            </div>
                                            <button class=\"ritekhela-banner-btn\" id=\"click{{produit.idp}}\" onclick=\"\">infos</button>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    {% if qrCode is defined %}

                                    \$('#click{{produit.idp}}').on('click',function (){
                                        {% if (app.request.uri != (\"http://127.0.0.1:8000/tournoi/qr/\"~produit.idp)) %}
                                        window.location.replace(\"{{ path('qr', {'id': produit.idp})}}\");
                                        {% endif %}
                                        Swal.fire({
                                            title: 'VES!',
                                            text: 'scan this qr to view infos',
                                            imageUrl: '{{ qrCode }}',
                                            imageWidth: 300,
                                            imageHeight: 300,
                                            imageAlt: 'Custom image',
                                        })

                                    })
                                    {% endif %}
                                </script>
                                 {% endfor %}
  {% endblock %}", "front/produitfront.html.twig", "C:\\wamp64\\www\\piweb\\templates\\front\\produitfront.html.twig");
    }
}
