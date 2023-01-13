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

/* default/submit.html.twig */
class __TwigTemplate_d808da6b226c2ac6ad9c8f4c8ae28661 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/submit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/submit.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>online Shoping header</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
    </head>
    <body>

    <!-- navbar -->

<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
  <div class=\"container-fluid\">
    
    <img src=\"images/logo2.jpeg\" height=\"100px\" width=\"100px\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"Home\">Home</a>
        </li>
        
          
            <li class=\"nav-item \"><a class=\"nav-link\" href=\"electronic\">Electronic items</a></li>
            <li class=\"nav-item \"><a class=\"nav-link\" href=\"clothes\"> clothes</a></li>
           
            <li class=\"nav-item \"><a class=\"nav-link\" href=\"footwear\"> Footwear</a></li>
          <li class=\"nav-item \"><a class=\"nav-link\" href=\"beauty\"> Beauty Products</a></li>
       
        
      </ul>
      <form class=\"d-flex\" role=\"search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- filters -->
<center>

<h1 class=\"my-4\"style=\"color:green\">Thanks ";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 47, $this->source); })()), 47, $this->source), "html", null, true);
        echo " for your valuable feedback.It will help us in improving</h1>

</center>







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
                </body>
            </html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 47,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>online Shoping header</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
    </head>
    <body>

    <!-- navbar -->

<nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
  <div class=\"container-fluid\">
    
    <img src=\"images/logo2.jpeg\" height=\"100px\" width=\"100px\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"Home\">Home</a>
        </li>
        
          
            <li class=\"nav-item \"><a class=\"nav-link\" href=\"electronic\">Electronic items</a></li>
            <li class=\"nav-item \"><a class=\"nav-link\" href=\"clothes\"> clothes</a></li>
           
            <li class=\"nav-item \"><a class=\"nav-link\" href=\"footwear\"> Footwear</a></li>
          <li class=\"nav-item \"><a class=\"nav-link\" href=\"beauty\"> Beauty Products</a></li>
       
        
      </ul>
      <form class=\"d-flex\" role=\"search\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- filters -->
<center>

<h1 class=\"my-4\"style=\"color:green\">Thanks {{name}} for your valuable feedback.It will help us in improving</h1>

</center>







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
                </body>
            </html>


", "default/submit.html.twig", "/var/www/html/Eproject/ecomwebsite/templates/default/submit.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 47);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
