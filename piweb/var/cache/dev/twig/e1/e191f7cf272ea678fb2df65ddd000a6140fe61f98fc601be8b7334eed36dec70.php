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

/* front/produitfrontdetail.html.twig */
class __TwigTemplate_f6026d3becc0f2de298ca5436421eb8a281f49a06d38adb4733eda4f5cb49eae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/produitfrontdetail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/produitfrontdetail.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/produitfrontdetail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"body_bg\">
        <!--::header part start::-->
        <header class=\"main_menu single_page_menu\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-12\">
                        <nav class=\"navbar navbar-expand-lg navbar-light\">
                            <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"img/logo.png\" alt=\"logo\"> </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"menu_icon\"><i class=\"fas fa-bars\"></i></span>
                            </button>

                            <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                                <ul class=\"navbar-nav\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("display_front");
        echo "\">Home</a>
                                        
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ev_front_aff");
        echo "\">Event</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"team.html\">team</a>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">
                                            Blog
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <a class=\"dropdown-item\" href=\"blog.html\"> blog</a>
                                            <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown1\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">
                                            pages
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
                                            <a class=\"dropdown-item\" href=\"elements.html\">Elements</a>
                                        </div>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <a href=\"#\" class=\"btn_1 d-none d-sm-block\">Join Now</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class=\"banner_part\">
            <div class=\"container\">
                  <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page pt-60 pb-55\">
                <div class=\"container\">
             

                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"banner_text\">
                            <div class=\"banner_text_iner\">
                                <h1>Best Highlights
                                    of the Latest</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Quis ipsum </p>
                                <a href=\"#\" class=\"btn_1\">Watch Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->
        <div class=\"body-wrapper\">
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page pt-60 pb-55\">
                <div class=\"container\">
       
                        <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45\">
                <div class=\"container\">
                    <div class=\"row\">

                        <!-- Begin Li's Main Content Area -->
                        <div class=\"col-lg-9 order-lg-2 order-1\">
                            <div class=\"row li-main-content\">
                                <div class=\"col-lg-12\">
                                    <div class=\"li-blog-single-item pb-30\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"blog-details.html\"><img class=\"img-full\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 110, $this->source); })()), "affiche", [], "any", false, false, false, 110)), "html", null, true);
        echo "\"  height=\"350\"></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"#\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 114, $this->source); })()), "nom", [], "any", false, false, false, 114), "html", null, true);
        echo "</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-map-marker\"></i>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 116, $this->source); })()), "adresse", [], "any", false, false, false, 116), "html", null, true);
        echo "</a>
                                                    <a class=\"comment\" href=\"#desc_bas\"><i class=\"fa fa-comment-o\"></i> ";
        // line 117
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 117, $this->source); })())), "html", null, true);
        echo " Commentaires</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>DateDebut ";
        // line 118
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 118, $this->source); })()), "date", [], "any", false, false, false, 118), "Y-m-d H:i:s"), "html", null, true);
        echo "</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>DateFin ";
        // line 119
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 119, $this->source); })()), "Datefin", [], "any", false, false, false, 119), "Y-m-d H:i:s"), "html", null, true);
        echo "</a>
                                                </div>
                                                <p>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 121, $this->source); })()), "description", [], "any", false, false, false, 121), "html", null, true);
        echo "</p>
                                                <!-- Begin Blog Blockquote Area -->
                                                <div class=\"li-blog-blockquote\">
                                                    <blockquote>
                                                        <p>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 125, $this->source); })()), "longdesc", [], "any", false, false, false, 125), "html", null, true);
        echo "</p>
                                                    </blockquote>
                                                </div>
                                                <!-- Blog Blockquote Area End Here -->
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Begin Li's Blog Comment Section -->
                                    <div class=\"li-comment-section\" id=\"desc_bas\">
                                       
                                        <h3>";
        // line 137
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 137, $this->source); })())), "html", null, true);
        echo " Commentaires</h3>
                                         ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 139
            echo "                                        <ul>
                                            <li>
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product-details/user.png"), "html", null, true);
            echo "\" alt=\"User\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                        <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 146), "html", null, true);
            echo "</h5>
                                                   
                                                   <table >
                                                     <tr>
                                            <div class=\"comment-post-date\">
                                                        ";
            // line 151
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 151), "y-m-d-h:m:s"), "html", null, true);
            echo "
                                                    </div>
                                                     </tr>
                                                    <tr>
                                                    <br>
                                                  <p>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 156), "html", null, true);
            echo "</p>
                                                <hr>
                                                <br>
                                                </tr>
   
                                                    </table>
                                                       </div>                                             

                                                  
                                            </li>
                                           
                                        </ul>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                                    </div>
                                    <!-- Li's Blog Comment Section End Here -->
                                    <!-- Begin Blog comment Box Area -->
                                    <div class=\"li-blog-comment-wrapper\" >
                                    <br>
                                    <br>
                                        <h3>Laisse un commentaire</h3>
                                        <p>Votre adresse email ne sera pas publiée. Tous les champs sont requis </p>
                                        ";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 177, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                        
                                            <div class=\"comment-post-box\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12\">
                                                        <label>Commentaire</label>
                                                       
                                                        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 184, $this->source); })()), "contenu", [], "any", false, false, false, 184), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 185, $this->source); })()), "contenu", [], "any", false, false, false, 185), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                    </div>
                                                     <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Pseudo</label>
                                                        
                                                         ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 190, $this->source); })()), "Pseudo", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "coment-field"]]);
        echo "
                                                         ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 191, $this->source); })()), "Pseudo", [], "any", false, false, false, 191), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                    </div>
                                                    
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Email</label>
                                                        
                                                         ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 197, $this->source); })()), "email", [], "any", false, false, false, 197), 'widget', ["attr" => ["class" => "coment-field"]]);
        echo "
                                                         ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 198, $this->source); })()), "email", [], "any", false, false, false, 198), 'errors', ["attr" => ["class" => "mb-0"]]);
        echo "
                                                    </div>
                                                   
    
                                                    <div class=\"col-lg-12\">
                                                        <div class=\"coment-btn pt-30 pb-sm-30 pb-xs-30 f-left\">
                                                            
                                                            ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 205, $this->source); })()), "Envoyer", [], "any", false, false, false, 205), 'widget', ["attr" => ["class" => "li-btn-2"]]);
        echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        // line 210
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Commentaires_Form"]) || array_key_exists("Commentaires_Form", $context) ? $context["Commentaires_Form"] : (function () { throw new RuntimeError('Variable "Commentaires_Form" does not exist.', 210, $this->source); })()), 'form_end');
        echo "    
                                        
                                        
                                    </div>
                                    <!-- Blog comment Box Area End Here -->
                                </div>
                            </div>
                        </div>
                     
                        <!-- Li's Main Content Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Main Blog Page Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->         
        <!--::client logo part end::-->
        <section class=\"client_logo\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-12\">
                        <div class=\"client_logo_slider owl-carousel d-flex justify-content-between\">
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_1.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_2.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_3.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_4.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_5.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_1.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_2.png\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::client logo part end::-->

        <!-- about_us part start-->
        <section class=\"about_us section_padding\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"col-md-5 col-lg-6 col-xl-6\">
                        <div class=\"learning_img\">
                            <img src=\"img/about_img.png\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-md-7 col-lg-6 col-xl-5\">
                        <div class=\"about_us_text\">
                            <h2>Find out about us in history</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. </p>
                            <a href=\"#\" class=\"btn_1\">Install Now</a>
                            <a href=\"#\" class=\"btn_1\">Watch Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about_us part end-->

        <!--::about_us part start::-->
        <section class=\"live_stareams padding_bottom\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"col-md-2 offset-lg-2 offset-sm-1\">
                        
                    </div>
                    <div class=\"col-md-7 offset-sm-1\">
                        <div class=\"live_stareams_slide owl-carousel\">
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_1.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_2.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_1.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_2.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_1.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_2.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_1.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_2.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::about_us part end::-->

        <!-- use sasu part end-->
        <section class=\"Latest_War\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section_tittle text-center\">
                            <h2>Latest War Fight</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center align-items-center\">
                    <div class=\"col-lg-12\">
                        <div class=\"Latest_War_text\">
                            <div class=\"row justify-content-center align-items-center h-100\">
                                <div class=\"col-lg-6\">
                                    <div class=\"single_war_text text-center\">
                                        <img src=\"img/favicon.png\" alt=\"\">
                                        <h4>Open War chalange</h4>
                                        <p>27 june , 2020</p>
                                        <a href=\"#\">view fight</a>
                                        <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                            <img src=\"img/war_logo_1.png\" alt=\"\">
                                            <h2>190<span>vs</span>189</h2>
                                            <img src=\"img/war_logo_2.png\" alt=\"\">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"btn_2\">Watch Tutorial</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"latest_war_list\">
                            <div class=\"single_war_text\">
                                <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                    <img src=\"img/war_logo_1.png\" alt=\"\">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src=\"img/war_logo_2.png\" alt=\"\">
                                    <div class=\"war_date\">
                                        <a href=\"#\">27 june 2020</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single_war_text\">
                                <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                    <img src=\"img/war_logo_1.png\" alt=\"\">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src=\"img/war_logo_2.png\" alt=\"\">
                                    <div class=\"war_date\">
                                        <a href=\"#\">27 june 2020</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single_war_text\">
                                <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                    <img src=\"img/war_logo_1.png\" alt=\"\">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src=\"img/war_logo_2.png\" alt=\"\">
                                    <div class=\"war_date\">
                                        <a href=\"#\">27 june 2020</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single_war_text\">
                                <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                    <img src=\"img/war_logo_1.png\" alt=\"\">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src=\"img/war_logo_2.png\" alt=\"\">
                                    <div class=\"war_date\">
                                        <a href=\"#\">27 june 2020</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"Latest_War_text Latest_War_bg_1\">
                            <div class=\"row justify-content-center align-items-center h-100\">
                                <div class=\"col-lg-6\">
                                    <div class=\"single_war_text text-center\">
                                        <img src=\"img/favicon.png\" alt=\"\">
                                        <h4>Open War chalange</h4>
                                        <p>27 june , 2020</p>
                                        <a href=\"#\">view fight</a>
                                        <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                            <img src=\"img/war_logo_1.png\" alt=\"\">
                                            <h2>190<span>vs</span>189</h2>
                                            <img src=\"img/war_logo_2.png\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"btn_2\">Watch Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- use sasu part end-->

        <!-- gallery_part part start-->
        <section class=\"gallery_part section_padding\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-5\">
                        <div class=\"section_tittle text-center\">
                            <h2>All Fighter</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"gallery_part_item\">
                            <div class=\"grid\">
                                <div class=\"grid-sizer\"></div>
                                <a href=\"img/gallery/gallery_item_1.png\"
                                    class=\"grid-item bg_img img-gal grid-item--height-1\"
                                    style=\"background-image: url('img/gallery/gallery_item_1.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_2.png\" class=\"grid-item bg_img img-gal\"
                                    style=\"background-image: url('img/gallery/gallery_item_2.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_3.png\" class=\"grid-item bg_img img-gal\"
                                    style=\"background-image: url('img/gallery/gallery_item_3.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_5.png\"
                                    class=\"grid-item bg_img img-gal grid-item--height-2\"
                                    style=\"background-image: url('img/gallery/gallery_item_5.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_7.png\"
                                    class=\"grid-item bg_img img-gal grid-item--height-2\"
                                    style=\"background-image: url('img/gallery/gallery_item_7.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_6.png\"
                                    class=\"grid-item bg_img img-gal grid-item--width-1\"
                                    style=\"background-image: url('img/gallery/gallery_item_6.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_4.png\"
                                    class=\"grid-item bg_img img-gal sm_weight  grid-item--height-1\"
                                    style=\"background-image: url('img/gallery/gallery_item_4.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery_part part end-->

        <!-- use sasu part end-->
        <section class=\"upcomming_war\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section_tittle text-center\">
                            <h2>Upcoming Fighter</h2>
                        </div>
                    </div>
                </div>
                <div class=\"upcomming_war_iner\">
                    <div class=\"row justify-content-center align-items-center h-100\">
                        <div class=\"col-10 col-sm-5 col-lg-3\">
                            <div class=\"upcomming_war_counter text-center\">
                                <h2>Dark Dragon</h2>
                                <div id=\"timer\" class=\"d-flex justify-content-between\">
                                    <div id=\"days\"></div>
                                    <div id=\"hours\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- use sasu part end-->

        <!-- pricing part start-->
        <section class=\"pricing_part padding_top\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"section_tittle text-center\">
                            <h2>Pricing plans</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single_pricing_part\">
                            <p>Silver Package</p>
                            <h3>\$50.00</h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                            </ul>
                            <a href=\"#\" class=\"btn_2\">Choose Plane</a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single_pricing_part\">
                            <p>Silver Package</p>
                            <h3>\$60.00</h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                            </ul>
                            <a href=\"#\" class=\"btn_2\">Choose Plane</a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single_pricing_part\">
                            <p>Silver Package</p>
                            <h3>\$80.00</h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                            </ul>
                            <a href=\"#\" class=\"btn_2\">Choose Plane</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing part end-->

        <!--::footer_part start::-->
        <footer class=\"footer_part\">
            <div class=\"footer_top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"single_footer_part\">
                                <a href=\"index.html\" class=\"footer_logo_iner\"> <img src=\"img/logo.png\" alt=\"#\"> </a>
                                <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing
                                    days
                                    open
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"single_footer_part\">
                                <h4>Contact Info</h4>
                                <p>Address : Your address goes
                                    here, your demo address.
                                    Bangladesh.</p>
                                <p>Phone : +8880 44338899</p>
                                <p>Email : info@colorlib.com</p>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"single_footer_part\">
                                <h4>Important Link</h4>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"\"> WHMCS-bridge</a></li>
                                    <li><a href=\"\">Search Domain</a></li>
                                    <li><a href=\"\">My Account</a></li>
                                    <li><a href=\"\">Shopping Cart</a></li>
                                    <li><a href=\"\">Our Shop</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"single_footer_part\">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold
                                    bearing
                                    days
                                    open
                                </p>
                                <div id=\"mc_embed_signup\">
                                    <form target=\"_blank\"
                                        action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                        method=\"get\" class=\"subscribe_form relative mail_part\">
                                        <input type=\"email\" name=\"email\" id=\"newsletter-form-email\"
                                            placeholder=\"Email Address\" class=\"placeholder hide-on-focus\"
                                            onfocus=\"this.placeholder = ''\"
                                            onblur=\"this.placeholder = ' Email Address '\">
                                        <button type=\"submit\" name=\"submit\" id=\"newsletter-submit\"
                                            class=\"email_icon newsletter-submit button-contactForm\"><i
                                                class=\"far fa-paper-plane\"></i></button>
                                        <div class=\"mt-10 info\"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"copygight_text\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-8\">
                            <div class=\"copyright_text\">
                                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"footer_icon social_icon\">
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-facebook-f\"></i></a>
                                    </li>
                                    <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fas fa-globe\"></i></a></li>
                                    <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-behance\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/produitfrontdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 210,  348 => 205,  338 => 198,  334 => 197,  325 => 191,  321 => 190,  313 => 185,  309 => 184,  299 => 177,  289 => 169,  270 => 156,  262 => 151,  254 => 146,  247 => 142,  242 => 139,  238 => 138,  234 => 137,  219 => 125,  212 => 121,  207 => 119,  203 => 118,  199 => 117,  195 => 116,  190 => 114,  183 => 110,  94 => 24,  87 => 20,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block body %}
    <div class=\"body_bg\">
        <!--::header part start::-->
        <header class=\"main_menu single_page_menu\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-12\">
                        <nav class=\"navbar navbar-expand-lg navbar-light\">
                            <a class=\"navbar-brand\" href=\"index.html\"> <img src=\"img/logo.png\" alt=\"logo\"> </a>
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                                data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"menu_icon\"><i class=\"fas fa-bars\"></i></span>
                            </button>

                            <div class=\"collapse navbar-collapse main-menu-item\" id=\"navbarSupportedContent\">
                                <ul class=\"navbar-nav\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{url('display_front')}}\">Home</a>
                                        
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"{{url('ev_front_aff')}}\">Event</a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"team.html\">team</a>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">
                                            Blog
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <a class=\"dropdown-item\" href=\"blog.html\"> blog</a>
                                            <a class=\"dropdown-item\" href=\"single-blog.html\">Single blog</a>
                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"blog.html\" id=\"navbarDropdown1\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">
                                            pages
                                        </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">
                                            <a class=\"dropdown-item\" href=\"elements.html\">Elements</a>
                                        </div>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <a href=\"#\" class=\"btn_1 d-none d-sm-block\">Join Now</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->

        <!-- banner part start-->
        <section class=\"banner_part\">
            <div class=\"container\">
                  <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page pt-60 pb-55\">
                <div class=\"container\">
             

                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"banner_text\">
                            <div class=\"banner_text_iner\">
                                <h1>Best Highlights
                                    of the Latest</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Quis ipsum </p>
                                <a href=\"#\" class=\"btn_1\">Watch Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->
        <div class=\"body-wrapper\">
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page pt-60 pb-55\">
                <div class=\"container\">
       
                        <!-- Begin Body Wrapper -->
        <div class=\"body-wrapper\">
            <!-- Begin Li's Main Blog Page Area -->
            <div class=\"li-main-blog-page li-main-blog-details-page pt-60 pb-60 pb-sm-45 pb-xs-45\">
                <div class=\"container\">
                    <div class=\"row\">

                        <!-- Begin Li's Main Content Area -->
                        <div class=\"col-lg-9 order-lg-2 order-1\">
                            <div class=\"row li-main-content\">
                                <div class=\"col-lg-12\">
                                    <div class=\"li-blog-single-item pb-30\">
                                        <div class=\"li-blog-banner\">
                                            <a href=\"blog-details.html\"><img class=\"img-full\" src=\"{{asset('uploads/') ~ tab.affiche}}\"  height=\"350\"></a>
                                        </div>
                                        <div class=\"li-blog-content\">
                                            <div class=\"li-blog-details\">
                                                <h3 class=\"li-blog-heading pt-25\"><a href=\"#\">{{tab.nom}}</a></h3>
                                                <div class=\"li-blog-meta\">
                                                    <a class=\"author\" href=\"#\"><i class=\"fa fa-map-marker\"></i>{{tab.adresse}}</a>
                                                    <a class=\"comment\" href=\"#desc_bas\"><i class=\"fa fa-comment-o\"></i> {{comments | length}} Commentaires</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>DateDebut {{tab.date|date('Y-m-d H:i:s')}}</a>
                                                    <a class=\"post-time\" href=\"#\"><i class=\"fa fa-calendar\"></i>DateFin {{tab.Datefin|date('Y-m-d H:i:s')}}</a>
                                                </div>
                                                <p>{{tab.description}}</p>
                                                <!-- Begin Blog Blockquote Area -->
                                                <div class=\"li-blog-blockquote\">
                                                    <blockquote>
                                                        <p>{{tab.longdesc}}</p>
                                                    </blockquote>
                                                </div>
                                                <!-- Blog Blockquote Area End Here -->
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Begin Li's Blog Comment Section -->
                                    <div class=\"li-comment-section\" id=\"desc_bas\">
                                       
                                        <h3>{{comments | length}} Commentaires</h3>
                                         {% for comment in comments %}
                                        <ul>
                                            <li>
                                                <div class=\"author-avatar pt-15\">
                                                    <img src=\"{{asset('images/product-details/user.png')}}\" alt=\"User\">
                                                </div>
                                                <div class=\"comment-body pl-15\">
                                                        <span class=\"reply-btn pt-15 pt-xs-5\"><a href=\"#\">reply</a></span>
                                                    <h5 class=\"comment-author pt-15\">{{comment.pseudo}}</h5>
                                                   
                                                   <table >
                                                     <tr>
                                            <div class=\"comment-post-date\">
                                                        {{comment.createdAt | date('y-m-d-h:m:s')}}
                                                    </div>
                                                     </tr>
                                                    <tr>
                                                    <br>
                                                  <p>{{comment.contenu}}</p>
                                                <hr>
                                                <br>
                                                </tr>
   
                                                    </table>
                                                       </div>                                             

                                                  
                                            </li>
                                           
                                        </ul>
                                        {% endfor %}
                                    </div>
                                    <!-- Li's Blog Comment Section End Here -->
                                    <!-- Begin Blog comment Box Area -->
                                    <div class=\"li-blog-comment-wrapper\" >
                                    <br>
                                    <br>
                                        <h3>Laisse un commentaire</h3>
                                        <p>Votre adresse email ne sera pas publiée. Tous les champs sont requis </p>
                                        {{ form_start(Commentaires_Form,{'attr': {'novalidate': 'novalidate'}} ) }}
                                        
                                            <div class=\"comment-post-box\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-12\">
                                                        <label>Commentaire</label>
                                                       
                                                        {{ form_widget(Commentaires_Form.contenu, {'attr': {'class': 'form-control'}}) }}
                                                        {{ form_errors(Commentaires_Form.contenu,{'attr':{\"class\":\"mb-0\"}}) }}
                                                    </div>
                                                     <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Pseudo</label>
                                                        
                                                         {{ form_widget(Commentaires_Form.Pseudo, {'attr': {'class': 'coment-field'}}) }}
                                                         {{ form_errors(Commentaires_Form.Pseudo,{'attr':{\"class\":\"mb-0\"}}) }}
                                                    </div>
                                                    
                                                    <div class=\"col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20\">
                                                        <label>Email</label>
                                                        
                                                         {{ form_widget(Commentaires_Form.email, {'attr': {'class': 'coment-field'}}) }}
                                                         {{ form_errors(Commentaires_Form.email,{'attr':{\"class\":\"mb-0\"}}) }}
                                                    </div>
                                                   
    
                                                    <div class=\"col-lg-12\">
                                                        <div class=\"coment-btn pt-30 pb-sm-30 pb-xs-30 f-left\">
                                                            
                                                            {{ form_widget(Commentaires_Form.Envoyer, {'attr': {'class': 'li-btn-2'} }) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {{ form_end(Commentaires_Form) }}    
                                        
                                        
                                    </div>
                                    <!-- Blog comment Box Area End Here -->
                                </div>
                            </div>
                        </div>
                     
                        <!-- Li's Main Content Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Main Blog Page Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->         
        <!--::client logo part end::-->
        <section class=\"client_logo\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-12\">
                        <div class=\"client_logo_slider owl-carousel d-flex justify-content-between\">
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_1.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_2.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_3.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_4.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_5.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_1.png\" alt=\"\">
                            </div>
                            <div class=\"single_client_logo\">
                                <img src=\"img/client_logo/client_logo_2.png\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::client logo part end::-->

        <!-- about_us part start-->
        <section class=\"about_us section_padding\">
            <div class=\"container\">
                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"col-md-5 col-lg-6 col-xl-6\">
                        <div class=\"learning_img\">
                            <img src=\"img/about_img.png\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-md-7 col-lg-6 col-xl-5\">
                        <div class=\"about_us_text\">
                            <h2>Find out about us in history</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. </p>
                            <a href=\"#\" class=\"btn_1\">Install Now</a>
                            <a href=\"#\" class=\"btn_1\">Watch Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about_us part end-->

        <!--::about_us part start::-->
        <section class=\"live_stareams padding_bottom\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-between\">
                    <div class=\"col-md-2 offset-lg-2 offset-sm-1\">
                        
                    </div>
                    <div class=\"col-md-7 offset-sm-1\">
                        <div class=\"live_stareams_slide owl-carousel\">
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_1.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_2.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_1.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_2.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_1.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_2.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_1.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                            <div class=\"live_stareams_slide_img\">
                                <img src=\"img/live_streams_2.png\" alt=\"\">
                                <div class=\"extends_video\">
                                    <a id=\"play-video_1\" class=\"video-play-button popup-youtube\"
                                        href=\"https://www.youtube.com/watch?v=pBFQdxA-apI\">
                                        <span class=\"fas fa-play\"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::about_us part end::-->

        <!-- use sasu part end-->
        <section class=\"Latest_War\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section_tittle text-center\">
                            <h2>Latest War Fight</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center align-items-center\">
                    <div class=\"col-lg-12\">
                        <div class=\"Latest_War_text\">
                            <div class=\"row justify-content-center align-items-center h-100\">
                                <div class=\"col-lg-6\">
                                    <div class=\"single_war_text text-center\">
                                        <img src=\"img/favicon.png\" alt=\"\">
                                        <h4>Open War chalange</h4>
                                        <p>27 june , 2020</p>
                                        <a href=\"#\">view fight</a>
                                        <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                            <img src=\"img/war_logo_1.png\" alt=\"\">
                                            <h2>190<span>vs</span>189</h2>
                                            <img src=\"img/war_logo_2.png\" alt=\"\">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"btn_2\">Watch Tutorial</a>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"latest_war_list\">
                            <div class=\"single_war_text\">
                                <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                    <img src=\"img/war_logo_1.png\" alt=\"\">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src=\"img/war_logo_2.png\" alt=\"\">
                                    <div class=\"war_date\">
                                        <a href=\"#\">27 june 2020</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single_war_text\">
                                <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                    <img src=\"img/war_logo_1.png\" alt=\"\">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src=\"img/war_logo_2.png\" alt=\"\">
                                    <div class=\"war_date\">
                                        <a href=\"#\">27 june 2020</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single_war_text\">
                                <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                    <img src=\"img/war_logo_1.png\" alt=\"\">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src=\"img/war_logo_2.png\" alt=\"\">
                                    <div class=\"war_date\">
                                        <a href=\"#\">27 june 2020</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"single_war_text\">
                                <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                    <img src=\"img/war_logo_1.png\" alt=\"\">
                                    <h2>190<span>vs</span>189</h2>
                                    <img src=\"img/war_logo_2.png\" alt=\"\">
                                    <div class=\"war_date\">
                                        <a href=\"#\">27 june 2020</a>
                                        <p>Open War chalange</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"Latest_War_text Latest_War_bg_1\">
                            <div class=\"row justify-content-center align-items-center h-100\">
                                <div class=\"col-lg-6\">
                                    <div class=\"single_war_text text-center\">
                                        <img src=\"img/favicon.png\" alt=\"\">
                                        <h4>Open War chalange</h4>
                                        <p>27 june , 2020</p>
                                        <a href=\"#\">view fight</a>
                                        <div class=\"war_text_item d-flex justify-content-around align-items-center\">
                                            <img src=\"img/war_logo_1.png\" alt=\"\">
                                            <h2>190<span>vs</span>189</h2>
                                            <img src=\"img/war_logo_2.png\" alt=\"\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"#\" class=\"btn_2\">Watch Tutorial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- use sasu part end-->

        <!-- gallery_part part start-->
        <section class=\"gallery_part section_padding\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-xl-5\">
                        <div class=\"section_tittle text-center\">
                            <h2>All Fighter</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"gallery_part_item\">
                            <div class=\"grid\">
                                <div class=\"grid-sizer\"></div>
                                <a href=\"img/gallery/gallery_item_1.png\"
                                    class=\"grid-item bg_img img-gal grid-item--height-1\"
                                    style=\"background-image: url('img/gallery/gallery_item_1.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_2.png\" class=\"grid-item bg_img img-gal\"
                                    style=\"background-image: url('img/gallery/gallery_item_2.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_3.png\" class=\"grid-item bg_img img-gal\"
                                    style=\"background-image: url('img/gallery/gallery_item_3.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_5.png\"
                                    class=\"grid-item bg_img img-gal grid-item--height-2\"
                                    style=\"background-image: url('img/gallery/gallery_item_5.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_7.png\"
                                    class=\"grid-item bg_img img-gal grid-item--height-2\"
                                    style=\"background-image: url('img/gallery/gallery_item_7.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_6.png\"
                                    class=\"grid-item bg_img img-gal grid-item--width-1\"
                                    style=\"background-image: url('img/gallery/gallery_item_6.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href=\"img/gallery/gallery_item_4.png\"
                                    class=\"grid-item bg_img img-gal sm_weight  grid-item--height-1\"
                                    style=\"background-image: url('img/gallery/gallery_item_4.png')\">
                                    <div class=\"single_gallery_item\">
                                        <div class=\"single_gallery_item_iner\">
                                            <div class=\"gallery_item_text\">
                                                <i class=\"ti-zoom-in\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery_part part end-->

        <!-- use sasu part end-->
        <section class=\"upcomming_war\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section_tittle text-center\">
                            <h2>Upcoming Fighter</h2>
                        </div>
                    </div>
                </div>
                <div class=\"upcomming_war_iner\">
                    <div class=\"row justify-content-center align-items-center h-100\">
                        <div class=\"col-10 col-sm-5 col-lg-3\">
                            <div class=\"upcomming_war_counter text-center\">
                                <h2>Dark Dragon</h2>
                                <div id=\"timer\" class=\"d-flex justify-content-between\">
                                    <div id=\"days\"></div>
                                    <div id=\"hours\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- use sasu part end-->

        <!-- pricing part start-->
        <section class=\"pricing_part padding_top\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"section_tittle text-center\">
                            <h2>Pricing plans</h2>
                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single_pricing_part\">
                            <p>Silver Package</p>
                            <h3>\$50.00</h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                            </ul>
                            <a href=\"#\" class=\"btn_2\">Choose Plane</a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single_pricing_part\">
                            <p>Silver Package</p>
                            <h3>\$60.00</h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                            </ul>
                            <a href=\"#\" class=\"btn_2\">Choose Plane</a>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single_pricing_part\">
                            <p>Silver Package</p>
                            <h3>\$80.00</h3>
                            <ul>
                                <li>2GB Bandwidth</li>
                                <li>Two Account</li>
                                <li>15GB Storage</li>
                            </ul>
                            <a href=\"#\" class=\"btn_2\">Choose Plane</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing part end-->

        <!--::footer_part start::-->
        <footer class=\"footer_part\">
            <div class=\"footer_top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"single_footer_part\">
                                <a href=\"index.html\" class=\"footer_logo_iner\"> <img src=\"img/logo.png\" alt=\"#\"> </a>
                                <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing
                                    days
                                    open
                                </p>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"single_footer_part\">
                                <h4>Contact Info</h4>
                                <p>Address : Your address goes
                                    here, your demo address.
                                    Bangladesh.</p>
                                <p>Phone : +8880 44338899</p>
                                <p>Email : info@colorlib.com</p>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"single_footer_part\">
                                <h4>Important Link</h4>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"\"> WHMCS-bridge</a></li>
                                    <li><a href=\"\">Search Domain</a></li>
                                    <li><a href=\"\">My Account</a></li>
                                    <li><a href=\"\">Shopping Cart</a></li>
                                    <li><a href=\"\">Our Shop</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-3\">
                            <div class=\"single_footer_part\">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold
                                    bearing
                                    days
                                    open
                                </p>
                                <div id=\"mc_embed_signup\">
                                    <form target=\"_blank\"
                                        action=\"https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01\"
                                        method=\"get\" class=\"subscribe_form relative mail_part\">
                                        <input type=\"email\" name=\"email\" id=\"newsletter-form-email\"
                                            placeholder=\"Email Address\" class=\"placeholder hide-on-focus\"
                                            onfocus=\"this.placeholder = ''\"
                                            onblur=\"this.placeholder = ' Email Address '\">
                                        <button type=\"submit\" name=\"submit\" id=\"newsletter-submit\"
                                            class=\"email_icon newsletter-submit button-contactForm\"><i
                                                class=\"far fa-paper-plane\"></i></button>
                                        <div class=\"mt-10 info\"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"copygight_text\">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-8\">
                            <div class=\"copyright_text\">
                                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"ti-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div class=\"footer_icon social_icon\">
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-facebook-f\"></i></a>
                                    </li>
                                    <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fas fa-globe\"></i></a></li>
                                    <li><a href=\"#\" class=\"single_social_icon\"><i class=\"fab fa-behance\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--::footer_part end::-->
    </div>


{% endblock %}", "front/produitfrontdetail.html.twig", "C:\\wamp64\\www\\piweb\\templates\\front\\produitfrontdetail.html.twig");
    }
}
