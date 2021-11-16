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

/* permission_trace.html */
class __TwigTemplate_3bbde09c65d0db9adfa2ceb8c74f4d2a335a4fdcf0c9f77d8170a3ac0123ed1d extends \Twig\Template
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
        $location = "simple_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_header.html", "permission_trace.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div style=\"background-color: #fff; padding: 10px; margin-top: 10px;\" class=\"permissions\">

\t";
        // line 5
        if (($context["U_BACK"] ?? null)) {
            echo "<a href=\"";
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>";
        }
        // line 6
        echo "
\t<h3>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("TRACE_FOR");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " ";
        echo ($context["PERMISSION_USERNAME"] ?? null);
        echo " / ";
        if (($context["FORUM_NAME"] ?? null)) {
            echo ($context["FORUM_NAME"] ?? null);
            echo " / ";
        }
        echo ($context["PERMISSION"] ?? null);
        echo " </h3>

\t<br />

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th>";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("TRACE_WHO");
        echo "</th>
\t\t<th style=\"width: 50px;\">";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_SETTING");
        echo "</th>
\t\t<th style=\"width: 50px;\">";
        // line 16
        echo $this->extensions['phpbb\template\twig\extension']->lang("TRACE_TOTAL");
        echo "</th>
\t\t<th>";
        // line 17
        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
        echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "trace", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 22
            echo "\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["trace"], "S_ROW_COUNT", [], "any", false, false, false, 22) % 2 == 0)) {
                echo "<tr class=\"row4\">";
            } else {
                echo "<tr class=\"row3\">";
            }
            // line 23
            echo "\t\t<td style=\"white-space: nowrap;\"><strong>";
            echo twig_get_attribute($this->env, $this->source, $context["trace"], "WHO", [], "any", false, false, false, 23);
            echo "</strong></td>

\t\t";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["trace"], "S_SETTING_NEVER", [], "any", false, false, false, 25)) {
                // line 26
                echo "\t\t\t<td class=\"never\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_NEVER");
                echo "</td>
\t\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 27
$context["trace"], "S_SETTING_YES", [], "any", false, false, false, 27)) {
                // line 28
                echo "\t\t\t<td class=\"yes\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_YES");
                echo "</td>
\t\t";
            } else {
                // line 30
                echo "\t\t\t<td class=\"no\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_NO");
                echo "</td>
\t\t";
            }
            // line 32
            echo "
\t\t";
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["trace"], "S_TOTAL_NEVER", [], "any", false, false, false, 33)) {
                // line 34
                echo "\t\t\t<td class=\"never\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_NEVER");
                echo "</td>
\t\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 35
$context["trace"], "S_TOTAL_YES", [], "any", false, false, false, 35)) {
                // line 36
                echo "\t\t\t<td class=\"yes\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_YES");
                echo "</td>
\t\t";
            } else {
                // line 38
                echo "\t\t\t<td class=\"no\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_NO");
                echo "</td>
\t\t";
            }
            // line 40
            echo "
\t\t<td>";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["trace"], "INFORMATION", [], "any", false, false, false, 41);
            echo "</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t<tr class=\"row2\">
\t\t<td style=\"white-space: nowrap;\"><strong>";
        // line 45
        echo $this->extensions['phpbb\template\twig\extension']->lang("TRACE_RESULT");
        echo "</strong></td>
\t\t<td colspan=\"2\" style=\"text-align: center;\" class=\"";
        // line 46
        if (($context["S_RESULT_NEVER"] ?? null)) {
            echo "never";
        } elseif (($context["S_RESULT_YES"] ?? null)) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "\">
\t\t";
        // line 47
        if (($context["S_RESULT_NEVER"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_NEVER");
        } elseif (($context["S_RESULT_YES"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_YES");
        } else {
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_NO");
        }
        // line 48
        echo "\t\t</td>
\t\t<td>";
        // line 49
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESULTING_PERMISSION");
        echo "</td>
\t</tr>
\t</tbody>
\t</table>

\t<br />

</div>

";
        // line 58
        $location = "simple_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("simple_footer.html", "permission_trace.html", 58)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "permission_trace.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 58,  207 => 49,  204 => 48,  196 => 47,  186 => 46,  182 => 45,  179 => 44,  170 => 41,  167 => 40,  161 => 38,  155 => 36,  153 => 35,  148 => 34,  146 => 33,  143 => 32,  137 => 30,  131 => 28,  129 => 27,  124 => 26,  122 => 25,  116 => 23,  109 => 22,  105 => 21,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  67 => 7,  64 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "permission_trace.html", "");
    }
}
