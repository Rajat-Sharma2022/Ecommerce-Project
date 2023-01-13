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

/* default/footer.html.twig */
class __TwigTemplate_00fb59f8be972e3981ac47a901fd9761 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Online Shoping footer</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">


    </head>
    <body>

        <footer
            class=\"bg-primary text-white text-center text-lg-start\">
            <!-- Grid container -->
            <div
                class=\"container p-4\">
                <!--Grid row-->
                <div
                    class=\"row\">
                    <!--Grid column-->
                    <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                        <h5 class=\"text-uppercase\">E-STORE</h5>

                        <p>
                            Find the latest collection of electronics, beauty products, trendy clothing, comfortable footwear
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                        <h5 class=\"text-uppercase\">Quick Links</h5>

                        <ul class=\"list-unstyled mb-0\">
                            <li>
                                <a href=\"#!\" class=\"text-white\">Clothing</a>
                            </li>
                            <li>
                                <a href=\"#!\" class=\"text-white\">Footwear</a>
                            </li>

                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">

                        <h5 class=\"text-uppercase\"><br></h5>

                        <ul class=\"list-unstyled\">
                            <li>
                                <a href=\"#!\" class=\"text-white\">Beauty</a>
                            </li>
                            <li>
                                <a href=\"#!\" class=\"text-white\">electronics</a>
                            </li>


                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
                    © 2023 Copyright:
                    <a class=\"text-white\" href=\"https://mdbootstrap.com/\">E-STORE.com</a>
                </div>
                <!-- Copyright -->
            </footer>

            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>


            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
        </body>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Online Shoping footer</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">


    </head>
    <body>

        <footer
            class=\"bg-primary text-white text-center text-lg-start\">
            <!-- Grid container -->
            <div
                class=\"container p-4\">
                <!--Grid row-->
                <div
                    class=\"row\">
                    <!--Grid column-->
                    <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                        <h5 class=\"text-uppercase\">E-STORE</h5>

                        <p>
                            Find the latest collection of electronics, beauty products, trendy clothing, comfortable footwear
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                        <h5 class=\"text-uppercase\">Quick Links</h5>

                        <ul class=\"list-unstyled mb-0\">
                            <li>
                                <a href=\"#!\" class=\"text-white\">Clothing</a>
                            </li>
                            <li>
                                <a href=\"#!\" class=\"text-white\">Footwear</a>
                            </li>

                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">

                        <h5 class=\"text-uppercase\"><br></h5>

                        <ul class=\"list-unstyled\">
                            <li>
                                <a href=\"#!\" class=\"text-white\">Beauty</a>
                            </li>
                            <li>
                                <a href=\"#!\" class=\"text-white\">electronics</a>
                            </li>


                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
                    © 2023 Copyright:
                    <a class=\"text-white\" href=\"https://mdbootstrap.com/\">E-STORE.com</a>
                </div>
                <!-- Copyright -->
            </footer>

            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>


            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
        </body>
    </body>
</html>
", "default/footer.html.twig", "/var/www/html/pimcore/ecommerce/templates/default/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
