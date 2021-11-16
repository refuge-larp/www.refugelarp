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

/* ucp_notifications.html */
class __TwigTemplate_00144b65d3f03a6380a925711b393c7577fb42c4a83b37ab1b4400fd126d242c extends \Twig\Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_notifications.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<h2>";
        // line 5
        echo ($context["TITLE"] ?? null);
        echo "</h2>
<div class=\"panel\">
\t<div class=\"inner\">

\t\t<p>";
        // line 9
        echo ($context["TITLE_EXPLAIN"] ?? null);
        echo "</p>

\t\t";
        // line 11
        if ((($context["MODE"] ?? null) == "notification_options")) {
            // line 12
            echo "        <div class=\"forumbg-table\">
\t\t\t<table class=\"table1\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATION_TYPE");
            echo "</th>
\t\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_methods", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 18
                echo "\t\t\t\t\t\t\t<th class=\"mark\">";
                echo twig_get_attribute($this->env, $this->source, $context["notification_methods"], "NAME", [], "any", false, false, false, 18);
                echo "</th>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_types", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_types"]) {
                // line 24
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["notification_types"], "GROUP_NAME", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "\t\t\t\t\t\t<tr class=\"bg3\">
\t\t\t\t\t\t\t<td colspan=\"";
                    // line 26
                    echo ($context["NOTIFICATION_TYPES_COLS"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["notification_types"], "GROUP_NAME", [], "any", false, false, false, 26);
                    echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                } else {
                    // line 29
                    echo "\t\t\t\t\t\t<tr class=\"";
                    if ((twig_get_attribute($this->env, $this->source, $context["notification_types"], "S_ROW_COUNT", [], "any", false, false, false, 29) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["notification_types"], "NAME", [], "any", false, false, false, 31);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 32
                    if (twig_get_attribute($this->env, $this->source, $context["notification_types"], "EXPLAIN", [], "any", false, false, false, 32)) {
                        echo "<br />&nbsp; &nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_types"], "EXPLAIN", [], "any", false, false, false, 32);
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["notification_types"], "notification_methods", [], "any", false, false, false, 34));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                        // line 35
                        echo "\t\t\t\t\t\t\t\t<td class=\"mark\"><input type=\"checkbox\" name=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_types"], "TYPE", [], "any", false, false, false, 35);
                        echo "_";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_methods"], "METHOD", [], "any", false, false, false, 35);
                        echo "\"";
                        if ((twig_get_attribute($this->env, $this->source, $context["notification_methods"], "AVAILABLE", [], "any", false, false, false, 35) && twig_get_attribute($this->env, $this->source, $context["notification_methods"], "SUBSCRIBED", [], "any", false, false, false, 35))) {
                            echo " checked=\"checked\"";
                        }
                        if ( !twig_get_attribute($this->env, $this->source, $context["notification_methods"], "AVAILABLE", [], "any", false, false, false, 35)) {
                            echo " disabled=\"disabled\"";
                        }
                        echo " /></td>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_types'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t</tbody>
\t\t\t</table>
        </div>
\t\t";
        } else {
            // line 44
            echo "\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_list", [], "any", false, false, false, 44))) {
                // line 45
                echo "\t\t\t\t<div class=\"action-bar bar-top\">
\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t";
                // line 47
                if (($context["U_MARK_ALL"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_MARK_ALL"] ?? null);
                    echo "\" class=\"mark\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS_MARK_ALL_READ");
                    echo "</a> &bull; ";
                }
                // line 48
                echo "\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " [<strong>";
                echo ($context["TOTAL_COUNT"] ?? null);
                echo "</strong>]
\t\t\t\t\t\t";
                // line 49
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 49))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 50)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 51
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t &bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<div class=\"notification_list\">
\t\t\t\t<ul class=\"topiclist two-columns\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 61
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo "</div></dt>
\t\t\t\t\t\t\t<dd class=\"mark\">";
                // line 62
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_READ");
                echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist cplist two-columns\">
\t\t\t\t\t";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_list", [], "any", false, false, false, 67));
                foreach ($context['_seq'] as $context["_key"] => $context["notification_list"]) {
                    // line 68
                    echo "\t\t\t\t\t\t<li class=\"row";
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "UNREAD", [], "any", false, false, false, 68)) {
                        echo " bg3";
                    } else {
                        if ((twig_get_attribute($this->env, $this->source, $context["notification_list"], "S_ROW_COUNT", [], "any", false, false, false, 68) % 2 == 1)) {
                            echo " bg1";
                        } else {
                            echo " bg2";
                        }
                    }
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "STYLING", [], "any", false, false, false, 68)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "STYLING", [], "any", false, false, false, 68);
                    }
                    echo "\">
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 72
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "AVATAR", [], "any", false, false, false, 72)) {
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "AVATAR", [], "any", false, false, false, 72);
                    } else {
                        echo "<img src=\"";
                        echo ($context["T_THEME_PATH"] ?? null);
                        echo "/images/no_avatar.gif\" alt=\"\" />";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"notifications\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 74
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "URL", [], "any", false, false, false, 74)) {
                        echo "<a href=\"";
                        if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "UNREAD", [], "any", false, false, false, 74)) {
                            echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "U_MARK_READ", [], "any", false, false, false, 74);
                        } else {
                            echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "URL", [], "any", false, false, false, 74);
                        }
                        echo "\">";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "FORMATTED_TITLE", [], "any", false, false, false, 75);
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "REFERENCE", [], "any", false, false, false, 75)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "REFERENCE", [], "any", false, false, false, 75);
                    }
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 76
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "URL", [], "any", false, false, false, 76)) {
                        echo "</a>";
                    }
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "FORUM", [], "any", false, false, false, 77)) {
                        echo "<p class=\"notifications_forum\">";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "FORUM", [], "any", false, false, false, 77);
                        echo "</p>";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["notification_list"], "REASON", [], "any", false, false, false, 78)) {
                        echo "<p class=\"notifications_reason\">";
                        echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "REASON", [], "any", false, false, false, 78);
                        echo "</p>";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_time\">";
                    echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "TIME", [], "any", false, false, false, 79);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dt>

\t\t\t\t\t\t\t\t<dd class=\"mark\">&nbsp;<input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["notification_list"], "NOTIFICATION_ID", [], "any", false, false, false, 84);
                    echo "\"";
                    if ( !twig_get_attribute($this->env, $this->source, $context["notification_list"], "UNREAD", [], "any", false, false, false, 84)) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " /> <dfn>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_READ");
                    echo "</dfn>&nbsp;</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"action-bar bar-bottom\">
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
                // line 93
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " [<strong>";
                echo ($context["TOTAL_COUNT"] ?? null);
                echo "</strong>]
\t\t\t\t\t";
                // line 94
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 94))) {
                    // line 95
                    echo "\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 95)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 96
                    echo "\t\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t\t  &bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            } else {
                // line 103
                echo "\t\t\t\t<p><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_NOTIFICATIONS");
                echo "</strong></p>
\t\t\t";
            }
            // line 105
            echo "
\t\t";
        }
        // line 107
        echo "\t</div>
</div>

";
        // line 110
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_types", [], "any", false, false, false, 110)) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notification_list", [], "any", false, false, false, 110)))) {
            // line 111
            echo "<fieldset class=\"display-actions\">
\t<input type=\"hidden\" name=\"form_time\" value=\"";
            // line 112
            echo ($context["FORM_TIME"] ?? null);
            echo "\" />
\t";
            // line 113
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 114
            if ((($context["MODE"] ?? null) == "notification_options")) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_READ");
            }
            echo "\" class=\"button1\" />
\t<div><a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', true); return false;\">";
            // line 115
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "</a></div>
\t";
            // line 116
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
</fieldset>
";
        }
        // line 119
        echo "
</form>

";
        // line 122
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_notifications.html", 122)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_notifications.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 122,  434 => 119,  428 => 116,  422 => 115,  414 => 114,  410 => 113,  406 => 112,  403 => 111,  401 => 110,  396 => 107,  392 => 105,  386 => 103,  380 => 99,  374 => 97,  371 => 96,  358 => 95,  356 => 94,  350 => 93,  343 => 88,  327 => 84,  318 => 79,  311 => 78,  304 => 77,  300 => 76,  291 => 75,  281 => 74,  278 => 73,  270 => 72,  250 => 68,  246 => 67,  238 => 62,  234 => 61,  225 => 54,  219 => 52,  216 => 51,  203 => 50,  201 => 49,  194 => 48,  186 => 47,  182 => 45,  179 => 44,  173 => 40,  167 => 39,  163 => 37,  145 => 35,  141 => 34,  138 => 33,  133 => 32,  129 => 31,  119 => 29,  111 => 26,  108 => 25,  105 => 24,  101 => 23,  96 => 20,  87 => 18,  83 => 17,  79 => 16,  73 => 12,  71 => 11,  66 => 9,  59 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_notifications.html", "");
    }
}
