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

/* overall_header.html */
class __TwigTemplate_fd9f863d9c18c538459fee3da328aae333daa30852eb4eaf52c4f4c2922f910e extends \Twig\Template
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
        // line 8
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 9
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
        // line 11
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 12
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
            // line 13
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
            // line 14
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
            // line 15
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
            // line 16
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
            // line 17
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
            // line 18
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
            // line 19
            echo "\t";
        }
        // line 21
        echo "
";
        // line 22
        if (($context["U_CANONICAL"] ?? null)) {
            // line 23
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 25
        echo "
";
        // line 26
        if (($context["FORUM_FAVICON"] ?? null)) {
            // line 27
            echo "\t<link rel=\"icon\" href=\"";
            echo ($context["FORUM_FAVICON"] ?? null);
            echo "\" />
";
        }
        // line 29
        echo "
<!--
\tphpBB style name: Milk v2
\tBased on style:   Merlin Framework (http://www.planetstyles.net)
-->

";
        // line 35
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 36
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
        // line 51
        echo "

";
        // line 53
        if ((($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Roboto Slab")) {
            // line 54
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Roboto Slab\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        } elseif ((        // line 56
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Bubbler One")) {
            // line 57
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Bubbler+One\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Bubbler One\", Arial, Helvetica, sans-serif; font-size: 18px;}</style>
";
        } elseif ((        // line 59
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Dosis")) {
            // line 60
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Dosis:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Dosis\", Arial, Helvetica, sans-serif; font-size: 16px;}</style>
";
        } elseif ((        // line 62
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Exo 2")) {
            // line 63
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Exo+2:300,400,500\" rel=\"stylesheet\">
\t<style type=\"text/css\">body {font-family: \"Exo 2\", Arial, Helvetica, sans-serif; font-size: 15px;}</style>
";
        } elseif ((        // line 65
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Raleway")) {
            // line 66
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Raleway\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        } elseif ((        // line 68
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Rubik")) {
            // line 69
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Rubik\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        } elseif ((        // line 71
($context["STYLE_SETTINGS_CONFIG_FONT_FAMILY"] ?? null) == "Quicksand")) {
            // line 72
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Quicksand:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Quicksand\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        } else {
            // line 75
            echo "\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\" rel=\"stylesheet\">
    <style type=\"text/css\">body {font-family: \"Roboto\", Arial, Helvetica, sans-serif; font-size: 14px;}</style>
";
        }
        // line 78
        echo "

<link href=\"";
        // line 80
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 81
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
";
        // line 82
        if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
            // line 83
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/colours_dark.css\" rel=\"stylesheet\">
";
        }
        // line 85
        echo "<link href=\"";
        echo ($context["T_STYLESHEET_LANG_LINK"] ?? null);
        echo "?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 87
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/blank.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\" class=\"colour_switch_link\"  />

";
        // line 89
        if (($context["STYLE_SETTINGS_CONFIG_ROUNDED_CORNERS"] ?? null)) {
            // line 90
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/rounded.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 92
        echo "
";
        // line 93
        if ((($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null) != "No Custom Colour")) {
            // line 94
            echo "    ";
            if ((($context["STYLE_SETTINGS_CONFIG_COLOUR_PRESET"] ?? null) == "Custom (Use colour picker below)")) {
                // line 95
                echo "        <style type=\"text/css\">
\t\t\t/* Color */
a:hover, .navbar_footer a, .copyright_bar a, .social_links_footer a:hover span, .icon.fa-file.icon-red, a:hover .icon.fa-file.icon-red, .navigation .active-subsection a, .navigation .active-subsection a:hover, .navigation a:hover, .tabs .tab > a:hover, .tabs .activetab > a, .tabs .activetab > a:hover, a.postlink, a.postlink:visited, .navbar_in_header .badge, .button:focus .icon, .button:hover .icon, .dark_base .social_links_footer a span, .dark_base h2, .dark_base h2 a, .dark_base a:link, .dark_base a:visited, .button-secondary:focus, .button-secondary:hover, .notification_unread, .topic_type {color: #";
                // line 97
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Background Solid  */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, .jumpbox-cat-link, .dropdown-contents > li > a:hover, a.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover, a.no_avatar:hover, .jumpbox-cat-link:hover, input.button1:focus, input.button2:focus, input.button3:focus, .specialbutton, input.specialbutton, .panel .specialbutton, a.specialbutton, .scrollToTop, a.specialbutton, .dark_base .social_links_footer a:hover span, .grid_unread, .tile_row_2:before   {background: #";
                // line 99
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Borders Dark */
\t\t\t.pagination li a:hover, .pagination li.active span, .pagination li a:focus, blockquote, .codebox code, .jumpbox-cat-link, a.postlink, input.button1:focus, input.button2:focus, input.button3:focus, input.specialbutton, .inputbox:hover, .inputbox:focus, .specialbutton, a.specialbutton, .button:hover, .button:focus, .dark_base .social_links_footer a span, a.specialbutton, .dark_base .social_links_footer a:hover span {border-color: #";
                // line 101
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* Background Gradient  */
\t\t\t.headerbar, body.content_block_header_block li.header, body.content_block_header_stripe li.header:before, .scrollToTop, .no_avatar, .social_links_footer, .badge, thead tr, .sidebar_block_stripe:before, .fancy_panel:before {background-color: #";
                // line 103
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo ";}
\t\t\t/* opacity */
\t\t\t.headerbar_overlay_active {background-color: #";
                // line 105
                echo ($context["STYLE_SETTINGS_CONFIG_COLOUR_PICKER"] ?? null);
                echo "; opacity: 0.7;}
\t\t\t/* Dark overlay */
\t\t\t.grid_colour_overlay:hover {background-color: rgba(0,0,0,0.7);}
\t\t\t/* Colour Hover Light */
\t\t\t.navbar_footer a:hover, .copyright_bar a:hover, a.postlink:hover, .dark_base h2 a:hover  {opacity: 0.7;}
\t\t\t/* Background Hover Light */
\t\t\ta.scrollToTop:hover, input.specialbutton:hover, a.specialbutton:hover {opacity: 0.7;}
\t\t\t/* Border light */
\t\t\t.specialbutton:hover {opacity: 0.7;}

\t\t</style>
\t";
            } else {
                // line 117
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
            // line 120
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/colour-presets/default.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 122
        echo "
";
        // line 123
        if ( !($context["STYLE_SETTINGS_CONFIG_DISABLE_CSS_ANIMATIONS"] ?? null)) {
            // line 124
            echo "<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/animate.css\" rel=\"stylesheet\" />
<style type=\"text/css\">
\t#nav-main, #logo, #site-description h1, #site-description p, #nav-breadcrumbs, #page-body {
\t\ttransform: translateY(-15px);
\t\ttransition: .75s ease-in-out;
\t}
</style>
";
        }
        // line 132
        echo "

<style type=\"text/css\">
\t";
        // line 135
        if ((($context["STYLE_SETTINGS_CONFIG_CSS_ICON_SHAPE"] ?? null) != "Square")) {
            // line 136
            echo "\t\t.forums .row-item:before, .topics .row-item:before, .pmlist .row-item:before, .cplist .row-item:before {
\t\t\tborder-radius: 50%;
\t\t}
\t";
        } else {
            // line 140
            echo "\t\tdl.row-item:after {
\t\t\ttop: 3px;
\t\t\tleft: 35px;
\t\t}
\t";
        }
        // line 145
        echo "

\t";
        // line 147
        if (($context["FORUM_HEADER"] ?? null)) {
            // line 148
            echo "\t.forum_header {
\t\t";
            // line 149
            if (($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] ?? null)) {
                // line 150
                echo "\t\t\tbackground-image: none;
\t\t\tbackground-color: transparent;
\t\t";
            } else {
                // line 153
                echo "\t\t\tbackground-image: url('";
                echo ($context["FORUM_HEADER"] ?? null);
                echo "');
\t\t";
            }
            // line 155
            echo "
\t\t";
            // line 156
            if (($context["STYLE_SETTINGS_CONFIG_HEADER_REPEAT"] ?? null)) {
                // line 157
                echo "\t\t\tbackground-repeat: ";
                echo ($context["STYLE_SETTINGS_CONFIG_HEADER_REPEAT"] ?? null);
                echo ";
\t\t";
            } else {
                // line 159
                echo "\t\t\tbackground-repeat: no-repeat;
\t\t";
            }
            // line 161
            echo "
\t\t";
            // line 162
            if (($context["STYLE_SETTINGS_CONFIG_HEADER_POSITION"] ?? null)) {
                // line 163
                echo "\t\t\tbackground-position: ";
                echo ($context["STYLE_SETTINGS_CONFIG_HEADER_POSITION"] ?? null);
                echo ";
\t\t";
            } else {
                // line 165
                echo "\t\t\tbackground-position: center top;
\t\t";
            }
            // line 167
            echo "
\t\t";
            // line 168
            if (($context["STYLE_SETTINGS_CONFIG_HEADER_SIZE"] ?? null)) {
                echo " background-size: cover;";
            }
            echo "\"
\t}

\t\t";
            // line 171
            if (($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] ?? null)) {
                // line 172
                echo "\t\t/* Opens parallax window */
\t\t.headerbar {
\t\t\tbackground: none;
\t\t}
\t\t";
            }
            // line 177
            echo "\t";
        }
        // line 178
        echo "
</style>




";
        // line 184
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 185
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 187
        echo "
";
        // line 188
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 189
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 191
        echo "
";
        // line 192
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 193
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 195
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 197
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 200
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
        // line 201
        echo "
";
        // line 202
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 202);
        echo "
<link href=\"";
        // line 203
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/extensions.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">



";
        // line 207
        // line 208
        echo ($context["STYLE_SETTINGS_HTML_4"] ?? null);
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 210
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        if ((($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null) && (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Right Only"))) {
            echo " sidebar-right-only";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null) && (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Left Only"))) {
            echo " sidebar-left-only";
        } elseif (($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null)) {
            echo " sidebar-both";
        }
        if (($context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"] ?? null)) {
            echo " body-layout-";
            echo ($context["STYLE_SETTINGS_CONFIG_LAYOUT_TYPE"] ?? null);
        }
        echo " content_block_header_";
        if ((($context["STYLE_SETTINGS_CONFIG_CONTENT_BLOCK_HEADER"] ?? null) == "Stripe")) {
            echo "stripe";
        } else {
            echo "block";
        }
        if (($context["STYLE_SETTINGS_CONFIG_HIGH_CONTRAST_LINKS"] ?? null)) {
            echo " high_contrast_links";
        }
        if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
            echo " dark_base";
        }
        if ((($context["STYLE_SETTINGS_CONFIG_NAVBAR_POSITION"] ?? null) == "Inside Header")) {
            echo " navbar_i_header";
        } else {
            echo " navbar_o_header";
        }
        if (($context["STYLE_SETTINGS_CONFIG_ROUNDED_AVATARS"] ?? null)) {
            echo " force_rounded_avatars";
        }
        if (($context["STYLE_SETTINGS_CONFIG_CSS_IMAGE_REPLACE"] ?? null)) {
            echo " css_icons_disabled";
        } else {
            echo " css_icons_enabled";
        }
        echo "\">

";
        // line 212
        // line 213
        echo "    <div id=\"wrap\" class=\"wrap\">
        <a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>

        <div id=\"page-header\">


                ";
        // line 219
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 219)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 220
        echo "
            \t";
        // line 221
        // line 222
        echo "
            <div class=\"headerbar";
        // line 223
        if ((($context["STYLE_SETTINGS_CONFIG_NAVBAR_POSITION"] ?? null) == "Inside Header")) {
            echo " has_navbar";
        }
        echo "\" role=\"banner\"
\t\t\t\t";
        // line 224
        if (($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] ?? null)) {
            echo " data-parallax=\"scroll\" data-image-src=\"";
            echo ($context["FORUM_HEADER"] ?? null);
            echo "\"";
        }
        echo ">
\t\t\t\t
\t\t\t\t<div class=\"forum_header\">

\t\t\t\t\t<div class=\"headerbar_overlay_container";
        // line 228
        if ((($context["STYLE_SETTINGS_CONFIG_HEADER_EFFECT"] ?? null) == "Colour Overlay")) {
            echo " headerbar_overlay_active";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_HEADER_EFFECT"] ?? null) == "Darken")) {
            echo " headerbar_overlay_darken";
        }
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"particles_container\"";
        // line 230
        if (($context["STYLE_SETTINGS_CONFIG_HEADER_PARTICLES"] ?? null)) {
            echo " id=\"particles-js\"";
        }
        echo ">
\t\t\t\t\t\t\t<!-- Headerbar Elements Start -->



\t\t\t\t\t\t\t\t<div id=\"site-description\" class=\"site-description";
        // line 235
        if ((($context["STYLE_SETTINGS_CONFIG_LOGO_POSITION"] ?? null) == "Left")) {
            echo " logo_left";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_LOGO_POSITION"] ?? null) == "Right")) {
            echo " logo_right";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t";
        // line 236
        if ((($context["STYLE_SETTINGS_CONFIG_HEADER_FORMAT"] ?? null) == "Logo Only")) {
            // line 237
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($context["FORUM_LOGO"] ?? null)) {
                // line 238
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo ($context["U_SITE_HOME"] ?? null);
                } else {
                    echo ($context["U_INDEX"] ?? null);
                }
                echo "\" title=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                }
                echo "\">";
                echo ($context["FORUM_LOGO"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 240
                echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo ($context["U_SITE_HOME"] ?? null);
                } else {
                    echo ($context["U_INDEX"] ?? null);
                }
                echo "\" title=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                }
                echo "\"><span

\t\tclass=\"site_logo\"></span></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 244
            echo "\t\t\t\t\t\t\t\t\t";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_HEADER_FORMAT"] ?? null) == "Sitename and Description Only")) {
            // line 245
            echo "\t\t\t\t\t\t\t\t\t\t<h1>";
            echo ($context["SITENAME"] ?? null);
            echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 246
            echo ($context["SITE_DESCRIPTION"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 248
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($context["FORUM_LOGO"] ?? null)) {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo ($context["U_SITE_HOME"] ?? null);
                } else {
                    echo ($context["U_INDEX"] ?? null);
                }
                echo "\" title=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                }
                echo "\">";
                echo ($context["FORUM_LOGO"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 251
                echo "\t\t\t\t\t\t\t\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo ($context["U_SITE_HOME"] ?? null);
                } else {
                    echo ($context["U_INDEX"] ?? null);
                }
                echo "\" title=\"";
                if (($context["U_SITE_HOME"] ?? null)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
                }
                echo "\"><span

\t\tclass=\"site_logo\"></span></a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 255
            echo "\t\t\t\t\t\t\t\t\t\t<h1>";
            echo ($context["SITENAME"] ?? null);
            echo "</h1>
\t\t\t\t\t\t\t\t\t\t<p>";
            // line 256
            echo ($context["SITE_DESCRIPTION"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t";
        }
        // line 258
        echo "\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t<!-- Headerbar Elements End -->
\t\t\t\t\t\t</div>
\t\t\t\t\t

\t\t\t\t</div><!-- /.forum_header -->

            </div><!-- /.headerbar -->
            ";
        // line 269
        // line 270
        echo "

        </div><!-- /#page-header -->

        <div id=\"inner-wrap\">

        ";
        // line 276
        // line 277
        echo "


\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 281
        $context["MICRODATA"] = "itemtype=\"https://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        // line 282
        echo "\t\t";
        $context["navlink_position"] = 1;
        // line 283
        echo "
\t\t";
        // line 284
        // line 285
        echo "
\t\t<li class=\"breadcrumbs\" itemscope itemtype=\"https://schema.org/BreadcrumbList\">

\t\t\t";
        // line 288
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 289
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo ($context["L_SITE_HOME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t";
        }
        // line 291
        echo "
\t\t\t";
        // line 292
        // line 293
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo ($context["MICRODATA"] ?? null);
        echo "><a itemprop=\"item\" href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo ($context["L_INDEX"] ?? null);
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

\t\t\t";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navlinks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["navlink"]) {
            // line 296
            echo "\t\t\t\t";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", true, true, false, 296)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "BREADCRUMB_NAME", [], "any", false, false, false, 296), twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 296))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "FORUM_NAME", [], "any", false, false, false, 296)));
            // line 297
            echo "\t\t\t\t";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", true, true, false, 297)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlink"], "U_BREADCRUMB", [], "any", false, false, false, 297), twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 297))) : (twig_get_attribute($this->env, $this->source, $context["navlink"], "U_VIEW_FORUM", [], "any", false, false, false, 297)));
            // line 298
            echo "
\t\t\t\t";
            // line 299
            // line 300
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo ($context["MICRODATA"] ?? null);
            if (twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 300)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlink"], "MICRODATA", [], "any", false, false, false, 300);
            }
            echo "><a itemprop=\"item\" href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
            // line 301
            // line 302
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "
\t\t\t";
        // line 304
        // line 305
        echo "\t\t</li>

\t\t";
        // line 307
        // line 308
        echo "
\t\t";
        // line 309
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 310
            echo "\t\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 311
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 312
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 316
        echo "\t</ul>


        ";
        // line 319
        // line 320
        echo "
        <a id=\"start_here\" class=\"anchor\"></a>
        <div id=\"page-body\" class=\"page-body\" role=\"main\">
            ";
        // line 323
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 324
            echo "            <div id=\"information\" class=\"rules\">
                <div class=\"inner\">
                    <strong>";
            // line 326
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
                </div>
            </div>
            ";
        }
        // line 330
        echo "
            ";
        // line 331
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_boardannouncements', '__main__'));
        $this->env->loadTemplate('@phpbb_boardannouncements/event/overall_header_content_before.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 332
        echo "
            ";
        // line 333
        if (($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null)) {
            // line 334
            echo "         \t\t<div id=\"maincontainer\">
                    <div id=\"contentwrapper\">
                        <div id=\"contentcolumn\">
                            <div class=\"innertube\">
            ";
        }
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  999 => 334,  997 => 333,  994 => 332,  989 => 331,  986 => 330,  976 => 326,  972 => 324,  970 => 323,  965 => 320,  964 => 319,  959 => 316,  952 => 312,  946 => 311,  943 => 310,  941 => 309,  938 => 308,  937 => 307,  933 => 305,  932 => 304,  929 => 303,  923 => 302,  922 => 301,  906 => 300,  905 => 299,  902 => 298,  899 => 297,  896 => 296,  892 => 295,  875 => 293,  874 => 292,  871 => 291,  858 => 289,  856 => 288,  851 => 285,  850 => 284,  847 => 283,  844 => 282,  842 => 281,  836 => 277,  835 => 276,  827 => 270,  826 => 269,  813 => 258,  808 => 256,  803 => 255,  785 => 251,  767 => 249,  764 => 248,  759 => 246,  754 => 245,  751 => 244,  733 => 240,  715 => 238,  712 => 237,  710 => 236,  702 => 235,  692 => 230,  683 => 228,  672 => 224,  666 => 223,  663 => 222,  662 => 221,  659 => 220,  647 => 219,  639 => 213,  638 => 212,  593 => 210,  588 => 208,  587 => 207,  578 => 203,  574 => 202,  571 => 201,  546 => 200,  538 => 197,  534 => 195,  526 => 193,  524 => 192,  521 => 191,  513 => 189,  511 => 188,  508 => 187,  500 => 185,  498 => 184,  490 => 178,  487 => 177,  480 => 172,  478 => 171,  470 => 168,  467 => 167,  463 => 165,  457 => 163,  455 => 162,  452 => 161,  448 => 159,  442 => 157,  440 => 156,  437 => 155,  431 => 153,  426 => 150,  424 => 149,  421 => 148,  419 => 147,  415 => 145,  408 => 140,  402 => 136,  400 => 135,  395 => 132,  383 => 124,  381 => 123,  378 => 122,  370 => 120,  359 => 117,  344 => 105,  339 => 103,  334 => 101,  329 => 99,  324 => 97,  320 => 95,  317 => 94,  315 => 93,  312 => 92,  304 => 90,  302 => 89,  295 => 87,  287 => 85,  281 => 83,  279 => 82,  275 => 81,  271 => 80,  267 => 78,  262 => 75,  257 => 72,  255 => 71,  251 => 69,  249 => 68,  245 => 66,  243 => 65,  239 => 63,  237 => 62,  233 => 60,  231 => 59,  227 => 57,  225 => 56,  221 => 54,  219 => 53,  215 => 51,  198 => 36,  196 => 35,  188 => 29,  182 => 27,  180 => 26,  177 => 25,  171 => 23,  169 => 22,  166 => 21,  163 => 19,  150 => 18,  137 => 17,  126 => 16,  115 => 15,  104 => 14,  93 => 13,  82 => 12,  80 => 11,  55 => 9,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
