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

/* @PimcoreAdmin/Admin/Misc/iconList.html.twig */
class __TwigTemplate_c9317acf56dfadbfc889167fa711dc1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/Admin/Misc/iconList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/Admin/Misc/iconList.html.twig"));

        // line 1
        $context["webRoot"] = twig_constant("PIMCORE_WEB_ROOT");
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Pimcore :: Icon list</title>
    <style type=\"text/css\">

        body {
            font-family: Arial;
            font-size: 12px;
        }

        .icons {
            width:1200px;
            margin: 0 auto;
        }

        .icon {
            text-align: center;
            width:100px;
            height:75px;
            margin: 0 10px 20px 0;
            float: left;
            font-size: 10px;
            word-wrap: break-word;
            cursor: copy;
        }

        .icon.black {
            background-color: #0C0F12;
        }

        .icon.black .label {
            color: #fff;
        }

        .info {
            text-align: center;
            margin-bottom: 30px;
            clear: both;
            font-size: 22px;
            padding-top: 50px;
        }

        .info small {
            font-size: 16px;
        }

        .icon img {
            width: 50px;
        }

        .language-icon img{
            width: 16px;
            cursor: copy;
        }
    </style>
</head>
<body>

<div class=\"info\">
    <a target=\"_blank\">Color Icons</a>
    <br>
    <small>based on the <a href=\"https://github.com/google/material-design-icons/blob/master/LICENSE\" target=\"_blank\">Material Design Icons</a></small>
</div>

<div id=\"color_icons\" class=\"icons\">
    <div style=\"margin-bottom: 20px; text-align: left\">ℹ Click on icon to copy path to clipboard.</div>
    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["colorIcons"]) || array_key_exists("colorIcons", $context) ? $context["colorIcons"] : (function () { throw new RuntimeError('Variable "colorIcons" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 72
            echo "        ";
            $context["iconPath"] = twig_replace_filter($this->sandbox->ensureToStringAllowed($context["icon"], 72, $this->source), [(isset($context["webRoot"]) || array_key_exists("webRoot", $context) ? $context["webRoot"] : (function () { throw new RuntimeError('Variable "webRoot" does not exist.', 72, $this->source); })()) => ""]);
            // line 73
            echo "        <div class=\"icon\">
            ";
            // line 74
            echo $this->extensions['Pimcore\Twig\Extension\AdminExtension']->inlineIcon($this->sandbox->ensureToStringAllowed($context["icon"], 74, $this->source));
            echo "
            <div class=\"label\">
                ";
            // line 76
            echo ((twig_in_filter((isset($context["iconPath"]) || array_key_exists("iconPath", $context) ? $context["iconPath"] : (function () { throw new RuntimeError('Variable "iconPath" does not exist.', 76, $this->source); })()), (isset($context["iconsCss"]) || array_key_exists("iconsCss", $context) ? $context["iconsCss"] : (function () { throw new RuntimeError('Variable "iconsCss" does not exist.', 76, $this->source); })()))) ? ("*") : (""));
            echo "
                ";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Pimcore\Twig\Extension\HelpersExtension']->basenameFilter($this->sandbox->ensureToStringAllowed((isset($context["iconPath"]) || array_key_exists("iconPath", $context) ? $context["iconPath"] : (function () { throw new RuntimeError('Variable "iconPath" does not exist.', 77, $this->source); })()), 77, $this->source)), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</div>

<div class=\"info\">
    <a target=\"_blank\">White Icons</a>
    <br>
    <small>based on the <a href=\"https://github.com/google/material-design-icons/blob/master/LICENSE\" target=\"_blank\">Material Design Icons</a></small>
</div>

<div id=\"white_icons\" class=\"icons\">
    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["whiteIcons"]) || array_key_exists("whiteIcons", $context) ? $context["whiteIcons"] : (function () { throw new RuntimeError('Variable "whiteIcons" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 91
            echo "        ";
            $context["iconPath"] = twig_replace_filter($this->sandbox->ensureToStringAllowed($context["icon"], 91, $this->source), [(isset($context["webRoot"]) || array_key_exists("webRoot", $context) ? $context["webRoot"] : (function () { throw new RuntimeError('Variable "webRoot" does not exist.', 91, $this->source); })()) => ""]);
            // line 92
            echo "        <div class=\"icon black\">
            ";
            // line 93
            echo $this->extensions['Pimcore\Twig\Extension\AdminExtension']->inlineIcon($this->sandbox->ensureToStringAllowed($context["icon"], 93, $this->source));
            echo "
            <div class=\"label\">
                ";
            // line 95
            echo ((twig_in_filter((isset($context["iconPath"]) || array_key_exists("iconPath", $context) ? $context["iconPath"] : (function () { throw new RuntimeError('Variable "iconPath" does not exist.', 95, $this->source); })()), (isset($context["iconsCss"]) || array_key_exists("iconsCss", $context) ? $context["iconsCss"] : (function () { throw new RuntimeError('Variable "iconsCss" does not exist.', 95, $this->source); })()))) ? ("*") : (""));
            echo "
                ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Pimcore\Twig\Extension\HelpersExtension']->basenameFilter($this->sandbox->ensureToStringAllowed((isset($context["iconPath"]) || array_key_exists("iconPath", $context) ? $context["iconPath"] : (function () { throw new RuntimeError('Variable "iconPath" does not exist.', 96, $this->source); })()), 96, $this->source)), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "</div>

<div class=\"info\">
    <a href=\"https://github.com/twitter/twemoji\" target=\"_blank\">Source (Twemoji)</a>
</div>

<div id=\"twemoji\" class=\"icons\">
    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["twemoji"]) || array_key_exists("twemoji", $context) ? $context["twemoji"] : (function () { throw new RuntimeError('Variable "twemoji" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 108
            echo "        ";
            $context["iconPath"] = twig_replace_filter($this->sandbox->ensureToStringAllowed($context["icon"], 108, $this->source), [(isset($context["webRoot"]) || array_key_exists("webRoot", $context) ? $context["webRoot"] : (function () { throw new RuntimeError('Variable "webRoot" does not exist.', 108, $this->source); })()) => ""]);
            // line 109
            echo "        <div class=\"icon\">
            ";
            // line 110
            echo $this->extensions['Pimcore\Twig\Extension\AdminExtension']->inlineIcon($this->sandbox->ensureToStringAllowed($context["icon"], 110, $this->source));
            echo "
            <div class=\"label\">";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Pimcore\Twig\Extension\HelpersExtension']->basenameFilter($this->sandbox->ensureToStringAllowed((isset($context["iconPath"]) || array_key_exists("iconPath", $context) ? $context["iconPath"] : (function () { throw new RuntimeError('Variable "iconPath" does not exist.', 111, $this->source); })()), 111, $this->source)), "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "</div>

<div class=\"info\">
    Flags
</div>

<table>
    <tr>
        <th>Flag</th>
        <th>Code</th>
        <th>Name</th>
    </tr>
    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languageOptions"]) || array_key_exists("languageOptions", $context) ? $context["languageOptions"] : (function () { throw new RuntimeError('Variable "languageOptions" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["langOpt"]) {
            // line 127
            echo "        <tr>
            <td class=\"language-icon\">";
            // line 128
            echo $this->extensions['Pimcore\Twig\Extension\AdminExtension']->inlineIcon($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["langOpt"], "flag", [], "array", false, false, true, 128), 128, $this->source));
            echo "</td>
            <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["langOpt"], "language", [], "array", false, false, true, 129), 129, $this->source), "html", null, true);
            echo "</td>
            <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["langOpt"], "display", [], "array", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langOpt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "</table>

<script src=\"/bundles/pimcoreadmin/js/pimcore/common.js\"></script>
<script src=\"/bundles/pimcoreadmin/js/pimcore/functions.js\"></script>
<script src=\"/bundles/pimcoreadmin/js/pimcore/helpers.js\"></script>
<script ";
        // line 138
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 138, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 138), 138, $this->source);
        echo ">
    [...document.getElementsByTagName('img')]
        .forEach(el => {
            el.addEventListener(\"click\", () => {
                pimcore.helpers.copyStringToClipboard(el.dataset.imgpath)
            });
        });
</script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreAdmin/Admin/Misc/iconList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 138,  257 => 133,  248 => 130,  244 => 129,  240 => 128,  237 => 127,  233 => 126,  219 => 114,  210 => 111,  206 => 110,  203 => 109,  200 => 108,  196 => 107,  187 => 100,  177 => 96,  173 => 95,  168 => 93,  165 => 92,  162 => 91,  158 => 90,  147 => 81,  137 => 77,  133 => 76,  128 => 74,  125 => 73,  122 => 72,  118 => 71,  47 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set webRoot = constant('PIMCORE_WEB_ROOT') %}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Pimcore :: Icon list</title>
    <style type=\"text/css\">

        body {
            font-family: Arial;
            font-size: 12px;
        }

        .icons {
            width:1200px;
            margin: 0 auto;
        }

        .icon {
            text-align: center;
            width:100px;
            height:75px;
            margin: 0 10px 20px 0;
            float: left;
            font-size: 10px;
            word-wrap: break-word;
            cursor: copy;
        }

        .icon.black {
            background-color: #0C0F12;
        }

        .icon.black .label {
            color: #fff;
        }

        .info {
            text-align: center;
            margin-bottom: 30px;
            clear: both;
            font-size: 22px;
            padding-top: 50px;
        }

        .info small {
            font-size: 16px;
        }

        .icon img {
            width: 50px;
        }

        .language-icon img{
            width: 16px;
            cursor: copy;
        }
    </style>
</head>
<body>

<div class=\"info\">
    <a target=\"_blank\">Color Icons</a>
    <br>
    <small>based on the <a href=\"https://github.com/google/material-design-icons/blob/master/LICENSE\" target=\"_blank\">Material Design Icons</a></small>
</div>

<div id=\"color_icons\" class=\"icons\">
    <div style=\"margin-bottom: 20px; text-align: left\">ℹ Click on icon to copy path to clipboard.</div>
    {% for icon in colorIcons %}
        {% set iconPath = icon|replace({(webRoot): ''}) %}
        <div class=\"icon\">
            {{ icon | pimcore_inline_icon | raw }}
            <div class=\"label\">
                {{ iconPath in iconsCss  ? '*' : '' }}
                {{ iconPath|basename }}
            </div>
        </div>
    {% endfor %}
</div>

<div class=\"info\">
    <a target=\"_blank\">White Icons</a>
    <br>
    <small>based on the <a href=\"https://github.com/google/material-design-icons/blob/master/LICENSE\" target=\"_blank\">Material Design Icons</a></small>
</div>

<div id=\"white_icons\" class=\"icons\">
    {% for icon in whiteIcons %}
        {% set iconPath = icon|replace({(webRoot): ''}) %}
        <div class=\"icon black\">
            {{ icon | pimcore_inline_icon | raw }}
            <div class=\"label\">
                {{ iconPath in iconsCss  ? '*' : '' }}
                {{ iconPath|basename }}
            </div>
        </div>
    {% endfor %}
</div>

<div class=\"info\">
    <a href=\"https://github.com/twitter/twemoji\" target=\"_blank\">Source (Twemoji)</a>
</div>

<div id=\"twemoji\" class=\"icons\">
    {% for icon in twemoji %}
        {% set iconPath = icon|replace({(webRoot): ''}) %}
        <div class=\"icon\">
            {{ icon | pimcore_inline_icon | raw }}
            <div class=\"label\">{{ iconPath|basename }}</div>
        </div>
    {% endfor %}
</div>

<div class=\"info\">
    Flags
</div>

<table>
    <tr>
        <th>Flag</th>
        <th>Code</th>
        <th>Name</th>
    </tr>
    {% for langOpt in languageOptions %}
        <tr>
            <td class=\"language-icon\">{{ langOpt['flag'] | pimcore_inline_icon | raw }}</td>
            <td>{{ langOpt['language'] }}</td>
            <td>{{ langOpt['display'] }}</td>
        </tr>
    {% endfor %}
</table>

<script src=\"/bundles/pimcoreadmin/js/pimcore/common.js\"></script>
<script src=\"/bundles/pimcoreadmin/js/pimcore/functions.js\"></script>
<script src=\"/bundles/pimcoreadmin/js/pimcore/helpers.js\"></script>
<script {{ pimcore_csp.getNonceHtmlAttribute()|raw }}>
    [...document.getElementsByTagName('img')]
        .forEach(el => {
            el.addEventListener(\"click\", () => {
                pimcore.helpers.copyStringToClipboard(el.dataset.imgpath)
            });
        });
</script>

</body>
</html>
", "@PimcoreAdmin/Admin/Misc/iconList.html.twig", "/var/www/html/pimcore/ecommerce/vendor/pimcore/pimcore/bundles/AdminBundle/Resources/views/Admin/Misc/iconList.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 71);
        static $filters = array("replace" => 72, "raw" => 74, "pimcore_inline_icon" => 74, "escape" => 77, "basename" => 77);
        static $functions = array("constant" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['replace', 'raw', 'pimcore_inline_icon', 'escape', 'basename'],
                ['constant']
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
