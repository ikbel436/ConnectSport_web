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

/* fan.html.twig */
class __TwigTemplate_74198d5c1a194069e48b339cf8bd2a9667c59e507fee9a469dfc9e798b04b29b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fan.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fan.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"zxx\">


<!-- index40:10-->
<head>

    <!-- meta tags -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
css/bootstrap.css"), "html", null, true);
        // line 16
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
css/fontawesome-all.css"), "html", null, true);
        // line 18
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
css/slick-slider.css"), "html", null, true);
        // line 20
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
css/fancybox.css"), "html", null, true);
        // line 22
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
css/smartmenus.css"), "html", null, true);
        // line 24
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
style.css"), "html", null, true);
        // line 26
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
css/color.css"), "html", null, true);
        // line 28
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
css/responsive.css"), "html", null, true);
        // line 30
        echo "\">

</head>

<body class=\"home\">
<div id=\"ritekhela-loader\">
    <div id=\"ritekhela-loader-inner\">
        <div id=\"ritekhela-shadow\"></div>
        <div id=\"ritekhela-box\"></div>
    </div>
</div>

<div class=\"ritekhela-wrapper\">

    <!--// Header //-->
    <header id=\"ritekhela-header\" class=\"ritekhela-header-one\">

        <!--// TopStrip //-->
        <div class=\"ritekhela-topstrip\">
            <div class=\"container\">
                <div class=\"row\">

                    <aside class=\"col-md-6\">
                        <strong>Latest News :</strong>
                        <div class=\"ritekhela-latest-news-slider\">
                            <div class=\"ritekhela-latest-news-slider-layer\">Welcome visitor you can Login or Create an Account </div>
                            <div class=\"ritekhela-latest-news-slider-layer\">While familiar with fellow European nation France Hareide. </div>
                        </div>
                    </aside>
                    <aside class=\"col-md-6\">
                        <ul class=\"ritekhela-user-strip\">
                            <li><a href=\"#\"><i class=\"fa fa-globe-asia\"></i> Support</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dollar-sign\"></i> Currency : USD</a></li>
                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ritekhelamodalcenter\"><i class=\"fa fa-user-alt\"></i> Login</a></li>
                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ritekhelamodalrg\"><i class=\"fa fa-sign-in-alt\"></i> Signup</a></li>
                        </ul>
                    </aside>

                </div>
            </div>
        </div>
        <!--// TopStrip //-->

        <!--// Main Header //-->
        <div class=\"ritekhela-main-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <a href=\"index-2.html\" class=\"ritekhela-logo\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
images/logo.png"), "html", null, true);
        // line 79
        echo " \"alt=\"\"></a>
                        <div class=\"ritekhela-right-section\">
                            <div class=\"ritekhela-navigation\">
                                    <span class=\"ritekhela-menu-link\">
                                        <span class=\"menu-bar\"></span>
                                        <span class=\"menu-bar\"></span>
                                        <span class=\"menu-bar\"></span>
                                    </span>
                                <nav id=\"main-nav\">
                                    <ul id=\"main-menu\" class=\"sm sm-blue\">
                                        <li class=\"active\"><a href=\"index-2.html\">Home</a></li>
                                        <li class=\"megamenu-wrap\"><a href=\"gallery-classic-3column.html\">Event</a>


                                        </li>
                                        <li><a href=\"player-medium-wlsb.html\">Players</a>

                                        </li>
                                        <li><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_fan");
        echo "\">Products</a>

                                        </li>
                                        <li><a href=\"blog-grid.html\">Our News</a>

                                        </li>
                                        <li><a href=\"shop-grid.html\">Our Shop</a>

                                        </li>
                                        <li><a href=\"contact-us.html\">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class=\"ritekhela-navsearch\">
                                <li><a href=\"#\" class=\"ritekhela-open-cart\"><i class=\"fab fa-opencart\"></i></a>
                                    <div class=\"ritekhela-cart-box\">
                                        <h2>You have 3 items in the cart</h2>
                                        <ul>
                                            <li>
                                                <figure><a href=\"#\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/cartbox-1.png"), "html", null, true);
        // line 117
        echo " \"alt=\"\"></a></figure>
                                                <div class=\"ritekhela-cartbox-text\">
                                                    <h6><a href=\"#\">Key Management Model The 60+ Models</a></h6>
                                                    <div class=\"ritekhela-rating\"><span class=\"ritekhela-rating-box half-width\"></span></div>
                                                    <span class=\"ritekhela-cartbox-price ritekhela-color-two\">\$35.99 <small>\$43.00</small></span>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><a href=\"#\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/cartbox-2.png"), "html", null, true);
        // line 126
        echo "\" alt=\"\"></a></figure>
                                                <div class=\"ritekhela-cartbox-text\">
                                                    <h6><a href=\"#\">Pyramid Principle: Logic Writing &amp; Thinking</a></h6>
                                                    <div class=\"ritekhela-rating\"><span class=\"ritekhela-rating-box half-width\"></span></div>
                                                    <span class=\"ritekhela-cartbox-price ritekhela-color-two\">\$21.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <h5>Subtotal <span class=\"ritekhela-color-two\">\$1343</span></h5>
                                        <div class=\"ritekhela-cart-link\"><a href=\"#\" class=\"ritekhela-cartbox-btn\">Go to Checkout</a></div>
                                    </div>
                                </li>
                                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ritekhelamodalsearch\"><i class=\"fa fa-search\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Header //-->

    </header>
    <!--// Header //-->

    <!--// Banner //-->
    <div class=\"ritekhela-banner-one\">

        <div class=\"ritekhela-banner-one-layer\">
            <span class=\"ritekhela-banner-transparent\"></span>
            <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/banner-2.jpg"), "html", null, true);
        // line 156
        echo "\" alt=\"\">
            <div class=\"ritekhela-banner-caption\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>We Are Developing <strong class=\"ritekhela-color\">The Soccer</strong> Be Our Partner</h1>
                            <div class=\"clearfix\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purueget aliquam libero.</p>
                            <div class=\"clearfix\"></div>
                            <a href=\"#\" class=\"ritekhela-banner-btn\">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"ritekhela-banner-one-layer\">
            <span class=\"ritekhela-banner-transparent\"></span>
            <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/banner-1.jpg"), "html", null, true);
        // line 174
        echo "\" alt=\"\">
            <div class=\"ritekhela-banner-caption\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>World Cup <strong class=\"ritekhela-color\">rivalries</strong> reprised</h1>
                            <div class=\"clearfix\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purueget aliquam libero.</p>
                            <div class=\"clearfix\"></div>
                            <a href=\"#\" class=\"ritekhela-banner-btn\">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--// Banner //-->

    <!--// Content //-->
    <div class=\"ritekhela-main-content\">

        <!--// Main Section //-->
        <div class=\"ritekhela-main-section ritekhela-fixture-slider-full\">
            ";
        // line 198
        $this->displayBlock('body', $context, $blocks);
        // line 200
        echo "
        </div>
        <!--// Main Section //-->

    </div>
    <!--// Content //-->

    <!--// Footer //-->
    <footer id=\"ritekhela-footer\" class=\"ritekhela-footer-one\">

        <!--// Footer Widget //-->
        <div class=\"ritekhela-footer-widget\">
            <div class=\"container\">
                <div class=\"row\">
                    <aside class=\"widget col-md-4 widget_about_info\">
                        <a href=\"index-2.html\"><img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
images/logo.png "), "html", null, true);
        // line 216
        echo "\"alt=\"\"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elUt ac malesuada ante.Sed gravida, ur quis tempus sollicitudin, tellus urna</p>
                        <div class=\"widget_about_info_social\">
                            <a href=\"#\" class=\"fab fa-facebook-f\"></a>
                            <a href=\"#\" class=\"fab fa-twitter\"></a>
                            <a href=\"#\" class=\"fab fa-dribbble\"></a>
                            <a href=\"#\" class=\"fab fa-linkedin-in\"></a>
                            <a href=\"#\" class=\"fab fa-youtube\"></a>
                        </div>
                        <ul>
                            <li><i class=\"fa fa-map-marker-alt\"></i> 9907 Salford road, east London Uk 2807</li>
                            <li><i class=\"fa fa-phone\"></i> (+92) 123 45 678 - 987 65 432</li>
                            <li><i class=\"fa fa-envelope\"></i> <a href=\"#\">info@example.com</a></li>
                        </ul>
                    </aside>
                    <aside class=\"widget col-md-4 widget_twitter_feeds\">
                        <div class=\"footer_widget_title\"> <h2>Twitter Feeds</h2> </div>
                        <ul>
                            <li>
                                <i class=\"fab fa-twitter\"></i>
                                <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href=\"index-2.html\" class=\"ritekhela-color\">https://t.co/XHrPAM4ANv</a></p>
                                <time datetime=\"2008-02-14 20:00\"><i class=\"fa fa-clock\"></i> 2 Hours Ago</time>
                            </li>
                            <li>
                                <i class=\"fab fa-twitter\"></i>
                                <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href=\"index-2.html\" class=\"ritekhela-color\">https://t.co/XHrPAM4ANv</a></p>
                                <time datetime=\"2008-02-14 20:00\"><i class=\"fa fa-clock\"></i> 2 Hours Ago</time>
                            </li>
                        </ul>
                    </aside>
                    <aside class=\"widget col-md-4 widget_gallery\">
                        <div class=\"footer_widget_title\"> <h2>Flicker Photos</h2> </div>
                        <ul>
                            <li><a data-fancybox-group=\"group\" href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-1.jpg"), "html", null, true);
        // line 250
        echo "\" class=\"fancybox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-1.jpg"), "html", null, true);
        // line 251
        echo "\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-1.jpg"), "html", null, true);
        // line 253
        echo "\" class=\"fancybox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-2.jpg "), "html", null, true);
        // line 254
        echo "\"alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-1.jpg "), "html", null, true);
        // line 256
        echo "\"class=\"fancybox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-3.jpg"), "html", null, true);
        // line 257
        echo "\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-1.jpg"), "html", null, true);
        // line 259
        echo "\" class=\"fancybox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-4.jpg"), "html", null, true);
        // line 260
        echo "\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-1.jpg"), "html", null, true);
        // line 262
        echo "\" class=\"fancybox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-5.jpg"), "html", null, true);
        // line 263
        echo "\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-1.jpg"), "html", null, true);
        // line 265
        echo "\" class=\"fancybox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-6.jpg"), "html", null, true);
        // line 266
        echo "\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-1.jpg"), "html", null, true);
        // line 268
        echo "\" class=\"fancybox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-7.jpg"), "html", null, true);
        // line 269
        echo "\"alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-1.jpg"), "html", null, true);
        // line 271
        echo "\" class=\"fancybox\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
extra-images/widget-gallery-8.jpg"), "html", null, true);
        // line 272
        echo "\" alt=\"\"></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <!--// Footer Widget //-->

        <!--// Footer CopyRight //-->
        <div class=\"ritekhela-copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <p><a href=\"https://www.templateshub.net\" target=\"_blank\">Templates Hub</a></p>
                        <a href=\"#\" class=\"ritekhela-back-top\"><i class=\"fa fa-angle-up\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer CopyRight //-->

    </footer>
    <!--// Footer //-->

</div>


<!--// Login ModalBox //-->
<div class=\"loginmodalbox modal fade\" id=\"ritekhelamodalcenter\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body ritekhela-bgcolor-two\">
                <h5 class=\"modal-title\">Login To Your Account</h5>
                <a href=\"#\" class=\"close ritekhela-bgcolor-two\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </a>
                <form class=\"loginmodalbox-search\">
                    <input type=\"text\" value=\"Enter User Name\" onblur=\"if(this.value == '') { this.value ='Enter User Name'; }\" onfocus=\"if(this.value =='Enter User Name') { this.value = ''; }\">
                    <input type=\"text\" value=\"Type Here Password\" onblur=\"if(this.value == '') { this.value ='Type Here Password'; }\" onfocus=\"if(this.value =='Type Here Password') { this.value = ''; }\">
                    <input type=\"submit\" value=\"Login Now\" class=\"ritekhela-bgcolor\">
                    <a href=\"#\" class=\"loginmodalbox-forget\">Forget Password?</a>
                </form>
                <div class=\"ritekhela-loginbox-social\">
                    <ul>
                        <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i> Facebook</a></li>
                        <li class=\"twitter\"><a href=\"#\"><i class=\"fab fa-twitter\"></i> Twitter</a></li>
                        <li class=\"linkedin\"><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i> Linkedin</a></li>
                        <li class=\"dribbble\"><a href=\"#\"><i class=\"fab fa-dribbble\"></i> Dribbble</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--// Login ModalBox //-->
<div class=\"loginmodalbox modal fade\" id=\"ritekhelamodalrg\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body ritekhela-bgcolor-two\">
                <h5 class=\"modal-title\">Sign Up Now</h5>
                <a href=\"#\" class=\"close ritekhela-bgcolor-two\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </a>
                <form class=\"loginmodalbox-search\">
                    <input type=\"text\" value=\"Enter User Name\" onblur=\"if(this.value == '') { this.value ='Enter User Name'; }\" onfocus=\"if(this.value =='Enter User Name') { this.value = ''; }\">
                    <input type=\"text\" value=\"Type Your Password\" onblur=\"if(this.value == '') { this.value ='Type Your Password'; }\" onfocus=\"if(this.value =='Type Your Password') { this.value = ''; }\">
                    <input type=\"text\" value=\"Confirm your password\" onblur=\"if(this.value == '') { this.value ='Confirm your password'; }\" onfocus=\"if(this.value =='Confirm your password') { this.value = ''; }\">
                    <input type=\"submit\" value=\"Sign Up\" class=\"ritekhela-bgcolor\">
                    <a href=\"#\" class=\"loginmodalbox-forget\">Forget Password?</a>
                </form>
                <div class=\"ritekhela-loginbox-social\">
                    <ul>
                        <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i> Facebook</a></li>
                        <li class=\"twitter\"><a href=\"#\"><i class=\"fab fa-twitter\"></i> Twitter</a></li>
                        <li class=\"linkedin\"><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i> Linkedin</a></li>
                        <li class=\"dribbble\"><a href=\"#\"><i class=\"fab fa-dribbble\"></i> Dribbble</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--// Search ModalBox //-->
<div class=\"loginmodalbox modal fade\" id=\"ritekhelamodalsearch\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body ritekhela-bgcolor-two\">
                <h5 class=\"modal-title\">Search Here</h5>
                <a href=\"#\" class=\"close ritekhela-bgcolor-two\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </a>
                <form>
                    <input type=\"text\" value=\"Search Here Now\" onblur=\"if(this.value == '') { this.value ='Search Here Now'; }\" onfocus=\"if(this.value =='Search Here Now') { this.value = ''; }\">
                    <input type=\"submit\" value=\"Search Now\" class=\"ritekhela-bgcolor\">
                </form>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/jquery.js"), "html", null, true);
        // line 377
        echo "\"></script>
<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/popper.min.js"), "html", null, true);
        // line 379
        echo "\"></script>
<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/bootstrap.min.js"), "html", null, true);
        // line 381
        echo "\"></script>
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/slick.slider.min.js"), "html", null, true);
        // line 383
        echo "\"></script>
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/fancybox.min.js"), "html", null, true);
        // line 385
        echo "\"></script>
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/isotope.min.js"), "html", null, true);
        // line 387
        echo "\"></script>
<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/smartmenus.min.js"), "html", null, true);
        // line 389
        echo "\"></script>
<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/progressbar.js"), "html", null, true);
        // line 391
        echo "\"></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/jquery.countdown.min.js"), "html", null, true);
        // line 393
        echo "\"></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fan/assets/
script/functions.js"), "html", null, true);
        // line 395
        echo "\"></script>
</body>


<!-- index40:10-->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 198
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 199
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 199,  610 => 198,  595 => 395,  592 => 394,  589 => 393,  586 => 392,  583 => 391,  580 => 390,  577 => 389,  574 => 388,  571 => 387,  568 => 386,  565 => 385,  562 => 384,  559 => 383,  556 => 382,  553 => 381,  550 => 380,  547 => 379,  544 => 378,  541 => 377,  538 => 376,  432 => 272,  428 => 271,  425 => 270,  422 => 269,  418 => 268,  415 => 267,  412 => 266,  408 => 265,  405 => 264,  402 => 263,  398 => 262,  395 => 261,  392 => 260,  388 => 259,  385 => 258,  382 => 257,  378 => 256,  375 => 255,  372 => 254,  368 => 253,  365 => 252,  362 => 251,  358 => 250,  355 => 249,  320 => 216,  317 => 215,  300 => 200,  298 => 198,  272 => 174,  269 => 173,  250 => 156,  247 => 155,  216 => 126,  213 => 125,  203 => 117,  200 => 116,  178 => 97,  158 => 79,  155 => 78,  105 => 30,  102 => 29,  99 => 28,  96 => 27,  93 => 26,  90 => 25,  87 => 24,  84 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"zxx\">


<!-- index40:10-->
<head>

    <!-- meta tags -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"{{asset('fan/assets/
css/bootstrap.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('fan/assets/
css/fontawesome-all.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('fan/assets/
css/slick-slider.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('fan/assets/
css/fancybox.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('fan/assets/
css/smartmenus.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('fan/assets/
style.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('fan/assets/
css/color.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('fan/assets/
css/responsive.css')}}\">

</head>

<body class=\"home\">
<div id=\"ritekhela-loader\">
    <div id=\"ritekhela-loader-inner\">
        <div id=\"ritekhela-shadow\"></div>
        <div id=\"ritekhela-box\"></div>
    </div>
</div>

<div class=\"ritekhela-wrapper\">

    <!--// Header //-->
    <header id=\"ritekhela-header\" class=\"ritekhela-header-one\">

        <!--// TopStrip //-->
        <div class=\"ritekhela-topstrip\">
            <div class=\"container\">
                <div class=\"row\">

                    <aside class=\"col-md-6\">
                        <strong>Latest News :</strong>
                        <div class=\"ritekhela-latest-news-slider\">
                            <div class=\"ritekhela-latest-news-slider-layer\">Welcome visitor you can Login or Create an Account </div>
                            <div class=\"ritekhela-latest-news-slider-layer\">While familiar with fellow European nation France Hareide. </div>
                        </div>
                    </aside>
                    <aside class=\"col-md-6\">
                        <ul class=\"ritekhela-user-strip\">
                            <li><a href=\"#\"><i class=\"fa fa-globe-asia\"></i> Support</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-dollar-sign\"></i> Currency : USD</a></li>
                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ritekhelamodalcenter\"><i class=\"fa fa-user-alt\"></i> Login</a></li>
                            <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ritekhelamodalrg\"><i class=\"fa fa-sign-in-alt\"></i> Signup</a></li>
                        </ul>
                    </aside>

                </div>
            </div>
        </div>
        <!--// TopStrip //-->

        <!--// Main Header //-->
        <div class=\"ritekhela-main-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <a href=\"index-2.html\" class=\"ritekhela-logo\"><img src=\"{{asset('fan/assets/
images/logo.png')}} \"alt=\"\"></a>
                        <div class=\"ritekhela-right-section\">
                            <div class=\"ritekhela-navigation\">
                                    <span class=\"ritekhela-menu-link\">
                                        <span class=\"menu-bar\"></span>
                                        <span class=\"menu-bar\"></span>
                                        <span class=\"menu-bar\"></span>
                                    </span>
                                <nav id=\"main-nav\">
                                    <ul id=\"main-menu\" class=\"sm sm-blue\">
                                        <li class=\"active\"><a href=\"index-2.html\">Home</a></li>
                                        <li class=\"megamenu-wrap\"><a href=\"gallery-classic-3column.html\">Event</a>


                                        </li>
                                        <li><a href=\"player-medium-wlsb.html\">Players</a>

                                        </li>
                                        <li><a href=\"{{path('app_produit_fan')}}\">Products</a>

                                        </li>
                                        <li><a href=\"blog-grid.html\">Our News</a>

                                        </li>
                                        <li><a href=\"shop-grid.html\">Our Shop</a>

                                        </li>
                                        <li><a href=\"contact-us.html\">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class=\"ritekhela-navsearch\">
                                <li><a href=\"#\" class=\"ritekhela-open-cart\"><i class=\"fab fa-opencart\"></i></a>
                                    <div class=\"ritekhela-cart-box\">
                                        <h2>You have 3 items in the cart</h2>
                                        <ul>
                                            <li>
                                                <figure><a href=\"#\"><img src=\"{{asset('fan/assets/
extra-images/cartbox-1.png')}} \"alt=\"\"></a></figure>
                                                <div class=\"ritekhela-cartbox-text\">
                                                    <h6><a href=\"#\">Key Management Model The 60+ Models</a></h6>
                                                    <div class=\"ritekhela-rating\"><span class=\"ritekhela-rating-box half-width\"></span></div>
                                                    <span class=\"ritekhela-cartbox-price ritekhela-color-two\">\$35.99 <small>\$43.00</small></span>
                                                </div>
                                            </li>
                                            <li>
                                                <figure><a href=\"#\"><img src=\"{{asset('fan/assets/
extra-images/cartbox-2.png')}}\" alt=\"\"></a></figure>
                                                <div class=\"ritekhela-cartbox-text\">
                                                    <h6><a href=\"#\">Pyramid Principle: Logic Writing &amp; Thinking</a></h6>
                                                    <div class=\"ritekhela-rating\"><span class=\"ritekhela-rating-box half-width\"></span></div>
                                                    <span class=\"ritekhela-cartbox-price ritekhela-color-two\">\$21.00</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <h5>Subtotal <span class=\"ritekhela-color-two\">\$1343</span></h5>
                                        <div class=\"ritekhela-cart-link\"><a href=\"#\" class=\"ritekhela-cartbox-btn\">Go to Checkout</a></div>
                                    </div>
                                </li>
                                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#ritekhelamodalsearch\"><i class=\"fa fa-search\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Header //-->

    </header>
    <!--// Header //-->

    <!--// Banner //-->
    <div class=\"ritekhela-banner-one\">

        <div class=\"ritekhela-banner-one-layer\">
            <span class=\"ritekhela-banner-transparent\"></span>
            <img src=\"{{asset('fan/assets/
extra-images/banner-2.jpg')}}\" alt=\"\">
            <div class=\"ritekhela-banner-caption\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>We Are Developing <strong class=\"ritekhela-color\">The Soccer</strong> Be Our Partner</h1>
                            <div class=\"clearfix\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purueget aliquam libero.</p>
                            <div class=\"clearfix\"></div>
                            <a href=\"#\" class=\"ritekhela-banner-btn\">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"ritekhela-banner-one-layer\">
            <span class=\"ritekhela-banner-transparent\"></span>
            <img src=\"{{asset('fan/assets/
extra-images/banner-1.jpg')}}\" alt=\"\">
            <div class=\"ritekhela-banner-caption\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <h1>World Cup <strong class=\"ritekhela-color\">rivalries</strong> reprised</h1>
                            <div class=\"clearfix\"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purueget aliquam libero.</p>
                            <div class=\"clearfix\"></div>
                            <a href=\"#\" class=\"ritekhela-banner-btn\">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--// Banner //-->

    <!--// Content //-->
    <div class=\"ritekhela-main-content\">

        <!--// Main Section //-->
        <div class=\"ritekhela-main-section ritekhela-fixture-slider-full\">
            {% block body %}
            {% endblock %}

        </div>
        <!--// Main Section //-->

    </div>
    <!--// Content //-->

    <!--// Footer //-->
    <footer id=\"ritekhela-footer\" class=\"ritekhela-footer-one\">

        <!--// Footer Widget //-->
        <div class=\"ritekhela-footer-widget\">
            <div class=\"container\">
                <div class=\"row\">
                    <aside class=\"widget col-md-4 widget_about_info\">
                        <a href=\"index-2.html\"><img src=\"{{asset('fan/assets/
images/logo.png ')}}\"alt=\"\"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elUt ac malesuada ante.Sed gravida, ur quis tempus sollicitudin, tellus urna</p>
                        <div class=\"widget_about_info_social\">
                            <a href=\"#\" class=\"fab fa-facebook-f\"></a>
                            <a href=\"#\" class=\"fab fa-twitter\"></a>
                            <a href=\"#\" class=\"fab fa-dribbble\"></a>
                            <a href=\"#\" class=\"fab fa-linkedin-in\"></a>
                            <a href=\"#\" class=\"fab fa-youtube\"></a>
                        </div>
                        <ul>
                            <li><i class=\"fa fa-map-marker-alt\"></i> 9907 Salford road, east London Uk 2807</li>
                            <li><i class=\"fa fa-phone\"></i> (+92) 123 45 678 - 987 65 432</li>
                            <li><i class=\"fa fa-envelope\"></i> <a href=\"#\">info@example.com</a></li>
                        </ul>
                    </aside>
                    <aside class=\"widget col-md-4 widget_twitter_feeds\">
                        <div class=\"footer_widget_title\"> <h2>Twitter Feeds</h2> </div>
                        <ul>
                            <li>
                                <i class=\"fab fa-twitter\"></i>
                                <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href=\"index-2.html\" class=\"ritekhela-color\">https://t.co/XHrPAM4ANv</a></p>
                                <time datetime=\"2008-02-14 20:00\"><i class=\"fa fa-clock\"></i> 2 Hours Ago</time>
                            </li>
                            <li>
                                <i class=\"fab fa-twitter\"></i>
                                <p>Sed gravida, urna quis tempus sollicitudin, tellus urnasuscipit nisl, id rhoncus ligula elit condimentum <a href=\"index-2.html\" class=\"ritekhela-color\">https://t.co/XHrPAM4ANv</a></p>
                                <time datetime=\"2008-02-14 20:00\"><i class=\"fa fa-clock\"></i> 2 Hours Ago</time>
                            </li>
                        </ul>
                    </aside>
                    <aside class=\"widget col-md-4 widget_gallery\">
                        <div class=\"footer_widget_title\"> <h2>Flicker Photos</h2> </div>
                        <ul>
                            <li><a data-fancybox-group=\"group\" href=\"{{asset('fan/assets/
extra-images/widget-gallery-1.jpg')}}\" class=\"fancybox\"><img src=\"{{asset('fan/assets/
extra-images/widget-gallery-1.jpg')}}\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"{{asset('fan/assets/
extra-images/widget-gallery-1.jpg')}}\" class=\"fancybox\"><img src=\"{{asset('fan/assets/
extra-images/widget-gallery-2.jpg ')}}\"alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"{{asset('fan/assets/
extra-images/widget-gallery-1.jpg ')}}\"class=\"fancybox\"><img src=\"{{asset('fan/assets/
extra-images/widget-gallery-3.jpg')}}\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"{{asset('fan/assets/
extra-images/widget-gallery-1.jpg')}}\" class=\"fancybox\"><img src=\"{{asset('fan/assets/
extra-images/widget-gallery-4.jpg')}}\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"{{asset('fan/assets/
extra-images/widget-gallery-1.jpg')}}\" class=\"fancybox\"><img src=\"{{asset('fan/assets/
extra-images/widget-gallery-5.jpg')}}\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"{{asset('fan/assets/
extra-images/widget-gallery-1.jpg')}}\" class=\"fancybox\"><img src=\"{{asset('fan/assets/
extra-images/widget-gallery-6.jpg')}}\" alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"{{asset('fan/assets/
extra-images/widget-gallery-1.jpg')}}\" class=\"fancybox\"><img src=\"{{asset('fan/assets/
extra-images/widget-gallery-7.jpg')}}\"alt=\"\"></a></li>
                            <li><a data-fancybox-group=\"group\" href=\"{{asset('fan/assets/
extra-images/widget-gallery-1.jpg')}}\" class=\"fancybox\"><img src=\"{{asset('fan/assets/
extra-images/widget-gallery-8.jpg')}}\" alt=\"\"></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <!--// Footer Widget //-->

        <!--// Footer CopyRight //-->
        <div class=\"ritekhela-copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <p><a href=\"https://www.templateshub.net\" target=\"_blank\">Templates Hub</a></p>
                        <a href=\"#\" class=\"ritekhela-back-top\"><i class=\"fa fa-angle-up\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer CopyRight //-->

    </footer>
    <!--// Footer //-->

</div>


<!--// Login ModalBox //-->
<div class=\"loginmodalbox modal fade\" id=\"ritekhelamodalcenter\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body ritekhela-bgcolor-two\">
                <h5 class=\"modal-title\">Login To Your Account</h5>
                <a href=\"#\" class=\"close ritekhela-bgcolor-two\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </a>
                <form class=\"loginmodalbox-search\">
                    <input type=\"text\" value=\"Enter User Name\" onblur=\"if(this.value == '') { this.value ='Enter User Name'; }\" onfocus=\"if(this.value =='Enter User Name') { this.value = ''; }\">
                    <input type=\"text\" value=\"Type Here Password\" onblur=\"if(this.value == '') { this.value ='Type Here Password'; }\" onfocus=\"if(this.value =='Type Here Password') { this.value = ''; }\">
                    <input type=\"submit\" value=\"Login Now\" class=\"ritekhela-bgcolor\">
                    <a href=\"#\" class=\"loginmodalbox-forget\">Forget Password?</a>
                </form>
                <div class=\"ritekhela-loginbox-social\">
                    <ul>
                        <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i> Facebook</a></li>
                        <li class=\"twitter\"><a href=\"#\"><i class=\"fab fa-twitter\"></i> Twitter</a></li>
                        <li class=\"linkedin\"><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i> Linkedin</a></li>
                        <li class=\"dribbble\"><a href=\"#\"><i class=\"fab fa-dribbble\"></i> Dribbble</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--// Login ModalBox //-->
<div class=\"loginmodalbox modal fade\" id=\"ritekhelamodalrg\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body ritekhela-bgcolor-two\">
                <h5 class=\"modal-title\">Sign Up Now</h5>
                <a href=\"#\" class=\"close ritekhela-bgcolor-two\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </a>
                <form class=\"loginmodalbox-search\">
                    <input type=\"text\" value=\"Enter User Name\" onblur=\"if(this.value == '') { this.value ='Enter User Name'; }\" onfocus=\"if(this.value =='Enter User Name') { this.value = ''; }\">
                    <input type=\"text\" value=\"Type Your Password\" onblur=\"if(this.value == '') { this.value ='Type Your Password'; }\" onfocus=\"if(this.value =='Type Your Password') { this.value = ''; }\">
                    <input type=\"text\" value=\"Confirm your password\" onblur=\"if(this.value == '') { this.value ='Confirm your password'; }\" onfocus=\"if(this.value =='Confirm your password') { this.value = ''; }\">
                    <input type=\"submit\" value=\"Sign Up\" class=\"ritekhela-bgcolor\">
                    <a href=\"#\" class=\"loginmodalbox-forget\">Forget Password?</a>
                </form>
                <div class=\"ritekhela-loginbox-social\">
                    <ul>
                        <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i> Facebook</a></li>
                        <li class=\"twitter\"><a href=\"#\"><i class=\"fab fa-twitter\"></i> Twitter</a></li>
                        <li class=\"linkedin\"><a href=\"#\"><i class=\"fab fa-linkedin-in\"></i> Linkedin</a></li>
                        <li class=\"dribbble\"><a href=\"#\"><i class=\"fab fa-dribbble\"></i> Dribbble</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--// Search ModalBox //-->
<div class=\"loginmodalbox modal fade\" id=\"ritekhelamodalsearch\" tabindex=\"-1\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body ritekhela-bgcolor-two\">
                <h5 class=\"modal-title\">Search Here</h5>
                <a href=\"#\" class=\"close ritekhela-bgcolor-two\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <i class=\"fa fa-times\"></i>
                </a>
                <form>
                    <input type=\"text\" value=\"Search Here Now\" onblur=\"if(this.value == '') { this.value ='Search Here Now'; }\" onfocus=\"if(this.value =='Search Here Now') { this.value = ''; }\">
                    <input type=\"submit\" value=\"Search Now\" class=\"ritekhela-bgcolor\">
                </form>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src=\"{{asset('fan/assets/
script/jquery.js')}}\"></script>
<script src=\"{{asset('fan/assets/
script/popper.min.js')}}\"></script>
<script src=\"{{asset('fan/assets/
script/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('fan/assets/
script/slick.slider.min.js')}}\"></script>
<script src=\"{{asset('fan/assets/
script/fancybox.min.js')}}\"></script>
<script src=\"{{asset('fan/assets/
script/isotope.min.js')}}\"></script>
<script src=\"{{asset('fan/assets/
script/smartmenus.min.js')}}\"></script>
<script src=\"{{asset('fan/assets/
script/progressbar.js')}}\"></script>
<script src=\"{{asset('fan/assets/
script/jquery.countdown.min.js')}}\"></script>
<script src=\"{{asset('fan/assets/
script/functions.js')}}\"></script>
</body>


<!-- index40:10-->
</html>", "fan.html.twig", "C:\\wamp64\\www\\piweb\\templates\\fan.html.twig");
    }
}
