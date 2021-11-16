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

/* mcp_warn_post.html */
class __TwigTemplate_c747c38d4d51f065f17410d98cfac72b154bbf5b6b77e78466f1cab1db126f61 extends \Twig\Template
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
        $this->loadTemplate("mcp_header.html", "mcp_warn_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form method=\"post\" id=\"mcp\" action=\"";
        // line 3
        echo ($context["U_POST_ACTION"] ?? null);
        echo "\">

<h2>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_WARN_POST");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 10
        if (($context["USER_COLOR"] ?? null)) {
            echo "<span style=\"color: #";
            echo ($context["USER_COLOR"] ?? null);
            echo "\">";
            echo ($context["USERNAME"] ?? null);
            echo "</span>";
        } else {
            echo ($context["USERNAME"] ?? null);
        }
        echo "</h3>

\t<div>
\t\t<div class=\"column1\">
\t\t\t";
        // line 14
        if (($context["AVATAR_IMG"] ?? null)) {
            echo "<div>";
            echo ($context["AVATAR_IMG"] ?? null);
            echo "</div>";
        }
        // line 15
        echo "\t\t</div>

\t\t<div class=\"column2\">
\t\t\t<dl class=\"details\">
\t\t\t\t";
        // line 19
        if (($context["RANK_TITLE"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt><dd>";
            echo ($context["RANK_TITLE"] ?? null);
            echo "</dd>";
        }
        // line 20
        echo "\t\t\t\t";
        if (($context["RANK_IMG"] ?? null)) {
            echo "<dt>";
            if (($context["RANK_TITLE"] ?? null)) {
                echo "&nbsp;";
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            }
            echo "</dt><dd>";
            echo ($context["RANK_IMG"] ?? null);
            echo "</dd>";
        }
        // line 21
        echo "\t\t\t\t<dt>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt><dd>";
        echo ($context["JOINED"] ?? null);
        echo "</dd>
\t\t\t\t<dt>";
        // line 22
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt><dd>";
        echo ($context["POSTS"] ?? null);
        echo "</dd>
\t\t\t\t<dt>";
        // line 23
        echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " </dt><dd>";
        echo ($context["WARNINGS"] ?? null);
        echo "</dd>
\t\t\t</dl>
\t\t</div>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 34
        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
        echo "</h3>

\t<div class=\"postbody\">

\t\t<div class=\"content\">
\t\t\t";
        // line 39
        echo ($context["POST"] ?? null);
        echo "
\t\t</div>

\t</div>

\t</div>
</div>

";
        // line 47
        // line 48
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 52
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_WARNING");
        echo "</h3>
\t<p>";
        // line 53
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_WARNING_EXPLAIN");
        echo "</p>

\t<fieldset>
\t\t<textarea name=\"warning\" id=\"warning\" class=\"inputbox\" cols=\"40\" rows=\"3\">";
        // line 56
        echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING_POST_DEFAULT");
        echo "</textarea>
\t\t";
        // line 57
        if (($context["S_CAN_NOTIFY"] ?? null)) {
            // line 58
            echo "\t\t<br /><br />
\t\t<dl class=\"panel\">
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><label><input type=\"checkbox\" name=\"notify_user\" checked=\"checked\" /> ";
            // line 61
            echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_USER_WARN");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 64
        echo "\t</fieldset>

\t</div>
</div>

";
        // line 69
        // line 70
        echo "
<fieldset class=\"submit-buttons\">
\t<input type=\"reset\" value=\"";
        // line 72
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"action[add_warning]\" value=\"";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 74
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

";
        // line 78
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_warn_post.html", 78)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_warn_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 78,  220 => 74,  216 => 73,  212 => 72,  208 => 70,  207 => 69,  200 => 64,  194 => 61,  189 => 58,  187 => 57,  183 => 56,  177 => 53,  173 => 52,  167 => 48,  166 => 47,  155 => 39,  147 => 34,  130 => 23,  123 => 22,  115 => 21,  101 => 20,  92 => 19,  86 => 15,  80 => 14,  65 => 10,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_warn_post.html", "");
    }
}
