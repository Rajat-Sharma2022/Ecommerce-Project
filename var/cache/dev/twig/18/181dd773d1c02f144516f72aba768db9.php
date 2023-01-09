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

/* @PimcoreCore/Analytics/Tracking/Google/Analytics/asynchronousTrackingCode.html.twig */
class __TwigTemplate_299ddf445d898e5e4537e5a579b248d9 extends Template
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
            'async' => [$this, 'block_async'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Analytics/Tracking/Google/Analytics/asynchronousTrackingCode.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Analytics/Tracking/Google/Analytics/asynchronousTrackingCode.html.twig"));

        // line 1
        $this->displayBlock('beforeScriptTag', $context, $blocks);
        // line 2
        echo "
<script>
    ";
        // line 4
        $this->displayBlock('beforeScript', $context, $blocks);
        // line 5
        echo "    ";
        $this->displayBlock('beforeInit', $context, $blocks);
        // line 6
        echo "
    window._gaq = window._gaq || [];

    ";
        // line 9
        $this->displayBlock('trackInit', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('beforeTrack', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('track', $context, $blocks);
        // line 27
        echo "
    ";
        // line 28
        $this->displayBlock('afterTrack', $context, $blocks);
        // line 29
        echo "
    (function() {
        ";
        // line 31
        $this->displayBlock('async', $context, $blocks);
        // line 42
        echo "    })();

    ";
        // line 44
        $this->displayBlock('afterScript', $context, $blocks);
        // line 45
        echo "</script>

";
        // line 47
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

    // line 5
    public function block_beforeInit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeInit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeInit"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 5, $this->source); })()), "beforeInit", [], "any", false, false, true, 5), 5, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_trackInit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trackInit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "trackInit"));

        // line 10
        echo "    _gaq.push(['_setAccount', '";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["trackId"]) || array_key_exists("trackId", $context) ? $context["trackId"] : (function () { throw new RuntimeError('Variable "trackId" does not exist.', 10, $this->source); })()), 10, $this->source), "html", null, true);
        echo "']);
    _gaq.push (['_gat._anonymizeIp']);
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_beforeTrack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeTrack"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeTrack"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 14, $this->source); })()), "beforeTrack", [], "any", false, false, true, 14), 14, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_track($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "track"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "track"));

        // line 17
        echo "    if (typeof _gaqPageView != \"undefined\"){
        _gaq.push(['_trackPageview', _gaqPageView]);
    } else {
        ";
        // line 20
        if ((isset($context["defaultPath"]) || array_key_exists("defaultPath", $context) ? $context["defaultPath"] : (function () { throw new RuntimeError('Variable "defaultPath" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        _gaq.push(['_trackPageview', '";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["defaultPath"]) || array_key_exists("defaultPath", $context) ? $context["defaultPath"] : (function () { throw new RuntimeError('Variable "defaultPath" does not exist.', 21, $this->source); })()), 21, $this->source), "html", null, true);
            echo "']);
        ";
        } else {
            // line 23
            echo "        _gaq.push(['_trackPageview']);
        ";
        }
        // line 25
        echo "    }
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_afterTrack($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterTrack"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterTrack"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 28, $this->source); })()), "afterTrack", [], "any", false, false, true, 28), 28, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_async($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "async"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "async"));

        // line 32
        echo "        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

        ";
        // line 34
        if ((isset($context["retargeting"]) || array_key_exists("retargeting", $context) ? $context["retargeting"] : (function () { throw new RuntimeError('Variable "retargeting" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        ";
        } else {
            // line 37
            echo "        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        ";
        }
        // line 39
        echo "
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_afterScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScript"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 44, $this->source); })()), "afterScript", [], "any", false, false, true, 44), 44, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_afterScriptTag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScriptTag"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterScriptTag"));

        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["blocks"]) || array_key_exists("blocks", $context) ? $context["blocks"] : (function () { throw new RuntimeError('Variable "blocks" does not exist.', 47, $this->source); })()), "afterScriptTag", [], "any", false, false, true, 47), 47, $this->source);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Analytics/Tracking/Google/Analytics/asynchronousTrackingCode.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  326 => 47,  307 => 44,  295 => 39,  291 => 37,  287 => 35,  285 => 34,  281 => 32,  271 => 31,  252 => 28,  241 => 25,  237 => 23,  231 => 21,  229 => 20,  224 => 17,  214 => 16,  195 => 14,  181 => 10,  171 => 9,  152 => 5,  133 => 4,  114 => 1,  104 => 47,  100 => 45,  98 => 44,  94 => 42,  92 => 31,  88 => 29,  86 => 28,  83 => 27,  81 => 16,  78 => 15,  76 => 14,  73 => 13,  71 => 9,  66 => 6,  63 => 5,  61 => 4,  57 => 2,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block beforeScriptTag %}{{ blocks.beforeScriptTag|raw }}{% endblock %}

<script>
    {% block beforeScript %}{{ blocks.beforeScript|raw }}{% endblock %}
    {% block beforeInit %}{{ blocks.beforeInit|raw }}{% endblock %}

    window._gaq = window._gaq || [];

    {% block trackInit %}
    _gaq.push(['_setAccount', '{{ trackId }}']);
    _gaq.push (['_gat._anonymizeIp']);
    {% endblock %}

    {% block beforeTrack %}{{ blocks.beforeTrack|raw }}{% endblock %}

    {% block track %}
    if (typeof _gaqPageView != \"undefined\"){
        _gaq.push(['_trackPageview', _gaqPageView]);
    } else {
        {% if defaultPath %}
        _gaq.push(['_trackPageview', '{{ defaultPath }}']);
        {% else %}
        _gaq.push(['_trackPageview']);
        {% endif %}
    }
    {% endblock %}

    {% block afterTrack %}{{ blocks.afterTrack|raw }}{% endblock %}

    (function() {
        {% block async %}
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

        {% if retargeting %}
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        {% else %}
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        {% endif %}

        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        {% endblock %}
    })();

    {% block afterScript %}{{ blocks.afterScript|raw }}{% endblock %}
</script>

{% block afterScriptTag %}{{ blocks.afterScriptTag|raw }}{% endblock %}
", "@PimcoreCore/Analytics/Tracking/Google/Analytics/asynchronousTrackingCode.html.twig", "/var/www/html/pimcore/ecommerce/vendor/pimcore/pimcore/bundles/CoreBundle/Resources/views/Analytics/Tracking/Google/Analytics/asynchronousTrackingCode.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "if" => 20);
        static $filters = array("raw" => 1, "escape" => 10);
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
