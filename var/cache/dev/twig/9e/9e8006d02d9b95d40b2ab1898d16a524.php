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
class __TwigTemplate_301d482d0455ff5392d389159d515c4d extends Template
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
                            <a class=\"nav-link\" href=\"clothes\">
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
            // line 62
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPhoto", [], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            echo " \" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">
                                <p class=\"card-text\">
                                    
                                    
                                </p>
                                <h2>
                                    Price:";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getPrice", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "<h2>
                                   
                                        <h2>Size:
                                        ";
            // line 71
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getSize", [], "method", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "</h2>

                                        <h2>color:
                                        ";
            // line 74
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getColor", [], "method", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "</h2>

                                         <h2>
                                        ";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["object"], "getDescription", [], "method", false, false, true, 77), 77, $this->source), "html", null, true);
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
        // line 91
        echo "
                    </div>

                    <div style=\"background-color:yellow;width:100%\">
                        <footer class=\"container\">
                            <p>
                                <a href=\"#\">Back to top</a>
                            </p>
                            <p>?? 2017???2022 Ecommerce Company, Inc. ??
                                <a href=\"#\">Privacy</a>
                                ??
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
        return "default/FootwearContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 91,  140 => 77,  134 => 74,  128 => 71,  122 => 68,  113 => 62,  106 => 57,  102 => 56,  45 => 1,);
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
                            <a class=\"nav-link\" href=\"clothes\">
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

                    <div style=\"background-color:yellow;width:100%\">
                        <footer class=\"container\">
                            <p>
                                <a href=\"#\">Back to top</a>
                            </p>
                            <p>?? 2017???2022 Ecommerce Company, Inc. ??
                                <a href=\"#\">Privacy</a>
                                ??
                                <a href=\"#\">Terms</a>
                            </p>
                        </footer>

                    </div>

                    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN\" crossorigin=\"anonymous\"></script>
                </body>
            </html>
", "default/FootwearContent.html.twig", "/var/www/html/Eproject/ecomwebsite/templates/default/FootwearContent.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 56);
        static $filters = array("escape" => 62);
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
