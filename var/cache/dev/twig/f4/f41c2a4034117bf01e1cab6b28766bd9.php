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

/* @PimcoreAdmin/Admin/Document/Document/diff-versions.html.twig */
class __TwigTemplate_7076cb314ce9361d62e620ef3b459bdb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/Admin/Document/Document/diff-versions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/Admin/Document/Document/diff-versions.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">

    <style type=\"text/css\">
        html, body {
            padding: 0;
            margin: 0;
        }

        body {
            text-align: center;
            position: relative;
        }

        img {
            max-width: 100%;
        }

        #left, #right {
            position: absolute;
            top:0;
            width:50%;
        }

        #left {
            left: 0;
            z-index: 1;
        }

        #right {
            right: 0;
            z-index: 2;
            border-left: 1px dashed darkred;
        }
    </style>
</head>
<body>
    ";
        // line 40
        if (array_key_exists("image", $context)) {
            // line 41
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_document_document_diffversionsimage", ["id" => (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 41, $this->source); })())]), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 43
            echo "        <div id=\"left\">
            <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_document_document_diffversionsimage", ["id" => (isset($context["image1"]) || array_key_exists("image1", $context) ? $context["image1"] : (function () { throw new RuntimeError('Variable "image1" does not exist.', 44, $this->source); })())]), "html", null, true);
            echo "\" />
        </div>
        <div id=\"right\">
            <img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_document_document_diffversionsimage", ["id" => (isset($context["image2"]) || array_key_exists("image2", $context) ? $context["image2"] : (function () { throw new RuntimeError('Variable "image2" does not exist.', 47, $this->source); })())]), "html", null, true);
            echo "\">
        </div>
    ";
        }
        // line 50
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreAdmin/Admin/Document/Document/diff-versions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 50,  103 => 47,  97 => 44,  94 => 43,  88 => 41,  86 => 40,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head lang=\"en\">
    <meta charset=\"UTF-8\">

    <style type=\"text/css\">
        html, body {
            padding: 0;
            margin: 0;
        }

        body {
            text-align: center;
            position: relative;
        }

        img {
            max-width: 100%;
        }

        #left, #right {
            position: absolute;
            top:0;
            width:50%;
        }

        #left {
            left: 0;
            z-index: 1;
        }

        #right {
            right: 0;
            z-index: 2;
            border-left: 1px dashed darkred;
        }
    </style>
</head>
<body>
    {% if image is defined %}
        <img src=\"{{ path('pimcore_admin_document_document_diffversionsimage', {id:  image}) }}\" />
    {% else %}
        <div id=\"left\">
            <img src=\"{{ path('pimcore_admin_document_document_diffversionsimage', {id:  image1}) }}\" />
        </div>
        <div id=\"right\">
            <img src=\"{{ path('pimcore_admin_document_document_diffversionsimage', {id:  image2}) }}\">
        </div>
    {% endif %}
</body>
</html>
", "@PimcoreAdmin/Admin/Document/Document/diff-versions.html.twig", "/var/www/html/pimcore/ecommerce/vendor/pimcore/pimcore/bundles/AdminBundle/Resources/views/Admin/Document/Document/diff-versions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 40);
        static $filters = array("escape" => 41);
        static $functions = array("path" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['path']
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
