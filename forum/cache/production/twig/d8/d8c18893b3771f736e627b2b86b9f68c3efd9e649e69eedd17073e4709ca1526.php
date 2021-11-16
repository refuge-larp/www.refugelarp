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

/* memberlist_view.html */
class __TwigTemplate_c5c19f0bfaab056de28ae09c0a7f0b892cd8de38b7f9a70dbcd1f0bdf3f42208 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"memberlist-title\">";
        // line 3
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>

<div class=\"viewtopic_wrapper\">

";
        // line 7
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbmodders_banhammer', '__main__'));
        $this->env->loadTemplate('@phpbbmodders_banhammer/event/memberlist_view_content_prepend.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 8
        echo "
<form method=\"post\" action=\"";
        // line 9
        echo ($context["S_PROFILE_ACTION"] ?? null);
        echo "\" id=\"viewprofile\">
<div class=\"panel bg1";
        // line 10
        if (($context["S_ONLINE"] ?? null)) {
            echo " online";
        }
        echo "\">
\t<div class=\"inner\">

\t";
        // line 13
        if (($context["AVATAR_IMG"] ?? null)) {
            // line 14
            echo "\t\t<dl class=\"left-box\">
\t\t\t<dt class=\"profile-avatar\">";
            // line 15
            echo ($context["AVATAR_IMG"] ?? null);
            echo "</dt>
\t\t\t";
            // line 16
            // line 17
            echo "\t\t\t";
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 18
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 19
            echo "\t\t\t";
            // line 20
            echo "\t\t</dl>
\t";
        }
        // line 22
        echo "
\t<dl class=\"left-box details profile-details\">
\t\t<dt>";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt>
\t\t<dd>\t\t\t";
        // line 25
        if (($context["USER_COLOR"] ?? null)) {
            echo "<span style=\"color: ";
            echo ($context["USER_COLOR"] ?? null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo ($context["USERNAME"] ?? null);
        echo "</span>";
        // line 26
        if (($context["U_EDIT_SELF"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_EDIT_SELF"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 27
        echo "\t\t\t";
        if (($context["U_USER_ADMIN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_ADMIN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 28
        echo "\t\t\t";
        if (($context["U_USER_BAN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_BAN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 29
        echo "\t\t\t";
        if (($context["U_SWITCH_PERMISSIONS"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_SWITCH_PERMISSIONS"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 30
        echo "\t\t</dd>
\t\t";
        // line 31
        if ( !($context["AVATAR_IMG"] ?? null)) {
            // line 32
            echo "\t\t\t";
            // line 33
            echo "\t\t\t";
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dt>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt> <dd>";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 34
            echo "\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dt>";
                if (($context["RANK_TITLE"] ?? null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                }
                echo "</dt> <dd>";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 35
            echo "\t\t\t";
            // line 36
            echo "\t\t";
        }
        // line 37
        echo "\t\t";
        if (($context["S_USER_INACTIVE"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_IS_INACTIVE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_INACTIVE_REASON"] ?? null);
            echo "</dd>";
        }
        // line 38
        echo "\t\t";
        if ((($context["AGE"] ?? null) !== "")) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AGE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["AGE"] ?? null);
            echo "</dd>";
        }
        // line 39
        echo "\t\t";
        if (($context["S_GROUP_OPTIONS"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERGROUPS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            echo ($context["S_GROUP_OPTIONS"] ?? null);
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 40
        echo "\t\t";
        // line 41
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 42
            echo "\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 42)) {
                // line 43
                echo "\t\t\t\t<dt>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 43);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt> <dd>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 43);
                echo "</dd>
\t\t\t";
            }
            // line 45
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t";
        // line 47
        echo "\t\t";
        // line 48
        echo "\t\t";
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ($context["S_ZEBRA"] ?? null))) {
            // line 49
            echo "\t\t\t";
            if (($context["U_REMOVE_FRIEND"] ?? null)) {
                // line 50
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FRIEND"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t";
            } elseif (            // line 51
($context["U_REMOVE_FOE"] ?? null)) {
                // line 52
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FOE"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t";
                if (($context["U_ADD_FRIEND"] ?? null)) {
                    // line 55
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FRIEND"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t";
                if (($context["U_ADD_FOE"] ?? null)) {
                    // line 58
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FOE"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 60
                echo "\t\t\t";
            }
            // line 61
            echo "\t\t";
        }
        // line 62
        echo "\t\t";
        // line 63
        echo "\t</dl>

\t</div>
</div>

";
        // line 68
        // line 69
        echo "<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<div class=\"column1\">
\t\t<h3>";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_USER");
        echo "</h3>

\t\t<dl class=\"details\">
\t\t";
        // line 76
        if (($context["U_EMAIL"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_EMAIL"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 77
        echo "\t\t";
        if (($context["U_PM"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_PM"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 78
        echo "\t\t";
        if ((($context["U_JABBER"] ?? null) && ($context["S_JABBER_ENABLED"] ?? null))) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_JABBER"] ?? null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif (($context["USER_JABBER"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_JABBER"] ?? null);
            echo "</dd>";
        }
        // line 79
        echo "\t\t";
        // line 80
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 81
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 81)) {
                // line 82
                echo "\t\t\t\t<dt>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 82);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt>
\t\t\t\t";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "\t\t\t\t\t<dd><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 84);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_DESC", [], "any", false, false, false, 84);
                    echo "</a></dd>
\t\t\t\t";
                } else {
                    // line 86
                    echo "\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 86);
                    echo "</dd>
\t\t\t\t";
                }
                // line 88
                echo "\t\t\t";
            }
            // line 89
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t";
        // line 91
        echo "\t\t";
        if (($context["S_PROFILE_FIELD1"] ?? null)) {
            // line 92
            echo "\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dt>";
            // line 93
            echo ($context["PROFILE_FIELD1_NAME"] ?? null);
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["PROFILE_FIELD1_VALUE"] ?? null);
            echo "</dd>
\t\t";
        }
        // line 95
        echo "\t\t</dl>
\t</div>

\t<div class=\"column2\">
\t\t<h3>";
        // line 99
        echo $this->extensions['phpbb\template\twig\extension']->lang("USER_FORUM");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t\t";
        // line 101
        // line 102
        echo "\t\t\t<dt>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["JOINED"] ?? null);
        echo "</dd>
\t\t\t<dt>";
        // line 103
        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["LAST_ACTIVE"] ?? null);
        echo "</dd>
\t\t\t";
        // line 104
        if (($context["S_WARNINGS"] ?? null)) {
            // line 105
            echo "\t\t\t<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " </dt>
\t\t\t<dd><strong>";
            // line 106
            echo ($context["WARNINGS"] ?? null);
            echo "</strong>";
            if ((($context["U_NOTES"] ?? null) || ($context["U_WARN"] ?? null))) {
                echo " [ ";
                if (($context["U_NOTES"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_NOTES"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if (($context["U_WARN"] ?? null)) {
                    if (($context["U_NOTES"] ?? null)) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    echo ($context["U_WARN"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t";
        }
        // line 108
        echo "\t\t\t<dt>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>";
        // line 109
        echo ($context["POSTS"] ?? null);
        echo " ";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "| <strong><a href=\"";
            echo ($context["U_SEARCH_USER"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 110
        echo "\t\t\t\t\t";
        if (($context["POSTS_PCT"] ?? null)) {
            echo "<br />(";
            echo ($context["POSTS_PCT"] ?? null);
            echo " / ";
            echo ($context["POSTS_DAY"] ?? null);
            echo ")";
        }
        // line 111
        echo "\t\t\t\t\t";
        if ((($context["POSTS_IN_QUEUE"] ?? null) && ($context["U_MCP_QUEUE"] ?? null))) {
            echo "<br />(<a href=\"";
            echo ($context["U_MCP_QUEUE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif (($context["POSTS_IN_QUEUE"] ?? null)) {
            echo "<br />(";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 112
        echo "\t\t\t\t</dd>
\t\t\t";
        // line 113
        if ((($context["S_SHOW_ACTIVITY"] ?? null) && ($context["POSTS"] ?? null))) {
            // line 114
            echo "\t\t\t\t<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_FORUM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_FORUM"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_FORUM"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_FORUM"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_FORUM_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_FORUM_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t<dt>";
            // line 115
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_TOPIC");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_TOPIC"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_TOPIC"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_TOPIC"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_TOPIC_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_TOPIC_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t";
        }
        // line 117
        echo "\t\t\t";
        // line 118
        echo "\t\t</dl>
\t</div>

\t</div>
</div>
";
        // line 123
        // line 124
        echo "
";
        // line 125
        if (($context["SIGNATURE"] ?? null)) {
            // line 126
            echo "<div class=\"panel bg1\">
\t<div class=\"inner\">

\t\t<h3>";
            // line 129
            echo $this->extensions['phpbb\template\twig\extension']->lang("SIGNATURE");
            echo "</h3>

\t\t<div class=\"postbody\"><div class=\"signature standalone\">";
            // line 131
            echo ($context["SIGNATURE"] ?? null);
            echo "</div></div>

\t</div>
</div>
";
        }
        // line 136
        echo "
</form>

";
        // line 139
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('stevotvr_flair', '__main__'));
        $this->env->loadTemplate('@stevotvr_flair/event/memberlist_view_content_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 140
        echo "
</div>

";
        // line 143
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 143)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 144
        echo "
";
        // line 145
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 145)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 145,  638 => 144,  626 => 143,  621 => 140,  616 => 139,  611 => 136,  603 => 131,  598 => 129,  593 => 126,  591 => 125,  588 => 124,  587 => 123,  580 => 118,  578 => 117,  558 => 115,  538 => 114,  536 => 113,  533 => 112,  520 => 111,  511 => 110,  501 => 109,  495 => 108,  467 => 106,  461 => 105,  459 => 104,  452 => 103,  444 => 102,  443 => 101,  438 => 99,  432 => 95,  424 => 93,  421 => 92,  418 => 91,  416 => 90,  410 => 89,  407 => 88,  401 => 86,  393 => 84,  391 => 83,  385 => 82,  382 => 81,  377 => 80,  375 => 79,  356 => 78,  344 => 77,  333 => 76,  327 => 73,  321 => 69,  320 => 68,  313 => 63,  311 => 62,  308 => 61,  305 => 60,  297 => 58,  294 => 57,  286 => 55,  283 => 54,  275 => 52,  273 => 51,  266 => 50,  263 => 49,  260 => 48,  258 => 47,  256 => 46,  250 => 45,  241 => 43,  238 => 42,  233 => 41,  231 => 40,  219 => 39,  209 => 38,  199 => 37,  196 => 36,  194 => 35,  180 => 34,  170 => 33,  168 => 32,  166 => 31,  163 => 30,  154 => 29,  145 => 28,  136 => 27,  128 => 26,  118 => 25,  113 => 24,  109 => 22,  105 => 20,  103 => 19,  96 => 18,  89 => 17,  88 => 16,  84 => 15,  81 => 14,  79 => 13,  71 => 10,  67 => 9,  64 => 8,  59 => 7,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_view.html", "");
    }
}
