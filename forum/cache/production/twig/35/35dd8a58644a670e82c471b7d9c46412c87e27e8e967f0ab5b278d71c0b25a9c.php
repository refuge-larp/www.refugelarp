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

/* mcp_post.html */
class __TwigTemplate_11fba2ba56f4d8e2054f0b1d50c957166ae5883b05d2e1a8edf698c34ca5a898 extends \Twig\Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (($context["S_MCP_REPORT"] ?? null)) {
            // line 4
            echo "\t";
            if (($context["S_PM"] ?? null)) {
                // line 5
                echo "\t<h2>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PM_REPORT_DETAILS");
                echo "</h2>
\t";
            } else {
                // line 7
                echo "\t<h2>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_DETAILS");
                echo "</h2>
\t";
            }
            // line 9
            echo "
\t<div id=\"report\" class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\">
\t\t\t<h3>";
            // line 14
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            echo ($context["REPORT_REASON_TITLE"] ?? null);
            echo "</h3>
\t\t\t<p class=\"author\">";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED");
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo ($context["REPORTER_FULL"] ?? null);
            echo " &laquo; ";
            echo ($context["REPORT_DATE"] ?? null);
            echo "</p>
\t\t";
            // line 16
            if (($context["S_REPORT_CLOSED"] ?? null)) {
                // line 17
                echo "\t\t\t<p class=\"post-notice reported\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_CLOSED");
                echo "</p>
\t\t";
            }
            // line 19
            echo "\t\t\t<div class=\"content\">
\t\t\t";
            // line 20
            if (($context["REPORT_TEXT"] ?? null)) {
                // line 21
                echo "\t\t\t\t";
                echo ($context["REPORT_TEXT"] ?? null);
                echo "
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t";
                echo ($context["REPORT_REASON_DESCRIPTION"] ?? null);
                echo "
\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t</div>

\t\t</div>
\t</div>

\t<form method=\"post\" id=\"mcp_report\" action=\"";
            // line 31
            echo ($context["S_CLOSE_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 34
            // line 35
            echo "\t\t";
            if ( !($context["S_REPORT_CLOSED"] ?? null)) {
                // line 36
                echo "\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CLOSE_REPORT");
                echo "\" name=\"action[close]\" /> &nbsp;
\t\t";
            }
            // line 38
            echo "\t\t<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_REPORT");
            echo "\" name=\"action[delete]\" />
\t\t";
            // line 39
            // line 40
            echo "\t\t<input type=\"hidden\" name=\"report_id_list[]\" value=\"";
            echo ($context["REPORT_ID"] ?? null);
            echo "\" />
\t\t";
            // line 41
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 46
            echo "\t<h2>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
            echo "</h2>
";
        }
        // line 48
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"postbody\">
\t\t<h3><a href=\"";
        // line 53
        echo ($context["U_VIEW_POST"] ?? null);
        echo "\">";
        echo ($context["POST_SUBJECT"] ?? null);
        echo "</a></h3>

\t\t<ul class=\"post-buttons\">
\t\t\t<li id=\"expand\">
\t\t\t\t<a href=\"#post_details\" onclick=\"viewableArea(getElementById('post_details'), true); var rev_text = getElementById('expand').getElementsByTagName('a').item(0).firstChild; if (rev_text.data.trim() == '";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data.trim() == '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "';} return false;\">
\t\t\t\t\t";
        // line 58
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW");
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 61
        if (($context["U_EDIT"] ?? null)) {
            // line 62
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 63
            echo ($context["U_EDIT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
            echo "\" class=\"button\">
\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 64
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 68
        echo "\t\t</ul>

\t\t";
        // line 70
        if (($context["S_PM"] ?? null)) {
            // line 71
            echo "\t\t<p class=\"author\">
\t\t\t<strong>";
            // line 72
            echo $this->extensions['phpbb\template\twig\extension']->lang("SENT_AT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["POST_DATE"] ?? null);
            echo "
\t\t\t<br /><strong>";
            // line 73
            echo $this->extensions['phpbb\template\twig\extension']->lang("PM_FROM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["POST_AUTHOR_FULL"] ?? null);
            echo "\t\t\t";
            if (($context["S_TO_RECIPIENT"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TO");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_recipient", [], "any", false, false, false, 73));
                foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 73)) {
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME_FULL", [], "any", false, false, false, 73);
                    } else {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "U_VIEW", [], "any", false, false, false, 73);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 73)) {
                            echo " style=\"color:";
                            echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "COLOUR", [], "any", false, false, false, 73);
                            echo ";\"";
                        }
                        echo "><strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["to_recipient"], "NAME", [], "any", false, false, false, 73);
                        echo "</strong></a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 74
            echo "\t\t\t";
            if (($context["S_BCC_RECIPIENT"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BCC");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bcc_recipient", [], "any", false, false, false, 74));
                foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 74)) {
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME_FULL", [], "any", false, false, false, 74);
                    } else {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "U_VIEW", [], "any", false, false, false, 74);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 74)) {
                            echo " style=\"color:";
                            echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "COLOUR", [], "any", false, false, false, 74);
                            echo ";\"";
                        }
                        echo "><strong>";
                        echo twig_get_attribute($this->env, $this->source, $context["bcc_recipient"], "NAME", [], "any", false, false, false, 74);
                        echo "</strong></a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 75
            echo "\t\t</p>
\t\t";
        } else {
            // line 77
            echo "\t\t<p class=\"author\"><span><i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            echo ($context["MINI_POST_IMG"] ?? null);
            echo "</span></span> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTED");
            echo " ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo ($context["POST_AUTHOR_FULL"] ?? null);
            echo " &raquo; ";
            echo ($context["POST_DATE"] ?? null);
            echo "</p>
\t\t";
        }
        // line 79
        echo "
\t\t";
        // line 80
        if (($context["S_POST_UNAPPROVED"] ?? null)) {
            // line 81
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo ($context["U_APPROVE_ACTION"] ?? null);
            echo "\">

\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t<input class=\"button2 button_disapprove\" type=\"submit\" value=\"";
            // line 84
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
            echo "\" name=\"action[disapprove]\" /> &nbsp;
\t\t\t\t<input class=\"button1 button_approve\" type=\"submit\" value=\"";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
            echo "\" name=\"action[approve]\" />
\t\t\t\t";
            // line 86
            if ( !($context["S_FIRST_POST"] ?? null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"unapproved_posts\" />";
            }
            // line 87
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo ($context["POST_ID"] ?? null);
            echo "\" />
\t\t\t\t";
            // line 88
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        } elseif (        // line 91
($context["S_POST_DELETED"] ?? null)) {
            // line 92
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo ($context["U_APPROVE_ACTION"] ?? null);
            echo "\">

\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t";
            // line 95
            if (($context["S_CAN_DELETE_POST"] ?? null)) {
                echo "<input class=\"button2 button_disapprove\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                echo "\" name=\"action[delete]\" /> &nbsp;";
            }
            // line 96
            echo "\t\t\t\t<input class=\"button1 button_approve\" type=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
            echo "\" name=\"action[restore]\" />
\t\t\t\t";
            // line 97
            if ( !($context["S_FIRST_POST"] ?? null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"deleted_posts\" />";
            }
            // line 98
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo ($context["POST_ID"] ?? null);
            echo "\" />
\t\t\t\t";
            // line 99
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        }
        // line 103
        echo "
\t\t";
        // line 104
        if ((($context["S_POST_REPORTED"] ?? null) &&  !($context["S_MCP_REPORT"] ?? null))) {
            // line 105
            echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 106
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REPORTED");
            echo "</span> <a href=\"";
            echo ($context["U_MCP_REPORT"] ?? null);
            echo "\"><strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPORTED");
            echo "</strong></a>
\t\t\t</p>
\t\t";
        }
        // line 109
        echo "
\t\t";
        // line 110
        // line 111
        echo "
\t\t<div id=\"post_details\" class=\"content post_details\">
\t\t\t";
        // line 113
        echo ($context["POST_PREVIEW"] ?? null);
        echo "
\t\t</div>

\t\t";
        // line 116
        // line 117
        echo "
\t\t";
        // line 118
        if (($context["S_HAS_ATTACHMENTS"] ?? null)) {
            // line 119
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
            // line 120
            echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t\t";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "attachment", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 122
                echo "\t\t\t\t\t<dd>";
                echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 122);
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t\t\t</dl>
\t\t";
        }
        // line 126
        echo "
\t\t";
        // line 127
        if ((($context["DELETED_MESSAGE"] ?? null) || ($context["DELETE_REASON"] ?? null))) {
            // line 128
            echo "\t\t\t<div class=\"notice\">
\t\t\t\t";
            // line 129
            echo ($context["DELETED_MESSAGE"] ?? null);
            echo "
\t\t\t\t";
            // line 130
            if (($context["DELETE_REASON"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> <em>";
                echo ($context["DELETE_REASON"] ?? null);
                echo "</em>";
            }
            // line 131
            echo "\t\t\t</div>
\t\t";
        }
        // line 133
        echo "
\t\t";
        // line 134
        if (($context["SIGNATURE"] ?? null)) {
            // line 135
            echo "\t\t\t<div id=\"sig";
            echo ($context["POST_ID"] ?? null);
            echo "\" class=\"signature\">";
            echo ($context["SIGNATURE"] ?? null);
            echo "</div>
\t\t";
        }
        // line 137
        echo "
\t\t";
        // line 138
        if ((($context["S_MCP_REPORT"] ?? null) && ($context["S_CAN_VIEWIP"] ?? null))) {
            // line 139
            echo "\t\t\t<hr />
\t\t\t<div>";
            // line 140
            if (($context["S_PM"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("THIS_PM_IP");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("THIS_POST_IP");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " ";
            if (($context["U_WHOIS"] ?? null)) {
                // line 141
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_WHOIS"] ?? null);
                echo "\">";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IPADDR"] ?? null);
                } else {
                    echo ($context["POST_IP"] ?? null);
                }
                echo "</a> (";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IP"] ?? null);
                } else {
                    echo "<a href=\"";
                    echo ($context["U_LOOKUP_IP"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                    echo "</a>";
                }
                echo ")
\t\t\t";
            } else {
                // line 143
                echo "\t\t\t\t";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IPADDR"] ?? null);
                    echo " (";
                    echo ($context["POST_IP"] ?? null);
                    echo ")";
                } else {
                    echo ($context["POST_IP"] ?? null);
                    if (($context["U_LOOKUP_IP"] ?? null)) {
                        echo " (<a href=\"";
                        echo ($context["U_LOOKUP_IP"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                }
                // line 144
                echo "\t\t\t";
            }
            echo "</div>
\t\t";
        }
        // line 146
        echo "
\t</div>

\t</div>
</div>

";
        // line 152
        if ((((($context["S_CAN_LOCK_POST"] ?? null) || ($context["S_CAN_DELETE_POST"] ?? null)) || ($context["S_CAN_CHGPOSTER"] ?? null)) || ($context["S_MCP_POST_ADDITIONAL_OPTS"] ?? null))) {
            // line 153
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 156
            echo $this->extensions['phpbb\template\twig\extension']->lang("MOD_OPTIONS");
            echo "</h3>
\t\t";
            // line 157
            if (($context["S_CAN_CHGPOSTER"] ?? null)) {
                // line 158
                echo "\t\t\t<form method=\"post\" id=\"mcp_chgposter\" action=\"";
                echo ($context["U_POST_ACTION"] ?? null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 162
                echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_POSTER");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 163
                if (($context["S_USER_SELECT"] ?? null)) {
                    echo "<dd><select name=\"u\">";
                    echo ($context["S_USER_SELECT"] ?? null);
                    echo "</select> <input type=\"submit\" class=\"button2\" name=\"action[chgposter_ip]\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM");
                    echo "\" /></dd>";
                }
                // line 164
                echo "\t\t\t\t<dd style=\"margin-top:3px;\">
\t\t\t\t\t<input class=\"inputbox autowidth\" type=\"text\" name=\"username\" value=\"\" />
\t\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[chgposter]\" value=\"";
                // line 166
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM");
                echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t<span>[ <a href=\"";
                // line 168
                echo ($context["U_FIND_USERNAME"] ?? null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
                echo "</a> ]</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 171
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 175
            echo "
\t\t";
            // line 176
            // line 177
            echo "
\t\t";
            // line 178
            if ((($context["S_CAN_LOCK_POST"] ?? null) || ($context["S_CAN_DELETE_POST"] ?? null))) {
                // line 179
                echo "\t\t\t<form method=\"post\" id=\"mcp\" action=\"";
                echo ($context["U_MCP_ACTION"] ?? null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 183
                echo $this->extensions['phpbb\template\twig\extension']->lang("MOD_OPTIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"action\">
\t\t\t\t\t";
                // line 185
                if (($context["S_CAN_LOCK_POST"] ?? null)) {
                    if (($context["S_POST_LOCKED"] ?? null)) {
                        echo "<option value=\"unlock_post\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("UNLOCK_POST");
                        echo " [";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("UNLOCK_POST_EXPLAIN");
                        echo "]</option>";
                    } else {
                        echo "<option value=\"lock_post\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST");
                        echo " [";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST_EXPLAIN");
                        echo "]</option>";
                    }
                }
                // line 186
                echo "\t\t\t\t\t";
                if (($context["S_CAN_DELETE_POST"] ?? null)) {
                    echo "<option value=\"delete_post\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                    echo "</option>";
                }
                // line 187
                echo "\t\t\t\t\t</select> <input class=\"button2\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 190
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 194
            echo "
\t\t</div>
\t</div>
";
        }
        // line 198
        echo "

";
        // line 200
        if (((($context["S_MCP_QUEUE"] ?? null) || ($context["S_MCP_REPORT"] ?? null)) || ($context["RETURN_TOPIC"] ?? null))) {
            // line 201
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<p>";
            // line 204
            if (($context["S_MCP_QUEUE"] ?? null)) {
                echo ($context["RETURN_QUEUE"] ?? null);
                echo " | ";
                echo ($context["RETURN_TOPIC_SIMPLE"] ?? null);
                echo " | ";
                echo ($context["RETURN_POST"] ?? null);
            } elseif (($context["S_MCP_REPORT"] ?? null)) {
                echo ($context["RETURN_REPORTS"] ?? null);
                if ( !($context["S_PM"] ?? null)) {
                    echo " | <a href=\"";
                    echo ($context["U_VIEW_POST"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_POST");
                    echo "</a> | <a href=\"";
                    echo ($context["U_VIEW_TOPIC"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_TOPIC");
                    echo "</a> | <a href=\"";
                    echo ($context["U_VIEW_FORUM"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_FORUM");
                    echo "</a>";
                }
            } else {
                echo ($context["RETURN_TOPIC"] ?? null);
            }
            echo "</p>

\t\t</div>
\t</div>
";
        }
        // line 209
        echo "
";
        // line 210
        if (($context["S_MCP_QUEUE"] ?? null)) {
        } else {
            // line 212
            echo "
\t";
            // line 213
            if (($context["S_SHOW_USER_NOTES"] ?? null)) {
                // line 214
                echo "\t\t<div class=\"panel\" id=\"usernotes\">
\t\t\t<div class=\"inner\">

\t\t\t<form method=\"post\" id=\"mcp_notes\" action=\"";
                // line 217
                echo ($context["U_POST_ACTION"] ?? null);
                echo "\">

\t\t\t";
                // line 219
                if (($context["S_USER_NOTES"] ?? null)) {
                    // line 220
                    echo "\t\t\t\t<h3>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEEDBACK");
                    echo "</h3>

\t\t\t\t";
                    // line 222
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "usernotes", [], "any", false, false, false, 222));
                    foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
                        // line 223
                        echo "\t\t\t\t\t<span class=\"small\"><strong>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED_BY");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "REPORT_BY", [], "any", false, false, false, 223);
                        echo " &laquo; ";
                        echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "REPORT_AT", [], "any", false, false, false, 223);
                        echo "</strong></span>
\t\t\t\t\t";
                        // line 224
                        if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                            echo "<div class=\"right-box\"><input type=\"checkbox\" name=\"marknote[]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "ID", [], "any", false, false, false, 224);
                            echo "\" /></div>";
                        }
                        // line 225
                        echo "\t\t\t\t\t<div class=\"postbody\">";
                        echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "ACTION", [], "any", false, false, false, 225);
                        echo "</div>

\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 229
                    echo "
\t\t\t\t";
                    // line 230
                    if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                        // line 231
                        echo "\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                        // line 232
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_ALL");
                        echo "\" />&nbsp;
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_marked]\" value=\"";
                        // line 233
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MARKED");
                        echo "\" />
\t\t\t\t\t</fieldset>
\t\t\t\t";
                    }
                    // line 236
                    echo "\t\t\t";
                }
                // line 237
                echo "
\t\t\t<h3>";
                // line 238
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FEEDBACK");
                echo "</h3>
\t\t\t<p>";
                // line 239
                echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FEEDBACK_EXPLAIN");
                echo "</p>

\t\t\t<fieldset>
\t\t\t\t<textarea name=\"usernote\" rows=\"4\" cols=\"76\" class=\"inputbox\"></textarea>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"action[add_feedback]\" value=\"";
                // line 246
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" value=\"";
                // line 247
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
                echo "\" />
\t\t\t\t";
                // line 248
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 255
            echo "
\t";
            // line 256
            if (($context["S_SHOW_REPORTS"] ?? null)) {
                // line 257
                echo "\t\t<div class=\"panel\" id=\"reports\">
\t\t\t<div class=\"inner\">

\t\t\t<h3>";
                // line 260
                echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_POST_REPORTS");
                echo "</h3>

\t\t\t";
                // line 262
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "reports", [], "any", false, false, false, 262));
                foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
                    // line 263
                    echo "\t\t\t\t<span class=\"small\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REPORTED_BY");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["reports"], "U_REPORTER", [], "any", false, false, false, 263)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "U_REPORTER", [], "any", false, false, false, 263);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORTER", [], "any", false, false, false, 263);
                        echo "</a>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORTER", [], "any", false, false, false, 263);
                    }
                    echo " &laquo; ";
                    echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORT_TIME", [], "any", false, false, false, 263);
                    echo "</strong></span>
\t\t\t\t<p><em>";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, $context["reports"], "REASON_TITLE", [], "any", false, false, false, 264);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["reports"], "REASON_DESC", [], "any", false, false, false, 264);
                    echo "</em>";
                    if (twig_get_attribute($this->env, $this->source, $context["reports"], "REPORT_TEXT", [], "any", false, false, false, 264)) {
                        echo "<br />";
                        echo twig_get_attribute($this->env, $this->source, $context["reports"], "REPORT_TEXT", [], "any", false, false, false, 264);
                    }
                    echo "</p>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 266
                echo "
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 270
            echo "
\t";
            // line 271
            if ((($context["S_CAN_VIEWIP"] ?? null) &&  !($context["S_MCP_REPORT"] ?? null))) {
                // line 272
                echo "\t\t<div class=\"panel\" id=\"ip\">
\t\t\t<div class=\"inner\">

\t\t\t<p>";
                // line 275
                echo $this->extensions['phpbb\template\twig\extension']->lang("THIS_POST_IP");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                if (($context["U_WHOIS"] ?? null)) {
                    // line 276
                    echo "\t\t\t\t<a href=\"";
                    echo ($context["U_WHOIS"] ?? null);
                    echo "\">";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IPADDR"] ?? null);
                    } else {
                        echo ($context["POST_IP"] ?? null);
                    }
                    echo "</a> (";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IP"] ?? null);
                    } else {
                        echo "<a href=\"";
                        echo ($context["U_LOOKUP_IP"] ?? null);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                        echo "</a>";
                    }
                    echo ")
\t\t\t";
                } else {
                    // line 278
                    echo "\t\t\t\t";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IPADDR"] ?? null);
                        echo " (";
                        echo ($context["POST_IP"] ?? null);
                        echo ")";
                    } else {
                        echo ($context["POST_IP"] ?? null);
                        if (($context["U_LOOKUP_IP"] ?? null)) {
                            echo " (<a href=\"";
                            echo ($context["U_LOOKUP_IP"] ?? null);
                            echo "\">";
                            echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                            echo "</a>)";
                        }
                    }
                    // line 279
                    echo "\t\t\t";
                }
                echo "</p>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 284
                echo $this->extensions['phpbb\template\twig\extension']->lang("OTHER_USERS");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 285
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 289
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "userrow", [], "any", false, false, false, 289));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["userrow"]) {
                    // line 290
                    echo "\t\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["userrow"], "S_ROW_COUNT", [], "any", false, false, false, 290) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 291
                    if (twig_get_attribute($this->env, $this->source, $context["userrow"], "U_PROFILE", [], "any", false, false, false, 291)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["userrow"], "U_PROFILE", [], "any", false, false, false, 291);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["userrow"], "USERNAME", [], "any", false, false, false, 291);
                        echo "</a>";
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["userrow"], "USERNAME", [], "any", false, false, false, 291);
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\"><a href=\"";
                    // line 292
                    echo twig_get_attribute($this->env, $this->source, $context["userrow"], "U_SEARCHPOSTS", [], "any", false, false, false, 292);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_POSTS_BY");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["userrow"], "USERNAME", [], "any", false, false, false, 292);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["userrow"], "NUM_POSTS", [], "any", false, false, false, 292);
                    echo "</a></td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 295
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 296
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 299
                echo "\t\t\t</tbody>
\t\t\t</table>
            
\t\t\t<div class=\"pagination\">
\t\t\t\t";
                // line 303
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_post.html", 303)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 304
                echo "\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">            

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 314
                echo $this->extensions['phpbb\template\twig\extension']->lang("IPS_POSTED_FROM");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 315
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 319
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "iprow", [], "any", false, false, false, 319));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["iprow"]) {
                    // line 320
                    echo "\t\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["iprow"], "S_ROW_COUNT", [], "any", false, false, false, 320) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 321
                    if (twig_get_attribute($this->env, $this->source, $context["iprow"], "HOSTNAME", [], "any", false, false, false, 321)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "U_WHOIS", [], "any", false, false, false, 321);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "HOSTNAME", [], "any", false, false, false, 321);
                        echo "</a> (";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "IP", [], "any", false, false, false, 321);
                        echo ")";
                    } else {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "U_WHOIS", [], "any", false, false, false, 321);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "IP", [], "any", false, false, false, 321);
                        echo "</a> (<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["iprow"], "U_LOOKUP_IP", [], "any", false, false, false, 321);
                        echo "\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\">";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, $context["iprow"], "NUM_POSTS", [], "any", false, false, false, 322);
                    echo "</td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 325
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 326
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t";
                // line 332
                if (($context["U_LOOKUP_ALL"] ?? null)) {
                    // line 333
                    echo "\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<p><a href=\"";
                    // line 334
                    echo ($context["U_LOOKUP_ALL"] ?? null);
                    echo "#ip\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOOKUP_ALL");
                    echo "</a></p>
\t\t\t\t</div>
\t\t\t";
                }
                // line 337
                echo "            
            <div class=\"pagination\">
\t\t\t\t<ul>
\t\t\t\t";
                // line 340
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination_ips", [], "any", false, false, false, 340));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination_ips"]) {
                    // line 341
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "S_IS_PREV", [], "any", false, false, false, 341)) {
                        // line 342
                        echo "\t\t\t\t\t<li class=\"arrow previous\"><a class=\"button button-icon-only\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_URL", [], "any", false, false, false, 342);
                        echo "\" rel=\"prev\" role=\"button\"><i class=\"icon fa-chevron-";
                        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                        echo " fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIOUS");
                        echo "</span></a></li>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 343
$context["pagination_ips"], "S_IS_CURRENT", [], "any", false, false, false, 343)) {
                        // line 344
                        echo "\t\t\t\t\t<li class=\"active\"><span>";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_NUMBER", [], "any", false, false, false, 344);
                        echo "</span></li>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 345
$context["pagination_ips"], "S_IS_ELLIPSIS", [], "any", false, false, false, 345)) {
                        // line 346
                        echo "\t\t\t\t\t<li class=\"ellipsis\" role=\"separator\"><span>";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 347
$context["pagination_ips"], "S_IS_NEXT", [], "any", false, false, false, 347)) {
                        // line 348
                        echo "\t\t\t\t\t<li class=\"arrow next\"><a class=\"button button-icon-only\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_URL", [], "any", false, false, false, 348);
                        echo "\" rel=\"next\" role=\"button\"><i class=\"icon fa-chevron-";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo " fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NEXT");
                        echo "</span></a></li>
\t\t\t\t\t";
                    } else {
                        // line 350
                        echo "\t\t\t\t\t<li><a class=\"button\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_URL", [], "any", false, false, false, 350);
                        echo "\" role=\"button\">";
                        echo twig_get_attribute($this->env, $this->source, $context["pagination_ips"], "PAGE_NUMBER", [], "any", false, false, false, 350);
                        echo "</a></li>
\t\t\t\t\t";
                    }
                    // line 352
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination_ips'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 353
                echo "\t\t\t\t</ul>
                </div>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 359
            echo "
";
        }
        // line 361
        echo "
";
        // line 362
        if (($context["S_TOPIC_REVIEW"] ?? null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "mcp_post.html", 362)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 363
        echo "
";
        // line 364
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_post.html", 364)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1235 => 364,  1232 => 363,  1218 => 362,  1215 => 361,  1211 => 359,  1203 => 353,  1197 => 352,  1189 => 350,  1179 => 348,  1177 => 347,  1172 => 346,  1170 => 345,  1165 => 344,  1163 => 343,  1154 => 342,  1151 => 341,  1147 => 340,  1142 => 337,  1134 => 334,  1131 => 333,  1129 => 332,  1124 => 329,  1115 => 326,  1112 => 325,  1104 => 322,  1082 => 321,  1073 => 320,  1068 => 319,  1061 => 315,  1057 => 314,  1045 => 304,  1033 => 303,  1027 => 299,  1018 => 296,  1015 => 295,  1001 => 292,  989 => 291,  980 => 290,  975 => 289,  968 => 285,  964 => 284,  955 => 279,  938 => 278,  916 => 276,  911 => 275,  906 => 272,  904 => 271,  901 => 270,  895 => 266,  879 => 264,  861 => 263,  857 => 262,  852 => 260,  847 => 257,  845 => 256,  842 => 255,  832 => 248,  828 => 247,  824 => 246,  814 => 239,  810 => 238,  807 => 237,  804 => 236,  798 => 233,  794 => 232,  791 => 231,  789 => 230,  786 => 229,  775 => 225,  769 => 224,  759 => 223,  755 => 222,  749 => 220,  747 => 219,  742 => 217,  737 => 214,  735 => 213,  732 => 212,  729 => 210,  726 => 209,  693 => 204,  688 => 201,  686 => 200,  682 => 198,  676 => 194,  669 => 190,  662 => 187,  655 => 186,  639 => 185,  633 => 183,  625 => 179,  623 => 178,  620 => 177,  619 => 176,  616 => 175,  609 => 171,  601 => 168,  596 => 166,  592 => 164,  584 => 163,  579 => 162,  571 => 158,  569 => 157,  565 => 156,  560 => 153,  558 => 152,  550 => 146,  544 => 144,  527 => 143,  505 => 141,  496 => 140,  493 => 139,  491 => 138,  488 => 137,  480 => 135,  478 => 134,  475 => 133,  471 => 131,  462 => 130,  458 => 129,  455 => 128,  453 => 127,  450 => 126,  446 => 124,  437 => 122,  433 => 121,  429 => 120,  426 => 119,  424 => 118,  421 => 117,  420 => 116,  414 => 113,  410 => 111,  409 => 110,  406 => 109,  396 => 106,  393 => 105,  391 => 104,  388 => 103,  381 => 99,  376 => 98,  372 => 97,  367 => 96,  361 => 95,  354 => 92,  352 => 91,  346 => 88,  341 => 87,  337 => 86,  333 => 85,  329 => 84,  322 => 81,  320 => 80,  317 => 79,  303 => 77,  299 => 75,  268 => 74,  233 => 73,  226 => 72,  223 => 71,  221 => 70,  217 => 68,  210 => 64,  204 => 63,  201 => 62,  199 => 61,  193 => 58,  183 => 57,  174 => 53,  167 => 48,  161 => 46,  153 => 41,  148 => 40,  147 => 39,  142 => 38,  136 => 36,  133 => 35,  132 => 34,  126 => 31,  118 => 25,  112 => 23,  106 => 21,  104 => 20,  101 => 19,  95 => 17,  93 => 16,  83 => 15,  76 => 14,  69 => 9,  63 => 7,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_post.html", "");
    }
}
