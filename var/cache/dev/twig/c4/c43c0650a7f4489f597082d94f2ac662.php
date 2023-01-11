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

/* default/homeimage.html.twig */
class __TwigTemplate_d7f892c5c3768df768fad84048908080 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/homeimage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/homeimage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Home image</title>

<style>

            .about-section {

                padding: 50px;

                text-align: center;

                background-color: #474e5d;

                color: white;

            }
            p{
                font-size:18px;
            }
        </style>

</head>
<body > <div class=\"about-section\">

            <h1>Shoppy RN</h1>

            <p>We sell various products like trusted electronics, branded clothes, trendy footwear and beauty essentials too</p>

            <p>browse the website for your seamless shopping experience</p>

        </div>


        <center>
            <h2>
                Top categories</h2>
        </center>


        <div class=\"container\">

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">


                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <img src=\"images/electronics.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">

                            <h3>we deal in  tv,laptop and phones</h3>
                            <p class=\"card-text\">

                                <a href=\"electronic\" style=\"font-size:20px\">view products</a>

                            </p>


                        </div>
                    </div>
                </div>


                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <img src=\"images/beauty.png\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">

                            <h3>we deal in hair,skin and makeup products</h3>
                            <p class=\"card-text\">

                                <a href=\"beauty\" style=\"font-size:20px\">view products</a>

                            </p>


                        </div>
                    </div>
                </div>


                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <img src=\"images/fash.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">

                            <h3>we deal in shirts,pant,suites etc</h3>
                            <p class=\"card-text\">

                                <a href=\"clothes\" style=\"font-size:20px\">view products</a>

                            </p>


                        </div>
                    </div>
                </div>


            </div>

        </div>


</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "default/homeimage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Home image</title>

<style>

            .about-section {

                padding: 50px;

                text-align: center;

                background-color: #474e5d;

                color: white;

            }
            p{
                font-size:18px;
            }
        </style>

</head>
<body > <div class=\"about-section\">

            <h1>Shoppy RN</h1>

            <p>We sell various products like trusted electronics, branded clothes, trendy footwear and beauty essentials too</p>

            <p>browse the website for your seamless shopping experience</p>

        </div>


        <center>
            <h2>
                Top categories</h2>
        </center>


        <div class=\"container\">

            <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3\">


                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <img src=\"images/electronics.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">

                            <h3>we deal in  tv,laptop and phones</h3>
                            <p class=\"card-text\">

                                <a href=\"electronic\" style=\"font-size:20px\">view products</a>

                            </p>


                        </div>
                    </div>
                </div>


                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <img src=\"images/beauty.png\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">

                            <h3>we deal in hair,skin and makeup products</h3>
                            <p class=\"card-text\">

                                <a href=\"beauty\" style=\"font-size:20px\">view products</a>

                            </p>


                        </div>
                    </div>
                </div>


                <div class=\"col\">
                    <div class=\"card shadow-sm\">
                        <div class=\"card-body\">
                            <img src=\"images/fash.jpg\" alt=\"tv1\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225px\">

                            <h3>we deal in shirts,pant,suites etc</h3>
                            <p class=\"card-text\">

                                <a href=\"clothes\" style=\"font-size:20px\">view products</a>

                            </p>


                        </div>
                    </div>
                </div>


            </div>

        </div>


</body>
</html>", "default/homeimage.html.twig", "/var/www/html/Eproject/ecomwebsite/templates/default/homeimage.html.twig");
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
