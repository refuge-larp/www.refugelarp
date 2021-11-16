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

/* overall_header_simplified.html */
class __TwigTemplate_dbf3c05f3c4d70391380861fb52380294c01bf7873dcf4b43e86f54b221265a9 extends \Twig\Template
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
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 10
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 11
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 16
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 18
            echo "\t";
        }
        // line 20
        echo "
";
        // line 21
        if (($context["U_CANONICAL"] ?? null)) {
            // line 22
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 24
        echo "
";
        // line 25
        if (($context["FORUM_FAVICON"] ?? null)) {
            // line 26
            echo "\t<link rel=\"icon\" href=\"";
            echo ($context["FORUM_FAVICON"] ?? null);
            echo "\" />
";
        }
        // line 28
        echo "
<!--
\tphpBB style name: Milk v2
\tBased on style:   Merlin Framework (http://www.planetstyles.net)
-->

";
        // line 34
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 35
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
            // line 50
            if ((($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Roboto Slab")) {
                // line 51
                echo "\t<link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab:300,400\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Roboto Slab\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
            } elseif ((            // line 53
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Bubbler One")) {
                // line 54
                echo "\t<link href=\"https://fonts.googleapis.com/css?family=Bubbler+One\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Bubbler One\", Arial, Helvetica, sans-serif; font-size: 18px;}</style>
";
            } elseif ((            // line 56
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Dosis")) {
                // line 57
                echo "\t<link href=\"https://fonts.googleapis.com/css?family=Dosis:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Dosis\", Arial, Helvetica, sans-serif; font-size: 16px;}</style>
";
            } elseif ((            // line 59
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Exo 2")) {
                // line 60
                echo "\t<link href=\"https://fonts.googleapis.com/css?family=Exo+2:300,400,500\" rel=\"stylesheet\">
\t<style type=\"text/css\">body {font-family: \"Exo 2\", Arial, Helvetica, sans-serif; font-size: 15px;}</style>
";
            } elseif ((            // line 62
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Raleway")) {
                // line 63
                echo "\t<link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Raleway\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
            } elseif ((            // line 65
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Rubik")) {
                // line 66
                echo "\t<link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Rubik\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
            } elseif ((            // line 68
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Quicksand")) {
                // line 69
                echo "\t<link href=\"https://fonts.googleapis.com/css?family=Quicksand:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Quicksand\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
            } else {
                // line 72
                echo "\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Roboto\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
            }
            // line 75
            echo "
";
        }
        // line 77
        echo "<link href=\"";
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 78
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
";
        // line 79
        if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
            // line 80
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/colours_dark.css\" rel=\"stylesheet\">
";
        }
        // line 82
        echo "<link href=\"";
        echo ($context["T_STYLESHEET_LANG_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 84
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/blank.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\" class=\"colour_switch_link\"  />

";
        // line 86
        if (($context["STYLE_SETTINGS_CONFIG_ROUNDED_CORNERS"] ?? null)) {
            // line 87
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/rounded.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 89
        echo "
";
        // line 90
        if ((($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null) != "No Custom Colour")) {
            // line 91
            echo "    ";
            if ((($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null) == "Custom (Use colour picker below)")) {
                // line 92
                echo "        <style type=\"text/css\">
\t\t\t/* Color */
a:hover, .navbar_footer a, .copyright_bar a, .social_links_footer a:hover span, .icon.fa-file.icon-red, a:hover .icon.fa-file.icon-red, .navigation .active-subsection a, .navigation .active-subsection a:hover, .navigation a:hover, .tabs .tab > a:hover, .tabs .activetab > a, .tabs .activetab > a:hover, a.postlink, a.postlink:visited, .navbar_in_header .badge, .button:focus .icon, .button:hover .icon, .dark_base .social_links_footer a span, .dark_base h2, .dark_base h2 a, .dark_base a:link, .dark_base a:visited, .button-secondary:focus, .button-secondary:hover, .notification_unread {color: #";
                // line 94
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Background Solid  */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, .jumpbox-cat-link, .dropdown-contents > li > a:hover, a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover, a.no_avatar:hover, .jumpbox-cat-link:hover, input.button1:focus, input.button2:focus, input.button3:focus, .specialbutton, input.specialbutton, .panel .specialbutton, a.specialbutton, .scrollToTop, a.specialbutton, .dark_base .social_links_footer a:hover span, .topic_type, .grid_unread {background: #";
                // line 96
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Borders Dark */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, blockquote, .codebox code, .jumpbox-cat-link, a.postlink, input.button1:focus, input.button2:focus, input.button3:focus, input.specialbutton, .inputbox:hover, .inputbox:focus, .specialbutton, a.specialbutton, .button:hover, .button:focus, .dark_base .social_links_footer a span, a.specialbutton, .dark_base .social_links_footer a:hover span {border-color: #";
                // line 98
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Background Gradient  */
\t\t\t.headerbar, body.content_block_header_block li.header, body.content_block_header_stripe li.header:before, .scrollToTop, .no_avatar, .social_links_footer, .badge, thead tr, .sidebar_block_stripe:before, .fancy_panel:before {background: #";
                // line 100
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* The same as above, just with some opacity */
\t\t\t.headerbar_overlay_active, .grid_colour_overlay:hover {background-color: rgba(0,0,0,0.3);}
\t\t\t/* Colour Hover Light */
\t\t\t.navbar_footer a:hover, .copyright_bar a:hover, a.postlink:hover, .dark_base h2 a:hover  {opacity: 0.7;}
\t\t\t/* Background Hover Light */
\t\t\ta.scrollToTop:hover, input.specialbutton:hover, a.specialbutton:hover {opacity: 0.7;}
\t\t\t/* Border light */
\t\t\t.specialbutton:hover {opacity: 0.7;}
\t\t</style>
\t";
            } else {
                // line 111
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
            // line 114
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/colour-presets/default.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 116
        echo "
";
        // line 117
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 118
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 120
        echo "
";
        // line 121
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 122
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 124
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 126
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 129
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('hifikabin_quotethumbnails', '__main__'));
        $this->env->loadTemplate('@hifikabin_quotethumbnails/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('paul999_tfa', '__main__'));
        $this->env->loadTemplate('@paul999_tfa/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_collapsiblecategories', '__main__'));
        $this->env->loadTemplate('@phpbb_collapsiblecategories/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbmodders_banhammer', '__main__'));
        $this->env->loadTemplate('@phpbbmodders_banhammer/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('stevotvr_flair', '__main__'));
        $this->env->loadTemplate('@stevotvr_flair/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_abbc3', '__main__'));
        $this->env->loadTemplate('@vse_abbc3/event/overall_header_head_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 130
        echo "
";
        // line 131
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 131);
        echo "

";
        // line 133
        // line 134
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 136
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        if ((($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Right Only")) {
            echo " sidebar-right-only";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Left Only")) {
            echo " sidebar-left-only";
        } else {
            echo " sidebar-both";
        }
        if (($context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"] ?? null)) {
            echo " body-layout-";
            echo ($context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"] ?? null);
        }
        echo " auth-page";
        if ((($context["S_ADMIN_AUTH"] ?? null) || (($context["SCRIPT_NAME"] ?? null) == "viewforum"))) {
            echo " auth-page-admin";
        }
        if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
            echo " dark_base";
        }
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "overall_header_simplified.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 136,  438 => 134,  437 => 133,  432 => 131,  429 => 130,  404 => 129,  396 => 126,  392 => 124,  384 => 122,  382 => 121,  379 => 120,  371 => 118,  369 => 117,  366 => 116,  358 => 114,  347 => 111,  333 => 100,  328 => 98,  323 => 96,  318 => 94,  314 => 92,  311 => 91,  309 => 90,  306 => 89,  298 => 87,  296 => 86,  289 => 84,  283 => 82,  277 => 80,  275 => 79,  271 => 78,  266 => 77,  262 => 75,  257 => 72,  252 => 69,  250 => 68,  246 => 66,  244 => 65,  240 => 63,  238 => 62,  234 => 60,  232 => 59,  228 => 57,  226 => 56,  222 => 54,  220 => 53,  216 => 51,  214 => 50,  197 => 35,  195 => 34,  187 => 28,  181 => 26,  179 => 25,  176 => 24,  170 => 22,  168 => 21,  165 => 20,  162 => 18,  149 => 17,  136 => 16,  125 => 15,  114 => 14,  103 => 13,  92 => 12,  81 => 11,  79 => 10,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header_simplified.html", "");
    }
}
