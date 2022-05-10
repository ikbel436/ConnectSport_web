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

/* front/login-register.html.twig */
class __TwigTemplate_4e377958bc7bf66b98ad7d8124c9a7f44d5f1728f6da8d4489b2a7b52d2b42f2 extends Template
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
        return "header-footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/login-register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/login-register.html.twig"));

        $this->parent = $this->loadTemplate("header-footer.html.twig", "front/login-register.html.twig", 1);
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
        echo "                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area d-lg-none d-xl-none col-12\">
                    <div class=\"container\"> 
                        <div class=\"row\">
                            <div class=\"mobile-menu\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class=\"breadcrumb-area\">
                <div class=\"container\">
                    <div class=\"breadcrumb-content\">
                        <ul>
                            <li><a href=\"index.html\">Home</a></li>
                            <li class=\"active\">Login Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class=\"page-section mb-60\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30\">
                            <!-- Login Form s-->
                            <form action=\"#\" >
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Login</h4>
                                    <div class=\"row\">
                                        <div class=\"col-md-12 col-12 mb-20\">
                                            <label>Email Address*</label>
                                            <input class=\"mb-0\" type=\"email\" placeholder=\"Email Address\">
                                        </div>
                                        <div class=\"col-12 mb-20\">
                                            <label>Password</label>
                                            <input class=\"mb-0\" type=\"password\" placeholder=\"Password\">
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"check-box d-inline-block ml-0 ml-md-2 mt-10\">
                                                <input type=\"checkbox\" id=\"remember_me\">
                                                <label for=\"remember_me\">Remember me</label>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 mt-10 mb-20 text-left text-md-right\">
                                            <a href=\"#\"> Forgotten pasward?</a>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button class=\"register-button mt-0\">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-sm-12 col-md-12 col-lg-6 col-xs-12\">
                            <form action=\"#\">
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Register</h4>
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                            <label>First Name</label>
                                            <input class=\"mb-0\" type=\"text\" placeholder=\"First Name\">
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                            <label>Last Name</label>
                                            <input class=\"mb-0\" type=\"text\" placeholder=\"Last Name\">
                                        </div>
                                        <div class=\"col-md-12 mb-20\">
                                            <label>Email Address*</label>
                                            <input class=\"mb-0\" type=\"email\" placeholder=\"Email Address\">
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Password</label>
                                            <input class=\"mb-0\" type=\"password\" placeholder=\"Password\">
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Confirm Password</label>
                                            <input class=\"mb-0\" type=\"password\" placeholder=\"Confirm Password\">
                                        </div>
                                        <div class=\"col-12\">
                                            <button class=\"register-button mt-0\">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/login-register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"header-footer.html.twig\" %}
{% block body %}
                <!-- Begin Mobile Menu Area -->
                <div class=\"mobile-menu-area d-lg-none d-xl-none col-12\">
                    <div class=\"container\"> 
                        <div class=\"row\">
                            <div class=\"mobile-menu\">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class=\"breadcrumb-area\">
                <div class=\"container\">
                    <div class=\"breadcrumb-content\">
                        <ul>
                            <li><a href=\"index.html\">Home</a></li>
                            <li class=\"active\">Login Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class=\"page-section mb-60\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30\">
                            <!-- Login Form s-->
                            <form action=\"#\" >
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Login</h4>
                                    <div class=\"row\">
                                        <div class=\"col-md-12 col-12 mb-20\">
                                            <label>Email Address*</label>
                                            <input class=\"mb-0\" type=\"email\" placeholder=\"Email Address\">
                                        </div>
                                        <div class=\"col-12 mb-20\">
                                            <label>Password</label>
                                            <input class=\"mb-0\" type=\"password\" placeholder=\"Password\">
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"check-box d-inline-block ml-0 ml-md-2 mt-10\">
                                                <input type=\"checkbox\" id=\"remember_me\">
                                                <label for=\"remember_me\">Remember me</label>
                                            </div>
                                        </div>
                                        <div class=\"col-md-4 mt-10 mb-20 text-left text-md-right\">
                                            <a href=\"#\"> Forgotten pasward?</a>
                                        </div>
                                        <div class=\"col-md-12\">
                                            <button class=\"register-button mt-0\">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class=\"col-sm-12 col-md-12 col-lg-6 col-xs-12\">
                            <form action=\"#\">
                                <div class=\"login-form\">
                                    <h4 class=\"login-title\">Register</h4>
                                    <div class=\"row\">
                                        <div class=\"col-md-6 col-12 mb-20\">
                                            <label>First Name</label>
                                            <input class=\"mb-0\" type=\"text\" placeholder=\"First Name\">
                                        </div>
                                        <div class=\"col-md-6 col-12 mb-20\">
                                            <label>Last Name</label>
                                            <input class=\"mb-0\" type=\"text\" placeholder=\"Last Name\">
                                        </div>
                                        <div class=\"col-md-12 mb-20\">
                                            <label>Email Address*</label>
                                            <input class=\"mb-0\" type=\"email\" placeholder=\"Email Address\">
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Password</label>
                                            <input class=\"mb-0\" type=\"password\" placeholder=\"Password\">
                                        </div>
                                        <div class=\"col-md-6 mb-20\">
                                            <label>Confirm Password</label>
                                            <input class=\"mb-0\" type=\"password\" placeholder=\"Confirm Password\">
                                        </div>
                                        <div class=\"col-12\">
                                            <button class=\"register-button mt-0\">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
         {% endblock %}", "front/login-register.html.twig", "C:\\wamp64\\www\\piweb\\templates\\front\\login-register.html.twig");
    }
}
