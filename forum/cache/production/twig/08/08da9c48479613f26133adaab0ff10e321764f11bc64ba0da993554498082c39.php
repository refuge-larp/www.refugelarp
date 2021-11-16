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

/* mcp_notes_user.html */
class __TwigTemplate_0399bf717e7c20198d3b397e1f856f704cd38953a9e5d8bc36f2c3bf1da51044 extends \Twig\Template
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
        $this->loadTemplate("mcp_header.html", "mcp_notes_user.html", 1)->display($context);
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
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
        // line 10
        echo ($context["USERNAME_FULL"] ?? null);
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
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FEEDBACK");
        echo "</h3>
\t<p>";
        // line 35
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FEEDBACK_EXPLAIN");
        echo "</p>

\t<fieldset>
\t\t<textarea name=\"usernote\" id=\"usernote\" class=\"inputbox\" cols=\"40\" rows=\"3\"></textarea>
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 45
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"reset\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"action[add_feedback]\" value=\"";
        // line 46
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 47
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>

<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"action-bar bar-top\">
\t\t";
        // line 54
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_KEYWORDS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " <input type=\"search\" class=\"inputbox autowidth\" name=\"keywords\" value=\"";
        echo ($context["S_KEYWORDS"] ?? null);
        echo "\" />&nbsp;<input type=\"submit\" class=\"button2\" name=\"filter\" value=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
        echo "\" />
\t\t<div class=\"pagination\">
\t\t\t";
        // line 56
        echo ($context["TOTAL_REPORTS"] ?? null);
        echo "
\t\t\t";
        // line 57
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 57))) {
            // line 58
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_notes_user.html", 58)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 59
            echo "\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t\t";
        }
        // line 62
        echo "\t\t</div>
\t</div>

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th class=\"name reportby\">";
        // line 68
        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_BY");
        echo "</th>
\t\t<th class=\"center\">";
        // line 69
        echo $this->extensions['phpbb\template\twig\extension']->lang("IP");
        echo "</th>
\t\t<th class=\"center\">";
        // line 70
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIME");
        echo "</th>
\t\t<th>";
        // line 71
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION_NOTE");
        echo "</th>
\t\t";
        // line 72
        if (($context["S_CLEAR_ALLOWED"] ?? null)) {
            echo "<th>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK");
            echo "</th>";
        }
        // line 73
        echo "\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "usernotes", [], "any", false, false, false, 76));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
            // line 77
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, $context["usernotes"], "S_ROW_COUNT", [], "any", false, false, false, 77) % 2 == 0)) {
                echo "<tr class=\"bg1\">";
            } else {
                echo "<tr class=\"bg2\">";
            }
            // line 78
            echo "\t\t<td>";
            echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "REPORT_BY", [], "any", false, false, false, 78);
            echo "</td>
\t\t<td class=\"center\">";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "IP", [], "any", false, false, false, 79);
            echo "</td>
\t\t<td class=\"center\">";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "REPORT_AT", [], "any", false, false, false, 80);
            echo "</td>
\t\t<td>";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "ACTION", [], "any", false, false, false, 81);
            echo "</td>

\t\t";
            // line 83
            if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                echo "<td class=\"center\" style=\"width: 5%;\"><input type=\"checkbox\" name=\"marknote[]\" id=\"note-";
                echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "ID", [], "any", false, false, false, 83);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["usernotes"], "ID", [], "any", false, false, false, 83);
                echo "\" /></td>";
            }
            // line 84
            echo "\t</tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            echo "\t<tr>
\t\t<td class=\"bg1\" colspan=\"";
            // line 87
            if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\" align=\"center\"><span class=\"gen\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_ENTRIES");
            echo "</span></td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t</tbody>
\t</table>

\t<div class=\"action-bar bottom\">
\t\t";
        // line 94
        $location = "display_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("display_options.html", "mcp_notes_user.html", 94)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 95
        echo "
\t\t<div class=\"pagination\">
\t\t\t";
        // line 97
        echo ($context["TOTAL_REPORTS"] ?? null);
        echo "
\t\t\t";
        // line 98
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 98))) {
            // line 99
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "mcp_notes_user.html", 99)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 100
            echo "\t\t\t";
        } else {
            // line 101
            echo "\t\t\t\t &bull; ";
            echo ($context["PAGE_NUMBER"] ?? null);
            echo "
\t\t\t";
        }
        // line 103
        echo "\t\t</div>
\t</div>

\t</div>
</div>

";
        // line 109
        if (($context["S_CLEAR_ALLOWED"] ?? null)) {
            // line 110
            echo "<fieldset class=\"display-actions\">
\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
            // line 111
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_ALL");
            echo "\" />
\t&nbsp;<input class=\"button1\" type=\"submit\" name=\"action[del_marked]\" value=\"";
            // line 112
            echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_MARKED");
            echo "\" />
</fieldset>

<fieldset class=\"display-actions\">
\t<div><a href=\"#\" onclick=\"marklist('mcp', 'marknote', true); return false;\">";
            // line 116
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('mcp', 'marknote', false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 119
        echo "</form>

";
        // line 121
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_notes_user.html", 121)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_notes_user.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 121,  393 => 119,  385 => 116,  378 => 112,  374 => 111,  371 => 110,  369 => 109,  361 => 103,  355 => 101,  352 => 100,  339 => 99,  337 => 98,  333 => 97,  329 => 95,  317 => 94,  311 => 90,  296 => 87,  293 => 86,  287 => 84,  279 => 83,  274 => 81,  270 => 80,  266 => 79,  261 => 78,  254 => 77,  249 => 76,  244 => 73,  238 => 72,  234 => 71,  230 => 70,  226 => 69,  222 => 68,  214 => 62,  208 => 60,  205 => 59,  192 => 58,  190 => 57,  186 => 56,  176 => 54,  166 => 47,  162 => 46,  156 => 45,  143 => 35,  139 => 34,  122 => 23,  115 => 22,  107 => 21,  93 => 20,  84 => 19,  78 => 15,  72 => 14,  65 => 10,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mcp_notes_user.html", "");
    }
}
