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

/* default/ClothesContent.html.twig */
class __TwigTemplate_6c0834cefe46a6c8777f08be6e6e4622 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/ClothesContent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/ClothesContent.html.twig"));

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




        <div class=\"container\">

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">

                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 50
            echo "                    <div class=\"col\">
                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPhoto", [], "method", false, false, true, 53), 53, $this->source), "html", null, true);
            echo " \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
                                <p class=\"card-text\">

                                            ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, $context["object"], "getGender", [], "method", false, false, true, 56) == "M")) {
                // line 57
                echo "                                    <h2>Brand:";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 57), "getMensWear", [], "method", false, false, true, 57), "getBrand", [], "method", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "<h2>
                                    <h2>Size:";
                // line 58
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 58), "getMensWear", [], "method", false, false, true, 58), "getSize", [], "method", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "<h2>
                                            ";
            } else {
                // line 60
                echo "                                               <h2>Brand:";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 60), "getWomensWear", [], "method", false, false, true, 60), "getBrand", [], "method", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "<h2>
                                               <h2>Size:";
                // line 61
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 61), "getWomensWear", [], "method", false, false, true, 61), "getSize", [], "method", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "<h2>
                                            ";
            }
            // line 63
            echo "

                                        </p>
                                        <h2>
                                            Price:";
            // line 67
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "<h2>
                                            <h2>
                                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 69), 69, $this->source), "html", null, true);
            echo "</h2>
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <div class=\"btn-group\">
                                                        <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
                                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
                                                    </div>
                                                    <small class=\"text-muted\">9 mins</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
                            </div>
                        </div>

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
        return "default/ClothesContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 83,  143 => 69,  138 => 67,  132 => 63,  127 => 61,  122 => 60,  117 => 58,  112 => 57,  110 => 56,  104 => 53,  99 => 50,  95 => 49,  45 => 1,);
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




        <div class=\"container\">

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">

                {% for object in objects %}
                    <div class=\"col\">
                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <img src=\"{{ object.getPhoto() }} \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
                                <p class=\"card-text\">

                                            {% if object.getGender()=='M' %}
                                    <h2>Brand:{{ object.getCategory().getMensWear().getBrand() }}<h2>
                                    <h2>Size:{{ object.getCategory().getMensWear().getSize() }}<h2>
                                            {% else %}
                                               <h2>Brand:{{ object.getCategory().getWomensWear().getBrand() }}<h2>
                                               <h2>Size:{{ object.getCategory().getWomensWear().getSize() }}<h2>
                                            {% endif %}


                                        </p>
                                        <h2>
                                            Price:{{ object.getPrice }}<h2>
                                            <h2>
                                        {{ object.getDescription() }}</h2>
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <div class=\"btn-group\">
                                                        <button type=\"button\" class=\"btn btn-sm btn-secondary\">Buy</button>
                                                        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Add to Cart</button>
                                                    </div>
                                                    <small class=\"text-muted\">9 mins</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                {% endfor %}

                            </div>
                        </div>

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
", "default/ClothesContent.html.twig", "/var/www/html/Eproject/ecomwebsite/templates/default/ClothesContent.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 49, "if" => 56);
        static $filters = array("escape" => 53);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
