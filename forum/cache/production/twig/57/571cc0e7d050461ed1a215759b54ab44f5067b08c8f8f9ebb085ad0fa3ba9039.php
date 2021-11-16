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

/* simple_header.html */
class __TwigTemplate_f1e584704f69b0bcc8322781b6d1d064716e10877c62b058b2028ac4a0945ce3 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 8
        echo ($context["SITENAME"] ?? null);
        echo " &bull; ";
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " &bull; ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " &bull; ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</title>

";
        // line 10
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 11
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 26
        echo "<link href=\"";
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 27
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
";
        // line 28
        if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
            // line 29
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/colours_dark.css\" rel=\"stylesheet\">
";
        }
        // line 31
        echo "<link href=\"";
        echo ($context["T_STYLESHEET_LANG_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 33
        if ((($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null) != "No Custom Colour")) {
            // line 34
            echo "    ";
            if ((($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null) == "Custom (Use colour picker below)")) {
                // line 35
                echo "        <style type=\"text/css\">
\t\t\t/* Color */
\t\t\t/* Color */
a:hover, .navbar_footer a, .copyright_bar a, .social_links_footer a:hover span, .icon.fa-file.icon-red, a:hover .icon.fa-file.icon-red, .navigation .active-subsection a, .navigation .active-subsection a:hover, .navigation a:hover, .tabs .tab > a:hover, .tabs .activetab > a, .tabs .activetab > a:hover, a.postlink, a.postlink:visited, .navbar_in_header .badge, .button:focus .icon, .button:hover .icon, .dark_base .social_links_footer a span, .dark_base h2, .dark_base h2 a, .dark_base a:link, .dark_base a:visited, .button-secondary:focus, .button-secondary:hover, .notification_unread {color: #";
                // line 38
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Background Solid  */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, .jumpbox-cat-link, .dropdown-contents > li > a:hover, a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover, a.no_avatar:hover, .jumpbox-cat-link:hover, input.button1:focus, input.button2:focus, input.button3:focus, .specialbutton, input.specialbutton, .panel .specialbutton, a.specialbutton, .scrollToTop, a.specialbutton, .dark_base .social_links_footer a:hover span, .topic_type {background: #";
                // line 40
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Borders Dark */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, blockquote, .codebox code, .jumpbox-cat-link, a.postlink, input.button1:focus, input.button2:focus, input.button3:focus, input.specialbutton, .inputbox:hover, .inputbox:focus, .specialbutton, a.specialbutton, .button:hover, .button:focus, .dark_base .social_links_footer a span, a.specialbutton, .dark_base .social_links_footer a:hover span {border-color: #";
                // line 42
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Background Gradient  */
\t\t\t.headerbar, body.content_block_header_block li.header, body.content_block_header_stripe li.header:before, .scrollToTop, .no_avatar, .social_links_footer, .badge, thead tr, .sidebar_block_stripe:before, .fancy_panel:before {background: #";
                // line 44
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* The same as above, just with some opacity */
\t\t\t.headerbar_overlay_active {background-color: rgba(0,0,0,0.3);}\t\t\t
\t\t\t/* Colour Hover Light */
\t\t\t.navbar_footer a:hover, .copyright_bar a:hover, a.postlink:hover, .dark_base h2 a:hover  {opacity: 0.7;}\t\t\t
\t\t\t/* Background Hover Light */
\t\t\ta.scrollToTop:hover, input.specialbutton:hover, a.specialbutton:hover {opacity: 0.7;}
\t\t\t/* Border light */
\t\t\t.specialbutton:hover {opacity: 0.7;}
\t\t</style>
\t";
            } else {
                // line 55
                echo "    \t<link href=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/colour-presets/";
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null);
                echo ".css?assets_version=";
                echo ($context["T_ASSETS_VERSION"] ?? null);
                echo "\" rel=\"stylesheet\" class=\"preset_stylesheet\">
    ";
            }
        } else {
            // line 58
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/colour-presets/default.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 60
        echo "
";
        // line 61
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 62
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 64
        echo "
<!--[if lte IE 8]>
\t<link href=\"";
        // line 66
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 69
        $value = 1;
        $context['definition']->set('POPUP', $value);
        // line 70
        echo "
";
        // line 71
        // line 72
        echo "
";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 73);
        echo "

";
        // line 75
        // line 76
        echo "
</head>

<body id=\"phpbb\" class=\"nojs ";
        // line 79
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">

";
        // line 81
        // line 82
        echo "
<div id=\"wrap\" class=\"wrap\">
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
\t<div id=\"page-body\" class=\"page-body\" role=\"main\">
";
    }

    public function getTemplateName()
    {
        return "simple_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 82,  221 => 81,  214 => 79,  209 => 76,  208 => 75,  203 => 73,  200 => 72,  199 => 71,  196 => 70,  193 => 69,  185 => 66,  181 => 64,  173 => 62,  171 => 61,  168 => 60,  160 => 58,  149 => 55,  135 => 44,  130 => 42,  125 => 40,  120 => 38,  115 => 35,  112 => 34,  110 => 33,  104 => 31,  98 => 29,  96 => 28,  92 => 27,  87 => 26,  70 => 11,  68 => 10,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "simple_header.html", "");
    }
}
