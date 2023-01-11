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

/* default/BeautyContent.html.twig */
class __TwigTemplate_15789a611d53f77885bdca945eef5572 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/BeautyContent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/BeautyContent.html.twig"));

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
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"about\">about</a>
                        </li>


                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"electronic\">Electronic items</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"Clothes\">
                                clothes</a>
                        </li>

                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"BeautyProduct\">
                                Beauty Product</a>
                        </li>


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
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 57
            echo "                    <div class=\"col\">
                        <div class=\"card shadow-sm\">
                            <div class=\"card-body\">
                                <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPhoto", [], "method", false, false, true, 60), 60, $this->source), "html", null, true);
            echo " \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
                                <p class=\"card-text\">
                                    ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, $context["object"], "getSelect", [], "method", false, false, true, 62) == "hair")) {
                // line 63
                echo "                                        <h2> Brand:";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 63), "getHaircare", [], "method", false, false, true, 63), "getBrand", [], "method", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "<h2>
                                        <h2> quantity:";
                // line 64
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 64), "getHaircare", [], "method", false, false, true, 64), "getQuantity", [], "method", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "<h2>
                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 65
$context["object"], "getSelect", [], "method", false, false, true, 65) == "perfume")) {
                // line 66
                echo "                                     <h2> fragrance:";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 66), "getPerfume", [], "method", false, false, true, 66), "getFragrance", [], "method", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "<h2>
                                        <h2> Brand:";
                // line 67
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 67), "getPerfume", [], "method", false, false, true, 67), "getBrand", [], "method", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "<h2>

                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 69
$context["object"], "getSelect", [], "method", false, false, true, 69) == "makeup")) {
                // line 70
                echo "                                     <h2> type:";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 70), "getMakeup", [], "method", false, false, true, 70), "getOptions", [], "method", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "<h2>
                                        <h2> Brand:";
                // line 71
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 71), "getMakeup", [], "method", false, false, true, 71), "getBrand", [], "method", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "<h2>
                                        
                                    ";
            } else {
                // line 74
                echo "                                     <h2> Quantity:";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 74), "getSkincare", [], "method", false, false, true, 74), "getOuantity", [], "method", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "<h2>
                                        <h2> Brand:";
                // line 75
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["object"], "getCategory", [], "method", false, false, true, 75), "getSkincare", [], "any", false, false, true, 75), "getBrand", [], "method", false, false, true, 75), 75, $this->source), "html", null, true);
                echo "<h2>
                                        
                                        
                                    ";
            }
            // line 79
            echo "

                                </p>
                                <h2>
                                    Price:";
            // line 83
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "<h2>
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

                    <div style=\"background-color:yellow;width:100%\">
                        <footer class=\"container\">
                            <p>
                                <a href=\"#\">Back to top</a>
                            </p>
                            <p>© 2017–2022 Ecommerce Company, Inc. ·
                                <a href=\"#\">Privacy</a>
                                ·
                                <a href=\"#\">Terms</a>
                            </p>
                        </footer>

                    </div>

                    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
                </body>
            </html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/BeautyContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 99,  175 => 85,  170 => 83,  164 => 79,  157 => 75,  152 => 74,  146 => 71,  141 => 70,  139 => 69,  134 => 67,  129 => 66,  127 => 65,  123 => 64,  118 => 63,  116 => 62,  111 => 60,  106 => 57,  102 => 56,  45 => 1,);
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
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"about\">about</a>
                        </li>


                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"electronic\">Electronic items</a>
                        </li>
                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"Clothes\">
                                clothes</a>
                        </li>

                        <li class=\"nav-item \">
                            <a class=\"nav-link\" href=\"BeautyProduct\">
                                Beauty Product</a>
                        </li>


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
                                    {% if object.getSelect()=='hair' %}
                                        <h2> Brand:{{ object.getCategory().getHaircare().getBrand()}}<h2>
                                        <h2> quantity:{{ object.getCategory().getHaircare().getQuantity()}}<h2>
                                    {% elseif  object.getSelect()=='perfume'%}
                                     <h2> fragrance:{{ object.getCategory().getPerfume().getFragrance()}}<h2>
                                        <h2> Brand:{{ object.getCategory().getPerfume().getBrand()}}<h2>

                                    {% elseif  object.getSelect()=='makeup'%}
                                     <h2> type:{{ object.getCategory().getMakeup().getOptions()}}<h2>
                                        <h2> Brand:{{ object.getCategory().getMakeup().getBrand()}}<h2>
                                        
                                    {% else %}
                                     <h2> Quantity:{{ object.getCategory().getSkincare().getOuantity()}}<h2>
                                        <h2> Brand:{{ object.getCategory().getSkincare.getBrand()}}<h2>
                                        
                                        
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

                    <div style=\"background-color:yellow;width:100%\">
                        <footer class=\"container\">
                            <p>
                                <a href=\"#\">Back to top</a>
                            </p>
                            <p>© 2017–2022 Ecommerce Company, Inc. ·
                                <a href=\"#\">Privacy</a>
                                ·
                                <a href=\"#\">Terms</a>
                            </p>
                        </footer>

                    </div>

                    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
                </body>
            </html>
", "default/BeautyContent.html.twig", "/var/www/html/Eproject/ecomwebsite/templates/default/BeautyContent.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 56, "if" => 62);
        static $filters = array("escape" => 60);
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
