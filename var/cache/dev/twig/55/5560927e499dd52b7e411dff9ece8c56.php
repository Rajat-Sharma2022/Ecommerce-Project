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

/* @WebProfiler/Collector/http_client.html.twig */
class __TwigTemplate_329ee33e946618ba4c4aa1c1f90b79f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/http_client.html.twig", 1);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "requestCount", [], "any", false, false, true, 4)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/http-client.svg");
            echo "
            ";
            // line 7
            $context["status_color"] = "";
            // line 8
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "requestCount", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 10
            echo "
        ";
            // line 11
            ob_start();
            // line 12
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "requestCount", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status ";
            // line 18
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "errorCount", [], "any", false, false, true, 18) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "errorCount", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 21
            echo "
        ";
            // line 22
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 22, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 22, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 27
        echo "<span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "requestCount", [], "any", false, false, true, 27) == 0)) ? ("disabled") : (""));
        echo "\">
    <span class=\"icon\">";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Icon/http-client.svg");
        echo "</span>
    <strong>HTTP Client</strong>
    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 30, $this->source); })()), "requestCount", [], "any", false, false, true, 30)) {
            // line 31
            echo "        <span class=\"count\">
            ";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "requestCount", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 35
        echo "</span>
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
        echo "    <h2>HTTP Client</h2>
    ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "requestCount", [], "any", false, false, true, 40) == 0)) {
            // line 41
            echo "        <div class=\"empty\">
            <p>No HTTP requests were made.</p>
        </div>
    ";
        } else {
            // line 45
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "requestCount", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "errorCount", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "clients", [], "any", false, false, true, 57));
            foreach ($context['_seq'] as $context["name"] => $context["client"]) {
                // line 58
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 58), 58, $this->source)) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 59
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 59, $this->source), "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 59), 59, $this->source)), "html", null, true);
                echo "</span></h3>
                    <div class=\"tab-content\">
                        ";
                // line 61
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 61)) == 0)) {
                    // line 62
                    echo "                            <div class=\"empty\">
                                <p>No requests were made with the \"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 63, $this->source), "html", null, true);
                    echo "\" service.</p>
                            </div>
                        ";
                } else {
                    // line 66
                    echo "                            <h4>Requests</h4>
                            ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, true, 67));
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 68
                        echo "                                ";
                        $context["profiler_token"] = "";
                        // line 69
                        echo "                                ";
                        $context["profiler_link"] = "";
                        // line 70
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, true, true, 70), "response_headers", [], "any", true, true, true, 70)) {
                            // line 71
                            echo "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, true, 71), "response_headers", [], "any", false, false, true, 71));
                            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                                // line 72
                                echo "                                        ";
                                if (preg_match("/^x-debug-token: .*\$/i", $context["header"])) {
                                    // line 73
                                    echo "                                            ";
                                    $context["profiler_token"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, true, 73), 73, $this->source), twig_length_filter($this->env, "x-debug-token: "));
                                    // line 74
                                    echo "                                        ";
                                }
                                // line 75
                                echo "                                        ";
                                if (preg_match("/^x-debug-token-link: .*\$/i", $context["header"])) {
                                    // line 76
                                    echo "                                            ";
                                    $context["profiler_link"] = twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, true, 76), 76, $this->source), twig_length_filter($this->env, "x-debug-token-link: "));
                                    // line 77
                                    echo "                                        ";
                                }
                                // line 78
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 79
                            echo "                                ";
                        }
                        // line 80
                        echo "                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"label\">";
                        // line 84
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "method", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        echo "</span>
                                        </th>
                                        <th class=\"full-width\">
                                            ";
                        // line 87
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "url", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                        echo "
                                            ";
                        // line 88
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, true, 88))) {
                            // line 89
                            echo "                                                ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, true, 89), 89, $this->source), 1);
                            echo "
                                            ";
                        }
                        // line 91
                        echo "                                        </th>
                                        ";
                        // line 92
                        if (((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 92, $this->source); })()) && (isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 92, $this->source); })()))) {
                            // line 93
                            echo "                                            <th>
                                                Profile
                                            </th>
                                        ";
                        }
                        // line 97
                        echo "                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            ";
                        // line 102
                        if ((twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, true, 102) >= 500)) {
                            // line 103
                            echo "                                                ";
                            $context["responseStatus"] = "error";
                            // line 104
                            echo "                                            ";
                        } elseif ((twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, true, 104) >= 400)) {
                            // line 105
                            echo "                                                ";
                            $context["responseStatus"] = "warning";
                            // line 106
                            echo "                                            ";
                        } else {
                            // line 107
                            echo "                                                ";
                            $context["responseStatus"] = "success";
                            // line 108
                            echo "                                            ";
                        }
                        // line 109
                        echo "                                            <span class=\"label status-";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["responseStatus"]) || array_key_exists("responseStatus", $context) ? $context["responseStatus"] : (function () { throw new RuntimeError('Variable "responseStatus" does not exist.', 109, $this->source); })()), 109, $this->source), "html", null, true);
                        echo "\">
                                                ";
                        // line 110
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                        echo "
                                            </span>
                                        </th>
                                        <td>
                                            ";
                        // line 114
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, true, 114), 114, $this->source), 1);
                        echo "
                                        </td>
                                        ";
                        // line 116
                        if (((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 116, $this->source); })()) && (isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 116, $this->source); })()))) {
                            // line 117
                            echo "                                            <td>
                                                <span><a href=\"";
                            // line 118
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 118, $this->source); })()), 118, $this->source), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 118, $this->source); })()), 118, $this->source), "html", null, true);
                            echo "</a></span>
                                            </td>
                                        ";
                        }
                        // line 121
                        echo "                                    </tr>
                                    </tbody>
                                </table>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "                        ";
                }
                // line 126
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "        ";
        }
        // line 130
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/http_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 130,  401 => 129,  393 => 126,  390 => 125,  381 => 121,  373 => 118,  370 => 117,  368 => 116,  363 => 114,  356 => 110,  351 => 109,  348 => 108,  345 => 107,  342 => 106,  339 => 105,  336 => 104,  333 => 103,  331 => 102,  324 => 97,  318 => 93,  316 => 92,  313 => 91,  307 => 89,  305 => 88,  301 => 87,  295 => 84,  289 => 80,  286 => 79,  280 => 78,  277 => 77,  274 => 76,  271 => 75,  268 => 74,  265 => 73,  262 => 72,  257 => 71,  254 => 70,  251 => 69,  248 => 68,  244 => 67,  241 => 66,  235 => 63,  232 => 62,  230 => 61,  223 => 59,  218 => 58,  214 => 57,  205 => 51,  198 => 47,  194 => 45,  188 => 41,  186 => 40,  183 => 39,  173 => 38,  162 => 35,  156 => 32,  153 => 31,  151 => 30,  146 => 28,  141 => 27,  131 => 26,  118 => 22,  115 => 21,  107 => 18,  100 => 14,  96 => 12,  94 => 11,  91 => 10,  85 => 8,  83 => 7,  78 => 6,  75 => 5,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.requestCount %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/http-client.svg') }}
            {% set status_color = '' %}
            <span class=\"sf-toolbar-value\">{{ collector.requestCount }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>{{ collector.requestCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status {{ collector.errorCount > 0 ? 'sf-toolbar-status-red' }}\">{{ collector.errorCount }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label {{ collector.requestCount == 0 ? 'disabled' }}\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/http-client.svg') }}</span>
    <strong>HTTP Client</strong>
    {% if collector.requestCount %}
        <span class=\"count\">
            {{ collector.requestCount }}
        </span>
    {% endif %}
</span>
{% endblock %}

{% block panel %}
    <h2>HTTP Client</h2>
    {% if collector.requestCount == 0 %}
        <div class=\"empty\">
            <p>No HTTP requests were made.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestCount }}</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.errorCount }}</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            {% for name, client in collector.clients %}
                <div class=\"tab {{ client.traces|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ client.traces|length }}</span></h3>
                    <div class=\"tab-content\">
                        {% if client.traces|length == 0 %}
                            <div class=\"empty\">
                                <p>No requests were made with the \"{{ name }}\" service.</p>
                            </div>
                        {% else %}
                            <h4>Requests</h4>
                            {% for trace in client.traces %}
                                {% set profiler_token = '' %}
                                {% set profiler_link = '' %}
                                {% if trace.info.response_headers is defined %}
                                    {% for header in trace.info.response_headers %}
                                        {% if header matches '/^x-debug-token: .*\$/i' %}
                                            {% set profiler_token = (header.getValue | slice('x-debug-token: ' | length)) %}
                                        {% endif %}
                                        {% if header matches '/^x-debug-token-link: .*\$/i' %}
                                            {% set profiler_link = (header.getValue | slice('x-debug-token-link: ' | length)) %}
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"label\">{{ trace.method }}</span>
                                        </th>
                                        <th class=\"full-width\">
                                            {{ trace.url }}
                                            {% if trace.options is not empty %}
                                                {{ profiler_dump(trace.options, maxDepth=1) }}
                                            {% endif %}
                                        </th>
                                        {% if profiler_token and profiler_link %}
                                            <th>
                                                Profile
                                            </th>
                                        {% endif %}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            {% if trace.http_code >= 500 %}
                                                {% set responseStatus = 'error' %}
                                            {% elseif trace.http_code >= 400 %}
                                                {% set responseStatus = 'warning' %}
                                            {% else %}
                                                {% set responseStatus = 'success' %}
                                            {% endif %}
                                            <span class=\"label status-{{ responseStatus }}\">
                                                {{ trace.http_code }}
                                            </span>
                                        </th>
                                        <td>
                                            {{ profiler_dump(trace.info, maxDepth=1) }}
                                        </td>
                                        {% if profiler_token and profiler_link %}
                                            <td>
                                                <span><a href=\"{{ profiler_link }}\" target=\"_blank\">{{ profiler_token }}</a></span>
                                            </td>
                                        {% endif %}
                                    </tr>
                                    </tbody>
                                </table>
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}
", "@WebProfiler/Collector/http_client.html.twig", "/var/www/html/Eproject/ecomwebsite/vendor/symfony/web-profiler-bundle/Resources/views/Collector/http_client.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5, "for" => 57);
        static $filters = array("escape" => 8, "length" => 58, "slice" => 73);
        static $functions = array("include" => 6, "profiler_dump" => 89);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length', 'slice'],
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
