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

/* @WebProfiler/Icon/config.svg */
class __TwigTemplate_1f7b9c072dee9aee8924888dcaea9a1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/config.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/config.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M11 5.1C11 3.4 9.6 2 7.9 2H5.1A3.1 3.1 0 0 0 2 5.1V18c0 1.6 1.4 3 3.1 3H8c1.7 0 3.1-1.4 3.1-3.1V5.1zM5.2 4h2.7C8.4 4 9 4.8 9 5.3V11H4V5.3C4 4.8 4.6 4 5.2 4zM22 5.1C22 3.4 20.6 2 18.9 2H16c-1.6 0-3 1.4-3 3.1V18c0 1.7 1.4 3.1 3.1 3.1H19c1.7 0 3.1-1.4 3.1-3.1V5.1zM16 4h2.8c.6 0 1.2.8 1.2 1.3V8h-5V5.3c0-.5.5-1.3 1-1.3z\"/></svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/config.svg";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M11 5.1C11 3.4 9.6 2 7.9 2H5.1A3.1 3.1 0 0 0 2 5.1V18c0 1.6 1.4 3 3.1 3H8c1.7 0 3.1-1.4 3.1-3.1V5.1zM5.2 4h2.7C8.4 4 9 4.8 9 5.3V11H4V5.3C4 4.8 4.6 4 5.2 4zM22 5.1C22 3.4 20.6 2 18.9 2H16c-1.6 0-3 1.4-3 3.1V18c0 1.7 1.4 3.1 3.1 3.1H19c1.7 0 3.1-1.4 3.1-3.1V5.1zM16 4h2.8c.6 0 1.2.8 1.2 1.3V8h-5V5.3c0-.5.5-1.3 1-1.3z\"/></svg>
", "@WebProfiler/Icon/config.svg", "/var/www/html/pimcore/ecommerce/vendor/symfony/web-profiler-bundle/Resources/views/Icon/config.svg");
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
