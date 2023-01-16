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

/* @PimcoreAdmin/Admin/Index/index.html.twig */
class __TwigTemplate_5919467e1ad3e57b4ef89290fac1c75b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/Admin/Index/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreAdmin/Admin/Index/index.html.twig"));

        // line 1
        $context["language"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, true, 1), "locale", [], "any", false, false, true, 1);
        // line 3
        $context["userProxy"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, true, 3);
        // line 4
        $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["userProxy"]) || array_key_exists("userProxy", $context) ? $context["userProxy"] : (function () { throw new RuntimeError('Variable "userProxy" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, true, 4);
        // line 5
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex, nofollow\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>

    <link rel=\"icon\" type=\"image/png\" href=\"/bundles/pimcoreadmin/img/favicon/favicon-32x32.png\"/>
    <meta name=\"google\" value=\"notranslate\">

    <style type=\"text/css\">
        body {
            margin: 0;
            padding: 0;
            background: #fff;
        }

        #pimcore_loading {
            margin: 0 auto;
            width: 300px;
            padding: 300px 0 0 0;
            text-align: center;
        }

        .spinner {
            margin: 100px auto 0;
            width: 70px;
            text-align: center;
        }

        .spinner > div {
            width: 18px;
            height: 18px;
            background-color: #3d3d3d;

            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes sk-bouncedelay {
            0%, 80%, 100% {
                -webkit-transform: scale(0)
            }
            40% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes sk-bouncedelay {
            0%, 80%, 100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }

        #pimcore_panel_tabs-body {
            background-image: url(";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_settings_display_custom_logo");
        echo ");
            ";
        // line 80
        if ( !(null === ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "branding", [], "array", false, true, true, 80), "color_admin_interface_background", [], "array", true, true, true, 80)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "branding", [], "array", false, true, true, 80), "color_admin_interface_background", [], "array", false, false, true, 80), null)) : (null)))) {
            // line 81
            echo "                background-color: ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 81, $this->source); })()), "branding", [], "array", false, false, true, 81), "color_admin_interface_background", [], "array", false, false, true, 81), 81, $this->source), "html", null, true);
            echo ";
            ";
        }
        // line 83
        echo "            background-repeat: no-repeat;
            background-position: center center;
            background-size: 500px auto;
        }
    </style>

    <title>";
        // line 89
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 89, $this->source); })()), "hostname", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
        echo " :: Pimcore</title>

    <script ";
        // line 91
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 91, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 91), 91, $this->source);
        echo ">
        var pimcore = {}; // namespace

        // hide symfony toolbar by default
        var symfonyToolbarKey = 'symfony/profiler/toolbar/displayState';
        if(!window.localStorage.getItem(symfonyToolbarKey)) {
            window.localStorage.setItem(symfonyToolbarKey, 'none');
        }
    </script>

    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 101, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 101), 101, $this->source);
        echo "></script>
    <script src=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_js_routing_js", ["callback" => "fos.Router.setData"]);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 102, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 102), 102, $this->source);
        echo "></script>
</head>

<body class=\"pimcore_version_10\" data-app-env=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "environment", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "\">

<div id=\"pimcore_loading\">
    <div class=\"spinner\">
        <div class=\"bounce1\"></div>
        <div class=\"bounce2\"></div>
        <div class=\"bounce3\"></div>
    </div>
</div>
";
        // line 114
        $context["runtimePerspective"] = twig_get_attribute($this->env, $this->source, (isset($context["perspectiveConfig"]) || array_key_exists("perspectiveConfig", $context) ? $context["perspectiveConfig"] : (function () { throw new RuntimeError('Variable "perspectiveConfig" does not exist.', 114, $this->source); })()), "getRuntimePerspective", [0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })())], "method", false, false, true, 114);
        // line 115
        echo "
<div id=\"pimcore_sidebar\">
    <div id=\"pimcore_navigation\" style=\"display:none;\">
        <ul>
            ";
        // line 119
        $context["navigations"] = ["file" => ["label" => "file", "icon" => "file"], "extras" => ["label" => "tools", "icon" => "build"], "marketing" => ["label" => "marketing", "icon" => "bar_chart"], "settings" => ["label" => "settings", "icon" => "settings"], "ecommerce" => ["label" => "bundle_ecommerce_mainmenu", "icon" => "shopping_cart", "extraAttr" => "style=\"display: none;\""], "search" => ["label" => "search", "icon" => "search"]];
        // line 127
        echo "
            ";
        // line 128
        $context["extraAttr"] = ["ecommerce" => "style=\"display: none;\""];
        // line 129
        echo "
            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigations"]) || array_key_exists("navigations", $context) ? $context["navigations"] : (function () { throw new RuntimeError('Variable "navigations" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["navKey"] => $context["navData"]) {
            // line 131
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 131, $this->source); })()), "inPerspective", [0 => (isset($context["runtimePerspective"]) || array_key_exists("runtimePerspective", $context) ? $context["runtimePerspective"] : (function () { throw new RuntimeError('Variable "runtimePerspective" does not exist.', 131, $this->source); })()), 1 => $context["navKey"]], "method", false, false, true, 131)) {
                // line 132
                echo "                    <li id=\"pimcore_menu_";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["navKey"], 132, $this->source), "html", null, true);
                echo "\" data-menu-tooltip=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["navData"], "label", [], "array", false, false, true, 132), 132, $this->source), [], "admin"), "html", null, true);
                echo "\" class=\"pimcore_menu_item pimcore_menu_needs_children\" ";
                (((twig_get_attribute($this->env, $this->source, $context["navData"], "extraAttr", [], "array", true, true, true, 132) &&  !(null === twig_get_attribute($this->env, $this->source, $context["navData"], "extraAttr", [], "array", false, false, true, 132)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navData"], "extraAttr", [], "array", false, false, true, 132), "html", null, true))) : (print ("")));
                echo ">
                        <img src=\"/bundles/pimcoreadmin/img/material-icons/outline-";
                // line 133
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["navData"], "icon", [], "array", false, false, true, 133), 133, $this->source), "html", null, true);
                echo "-24px.svg\">
                    </li>
                ";
            }
            // line 136
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['navKey'], $context['navData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "            <li id=\"pimcore_menu_maintenance\" data-menu-tooltip=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("deactivate_maintenance", [], "admin"), "html", null, true);
        echo "\" class=\"pimcore_menu_item \" style=\"display:none;\"></li>
        </ul>
    </div>

    <div id=\"pimcore_status\"></div>

    <div id=\"pimcore_notification\" data-menu-tooltip=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("notifications", [], "admin"), "html", null, true);
        echo "\" class=\"pimcore_icon_comments\">
        <img src=\"/bundles/pimcoreadmin/img/material-icons/outline-sms-24px.svg\">
        <span id=\"notification_value\" style=\"display:none;\"></span>
    </div>

    <div id=\"pimcore_avatar\" style=\"display:none;\">
        <img src=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_user_getimage");
        echo "\" data-menu-tooltip=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 149, $this->source); })()), "name", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("my_profile", [], "admin"), "html", null, true);
        echo "\"/>
    </div>

    <form id=\"pimcore_logout_form\" method=\"post\" action=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_logout");
        echo "\">
        <input type=\"hidden\" name=\"csrfToken\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csrf"]) || array_key_exists("pimcore_csrf", $context) ? $context["pimcore_csrf"] : (function () { throw new RuntimeError('Variable "pimcore_csrf" does not exist.', 153, $this->source); })()), "getCsrfToken", [], "method", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "\">

        <a id=\"pimcore_logout\" data-menu-tooltip=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("logout", [], "admin"), "html", null, true);
        echo "\" href=\"#\" style=\"display: none\">
            <img src=\"/bundles/pimcoreadmin/img/material-icons/outline-logout-24px.svg\">
        </a>
    </form>
    <div id=\"pimcore_signet\" data-menu-tooltip=\"Pimcore Platform (";
        // line 159
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 159, $this->source); })()), "version", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
        echo "|";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 159, $this->source); })()), "build", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
        echo ")\" style=\"text-indent: -10000px\">
        BE RESPECTFUL AND HONOR OUR WORK FOR FREE & OPEN SOURCE SOFTWARE BY NOT REMOVING OUR LOGO.
        WE OFFER YOU THE POSSIBILITY TO ADDITIONALLY ADD YOUR OWN LOGO IN PIMCORE'S SYSTEM SETTINGS. THANK YOU!
    </div>
</div>

<div id=\"pimcore_tooltip\" style=\"display: none;\"></div>
<div id=\"pimcore_quicksearch\"></div>

";
        // line 169
        echo "
";
        // line 170
        $context["styles"] = [0 => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_misc_admincss"), 1 => "/bundles/pimcoreadmin/css/icons.css", 2 => "/bundles/pimcoreadmin/js/lib/leaflet/leaflet.css", 3 => "/bundles/pimcoreadmin/js/lib/leaflet.draw/leaflet.draw.css", 4 => "/bundles/pimcoreadmin/extjs/css/PimcoreApp-all_1.css", 5 => "/bundles/pimcoreadmin/extjs/css/PimcoreApp-all_2.css", 6 => "/bundles/pimcoreadmin/css/admin.css"];
        // line 180
        echo "
<!-- stylesheets -->
<style type=\"text/css\">
    ";
        // line 188
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 188, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 189
            echo "        @import url(\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["style"], 189, $this->source), "html", null, true);
            echo "?_dc=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 189, $this->source); })()), "build", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "\");
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "</style>

";
        // line 194
        echo "
";
        // line 195
        $context["debugSuffix"] = "";
        // line 196
        if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 196, $this->source); })()), "disableMinifyJs", [], "any", false, false, true, 196)) {
            // line 197
            echo "    ";
            $context["debugSuffix"] = "-debug";
        }
        // line 199
        echo "
";
        // line 201
        echo "
";
        // line 202
        $context["scriptLibs"] = [0 => "lib/class.js", 1 => (("../extjs/js/ext-all" . $this->sandbox->ensureToStringAllowed(        // line 204
(isset($context["debugSuffix"]) || array_key_exists("debugSuffix", $context) ? $context["debugSuffix"] : (function () { throw new RuntimeError('Variable "debugSuffix" does not exist.', 204, $this->source); })()), 204, $this->source)) . ".js"), 2 => "lib/ext-plugins/portlet/PortalDropZone.js", 3 => "lib/ext-plugins/portlet/Portlet.js", 4 => "lib/ext-plugins/portlet/PortalColumn.js", 5 => "lib/ext-plugins/portlet/PortalPanel.js", 6 => "lib/ckeditor/ckeditor.js", 7 => "lib/leaflet/leaflet.js", 8 => "lib/leaflet.draw/leaflet.draw.js", 9 => "lib/vrview/build/vrview.min.js", 10 => "lib/ace/src-min-noconflict/ace.js", 11 => "lib/ace/src-min-noconflict/ext-modelist.js"];
        // line 216
        if ($this->env->getFunction('pimcore_file_exists')->getCallable()((((twig_constant("PIMCORE_WEB_ROOT") . "/bundles/pimcoreadmin/js/lib/ext-locale/locale-") . (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 216, $this->source); })())) . ".js"))) {
            // line 217
            echo "    ";
            $context["scriptLibs"] = twig_array_merge($this->sandbox->ensureToStringAllowed((isset($context["scriptLibs"]) || array_key_exists("scriptLibs", $context) ? $context["scriptLibs"] : (function () { throw new RuntimeError('Variable "scriptLibs" does not exist.', 217, $this->source); })()), 217, $this->source), [0 => (("lib/ext-locale/locale-" . $this->sandbox->ensureToStringAllowed((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 217, $this->source); })()), 217, $this->source)) . ".js")]);
        }
        // line 219
        echo "
";
        // line 221
        echo "
";
        // line 222
        $context["scripts"] = [0 => "pimcore/functions.js", 1 => "pimcore/common.js", 2 => "pimcore/elementservice.js", 3 => "pimcore/helpers.js", 4 => "pimcore/error.js", 5 => "pimcore/events.js", 6 => "pimcore/treenodelocator.js", 7 => "pimcore/helpers/generic-grid.js", 8 => "pimcore/helpers/quantityValue.js", 9 => "pimcore/overrides.js", 10 => "pimcore/perspective.js", 11 => "pimcore/user.js", 12 => "pimcore/tool/paralleljobs.js", 13 => "pimcore/tool/genericiframewindow.js", 14 => "pimcore/settings/user/panels/abstract.js", 15 => "pimcore/settings/user/panel.js", 16 => "pimcore/settings/user/usertab.js", 17 => "pimcore/settings/user/editorSettings.js", 18 => "pimcore/settings/user/websiteTranslationSettings.js", 19 => "pimcore/settings/user/role/panel.js", 20 => "pimcore/settings/user/role/tab.js", 21 => "pimcore/settings/user/user/objectrelations.js", 22 => "pimcore/settings/user/user/settings.js", 23 => "pimcore/settings/user/user/keyBindings.js", 24 => "pimcore/settings/user/workspaces.js", 25 => "pimcore/settings/user/workspace/asset.js", 26 => "pimcore/settings/user/workspace/document.js", 27 => "pimcore/settings/user/workspace/object.js", 28 => "pimcore/settings/user/workspace/customlayouts.js", 29 => "pimcore/settings/user/workspace/language.js", 30 => "pimcore/settings/user/workspace/special.js", 31 => "pimcore/settings/user/role/settings.js", 32 => "pimcore/settings/profile/panel.js", 33 => "pimcore/settings/profile/twoFactorSettings.js", 34 => "pimcore/settings/thumbnail/item.js", 35 => "pimcore/settings/thumbnail/panel.js", 36 => "pimcore/settings/videothumbnail/item.js", 37 => "pimcore/settings/videothumbnail/panel.js", 38 => "pimcore/settings/translation.js", 39 => "pimcore/settings/translationEditor.js", 40 => "pimcore/settings/translation/translationmerger.js", 41 => "pimcore/settings/translation/xliff.js", 42 => "pimcore/settings/translation/word.js", 43 => "pimcore/settings/translation/translationSettingsTab.js", 44 => "pimcore/settings/metadata/predefined.js", 45 => "pimcore/settings/properties/predefined.js", 46 => "pimcore/settings/docTypes.js", 47 => "pimcore/settings/system.js", 48 => "pimcore/settings/web2print.js", 49 => "pimcore/settings/website.js", 50 => "pimcore/settings/staticroutes.js", 51 => "pimcore/settings/redirects.js", 52 => "pimcore/settings/glossary.js", 53 => "pimcore/settings/recyclebin.js", 54 => "pimcore/settings/fileexplorer/file.js", 55 => "pimcore/settings/fileexplorer/explorer.js", 56 => "pimcore/settings/maintenance.js", 57 => "pimcore/settings/robotstxt.js", 58 => "pimcore/settings/httpErrorLog.js", 59 => "pimcore/settings/email/log.js", 60 => "pimcore/settings/email/blacklist.js", 61 => "pimcore/settings/targeting/condition/abstract.js", 62 => "pimcore/settings/targeting/conditions.js", 63 => "pimcore/settings/targeting/action/abstract.js", 64 => "pimcore/settings/targeting/actions.js", 65 => "pimcore/settings/targeting/rules/panel.js", 66 => "pimcore/settings/targeting/rules/item.js", 67 => "pimcore/settings/targeting/targetGroups/panel.js", 68 => "pimcore/settings/targeting/targetGroups/item.js", 69 => "pimcore/settings/targeting_toolbar.js", 70 => "pimcore/settings/gdpr/gdprPanel.js", 71 => "pimcore/settings/gdpr/dataproviders/assets.js", 72 => "pimcore/settings/gdpr/dataproviders/dataObjects.js", 73 => "pimcore/settings/gdpr/dataproviders/sentMail.js", 74 => "pimcore/settings/gdpr/dataproviders/pimcoreUsers.js", 75 => "pimcore/element/abstract.js", 76 => "pimcore/element/abstractPreview.js", 77 => "pimcore/element/selector/selector.js", 78 => "pimcore/element/selector/abstract.js", 79 => "pimcore/element/selector/document.js", 80 => "pimcore/element/selector/asset.js", 81 => "pimcore/element/properties.js", 82 => "pimcore/element/scheduler.js", 83 => "pimcore/element/dependencies.js", 84 => "pimcore/element/metainfo.js", 85 => "pimcore/element/history.js", 86 => "pimcore/element/notes.js", 87 => "pimcore/element/note_details.js", 88 => "pimcore/element/workflows.js", 89 => "pimcore/element/tag/imagecropper.js", 90 => "pimcore/element/tag/imagehotspotmarkereditor.js", 91 => "pimcore/element/replace_assignments.js", 92 => "pimcore/element/permissionchecker.js", 93 => "pimcore/element/gridexport/abstract.js", 94 => "pimcore/element/helpers/gridColumnConfig.js", 95 => "pimcore/element/helpers/gridConfigDialog.js", 96 => "pimcore/element/helpers/gridCellEditor.js", 97 => "pimcore/element/helpers/gridTabAbstract.js", 98 => "pimcore/object/helpers/grid.js", 99 => "pimcore/object/helpers/gridConfigDialog.js", 100 => "pimcore/object/helpers/classTree.js", 101 => "pimcore/object/helpers/gridTabAbstract.js", 102 => "pimcore/object/helpers/metadataMultiselectEditor.js", 103 => "pimcore/object/helpers/customLayoutEditor.js", 104 => "pimcore/object/helpers/optionEditor.js", 105 => "pimcore/object/helpers/imageGalleryDropZone.js", 106 => "pimcore/object/helpers/imageGalleryPanel.js", 107 => "pimcore/element/selector/object.js", 108 => "pimcore/element/tag/configuration.js", 109 => "pimcore/element/tag/assignment.js", 110 => "pimcore/element/tag/tree.js", 111 => "pimcore/asset/helpers/metadataTree.js", 112 => "pimcore/asset/helpers/gridConfigDialog.js", 113 => "pimcore/asset/helpers/gridTabAbstract.js", 114 => "pimcore/asset/helpers/grid.js", 115 => "pimcore/document/properties.js", 116 => "pimcore/document/document.js", 117 => "pimcore/document/page_snippet.js", 118 => "pimcore/document/edit.js", 119 => "pimcore/document/versions.js", 120 => "pimcore/document/settings_abstract.js", 121 => "pimcore/document/pages/settings.js", 122 => "pimcore/document/pages/preview.js", 123 => "pimcore/document/snippets/settings.js", 124 => "pimcore/document/emails/settings.js", 125 => "pimcore/document/newsletters/settings.js", 126 => "pimcore/document/newsletters/sendingPanel.js", 127 => "pimcore/document/newsletters/plaintextPanel.js", 128 => "pimcore/document/newsletters/addressSourceAdapters/default.js", 129 => "pimcore/document/newsletters/addressSourceAdapters/csvList.js", 130 => "pimcore/document/newsletters/addressSourceAdapters/report.js", 131 => "pimcore/document/link.js", 132 => "pimcore/document/hardlink.js", 133 => "pimcore/document/folder.js", 134 => "pimcore/document/tree.js", 135 => "pimcore/document/snippet.js", 136 => "pimcore/document/email.js", 137 => "pimcore/document/newsletter.js", 138 => "pimcore/document/page.js", 139 => "pimcore/document/printpages/pdf_preview.js", 140 => "pimcore/document/printabstract.js", 141 => "pimcore/document/printpage.js", 142 => "pimcore/document/printcontainer.js", 143 => "pimcore/document/seopanel.js", 144 => "pimcore/document/document_language_overview.js", 145 => "pimcore/document/customviews/tree.js", 146 => "pimcore/asset/metadata/data/data.js", 147 => "pimcore/asset/metadata/data/input.js", 148 => "pimcore/asset/metadata/data/textarea.js", 149 => "pimcore/asset/metadata/data/asset.js", 150 => "pimcore/asset/metadata/data/document.js", 151 => "pimcore/asset/metadata/data/object.js", 152 => "pimcore/asset/metadata/data/date.js", 153 => "pimcore/asset/metadata/data/checkbox.js", 154 => "pimcore/asset/metadata/data/select.js", 155 => "pimcore/asset/metadata/tags/abstract.js", 156 => "pimcore/asset/metadata/tags/checkbox.js", 157 => "pimcore/asset/metadata/tags/date.js", 158 => "pimcore/asset/metadata/tags/input.js", 159 => "pimcore/asset/metadata/tags/manyToOneRelation.js", 160 => "pimcore/asset/metadata/tags/asset.js", 161 => "pimcore/asset/metadata/tags/document.js", 162 => "pimcore/asset/metadata/tags/object.js", 163 => "pimcore/asset/metadata/tags/select.js", 164 => "pimcore/asset/metadata/tags/textarea.js", 165 => "pimcore/asset/asset.js", 166 => "pimcore/asset/unknown.js", 167 => "pimcore/asset/embedded_meta_data.js", 168 => "pimcore/asset/image.js", 169 => "pimcore/asset/document.js", 170 => "pimcore/asset/archive.js", 171 => "pimcore/asset/video.js", 172 => "pimcore/asset/audio.js", 173 => "pimcore/asset/text.js", 174 => "pimcore/asset/folder.js", 175 => "pimcore/asset/listfolder.js", 176 => "pimcore/asset/versions.js", 177 => "pimcore/asset/metadata/dataProvider.js", 178 => "pimcore/asset/metadata/grid.js", 179 => "pimcore/asset/metadata/editor.js", 180 => "pimcore/asset/tree.js", 181 => "pimcore/asset/customviews/tree.js", 182 => "pimcore/asset/gridexport/csv.js", 183 => "pimcore/asset/gridexport/xlsx.js", 184 => "pimcore/object/helpers/edit.js", 185 => "pimcore/object/helpers/layout.js", 186 => "pimcore/object/classes/class.js", 187 => "pimcore/object/class.js", 188 => "pimcore/object/bulk-base.js", 189 => "pimcore/object/bulk-export.js", 190 => "pimcore/object/bulk-import.js", 191 => "pimcore/object/classes/data/data.js", 192 => "pimcore/object/classes/data/block.js", 193 => "pimcore/object/classes/data/classificationstore.js", 194 => "pimcore/object/classes/data/rgbaColor.js", 195 => "pimcore/object/classes/data/date.js", 196 => "pimcore/object/classes/data/datetime.js", 197 => "pimcore/object/classes/data/encryptedField.js", 198 => "pimcore/object/classes/data/time.js", 199 => "pimcore/object/classes/data/manyToOneRelation.js", 200 => "pimcore/object/classes/data/image.js", 201 => "pimcore/object/classes/data/externalImage.js", 202 => "pimcore/object/classes/data/hotspotimage.js", 203 => "pimcore/object/classes/data/imagegallery.js", 204 => "pimcore/object/classes/data/video.js", 205 => "pimcore/object/classes/data/input.js", 206 => "pimcore/object/classes/data/numeric.js", 207 => "pimcore/object/classes/data/manyToManyObjectRelation.js", 208 => "pimcore/object/classes/data/advancedManyToManyRelation.js", 209 => "pimcore/object/classes/data/advancedManyToManyObjectRelation.js", 210 => "pimcore/object/classes/data/reverseObjectRelation.js", 211 => "pimcore/object/classes/data/booleanSelect.js", 212 => "pimcore/object/classes/data/select.js", 213 => "pimcore/object/classes/data/urlSlug.js", 214 => "pimcore/object/classes/data/user.js", 215 => "pimcore/object/classes/data/textarea.js", 216 => "pimcore/object/classes/data/wysiwyg.js", 217 => "pimcore/object/classes/data/checkbox.js", 218 => "pimcore/object/classes/data/consent.js", 219 => "pimcore/object/classes/data/slider.js", 220 => "pimcore/object/classes/data/manyToManyRelation.js", 221 => "pimcore/object/classes/data/table.js", 222 => "pimcore/object/classes/data/structuredTable.js", 223 => "pimcore/object/classes/data/country.js", 224 => "pimcore/object/classes/data/geo/abstract.js", 225 => "pimcore/object/classes/data/geopoint.js", 226 => "pimcore/object/classes/data/geobounds.js", 227 => "pimcore/object/classes/data/geopolygon.js", 228 => "pimcore/object/classes/data/geopolyline.js", 229 => "pimcore/object/classes/data/language.js", 230 => "pimcore/object/classes/data/password.js", 231 => "pimcore/object/classes/data/multiselect.js", 232 => "pimcore/object/classes/data/link.js", 233 => "pimcore/object/classes/data/fieldcollections.js", 234 => "pimcore/object/classes/data/objectbricks.js", 235 => "pimcore/object/classes/data/localizedfields.js", 236 => "pimcore/object/classes/data/countrymultiselect.js", 237 => "pimcore/object/classes/data/languagemultiselect.js", 238 => "pimcore/object/classes/data/firstname.js", 239 => "pimcore/object/classes/data/lastname.js", 240 => "pimcore/object/classes/data/email.js", 241 => "pimcore/object/classes/data/gender.js", 242 => "pimcore/object/classes/data/newsletterActive.js", 243 => "pimcore/object/classes/data/newsletterConfirmed.js", 244 => "pimcore/object/classes/data/targetGroup.js", 245 => "pimcore/object/classes/data/targetGroupMultiselect.js", 246 => "pimcore/object/classes/data/quantityValue.js", 247 => "pimcore/object/classes/data/inputQuantityValue.js", 248 => "pimcore/object/classes/data/calculatedValue.js", 249 => "pimcore/object/classes/layout/layout.js", 250 => "pimcore/object/classes/layout/accordion.js", 251 => "pimcore/object/classes/layout/fieldset.js", 252 => "pimcore/object/classes/layout/fieldcontainer.js", 253 => "pimcore/object/classes/layout/panel.js", 254 => "pimcore/object/classes/layout/region.js", 255 => "pimcore/object/classes/layout/tabpanel.js", 256 => "pimcore/object/classes/layout/button.js", 257 => "pimcore/object/classes/layout/iframe.js", 258 => "pimcore/object/fieldlookup/filterdialog.js", 259 => "pimcore/object/fieldlookup/helper.js", 260 => "pimcore/object/classes/layout/text.js", 261 => "pimcore/object/fieldcollection.js", 262 => "pimcore/object/fieldcollections/field.js", 263 => "pimcore/object/gridcolumn/Abstract.js", 264 => "pimcore/object/gridcolumn/operator/IsEqual.js", 265 => "pimcore/object/gridcolumn/operator/Text.js", 266 => "pimcore/object/gridcolumn/operator/Anonymizer.js", 267 => "pimcore/object/gridcolumn/operator/AnyGetter.js", 268 => "pimcore/object/gridcolumn/operator/AssetMetadataGetter.js", 269 => "pimcore/object/gridcolumn/operator/Arithmetic.js", 270 => "pimcore/object/gridcolumn/operator/Boolean.js", 271 => "pimcore/object/gridcolumn/operator/BooleanFormatter.js", 272 => "pimcore/object/gridcolumn/operator/CaseConverter.js", 273 => "pimcore/object/gridcolumn/operator/CharCounter.js", 274 => "pimcore/object/gridcolumn/operator/Concatenator.js", 275 => "pimcore/object/gridcolumn/operator/DateFormatter.js", 276 => "pimcore/object/gridcolumn/operator/ElementCounter.js", 277 => "pimcore/object/gridcolumn/operator/Iterator.js", 278 => "pimcore/object/gridcolumn/operator/JSON.js", 279 => "pimcore/object/gridcolumn/operator/LocaleSwitcher.js", 280 => "pimcore/object/gridcolumn/operator/Merge.js", 281 => "pimcore/object/gridcolumn/operator/ObjectFieldGetter.js", 282 => "pimcore/object/gridcolumn/operator/PHP.js", 283 => "pimcore/object/gridcolumn/operator/PHPCode.js", 284 => "pimcore/object/gridcolumn/operator/Base64.js", 285 => "pimcore/object/gridcolumn/operator/TranslateValue.js", 286 => "pimcore/object/gridcolumn/operator/PropertyGetter.js", 287 => "pimcore/object/gridcolumn/operator/RequiredBy.js", 288 => "pimcore/object/gridcolumn/operator/StringContains.js", 289 => "pimcore/object/gridcolumn/operator/StringReplace.js", 290 => "pimcore/object/gridcolumn/operator/Substring.js", 291 => "pimcore/object/gridcolumn/operator/LFExpander.js", 292 => "pimcore/object/gridcolumn/operator/Trimmer.js", 293 => "pimcore/object/gridcolumn/operator/Alias.js", 294 => "pimcore/object/gridcolumn/operator/WorkflowState.js", 295 => "pimcore/object/gridcolumn/value/DefaultValue.js", 296 => "pimcore/object/gridcolumn/operator/GeopointRenderer.js", 297 => "pimcore/object/gridcolumn/operator/ImageRenderer.js", 298 => "pimcore/object/gridcolumn/operator/HotspotimageRenderer.js", 299 => "pimcore/object/importcolumn/Abstract.js", 300 => "pimcore/object/importcolumn/operator/Base64.js", 301 => "pimcore/object/importcolumn/operator/Ignore.js", 302 => "pimcore/object/importcolumn/operator/Iterator.js", 303 => "pimcore/object/importcolumn/operator/LocaleSwitcher.js", 304 => "pimcore/object/importcolumn/operator/ObjectBrickSetter.js", 305 => "pimcore/object/importcolumn/operator/PHPCode.js", 306 => "pimcore/object/importcolumn/operator/Published.js", 307 => "pimcore/object/importcolumn/operator/Splitter.js", 308 => "pimcore/object/importcolumn/operator/Unserialize.js", 309 => "pimcore/object/importcolumn/value/DefaultValue.js", 310 => "pimcore/object/objectbrick.js", 311 => "pimcore/object/objectbricks/field.js", 312 => "pimcore/object/tags/abstract.js", 313 => "pimcore/object/tags/abstractRelations.js", 314 => "pimcore/object/tags/block.js", 315 => "pimcore/object/tags/rgbaColor.js", 316 => "pimcore/object/tags/date.js", 317 => "pimcore/object/tags/datetime.js", 318 => "pimcore/object/tags/time.js", 319 => "pimcore/object/tags/manyToOneRelation.js", 320 => "pimcore/object/tags/image.js", 321 => "pimcore/object/tags/encryptedField.js", 322 => "pimcore/object/tags/externalImage.js", 323 => "pimcore/object/tags/hotspotimage.js", 324 => "pimcore/object/tags/imagegallery.js", 325 => "pimcore/object/tags/video.js", 326 => "pimcore/object/tags/input.js", 327 => "pimcore/object/tags/classificationstore.js", 328 => "pimcore/object/tags/numeric.js", 329 => "pimcore/object/tags/manyToManyObjectRelation.js", 330 => "pimcore/object/tags/advancedManyToManyRelation.js", 331 => "pimcore/object/gridcolumn/operator/FieldCollectionGetter.js", 332 => "pimcore/object/tags/advancedManyToManyObjectRelation.js", 333 => "pimcore/object/tags/reverseObjectRelation.js", 334 => "pimcore/object/tags/urlSlug.js", 335 => "pimcore/object/tags/booleanSelect.js", 336 => "pimcore/object/tags/select.js", 337 => "pimcore/object/tags/user.js", 338 => "pimcore/object/tags/checkbox.js", 339 => "pimcore/object/tags/consent.js", 340 => "pimcore/object/tags/textarea.js", 341 => "pimcore/object/tags/wysiwyg.js", 342 => "pimcore/object/tags/slider.js", 343 => "pimcore/object/tags/manyToManyRelation.js", 344 => "pimcore/object/tags/table.js", 345 => "pimcore/object/tags/structuredTable.js", 346 => "pimcore/object/tags/country.js", 347 => "pimcore/object/tags/geo/abstract.js", 348 => "pimcore/object/tags/geobounds.js", 349 => "pimcore/object/tags/geopoint.js", 350 => "pimcore/object/tags/geopolygon.js", 351 => "pimcore/object/tags/geopolyline.js", 352 => "pimcore/object/tags/language.js", 353 => "pimcore/object/tags/password.js", 354 => "pimcore/object/tags/multiselect.js", 355 => "pimcore/object/tags/link.js", 356 => "pimcore/object/tags/fieldcollections.js", 357 => "pimcore/object/tags/localizedfields.js", 358 => "pimcore/object/tags/countrymultiselect.js", 359 => "pimcore/object/tags/languagemultiselect.js", 360 => "pimcore/object/tags/objectbricks.js", 361 => "pimcore/object/tags/firstname.js", 362 => "pimcore/object/tags/lastname.js", 363 => "pimcore/object/tags/email.js", 364 => "pimcore/object/tags/gender.js", 365 => "pimcore/object/tags/newsletterActive.js", 366 => "pimcore/object/tags/newsletterConfirmed.js", 367 => "pimcore/object/tags/targetGroup.js", 368 => "pimcore/object/tags/targetGroupMultiselect.js", 369 => "pimcore/object/tags/quantityValue.js", 370 => "pimcore/object/tags/inputQuantityValue.js", 371 => "pimcore/object/tags/calculatedValue.js", 372 => "pimcore/object/preview.js", 373 => "pimcore/object/versions.js", 374 => "pimcore/object/variantsTab.js", 375 => "pimcore/object/folder/search.js", 376 => "pimcore/object/edit.js", 377 => "pimcore/object/abstract.js", 378 => "pimcore/object/object.js", 379 => "pimcore/object/folder.js", 380 => "pimcore/object/variant.js", 381 => "pimcore/object/tree.js", 382 => "pimcore/object/layout/iframe.js", 383 => "pimcore/object/customviews/tree.js", 384 => "pimcore/object/quantityvalue/unitsettings.js", 385 => "pimcore/object/gridexport/csv.js", 386 => "pimcore/object/gridexport/xlsx.js", 387 => "pimcore/plugin/broker.js", 388 => "pimcore/plugin/plugin.js", 389 => "pimcore/report/panel.js", 390 => "pimcore/report/broker.js", 391 => "pimcore/report/abstract.js", 392 => "pimcore/report/settings.js", 393 => "pimcore/report/analytics/settings.js", 394 => "pimcore/report/analytics/elementoverview.js", 395 => "pimcore/report/analytics/elementexplorer.js", 396 => "pimcore/report/webmastertools/settings.js", 397 => "pimcore/report/tagmanager/settings.js", 398 => "pimcore/report/custom/item.js", 399 => "pimcore/report/custom/panel.js", 400 => "pimcore/report/custom/settings.js", 401 => "pimcore/report/custom/report.js", 402 => "pimcore/report/custom/definitions/sql.js", 403 => "pimcore/report/custom/definitions/analytics.js", 404 => "pimcore/report/custom/toolbarenricher.js", 405 => "pimcore/extensionmanager/admin.js", 406 => "pimcore/log/admin.js", 407 => "pimcore/log/detailwindow.js", 408 => "pimcore/layout/portal.js", 409 => "pimcore/layout/portlets/abstract.js", 410 => "pimcore/layout/portlets/modifiedDocuments.js", 411 => "pimcore/layout/portlets/modifiedObjects.js", 412 => "pimcore/layout/portlets/modifiedAssets.js", 413 => "pimcore/layout/portlets/modificationStatistic.js", 414 => "pimcore/layout/portlets/analytics.js", 415 => "pimcore/layout/portlets/customreports.js", 416 => "pimcore/layout/toolbar.js", 417 => "pimcore/layout/treepanelmanager.js", 418 => "pimcore/document/seemode.js", 419 => "pimcore/object/classificationstore/groupsPanel.js", 420 => "pimcore/object/classificationstore/propertiesPanel.js", 421 => "pimcore/object/classificationstore/collectionsPanel.js", 422 => "pimcore/object/classificationstore/keyDefinitionWindow.js", 423 => "pimcore/object/classificationstore/keySelectionWindow.js", 424 => "pimcore/object/classificationstore/relationSelectionWindow.js", 425 => "pimcore/object/classificationstore/storeConfiguration.js", 426 => "pimcore/object/classificationstore/storeTree.js", 427 => "pimcore/object/classificationstore/columnConfigDialog.js", 428 => "pimcore/workflow/transitionPanel.js", 429 => "pimcore/workflow/transitions.js", 430 => "pimcore/workflow/transitions.js", 431 => "pimcore/colorpicker-overrides.js", 432 => "pimcore/notification/helper.js", 433 => "pimcore/notification/panel.js", 434 => "pimcore/notification/modal.js"];
        // line 697
        echo "
<!-- some javascript -->
";
        // line 700
        echo "<script ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 700, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 700), 700, $this->source);
        echo ">
    pimcore.settings = ";
        // line 701
        echo json_encode($this->sandbox->ensureToStringAllowed((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 701, $this->source); })()), 701, $this->source), twig_constant("JSON_PRETTY_PRINT"));
        echo ";
</script>

<script src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_misc_jsontranslationssystem", ["language" => (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 704, $this->source); })()), "_dc" => twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 704, $this->source); })()), "build", [], "any", false, false, true, 704)]), "html", null, true);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 704, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 704), 704, $this->source);
        echo "></script>
<script src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_user_getcurrentuser", ["_dc" => twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 705, $this->source); })()), "build", [], "any", false, false, true, 705)]), "html", null, true);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 705, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 705), 705, $this->source);
        echo "></script>
<script src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pimcore_admin_misc_availablelanguages", ["_dc" => twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 706, $this->source); })()), "build", [], "any", false, false, true, 706)]), "html", null, true);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 706, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 706), 706, $this->source);
        echo "></script>

<!-- library scripts -->
";
        // line 709
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scriptLibs"]) || array_key_exists("scriptLibs", $context) ? $context["scriptLibs"] : (function () { throw new RuntimeError('Variable "scriptLibs" does not exist.', 709, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["scriptUrl"]) {
            // line 710
            echo "    <script src=\"/bundles/pimcoreadmin/js/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["scriptUrl"], 710, $this->source), "html", null, true);
            echo "?_dc=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 710, $this->source); })()), "build", [], "any", false, false, true, 710), 710, $this->source), "html", null, true);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 710, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 710), 710, $this->source);
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scriptUrl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 712
        echo "
<!-- internal scripts -->
";
        // line 714
        if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 714, $this->source); })()), "disableMinifyJs", [], "any", false, false, true, 714)) {
            // line 715
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) || array_key_exists("scripts", $context) ? $context["scripts"] : (function () { throw new RuntimeError('Variable "scripts" does not exist.', 715, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["scriptUrl"]) {
                // line 716
                echo "        <script src=\"/bundles/pimcoreadmin/js/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["scriptUrl"], 716, $this->source), "html", null, true);
                echo "?_dc=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 716, $this->source); })()), "build", [], "any", false, false, true, 716), 716, $this->source), "html", null, true);
                echo "\"></script>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scriptUrl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 719
            echo "    ";
            echo $this->extensions['Pimcore\Twig\Extension\AdminExtension']->minimize($this->sandbox->ensureToStringAllowed((isset($context["scripts"]) || array_key_exists("scripts", $context) ? $context["scripts"] : (function () { throw new RuntimeError('Variable "scripts" does not exist.', 719, $this->source); })()), 719, $this->source));
            echo "
";
        }
        // line 721
        echo "
";
        // line 723
        echo "
";
        // line 727
        echo "
";
        // line 728
        $context["pluginDcValue"] = twig_date_format_filter($this->env, "now", "U");
        // line 729
        if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 729, $this->source); })()), "disableMinifyJs", [], "any", false, false, true, 729)) {
            // line 730
            echo "    ";
            $context["pluginDcValue"] = 1;
        }
        // line 732
        echo "
<!-- bundle scripts -->
";
        // line 734
        if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 734, $this->source); })()), "disableMinifyJs", [], "any", false, false, true, 734)) {
            // line 735
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginJsPaths"]) || array_key_exists("pluginJsPaths", $context) ? $context["pluginJsPaths"] : (function () { throw new RuntimeError('Variable "pluginJsPaths" does not exist.', 735, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pluginJsPath"]) {
                // line 736
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["pluginJsPath"], 736, $this->source), "html", null, true);
                echo "?_dc=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["pluginDcValue"]) || array_key_exists("pluginDcValue", $context) ? $context["pluginDcValue"] : (function () { throw new RuntimeError('Variable "pluginDcValue" does not exist.', 736, $this->source); })()), 736, $this->source), "html", null, true);
                echo "\" ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 736, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 736), 736, $this->source);
                echo "></script>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginJsPath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 739
            echo "    ";
            echo $this->extensions['Pimcore\Twig\Extension\AdminExtension']->minimize($this->sandbox->ensureToStringAllowed((isset($context["pluginJsPaths"]) || array_key_exists("pluginJsPaths", $context) ? $context["pluginJsPaths"] : (function () { throw new RuntimeError('Variable "pluginJsPaths" does not exist.', 739, $this->source); })()), 739, $this->source));
            echo "
";
        }
        // line 741
        echo "
";
        // line 742
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pluginCssPaths"]) || array_key_exists("pluginCssPaths", $context) ? $context["pluginCssPaths"] : (function () { throw new RuntimeError('Variable "pluginCssPaths" does not exist.', 742, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pluginCssPath"]) {
            // line 743
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["pluginCssPath"], 743, $this->source), "html", null, true);
            echo "?_dc=";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["pluginDcValue"]) || array_key_exists("pluginDcValue", $context) ? $context["pluginDcValue"] : (function () { throw new RuntimeError('Variable "pluginDcValue" does not exist.', 743, $this->source); })()), 743, $this->source), "html", null, true);
            echo "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginCssPath'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 745
        echo "
";
        // line 747
        echo "<script src=\"/bundles/pimcoreadmin/js/pimcore/startup.js?_dc=";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 747, $this->source); })()), "build", [], "any", false, false, true, 747), 747, $this->source), "html", null, true);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["pimcore_csp"]) || array_key_exists("pimcore_csp", $context) ? $context["pimcore_csp"] : (function () { throw new RuntimeError('Variable "pimcore_csp" does not exist.', 747, $this->source); })()), "getNonceHtmlAttribute", [], "method", false, false, true, 747), 747, $this->source);
        echo "></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreAdmin/Admin/Index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 747,  507 => 745,  496 => 743,  492 => 742,  489 => 741,  483 => 739,  469 => 736,  464 => 735,  462 => 734,  458 => 732,  454 => 730,  452 => 729,  450 => 728,  447 => 727,  444 => 723,  441 => 721,  435 => 719,  423 => 716,  418 => 715,  416 => 714,  412 => 712,  399 => 710,  395 => 709,  387 => 706,  381 => 705,  375 => 704,  369 => 701,  364 => 700,  360 => 697,  358 => 222,  355 => 221,  352 => 219,  348 => 217,  346 => 216,  344 => 204,  343 => 202,  340 => 201,  337 => 199,  333 => 197,  331 => 196,  329 => 195,  326 => 194,  322 => 191,  311 => 189,  306 => 188,  301 => 180,  299 => 170,  296 => 169,  282 => 159,  275 => 155,  270 => 153,  266 => 152,  256 => 149,  247 => 143,  237 => 137,  231 => 136,  225 => 133,  216 => 132,  213 => 131,  209 => 130,  206 => 129,  204 => 128,  201 => 127,  199 => 119,  193 => 115,  191 => 114,  179 => 105,  171 => 102,  165 => 101,  152 => 91,  147 => 89,  139 => 83,  133 => 81,  131 => 80,  127 => 79,  51 => 5,  49 => 4,  47 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set language = app.request.locale %}
{# @var  \\Pimcore\\Bundle\\AdminBundle\\Security\\User\\User #}
{% set userProxy = app.user %}
{% set user = userProxy.user %}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"robots\" content=\"noindex, nofollow\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>

    <link rel=\"icon\" type=\"image/png\" href=\"/bundles/pimcoreadmin/img/favicon/favicon-32x32.png\"/>
    <meta name=\"google\" value=\"notranslate\">

    <style type=\"text/css\">
        body {
            margin: 0;
            padding: 0;
            background: #fff;
        }

        #pimcore_loading {
            margin: 0 auto;
            width: 300px;
            padding: 300px 0 0 0;
            text-align: center;
        }

        .spinner {
            margin: 100px auto 0;
            width: 70px;
            text-align: center;
        }

        .spinner > div {
            width: 18px;
            height: 18px;
            background-color: #3d3d3d;

            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes sk-bouncedelay {
            0%, 80%, 100% {
                -webkit-transform: scale(0)
            }
            40% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes sk-bouncedelay {
            0%, 80%, 100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }

        #pimcore_panel_tabs-body {
            background-image: url({{ path('pimcore_settings_display_custom_logo') }});
            {% if config['branding']['color_admin_interface_background']|default(null) is not null %}
                background-color: {{ config['branding']['color_admin_interface_background'] }};
            {% endif %}
            background-repeat: no-repeat;
            background-position: center center;
            background-size: 500px auto;
        }
    </style>

    <title>{{ settings.hostname }} :: Pimcore</title>

    <script {{ pimcore_csp.getNonceHtmlAttribute()|raw }}>
        var pimcore = {}; // namespace

        // hide symfony toolbar by default
        var symfonyToolbarKey = 'symfony/profiler/toolbar/displayState';
        if(!window.localStorage.getItem(symfonyToolbarKey)) {
            window.localStorage.setItem(symfonyToolbarKey, 'none');
        }
    </script>

    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\" {{ pimcore_csp.getNonceHtmlAttribute()|raw }}></script>
    <script src=\"{{ path('fos_js_routing_js', {'callback' : 'fos.Router.setData'}) }}\" {{ pimcore_csp.getNonceHtmlAttribute()|raw }}></script>
</head>

<body class=\"pimcore_version_10\" data-app-env=\"{{ app.environment }}\">

<div id=\"pimcore_loading\">
    <div class=\"spinner\">
        <div class=\"bounce1\"></div>
        <div class=\"bounce2\"></div>
        <div class=\"bounce3\"></div>
    </div>
</div>
{% set runtimePerspective = perspectiveConfig.getRuntimePerspective(user) %}

<div id=\"pimcore_sidebar\">
    <div id=\"pimcore_navigation\" style=\"display:none;\">
        <ul>
            {% set navigations = {
                'file': {'label': 'file', 'icon': 'file'},
                'extras': {'label': 'tools', 'icon': 'build'},
                'marketing': {'label': 'marketing', 'icon': 'bar_chart'},
                'settings': {'label': 'settings', 'icon': 'settings'},
                'ecommerce': {'label': 'bundle_ecommerce_mainmenu', 'icon': 'shopping_cart', 'extraAttr': 'style=\"display: none;\"'},
                'search': {'label': 'search', 'icon': 'search'}
            } %}

            {% set extraAttr = {'ecommerce': 'style=\"display: none;\"'} %}

            {% for navKey,navData in navigations %}
                {% if config.inPerspective(runtimePerspective, navKey) %}
                    <li id=\"pimcore_menu_{{ navKey }}\" data-menu-tooltip=\"{{ navData[\"label\"]|trans([],'admin') }}\" class=\"pimcore_menu_item pimcore_menu_needs_children\" {{ navData[\"extraAttr\"] ?? '' }}>
                        <img src=\"/bundles/pimcoreadmin/img/material-icons/outline-{{ navData[\"icon\"] }}-24px.svg\">
                    </li>
                {% endif %}
            {% endfor %}
            <li id=\"pimcore_menu_maintenance\" data-menu-tooltip=\"{{ \"deactivate_maintenance\"|trans([], 'admin') }}\" class=\"pimcore_menu_item \" style=\"display:none;\"></li>
        </ul>
    </div>

    <div id=\"pimcore_status\"></div>

    <div id=\"pimcore_notification\" data-menu-tooltip=\"{{ \"notifications\"|trans([],'admin') }}\" class=\"pimcore_icon_comments\">
        <img src=\"/bundles/pimcoreadmin/img/material-icons/outline-sms-24px.svg\">
        <span id=\"notification_value\" style=\"display:none;\"></span>
    </div>

    <div id=\"pimcore_avatar\" style=\"display:none;\">
        <img src=\"{{ path('pimcore_admin_user_getimage') }}\" data-menu-tooltip=\"{{ user.name }} | {{ 'my_profile'|trans([],'admin') }}\"/>
    </div>

    <form id=\"pimcore_logout_form\" method=\"post\" action=\"{{ path('pimcore_admin_logout') }}\">
        <input type=\"hidden\" name=\"csrfToken\" value=\"{{ pimcore_csrf.getCsrfToken() }}\">

        <a id=\"pimcore_logout\" data-menu-tooltip=\"{{ \"logout\"|trans([],'admin') }}\" href=\"#\" style=\"display: none\">
            <img src=\"/bundles/pimcoreadmin/img/material-icons/outline-logout-24px.svg\">
        </a>
    </form>
    <div id=\"pimcore_signet\" data-menu-tooltip=\"Pimcore Platform ({{ settings.version }}|{{ settings.build }})\" style=\"text-indent: -10000px\">
        BE RESPECTFUL AND HONOR OUR WORK FOR FREE & OPEN SOURCE SOFTWARE BY NOT REMOVING OUR LOGO.
        WE OFFER YOU THE POSSIBILITY TO ADDITIONALLY ADD YOUR OWN LOGO IN PIMCORE'S SYSTEM SETTINGS. THANK YOU!
    </div>
</div>

<div id=\"pimcore_tooltip\" style=\"display: none;\"></div>
<div id=\"pimcore_quicksearch\"></div>

{# define stylesheets #}

{% set styles = [
        path('pimcore_admin_misc_admincss'),
        \"/bundles/pimcoreadmin/css/icons.css\",
        \"/bundles/pimcoreadmin/js/lib/leaflet/leaflet.css\",
        \"/bundles/pimcoreadmin/js/lib/leaflet.draw/leaflet.draw.css\",
        \"/bundles/pimcoreadmin/extjs/css/PimcoreApp-all_1.css\",
        \"/bundles/pimcoreadmin/extjs/css/PimcoreApp-all_2.css\",
        \"/bundles/pimcoreadmin/css/admin.css\"
    ]
%}

<!-- stylesheets -->
<style type=\"text/css\">
    {#
     # use @import here, because if IE9 CSS file limitations (31 files)
     # see also: http://blogs.telerik.com/blogs/posts/10-05-03/internet-explorer-css-limits.aspx
     # @import bypasses this problem in an elegant way
    #}
    {% for style in styles %}
        @import url(\"{{ style }}?_dc={{ settings.build }}\");
    {% endfor %}
</style>

{# define scripts #}

{% set debugSuffix = '' %}
{% if settings.disableMinifyJs %}
    {% set debugSuffix = \"-debug\" %}
{% endif %}

{# SCRIPT LIBRARIES #}

{% set scriptLibs = [
    \"lib/class.js\",
    \"../extjs/js/ext-all\" ~ debugSuffix ~ \".js\",
    \"lib/ext-plugins/portlet/PortalDropZone.js\",
    \"lib/ext-plugins/portlet/Portlet.js\",
    \"lib/ext-plugins/portlet/PortalColumn.js\",
    \"lib/ext-plugins/portlet/PortalPanel.js\",
    \"lib/ckeditor/ckeditor.js\",
    \"lib/leaflet/leaflet.js\",
    \"lib/leaflet.draw/leaflet.draw.js\",
    \"lib/vrview/build/vrview.min.js\",
    \"lib/ace/src-min-noconflict/ace.js\",
    \"lib/ace/src-min-noconflict/ext-modelist.js\"
] %}
{% if pimcore_file_exists(constant('PIMCORE_WEB_ROOT') ~ '/bundles/pimcoreadmin/js/lib/ext-locale/locale-' ~ language ~ '.js') %}
    {% set scriptLibs = scriptLibs|merge(['lib/ext-locale/locale-' ~ language ~ '.js']) %}
{% endif %}

{# PIMCORE SCRIPTS #}

{% set scripts = [


    \"pimcore/functions.js\",
    \"pimcore/common.js\",
    \"pimcore/elementservice.js\",
    \"pimcore/helpers.js\",
    \"pimcore/error.js\",
    \"pimcore/events.js\",

    \"pimcore/treenodelocator.js\",
    \"pimcore/helpers/generic-grid.js\",
    \"pimcore/helpers/quantityValue.js\",
    \"pimcore/overrides.js\",

    \"pimcore/perspective.js\",
    \"pimcore/user.js\",


    \"pimcore/tool/paralleljobs.js\",
    \"pimcore/tool/genericiframewindow.js\",


    \"pimcore/settings/user/panels/abstract.js\",
    \"pimcore/settings/user/panel.js\",

    \"pimcore/settings/user/usertab.js\",
    \"pimcore/settings/user/editorSettings.js\",
    \"pimcore/settings/user/websiteTranslationSettings.js\",
    \"pimcore/settings/user/role/panel.js\",
    \"pimcore/settings/user/role/tab.js\",
    \"pimcore/settings/user/user/objectrelations.js\",
    \"pimcore/settings/user/user/settings.js\",
    \"pimcore/settings/user/user/keyBindings.js\",
    \"pimcore/settings/user/workspaces.js\",
    \"pimcore/settings/user/workspace/asset.js\",
    \"pimcore/settings/user/workspace/document.js\",
    \"pimcore/settings/user/workspace/object.js\",
    \"pimcore/settings/user/workspace/customlayouts.js\",
    \"pimcore/settings/user/workspace/language.js\",
    \"pimcore/settings/user/workspace/special.js\",
    \"pimcore/settings/user/role/settings.js\",
    \"pimcore/settings/profile/panel.js\",
    \"pimcore/settings/profile/twoFactorSettings.js\",
    \"pimcore/settings/thumbnail/item.js\",
    \"pimcore/settings/thumbnail/panel.js\",
    \"pimcore/settings/videothumbnail/item.js\",
    \"pimcore/settings/videothumbnail/panel.js\",
    \"pimcore/settings/translation.js\",
    \"pimcore/settings/translationEditor.js\",
    \"pimcore/settings/translation/translationmerger.js\",
    \"pimcore/settings/translation/xliff.js\",
    \"pimcore/settings/translation/word.js\",
    \"pimcore/settings/translation/translationSettingsTab.js\",
    \"pimcore/settings/metadata/predefined.js\",
    \"pimcore/settings/properties/predefined.js\",
    \"pimcore/settings/docTypes.js\",
    \"pimcore/settings/system.js\",
    \"pimcore/settings/web2print.js\",
    \"pimcore/settings/website.js\",
    \"pimcore/settings/staticroutes.js\",
    \"pimcore/settings/redirects.js\",
    \"pimcore/settings/glossary.js\",
    \"pimcore/settings/recyclebin.js\",
    \"pimcore/settings/fileexplorer/file.js\",
    \"pimcore/settings/fileexplorer/explorer.js\",
    \"pimcore/settings/maintenance.js\",
    \"pimcore/settings/robotstxt.js\",
    \"pimcore/settings/httpErrorLog.js\",
    \"pimcore/settings/email/log.js\",
    \"pimcore/settings/email/blacklist.js\",
    \"pimcore/settings/targeting/condition/abstract.js\",
    \"pimcore/settings/targeting/conditions.js\",
    \"pimcore/settings/targeting/action/abstract.js\",
    \"pimcore/settings/targeting/actions.js\",
    \"pimcore/settings/targeting/rules/panel.js\",
    \"pimcore/settings/targeting/rules/item.js\",
    \"pimcore/settings/targeting/targetGroups/panel.js\",
    \"pimcore/settings/targeting/targetGroups/item.js\",
    \"pimcore/settings/targeting_toolbar.js\",

    \"pimcore/settings/gdpr/gdprPanel.js\",
    \"pimcore/settings/gdpr/dataproviders/assets.js\",
    \"pimcore/settings/gdpr/dataproviders/dataObjects.js\",
    \"pimcore/settings/gdpr/dataproviders/sentMail.js\",
    \"pimcore/settings/gdpr/dataproviders/pimcoreUsers.js\",


    \"pimcore/element/abstract.js\",
    \"pimcore/element/abstractPreview.js\",
    \"pimcore/element/selector/selector.js\",
    \"pimcore/element/selector/abstract.js\",
    \"pimcore/element/selector/document.js\",
    \"pimcore/element/selector/asset.js\",
    \"pimcore/element/properties.js\",
    \"pimcore/element/scheduler.js\",
    \"pimcore/element/dependencies.js\",
    \"pimcore/element/metainfo.js\",
    \"pimcore/element/history.js\",
    \"pimcore/element/notes.js\",
    \"pimcore/element/note_details.js\",
    \"pimcore/element/workflows.js\",
    \"pimcore/element/tag/imagecropper.js\",
    \"pimcore/element/tag/imagehotspotmarkereditor.js\",
    \"pimcore/element/replace_assignments.js\",
    \"pimcore/element/permissionchecker.js\",
    \"pimcore/element/gridexport/abstract.js\",
    \"pimcore/element/helpers/gridColumnConfig.js\",
    \"pimcore/element/helpers/gridConfigDialog.js\",
    \"pimcore/element/helpers/gridCellEditor.js\",
    \"pimcore/element/helpers/gridTabAbstract.js\",
    \"pimcore/object/helpers/grid.js\",
    \"pimcore/object/helpers/gridConfigDialog.js\",
    \"pimcore/object/helpers/classTree.js\",
    \"pimcore/object/helpers/gridTabAbstract.js\",
    \"pimcore/object/helpers/metadataMultiselectEditor.js\",
    \"pimcore/object/helpers/customLayoutEditor.js\",
    \"pimcore/object/helpers/optionEditor.js\",
    \"pimcore/object/helpers/imageGalleryDropZone.js\",
    \"pimcore/object/helpers/imageGalleryPanel.js\",
    \"pimcore/element/selector/object.js\",
    \"pimcore/element/tag/configuration.js\",
    \"pimcore/element/tag/assignment.js\",
    \"pimcore/element/tag/tree.js\",
    \"pimcore/asset/helpers/metadataTree.js\",
    \"pimcore/asset/helpers/gridConfigDialog.js\",
    \"pimcore/asset/helpers/gridTabAbstract.js\",
    \"pimcore/asset/helpers/grid.js\",


    \"pimcore/document/properties.js\",
    \"pimcore/document/document.js\",
    \"pimcore/document/page_snippet.js\",
    \"pimcore/document/edit.js\",
    \"pimcore/document/versions.js\",
    \"pimcore/document/settings_abstract.js\",
    \"pimcore/document/pages/settings.js\",
    \"pimcore/document/pages/preview.js\",
    \"pimcore/document/snippets/settings.js\",
    \"pimcore/document/emails/settings.js\",
    \"pimcore/document/newsletters/settings.js\",
    \"pimcore/document/newsletters/sendingPanel.js\",
    \"pimcore/document/newsletters/plaintextPanel.js\",
    \"pimcore/document/newsletters/addressSourceAdapters/default.js\",
    \"pimcore/document/newsletters/addressSourceAdapters/csvList.js\",
    \"pimcore/document/newsletters/addressSourceAdapters/report.js\",
    \"pimcore/document/link.js\",
    \"pimcore/document/hardlink.js\",
    \"pimcore/document/folder.js\",
    \"pimcore/document/tree.js\",
    \"pimcore/document/snippet.js\",
    \"pimcore/document/email.js\",
    \"pimcore/document/newsletter.js\",
    \"pimcore/document/page.js\",
    \"pimcore/document/printpages/pdf_preview.js\",
    \"pimcore/document/printabstract.js\",
    \"pimcore/document/printpage.js\",
    \"pimcore/document/printcontainer.js\",
    \"pimcore/document/seopanel.js\",
    \"pimcore/document/document_language_overview.js\",
    \"pimcore/document/customviews/tree.js\",


    \"pimcore/asset/metadata/data/data.js\",
    \"pimcore/asset/metadata/data/input.js\",
    \"pimcore/asset/metadata/data/textarea.js\",
    \"pimcore/asset/metadata/data/asset.js\",
    \"pimcore/asset/metadata/data/document.js\",
    \"pimcore/asset/metadata/data/object.js\",
    \"pimcore/asset/metadata/data/date.js\",
    \"pimcore/asset/metadata/data/checkbox.js\",
    \"pimcore/asset/metadata/data/select.js\",

    \"pimcore/asset/metadata/tags/abstract.js\",
    \"pimcore/asset/metadata/tags/checkbox.js\",
    \"pimcore/asset/metadata/tags/date.js\",
    \"pimcore/asset/metadata/tags/input.js\",
    \"pimcore/asset/metadata/tags/manyToOneRelation.js\",
    \"pimcore/asset/metadata/tags/asset.js\",
    \"pimcore/asset/metadata/tags/document.js\",
    \"pimcore/asset/metadata/tags/object.js\",
    \"pimcore/asset/metadata/tags/select.js\",
    \"pimcore/asset/metadata/tags/textarea.js\",
    \"pimcore/asset/asset.js\",
    \"pimcore/asset/unknown.js\",
    \"pimcore/asset/embedded_meta_data.js\",
    \"pimcore/asset/image.js\",
    \"pimcore/asset/document.js\",
    \"pimcore/asset/archive.js\",
    \"pimcore/asset/video.js\",
    \"pimcore/asset/audio.js\",
    \"pimcore/asset/text.js\",
    \"pimcore/asset/folder.js\",
    \"pimcore/asset/listfolder.js\",
    \"pimcore/asset/versions.js\",
    \"pimcore/asset/metadata/dataProvider.js\",
    \"pimcore/asset/metadata/grid.js\",
    \"pimcore/asset/metadata/editor.js\",
    \"pimcore/asset/tree.js\",
    \"pimcore/asset/customviews/tree.js\",
    \"pimcore/asset/gridexport/csv.js\",
    \"pimcore/asset/gridexport/xlsx.js\",


    \"pimcore/object/helpers/edit.js\",
    \"pimcore/object/helpers/layout.js\",
    \"pimcore/object/classes/class.js\",
    \"pimcore/object/class.js\",
    \"pimcore/object/bulk-base.js\",
    \"pimcore/object/bulk-export.js\",
    \"pimcore/object/bulk-import.js\",
    \"pimcore/object/classes/data/data.js\",
    \"pimcore/object/classes/data/block.js\",
    \"pimcore/object/classes/data/classificationstore.js\",
    \"pimcore/object/classes/data/rgbaColor.js\",
    \"pimcore/object/classes/data/date.js\",
    \"pimcore/object/classes/data/datetime.js\",
    \"pimcore/object/classes/data/encryptedField.js\",
    \"pimcore/object/classes/data/time.js\",
    \"pimcore/object/classes/data/manyToOneRelation.js\",
    \"pimcore/object/classes/data/image.js\",
    \"pimcore/object/classes/data/externalImage.js\",
    \"pimcore/object/classes/data/hotspotimage.js\",
    \"pimcore/object/classes/data/imagegallery.js\",
    \"pimcore/object/classes/data/video.js\",
    \"pimcore/object/classes/data/input.js\",
    \"pimcore/object/classes/data/numeric.js\",
    \"pimcore/object/classes/data/manyToManyObjectRelation.js\",
    \"pimcore/object/classes/data/advancedManyToManyRelation.js\",
    \"pimcore/object/classes/data/advancedManyToManyObjectRelation.js\",
    \"pimcore/object/classes/data/reverseObjectRelation.js\",
    \"pimcore/object/classes/data/booleanSelect.js\",
    \"pimcore/object/classes/data/select.js\",
    \"pimcore/object/classes/data/urlSlug.js\",
    \"pimcore/object/classes/data/user.js\",
    \"pimcore/object/classes/data/textarea.js\",
    \"pimcore/object/classes/data/wysiwyg.js\",
    \"pimcore/object/classes/data/checkbox.js\",
    \"pimcore/object/classes/data/consent.js\",
    \"pimcore/object/classes/data/slider.js\",
    \"pimcore/object/classes/data/manyToManyRelation.js\",
    \"pimcore/object/classes/data/table.js\",
    \"pimcore/object/classes/data/structuredTable.js\",
    \"pimcore/object/classes/data/country.js\",
    \"pimcore/object/classes/data/geo/abstract.js\",
    \"pimcore/object/classes/data/geopoint.js\",
    \"pimcore/object/classes/data/geobounds.js\",
    \"pimcore/object/classes/data/geopolygon.js\",
    \"pimcore/object/classes/data/geopolyline.js\",
    \"pimcore/object/classes/data/language.js\",
    \"pimcore/object/classes/data/password.js\",
    \"pimcore/object/classes/data/multiselect.js\",
    \"pimcore/object/classes/data/link.js\",
    \"pimcore/object/classes/data/fieldcollections.js\",
    \"pimcore/object/classes/data/objectbricks.js\",
    \"pimcore/object/classes/data/localizedfields.js\",
    \"pimcore/object/classes/data/countrymultiselect.js\",
    \"pimcore/object/classes/data/languagemultiselect.js\",
    \"pimcore/object/classes/data/firstname.js\",
    \"pimcore/object/classes/data/lastname.js\",
    \"pimcore/object/classes/data/email.js\",
    \"pimcore/object/classes/data/gender.js\",
    \"pimcore/object/classes/data/newsletterActive.js\",
    \"pimcore/object/classes/data/newsletterConfirmed.js\",
    \"pimcore/object/classes/data/targetGroup.js\",
    \"pimcore/object/classes/data/targetGroupMultiselect.js\",
    \"pimcore/object/classes/data/quantityValue.js\",
    \"pimcore/object/classes/data/inputQuantityValue.js\",
    \"pimcore/object/classes/data/calculatedValue.js\",
    \"pimcore/object/classes/layout/layout.js\",
    \"pimcore/object/classes/layout/accordion.js\",
    \"pimcore/object/classes/layout/fieldset.js\",
    \"pimcore/object/classes/layout/fieldcontainer.js\",
    \"pimcore/object/classes/layout/panel.js\",
    \"pimcore/object/classes/layout/region.js\",
    \"pimcore/object/classes/layout/tabpanel.js\",
    \"pimcore/object/classes/layout/button.js\",
    \"pimcore/object/classes/layout/iframe.js\",
    \"pimcore/object/fieldlookup/filterdialog.js\",
    \"pimcore/object/fieldlookup/helper.js\",
    \"pimcore/object/classes/layout/text.js\",
    \"pimcore/object/fieldcollection.js\",
    \"pimcore/object/fieldcollections/field.js\",
    \"pimcore/object/gridcolumn/Abstract.js\",
    \"pimcore/object/gridcolumn/operator/IsEqual.js\",
    \"pimcore/object/gridcolumn/operator/Text.js\",
    \"pimcore/object/gridcolumn/operator/Anonymizer.js\",
    \"pimcore/object/gridcolumn/operator/AnyGetter.js\",
    \"pimcore/object/gridcolumn/operator/AssetMetadataGetter.js\",
    \"pimcore/object/gridcolumn/operator/Arithmetic.js\",
    \"pimcore/object/gridcolumn/operator/Boolean.js\",
    \"pimcore/object/gridcolumn/operator/BooleanFormatter.js\",
    \"pimcore/object/gridcolumn/operator/CaseConverter.js\",
    \"pimcore/object/gridcolumn/operator/CharCounter.js\",
    \"pimcore/object/gridcolumn/operator/Concatenator.js\",
    \"pimcore/object/gridcolumn/operator/DateFormatter.js\",
    \"pimcore/object/gridcolumn/operator/ElementCounter.js\",
    \"pimcore/object/gridcolumn/operator/Iterator.js\",
    \"pimcore/object/gridcolumn/operator/JSON.js\",
    \"pimcore/object/gridcolumn/operator/LocaleSwitcher.js\",
    \"pimcore/object/gridcolumn/operator/Merge.js\",
    \"pimcore/object/gridcolumn/operator/ObjectFieldGetter.js\",
    \"pimcore/object/gridcolumn/operator/PHP.js\",
    \"pimcore/object/gridcolumn/operator/PHPCode.js\",
    \"pimcore/object/gridcolumn/operator/Base64.js\",
    \"pimcore/object/gridcolumn/operator/TranslateValue.js\",
    \"pimcore/object/gridcolumn/operator/PropertyGetter.js\",
    \"pimcore/object/gridcolumn/operator/RequiredBy.js\",
    \"pimcore/object/gridcolumn/operator/StringContains.js\",
    \"pimcore/object/gridcolumn/operator/StringReplace.js\",
    \"pimcore/object/gridcolumn/operator/Substring.js\",
    \"pimcore/object/gridcolumn/operator/LFExpander.js\",
    \"pimcore/object/gridcolumn/operator/Trimmer.js\",
    \"pimcore/object/gridcolumn/operator/Alias.js\",
    \"pimcore/object/gridcolumn/operator/WorkflowState.js\",
    \"pimcore/object/gridcolumn/value/DefaultValue.js\",
    \"pimcore/object/gridcolumn/operator/GeopointRenderer.js\",
    \"pimcore/object/gridcolumn/operator/ImageRenderer.js\",
    \"pimcore/object/gridcolumn/operator/HotspotimageRenderer.js\",
    \"pimcore/object/importcolumn/Abstract.js\",
    \"pimcore/object/importcolumn/operator/Base64.js\",
    \"pimcore/object/importcolumn/operator/Ignore.js\",
    \"pimcore/object/importcolumn/operator/Iterator.js\",
    \"pimcore/object/importcolumn/operator/LocaleSwitcher.js\",
    \"pimcore/object/importcolumn/operator/ObjectBrickSetter.js\",
    \"pimcore/object/importcolumn/operator/PHPCode.js\",
    \"pimcore/object/importcolumn/operator/Published.js\",
    \"pimcore/object/importcolumn/operator/Splitter.js\",
    \"pimcore/object/importcolumn/operator/Unserialize.js\",
    \"pimcore/object/importcolumn/value/DefaultValue.js\",
    \"pimcore/object/objectbrick.js\",
    \"pimcore/object/objectbricks/field.js\",
    \"pimcore/object/tags/abstract.js\",
    \"pimcore/object/tags/abstractRelations.js\",
    \"pimcore/object/tags/block.js\",
    \"pimcore/object/tags/rgbaColor.js\",
    \"pimcore/object/tags/date.js\",
    \"pimcore/object/tags/datetime.js\",
    \"pimcore/object/tags/time.js\",
    \"pimcore/object/tags/manyToOneRelation.js\",
    \"pimcore/object/tags/image.js\",
    \"pimcore/object/tags/encryptedField.js\",
    \"pimcore/object/tags/externalImage.js\",
    \"pimcore/object/tags/hotspotimage.js\",
    \"pimcore/object/tags/imagegallery.js\",
    \"pimcore/object/tags/video.js\",
    \"pimcore/object/tags/input.js\",
    \"pimcore/object/tags/classificationstore.js\",
    \"pimcore/object/tags/numeric.js\",
    \"pimcore/object/tags/manyToManyObjectRelation.js\",
    \"pimcore/object/tags/advancedManyToManyRelation.js\",
    \"pimcore/object/gridcolumn/operator/FieldCollectionGetter.js\",
    \"pimcore/object/tags/advancedManyToManyObjectRelation.js\",
    \"pimcore/object/tags/reverseObjectRelation.js\",
    \"pimcore/object/tags/urlSlug.js\",
    \"pimcore/object/tags/booleanSelect.js\",
    \"pimcore/object/tags/select.js\",
    \"pimcore/object/tags/user.js\",
    \"pimcore/object/tags/checkbox.js\",
    \"pimcore/object/tags/consent.js\",
    \"pimcore/object/tags/textarea.js\",
    \"pimcore/object/tags/wysiwyg.js\",
    \"pimcore/object/tags/slider.js\",
    \"pimcore/object/tags/manyToManyRelation.js\",
    \"pimcore/object/tags/table.js\",
    \"pimcore/object/tags/structuredTable.js\",
    \"pimcore/object/tags/country.js\",
    \"pimcore/object/tags/geo/abstract.js\",
    \"pimcore/object/tags/geobounds.js\",
    \"pimcore/object/tags/geopoint.js\",
    \"pimcore/object/tags/geopolygon.js\",
    \"pimcore/object/tags/geopolyline.js\",
    \"pimcore/object/tags/language.js\",
    \"pimcore/object/tags/password.js\",
    \"pimcore/object/tags/multiselect.js\",
    \"pimcore/object/tags/link.js\",
    \"pimcore/object/tags/fieldcollections.js\",
    \"pimcore/object/tags/localizedfields.js\",
    \"pimcore/object/tags/countrymultiselect.js\",
    \"pimcore/object/tags/languagemultiselect.js\",
    \"pimcore/object/tags/objectbricks.js\",
    \"pimcore/object/tags/firstname.js\",
    \"pimcore/object/tags/lastname.js\",
    \"pimcore/object/tags/email.js\",
    \"pimcore/object/tags/gender.js\",
    \"pimcore/object/tags/newsletterActive.js\",
    \"pimcore/object/tags/newsletterConfirmed.js\",
    \"pimcore/object/tags/targetGroup.js\",
    \"pimcore/object/tags/targetGroupMultiselect.js\",
    \"pimcore/object/tags/quantityValue.js\",
    \"pimcore/object/tags/inputQuantityValue.js\",
    \"pimcore/object/tags/calculatedValue.js\",
    \"pimcore/object/preview.js\",
    \"pimcore/object/versions.js\",
    \"pimcore/object/variantsTab.js\",
    \"pimcore/object/folder/search.js\",
    \"pimcore/object/edit.js\",
    \"pimcore/object/abstract.js\",
    \"pimcore/object/object.js\",
    \"pimcore/object/folder.js\",
    \"pimcore/object/variant.js\",
    \"pimcore/object/tree.js\",
    \"pimcore/object/layout/iframe.js\",
    \"pimcore/object/customviews/tree.js\",
    \"pimcore/object/quantityvalue/unitsettings.js\",
    \"pimcore/object/gridexport/csv.js\",
    \"pimcore/object/gridexport/xlsx.js\",


    \"pimcore/plugin/broker.js\",
    \"pimcore/plugin/plugin.js\",


    \"pimcore/report/panel.js\",
    \"pimcore/report/broker.js\",
    \"pimcore/report/abstract.js\",
    \"pimcore/report/settings.js\",
    \"pimcore/report/analytics/settings.js\",
    \"pimcore/report/analytics/elementoverview.js\",
    \"pimcore/report/analytics/elementexplorer.js\",
    \"pimcore/report/webmastertools/settings.js\",
    \"pimcore/report/tagmanager/settings.js\",
    \"pimcore/report/custom/item.js\",
    \"pimcore/report/custom/panel.js\",
    \"pimcore/report/custom/settings.js\",
    \"pimcore/report/custom/report.js\",
    \"pimcore/report/custom/definitions/sql.js\",
    \"pimcore/report/custom/definitions/analytics.js\",
    \"pimcore/report/custom/toolbarenricher.js\",

    \"pimcore/extensionmanager/admin.js\",


    \"pimcore/log/admin.js\",
    \"pimcore/log/detailwindow.js\",


    \"pimcore/layout/portal.js\",
    \"pimcore/layout/portlets/abstract.js\",
    \"pimcore/layout/portlets/modifiedDocuments.js\",
    \"pimcore/layout/portlets/modifiedObjects.js\",
    \"pimcore/layout/portlets/modifiedAssets.js\",
    \"pimcore/layout/portlets/modificationStatistic.js\",
    \"pimcore/layout/portlets/analytics.js\",
    \"pimcore/layout/portlets/customreports.js\",

    \"pimcore/layout/toolbar.js\",
    \"pimcore/layout/treepanelmanager.js\",
    \"pimcore/document/seemode.js\",


    \"pimcore/object/classificationstore/groupsPanel.js\",
    \"pimcore/object/classificationstore/propertiesPanel.js\",
    \"pimcore/object/classificationstore/collectionsPanel.js\",
    \"pimcore/object/classificationstore/keyDefinitionWindow.js\",
    \"pimcore/object/classificationstore/keySelectionWindow.js\",
    \"pimcore/object/classificationstore/relationSelectionWindow.js\",
    \"pimcore/object/classificationstore/storeConfiguration.js\",
    \"pimcore/object/classificationstore/storeTree.js\",
    \"pimcore/object/classificationstore/columnConfigDialog.js\",


    \"pimcore/workflow/transitionPanel.js\",
    \"pimcore/workflow/transitions.js\",
    \"pimcore/workflow/transitions.js\",


    \"pimcore/colorpicker-overrides.js\",


    \"pimcore/notification/helper.js\",
    \"pimcore/notification/panel.js\",
    \"pimcore/notification/modal.js\",
]
%}

<!-- some javascript -->
{# pimcore constants #}
<script {{ pimcore_csp.getNonceHtmlAttribute()|raw }}>
    pimcore.settings = {{(settings|json_encode(constant('JSON_PRETTY_PRINT'))|raw)}};
</script>

<script src=\"{{ path('pimcore_admin_misc_jsontranslationssystem', {'language': language, '_dc': settings.build }) }}\" {{ pimcore_csp.getNonceHtmlAttribute()|raw }}></script>
<script src=\"{{ path('pimcore_admin_user_getcurrentuser', {'_dc': settings.build }) }}\" {{ pimcore_csp.getNonceHtmlAttribute()|raw }}></script>
<script src=\"{{ path('pimcore_admin_misc_availablelanguages', {'_dc': settings.build }) }}\" {{ pimcore_csp.getNonceHtmlAttribute()|raw }}></script>

<!-- library scripts -->
{% for scriptUrl in scriptLibs %}
    <script src=\"/bundles/pimcoreadmin/js/{{ scriptUrl }}?_dc={{ settings.build }}\" {{ pimcore_csp.getNonceHtmlAttribute()|raw }}></script>
{% endfor %}

<!-- internal scripts -->
{% if settings.disableMinifyJs %}
    {% for scriptUrl in scripts %}
        <script src=\"/bundles/pimcoreadmin/js/{{ scriptUrl }}?_dc={{ settings.build }}\"></script>
    {% endfor %}
{% else %}
    {{ pimcore_minimize_scripts(scripts)|raw }}
{% endif %}

{# load plugin scripts #}

{# // only add the timestamp if the devmode is not activated, otherwise it is very hard to develop and debug plugins,
 # // because the filename changes on every reload and therefore breakpoints, ... are resetted on every reload
#}

{% set pluginDcValue = \"now\"|date('U') %}
{% if settings.disableMinifyJs %}
    {% set pluginDcValue = 1 %}
{% endif %}

<!-- bundle scripts -->
{% if settings.disableMinifyJs %}
    {% for pluginJsPath in pluginJsPaths %}
        <script src=\"{{ pluginJsPath }}?_dc={{ pluginDcValue }}\" {{ pimcore_csp.getNonceHtmlAttribute()|raw }}></script>
    {% endfor %}
{% else %}
    {{ pimcore_minimize_scripts(pluginJsPaths)|raw }}
{% endif %}

{% for pluginCssPath in pluginCssPaths %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ pluginCssPath }}?_dc={{ pluginDcValue }}\"/>
{% endfor %}

{#  MUST BE THE LAST LINE  #}
<script src=\"/bundles/pimcoreadmin/js/pimcore/startup.js?_dc={{ settings.build }}\" {{ pimcore_csp.getNonceHtmlAttribute()|raw }}></script>
</body>
</html>
", "@PimcoreAdmin/Admin/Index/index.html.twig", "/var/www/html/Eproject/ecomwebsite/vendor/pimcore/pimcore/bundles/AdminBundle/Resources/views/Admin/Index/index.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 80, "for" => 130);
        static $filters = array("default" => 80, "escape" => 81, "raw" => 91, "trans" => 132, "merge" => 217, "json_encode" => 701, "date" => 728);
        static $functions = array("path" => 79, "asset" => 101, "pimcore_file_exists" => 216, "constant" => 216, "pimcore_minimize_scripts" => 719);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['default', 'escape', 'raw', 'trans', 'merge', 'json_encode', 'date'],
                ['path', 'asset', 'pimcore_file_exists', 'constant', 'pimcore_minimize_scripts']
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
