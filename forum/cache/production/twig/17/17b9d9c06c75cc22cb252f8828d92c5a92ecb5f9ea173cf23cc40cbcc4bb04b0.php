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

/* ucp_pm_history.html */
class __TwigTemplate_c9a540d08652350c5842f1345ac9d1de18cacd5bf94d5c9b44b3a4339d4577e1 extends \Twig\Template
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
        echo "
<h3 id=\"review\" class=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data == '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'};\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_HISTORY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "
</h3>

";
        // line 7
        // line 8
        echo "<div id=\"topicreview\" class=\"topicreview\">
\t<script>
\t\tbbcodeEnabled = ";
        // line 10
        echo ($context["S_BBCODE_ALLOWED"] ?? null);
        echo ";
\t</script>
\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "history_row", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["history_row"]) {
            // line 13
            echo "\t<div class=\"post ";
            if ((twig_get_attribute($this->env, $this->source, $context["history_row"], "S_ROW_COUNT", [], "any", false, false, false, 13) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\" id=\"pr";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MSG_ID", [], "any", false, false, false, 16);
            echo "\">
\t\t\t<h3><a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "U_VIEW_MESSAGE", [], "any", false, false, false, 17);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["history_row"], "S_CURRENT_MSG", [], "any", false, false, false, 17)) {
                echo "class=\"current\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "SUBJECT", [], "any", false, false, false, 17);
            echo "</a></h3>

\t\t\t";
            // line 19
            $value = (twig_get_attribute($this->env, $this->source, $context["history_row"], "U_QUOTE", [], "any", false, false, false, 19) || twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR_QUOTE", [], "any", false, false, false, 19));
            $context['definition']->set('SHOW_PM_HISTORY_POST_BUTTONS', $value);
            // line 20
            echo "\t\t\t";
            // line 21
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_PM_HISTORY_POST_BUTTONS", [], "any", false, false, false, 21)) {
                // line 22
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t\t";
                // line 23
                // line 24
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["history_row"], "U_QUOTE", [], "any", false, false, false, 24) || twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR_QUOTE", [], "any", false, false, false, 24))) {
                    // line 25
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["history_row"], "U_QUOTE", [], "any", false, false, false, 26)) {
                        echo "href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "U_QUOTE", [], "any", false, false, false, 26);
                        echo "\"";
                    } else {
                        echo "href=\"#postingbox\" onclick=\"addquote(";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MSG_ID", [], "any", false, false, false, 26);
                        echo ", '";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR_QUOTE", [], "any", false, false, false, 26);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("WROTE"), "js");
                        echo "', {time:";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_TIME", [], "any", false, false, false, 26);
                        echo ",user_id:";
                        echo twig_get_attribute($this->env, $this->source, $context["history_row"], "USER_ID", [], "any", false, false, false, 26);
                        echo "});\"";
                    }
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR", [], "any", false, false, false, 26);
                    echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 27
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR", [], "any", false, false, false, 27);
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t";
                // line 32
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 34
            echo "\t\t\t";
            // line 35
            echo "
\t\t\t<p class=\"author\">
\t\t\t\t<span><i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MINI_POST", [], "any", false, false, false, 37);
            echo "</span></span> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SENT_AT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <strong>";
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "SENT_DATE", [], "any", false, false, false, 37);
            echo "</strong>
\t\t\t\t<br />
\t\t\t\t";
            // line 39
            echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_BY_AUTHOR");
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE_AUTHOR_FULL", [], "any", false, false, false, 39);
            // line 40
            echo "\t\t\t</p>
\t\t\t<div class=\"content\">";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE", [], "any", false, false, false, 41)) {
                echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MESSAGE", [], "any", false, false, false, 41);
            } else {
                echo "<span class=\"error\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                echo "</span>";
            }
            echo "</div>
\t\t\t<div id=\"message_";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "MSG_ID", [], "any", false, false, false, 42);
            echo "\" style=\"display: none;\">";
            echo twig_get_attribute($this->env, $this->source, $context["history_row"], "DECODED_MESSAGE", [], "any", false, false, false, 42);
            echo "</div>
\t\t</div>

\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>
";
        // line 49
        // line 50
        echo "
<hr />
<p>
\t<a href=\"#cp-main\" class=\"top\">
\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
        // line 54
        echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
        echo "</span>
\t</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_history.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 54,  208 => 50,  207 => 49,  204 => 48,  190 => 42,  180 => 41,  177 => 40,  173 => 39,  163 => 37,  159 => 35,  157 => 34,  153 => 32,  151 => 31,  142 => 27,  118 => 26,  115 => 25,  112 => 24,  111 => 23,  108 => 22,  105 => 21,  103 => 20,  100 => 19,  89 => 17,  85 => 16,  74 => 13,  70 => 12,  65 => 10,  61 => 8,  60 => 7,  53 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_history.html", "");
    }
}
