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

/* @WebProfiler/Collector/notifier.html.twig */
class __TwigTemplate_6cb92aff967adcfde87feb530c22e0f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'head' => [$this, 'block_head'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/notifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/notifier.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/notifier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "events", [], "any", false, false, true, 4);
        // line 5
        echo "
    ";
        // line 6
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 6, $this->source); })()), "messages", [], "any", false, false, true, 6))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $this->loadTemplate("@WebProfiler/Icon/notifier.svg", "@WebProfiler/Collector/notifier.html.twig", 8)->display($context);
            // line 9
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()), "messages", [], "any", false, false, true, 9), 9, $this->source)), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Sent notifications</b>
                <span class=\"sf-toolbar-status\">";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 15, $this->source); })()), "messages", [], "any", false, false, true, 15), 15, $this->source)), "html", null, true);
            echo "</span>
            </div>

            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()), "transports", [], "any", false, false, true, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>";
                // line 20
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["transport"], 20, $this->source), "html", null, true);
                echo "</b>
                    <span class=\"sf-toolbar-status\">";
                // line 21
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 21, $this->source); })()), "messages", [0 => $context["transport"]], "method", false, false, true, 21), 21, $this->source)), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 26, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 31
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 68
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "events", [], "any", false, false, true, 68);
        // line 69
        echo "
    <span class=\"label ";
        // line 70
        echo ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 70, $this->source); })()), "messages", [], "any", false, false, true, 70), 70, $this->source))) ? ("") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 71
        echo twig_include($this->env, $context, "@WebProfiler/Icon/notifier.svg");
        echo "</span>

        <strong>Notifications</strong>
        ";
        // line 74
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 74, $this->source); })()), "messages", [], "any", false, false, true, 74)) > 0)) {
            // line 75
            echo "            <span class=\"count\">
                <span>";
            // line 76
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 76, $this->source); })()), "messages", [], "any", false, false, true, 76), 76, $this->source)), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 79
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 83
        echo "    ";
        $context["events"] = twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "events", [], "any", false, false, true, 83);
        // line 84
        echo "
    <h2>Notifications</h2>

    ";
        // line 87
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 87, $this->source); })()), "messages", [], "any", false, false, true, 87))) {
            // line 88
            echo "        <div class=\"empty\">
            <p>No notifications were sent.</p>
        </div>
    ";
        }
        // line 92
        echo "
    <div class=\"metrics\">
        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 94, $this->source); })()), "transports", [], "any", false, false, true, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 95
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 96
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 96, $this->source); })()), "messages", [0 => $context["transport"]], "method", false, false, true, 96), 96, $this->source)), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 97
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["transport"], 97, $this->source), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "    </div>

    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 102, $this->source); })()), "transports", [], "any", false, false, true, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 103
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["transport"], 103, $this->source), "html", null, true);
            echo "</h3>

        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 107, $this->source); })()), "events", [0 => $context["transport"]], "method", false, false, true, 107));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 108
                echo "                    ";
                $context["message"] = twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, true, 108);
                // line 109
                echo "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Message #";
                // line 110
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo " <small>(";
                echo ((twig_get_attribute($this->env, $this->source, $context["event"], "isQueued", [], "method", false, false, true, 110)) ? ("queued") : ("sent"));
                echo ")</small></h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                <div class=\"card-block\">
                                    <span class=\"label\">Subject</span>
                                    <h2 class=\"m-t-10\">";
                // line 115
                (((twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, true, 115) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, true, 115)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, true, 115), "html", null, true))) : (print ("(empty)")));
                echo "</h2>
                                </div>
                                ";
                // line 117
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "any", true, true, true, 117)) {
                    // line 118
                    echo "                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <span class=\"label\">Content</span>
                                                <pre class=\"prewrap\">";
                    // line 122
                    (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, true, true, 122), "getContent", [], "method", true, true, true, 122) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, true, true, 122), "getContent", [], "method", false, false, true, 122)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "method", false, true, true, 122), "getContent", [], "method", false, false, true, 122), "html", null, true))) : (print ("(empty)")));
                    echo "</pre>
                                                <span class=\"label\">Importance</span>
                                                <pre class=\"prewrap\">";
                    // line 124
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 124, $this->source); })()), "getNotification", [], "method", false, false, true, 124), "getImportance", [], "method", false, false, true, 124), 124, $this->source), "html", null, true);
                    echo "</pre>
                                            </div>
                                        </div>
                                    </div>
                                ";
                }
                // line 129
                echo "                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            ";
                // line 131
                if (twig_get_attribute($this->env, $this->source, ($context["message"] ?? null), "getNotification", [], "any", true, true, true, 131)) {
                    // line 132
                    echo "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Notification</h3>
                                                    ";
                    // line 134
                    $context["notification"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, true, 134), "getNotification", [], "method", false, false, true, 134);
                    // line 135
                    echo "                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                    // line 137
                    echo twig_escape_filter($this->env, ("Subject: " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 137, $this->source); })()), "getSubject", [], "method", false, false, true, 137), 137, $this->source)), "html", null, true);
                    echo "<br/>";
                    // line 138
                    echo twig_escape_filter($this->env, ("Content: " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 138, $this->source); })()), "getContent", [], "method", false, false, true, 138), 138, $this->source)), "html", null, true);
                    echo "<br/>";
                    // line 139
                    echo twig_escape_filter($this->env, ("Importance: " . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 139, $this->source); })()), "getImportance", [], "method", false, false, true, 139), 139, $this->source)), "html", null, true);
                    echo "<br/>";
                    // line 140
                    echo twig_escape_filter($this->env, ("Emoji: " . ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 140, $this->source); })()), "getEmoji", [], "method", false, false, true, 140))) ? ("(empty)") : (twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 140, $this->source); })()), "getEmoji", [], "method", false, false, true, 140)))), "html", null, true);
                    echo "<br/>";
                    // line 141
                    echo twig_escape_filter($this->env, ("Exception: " . (((twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", true, true, true, 141) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, true, 141)))) ? (twig_get_attribute($this->env, $this->source, ($context["notification"] ?? null), "getException", [], "method", false, false, true, 141)) : ("(empty)"))), "html", null, true);
                    echo "<br/>";
                    // line 142
                    echo twig_escape_filter($this->env, ("ExceptionAsString: " . ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 142, $this->source); })()), "getExceptionAsString", [], "method", false, false, true, 142))) ? ("(empty)") : (twig_get_attribute($this->env, $this->source, (isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 142, $this->source); })()), "getExceptionAsString", [], "method", false, false, true, 142)))), "html", null, true);
                    echo "
                                                        </pre>
                                                    </div>
                                                </div>
                                            ";
                }
                // line 147
                echo "                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Message Options</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">";
                // line 151
                if ((null === twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 151, $this->source); })()), "getOptions", [], "method", false, false, true, 151))) {
                    // line 152
                    echo "(empty)";
                } else {
                    // line 154
                    echo twig_escape_filter($this->env, json_encode($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 154, $this->source); })()), "getOptions", [], "method", false, false, true, 154), 154, $this->source), twig_constant("JSON_PRETTY_PRINT")), "html", null, true);
                }
                // line 156
                echo "                                                        </pre>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/notifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 165,  427 => 156,  424 => 154,  421 => 152,  419 => 151,  414 => 147,  406 => 142,  403 => 141,  400 => 140,  397 => 139,  394 => 138,  391 => 137,  388 => 135,  386 => 134,  382 => 132,  380 => 131,  376 => 129,  368 => 124,  363 => 122,  357 => 118,  355 => 117,  350 => 115,  340 => 110,  337 => 109,  334 => 108,  317 => 107,  309 => 103,  305 => 102,  301 => 100,  292 => 97,  288 => 96,  285 => 95,  281 => 94,  277 => 92,  271 => 88,  269 => 87,  264 => 84,  261 => 83,  251 => 82,  240 => 79,  234 => 76,  231 => 75,  229 => 74,  223 => 71,  219 => 70,  216 => 69,  213 => 68,  203 => 67,  157 => 31,  147 => 30,  134 => 26,  131 => 25,  128 => 24,  119 => 21,  115 => 20,  112 => 19,  108 => 18,  102 => 15,  98 => 13,  96 => 12,  93 => 11,  87 => 9,  84 => 8,  81 => 7,  79 => 6,  76 => 5,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set events = collector.events %}

    {% if events.messages|length %}
        {% set icon %}
            {% include('@WebProfiler/Icon/notifier.svg') %}
            <span class=\"sf-toolbar-value\">{{ events.messages|length }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent notifications</b>
                <span class=\"sf-toolbar-status\">{{ events.messages|length }}</span>
            </div>

            {% for transport in events.transports %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>{{ transport }}</b>
                    <span class=\"sf-toolbar-status\">{{ events.messages(transport)|length }}</span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': profiler_url }) }}
    {% endif %}
{% endblock %}

{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        /* utility classes */
        .m-t-0 { margin-top: 0 !important; }
        .m-t-10 { margin-top: 10px !important; }

        /* basic grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        /* small tabs */
        .sf-tabs-sm .tab-navigation li {
            font-size: 14px;
            padding: .3em .5em;
        }
    </style>
{% endblock %}

{% block menu %}
    {% set events = collector.events %}

    <span class=\"label {{ events.messages|length ? '' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/notifier.svg') }}</span>

        <strong>Notifications</strong>
        {% if events.messages|length > 0 %}
            <span class=\"count\">
                <span>{{ events.messages|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% set events = collector.events %}

    <h2>Notifications</h2>

    {% if not events.messages|length %}
        <div class=\"empty\">
            <p>No notifications were sent.</p>
        </div>
    {% endif %}

    <div class=\"metrics\">
        {% for transport in events.transports %}
            <div class=\"metric\">
                <span class=\"value\">{{ events.messages(transport)|length }}</span>
                <span class=\"label\">{{ transport }}</span>
            </div>
        {% endfor %}
    </div>

    {% for transport in events.transports %}
        <h3>{{ transport }}</h3>

        <div class=\"card-block\">
            <div class=\"sf-tabs sf-tabs-sm\">
                {% for event in events.events(transport) %}
                    {% set message = event.message %}
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Message #{{ loop.index }} <small>({{ event.isQueued() ? 'queued' : 'sent' }})</small></h3>
                        <div class=\"tab-content\">
                            <div class=\"card\">
                                <div class=\"card-block\">
                                    <span class=\"label\">Subject</span>
                                    <h2 class=\"m-t-10\">{{ message.getSubject() ?? '(empty)' }}</h2>
                                </div>
                                {% if message.getNotification is defined %}
                                    <div class=\"card-block\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <span class=\"label\">Content</span>
                                                <pre class=\"prewrap\">{{ message.getNotification().getContent() ?? '(empty)' }}</pre>
                                                <span class=\"label\">Importance</span>
                                                <pre class=\"prewrap\">{{ message.getNotification().getImportance() }}</pre>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                                    <div class=\"card-block\">
                                        <div class=\"sf-tabs sf-tabs-sm\">
                                            {% if message.getNotification is defined %}
                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Notification</h3>
                                                    {% set notification = event.message.getNotification() %}
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                            {{- 'Subject: ' ~ notification.getSubject() }}<br/>
                                                            {{- 'Content: ' ~ notification.getContent() }}<br/>
                                                            {{- 'Importance: ' ~ notification.getImportance() }}<br/>
                                                            {{- 'Emoji: ' ~ (notification.getEmoji() is empty ? '(empty)' : notification.getEmoji()) }}<br/>
                                                            {{- 'Exception: ' ~ notification.getException() ?? '(empty)' }}<br/>
                                                            {{- 'ExceptionAsString: ' ~ (notification.getExceptionAsString() is empty ? '(empty)' : notification.getExceptionAsString()) }}
                                                        </pre>
                                                    </div>
                                                </div>
                                            {% endif %}
                                                <div class=\"tab\">
                                                    <h3 class=\"tab-title\">Message Options</h3>
                                                    <div class=\"tab-content\">
                                                        <pre class=\"prewrap\" style=\"max-height: 600px\">
                                                            {%- if message.getOptions() is null %}
                                                                {{- '(empty)' }}
                                                            {%- else %}
                                                                {{- message.getOptions()|json_encode(constant('JSON_PRETTY_PRINT')) }}
                                                            {%- endif %}
                                                        </pre>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "@WebProfiler/Collector/notifier.html.twig", "/var/www/html/pimcore/ecommerce/vendor/symfony/web-profiler-bundle/Resources/views/Collector/notifier.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "if" => 6, "include" => 8, "for" => 18);
        static $filters = array("length" => 6, "escape" => 9, "json_encode" => 154);
        static $functions = array("include" => 26, "constant" => 154);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'for'],
                ['length', 'escape', 'json_encode'],
                ['include', 'constant']
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
