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

/* produit/index.html.twig */
class __TwigTemplate_68564bcef647279939852b1419d24f34b42a42df2fe6602a14491394a245fb64 extends Template
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
            'search' => [$this, 'block_search'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("respo.html.twig", "produit/index.html.twig", 1);
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

        echo "Produit index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Produit index</h1>

    ";
        // line 10
        $this->displayBlock('search', $context, $blocks);
        // line 20
        echo "
    <button class=\"btn btn-primary dropdown-toggle me-1\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Tri
    </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\" style=\"margin: 0px;\">
        <a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("triNom");
        echo "\">TriParNom</a>
        <a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("triPrix");
        echo "\">TriParPrix</a>
    </div>
    <table id=\"t\" class=\"table\">
        <thead>
            <tr>

                <th>NomP</th>
                <th>Prix</th>
                <th>Categorie</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 41
            echo "            <tr>

                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomP", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
            
                 <td><img src=\"";
            // line 47
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 47)), "html", null, true);
            echo "\"  width=\"100\" height=\"100\"></td>
                <td>
                    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["idp" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 49)]), "html", null, true);
            echo "';\" role=\"button\"> Afficher

                    </button>
                    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["idp" => twig_get_attribute($this->env, $this->source, $context["produit"], "idp", [], "any", false, false, false, 52)]), "html", null, true);
            echo "';\" role=\"button\"> Modifier

                    </button>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>

        <tbody id=\"search\"></tbody>
    </table>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchProduit");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append(\"<tr>\");
                                \$('#t tbody#search').append(\"<td>\"+obj.nomP+\"</td>\");
                                \$('#t tbody#search').append(\"<td>\"+obj.prix+\"</td>\");
                                \$('#t tbody#search').append(\"<td>\"+obj.categorie+\"</td>\");

                                //var img = \"<img src='' />\";
                                var p=\"/uploads/\"+obj.image;
                                var img = \"<img src=\"+p+\" width='100' height='100'/>\";
                                \$('#t tbody#search').append(\" <td>\"+img+\"</td>\");

                                \$('#t tbody#search').append(\"<td><a href=\"+obj.idp+\">show</a> </br><a href=\"+obj.idp+\">edit</a></td>\");
                                \$('#t tbody#search').append(\"</tr>\");
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>



    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        echo "';\" role=\"button\"> Ajouter </button>
    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_list");
        echo "';\" role=\"button\"> PDF </button>
    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Produits_stats");
        echo "';\" role=\"button\"> Statistiques </button>

    ";
        // line 125
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 125, $this->source); })()));
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 11
        echo "        <li class=\"nav-item\">
            <h3>Search</h3>
            <form class=\"search-bar\">
                <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Enter keywords\">

            </form>

        </li>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 11,  268 => 10,  253 => 125,  248 => 123,  244 => 122,  240 => 121,  195 => 79,  177 => 63,  168 => 59,  156 => 52,  150 => 49,  145 => 47,  140 => 45,  136 => 44,  132 => 43,  128 => 41,  123 => 40,  106 => 26,  102 => 25,  95 => 20,  93 => 10,  89 => 8,  79 => 7,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'respo.html.twig' %}

{% block title %}Produit index{% endblock %}



{% block body %}
    <h1>Produit index</h1>

    {% block search %}
        <li class=\"nav-item\">
            <h3>Search</h3>
            <form class=\"search-bar\">
                <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Enter keywords\">

            </form>

        </li>
    {% endblock %}

    <button class=\"btn btn-primary dropdown-toggle me-1\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Tri
    </button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\" style=\"margin: 0px;\">
        <a class=\"dropdown-item\" href=\"{{ path('triNom') }}\">TriParNom</a>
        <a class=\"dropdown-item\" href=\"{{ path('triPrix') }}\">TriParPrix</a>
    </div>
    <table id=\"t\" class=\"table\">
        <thead>
            <tr>

                <th>NomP</th>
                <th>Prix</th>
                <th>Categorie</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody id=\"all\">
        {% for produit in produits %}
            <tr>

                <td>{{ produit.nomP }}</td>
                <td>{{ produit.prix }}</td>
                <td>{{ produit.categorie }}</td>
            
                 <td><img src=\"{{asset('uploads/') ~ produit.image}}\"  width=\"100\" height=\"100\"></td>
                <td>
                    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '{{ path('app_produit_show', {'idp': produit.idp}) }}';\" role=\"button\"> Afficher

                    </button>
                    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '{{ path('app_produit_edit', {'idp': produit.idp}) }}';\" role=\"button\"> Modifier

                    </button>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>

        <tbody id=\"search\"></tbody>
    </table>


    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
    </script>
    <script>
        \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est envoyée */
                    url : \"{{ path('searchProduit') }}\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'GET',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la zone de recherche et sera placée après l’url */
                    data: {
                        'searchValue' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$('#t tbody#search').empty();
                            \$.each(JSON.parse(retour), function(i, obj) {
                                \$('#t tbody#all').hide();
                                \$('#t tbody#search').append(\"<tr>\");
                                \$('#t tbody#search').append(\"<td>\"+obj.nomP+\"</td>\");
                                \$('#t tbody#search').append(\"<td>\"+obj.prix+\"</td>\");
                                \$('#t tbody#search').append(\"<td>\"+obj.categorie+\"</td>\");

                                //var img = \"<img src='' />\";
                                var p=\"/uploads/\"+obj.image;
                                var img = \"<img src=\"+p+\" width='100' height='100'/>\";
                                \$('#t tbody#search').append(\" <td>\"+img+\"</td>\");

                                \$('#t tbody#search').append(\"<td><a href=\"+obj.idp+\">show</a> </br><a href=\"+obj.idp+\">edit</a></td>\");
                                \$('#t tbody#search').append(\"</tr>\");
                            });
                        }
                        else
                        {
                            \$('#t tbody#all').show();
                            \$('#t tbody#search').empty();
                            \$('#t tbody#search').fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
    </script>



    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '{{ path('app_produit_new') }}';\" role=\"button\"> Ajouter </button>
    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '{{ path('produit_list') }}';\" role=\"button\"> PDF </button>
    <button class=\"btn btn-outline-primary\" type=\"submit\" onclick=\"window.location.href = '{{ path('Produits_stats') }}';\" role=\"button\"> Statistiques </button>

    {{ knp_pagination_render(produits) }}



{% endblock %}
", "produit/index.html.twig", "C:\\wamp64\\www\\piweb\\templates\\produit\\index.html.twig");
    }
}
