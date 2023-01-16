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

/* @PimcoreCore/Profiler/targeting_data_collector.html.twig */
class __TwigTemplate_142a7aa5f70dbecd95b62472c5eb652c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Profiler/targeting_data_collector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Profiler/targeting_data_collector.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PimcoreCore/Profiler/targeting_data_collector.html.twig", 1);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "hasData", [], "any", false, false, true, 4)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@PimcoreCore/Profiler/target.svg.twig");
            echo "

            ";
            // line 8
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "documentTargetGroup", [], "any", false, false, true, 8))) {
                // line 9
                echo "                <span class=\"sf-toolbar-value\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "documentTargetGroup", [], "any", false, false, true, 9), "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "</span>
            ";
            }
            // line 11
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-group\">
                ";
            // line 15
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "documentTargetGroup", [], "any", false, false, true, 15))) {
                // line 16
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Document Target Group</b>
                        <span>";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "documentTargetGroup", [], "any", false, false, true, 18), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "</span>
                    </div>
                ";
            }
            // line 21
            echo "
                <div class=\"sf-toolbar-info-piece\">
                    <b>Matched Rules</b>
                    <span class=\"sf-toolbar-status\">";
            // line 24
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "rules", [], "any", false, false, true, 24), 24, $this->source)), "html", null, true);
            echo "</span>
                </div>

                ";
            // line 27
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "targetGroups", [], "any", false, false, true, 27))) {
                // line 28
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <h5 style=\"display: table-caption; margin-bottom: 5px; font-size: 13px\">Target Groups</h5>
                    </div>

                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "targetGroups", [], "any", false, false, true, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["targetGroup"]) {
                    // line 33
                    echo "                        <div class=\"sf-toolbar-info-piece\">
                            <b>";
                    // line 34
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["targetGroup"], "name", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "</b>
                            <span class=\"sf-toolbar-status\">";
                    // line 35
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["targetGroup"], "count", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo "</span>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                ";
            } else {
                // line 39
                echo "                    <div class=\"sf-toolbar-info-piece\">
                        <b>Target Groups</b>
                        <span class=\"sf-toolbar-status\">0</span>
                    </div>
                ";
            }
            // line 44
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        ";
            // line 47
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 52
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 52, $this->source); })()), "hasData", [], "any", false, false, true, 52)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 54
        echo twig_include($this->env, $context, "@PimcoreCore/Profiler/target.svg.twig");
        echo "
        </span>
        <strong>Targeting</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 61
        echo "    <h2>Targeting</h2>

    ";
        // line 63
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "hasData", [], "any", false, false, true, 63)) {
            // line 64
            echo "        <div class=\"empty\">
            <p>No targeting data available.</p>
        </div>
    ";
        } else {
            // line 68
            echo "
        <div class=\"metrics\" style=\"margin-bottom: 25px\">
            ";
            // line 70
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "documentTargetGroup", [], "any", false, false, true, 70))) {
                // line 71
                echo "                <div class=\"metric\">
                    <span class=\"value\">";
                // line 72
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "documentTargetGroup", [], "any", false, false, true, 72), "name", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "</span>
                    <span class=\"label\">Document Target Group</span>
                </div>
            ";
            }
            // line 76
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "rules", [], "any", false, false, true, 78), 78, $this->source)), "html", null, true);
            echo "</span>
                <span class=\"label\">Matched Rules</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 83
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 83, $this->source); })()), "targetGroups", [], "any", false, false, true, 83), 83, $this->source)), "html", null, true);
            echo "</span>
                <span class=\"label\">Assigned Target Groups</span>
            </div>
        </div>

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Results</h3>

                <div class=\"tab-content\">
                    <h3>Matched Targeting Rules</h3>

                    <table class=\"";
            // line 95
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 95, $this->source); })()), 95, $this->source), "")) : ("")), "html", null, true);
            echo "\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">ID</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Duration</th>
                            <th scope=\"col\">Conditions</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "rules", [], "any", false, false, true, 106));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 107
                echo "                            <tr>
                                <th>";
                // line 108
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "id", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                echo "</th>
                                <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "name", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "</td>
                                <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_round($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "duration", [], "any", false, false, true, 110), 110, $this->source), 2), "html", null, true);
                echo " ms</td>
                                <td>";
                // line 111
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "conditions", [], "any", false, false, true, 111), 111, $this->source), ((array_key_exists("maxDepth", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((isset($context["maxDepth"]) || array_key_exists("maxDepth", $context) ? $context["maxDepth"] : (function () { throw new RuntimeError('Variable "maxDepth" does not exist.', 111, $this->source); })()), 111, $this->source), 0)) : (0)));
                echo "</td>
                                <td>";
                // line 112
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "actions", [], "any", false, false, true, 112), 112, $this->source), ((array_key_exists("maxDepth", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((isset($context["maxDepth"]) || array_key_exists("maxDepth", $context) ? $context["maxDepth"] : (function () { throw new RuntimeError('Variable "maxDepth" does not exist.', 112, $this->source); })()), 112, $this->source), 0)) : (0)));
                echo "</td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 115
                echo "                            <tr>
                                <td colspan=\"2\">(no rules matched)</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                        </tbody>
                    </table>

                    <h3>Assigned Target Groups</h3>

                    <table class=\"";
            // line 124
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 124, $this->source); })()), 124, $this->source), "")) : ("")), "html", null, true);
            echo "\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">ID</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Threshold</th>
                            <th scope=\"col\">Assignment Count</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 134, $this->source); })()), "targetGroups", [], "any", false, false, true, 134));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["targetGroup"]) {
                // line 135
                echo "                            <tr>
                                <th>";
                // line 136
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["targetGroup"], "id", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
                echo "</th>
                                <td>";
                // line 137
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["targetGroup"], "name", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "</td>
                                <td>";
                // line 138
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["targetGroup"], "threshold", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
                echo "</td>
                                <td>";
                // line 139
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["targetGroup"], "count", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
                echo "</td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 142
                echo "                            <tr>
                                <td colspan=\"2\">(no target group assignments)</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                        </tbody>
                    </table>

                    <h3>Target Groups assigned to Documents</h3>

                    <table class=\"";
            // line 151
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 151, $this->source); })()), 151, $this->source), "")) : ("")), "html", null, true);
            echo "\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Document ID</th>
                            <th scope=\"col\">Path</th>
                            <th scope=\"col\">Target Group ID</th>
                            <th scope=\"col\">Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 161, $this->source); })()), "documentTargetGroups", [], "any", false, false, true, 161));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
                // line 162
                echo "                            <tr>
                                <th>";
                // line 163
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "document", [], "any", false, false, true, 163), "id", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                echo "</th>
                                <td>";
                // line 164
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "document", [], "any", false, false, true, 164), "path", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                echo "</td>
                                <th>";
                // line 165
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "targetGroup", [], "any", false, false, true, 165), "id", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
                echo "</th>
                                <td>";
                // line 166
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "targetGroup", [], "any", false, false, true, 166), "name", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
                echo "</td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 169
                echo "                            <tr>
                                <td colspan=\"2\">(no target groups were assigned to documents)</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Visitor Info</h3>

                <div class=\"tab-content\">
                    <h3>Visitor Info</h3>

                    ";
            // line 184
            echo twig_include($this->env, $context, "@PimcoreCore/Profiler/key_value_table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 184, $this->source); })()), "visitorInfo", [], "any", false, false, true, 184)], false);
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Storage</h3>

                <div class=\"tab-content\">
                    <h3>Session Storage</h3>

                    ";
            // line 194
            echo twig_include($this->env, $context, "@PimcoreCore/Profiler/key_value_table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 194, $this->source); })()), "storage", [], "any", false, false, true, 194), "session", [], "any", false, false, true, 194)], false);
            echo "
                </div>

                <div class=\"tab-content\">
                    <h3>Visitor Storage</h3>

                    ";
            // line 200
            echo twig_include($this->env, $context, "@PimcoreCore/Profiler/key_value_table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 200, $this->source); })()), "storage", [], "any", false, false, true, 200), "visitor", [], "any", false, false, true, 200)], false);
            echo "
                </div>
            </div>
        </div>

    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Profiler/targeting_data_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 200,  475 => 194,  462 => 184,  449 => 173,  440 => 169,  432 => 166,  428 => 165,  424 => 164,  420 => 163,  417 => 162,  412 => 161,  399 => 151,  392 => 146,  383 => 142,  375 => 139,  371 => 138,  367 => 137,  363 => 136,  360 => 135,  355 => 134,  342 => 124,  335 => 119,  326 => 115,  318 => 112,  314 => 111,  310 => 110,  306 => 109,  302 => 108,  299 => 107,  294 => 106,  280 => 95,  265 => 83,  257 => 78,  253 => 76,  246 => 72,  243 => 71,  241 => 70,  237 => 68,  231 => 64,  229 => 63,  225 => 61,  215 => 60,  200 => 54,  194 => 52,  184 => 51,  171 => 47,  168 => 46,  164 => 44,  157 => 39,  154 => 38,  145 => 35,  141 => 34,  138 => 33,  134 => 32,  128 => 28,  126 => 27,  120 => 24,  115 => 21,  109 => 18,  105 => 16,  103 => 15,  100 => 14,  98 => 13,  95 => 12,  92 => 11,  86 => 9,  84 => 8,  78 => 6,  75 => 5,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.hasData %}
        {% set icon %}
            {{ include(\"@PimcoreCore/Profiler/target.svg.twig\") }}

            {% if collector.documentTargetGroup is not null %}
                <span class=\"sf-toolbar-value\">{{ collector.documentTargetGroup.name }}</span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-group\">
                {% if collector.documentTargetGroup is not null %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Document Target Group</b>
                        <span>{{ collector.documentTargetGroup.name }}</span>
                    </div>
                {% endif %}

                <div class=\"sf-toolbar-info-piece\">
                    <b>Matched Rules</b>
                    <span class=\"sf-toolbar-status\">{{ collector.rules|length }}</span>
                </div>

                {% if collector.targetGroups is not empty %}
                    <div class=\"sf-toolbar-info-piece\">
                        <h5 style=\"display: table-caption; margin-bottom: 5px; font-size: 13px\">Target Groups</h5>
                    </div>

                    {% for targetGroup in collector.targetGroups %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>{{ targetGroup.name }}</b>
                            <span class=\"sf-toolbar-status\">{{ targetGroup.count }}</span>
                        </div>
                    {% endfor %}
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Target Groups</b>
                        <span class=\"sf-toolbar-status\">0</span>
                    </div>
                {% endif %}
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ (not collector.hasData) ? 'disabled' }}\">
        <span class=\"icon\">
            {{ include(\"@PimcoreCore/Profiler/target.svg.twig\") }}
        </span>
        <strong>Targeting</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Targeting</h2>

    {% if not collector.hasData %}
        <div class=\"empty\">
            <p>No targeting data available.</p>
        </div>
    {% else %}

        <div class=\"metrics\" style=\"margin-bottom: 25px\">
            {% if collector.documentTargetGroup is not null %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.documentTargetGroup.name }}</span>
                    <span class=\"label\">Document Target Group</span>
                </div>
            {% endif %}

            <div class=\"metric\">
                <span class=\"value\">{{ collector.rules|length }}</span>
                <span class=\"label\">Matched Rules</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.targetGroups|length }}</span>
                <span class=\"label\">Assigned Target Groups</span>
            </div>
        </div>

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Results</h3>

                <div class=\"tab-content\">
                    <h3>Matched Targeting Rules</h3>

                    <table class=\"{{ class|default('') }}\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">ID</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Duration</th>
                            <th scope=\"col\">Conditions</th>
                            <th scope=\"col\">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for rule in collector.rules %}
                            <tr>
                                <th>{{ rule.id }}</th>
                                <td>{{ rule.name }}</td>
                                <td>{{ rule.duration|round(2) }} ms</td>
                                <td>{{ profiler_dump(rule.conditions, maxDepth=maxDepth|default(0)) }}</td>
                                <td>{{ profiler_dump(rule.actions, maxDepth=maxDepth|default(0)) }}</td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"2\">(no rules matched)</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>

                    <h3>Assigned Target Groups</h3>

                    <table class=\"{{ class|default('') }}\">
                        <thead>
                        <tr>
                            <th scope=\"col\" class=\"key\">ID</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Threshold</th>
                            <th scope=\"col\">Assignment Count</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for targetGroup in collector.targetGroups %}
                            <tr>
                                <th>{{ targetGroup.id }}</th>
                                <td>{{ targetGroup.name }}</td>
                                <td>{{ targetGroup.threshold }}</td>
                                <td>{{ targetGroup.count }}</td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"2\">(no target group assignments)</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>

                    <h3>Target Groups assigned to Documents</h3>

                    <table class=\"{{ class|default('') }}\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Document ID</th>
                            <th scope=\"col\">Path</th>
                            <th scope=\"col\">Target Group ID</th>
                            <th scope=\"col\">Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for assignment in collector.documentTargetGroups %}
                            <tr>
                                <th>{{ assignment.document.id }}</th>
                                <td>{{ assignment.document.path }}</td>
                                <th>{{ assignment.targetGroup.id }}</th>
                                <td>{{ assignment.targetGroup.name }}</td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"2\">(no target groups were assigned to documents)</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Visitor Info</h3>

                <div class=\"tab-content\">
                    <h3>Visitor Info</h3>

                    {{ include('@PimcoreCore/Profiler/key_value_table.html.twig', { data: collector.visitorInfo }, with_context = false) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Storage</h3>

                <div class=\"tab-content\">
                    <h3>Session Storage</h3>

                    {{ include('@PimcoreCore/Profiler/key_value_table.html.twig', { data: collector.storage.session }, with_context = false) }}
                </div>

                <div class=\"tab-content\">
                    <h3>Visitor Storage</h3>

                    {{ include('@PimcoreCore/Profiler/key_value_table.html.twig', { data: collector.storage.visitor }, with_context = false) }}
                </div>
            </div>
        </div>

    {% endif %}
{% endblock %}
", "@PimcoreCore/Profiler/targeting_data_collector.html.twig", "/var/www/html/Eproject/ecomwebsite/vendor/pimcore/pimcore/bundles/CoreBundle/Resources/views/Profiler/targeting_data_collector.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5, "for" => 32);
        static $filters = array("escape" => 9, "length" => 24, "default" => 95, "round" => 110);
        static $functions = array("include" => 6, "profiler_dump" => 111);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length', 'default', 'round'],
                ['include', 'profiler_dump']
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
