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

/* default/FootwearContent.html.twig */
class __TwigTemplate_7e612ad72c0d5bcec93ccc16e5b0b328 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/FootwearContent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/FootwearContent.html.twig"));

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
<!--  navbar starts -->
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

<!--Naavbar ends-->


<!-- code for filters -->
<center>
<div class=\"my-3\">
<h2>apply Filters</h2>

<a href=\"shoes\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">shoes</a>
    <a href=\"sandal\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">sandal</a>
    <a href=\"chappal\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">chappal</a>
    
</center>
</div>

<!-- code for footwear-->



        <div class=\"container\">

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">

                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 65
            echo "                    <div class=\"col\">
                        <div class=\"card shadow-sm\">


                            <div class=\"card-body\">
                                <img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPhoto", [], "method", false, false, true, 70), 70, $this->source), "html", null, true);
            echo " \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
                                <p class=\"card-text\">
                                    
                                    
                                </p>
                                <h2>
                                    Price:";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "<h2>
                                   
                                        <h2>Size:
                                        ";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getSize", [], "method", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "</h2>

                                        <h2>color:
                                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getColor", [], "method", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "</h2>

                                         <h2>
                                        ";
            // line 85
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 85), 85, $this->source), "html", null, true);
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
        // line 99
        echo "
                    </div>
                    </div>


<!-- footer starts-->

                    <footer>
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
        return "default/FootwearContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 99,  148 => 85,  142 => 82,  136 => 79,  130 => 76,  121 => 70,  114 => 65,  110 => 64,  45 => 1,);
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
<!--  navbar starts -->
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

<!--Naavbar ends-->


<!-- code for filters -->
<center>
<div class=\"my-3\">
<h2>apply Filters</h2>

<a href=\"shoes\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">shoes</a>
    <a href=\"sandal\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">sandal</a>
    <a href=\"chappal\" class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\">chappal</a>
    
</center>
</div>

<!-- code for footwear-->



        <div class=\"container\">

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">

                {% for object in objects %}
                    <div class=\"col\">
                        <div class=\"card shadow-sm\">


                            <div class=\"card-body\">
                                <img src=\"{{ object.getPhoto() }} \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
                                <p class=\"card-text\">
                                    
                                    
                                </p>
                                <h2>
                                    Price:{{ object.getPrice }}<h2>
                                   
                                        <h2>Size:
                                        {{ object.getSize() }}</h2>

                                        <h2>color:
                                        {{ object.getColor() }}</h2>

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


<!-- footer starts-->

                    <footer>
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
", "default/FootwearContent.html.twig", "/var/www/html/Eproject/ecomwebsite/templates/default/FootwearContent.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 64);
        static $filters = array("escape" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
