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

/* @PimcoreCore/Targeting/targetingCode.html.twig */
class __TwigTemplate_5a2d09ea406dc66f30addfd4737fb0bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'beforeScriptTag' => [$this, 'block_beforeScriptTag'],
            'beforeScript' => [$this, 'block_beforeScript'],
            'script' => [$this, 'block_script'],
            'afterScript' => [$this, 'block_afterScript'],
            'afterScriptTag' => [$this, 'block_afterScriptTag'],
            'targetingScript' => [$this, 'block_targetingScript'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Targeting/targetingCode.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Targeting/targetingCode.html.twig"));

        // line 1
        $this->displayBlock('beforeScriptTag', $context, $blocks);
        // line 2
        echo "
<script>
    ";
        // line 4
        $this->displayBlock('beforeScript', $context, $blocks);
        // line 5
        echo "
    ";
        // line 6
        $this->displayBlock('script', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('afterScript', $context, $blocks);
        // line 22
        echo "</script>

";
        // line 24
        $this->displayBlock('afterScriptTag', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('targetingScript', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_beforeScriptTag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeScriptTag"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeScriptTag"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 1, $this->source); })()), "beforeScriptTag", [], "any", false, false, true, 1), 1, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_beforeScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeScript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeScript"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 4, $this->source); })()), "beforeScript", [], "any", false, false, true, 4), 4, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    ";
        // line 8
        echo "    var _ptg = _ptg || {};
    _ptg.options = _ptg.options || {};

    ";
        // line 11
        if ((isset($context["inDebugMode"]) || array_key_exists("inDebugMode", $context) ? $context["inDebugMode"] : (function () { throw new RuntimeError('Variable "inDebugMode" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "    _ptg.options.log = true;
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ( !twig_test_empty((isset($context["dataProviderKeys"]) || array_key_exists("dataProviderKeys", $context) ? $context["dataProviderKeys"] : (function () { throw new RuntimeError('Variable "dataProviderKeys" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "    _ptg.dataProviderKeys = ";
            echo json_encode($this->sandbox->ensureToStringAllowed((isset($context["dataProviderKeys"]) || array_key_exists("dataProviderKeys", $context) ? $context["dataProviderKeys"] : (function () { throw new RuntimeError('Variable "dataProviderKeys" does not exist.', 16, $this->source); })()), 16, $this->source));
            echo ";
    ";
        }
        // line 18
        echo "    ";
        // line 19
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_afterScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScript"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 21, $this->source); })()), "afterScript", [], "any", false, false, true, 21), 21, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_afterScriptTag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScriptTag"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScriptTag"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 24, $this->source); })()), "afterScriptTag", [], "any", false, false, true, 24), 24, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_targetingScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "targetingScript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "targetingScript"));

        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/pimcorecore/js/targeting.js"), "html", null, true);
        echo "\" async></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Targeting/targetingCode.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  220 => 27,  210 => 26,  191 => 24,  172 => 21,  162 => 19,  160 => 18,  154 => 16,  152 => 15,  149 => 14,  145 => 12,  143 => 11,  138 => 8,  136 => 7,  126 => 6,  107 => 4,  88 => 1,  78 => 26,  75 => 25,  73 => 24,  69 => 22,  67 => 21,  64 => 20,  62 => 6,  59 => 5,  57 => 4,  53 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block beforeScriptTag %}{{ blocks.beforeScriptTag|raw }}{% endblock %}

<script>
    {% block beforeScript %}{{ blocks.beforeScript|raw }}{% endblock %}

    {% block script %}
    {% autoescape 'js' %}
    var _ptg = _ptg || {};
    _ptg.options = _ptg.options || {};

    {% if inDebugMode %}
    _ptg.options.log = true;
    {% endif %}

    {% if dataProviderKeys is not empty %}
    _ptg.dataProviderKeys = {{ dataProviderKeys|json_encode|raw }};
    {% endif %}
    {% endautoescape %}
    {% endblock %}

    {% block afterScript %}{{ blocks.afterScript|raw }}{% endblock %}
</script>

{% block afterScriptTag %}{{ blocks.afterScriptTag|raw }}{% endblock %}

{% block targetingScript %}
    <script src=\"{{ asset('bundles/pimcorecore/js/targeting.js') }}\" async></script>
{% endblock %}
", "@PimcoreCore/Targeting/targetingCode.html.twig", "/var/www/html/Eproject/ecomwebsite/vendor/pimcore/pimcore/bundles/CoreBundle/Resources/views/Targeting/targetingCode.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "autoescape" => 7, "if" => 11);
        static $filters = array("raw" => 1, "json_encode" => 16, "escape" => 27);
        static $functions = array("asset" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'autoescape', 'if'],
                ['raw', 'json_encode', 'escape'],
                ['asset']
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
