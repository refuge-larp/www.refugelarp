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

/* forumlist_body.html */
class __TwigTemplate_0253cf5f91d628b651d520a232f656015c497db950c72412c6a5f85e5c05f54d extends \Twig\Template
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
        echo "<div";
        if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid")) {
            echo " class=\"forumlist_grid\"";
        } elseif ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "List (Simplified)")) {
            echo " class=\"forumlist_simple\"";
        }
        echo ">

";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 4
            echo "
\t";
            // line 5
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 5) &&  !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 5)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 5))) {
                // line 6
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 11
            echo "
\t";
            // line 12
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('phpbb_collapsiblecategories', '__main__'));
            $this->env->loadTemplate('@phpbb_collapsiblecategories/event/forumlist_body_category_header_before.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 13
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 13) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FIRST_ROW", [], "any", false, false, false, 13)) || twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_NO_CAT", [], "any", false, false, false, 13))) {
                // line 14
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 18
                // line 19
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">
\t\t\t\t\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 22);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 22);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t</div></dt>
                        ";
                // line 27
                if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) != "Grid")) {
                    // line 28
                    echo "                        \t";
                    if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "List (Simplified)")) {
                        // line 29
                        echo "                            \t<dd class=\"simpleposts\"><span class=\"icon fa-comments\"></span></dd>
                            ";
                    } else {
                        // line 31
                        echo "                                <dd class=\"topics\"><span class=\"icon fa-book\"></span></dd>
                                <dd class=\"posts\"><span class=\"icon fa-comments\"></dd>
                            ";
                    }
                    // line 34
                    echo "                            <dd class=\"lastpost\"><span class=\"icon fa-clock-o\"></span></dd>
                        ";
                }
                // line 36
                echo "\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 37
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array('phpbb_collapsiblecategories', '__main__'));
                $this->env->loadTemplate('@phpbb_collapsiblecategories/event/forumlist_body_category_header_row_append.html')->display($context);
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                // line 38
                echo "\t\t\t\t</li>
\t\t\t</ul>
            ";
                // line 40
                if (((($context["SCRIPT_NAME"] ?? null) == "index") && ($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null))) {
                    // line 41
                    echo "            \t<div class=\"collapse-trigger open\">
                \t<span class=\"icon fa-minus tooltip-left\" title=\"Collapse\"></span>
                    <span class=\"icon fa-plus tooltip-left\" title=\"Expand\"></span>
                </div>
            ";
                }
                // line 46
                echo "\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 48
            echo "\t";
            // line 49
            echo "
\t";
            // line 50
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 50)) {
                // line 51
                echo "\t\t";
                // line 52
                echo "\t\t<li class=\"row";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "AVATAR_IMG", [], "any", false, false, false, 52)) {
                    echo " has_last_post_avatar";
                }
                if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 52)) {
                    echo " row_no_subject";
                }
                echo "\">
\t\t\t";
                // line 53
                // line 54
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 54) && (($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid"))) {
                    // line 55
                    echo "                <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 55);
                    echo "\" class=\"forumlist_grid_forum_image\" style=\"background-image: url('";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE_SRC", [], "any", false, false, false, 55);
                    echo "');\"></a>
            ";
                }
                // line 57
                echo "\t\t\t<dl class=\"row-item ";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMG_STYLE", [], "any", false, false, false, 57);
                echo "\">
\t\t\t\t<dt title=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_FOLDER_IMG_ALT", [], "any", false, false, false, 58);
                echo "\">
\t\t\t\t\t";
                // line 59
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 59)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 59);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 60
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 61
                if ((($context["S_ENABLE_FEEDS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FEED_ENABLED", [], "any", false, false, false, 61))) {
                    // line 62
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 63
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 63);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 63);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 64
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 64);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 68
                echo "                        ";
                // line 69
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 69) && (($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) != "Grid"))) {
                    echo "<span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 69);
                    echo "</span>";
                }
                // line 70
                echo "                        ";
                // line 71
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 71);
                echo "\" class=\"forumtitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 71);
                echo "</a>
\t\t\t\t\t\t";
                // line 72
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 72)) {
                    echo "<br /><span class=\"forum_description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 72);
                    echo "</span>";
                }
                // line 73
                echo "\t\t\t\t\t\t";
                if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid")) {
                    // line 74
                    echo "                            <div class=\"forumlist_grid_block_stats\">
                            \t";
                    // line 75
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 75)) {
                        // line 76
                        echo "                                    ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 76);
                        echo "</strong>
                                    ";
                    } else {
                        // line 78
                        echo "                            \t";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 78);
                        echo "</strong> &nbsp; ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 78);
                        echo "</strong>";
                    }
                    // line 79
                    echo "                            </div>
\t\t\t\t\t\t";
                } else {
                    // line 81
                    echo " \t\t\t\t\t\t\t\t";
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 82
                        echo "                            <div class=\"responsive-show responsive_forumlist_row_stats\" style=\"display: none;\">
                                ";
                        // line 83
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 83)) {
                            // line 84
                            echo "                                    ";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                            echo " <strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 84);
                            echo "</strong>
                                ";
                        } elseif (( !twig_get_attribute($this->env, $this->source,                         // line 85
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 85) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 85))) {
                            // line 86
                            echo "                                    ";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                            echo " <strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 86);
                            echo "</strong> &nbsp;&nbsp;&nbsp; ";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                            echo " <strong>";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 86);
                            echo "</strong>
                                ";
                        }
                        // line 88
                        echo "                            </div>
                            ";
                    }
                    // line 90
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 90)) {
                        // line 91
                        echo "                                <br /><span class=\"forumlist_mods\"><strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_MODERATOR_STR", [], "any", false, false, false, 91);
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo "</strong> ";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "MODERATORS", [], "any", false, false, false, 91);
                        echo "</span>
                            ";
                    }
                    // line 93
                    echo "                            ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 93)) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LIST_SUBFORUMS", [], "any", false, false, false, 93))) {
                        // line 94
                        echo "                                ";
                        // line 95
                        echo "                                <div style=\"clear: both;\"></div>
                                <br /><strong>";
                        // line 96
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "L_SUBFORUM_STR", [], "any", false, false, false, 96);
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo "</strong>

                                \t<div class=\"sub-forumlist\">
                                \t\t";
                        // line 99
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 99));
                        foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                            // line 100
                            echo "                                    \t<li>
                                        <a href=\"";
                            // line 101
                            echo twig_get_attribute($this->env, $this->source, $context["subforum"], "U_SUBFORUM", [], "any", false, false, false, 101);
                            echo "\" class=\"subforum";
                            if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 101)) {
                                echo " unread";
                            } else {
                                echo " read";
                            }
                            echo "\" title=\"";
                            if (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 101)) {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("UNREAD_POSTS");
                            } else {
                                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_UNREAD_POSTS");
                            }
                            echo "\">
                                        <i class=\"icon notification_unread ";
                            // line 102
                            if (twig_get_attribute($this->env, $this->source, $context["subforum"], "IS_LINK", [], "any", false, false, false, 102)) {
                                echo "fa-external-link";
                            } elseif (twig_get_attribute($this->env, $this->source, $context["subforum"], "S_UNREAD", [], "any", false, false, false, 102)) {
                                echo "fa-circle";
                            } else {
                                echo "fa-circle-o";
                            }
                            echo " fa-fw icon-md\" aria-hidden=\"true\"></i> ";
                            echo twig_get_attribute($this->env, $this->source, $context["subforum"], "SUBFORUM_NAME", [], "any", false, false, false, 102);
                            echo "
                                    </a>
                                    </li>
                                \t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 106
                        echo "                                \t</div>
                                ";
                        // line 107
                        // line 108
                        echo "                            ";
                    }
                    // line 109
                    echo "                        ";
                }
                echo "<!-- /if not: Grid -->
\t\t\t\t\t</div>
\t\t\t\t</dt>
                ";
                // line 112
                if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) != "Grid")) {
                    // line 113
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 113)) {
                        // line 114
                        echo "                        <dd class=\"redirect\"><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REDIRECTS");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "CLICKS", [], "any", false, false, false, 114);
                        echo "</span></dd>
                    ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 115
$context["forumrow"], "S_IS_LINK", [], "any", false, false, false, 115)) {
                        // line 116
                        echo "                    \t";
                        if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "List (Simplified)")) {
                            // line 117
                            echo "                        \t<dd class=\"simpleposts\"><span>";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 117);
                            echo "</span>";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                            echo "</dd>
                        ";
                        } else {
                            // line 119
                            echo "                            <dd class=\"topics\">";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 119);
                            echo " <dfn>";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS");
                            echo "</dfn></dd>
                            <dd class=\"posts\">";
                            // line 120
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "POSTS", [], "any", false, false, false, 120);
                            echo " <dfn>";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                            echo "</dfn></dd>
                        ";
                        }
                        // line 122
                        echo "                        <dd class=\"lastpost\">
                            <span>
                                ";
                        // line 124
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 124)) {
                            // line 125
                            echo "                                    <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 125);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_UNAPPROVED");
                            echo "\">
                                        <i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 126
                            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPICS_UNAPPROVED");
                            echo "</span>
                                    </a>
                                ";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 128
$context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 128)) {
                            // line 129
                            echo "                                    <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_POSTS", [], "any", false, false, false, 129);
                            echo "\" title=\"";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED_FORUM");
                            echo "\">
                                        <i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 130
                            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_UNAPPROVED_FORUM");
                            echo "</span>
                                    </a>
                                ";
                        }
                        // line 133
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 133)) {
                            // line 134
                            echo "                                    <dfn>";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_POST");
                            echo "</dfn>
                                    ";
                            // line 135
                            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 135)) {
                                // line 136
                                echo "                                        ";
                                // line 137
                                echo "                                        <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 137);
                                echo "\" title=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT", [], "any", false, false, false, 137);
                                echo "\" class=\"lastsubject\">";
                                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 137);
                                echo "</a> <br />
                                    ";
                            }
                            // line 139
                            echo "                                    \t\t\t\t\t\t\t\t\t";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 139);
                            // line 140
                            if ( !($context["S_IS_BOT"] ?? null)) {
                                // line 141
                                echo "                                        <a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 141);
                                echo "\" title=\"";
                                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                                echo "\">
                                            <i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                                // line 142
                                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                                echo "</span>
                                        </a>
                                    ";
                            }
                            // line 145
                            echo "                                    <br /><time datetime=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 145);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 145);
                            echo "</time>
                                ";
                        } else {
                            // line 147
                            echo "\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_UNAPPROVED_TOPICS", [], "any", false, false, false, 147)) {
                                // line 148
                                echo "\t\t\t\t\t\t\t\t";
                                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_UNAPPROVED_FORUM", twig_get_attribute($this->env, $this->source, $context["forumrow"], "TOPICS", [], "any", false, false, false, 148));
                                echo "
\t\t\t\t\t\t\t";
                            } else {
                                // line 150
                                echo "\t\t\t\t\t\t\t\t";
                                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_POSTS");
                                echo "
\t\t\t\t\t\t\t";
                            }
                            // line 152
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 153
                        echo "                            </span>
                        </dd>
                    ";
                    } else {
                        // line 156
                        echo "                        <dd>&nbsp;</dd>
                    ";
                    }
                    // line 158
                    echo "                ";
                }
                echo "<!-- /if not: Grid -->
\t\t\t</dl>
\t\t\t";
                // line 160
                // line 161
                echo "\t\t</li>
\t\t";
                // line 162
                // line 163
                echo "\t";
            }
            // line 164
            echo "
\t";
            // line 165
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_LAST_ROW", [], "any", false, false, false, 165)) {
                // line 166
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 170
                // line 171
                echo "\t";
            }
            // line 172
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 174
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 176
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 180,  586 => 176,  582 => 174,  576 => 172,  573 => 171,  572 => 170,  566 => 166,  564 => 165,  561 => 164,  558 => 163,  557 => 162,  554 => 161,  553 => 160,  547 => 158,  543 => 156,  538 => 153,  535 => 152,  529 => 150,  523 => 148,  520 => 147,  512 => 145,  506 => 142,  499 => 141,  497 => 140,  492 => 139,  482 => 137,  480 => 136,  478 => 135,  473 => 134,  470 => 133,  464 => 130,  457 => 129,  455 => 128,  450 => 126,  443 => 125,  441 => 124,  437 => 122,  430 => 120,  423 => 119,  415 => 117,  412 => 116,  410 => 115,  402 => 114,  399 => 113,  397 => 112,  390 => 109,  387 => 108,  386 => 107,  383 => 106,  365 => 102,  349 => 101,  346 => 100,  342 => 99,  335 => 96,  332 => 95,  330 => 94,  327 => 93,  318 => 91,  315 => 90,  311 => 88,  297 => 86,  295 => 85,  287 => 84,  285 => 83,  282 => 82,  279 => 81,  275 => 79,  262 => 78,  253 => 76,  251 => 75,  248 => 74,  245 => 73,  239 => 72,  232 => 71,  230 => 70,  223 => 69,  221 => 68,  212 => 64,  202 => 63,  199 => 62,  197 => 61,  194 => 60,  188 => 59,  184 => 58,  179 => 57,  171 => 55,  168 => 54,  167 => 53,  157 => 52,  155 => 51,  153 => 50,  150 => 49,  148 => 48,  144 => 46,  137 => 41,  135 => 40,  131 => 38,  126 => 37,  123 => 36,  119 => 34,  114 => 31,  110 => 29,  107 => 28,  105 => 27,  102 => 26,  96 => 24,  88 => 22,  86 => 21,  82 => 19,  81 => 18,  75 => 14,  72 => 13,  67 => 12,  64 => 11,  57 => 6,  55 => 5,  52 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
