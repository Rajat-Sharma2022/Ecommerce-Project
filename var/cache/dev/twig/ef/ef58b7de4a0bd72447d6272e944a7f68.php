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

/* @Security/Collector/security.html.twig */
class __TwigTemplate_442ac014ea3a6f6bcd2c9c1bf8134ed9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'toolbar' => [$this, 'block_toolbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "firewall", [], "any", false, false, true, 6)) {
            // line 7
            echo "        ";
            $context["color_code"] = (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "enabled", [], "any", false, false, true, 7) &&  !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "authenticatorManagerEnabled", [], "any", false, false, true, 7))) ? ("yellow") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, true, 10)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, true, 10), 10, $this->source), "n/a")) : ("n/a")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "impersonated", [], "any", false, false, true, 14)) {
                // line 15
                echo "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "impersonatorUser", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</span>
                    </div>
                </div>
            ";
            }
            // line 22
            echo "
            <div class=\"sf-toolbar-info-group\">
                ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "enabled", [], "any", false, false, true, 24)) {
                // line 25
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "token", [], "any", false, false, true, 25)) {
                    // line 26
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>";
                    // line 28
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                    echo "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-";
                    // line 33
                    echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "authenticated", [], "any", false, false, true, 33)) ? ("green") : ("yellow"));
                    echo "\">";
                    echo ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 33, $this->source); })()), "authenticated", [], "any", false, false, true, 33)) ? ("Yes") : ("No"));
                    echo "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                ";
                    // line 39
                    $context["remainingRoles"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 39, $this->source); })()), "roles", [], "any", false, false, true, 39), 39, $this->source), 1);
                    // line 40
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "roles", [], "any", false, false, true, 40), 40, $this->source)), "html", null, true);
                    echo "
                                ";
                    // line 41
                    if ( !twig_test_empty((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 41, $this->source); })()))) {
                        // line 42
                        echo "                                    +
                                    <abbr title=\"";
                        // line 43
                        echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 43, $this->source); })()), 43, $this->source), ", "), "html", null, true);
                        echo "\">
                                        ";
                        // line 44
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 44, $this->source); })()), 44, $this->source)), "html", null, true);
                        echo " more
                                    </abbr>
                                ";
                    }
                    // line 47
                    echo "                            </span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>";
                    // line 52
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "tokenClass", [], "any", false, false, true, 52), 52, $this->source));
                    echo "</span>
                        </div>
                    ";
                } else {
                    // line 55
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    ";
                }
                // line 60
                echo "
                    ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 61, $this->source); })()), "firewall", [], "any", false, false, true, 61)) {
                    // line 62
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>";
                    // line 64
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "firewall", [], "any", false, false, true, 64), "name", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo "</span>
                        </div>
                    ";
                }
                // line 67
                echo "
                    ";
                // line 68
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "token", [], "any", false, false, true, 68) && twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "logoutUrl", [], "any", false, false, true, 68))) {
                    // line 69
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "logoutUrl", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    echo "\">Logout</a>
                                ";
                    // line 73
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "impersonated", [], "any", false, false, true, 73) && twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "impersonationExitPath", [], "any", false, false, true, 73))) {
                        // line 74
                        echo "                                    | <a href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "impersonationExitPath", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                        echo "\">Exit impersonation</a>
                                ";
                    }
                    // line 76
                    echo "                            </span>
                        </div>
                    ";
                }
                // line 79
                echo "                ";
            } else {
                // line 80
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                ";
            }
            // line 84
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 86
            echo "
        ";
            // line 87
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 87, $this->source); })()), "status" => (isset($context["color_code"]) || array_key_exists("color_code", $context) ? $context["color_code"] : (function () { throw new RuntimeError('Variable "color_code" does not exist.', 87, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 92
        echo "    <span class=\"label ";
        echo ((( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "firewall", [], "any", false, false, true, 92) ||  !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "token", [], "any", false, false, true, 92))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 93
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 99
        echo "    <h2>Security</h2>
    ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "enabled", [], "any", false, false, true, 100)) {
            // line 101
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 102
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 102, $this->source); })()), "token", [], "any", false, false, true, 102))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    ";
            // line 106
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "token", [], "any", false, false, true, 106)) {
                // line 107
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 109
                (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, true, 109) == "anon.")) ? (print ("Anonymous")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, true, 109), "html", null, true))));
                echo "</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 114
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 114, $this->source); })()), "authenticated", [], "any", false, false, true, 114)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Authenticated</span>
                            </div>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"key\">Property</th>
                                    <th scope=\"col\">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        ";
                // line 130
                echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 130, $this->source); })()), "roles", [], "any", false, false, true, 130))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 130, $this->source); })()), "roles", [], "any", false, false, true, 130), 130, $this->source), 1)));
                echo "

                                        ";
                // line 132
                if (( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "authenticated", [], "any", false, false, true, 132) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 132, $this->source); })()), "roles", [], "any", false, false, true, 132)))) {
                    // line 133
                    echo "                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        ";
                }
                // line 135
                echo "                                    </td>
                                </tr>

                                ";
                // line 138
                if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 138, $this->source); })()), "supportsRoleHierarchy", [], "any", false, false, true, 138)) {
                    // line 139
                    echo "                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>";
                    // line 141
                    echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "inheritedRoles", [], "any", false, false, true, 141))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "inheritedRoles", [], "any", false, false, true, 141), 141, $this->source), 1)));
                    echo "</td>
                                </tr>
                                ";
                }
                // line 144
                echo "
                                ";
                // line 145
                if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 145, $this->source); })()), "token", [], "any", false, false, true, 145)) {
                    // line 146
                    echo "                                <tr>
                                    <th>Token</th>
                                    <td>";
                    // line 148
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 148, $this->source); })()), "token", [], "any", false, false, true, 148), 148, $this->source));
                    echo "</td>
                                </tr>
                                ";
                }
                // line 151
                echo "                            </tbody>
                        </table>
                    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 153
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 153, $this->source); })()), "enabled", [], "any", false, false, true, 153)) {
                // line 154
                echo "                        <div class=\"empty\">
                            <p>There is no security token.</p>
                        </div>
                    ";
            }
            // line 158
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 161
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 161, $this->source); })()), "firewall", [], "any", false, false, true, 161), "security_enabled", [], "any", false, false, true, 161))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    ";
            // line 164
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 164, $this->source); })()), "firewall", [], "any", false, false, true, 164)) {
                // line 165
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 167
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 167, $this->source); })()), "firewall", [], "any", false, false, true, 167), "name", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 171
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 171, $this->source); })()), "firewall", [], "any", false, false, true, 171), "security_enabled", [], "any", false, false, true, 171)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 175
                echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 175, $this->source); })()), "firewall", [], "any", false, false, true, 175), "stateless", [], "any", false, false, true, 175)) ? ("yes") : ("no"))) . ".svg"));
                echo "</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                            ";
                // line 178
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 178, $this->source); })()), "authenticatorManagerEnabled", [], "any", false, false, true, 178) == false)) {
                    // line 179
                    echo "                                <div class=\"metric\">
                                    <span class=\"value\">";
                    // line 180
                    echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 180, $this->source); })()), "firewall", [], "any", false, false, true, 180), "allows_anonymous", [], "any", false, false, true, 180)) ? ("yes") : ("no"))) . ".svg"));
                    echo "</span>
                                    <span class=\"label\">Allows anonymous</span>
                                </div>
                            ";
                }
                // line 184
                echo "                        </div>

                        ";
                // line 186
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "firewall", [], "any", false, false, true, 186), "security_enabled", [], "any", false, false, true, 186)) {
                    // line 187
                    echo "                            <h4>Configuration</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"key\">Key</th>
                                        <th scope=\"col\">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>provider</th>
                                        <td>";
                    // line 198
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 198, $this->source); })()), "firewall", [], "any", false, false, true, 198), "provider", [], "any", false, false, true, 198)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 198, $this->source); })()), "firewall", [], "any", false, false, true, 198), "provider", [], "any", false, false, true, 198), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>";
                    // line 202
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 202, $this->source); })()), "firewall", [], "any", false, false, true, 202), "context", [], "any", false, false, true, 202)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 202, $this->source); })()), "firewall", [], "any", false, false, true, 202), "context", [], "any", false, false, true, 202), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>";
                    // line 206
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 206, $this->source); })()), "firewall", [], "any", false, false, true, 206), "entry_point", [], "any", false, false, true, 206)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 206, $this->source); })()), "firewall", [], "any", false, false, true, 206), "entry_point", [], "any", false, false, true, 206), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>";
                    // line 210
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 210, $this->source); })()), "firewall", [], "any", false, false, true, 210), "user_checker", [], "any", false, false, true, 210)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 210, $this->source); })()), "firewall", [], "any", false, false, true, 210), "user_checker", [], "any", false, false, true, 210), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>";
                    // line 214
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 214, $this->source); })()), "firewall", [], "any", false, false, true, 214), "access_denied_handler", [], "any", false, false, true, 214)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 214, $this->source); })()), "firewall", [], "any", false, false, true, 214), "access_denied_handler", [], "any", false, false, true, 214), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>";
                    // line 218
                    ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 218, $this->source); })()), "firewall", [], "any", false, false, true, 218), "access_denied_url", [], "any", false, false, true, 218)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 218, $this->source); })()), "firewall", [], "any", false, false, true, 218), "access_denied_url", [], "any", false, false, true, 218), "html", null, true))) : (print ("(none)")));
                    echo "</td>
                                    </tr>
                                    ";
                    // line 220
                    if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 220, $this->source); })()), "authenticatorManagerEnabled", [], "any", false, false, true, 220)) {
                        // line 221
                        echo "                                        <tr>
                                            <th>authenticators</th>
                                            <td>";
                        // line 223
                        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 223, $this->source); })()), "firewall", [], "any", false, false, true, 223), "authenticators", [], "any", false, false, true, 223))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 223, $this->source); })()), "firewall", [], "any", false, false, true, 223), "authenticators", [], "any", false, false, true, 223), 223, $this->source), 1)));
                        echo "</td>
                                        </tr>
                                    ";
                    } else {
                        // line 226
                        echo "                                        <tr>
                                            <th>listeners</th>
                                            <td>";
                        // line 228
                        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 228, $this->source); })()), "firewall", [], "any", false, false, true, 228), "listeners", [], "any", false, false, true, 228))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 228, $this->source); })()), "firewall", [], "any", false, false, true, 228), "listeners", [], "any", false, false, true, 228), 228, $this->source), 1)));
                        echo "</td>
                                        </tr>
                                    ";
                    }
                    // line 231
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 234
                echo "                    ";
            }
            // line 235
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 238
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, true, 238)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, true, 238), 238, $this->source), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    ";
            // line 241
            if (twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, true, 241)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, true, 241), [])) : ([])))) {
                // line 242
                echo "                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 246
                echo "                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            ";
                // line 255
                $context["previous_event"] = twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 255, $this->source); })()), "listeners", [], "any", false, false, true, 255), 255, $this->source));
                // line 256
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 256, $this->source); })()), "listeners", [], "any", false, false, true, 256));
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
                foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                    // line 257
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 257) || ($context["listener"] != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new RuntimeError('Variable "previous_event" does not exist.', 257, $this->source); })())))) {
                        // line 258
                        echo "                                    ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 258)) {
                            // line 259
                            echo "                                        </tbody>
                                    ";
                        }
                        // line 261
                        echo "
                                    <tbody>
                                    ";
                        // line 263
                        $context["previous_event"] = $context["listener"];
                        // line 264
                        echo "                                ";
                    }
                    // line 265
                    echo "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 267
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, true, 267), 267, $this->source));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 268
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, true, 268) * 1000)), "html", null, true);
                    echo " ms</td>
                                    <td class=\"font-normal\">";
                    // line 269
                    echo ((twig_get_attribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, true, 269)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, true, 269), 269, $this->source))) : ("(none)"));
                    echo "</td>
                                </tr>

                                ";
                    // line 272
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 272)) {
                        // line 273
                        echo "                                    </tbody>
                                ";
                    }
                    // line 275
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                echo "                        </table>
                    ";
            }
            // line 278
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 281
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, true, 281)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, true, 281), 281, $this->source), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    ";
            // line 284
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, true, 284)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, true, 284), [])) : ([])))) {
                // line 285
                echo "                        <table>
                            <thead>
                            <tr>
                                <th>Authenticator</th>
                                <th>Supports</th>
                                <th>Duration</th>
                                <th>Passport</th>
                            </tr>
                            </thead>

                            ";
                // line 295
                $context["previous_event"] = twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 295, $this->source); })()), "listeners", [], "any", false, false, true, 295), 295, $this->source));
                // line 296
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 296, $this->source); })()), "authenticators", [], "any", false, false, true, 296));
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
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 297
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 297) || ($context["authenticator"] != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new RuntimeError('Variable "previous_event" does not exist.', 297, $this->source); })())))) {
                        // line 298
                        echo "                                    ";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 298)) {
                            // line 299
                            echo "                                        </tbody>
                                    ";
                        }
                        // line 301
                        echo "
                                    <tbody>
                                    ";
                        // line 303
                        $context["previous_event"] = $context["authenticator"];
                        // line 304
                        echo "                                ";
                    }
                    // line 305
                    echo "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 307
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["authenticator"], "stub", [], "any", false, false, true, 307), 307, $this->source));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 308
                    echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, true, 308)) ? ("yes") : ("no"))) . ".svg"));
                    echo "</td>
                                    <td class=\"no-wrap\">";
                    // line 309
                    echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["authenticator"], "duration", [], "any", false, false, true, 309) * 1000)), "html", null, true);
                    echo " ms</td>
                                    <td class=\"font-normal\">";
                    // line 310
                    echo ((twig_get_attribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, true, 310)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, true, 310), 310, $this->source))) : ("(none)"));
                    echo "</td>
                                </tr>

                                ";
                    // line 313
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 313)) {
                        // line 314
                        echo "                                    </tbody>
                                ";
                    }
                    // line 316
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authenticator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 317
                echo "                        </table>
                    ";
            } else {
                // line 319
                echo "                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    ";
            }
            // line 323
            echo "                </div>
            </div>

            <div class=\"tab ";
            // line 326
            echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, true, 326)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, true, 326), 326, $this->source), [])) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    ";
            // line 329
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, true, 329)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, true, 329), [])) : ([])))) {
                // line 330
                echo "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 332
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, true, 332)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, true, 332), 332, $this->source), "unknown")) : ("unknown")), "html", null, true);
                echo "</span>
                                <span class=\"label\">Strategy</span>
                            </div>
                        </div>

                        <table class=\"voters\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Voter class</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 346
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 346, $this->source); })()), "voters", [], "any", false, false, true, 346));
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
                foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                    // line 347
                    echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 348
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 348), 348, $this->source), "html", null, true);
                    echo "</td>
                                        <td class=\"font-normal\">";
                    // line 349
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["voter"], 349, $this->source));
                    echo "</td>
                                    </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 352
                echo "                            </tbody>
                        </table>
                    ";
            }
            // line 355
            echo "                    ";
            if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, true, 355)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, true, 355), [])) : ([])))) {
                // line 356
                echo "                        <h2>Access decision log</h2>

                        <table class=\"decision-log\">
                            <col style=\"width: 30px\">
                            <col style=\"width: 120px\">
                            <col style=\"width: 25%\">
                            <col style=\"width: 60%\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Result</th>
                                    <th>Attributes</th>
                                    <th>Object</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 374
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 374, $this->source); })()), "accessDecisionLog", [], "any", false, false, true, 374));
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
                foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                    // line 375
                    echo "                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 376
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                    echo "</td>
                                        <td class=\"font-normal\">
                                            ";
                    // line 378
                    echo ((twig_get_attribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, true, 378)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                    // line 381
                    echo "
                                        </td>
                                        <td>
                                            ";
                    // line 384
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, true, 384)) == 1)) {
                        // line 385
                        echo "                                                ";
                        $context["attribute"] = twig_first($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, true, 385), 385, $this->source));
                        // line 386
                        echo "                                                ";
                        if (twig_get_attribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, true, 386)) {
                            // line 387
                            echo "                                                    Expression: <pre><code>";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 387, $this->source); })()), "expression", [], "any", false, false, true, 387), 387, $this->source), "html", null, true);
                            echo "</code></pre>
                                                ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 388
(isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 388, $this->source); })()), "type", [], "any", false, false, true, 388) == "string")) {
                            // line 389
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 389, $this->source); })()), 389, $this->source), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 391
                            echo "                                                     ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed((isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 391, $this->source); })()), 391, $this->source));
                            echo "
                                                ";
                        }
                        // line 393
                        echo "                                            ";
                    } else {
                        // line 394
                        echo "                                                ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, true, 394), 394, $this->source));
                        echo "
                                            ";
                    }
                    // line 396
                    echo "                                        </td>
                                        <td>";
                    // line 397
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["decision"], "seek", [0 => "object"], "method", false, false, true, 397), 397, $this->source));
                    echo "</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        ";
                    // line 402
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, true, 402))) {
                        // line 403
                        echo "                                            ";
                        $context["voter_details_id"] = ("voter-details-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 403), 403, $this->source));
                        // line 404
                        echo "                                            <div id=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 404, $this->source); })()), 404, $this->source), "html", null, true);
                        echo "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    ";
                        // line 407
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, true, 407));
                        foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                            // line 408
                            echo "                                                        <tr>
                                                            <td class=\"font-normal\">";
                            // line 409
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["voter_detail"], "class", [], "array", false, false, true, 409), 409, $this->source));
                            echo "</td>
                                                            ";
                            // line 410
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 410, $this->source); })()), "voterStrategy", [], "any", false, false, true, 410) == "unanimous")) {
                                // line 411
                                echo "                                                            <td class=\"font-normal text-small\">attribute ";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voter_detail"], "attributes", [], "array", false, false, true, 411), 0, [], "array", false, false, true, 411), 411, $this->source), "html", null, true);
                                echo "</td>
                                                            ";
                            }
                            // line 413
                            echo "                                                            <td class=\"font-normal text-small\">
                                                                ";
                            // line 414
                            if ((twig_get_attribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, true, 414) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED"))) {
                                // line 415
                                echo "                                                                    ACCESS GRANTED
                                                                ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 416
$context["voter_detail"], "vote", [], "array", false, false, true, 416) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN"))) {
                                // line 417
                                echo "                                                                    ACCESS ABSTAIN
                                                                ";
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 418
$context["voter_detail"], "vote", [], "array", false, false, true, 418) == twig_constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED"))) {
                                // line 419
                                echo "                                                                    ACCESS DENIED
                                                                ";
                            } else {
                                // line 421
                                echo "                                                                    unknown (";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, true, 421), 421, $this->source), "html", null, true);
                                echo ")
                                                                ";
                            }
                            // line 423
                            echo "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter_detail'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 426
                        echo "                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 429
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 429, $this->source); })()), 429, $this->source), "html", null, true);
                        echo "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        ";
                    }
                    // line 431
                    echo "                                        </td>
                                    </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 434
                echo "                            </tbody>
                        </table>
                    </div>
                ";
            }
            // line 438
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1061 => 438,  1055 => 434,  1039 => 431,  1034 => 429,  1029 => 426,  1021 => 423,  1015 => 421,  1011 => 419,  1009 => 418,  1006 => 417,  1004 => 416,  1001 => 415,  999 => 414,  996 => 413,  990 => 411,  988 => 410,  984 => 409,  981 => 408,  977 => 407,  970 => 404,  967 => 403,  965 => 402,  957 => 397,  954 => 396,  948 => 394,  945 => 393,  939 => 391,  933 => 389,  931 => 388,  926 => 387,  923 => 386,  920 => 385,  918 => 384,  913 => 381,  911 => 378,  906 => 376,  903 => 375,  886 => 374,  866 => 356,  863 => 355,  858 => 352,  841 => 349,  837 => 348,  834 => 347,  817 => 346,  800 => 332,  796 => 330,  794 => 329,  788 => 326,  783 => 323,  777 => 319,  773 => 317,  759 => 316,  755 => 314,  753 => 313,  747 => 310,  743 => 309,  739 => 308,  735 => 307,  731 => 305,  728 => 304,  726 => 303,  722 => 301,  718 => 299,  715 => 298,  712 => 297,  694 => 296,  692 => 295,  680 => 285,  678 => 284,  672 => 281,  667 => 278,  663 => 276,  649 => 275,  645 => 273,  643 => 272,  637 => 269,  633 => 268,  629 => 267,  625 => 265,  622 => 264,  620 => 263,  616 => 261,  612 => 259,  609 => 258,  606 => 257,  588 => 256,  586 => 255,  575 => 246,  569 => 242,  567 => 241,  561 => 238,  556 => 235,  553 => 234,  548 => 231,  542 => 228,  538 => 226,  532 => 223,  528 => 221,  526 => 220,  521 => 218,  514 => 214,  507 => 210,  500 => 206,  493 => 202,  486 => 198,  473 => 187,  471 => 186,  467 => 184,  460 => 180,  457 => 179,  455 => 178,  449 => 175,  442 => 171,  435 => 167,  431 => 165,  429 => 164,  423 => 161,  418 => 158,  412 => 154,  410 => 153,  406 => 151,  400 => 148,  396 => 146,  394 => 145,  391 => 144,  385 => 141,  381 => 139,  379 => 138,  374 => 135,  370 => 133,  368 => 132,  363 => 130,  344 => 114,  336 => 109,  332 => 107,  330 => 106,  323 => 102,  320 => 101,  318 => 100,  315 => 99,  305 => 98,  291 => 93,  286 => 92,  276 => 91,  263 => 87,  260 => 86,  256 => 84,  250 => 80,  247 => 79,  242 => 76,  236 => 74,  234 => 73,  230 => 72,  225 => 69,  223 => 68,  220 => 67,  214 => 64,  210 => 62,  208 => 61,  205 => 60,  198 => 55,  192 => 52,  185 => 47,  179 => 44,  175 => 43,  172 => 42,  170 => 41,  165 => 40,  163 => 39,  152 => 33,  144 => 28,  140 => 26,  137 => 25,  135 => 24,  131 => 22,  124 => 18,  119 => 15,  116 => 14,  114 => 13,  111 => 12,  106 => 10,  101 => 9,  98 => 8,  95 => 7,  92 => 6,  82 => 5,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block page_title 'Security' %}

{% block toolbar %}
    {% if collector.firewall %}
        {% set color_code = collector.enabled and not collector.authenticatorManagerEnabled ? 'yellow' %}
        {% set icon %}
            {{ include('@Security/Collector/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
        {% endset %}

        {% set text %}
            {% if collector.impersonated %}
                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>{{ collector.impersonatorUser }}</span>
                    </div>
                </div>
            {% endif %}

            <div class=\"sf-toolbar-info-group\">
                {% if collector.enabled %}
                    {% if collector.token %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>{{ collector.user }}</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.authenticated ? 'green' : 'yellow' }}\">{{ collector.authenticated ? 'Yes' : 'No' }}</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                {% set remainingRoles = collector.roles|slice(1) %}
                                {{ collector.roles|first }}
                                {% if remainingRoles is not empty %}
                                    +
                                    <abbr title=\"{{ remainingRoles|join(', ') }}\">
                                        {{ remainingRoles|length }} more
                                    </abbr>
                                {% endif %}
                            </span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>{{ collector.tokenClass|abbr_class }}</span>
                        </div>
                    {% else %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    {% endif %}

                    {% if collector.firewall %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>{{ collector.firewall.name }}</span>
                        </div>
                    {% endif %}

                    {% if collector.token and collector.logoutUrl %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"{{ collector.logoutUrl }}\">Logout</a>
                                {% if collector.impersonated and collector.impersonationExitPath %}
                                    | <a href=\"{{ collector.impersonationExitPath }}\">Exit impersonation</a>
                                {% endif %}
                            </span>
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                {% endif %}
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.firewall or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security</h2>
    {% if collector.enabled %}
        <div class=\"sf-tabs\">
            <div class=\"tab {{ collector.token is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    {% if collector.token %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                                <span class=\"label\">Authenticated</span>
                            </div>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"key\">Property</th>
                                    <th scope=\"col\">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth=1) }}

                                        {% if not collector.authenticated and collector.roles is empty %}
                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        {% endif %}
                                    </td>
                                </tr>

                                {% if collector.supportsRoleHierarchy %}
                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth=1) }}</td>
                                </tr>
                                {% endif %}

                                {% if collector.token %}
                                <tr>
                                    <th>Token</th>
                                    <td>{{ profiler_dump(collector.token) }}</td>
                                </tr>
                                {% endif %}
                            </tbody>
                        </table>
                    {% elseif collector.enabled %}
                        <div class=\"empty\">
                            <p>There is no security token.</p>
                        </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.firewall.security_enabled is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    {% if collector.firewall %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.firewall.name }}</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                            {% if collector.authenticatorManagerEnabled == false %}
                                <div class=\"metric\">
                                    <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.firewall.allows_anonymous ? 'yes' : 'no') ~ '.svg') }}</span>
                                    <span class=\"label\">Allows anonymous</span>
                                </div>
                            {% endif %}
                        </div>

                        {% if collector.firewall.security_enabled %}
                            <h4>Configuration</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"key\">Key</th>
                                        <th scope=\"col\">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>provider</th>
                                        <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>{{ collector.firewall.context ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                                    </tr>
                                    {% if collector.authenticatorManagerEnabled %}
                                        <tr>
                                            <th>authenticators</th>
                                            <td>{{ collector.firewall.authenticators is empty ? '(none)' : profiler_dump(collector.firewall.authenticators, maxDepth=1) }}</td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <th>listeners</th>
                                            <td>{{ collector.firewall.listeners is empty ? '(none)' : profiler_dump(collector.firewall.listeners, maxDepth=1) }}</td>
                                        </tr>
                                    {% endif %}
                                </tbody>
                            </table>
                        {% endif %}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.listeners|default([]) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    {% if collector.listeners|default([]) is empty %}
                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    {% else %}
                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            {% set previous_event = (collector.listeners|first) %}
                            {% for listener in collector.listeners %}
                                {% if loop.first or listener != previous_event %}
                                    {% if not loop.first %}
                                        </tbody>
                                    {% endif %}

                                    <tbody>
                                    {% set previous_event = listener %}
                                {% endif %}

                                <tr>
                                    <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
                                    <td class=\"no-wrap\">{{ '%0.2f'|format(listener.time * 1000) }} ms</td>
                                    <td class=\"font-normal\">{{ listener.response ? profiler_dump(listener.response) : '(none)' }}</td>
                                </tr>

                                {% if loop.last %}
                                    </tbody>
                                {% endif %}
                            {% endfor %}
                        </table>
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.authenticators|default([]) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    {% if collector.authenticators|default([]) is not empty %}
                        <table>
                            <thead>
                            <tr>
                                <th>Authenticator</th>
                                <th>Supports</th>
                                <th>Duration</th>
                                <th>Passport</th>
                            </tr>
                            </thead>

                            {% set previous_event = (collector.listeners|first) %}
                            {% for authenticator in collector.authenticators %}
                                {% if loop.first or authenticator != previous_event %}
                                    {% if not loop.first %}
                                        </tbody>
                                    {% endif %}

                                    <tbody>
                                    {% set previous_event = authenticator %}
                                {% endif %}

                                <tr>
                                    <td class=\"font-normal\">{{ profiler_dump(authenticator.stub) }}</td>
                                    <td class=\"no-wrap\">{{ include('@WebProfiler/Icon/' ~ (authenticator.supports ? 'yes' : 'no') ~ '.svg') }}</td>
                                    <td class=\"no-wrap\">{{ '%0.2f'|format(authenticator.duration * 1000) }} ms</td>
                                    <td class=\"font-normal\">{{ authenticator.passport ? profiler_dump(authenticator.passport) : '(none)' }}</td>
                                </tr>

                                {% if loop.last %}
                                    </tbody>
                                {% endif %}
                            {% endfor %}
                        </table>
                    {% else %}
                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.accessDecisionLog|default([]) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    {% if collector.voters|default([]) is not empty %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
                                <span class=\"label\">Strategy</span>
                            </div>
                        </div>

                        <table class=\"voters\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Voter class</th>
                                </tr>
                            </thead>

                            <tbody>
                                {% for voter in collector.voters %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"font-normal\">{{ profiler_dump(voter) }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                    {% if collector.accessDecisionLog|default([]) is not empty %}
                        <h2>Access decision log</h2>

                        <table class=\"decision-log\">
                            <col style=\"width: 30px\">
                            <col style=\"width: 120px\">
                            <col style=\"width: 25%\">
                            <col style=\"width: 60%\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Result</th>
                                    <th>Attributes</th>
                                    <th>Object</th>
                                </tr>
                            </thead>

                            <tbody>
                                {% for decision in collector.accessDecisionLog %}
                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"font-normal\">
                                            {{ decision.result
                                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                                : '<span class=\"label status-error same-width\">DENIED</span>'
                                            }}
                                        </td>
                                        <td>
                                            {% if decision.attributes|length == 1 %}
                                                {% set attribute = decision.attributes|first %}
                                                {% if attribute.expression is defined %}
                                                    Expression: <pre><code>{{ attribute.expression }}</code></pre>
                                                {% elseif attribute.type == 'string' %}
                                                    {{ attribute }}
                                                {% else %}
                                                     {{ profiler_dump(attribute) }}
                                                {% endif %}
                                            {% else %}
                                                {{ profiler_dump(decision.attributes) }}
                                            {% endif %}
                                        </td>
                                        <td>{{ profiler_dump(decision.seek('object')) }}</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        {% if decision.voter_details is not empty %}
                                            {% set voter_details_id = 'voter-details-' ~ loop.index %}
                                            <div id=\"{{ voter_details_id }}\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    {% for voter_detail in decision.voter_details %}
                                                        <tr>
                                                            <td class=\"font-normal\">{{ profiler_dump(voter_detail['class']) }}</td>
                                                            {% if collector.voterStrategy == 'unanimous' %}
                                                            <td class=\"font-normal text-small\">attribute {{ voter_detail['attributes'][0] }}</td>
                                                            {% endif %}
                                                            <td class=\"font-normal text-small\">
                                                                {% if voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_GRANTED') %}
                                                                    ACCESS GRANTED
                                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_ABSTAIN') %}
                                                                    ACCESS ABSTAIN
                                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_DENIED') %}
                                                                    ACCESS DENIED
                                                                {% else %}
                                                                    unknown ({{ voter_detail['vote'] }})
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                    {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ voter_details_id }}\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "/var/www/html/Eproject/ecomwebsite/vendor/symfony/security-bundle/Resources/views/Collector/security.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "set" => 7, "for" => 256);
        static $filters = array("escape" => 10, "default" => 10, "slice" => 39, "first" => 40, "join" => 43, "length" => 44, "abbr_class" => 52, "format" => 268);
        static $functions = array("include" => 9, "profiler_dump" => 130, "constant" => 414);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'default', 'slice', 'first', 'join', 'length', 'abbr_class', 'format'],
                ['include', 'profiler_dump', 'constant']
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
