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

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_bd9b81c6c86c98f0ac9c3ce32e0383b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'panelContent' => [$this, 'block_panelContent'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "events", [], "any", false, false, true, 6), 6, $this->source)) > 0);
        // line 7
        echo "    ";
        $context["total_time"] = (((isset($context["has_time_events"]) || array_key_exists("has_time_events", $context) ? $context["has_time_events"] : (function () { throw new RuntimeError('Variable "has_time_events" does not exist.', 7, $this->source); })())) ? (twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "duration", [], "any", false, false, true, 7), 7, $this->source))) : ("n/a"));
        // line 8
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "events", [], "any", false, false, true, 8), 8, $this->source))) ? (twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "inittime", [], "any", false, false, true, 8), 8, $this->source))) : ("n/a"));
        // line 9
        echo "    ";
        $context["status_color"] = ((((isset($context["has_time_events"]) || array_key_exists("has_time_events", $context) ? $context["has_time_events"] : (function () { throw new RuntimeError('Variable "has_time_events" does not exist.', 9, $this->source); })()) && (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "duration", [], "any", false, false, true, 9) > 1000))) ? ("yellow") : (""));
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["total_time"]) || array_key_exists("total_time", $context) ? $context["total_time"] : (function () { throw new RuntimeError('Variable "total_time" does not exist.', 13, $this->source); })()), 13, $this->source), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
    ";
        // line 17
        ob_start();
        // line 18
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["total_time"]) || array_key_exists("total_time", $context) ? $context["total_time"] : (function () { throw new RuntimeError('Variable "total_time" does not exist.', 20, $this->source); })()), 20, $this->source), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["initialization_time"]) || array_key_exists("initialization_time", $context) ? $context["initialization_time"] : (function () { throw new RuntimeError('Variable "initialization_time" does not exist.', 24, $this->source); })()), 24, $this->source), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 28, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 28, $this->source); })())]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 32
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 33
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 39, $this->source); })()), "events", [], "any", false, false, true, 39), 39, $this->source)) > 0);
        // line 40
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 44
        echo twig_escape_filter($this->env, twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "duration", [], "any", false, false, true, 44), 44, $this->source)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 49
        echo twig_escape_filter($this->env, twig_sprintf("%.0f", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "inittime", [], "any", false, false, true, 49), 49, $this->source)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 53, $this->source); })()), "collectors", [], "any", false, false, true, 53), "memory", [], "any", false, false, true, 53)) {
            // line 54
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 55
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 55, $this->source); })()), "collectors", [], "any", false, false, true, 55), "memory", [], "any", false, false, true, 55), "memory", [], "any", false, false, true, 55) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MiB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 60, $this->source); })()), "children", [], "any", false, false, true, 60)) > 0)) {
            // line 61
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 64
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 64, $this->source); })()), "children", [], "any", false, false, true, 64), 64, $this->source)), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Request";
            // line 65
            echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 65, $this->source); })()), "children", [], "any", false, false, true, 65), 65, $this->source)) > 1)) ? ("s") : (""));
            echo "</span>
            </div>

            ";
            // line 68
            if ((isset($context["has_time_events"]) || array_key_exists("has_time_events", $context) ? $context["has_time_events"] : (function () { throw new RuntimeError('Variable "has_time_events" does not exist.', 68, $this->source); })())) {
                // line 69
                echo "                ";
                $context["subrequests_time"] = 0;
                // line 70
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 70, $this->source); })()), "children", [], "any", false, false, true, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 71
                    echo "                    ";
                    $context["subrequests_time"] = ((isset($context["subrequests_time"]) || array_key_exists("subrequests_time", $context) ? $context["subrequests_time"] : (function () { throw new RuntimeError('Variable "subrequests_time" does not exist.', 71, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "time"], "method", false, false, true, 71), "events", [], "any", false, false, true, 71), "__section__", [], "any", false, false, true, 71), "duration", [], "any", false, false, true, 71));
                    // line 72
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "            ";
            } else {
                // line 74
                echo "                ";
                $context["subrequests_time"] = "n/a";
                // line 75
                echo "            ";
            }
            // line 76
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["subrequests_time"]) || array_key_exists("subrequests_time", $context) ? $context["subrequests_time"] : (function () { throw new RuntimeError('Variable "subrequests_time" does not exist.', 78, $this->source); })()), 78, $this->source), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 79
            echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 79, $this->source); })()), "children", [], "any", false, false, true, 79), 79, $this->source)) > 1)) ? ("s") : (""));
            echo " time</span>
            </div>
        ";
        }
        // line 82
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 86
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "isStopwatchInstalled", [], "method", false, false, true, 86)) {
            // line 87
            echo "        <div class=\"empty\">
            <p>The Stopwatch component is not installed. If you want to see timing events, run: <code>composer require symfony/stopwatch</code>.</p>
        </div>
    ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 90
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "events", [], "any", false, false, true, 90))) {
            // line 91
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Check that symfony/stopwatch is installed and debugging enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 95
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_panelContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        // line 100
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" name=\"threshold\" id=\"threshold\" value=\"1\" min=\"0\" placeholder=\"1.1\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 107, $this->source); })()), "parent", [], "any", false, false, true, 107)) {
            // line 108
            echo "        <h3 class=\"dump-inline\">
            Sub-Request ";
            // line 109
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 109, $this->source); })()), "getcollector", [0 => "request"], "method", false, false, true, 109), "requestattributes", [], "any", false, false, true, 109), "get", [0 => "_controller"], "method", false, false, true, 109), 109, $this->source));
            echo "
            <small>
                ";
            // line 111
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 111, $this->source); })()), "events", [], "any", false, false, true, 111), "__section__", [], "any", false, false, true, 111), "duration", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 112, $this->source); })()), "parent", [], "any", false, false, true, 112), "token", [], "any", false, false, true, 112), "panel" => "time"]), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 115
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 115, $this->source); })()), "children", [], "any", false, false, true, 115)) > 0)) {
            // line 116
            echo "        <h3>
            Main Request <small>";
            // line 117
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "events", [], "any", false, false, true, 117), "__section__", [], "any", false, false, true, 117), "duration", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 120
        echo "
    ";
        // line 121
        echo twig_call_macro($macros["helper"], "macro_display_timeline", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 121, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "events", [], "any", false, false, true, 121), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "events", [], "any", false, false, true, 121), "__section__", [], "any", false, false, true, 121), "origin", [], "any", false, false, true, 121)], 121, $context, $this->getSourceContext());
        echo "

    ";
        // line 123
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 123, $this->source); })()), "children", [], "any", false, false, true, 123))) {
            // line 124
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 126
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 126, $this->source); })()), "children", [], "any", false, false, true, 126), 126, $this->source)), "html", null, true);
            echo ")</small></h3>

        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 128, $this->source); })()), "children", [], "any", false, false, true, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo "            ";
                $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "time"], "method", false, false, true, 129), "events", [], "any", false, false, true, 129);
                // line 130
                echo "            <h4>
                <a href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, true, 131), "panel" => "time"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, true, 131), "identifier", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "</a>
                <small>";
                // line 132
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 132, $this->source); })()), "__section__", [], "any", false, false, true, 132), "duration", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 135
                echo twig_call_macro($macros["helper"], "macro_display_timeline", [twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, true, 135), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 135, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "events", [], "any", false, false, true, 135), "__section__", [], "any", false, false, true, 135), "origin", [], "any", false, false, true, 135)], 135, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "    ";
        }
        // line 138
        echo "
<svg id=\"timeline-template\" width=\"0\" height=\"0\">
  <defs>
    <pattern id=\"subrequest\" class=\"timeline-subrequest-pattern\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\" viewBox=\"0 0 40 40\">
        <path d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/>
    </pattern>
  </defs>
</svg>
<style type=\"text/css\">
";
        // line 147
        $this->loadTemplate("@WebProfiler/Collector/time.css.twig", "@WebProfiler/Collector/time.html.twig", 147)->display($context);
        // line 148
        echo "</style>
<script>
";
        // line 150
        $this->loadTemplate("@WebProfiler/Collector/time.js", "@WebProfiler/Collector/time.html.twig", 150)->display($context);
        // line 151
        echo "</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 154
    public function macro_dump_request_data($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 156
            $macros["__internal_parse_0"] = $this;
            // line 157
            echo "{
    id: \"";
            // line 158
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 158, $this->source); })()), 158, $this->source), "js", null, true);
            echo "\",
    left: ";
            // line 159
            echo twig_escape_filter($this->env, twig_sprintf("%F", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 159, $this->source); })()), "__section__", [], "any", false, false, true, 159), "origin", [], "any", false, false, true, 159) - (isset($context["origin"]) || array_key_exists("origin", $context) ? $context["origin"] : (function () { throw new RuntimeError('Variable "origin" does not exist.', 159, $this->source); })()))), "js", null, true);
            echo ",
    end: \"";
            // line 160
            echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 160, $this->source); })()), "__section__", [], "any", false, false, true, 160), "endtime", [], "any", false, false, true, 160), 160, $this->source)), "js", null, true);
            echo "\",
    events: [ ";
            // line 161
            echo twig_call_macro($macros["__internal_parse_0"], "macro_dump_events", [(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 161, $this->source); })())], 161, $context, $this->getSourceContext());
            echo " ],
}
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 166
    public function macro_dump_events($__events__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "events" => $__events__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 168, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 169
                if (("__section__" != $context["name"])) {
                    // line 170
                    echo "{
    name: \"";
                    // line 171
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 171, $this->source), "js", null, true);
                    echo "\",
    category: \"";
                    // line 172
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "category", [], "any", false, false, true, 172), 172, $this->source), "js", null, true);
                    echo "\",
    origin: ";
                    // line 173
                    echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "origin", [], "any", false, false, true, 173), 173, $this->source)), "js", null, true);
                    echo ",
    starttime: ";
                    // line 174
                    echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "starttime", [], "any", false, false, true, 174), 174, $this->source)), "js", null, true);
                    echo ",
    endtime: ";
                    // line 175
                    echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "endtime", [], "any", false, false, true, 175), 175, $this->source)), "js", null, true);
                    echo ",
    duration: ";
                    // line 176
                    echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, true, 176), 176, $this->source)), "js", null, true);
                    echo ",
    memory: ";
                    // line 177
                    echo twig_escape_filter($this->env, twig_sprintf("%.1F", ((twig_get_attribute($this->env, $this->source, $context["event"], "memory", [], "any", false, false, true, 177) / 1024) / 1024)), "js", null, true);
                    echo ",
    elements: {},
    periods: [";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "periods", [], "any", false, false, true, 180));
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 181
                        echo "{
            start: ";
                        // line 182
                        echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["period"], "starttime", [], "any", false, false, true, 182), 182, $this->source)), "js", null, true);
                        echo ",
            end: ";
                        // line 183
                        echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["period"], "endtime", [], "any", false, false, true, 183), 183, $this->source)), "js", null, true);
                        echo ",
            duration: ";
                        // line 184
                        echo twig_escape_filter($this->env, twig_sprintf("%F", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["period"], "duration", [], "any", false, false, true, 184), 184, $this->source)), "js", null, true);
                        echo ",
            elements: {}
        },";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "],
},
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 195
    public function macro_display_timeline($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 196
            $macros["helper"] = $this;
            // line 197
            echo "    <div class=\"sf-profiler-timeline\">
        <div id=\"legend-";
            // line 198
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 198, $this->source); })()), 198, $this->source), "html", null, true);
            echo "\" class=\"legends\"></div>
        <svg id=\"timeline-";
            // line 199
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 199, $this->source); })()), 199, $this->source), "html", null, true);
            echo "\" class=\"timeline-graph\"></svg>
        <script>";
            // line 201
            echo "            window.addEventListener('load', function onLoad() {
                const theme = new Theme();

                new TimelineEngine(
                    theme,
                    new SvgRenderer(document.getElementById('timeline-";
            // line 206
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 206, $this->source); })()), 206, $this->source), "js", null, true);
            echo "')),
                    new Legend(document.getElementById('legend-";
            // line 207
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 207, $this->source); })()), 207, $this->source), "js", null, true);
            echo "'), theme),
                    document.getElementById('threshold'),
                    ";
            // line 209
            echo twig_call_macro($macros["helper"], "macro_dump_request_data", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 209, $this->source); })()), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 209, $this->source); })()), (isset($context["origin"]) || array_key_exists("origin", $context) ? $context["origin"] : (function () { throw new RuntimeError('Variable "origin" does not exist.', 209, $this->source); })())], 209, $context, $this->getSourceContext());
            echo "
                );
            });
        ";
            // line 212
            echo "</script>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  658 => 212,  652 => 209,  647 => 207,  643 => 206,  636 => 201,  632 => 199,  628 => 198,  625 => 197,  623 => 196,  602 => 195,  580 => 188,  571 => 184,  567 => 183,  563 => 182,  560 => 181,  556 => 180,  551 => 177,  547 => 176,  543 => 175,  539 => 174,  535 => 173,  531 => 172,  527 => 171,  524 => 170,  522 => 169,  518 => 168,  499 => 166,  481 => 161,  477 => 160,  473 => 159,  469 => 158,  466 => 157,  464 => 156,  443 => 154,  432 => 151,  430 => 150,  426 => 148,  424 => 147,  413 => 138,  410 => 137,  402 => 135,  396 => 132,  390 => 131,  387 => 130,  384 => 129,  380 => 128,  375 => 126,  371 => 124,  369 => 123,  364 => 121,  361 => 120,  355 => 117,  352 => 116,  350 => 115,  344 => 112,  340 => 111,  335 => 109,  332 => 108,  330 => 107,  321 => 100,  311 => 99,  297 => 95,  291 => 91,  289 => 90,  284 => 87,  282 => 86,  276 => 82,  270 => 79,  266 => 78,  262 => 76,  259 => 75,  256 => 74,  253 => 73,  247 => 72,  244 => 71,  239 => 70,  236 => 69,  234 => 68,  228 => 65,  224 => 64,  219 => 61,  217 => 60,  214 => 59,  207 => 55,  204 => 54,  202 => 53,  195 => 49,  187 => 44,  181 => 40,  178 => 39,  168 => 38,  154 => 33,  151 => 32,  141 => 31,  129 => 28,  126 => 27,  120 => 24,  113 => 20,  109 => 18,  107 => 17,  104 => 16,  98 => 13,  93 => 12,  91 => 11,  88 => 10,  85 => 9,  82 => 8,  79 => 7,  76 => 6,  66 => 5,  55 => 1,  53 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% set has_time_events = collector.events|length > 0 %}
    {% set total_time = has_time_events ? '%.0f'|format(collector.duration) : 'n/a' %}
    {% set initialization_time = collector.events|length ? '%.0f'|format(collector.inittime) : 'n/a' %}
    {% set status_color = has_time_events and collector.duration > 1000 ? 'yellow' %}

    {% set icon %}
        {{ include('@WebProfiler/Icon/time.svg') }}
        <span class=\"sf-toolbar-value\">{{ total_time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ total_time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>{{ initialization_time }} ms</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/time.svg') }}</span>
        <strong>Performance</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set has_time_events = collector.events|length > 0 %}
    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.duration) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.inittime) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        {% if profile.collectors.memory %}
            <div class=\"metric\">
                <span class=\"value\">{{ '%.2f'|format(profile.collectors.memory.memory / 1024 / 1024) }} <span class=\"unit\">MiB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        {% endif %}

        {% if profile.children|length > 0 %}
            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">{{ profile.children|length }}</span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }}</span>
            </div>

            {% if has_time_events %}
                {% set subrequests_time = 0 %}
                {% for child in profile.children %}
                    {% set subrequests_time = subrequests_time + child.getcollector('time').events.__section__.duration %}
                {% endfor %}
            {% else %}
                {% set subrequests_time = 'n/a' %}
            {% endif %}

            <div class=\"metric\">
                <span class=\"value\">{{ subrequests_time }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }} time</span>
            </div>
        {% endif %}
    </div>

    <h2>Execution timeline</h2>

    {% if not collector.isStopwatchInstalled() %}
        <div class=\"empty\">
            <p>The Stopwatch component is not installed. If you want to see timing events, run: <code>composer require symfony/stopwatch</code>.</p>
        </div>
    {% elseif collector.events is empty %}
        <div class=\"empty\">
            <p>No timing events have been recorded. Check that symfony/stopwatch is installed and debugging enabled in the kernel.</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" name=\"threshold\" id=\"threshold\" value=\"1\" min=\"0\" placeholder=\"1.1\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    {% if profile.parent %}
        <h3 class=\"dump-inline\">
            Sub-Request {{ profiler_dump(profile.getcollector('request').requestattributes.get('_controller')) }}
            <small>
                {{ collector.events.__section__.duration }} ms
                <a class=\"newline\" href=\"{{ path('_profiler', { token: profile.parent.token, panel: 'time' }) }}\">Return to parent request</a>
            </small>
        </h3>
    {% elseif profile.children|length > 0 %}
        <h3>
            Main Request <small>{{ collector.events.__section__.duration }} ms</small>
        </h3>
    {% endif %}

    {{ helper.display_timeline(token, collector.events, collector.events.__section__.origin) }}

    {% if profile.children|length %}
        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>({{ profile.children|length }})</small></h3>

        {% for child in profile.children %}
            {% set events = child.getcollector('time').events %}
            <h4>
                <a href=\"{{ path('_profiler', { token: child.token, panel: 'time' }) }}\">{{ child.getcollector('request').identifier }}</a>
                <small>{{ events.__section__.duration }} ms</small>
            </h4>

            {{ helper.display_timeline(child.token, events, collector.events.__section__.origin) }}
        {% endfor %}
    {% endif %}

<svg id=\"timeline-template\" width=\"0\" height=\"0\">
  <defs>
    <pattern id=\"subrequest\" class=\"timeline-subrequest-pattern\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\" viewBox=\"0 0 40 40\">
        <path d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/>
    </pattern>
  </defs>
</svg>
<style type=\"text/css\">
{% include '@WebProfiler/Collector/time.css.twig' %}
</style>
<script>
{% include '@WebProfiler/Collector/time.js' %}
</script>
{% endblock %}

{% macro dump_request_data(token, events, origin) %}
{% autoescape 'js' %}
{% from _self import dump_events %}
{
    id: \"{{ token }}\",
    left: {{ \"%F\"|format(events.__section__.origin - origin) }},
    end: \"{{ '%F'|format(events.__section__.endtime) }}\",
    events: [ {{ dump_events(events) }} ],
}
{% endautoescape %}
{% endmacro %}

{% macro dump_events(events) %}
{% autoescape 'js' %}
{% for name, event in events %}
{% if '__section__' != name %}
{
    name: \"{{ name }}\",
    category: \"{{ event.category }}\",
    origin: {{ \"%F\"|format(event.origin) }},
    starttime: {{ \"%F\"|format(event.starttime) }},
    endtime: {{ \"%F\"|format(event.endtime) }},
    duration: {{ \"%F\"|format(event.duration) }},
    memory: {{ \"%.1F\"|format(event.memory / 1024 / 1024) }},
    elements: {},
    periods: [
        {%- for period in event.periods -%}
        {
            start: {{ \"%F\"|format(period.starttime) }},
            end: {{ \"%F\"|format(period.endtime) }},
            duration: {{ \"%F\"|format(period.duration) }},
            elements: {}
        },
        {%- endfor -%}
    ],
},
{% endif %}
{% endfor %}
{% endautoescape %}
{% endmacro %}

{% macro display_timeline(token, events, origin) %}
{% import _self as helper %}
    <div class=\"sf-profiler-timeline\">
        <div id=\"legend-{{ token }}\" class=\"legends\"></div>
        <svg id=\"timeline-{{ token }}\" class=\"timeline-graph\"></svg>
        <script>{% autoescape 'js' %}
            window.addEventListener('load', function onLoad() {
                const theme = new Theme();

                new TimelineEngine(
                    theme,
                    new SvgRenderer(document.getElementById('timeline-{{ token }}')),
                    new Legend(document.getElementById('legend-{{ token }}'), theme),
                    document.getElementById('threshold'),
                    {{ helper.dump_request_data(token, events, origin) }}
                );
            });
        {% endautoescape %}</script>
    </div>
{% endmacro %}
", "@WebProfiler/Collector/time.html.twig", "/var/www/html/pimcore/ecommerce/vendor/symfony/web-profiler-bundle/Resources/views/Collector/time.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 3, "set" => 6, "if" => 53, "for" => 70, "include" => 147, "macro" => 154, "autoescape" => 155, "from" => 156);
        static $filters = array("length" => 6, "format" => 7, "escape" => 13);
        static $functions = array("include" => 12, "profiler_dump" => 109, "path" => 112);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'if', 'for', 'include', 'macro', 'autoescape', 'from'],
                ['length', 'format', 'escape'],
                ['include', 'profiler_dump', 'path']
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
