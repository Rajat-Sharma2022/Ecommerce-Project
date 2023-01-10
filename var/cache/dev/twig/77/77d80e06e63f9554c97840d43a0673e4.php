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

/* @PimcoreCore/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig */
class __TwigTemplate_c7147fbddb03e2dec190dfb0284e6a67 extends Template
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
            'beforeInit' => [$this, 'block_beforeInit'],
            'trackInit' => [$this, 'block_trackInit'],
            'beforeTrack' => [$this, 'block_beforeTrack'],
            'track' => [$this, 'block_track'],
            'afterTrack' => [$this, 'block_afterTrack'],
            'afterScript' => [$this, 'block_afterScript'],
            'afterScriptTag' => [$this, 'block_afterScriptTag'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig"));

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
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ";
        // line 11
        $this->displayBlock('beforeInit', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('trackInit', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('beforeTrack', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('track', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('afterTrack', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('afterScript', $context, $blocks);
        // line 39
        echo "</script>

";
        // line 41
        $this->displayBlock('afterScriptTag', $context, $blocks);
        
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

    // line 11
    public function block_beforeInit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeInit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeInit"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 11, $this->source); })()), "beforeInit", [], "any", false, false, true, 11), 11, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_trackInit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trackInit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trackInit"));

        // line 14
        echo "    ";
        if ((isset($context["universalConfiguration"]) || array_key_exists("universalConfiguration", $context) ? $context["universalConfiguration"] : (function () { throw new RuntimeError('Variable "universalConfiguration" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "    ga('create', '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["trackId"]) || array_key_exists("trackId", $context) ? $context["trackId"] : (function () { throw new RuntimeError('Variable "trackId" does not exist.', 15, $this->source); })()), 15, $this->source), "html", null, true);
            echo "', ";
            echo $this->sandbox->ensureToStringAllowed((isset($context["universalConfiguration"]) || array_key_exists("universalConfiguration", $context) ? $context["universalConfiguration"] : (function () { throw new RuntimeError('Variable "universalConfiguration" does not exist.', 15, $this->source); })()), 15, $this->source);
            echo ");
    ";
        } else {
            // line 17
            echo "    ga('create', '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["trackId"]) || array_key_exists("trackId", $context) ? $context["trackId"] : (function () { throw new RuntimeError('Variable "trackId" does not exist.', 17, $this->source); })()), 17, $this->source), "html", null, true);
            echo "');
    ";
        }
        // line 19
        echo "
    ga('set', 'anonymizeIp', true);
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_beforeTrack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeTrack"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeTrack"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 23, $this->source); })()), "beforeTrack", [], "any", false, false, true, 23), 23, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_track($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "track"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "track"));

        // line 26
        echo "    if (typeof _gaqPageView != \"undefined\"){
        ga('send', 'pageview', _gaqPageView);
    } else {
        ";
        // line 29
        if ((isset($context["defaultPath"]) || array_key_exists("defaultPath", $context) ? $context["defaultPath"] : (function () { throw new RuntimeError('Variable "defaultPath" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "        ga('send', 'pageview', '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["defaultPath"]) || array_key_exists("defaultPath", $context) ? $context["defaultPath"] : (function () { throw new RuntimeError('Variable "defaultPath" does not exist.', 30, $this->source); })()), 30, $this->source), "html", null, true);
            echo "');
        ";
        } else {
            // line 32
            echo "        ga('send', 'pageview');
        ";
        }
        // line 34
        echo "    }
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_afterTrack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterTrack"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterTrack"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 37, $this->source); })()), "afterTrack", [], "any", false, false, true, 37), 37, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_afterScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScript"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 38, $this->source); })()), "afterScript", [], "any", false, false, true, 38), 38, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_afterScriptTag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScriptTag"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScriptTag"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 41, $this->source); })()), "afterScriptTag", [], "any", false, false, true, 41), 41, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  300 => 41,  281 => 38,  262 => 37,  251 => 34,  247 => 32,  241 => 30,  239 => 29,  234 => 26,  224 => 25,  205 => 23,  193 => 19,  187 => 17,  179 => 15,  176 => 14,  166 => 13,  147 => 11,  128 => 4,  109 => 1,  99 => 41,  95 => 39,  92 => 38,  90 => 37,  87 => 36,  85 => 25,  82 => 24,  80 => 23,  77 => 22,  75 => 13,  72 => 12,  70 => 11,  62 => 5,  60 => 4,  56 => 2,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block beforeScriptTag %}{{ blocks.beforeScriptTag|raw }}{% endblock %}

<script>
    {% block beforeScript %}{{ blocks.beforeScript|raw }}{% endblock %}

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    {% block beforeInit %}{{ blocks.beforeInit|raw }}{% endblock %}

    {% block trackInit %}
    {% if universalConfiguration %}
    ga('create', '{{ trackId }}', {{ universalConfiguration|raw }});
    {% else %}
    ga('create', '{{ trackId }}');
    {% endif %}

    ga('set', 'anonymizeIp', true);
    {% endblock %}

    {% block beforeTrack %}{{ blocks.beforeTrack|raw }}{% endblock %}

    {% block track %}
    if (typeof _gaqPageView != \"undefined\"){
        ga('send', 'pageview', _gaqPageView);
    } else {
        {% if defaultPath %}
        ga('send', 'pageview', '{{ defaultPath }}');
        {% else %}
        ga('send', 'pageview');
        {% endif %}
    }
    {% endblock %}

    {% block afterTrack %}{{ blocks.afterTrack|raw }}{% endblock %}
    {% block afterScript %}{{ blocks.afterScript|raw }}{% endblock %}
</script>

{% block afterScriptTag %}{{ blocks.afterScriptTag|raw }}{% endblock %}
", "@PimcoreCore/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig", "/var/www/html/pimcore/ecommerce/vendor/pimcore/pimcore/bundles/CoreBundle/Resources/views/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "if" => 14);
        static $filters = array("raw" => 1, "escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['raw', 'escape'],
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
