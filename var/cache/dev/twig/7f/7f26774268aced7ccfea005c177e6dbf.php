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

/* @WebProfiler/Icon/menu.svg */
class __TwigTemplate_fe60c4c9b2c743f3465c33346cc91345 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/menu.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/menu.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M2.6 17.5h18.8c.9 0 1.6.7 1.6 1.6v1.5c0 1-.7 1.6-1.6 1.6H2.6c-.9 0-1.6-.7-1.6-1.6v-1.5c0-.9.7-1.6 1.6-1.6zM1 11.2v1.6c0 .9.7 1.6 1.6 1.6h18.8c.9 0 1.6-.7 1.6-1.6v-1.6c0-.8-.7-1.6-1.6-1.6H2.6A1.6 1.6 0 0 0 1 11.2zm0-7.8v1.5a1.6 1.6 0 0 0 1.6 1.6h18.8c.9 0 1.6-.7 1.6-1.6V3.4c0-1-.7-1.6-1.6-1.6H2.6A1.6 1.6 0 0 0 1 3.4z\"/></svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/menu.svg";
    }

    public function getDebugInfo()
    {
        return array (  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M2.6 17.5h18.8c.9 0 1.6.7 1.6 1.6v1.5c0 1-.7 1.6-1.6 1.6H2.6c-.9 0-1.6-.7-1.6-1.6v-1.5c0-.9.7-1.6 1.6-1.6zM1 11.2v1.6c0 .9.7 1.6 1.6 1.6h18.8c.9 0 1.6-.7 1.6-1.6v-1.6c0-.8-.7-1.6-1.6-1.6H2.6A1.6 1.6 0 0 0 1 11.2zm0-7.8v1.5a1.6 1.6 0 0 0 1.6 1.6h18.8c.9 0 1.6-.7 1.6-1.6V3.4c0-1-.7-1.6-1.6-1.6H2.6A1.6 1.6 0 0 0 1 3.4z\"/></svg>
", "@WebProfiler/Icon/menu.svg", "/var/www/html/Eproject/ecomwebsite/vendor/symfony/web-profiler-bundle/Resources/views/Icon/menu.svg");
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
