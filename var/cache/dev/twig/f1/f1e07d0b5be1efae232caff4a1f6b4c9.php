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

/* @PimcoreCore/Targeting/toolbar/toolbar.html.twig */
class __TwigTemplate_1b2cbbea1da2560bd897bf70c411e2af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'overview' => [$this, 'block_overview'],
            'overviewTable' => [$this, 'block_overviewTable'],
            'rules' => [$this, 'block_rules'],
            'rulesTable' => [$this, 'block_rulesTable'],
            'targetGroups' => [$this, 'block_targetGroups'],
            'targetGroupsTable' => [$this, 'block_targetGroupsTable'],
            'documentTargetGroups' => [$this, 'block_documentTargetGroups'],
            'documentTargetGroupsTable' => [$this, 'block_documentTargetGroupsTable'],
            'advanced' => [$this, 'block_advanced'],
            'visitorInfo' => [$this, 'block_visitorInfo'],
            'storage' => [$this, 'block_storage'],
            'visitorStorage' => [$this, 'block_visitorStorage'],
            'sessionStorage' => [$this, 'block_sessionStorage'],
            'overrides' => [$this, 'block_overrides'],
            'overrideForm' => [$this, 'block_overrideForm'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Targeting/toolbar/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Targeting/toolbar/toolbar.html.twig"));

        // line 1
        $macros["toolbar"] = $this->macros["toolbar"] = $this->loadTemplate("@PimcoreCore/Targeting/toolbar/macros.html.twig", "@PimcoreCore/Targeting/toolbar/toolbar.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('toolbar', $context, $blocks);
        // line 284
        echo "
";
        // line 285
        $this->displayBlock('css', $context, $blocks);
        // line 294
        echo "
";
        // line 295
        $this->displayBlock('js', $context, $blocks);
        
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
        ob_start();
        // line 5
        echo "    <div id=\"_ptgtb-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 5, $this->source); })()), 5, $this->source), "html", null, true);
        echo "\" class=\"_ptgtb _ptgtb--collapsed\">
        <div class=\"_ptgtb__trigger\" title=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("targeting", [], "admin");
        echo "\">
            <span class=\"_ptgtb__toolbar-icon _ptgtb__toolbar-icon--target\">
                ";
        // line 8
        echo twig_include($this->env, $context, "@PimcoreCore/Profiler/target.svg.twig");
        echo "
            </span>

            <span class=\"_ptgtb__toolbar-icon _ptgtb__toolbar-icon--collapse\">
                ";
        // line 12
        echo twig_include($this->env, $context, "@PimcoreCore/Targeting/toolbar/icon/toolbar-collapse.svg.twig");
        echo "
            </span>
        </div>

        <a class=\"_ptgtb__toolbar-icon _ptgtb__toolbar-icon--close\" data-ptgtb-target=\"#_ptgtb-";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 16, $this->source); })()), 16, $this->source), "html", null, true);
        echo "\" title=\"Close Toolbar\">
            ";
        // line 17
        echo twig_include($this->env, $context, "@PimcoreCore/Targeting/toolbar/icon/close.svg.twig");
        echo "
        </a>

        <a
            class=\"_ptgtb__toolbar-icon _ptgtb__toolbar-icon--advanced-features\"
            title=\"Toggle Advanced Features\"
            data-ptgtb-toggle=\"collapse\"
            data-ptgtb-target=\"._ptgtb__advanced\"
            data-ptgtb-collapse-default=\"collapse\"
            data-ptgtb-collapse-store=\"advanced\"
            data-ptgtb-arrow=\"false\"
            >
            ";
        // line 29
        echo twig_include($this->env, $context, "@PimcoreCore/Targeting/toolbar/icon/advanced_features.svg.twig");
        echo "
        </a>

        <div class=\"_ptgtb__content\">
            <div class=\"_ptgtb__content-inner\">
                <h1>
                    Targeting
                </h1>

                ";
        // line 38
        $this->displayBlock('overview', $context, $blocks);
        // line 74
        echo "
                ";
        // line 75
        $this->displayBlock('rules', $context, $blocks);
        // line 115
        echo "
                ";
        // line 116
        $this->displayBlock('targetGroups', $context, $blocks);
        // line 153
        echo "
                ";
        // line 154
        $this->displayBlock('documentTargetGroups', $context, $blocks);
        // line 191
        echo "
                <div class=\"_ptgtb__advanced\">
                    ";
        // line 193
        $this->displayBlock('advanced', $context, $blocks);
        // line 253
        echo "                </div>

                ";
        // line 255
        $this->displayBlock('overrides', $context, $blocks);
        // line 279
        echo "            </div>
        </div>
    </div>
    ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo twig_spaceless($___internal_parse_3_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_overview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "overview"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "overview"));

        // line 39
        echo "                    <table class=\"_ptgtb__table\">
                        ";
        // line 40
        $this->displayBlock('overviewTable', $context, $blocks);
        // line 72
        echo "                    </table>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_overviewTable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "overviewTable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "overviewTable"));

        // line 41
        echo "                            ";
        if ( !(null === (isset($context["documentTargetGroup"]) || array_key_exists("documentTargetGroup", $context) ? $context["documentTargetGroup"] : (function () { throw new RuntimeError('Variable "documentTargetGroup" does not exist.', 41, $this->source); })()))) {
            // line 42
            echo "                                <tr>
                                    <th>Document Target Group</th>
                                    <td class=\"_ptgtb__table__col-right\">
                                        ";
            // line 45
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["documentTargetGroup"]) || array_key_exists("documentTargetGroup", $context) ? $context["documentTargetGroup"] : (function () { throw new RuntimeError('Variable "documentTargetGroup" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, true, 45), [0 => "_ptgtb__label--target-group"]], 45, $context, $this->getSourceContext());
            echo "
                                    </td>
                                </tr>
                            ";
        }
        // line 49
        echo "
                            <tr>
                                <th>Visitor ID</th>
                                <td class=\"_ptgtb__table__col-right\">
                                    ";
        // line 53
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitorInfo"]) || array_key_exists("visitorInfo", $context) ? $context["visitorInfo"] : (function () { throw new RuntimeError('Variable "visitorInfo" does not exist.', 53, $this->source); })()), "visitorId", [], "any", false, false, true, 53))) {
            // line 54
            echo "                                        ";
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["visitorInfo"]) || array_key_exists("visitorInfo", $context) ? $context["visitorInfo"] : (function () { throw new RuntimeError('Variable "visitorInfo" does not exist.', 54, $this->source); })()), "visitorId", [], "any", false, false, true, 54)], 54, $context, $this->getSourceContext());
            echo "
                                    ";
        } else {
            // line 56
            echo "                                        -
                                    ";
        }
        // line 58
        echo "                                </td>
                            </tr>

                            <tr>
                                <th>Session ID</th>
                                <td class=\"_ptgtb__table__col-right\">
                                    ";
        // line 64
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["visitorInfo"]) || array_key_exists("visitorInfo", $context) ? $context["visitorInfo"] : (function () { throw new RuntimeError('Variable "visitorInfo" does not exist.', 64, $this->source); })()), "sessionId", [], "any", false, false, true, 64))) {
            // line 65
            echo "                                        ";
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["visitorInfo"]) || array_key_exists("visitorInfo", $context) ? $context["visitorInfo"] : (function () { throw new RuntimeError('Variable "visitorInfo" does not exist.', 65, $this->source); })()), "sessionId", [], "any", false, false, true, 65)], 65, $context, $this->getSourceContext());
            echo "
                                    ";
        } else {
            // line 67
            echo "                                        -
                                    ";
        }
        // line 69
        echo "                                </td>
                            </tr>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_rules($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rules"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rules"));

        // line 76
        echo "                    ";
        if ( !twig_test_empty((isset($context["rules"]) || array_key_exists("rules", $context) ? $context["rules"] : (function () { throw new RuntimeError('Variable "rules" does not exist.', 76, $this->source); })()))) {
            // line 77
            echo "                        <h2
                            class=\"_ptgtb__collapse__trigger--block\"
                            data-ptgtb-toggle=\"collapse\"
                            data-ptgtb-target=\"#";
            // line 80
            echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 80, $this->source); })()), "rules"], 80, $context, $this->getSourceContext());
            echo "\"
                            data-ptgtb-collapse-store=\"rules\"
                        >
                            Matched Rules
                            ";
            // line 84
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["rules"]) || array_key_exists("rules", $context) ? $context["rules"] : (function () { throw new RuntimeError('Variable "rules" does not exist.', 84, $this->source); })()), 84, $this->source))], 84, $context, $this->getSourceContext());
            echo "
                        </h2>

                        <table id=\"";
            // line 87
            echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 87, $this->source); })()), "rules"], 87, $context, $this->getSourceContext());
            echo "\" class=\"_ptgtb__table\">
                            ";
            // line 88
            $this->displayBlock('rulesTable', $context, $blocks);
            // line 112
            echo "                        </table>
                    ";
        }
        // line 114
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_rulesTable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rulesTable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "rulesTable"));

        // line 89
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rules"]) || array_key_exists("rules", $context) ? $context["rules"] : (function () { throw new RuntimeError('Variable "rules" does not exist.', 89, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 90
            echo "                                    ";
            $context["rowIdentifier"] = twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 90, $this->source); })()), "rules-details", twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 90)], 90, $context, $this->getSourceContext());
            // line 91
            echo "
                                    <tr class=\"_ptgtb__table__row-with-details\">
                                        <td>
                                            ";
            // line 94
            echo twig_call_macro($macros["toolbar"], "macro_trigger_label", [twig_get_attribute($this->env, $this->source, $context["rule"], "name", [], "any", false, false, true, 94), ("#" . $this->sandbox->ensureToStringAllowed((isset($context["rowIdentifier"]) || array_key_exists("rowIdentifier", $context) ? $context["rowIdentifier"] : (function () { throw new RuntimeError('Variable "rowIdentifier" does not exist.', 94, $this->source); })()), 94, $this->source)), [0 => "_ptgtb__label--rule"]], 94, $context, $this->getSourceContext());
            echo "
                                        </td>
                                    </tr>
                                    <tr id=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["rowIdentifier"]) || array_key_exists("rowIdentifier", $context) ? $context["rowIdentifier"] : (function () { throw new RuntimeError('Variable "rowIdentifier" does not exist.', 97, $this->source); })()), 97, $this->source), "html", null, true);
            echo "\" class=\"_ptgtb__table__row-details\">
                                        <td>
                                            ";
            // line 99
            echo twig_call_macro($macros["toolbar"], "macro_metric", ["Rule ID", twig_get_attribute($this->env, $this->source, $context["rule"], "id", [], "any", false, false, true, 99)], 99, $context, $this->getSourceContext());
            echo "

                                            ";
            // line 101
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["rule"], "duration", [], "any", false, false, true, 101))) {
                // line 102
                echo "                                                ";
                echo twig_call_macro($macros["toolbar"], "macro_metric", ["Duration", (twig_round($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "duration", [], "any", false, false, true, 102), 102, $this->source), 2) . " ms")], 102, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            // line 104
            echo "
                                            ";
            // line 105
            echo twig_call_macro($macros["toolbar"], "macro_metric", ["Conditions", twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "conditions", [], "any", false, false, true, 105), 105, $this->source))], 105, $context, $this->getSourceContext());
            echo "
                                            ";
            // line 106
            echo twig_call_macro($macros["toolbar"], "macro_metric", ["Actions", twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["rule"], "actions", [], "any", false, false, true, 106), 106, $this->source))], 106, $context, $this->getSourceContext());
            echo "
                                        </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_targetGroups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "targetGroups"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "targetGroups"));

        // line 117
        echo "                    ";
        if ( !twig_test_empty((isset($context["targetGroups"]) || array_key_exists("targetGroups", $context) ? $context["targetGroups"] : (function () { throw new RuntimeError('Variable "targetGroups" does not exist.', 117, $this->source); })()))) {
            // line 118
            echo "                        <h2
                            class=\"_ptgtb__collapse__trigger--block\"
                            data-ptgtb-toggle=\"collapse\"
                            data-ptgtb-target=\"#";
            // line 121
            echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 121, $this->source); })()), "target-groups"], 121, $context, $this->getSourceContext());
            echo "\"
                            data-ptgtb-collapse-store=\"target-groups\"
                        >
                            Assigned Target Groups
                            ";
            // line 125
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["targetGroups"]) || array_key_exists("targetGroups", $context) ? $context["targetGroups"] : (function () { throw new RuntimeError('Variable "targetGroups" does not exist.', 125, $this->source); })()), 125, $this->source))], 125, $context, $this->getSourceContext());
            echo "
                        </h2>

                        <table id=\"";
            // line 128
            echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 128, $this->source); })()), "target-groups"], 128, $context, $this->getSourceContext());
            echo "\" class=\"_ptgtb__table\">
                            ";
            // line 129
            $this->displayBlock('targetGroupsTable', $context, $blocks);
            // line 150
            echo "                        </table>
                    ";
        }
        // line 152
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_targetGroupsTable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "targetGroupsTable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "targetGroupsTable"));

        // line 130
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["targetGroups"]) || array_key_exists("targetGroups", $context) ? $context["targetGroups"] : (function () { throw new RuntimeError('Variable "targetGroups" does not exist.', 130, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["targetGroup"]) {
            // line 131
            echo "                                    ";
            $context["rowIdentifier"] = twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 131, $this->source); })()), "target-groups-details", twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 131)], 131, $context, $this->getSourceContext());
            // line 132
            echo "
                                    <tr class=\"_ptgtb__table__row-with-details\">
                                        <td>
                                            ";
            // line 135
            echo twig_call_macro($macros["toolbar"], "macro_trigger_label", [twig_get_attribute($this->env, $this->source, $context["targetGroup"], "name", [], "any", false, false, true, 135), ("#" . $this->sandbox->ensureToStringAllowed((isset($context["rowIdentifier"]) || array_key_exists("rowIdentifier", $context) ? $context["rowIdentifier"] : (function () { throw new RuntimeError('Variable "rowIdentifier" does not exist.', 135, $this->source); })()), 135, $this->source)), [0 => "_ptgtb__label--target-group"]], 135, $context, $this->getSourceContext());
            echo "
                                        </td>
                                        <td class=\"_ptgtb__table__col-number\">
                                            ";
            // line 138
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_get_attribute($this->env, $this->source, $context["targetGroup"], "count", [], "any", false, false, true, 138)], 138, $context, $this->getSourceContext());
            echo "
                                        </td>
                                    </tr>
                                    <tr id=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["rowIdentifier"]) || array_key_exists("rowIdentifier", $context) ? $context["rowIdentifier"] : (function () { throw new RuntimeError('Variable "rowIdentifier" does not exist.', 141, $this->source); })()), 141, $this->source), "html", null, true);
            echo "\" class=\"_ptgtb__table__row-details\">
                                        <td colspan=\"2\">
                                            ";
            // line 143
            echo twig_call_macro($macros["toolbar"], "macro_metric", ["Target Group ID", twig_get_attribute($this->env, $this->source, $context["targetGroup"], "id", [], "any", false, false, true, 143)], 143, $context, $this->getSourceContext());
            echo "
                                            ";
            // line 144
            echo twig_call_macro($macros["toolbar"], "macro_metric", ["Threshold", twig_get_attribute($this->env, $this->source, $context["targetGroup"], "threshold", [], "any", false, false, true, 144)], 144, $context, $this->getSourceContext());
            echo "
                                        </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['targetGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 154
    public function block_documentTargetGroups($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "documentTargetGroups"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "documentTargetGroups"));

        // line 155
        echo "                    ";
        if ( !twig_test_empty((isset($context["documentTargetGroups"]) || array_key_exists("documentTargetGroups", $context) ? $context["documentTargetGroups"] : (function () { throw new RuntimeError('Variable "documentTargetGroups" does not exist.', 155, $this->source); })()))) {
            // line 156
            echo "                        <h2
                            class=\"_ptgtb__collapse__trigger--block\"
                            data-ptgtb-toggle=\"collapse\"
                            data-ptgtb-target=\"#";
            // line 159
            echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 159, $this->source); })()), "document-target-groups"], 159, $context, $this->getSourceContext());
            echo "\"
                            data-ptgtb-collapse-store=\"document-target-groups\"
                        >
                            Document Target Groups
                            ";
            // line 163
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["documentTargetGroups"]) || array_key_exists("documentTargetGroups", $context) ? $context["documentTargetGroups"] : (function () { throw new RuntimeError('Variable "documentTargetGroups" does not exist.', 163, $this->source); })()), 163, $this->source))], 163, $context, $this->getSourceContext());
            echo "
                        </h2>

                        <table id=\"";
            // line 166
            echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 166, $this->source); })()), "document-target-groups"], 166, $context, $this->getSourceContext());
            echo "\" class=\"_ptgtb__table\">
                            ";
            // line 167
            $this->displayBlock('documentTargetGroupsTable', $context, $blocks);
            // line 188
            echo "                        </table>
                    ";
        }
        // line 190
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 167
    public function block_documentTargetGroupsTable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "documentTargetGroupsTable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "documentTargetGroupsTable"));

        // line 168
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documentTargetGroups"]) || array_key_exists("documentTargetGroups", $context) ? $context["documentTargetGroups"] : (function () { throw new RuntimeError('Variable "documentTargetGroups" does not exist.', 168, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["assignment"]) {
            // line 169
            echo "                                    ";
            $context["rowIdentifier"] = twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 169, $this->source); })()), "document-target-groups-details", twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 169)], 169, $context, $this->getSourceContext());
            // line 170
            echo "
                                    <tr class=\"_ptgtb__table__row-with-details\">
                                        <td>
                                            ";
            // line 173
            echo twig_call_macro($macros["toolbar"], "macro_trigger_label", [twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "document", [], "any", false, false, true, 173), "path", [], "any", false, false, true, 173), 173, $this->source)), "truncate", [0 => 32], "method", false, false, true, 173), ("#" . $this->sandbox->ensureToStringAllowed((isset($context["rowIdentifier"]) || array_key_exists("rowIdentifier", $context) ? $context["rowIdentifier"] : (function () { throw new RuntimeError('Variable "rowIdentifier" does not exist.', 173, $this->source); })()), 173, $this->source)), [], ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "document", [], "any", false, false, true, 173), "path", [], "any", false, false, true, 173)]], 173, $context, $this->getSourceContext());
            echo "
                                        </td>
                                        <td class=\"_ptgtb__table__col-right\">
                                            ";
            // line 176
            echo twig_call_macro($macros["toolbar"], "macro_label", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "targetGroup", [], "any", false, false, true, 176), "name", [], "any", false, false, true, 176), [0 => "_ptgtb__label--target-group"]], 176, $context, $this->getSourceContext());
            echo "
                                        </td>
                                    </tr>
                                    <tr id=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["rowIdentifier"]) || array_key_exists("rowIdentifier", $context) ? $context["rowIdentifier"] : (function () { throw new RuntimeError('Variable "rowIdentifier" does not exist.', 179, $this->source); })()), 179, $this->source), "html", null, true);
            echo "\" class=\"_ptgtb__table__row-details\">
                                        <td colspan=\"2\">
                                            ";
            // line 181
            echo twig_call_macro($macros["toolbar"], "macro_metric", ["Document ID", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "document", [], "any", false, false, true, 181), "id", [], "any", false, false, true, 181)], 181, $context, $this->getSourceContext());
            echo "
                                            ";
            // line 182
            echo twig_call_macro($macros["toolbar"], "macro_metric", ["Target Group ID", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["assignment"], "targetGroup", [], "any", false, false, true, 182), "id", [], "any", false, false, true, 182)], 182, $context, $this->getSourceContext());
            echo "
                                        </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assignment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 193
    public function block_advanced($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "advanced"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "advanced"));

        // line 194
        echo "                        ";
        $this->displayBlock('visitorInfo', $context, $blocks);
        // line 208
        echo "
                        ";
        // line 209
        $this->displayBlock('storage', $context, $blocks);
        // line 252
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 194
    public function block_visitorInfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "visitorInfo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "visitorInfo"));

        // line 195
        echo "                            <h2
                                class=\"_ptgtb__collapse__trigger--block\"
                                data-ptgtb-toggle=\"collapse\"
                                data-ptgtb-target=\"#";
        // line 198
        echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 198, $this->source); })()), "visitor-info"], 198, $context, $this->getSourceContext());
        echo "\"
                                data-ptgtb-collapse-default=\"collapse\"
                                data-ptgtb-collapse-store=\"visitor-info\"
                            >
                                Visitor Info
                            </h2>
                            <div id=\"";
        // line 204
        echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 204, $this->source); })()), "visitor-info"], 204, $context, $this->getSourceContext());
        echo "\">
                                ";
        // line 205
        echo $this->extensions['Pimcore\Twig\Extension\DumpExtension']->dump(["data" => twig_get_attribute($this->env, $this->source, (isset($context["visitorInfo"]) || array_key_exists("visitorInfo", $context) ? $context["visitorInfo"] : (function () { throw new RuntimeError('Variable "visitorInfo" does not exist.', 205, $this->source); })()), "data", [], "any", false, false, true, 205), "actions" => twig_get_attribute($this->env, $this->source, (isset($context["visitorInfo"]) || array_key_exists("visitorInfo", $context) ? $context["visitorInfo"] : (function () { throw new RuntimeError('Variable "visitorInfo" does not exist.', 205, $this->source); })()), "actions", [], "any", false, false, true, 205)]);
        echo "
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 209
    public function block_storage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "storage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "storage"));

        // line 210
        echo "                            <h2
                                class=\"_ptgtb__collapse__trigger--block\"
                                data-ptgtb-toggle=\"collapse\"
                                data-ptgtb-target=\"#";
        // line 213
        echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 213, $this->source); })()), "storage"], 213, $context, $this->getSourceContext());
        echo "\"
                                data-ptgtb-collapse-default=\"collapse\"
                                data-ptgtb-collapse-store=\"storage\"
                            >
                                Storage
                            </h2>
                            <div id=\"";
        // line 219
        echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 219, $this->source); })()), "storage"], 219, $context, $this->getSourceContext());
        echo "\" class=\"_ptgtb__storage\">

                                ";
        // line 221
        $this->displayBlock('visitorStorage', $context, $blocks);
        // line 235
        echo "
                                ";
        // line 236
        $this->displayBlock('sessionStorage', $context, $blocks);
        // line 250
        echo "                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 221
    public function block_visitorStorage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "visitorStorage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "visitorStorage"));

        // line 222
        echo "                                    <h3
                                        class=\"_ptgtb__collapse__trigger--block\"
                                        data-ptgtb-toggle=\"collapse\"
                                        data-ptgtb-target=\"#";
        // line 225
        echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 225, $this->source); })()), "storage-visitor"], 225, $context, $this->getSourceContext());
        echo "\"
                                        data-ptgtb-collapse-default=\"collapse\"
                                        data-ptgtb-collapse-store=\"storage-visitor\"
                                    >
                                        Visitor Storage
                                    </h3>
                                    <div id=\"";
        // line 231
        echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 231, $this->source); })()), "storage-visitor"], 231, $context, $this->getSourceContext());
        echo "\">
                                        ";
        // line 232
        echo $this->extensions['Pimcore\Twig\Extension\DumpExtension']->dump($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["storage"]) || array_key_exists("storage", $context) ? $context["storage"] : (function () { throw new RuntimeError('Variable "storage" does not exist.', 232, $this->source); })()), "visitor", [], "any", false, false, true, 232), 232, $this->source));
        echo "
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 236
    public function block_sessionStorage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sessionStorage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sessionStorage"));

        // line 237
        echo "                                    <h3
                                        class=\"_ptgtb__collapse__trigger--block\"
                                        data-ptgtb-toggle=\"collapse\"
                                        data-ptgtb-target=\"#";
        // line 240
        echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 240, $this->source); })()), "storage-session"], 240, $context, $this->getSourceContext());
        echo "\"
                                        data-ptgtb-collapse-default=\"collapse\"
                                        data-ptgtb-collapse-store=\"storage-session\"
                                    >
                                        Session Storage
                                    </h3>
                                    <div id=\"";
        // line 246
        echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 246, $this->source); })()), "storage-session"], 246, $context, $this->getSourceContext());
        echo "\">
                                        ";
        // line 247
        echo $this->extensions['Pimcore\Twig\Extension\DumpExtension']->dump($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["storage"]) || array_key_exists("storage", $context) ? $context["storage"] : (function () { throw new RuntimeError('Variable "storage" does not exist.', 247, $this->source); })()), "session", [], "any", false, false, true, 247), 247, $this->source));
        echo "
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 255
    public function block_overrides($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "overrides"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "overrides"));

        // line 256
        echo "                    <h2
                        class=\"_ptgtb__collapse__trigger--block\"
                        data-ptgtb-toggle=\"collapse\"
                        data-ptgtb-target=\"#";
        // line 259
        echo twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 259, $this->source); })()), "overrides"], 259, $context, $this->getSourceContext());
        echo "\"
                        data-ptgtb-collapse-default=\"collapse\"
                        data-ptgtb-collapse-store=\"overrides\"
                    >
                        Overrides
                    </h2>

                    ";
        // line 266
        $this->displayBlock('overrideForm', $context, $blocks);
        // line 278
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 266
    public function block_overrideForm($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "overrideForm"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "overrideForm"));

        // line 267
        echo "                        ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["overrideForm"]) || array_key_exists("overrideForm", $context) ? $context["overrideForm"] : (function () { throw new RuntimeError('Variable "overrideForm" does not exist.', 267, $this->source); })()), [0 => "form_div_layout.html.twig"], true);
        // line 268
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["overrideForm"]) || array_key_exists("overrideForm", $context) ? $context["overrideForm"] : (function () { throw new RuntimeError('Variable "overrideForm" does not exist.', 268, $this->source); })()), 268, $this->source), 'form_start', ["attr" => ["id" => twig_call_macro($macros["toolbar"], "macro_identifier", [(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 268, $this->source); })()), "overrides"], 268, $context, $this->getSourceContext()), "class" => "_ptgtb__override-form"]]);
        echo "
                        ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->sandbox->ensureToStringAllowed((isset($context["overrideForm"]) || array_key_exists("overrideForm", $context) ? $context["overrideForm"] : (function () { throw new RuntimeError('Variable "overrideForm" does not exist.', 269, $this->source); })()), 269, $this->source), 'widget');
        echo "

                        <div class=\"_ptgtb__override-form__button-row\">
                            <button type=\"reset\" value=\"\" class=\"_ptgtb--hidden\">Reset</button>
                            <button type=\"submit\" value=\"\">Apply</button>
                        </div>

                        ";
        // line 276
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->sandbox->ensureToStringAllowed((isset($context["overrideForm"]) || array_key_exists("overrideForm", $context) ? $context["overrideForm"] : (function () { throw new RuntimeError('Variable "overrideForm" does not exist.', 276, $this->source); })()), 276, $this->source), 'form_end');
        echo "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 285
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 286
        ob_start();
        // line 287
        echo "<style type=\"text/css\">";
        // line 288
        ob_start();
        // line 289
        echo twig_include($this->env, $context, "@PimcoreCore/Targeting/toolbar/toolbar.css");
        
; echo trim(str_replace("
", '', ob_get_clean()));
        // line 291
        echo "</style>";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 286
        echo twig_spaceless($___internal_parse_4_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 295
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 296
        echo "    ";
        echo twig_include($this->env, $context, "@PimcoreCore/Targeting/toolbar/toolbar_js.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Targeting/toolbar/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1042 => 296,  1032 => 295,  1022 => 286,  1019 => 291,  1014 => 289,  1012 => 288,  1010 => 287,  1008 => 286,  998 => 285,  986 => 276,  976 => 269,  971 => 268,  968 => 267,  958 => 266,  948 => 278,  946 => 266,  936 => 259,  931 => 256,  921 => 255,  908 => 247,  904 => 246,  895 => 240,  890 => 237,  880 => 236,  867 => 232,  863 => 231,  854 => 225,  849 => 222,  839 => 221,  828 => 250,  826 => 236,  823 => 235,  821 => 221,  816 => 219,  807 => 213,  802 => 210,  792 => 209,  779 => 205,  775 => 204,  766 => 198,  761 => 195,  751 => 194,  741 => 252,  739 => 209,  736 => 208,  733 => 194,  723 => 193,  713 => 187,  694 => 182,  690 => 181,  685 => 179,  679 => 176,  673 => 173,  668 => 170,  665 => 169,  647 => 168,  637 => 167,  627 => 190,  623 => 188,  621 => 167,  617 => 166,  611 => 163,  604 => 159,  599 => 156,  596 => 155,  586 => 154,  576 => 149,  557 => 144,  553 => 143,  548 => 141,  542 => 138,  536 => 135,  531 => 132,  528 => 131,  510 => 130,  500 => 129,  490 => 152,  486 => 150,  484 => 129,  480 => 128,  474 => 125,  467 => 121,  462 => 118,  459 => 117,  449 => 116,  439 => 111,  420 => 106,  416 => 105,  413 => 104,  407 => 102,  405 => 101,  400 => 99,  395 => 97,  389 => 94,  384 => 91,  381 => 90,  363 => 89,  353 => 88,  343 => 114,  339 => 112,  337 => 88,  333 => 87,  327 => 84,  320 => 80,  315 => 77,  312 => 76,  302 => 75,  290 => 69,  286 => 67,  280 => 65,  278 => 64,  270 => 58,  266 => 56,  260 => 54,  258 => 53,  252 => 49,  245 => 45,  240 => 42,  237 => 41,  227 => 40,  216 => 72,  214 => 40,  211 => 39,  201 => 38,  191 => 4,  185 => 279,  183 => 255,  179 => 253,  177 => 193,  173 => 191,  171 => 154,  168 => 153,  166 => 116,  163 => 115,  161 => 75,  158 => 74,  156 => 38,  144 => 29,  129 => 17,  125 => 16,  118 => 12,  111 => 8,  106 => 6,  101 => 5,  98 => 4,  88 => 3,  78 => 295,  75 => 294,  73 => 285,  70 => 284,  68 => 3,  65 => 2,  63 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@PimcoreCore/Targeting/toolbar/macros.html.twig' as toolbar %}

{% block toolbar %}
    {% apply spaceless %}
    <div id=\"_ptgtb-{{ token }}\" class=\"_ptgtb _ptgtb--collapsed\">
        <div class=\"_ptgtb__trigger\" title=\"{% trans from 'admin' %}targeting{% endtrans %}\">
            <span class=\"_ptgtb__toolbar-icon _ptgtb__toolbar-icon--target\">
                {{ include('@PimcoreCore/Profiler/target.svg.twig') }}
            </span>

            <span class=\"_ptgtb__toolbar-icon _ptgtb__toolbar-icon--collapse\">
                {{ include('@PimcoreCore/Targeting/toolbar/icon/toolbar-collapse.svg.twig') }}
            </span>
        </div>

        <a class=\"_ptgtb__toolbar-icon _ptgtb__toolbar-icon--close\" data-ptgtb-target=\"#_ptgtb-{{ token }}\" title=\"Close Toolbar\">
            {{ include('@PimcoreCore/Targeting/toolbar/icon/close.svg.twig') }}
        </a>

        <a
            class=\"_ptgtb__toolbar-icon _ptgtb__toolbar-icon--advanced-features\"
            title=\"Toggle Advanced Features\"
            data-ptgtb-toggle=\"collapse\"
            data-ptgtb-target=\"._ptgtb__advanced\"
            data-ptgtb-collapse-default=\"collapse\"
            data-ptgtb-collapse-store=\"advanced\"
            data-ptgtb-arrow=\"false\"
            >
            {{ include('@PimcoreCore/Targeting/toolbar/icon/advanced_features.svg.twig') }}
        </a>

        <div class=\"_ptgtb__content\">
            <div class=\"_ptgtb__content-inner\">
                <h1>
                    Targeting
                </h1>

                {% block overview %}
                    <table class=\"_ptgtb__table\">
                        {% block overviewTable %}
                            {% if documentTargetGroup is not null %}
                                <tr>
                                    <th>Document Target Group</th>
                                    <td class=\"_ptgtb__table__col-right\">
                                        {{ toolbar.label(documentTargetGroup.name, ['_ptgtb__label--target-group']) }}
                                    </td>
                                </tr>
                            {% endif %}

                            <tr>
                                <th>Visitor ID</th>
                                <td class=\"_ptgtb__table__col-right\">
                                    {% if visitorInfo.visitorId is not empty %}
                                        {{ toolbar.label(visitorInfo.visitorId) }}
                                    {% else %}
                                        -
                                    {% endif %}
                                </td>
                            </tr>

                            <tr>
                                <th>Session ID</th>
                                <td class=\"_ptgtb__table__col-right\">
                                    {% if visitorInfo.sessionId is not empty %}
                                        {{ toolbar.label(visitorInfo.sessionId) }}
                                    {% else %}
                                        -
                                    {% endif %}
                                </td>
                            </tr>
                        {% endblock %}
                    </table>
                {% endblock %}

                {% block rules %}
                    {% if rules is not empty %}
                        <h2
                            class=\"_ptgtb__collapse__trigger--block\"
                            data-ptgtb-toggle=\"collapse\"
                            data-ptgtb-target=\"#{{ toolbar.identifier(token, 'rules') }}\"
                            data-ptgtb-collapse-store=\"rules\"
                        >
                            Matched Rules
                            {{ toolbar.label(rules|length) }}
                        </h2>

                        <table id=\"{{ toolbar.identifier(token, 'rules') }}\" class=\"_ptgtb__table\">
                            {% block rulesTable %}
                                {% for rule in rules %}
                                    {% set rowIdentifier = toolbar.identifier(token, 'rules-details', loop.index) %}

                                    <tr class=\"_ptgtb__table__row-with-details\">
                                        <td>
                                            {{ toolbar.trigger_label(rule.name, '#' ~ rowIdentifier, ['_ptgtb__label--rule']) }}
                                        </td>
                                    </tr>
                                    <tr id=\"{{ rowIdentifier }}\" class=\"_ptgtb__table__row-details\">
                                        <td>
                                            {{ toolbar.metric('Rule ID', rule.id) }}

                                            {% if rule.duration is not null %}
                                                {{ toolbar.metric('Duration', rule.duration|round(2) ~ ' ms') }}
                                            {% endif %}

                                            {{ toolbar.metric('Conditions', rule.conditions|length) }}
                                            {{ toolbar.metric('Actions', rule.actions|length) }}
                                        </td>
                                    </tr>

                                {% endfor %}
                            {% endblock %}
                        </table>
                    {% endif %}
                {% endblock %}

                {% block targetGroups %}
                    {% if targetGroups is not empty %}
                        <h2
                            class=\"_ptgtb__collapse__trigger--block\"
                            data-ptgtb-toggle=\"collapse\"
                            data-ptgtb-target=\"#{{ toolbar.identifier(token, 'target-groups') }}\"
                            data-ptgtb-collapse-store=\"target-groups\"
                        >
                            Assigned Target Groups
                            {{ toolbar.label(targetGroups|length) }}
                        </h2>

                        <table id=\"{{ toolbar.identifier(token, 'target-groups') }}\" class=\"_ptgtb__table\">
                            {% block targetGroupsTable %}
                                {% for targetGroup in targetGroups %}
                                    {% set rowIdentifier = toolbar.identifier(token, 'target-groups-details', loop.index) %}

                                    <tr class=\"_ptgtb__table__row-with-details\">
                                        <td>
                                            {{ toolbar.trigger_label(targetGroup.name, '#' ~ rowIdentifier, ['_ptgtb__label--target-group']) }}
                                        </td>
                                        <td class=\"_ptgtb__table__col-number\">
                                            {{ toolbar.label(targetGroup.count) }}
                                        </td>
                                    </tr>
                                    <tr id=\"{{ rowIdentifier }}\" class=\"_ptgtb__table__row-details\">
                                        <td colspan=\"2\">
                                            {{ toolbar.metric('Target Group ID', targetGroup.id) }}
                                            {{ toolbar.metric('Threshold', targetGroup.threshold) }}
                                        </td>
                                    </tr>

                                {% endfor %}
                            {% endblock %}
                        </table>
                    {% endif %}
                {% endblock %}

                {% block documentTargetGroups %}
                    {% if documentTargetGroups is not empty %}
                        <h2
                            class=\"_ptgtb__collapse__trigger--block\"
                            data-ptgtb-toggle=\"collapse\"
                            data-ptgtb-target=\"#{{ toolbar.identifier(token, 'document-target-groups') }}\"
                            data-ptgtb-collapse-store=\"document-target-groups\"
                        >
                            Document Target Groups
                            {{ toolbar.label(documentTargetGroups|length) }}
                        </h2>

                        <table id=\"{{ toolbar.identifier(token, 'document-target-groups') }}\" class=\"_ptgtb__table\">
                            {% block documentTargetGroupsTable %}
                                {% for assignment in documentTargetGroups %}
                                    {% set rowIdentifier = toolbar.identifier(token, 'document-target-groups-details', loop.index) %}

                                    <tr class=\"_ptgtb__table__row-with-details\">
                                        <td>
                                            {{ toolbar.trigger_label(assignment.document.path|u.truncate(32), '#' ~ rowIdentifier, [], { title: assignment.document.path }) }}
                                        </td>
                                        <td class=\"_ptgtb__table__col-right\">
                                            {{ toolbar.label(assignment.targetGroup.name, ['_ptgtb__label--target-group']) }}
                                        </td>
                                    </tr>
                                    <tr id=\"{{ rowIdentifier }}\" class=\"_ptgtb__table__row-details\">
                                        <td colspan=\"2\">
                                            {{ toolbar.metric('Document ID', assignment.document.id) }}
                                            {{ toolbar.metric('Target Group ID', assignment.targetGroup.id) }}
                                        </td>
                                    </tr>

                                {% endfor %}
                            {% endblock %}
                        </table>
                    {% endif %}
                {% endblock %}

                <div class=\"_ptgtb__advanced\">
                    {% block advanced %}
                        {% block visitorInfo %}
                            <h2
                                class=\"_ptgtb__collapse__trigger--block\"
                                data-ptgtb-toggle=\"collapse\"
                                data-ptgtb-target=\"#{{ toolbar.identifier(token, 'visitor-info') }}\"
                                data-ptgtb-collapse-default=\"collapse\"
                                data-ptgtb-collapse-store=\"visitor-info\"
                            >
                                Visitor Info
                            </h2>
                            <div id=\"{{ toolbar.identifier(token, 'visitor-info') }}\">
                                {{ pimcore_dump({ data: visitorInfo.data, actions: visitorInfo.actions }) }}
                            </div>
                        {% endblock %}

                        {% block storage %}
                            <h2
                                class=\"_ptgtb__collapse__trigger--block\"
                                data-ptgtb-toggle=\"collapse\"
                                data-ptgtb-target=\"#{{ toolbar.identifier(token, 'storage') }}\"
                                data-ptgtb-collapse-default=\"collapse\"
                                data-ptgtb-collapse-store=\"storage\"
                            >
                                Storage
                            </h2>
                            <div id=\"{{ toolbar.identifier(token, 'storage') }}\" class=\"_ptgtb__storage\">

                                {% block visitorStorage %}
                                    <h3
                                        class=\"_ptgtb__collapse__trigger--block\"
                                        data-ptgtb-toggle=\"collapse\"
                                        data-ptgtb-target=\"#{{ toolbar.identifier(token, 'storage-visitor') }}\"
                                        data-ptgtb-collapse-default=\"collapse\"
                                        data-ptgtb-collapse-store=\"storage-visitor\"
                                    >
                                        Visitor Storage
                                    </h3>
                                    <div id=\"{{ toolbar.identifier(token, 'storage-visitor') }}\">
                                        {{ pimcore_dump(storage.visitor) }}
                                    </div>
                                {% endblock %}

                                {% block sessionStorage %}
                                    <h3
                                        class=\"_ptgtb__collapse__trigger--block\"
                                        data-ptgtb-toggle=\"collapse\"
                                        data-ptgtb-target=\"#{{ toolbar.identifier(token, 'storage-session') }}\"
                                        data-ptgtb-collapse-default=\"collapse\"
                                        data-ptgtb-collapse-store=\"storage-session\"
                                    >
                                        Session Storage
                                    </h3>
                                    <div id=\"{{ toolbar.identifier(token, 'storage-session') }}\">
                                        {{ pimcore_dump(storage.session) }}
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    {% endblock %}
                </div>

                {% block overrides %}
                    <h2
                        class=\"_ptgtb__collapse__trigger--block\"
                        data-ptgtb-toggle=\"collapse\"
                        data-ptgtb-target=\"#{{ toolbar.identifier(token, 'overrides') }}\"
                        data-ptgtb-collapse-default=\"collapse\"
                        data-ptgtb-collapse-store=\"overrides\"
                    >
                        Overrides
                    </h2>

                    {% block overrideForm %}
                        {% form_theme overrideForm 'form_div_layout.html.twig' %}
                        {{ form_start(overrideForm, { attr: { id: toolbar.identifier(token, 'overrides'), class: '_ptgtb__override-form' }}) }}
                        {{ form_widget(overrideForm) }}

                        <div class=\"_ptgtb__override-form__button-row\">
                            <button type=\"reset\" value=\"\" class=\"_ptgtb--hidden\">Reset</button>
                            <button type=\"submit\" value=\"\">Apply</button>
                        </div>

                        {{ form_end(overrideForm) }}
                    {% endblock %}
                {% endblock %}
            </div>
        </div>
    </div>
    {% endapply %}
{% endblock %}

{% block css %}
    {%- apply spaceless -%}
    <style type=\"text/css\">
        {%- pimcoreassetcompress -%}
        {{ include('@PimcoreCore/Targeting/toolbar/toolbar.css') }}
        {%- endpimcoreassetcompress -%}
    </style>
    {%- endapply -%}
{% endblock %}

{% block js %}
    {{ include('@PimcoreCore/Targeting/toolbar/toolbar_js.html.twig') }}
{% endblock %}
", "@PimcoreCore/Targeting/toolbar/toolbar.html.twig", "/var/www/html/pimcore/ecommerce/vendor/pimcore/pimcore/bundles/CoreBundle/Resources/views/Targeting/toolbar/toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "block" => 3, "apply" => 4, "trans" => 6, "if" => 41, "for" => 89, "set" => 90, "form_theme" => 267, "pimcoreassetcompress" => 288);
        static $filters = array("escape" => 5, "spaceless" => 4, "length" => 84, "round" => 102, "u" => 173);
        static $functions = array("include" => 8, "pimcore_dump" => 205, "form_start" => 268, "form_widget" => 269, "form_end" => 276);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'block', 'apply', 'trans', 'if', 'for', 'set', 'form_theme', 'pimcoreassetcompress'],
                ['escape', 'spaceless', 'length', 'round', 'u'],
                ['include', 'pimcore_dump', 'form_start', 'form_widget', 'form_end']
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
