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

/* permission_roles_mask.html */
class __TwigTemplate_66999bb4940a8b0c12fdf43927644b9742e2f6d73b7fe287924845244f9e1113 extends \Twig\Template
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
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "role_mask", [], "any", false, false, false, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role_mask"]) {
            // line 3
            echo "
\t<table class=\"table1\">
\t\t<caption>";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["role_mask"], "FORUM_ID", [], "any", false, false, false, 5)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
            }
            echo twig_get_attribute($this->env, $this->source, $context["role_mask"], "NAME", [], "any", false, false, false, 5);
            echo "</caption>
\t<tbody>
\t<tr>
\t\t<th>";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERS");
            echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row1\">
\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["role_mask"], "users", [], "any", false, false, false, 12));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                // line 13
                echo "\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["users"], "U_PROFILE", [], "any", false, false, false, 13);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["users"], "USERNAME", [], "any", false, false, false, 13);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["users"], "S_LAST_ROW", [], "any", false, false, false, 13)) {
                    echo " :: ";
                }
                // line 14
                echo "\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 15
                echo "\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("USERS_NOT_ASSIGNED");
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t</td>
\t</tr>
\t<tr>
\t\t<th>";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUPS");
            echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row2\">
\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["role_mask"], "groups", [], "any", false, false, false, 24));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                // line 25
                echo "\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["groups"], "U_PROFILE", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["groups"], "GROUP_NAME", [], "any", false, false, false, 25);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["groups"], "S_LAST_ROW", [], "any", false, false, false, 25)) {
                    echo " :: ";
                }
                // line 26
                echo "\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("GROUPS_NOT_ASSIGNED");
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t</td>
\t</tr>
\t</tbody>
\t</table>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "\t
\t<p>";
            // line 36
            echo $this->extensions['phpbb\template\twig\extension']->lang("ROLE_NOT_ASSIGNED");
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role_mask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "permission_roles_mask.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 36,  145 => 35,  135 => 29,  126 => 27,  121 => 26,  112 => 25,  107 => 24,  100 => 20,  95 => 17,  86 => 15,  81 => 14,  72 => 13,  67 => 12,  60 => 8,  49 => 5,  45 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "permission_roles_mask.html", "");
    }
}
