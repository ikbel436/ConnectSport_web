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

/* backtemplate.html.twig */
class __TwigTemplate_7b064721a682464abbc064da4f6bdd56aeb1911e4c0037e6130c7a54dc8aaacb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backtemplate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backtemplate.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bienvenue ConnectSport </title>

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/bootstrap.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/iconly/bold.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo " \">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/css/app.css"), "html", null, true);
        echo " \">
    <link rel=\"shortcut icon\" href=\" ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/images/favicon.svg"), "html", null, true);
        echo "\" type=\"image/x-icon\" >


</head>


<body>
<div id=\"app\">

    ";
        // line 29
        echo "    <div id=\"sidebar\" class=\"active\">
        <div class=\"sidebar-wrapper active\">
            <div>
                <div>
                    <h5 style=\"color:#18347d\" align=\"middle\"> CONNECT SPORT</h5>
                    <div class=\"d-flex justify-content-between\">
                        <div class=\"logo\" align=\"center\">
                            <a href=\"/dashboard\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/images/logo/connect (2).png"), "html", null, true);
        echo "\" alt=\"Logo\" srcset=\"\"></a>
                        </div>

                    </div>
                </div>

            </div>
            <div class=\"sidebar-menu\">
                <ul class=\"menu\" >
                    ";
        // line 46
        echo "                    <li
                            class=\"sidebar-item active \">
                        <a href=\"index.html\" class='sidebar-link'>
                            <i class=\"bi bi-grid-fill\"></i>
                            <span><h5 style=\"color:#d5dff8\">Menu</h5></span>
                        </a>
                    </li>
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi iconly-boldProfile \"></i>
                            <span><h6>Utilisateurs</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\"><h7>Afficher Utilisateur</h7></a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"component-badge.html\"><h7>Ajouter Utilisateur</h7></a>
                            </li>
                        </ul>
                    </li>
                    ";
        // line 69
        echo "                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi iconly-boldUser1 \"></i>
                            <span> <h6>Personnels d'équipe</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\"><h7>Afficher Equipe</h7></a>
                            </li>
                        </ul>
                    </li>

                    ";
        // line 83
        echo "                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi iconly-boldCalendar\"></i>
                            <span><h6>Evenements Sponsors</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\"><h7>Afficher Evenements</h7></a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"component-badge.html\"><h7>Afficher Sponsors</h7></a>
                            </li>
                        </ul>
                    </li>
                    ";
        // line 99
        echo "                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-basket-fill\"></i>
                            <span> <h6>Magasins et Produits</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_magasin_back");
        echo "\"><h7>Afficher Magasins</h7></a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_back");
        echo "\"><h7>Afficher Produits</h7></a>
                            </li>
                        </ul>
                    </li>
                    ";
        // line 115
        echo "                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-newspaper\"></i>
                            <span><h6>Actualités sportives</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\">Afficher Actualités</a>
                            </li>

                        </ul>
                    </li>
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi iconly-boldMessage\"></i>
                            <span><h6>Réclamations</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\">Afficher Réclamations</a>
                            </li>

                        </ul>
                    </li>

                    ";
        // line 143
        echo "                    <li
                            class=\"sidebar-item active \">
                        <a href=\"index.html\" class='sidebar-link'>
                            <i class=\"bi bi-grid-fill\"></i>
                            <span><h5 style=\"color:#d5dff8\">Pages</h5></span>
                        </a>
                    </li>
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-bar-chart-fill\"></i>
                            <span>Charts</span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"ui-chart-chartjs.html\">ChartJS</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"ui-chart-apexcharts.html\">Apexcharts</a>
                            </li>
                        </ul>
                    </li>

                    <li
                            class=\"sidebar-item  \">
                        <a href=\"ui-file-uploader.html\" class='sidebar-link'>
                            <i class=\"bi bi-cloud-arrow-up-fill\"></i>
                            <span>File Uploader</span>
                        </a>
                    </li>
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-map-fill\"></i>
                            <span>Maps</span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"ui-map-google-map.html\">Google Map</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"ui-map-jsvectormap.html\">JS Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li
                            class=\"sidebar-item  \">
                        <a href=\"application-email.html\" class='sidebar-link'>
                            <i class=\"bi bi-envelope-fill\"></i>
                            <span>Email Application</span>
                        </a>
                    </li>

                    <li
                            class=\"sidebar-item  \">
                        <a href=\"application-chat.html\" class='sidebar-link'>
                            <i class=\"bi bi-chat-dots-fill\"></i>
                            <span>Chat Application</span>
                        </a>
                    </li>

                    <li
                            class=\"sidebar-item  \">
                        <a href=\"application-gallery.html\" class='sidebar-link'>
                            <i class=\"bi bi-image-fill\"></i>
                            <span>Photo Gallery</span>
                        </a>
                    </li>

                    <li
                            class=\"sidebar-item  \">
                        <a href=\"application-checkout.html\" class='sidebar-link'>
                            <i class=\"bi bi-basket-fill\"></i>
                            <span>Checkout Page</span>
                        </a>
                    </li>

                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-person-badge-fill\"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"auth-login.html\">Login</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"auth-register.html\">Register</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"auth-forgot-password.html\">Forgot Password</a>
                            </li>
                        </ul>
                    </li>

                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-x-octagon-fill\"></i>
                            <span>Errors</span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"error-403.html\">403</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"error-404.html\">404</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"error-500.html\">500</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <button class=\"sidebar-toggler btn x\"><i data-feather=\"x\"></i></button>
        </div>
    </div>
    <div id=\"main\">
        <header class=\"mb-3\">
            <a href=\"#\" class=\"burger-btn d-block d-xl-none\">
                <i class=\"bi bi-justify fs-3\"></i>
            </a>
        </header>

        <div class=\"page-heading\">

        </div>
        <div class=\"page-content\">
            <div class=\"col-md-7 grid-margin stretch-card\">
                ";
        // line 275
        $this->displayBlock('body', $context, $blocks);
        // line 277
        echo "            </div>
        </div>


        <footer>
            <div class=\"footer clearfix mb-0 text-muted\">
                <div class=\"float-start\">

                </div>
                <div class=\"float-end\">
                    <p>Connect Sport<span class=\"text-danger\"><i class=\"bi bi-heart\"></i></span> by <a
                                href=\"http://ahmadsaugi.com\">Gold Miners</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/vendors/apexcharts/apexcharts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/assets/js/mazer.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 275
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 276
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backtemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 276,  408 => 275,  393 => 300,  388 => 298,  384 => 297,  379 => 295,  375 => 294,  356 => 277,  354 => 275,  220 => 143,  191 => 115,  184 => 110,  178 => 107,  168 => 99,  151 => 83,  136 => 69,  112 => 46,  100 => 36,  91 => 29,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  62 => 14,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Bienvenue ConnectSport </title>

    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('back/assets/css/bootstrap.css')}}\">

    <link rel=\"stylesheet\" href=\"{{ asset('back/assets/vendors/iconly/bold.css')}}\">

    <link rel=\"stylesheet\" href=\"{{ asset('back/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset('back/assets/vendors/bootstrap-icons/bootstrap-icons.css')}} \">
    <link rel=\"stylesheet\" href=\"{{ asset('back/assets/css/app.css')}} \">
    <link rel=\"shortcut icon\" href=\" {{  asset('back/assets/images/favicon.svg') }}\" type=\"image/x-icon\" >


</head>


<body>
<div id=\"app\">

    {# Sidebar partie #}
    <div id=\"sidebar\" class=\"active\">
        <div class=\"sidebar-wrapper active\">
            <div>
                <div>
                    <h5 style=\"color:#18347d\" align=\"middle\"> CONNECT SPORT</h5>
                    <div class=\"d-flex justify-content-between\">
                        <div class=\"logo\" align=\"center\">
                            <a href=\"/dashboard\"><img src=\"{{ asset('back/assets/images/logo/connect (2).png') }}\" alt=\"Logo\" srcset=\"\"></a>
                        </div>

                    </div>
                </div>

            </div>
            <div class=\"sidebar-menu\">
                <ul class=\"menu\" >
                    {#  <li class=\"sidebar-title\"> <h4>Menu</h4></li> #}
                    <li
                            class=\"sidebar-item active \">
                        <a href=\"index.html\" class='sidebar-link'>
                            <i class=\"bi bi-grid-fill\"></i>
                            <span><h5 style=\"color:#d5dff8\">Menu</h5></span>
                        </a>
                    </li>
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi iconly-boldProfile \"></i>
                            <span><h6>Utilisateurs</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\"><h7>Afficher Utilisateur</h7></a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"component-badge.html\"><h7>Ajouter Utilisateur</h7></a>
                            </li>
                        </ul>
                    </li>
                    {# Personnels #}
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi iconly-boldUser1 \"></i>
                            <span> <h6>Personnels d'équipe</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\"><h7>Afficher Equipe</h7></a>
                            </li>
                        </ul>
                    </li>

                    {# EVENEMENTS  #}
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi iconly-boldCalendar\"></i>
                            <span><h6>Evenements Sponsors</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\"><h7>Afficher Evenements</h7></a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"component-badge.html\"><h7>Afficher Sponsors</h7></a>
                            </li>
                        </ul>
                    </li>
                    {# Magasin Produits #}
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-basket-fill\"></i>
                            <span> <h6>Magasins et Produits</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"{{ path('app_magasin_back') }}\"><h7>Afficher Magasins</h7></a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"{{ path('app_produit_back') }}\"><h7>Afficher Produits</h7></a>
                            </li>
                        </ul>
                    </li>
                    {# Actualités #}
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-newspaper\"></i>
                            <span><h6>Actualités sportives</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\">Afficher Actualités</a>
                            </li>

                        </ul>
                    </li>
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi iconly-boldMessage\"></i>
                            <span><h6>Réclamations</h6></span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"/personne/new\">Afficher Réclamations</a>
                            </li>

                        </ul>
                    </li>

                    {# Pages fin---gestion #}
                    <li
                            class=\"sidebar-item active \">
                        <a href=\"index.html\" class='sidebar-link'>
                            <i class=\"bi bi-grid-fill\"></i>
                            <span><h5 style=\"color:#d5dff8\">Pages</h5></span>
                        </a>
                    </li>
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-bar-chart-fill\"></i>
                            <span>Charts</span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"ui-chart-chartjs.html\">ChartJS</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"ui-chart-apexcharts.html\">Apexcharts</a>
                            </li>
                        </ul>
                    </li>

                    <li
                            class=\"sidebar-item  \">
                        <a href=\"ui-file-uploader.html\" class='sidebar-link'>
                            <i class=\"bi bi-cloud-arrow-up-fill\"></i>
                            <span>File Uploader</span>
                        </a>
                    </li>
                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-map-fill\"></i>
                            <span>Maps</span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"ui-map-google-map.html\">Google Map</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"ui-map-jsvectormap.html\">JS Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li
                            class=\"sidebar-item  \">
                        <a href=\"application-email.html\" class='sidebar-link'>
                            <i class=\"bi bi-envelope-fill\"></i>
                            <span>Email Application</span>
                        </a>
                    </li>

                    <li
                            class=\"sidebar-item  \">
                        <a href=\"application-chat.html\" class='sidebar-link'>
                            <i class=\"bi bi-chat-dots-fill\"></i>
                            <span>Chat Application</span>
                        </a>
                    </li>

                    <li
                            class=\"sidebar-item  \">
                        <a href=\"application-gallery.html\" class='sidebar-link'>
                            <i class=\"bi bi-image-fill\"></i>
                            <span>Photo Gallery</span>
                        </a>
                    </li>

                    <li
                            class=\"sidebar-item  \">
                        <a href=\"application-checkout.html\" class='sidebar-link'>
                            <i class=\"bi bi-basket-fill\"></i>
                            <span>Checkout Page</span>
                        </a>
                    </li>

                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-person-badge-fill\"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"auth-login.html\">Login</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"auth-register.html\">Register</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"auth-forgot-password.html\">Forgot Password</a>
                            </li>
                        </ul>
                    </li>

                    <li
                            class=\"sidebar-item  has-sub\">
                        <a  class='sidebar-link'>
                            <i class=\"bi bi-x-octagon-fill\"></i>
                            <span>Errors</span>
                        </a>
                        <ul class=\"submenu \">
                            <li class=\"submenu-item \">
                                <a href=\"error-403.html\">403</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"error-404.html\">404</a>
                            </li>
                            <li class=\"submenu-item \">
                                <a href=\"error-500.html\">500</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <button class=\"sidebar-toggler btn x\"><i data-feather=\"x\"></i></button>
        </div>
    </div>
    <div id=\"main\">
        <header class=\"mb-3\">
            <a href=\"#\" class=\"burger-btn d-block d-xl-none\">
                <i class=\"bi bi-justify fs-3\"></i>
            </a>
        </header>

        <div class=\"page-heading\">

        </div>
        <div class=\"page-content\">
            <div class=\"col-md-7 grid-margin stretch-card\">
                {% block body %}
                {% endblock %}
            </div>
        </div>


        <footer>
            <div class=\"footer clearfix mb-0 text-muted\">
                <div class=\"float-start\">

                </div>
                <div class=\"float-end\">
                    <p>Connect Sport<span class=\"text-danger\"><i class=\"bi bi-heart\"></i></span> by <a
                                href=\"http://ahmadsaugi.com\">Gold Miners</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src=\"{{ asset('back/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}\"></script>
<script src=\"{{ asset('back/assets/js/bootstrap.bundle.min.js')}}\"></script>

<script src=\"{{ asset('back/assets/vendors/apexcharts/apexcharts.js')}}\"></script>
<script src=\"{{ asset('back/assets/js/pages/dashboard.js')}}\"></script>

<script src=\"{{ asset('back/assets/js/mazer.js')}}\"></script>
</body>

</html>
", "backtemplate.html.twig", "C:\\wamp64\\www\\piweb\\templates\\backtemplate.html.twig");
    }
}
