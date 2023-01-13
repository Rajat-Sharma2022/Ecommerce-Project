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

/* @PimcoreCore/Workflow/statusinfo/toolbarStatusInfo.html.twig */
class __TwigTemplate_23f63a21068ed15545916b2da19307b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Workflow/statusinfo/toolbarStatusInfo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Workflow/statusinfo/toolbarStatusInfo.html.twig"));

        // line 3
        echo "
<div class=\"pimcore-workflow-place-indicator-wrapper\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) || array_key_exists("places", $context) ? $context["places"] : (function () { throw new RuntimeError('Variable "places" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 6
            echo "
        <div class=\"pimcore-workflow-place-indicator\" style=\"background-color: ";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["place"], "backgroundColor", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "; color:";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["place"], "fontColor", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "; border: 1px solid ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["place"], "borderColor", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo ";\"  title=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["place"], "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["translator"]) || array_key_exists("translator", $context) ? $context["translator"] : (function () { throw new RuntimeError('Variable "translator" does not exist.', 8, $this->source); })()), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["place"], "label", [], "any", false, false, true, 8), 1 => [], 2 => "admin"], "method", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Workflow/statusinfo/toolbarStatusInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  66 => 8,  56 => 7,  53 => 6,  49 => 5,  45 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var places \\Pimcore\\Workflow\\Place\\PlaceConfig[] #}
{# @var translator \\Symfony\\Contracts\\Translation\\TranslatorInterface #}

<div class=\"pimcore-workflow-place-indicator-wrapper\">
    {% for place in places %}

        <div class=\"pimcore-workflow-place-indicator\" style=\"background-color: {{ place.backgroundColor }}; color:{{ place.fontColor }}; border: 1px solid {{ place.borderColor }};\"  title=\"{{ place.title }}\">
            {{ translator.trans(place.label,[],'admin') }}
        </div>
    {% endfor %}
</div>", "@PimcoreCore/Workflow/statusinfo/toolbarStatusInfo.html.twig", "/var/www/html/pimcore/ecommerce/vendor/pimcore/pimcore/bundles/CoreBundle/Resources/views/Workflow/statusinfo/toolbarStatusInfo.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 5);
        static $filters = array("escape" => 7);
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
