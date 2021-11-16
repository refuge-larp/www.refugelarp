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

/* mcp_move.html */
class __TwigTemplate_ba0d513d6bc07166d1bd4fd4f56730dfa354af8a076680d900579ebc5dc7de2f extends \Twig\Template
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
        if (($context["S_AJAX_REQUEST"] ?? null)) {
            // line 2
            echo "
\t<h3>";
            // line 3
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h3>
\t<p>";
            // line 4
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</p>

\t";
            // line 6
            if (($context["ADDITIONAL_MSG"] ?? null)) {
                echo "<p>";
                echo ($context["ADDITIONAL_MSG"] ?? null);
                echo "</p>";
            }
            // line 7
            echo "
\t<label>
\t\t<strong>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_DESTINATION_FORUM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong>
\t\t<select name=\"to_forum_id\">";
            // line 10
            echo ($context["S_FORUM_SELECT"] ?? null);
            echo "</select>
\t</label>

\t";
            // line 13
            if (($context["S_CAN_LEAVE_SHADOW"] ?? null)) {
                // line 14
                echo "\t\t<label for=\"move_leave_shadow\">
\t\t\t<input type=\"checkbox\" name=\"move_leave_shadow\" id=\"move_leave_shadow\" />";
                // line 15
                echo $this->extensions['phpbb\template\twig\extension']->lang("LEAVE_SHADOW");
                echo "
\t\t</label>
\t";
            }
            // line 18
            echo "
\t";
            // line 19
            if (($context["S_CAN_LOCK_TOPIC"] ?? null)) {
                // line 20
                echo "\t\t<label for=\"move_lock_topics\">
\t\t\t<input type=\"checkbox\" name=\"move_lock_topics\" id=\"move_lock_topics\" />";
                // line 21
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_TOPIC");
                echo "
\t\t</label>
\t";
            }
            // line 24
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 26
            echo ($context["YES_VALUE"] ?? null);
            echo "\" class=\"button1\" />&nbsp;
\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 27
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "\" class=\"button2\" />
\t</fieldset>

";
        } else {
            // line 31
            echo "
";
            // line 32
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "mcp_move.html", 32)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 33
            echo "
";
            // line 34
            // line 35
            echo "
<form id=\"confirm\" action=\"";
            // line 36
            echo ($context["S_CONFIRM_ACTION"] ?? null);
            echo "\" method=\"post\">

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"content\">
\t\t<h2 class=\"message-title\">";
            // line 42
            echo ($context["MESSAGE_TITLE"] ?? null);
            echo "</h2>
\t\t";
            // line 43
            if (($context["ADDITIONAL_MSG"] ?? null)) {
                echo "<p>";
                echo ($context["ADDITIONAL_MSG"] ?? null);
                echo "</p>";
            }
            // line 44
            echo "
\t\t<fieldset>
\t\t";
            // line 46
            // line 47
            echo "\t\t<dl class=\"fields2\">
\t\t\t<dt><label>";
            // line 48
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_DESTINATION_FORUM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select name=\"to_forum_id\">";
            // line 49
            echo ($context["S_FORUM_SELECT"] ?? null);
            echo "</select></dd>
\t\t\t";
            // line 50
            if (($context["S_CAN_LEAVE_SHADOW"] ?? null)) {
                echo "<dd><label for=\"move_leave_shadow\"><input type=\"checkbox\" name=\"move_leave_shadow\" id=\"move_leave_shadow\" />";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LEAVE_SHADOW");
                echo "</label></dd>";
            }
            // line 51
            echo "\t\t\t";
            if (($context["S_CAN_LOCK_TOPIC"] ?? null)) {
                echo "<dd><label for=\"move_lock_topics\"><input type=\"checkbox\" name=\"move_lock_topics\" id=\"move_lock_topics\" />";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_TOPIC");
                echo "</label></dd>";
            }
            // line 52
            echo "\t\t</dl>
\t\t";
            // line 53
            // line 54
            echo "\t\t<dl class=\"fields2\">
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><strong>";
            // line 56
            echo ($context["MESSAGE_TEXT"] ?? null);
            echo "</strong></dd>
\t\t</dl>
\t\t</fieldset>

\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 61
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "<input type=\"submit\" name=\"confirm\" value=\"";
            echo ($context["YES_VALUE"] ?? null);
            echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 63
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>

\t</div>

\t</div>
</div>
</form>

";
            // line 72
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "mcp_move.html", 72)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "mcp_move.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 72,  209 => 63,  205 => 62,  199 => 61,  191 => 56,  187 => 54,  186 => 53,  183 => 52,  176 => 51,  170 => 50,  166 => 49,  161 => 48,  158 => 47,  157 => 46,  153 => 44,  147 => 43,  143 => 42,  134 => 36,  131 => 35,  130 => 34,  127 => 33,  115 => 32,  112 => 31,  105 => 27,  101 => 26,  97 => 24,  91 => 21,  88 => 20,  86 => 19,  83 => 18,  77 => 15,  74 => 14,  72 => 13,  66 => 10,  61 => 9,  57 => 7,  51 => 6,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_move.html", "");
    }
}
