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

/* acp_topic_prefixes.html */
class __TwigTemplate_ab9840beea1139d22829b3356b41bbd2dc10d650030757c0fe69b7d39c5be5f6 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_topic_prefixes.html", 1)->display($context);
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_PREFIXES");
        echo "</h1>

<p>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_PREFIXES_EXPLAIN");
        echo "</p>

\t<form id=\"acp_topic_prefixes_forum\" method=\"post\" action=\"";
        // line 9
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"select_forum\">";
        // line 12
        echo ($this->extensions['phpbb\template\twig\extension']->lang("SELECT_FORUM") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select id=\"select_forum\" name=\"forum_id\"><option value=\"0\">";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_FORUM");
        echo "</option>";
        echo ($context["S_FORUM_OPTIONS"] ?? null);
        echo "</select>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
        echo "\" class=\"button2\">
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t</form>

";
        // line 21
        if (($context["FORUM_ID"] ?? null)) {
            // line 22
            echo "
\t<table class=\"table1 zebra-table fixed-width-table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th style=\"width:45%\">";
            // line 26
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_PREFIX_TAG");
            echo "</th>
\t\t\t\t<th style=\"width:45%\">";
            // line 27
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_PREFIX_ENABLED");
            echo "</th>
\t\t\t\t<th>";
            // line 28
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "prefixes", [], "any", false, false, false, 32));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["prefix"]) {
                // line 33
                echo "\t\t\t<tr>
\t\t\t\t<td><strong>";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["prefix"], "PREFIX_TAG", [], "any", false, false, false, 34);
                echo "</strong></td>
\t\t\t\t<td class=\"";
                // line 35
                echo ((twig_get_attribute($this->env, $this->source, $context["prefix"], "PREFIX_ENABLED", [], "any", false, false, false, 35)) ? ("yes") : ("never"));
                echo "\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["prefix"], "U_EDIT", [], "any", false, false, false, 35);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_PREFIX_TOGGLE_STATE", twig_get_attribute($this->env, $this->source, $context["prefix"], "PREFIX_ENABLED", [], "any", false, false, false, 35));
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang(((twig_get_attribute($this->env, $this->source, $context["prefix"], "PREFIX_ENABLED", [], "any", false, false, false, 35)) ? ("ENABLED") : ("DISABLED")));
                echo "</a></td>
\t\t\t\t<td class=\"actions\">
\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 37
                echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                echo "</span>
\t\t\t\t\t<span class=\"up\"><a href=\"";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["prefix"], "U_MOVE_UP", [], "any", false, false, false, 38);
                echo "\" data-ajax=\"row_up\">";
                echo ($context["ICON_MOVE_UP"] ?? null);
                echo "</a></span>
\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 39
                echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                echo "</span>
\t\t\t\t\t<span class=\"down\"><a href=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["prefix"], "U_MOVE_DOWN", [], "any", false, false, false, 40);
                echo "\" data-ajax=\"row_down\">";
                echo ($context["ICON_MOVE_DOWN"] ?? null);
                echo "</a></span>
\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["prefix"], "U_DELETE", [], "any", false, false, false, 41);
                echo "\" data-ajax=\"row_delete\">";
                echo ($context["ICON_DELETE"] ?? null);
                echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 45
                echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"3\" style=\"text-align: center;\">";
                // line 46
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_PREFIXES_EMPTY");
                echo "</td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prefix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t</tbody>
\t</table>

\t<form id=\"acp_add_topic_prefix\" method=\"post\" action=\"";
            // line 52
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t";
            // line 54
            echo ($this->extensions['phpbb\template\twig\extension']->lang("CREATE_TOPIC_PREFIX") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "
\t\t\t<input type=\"text\" name=\"prefix_tag\" value=\"\" maxlength=\"200\" placeholder=\"";
            // line 55
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_PREFIX_PLACEHOLDER");
            echo "\" />
\t\t\t<input class=\"button2\" name=\"submit\" type=\"submit\" value=\"";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t\t<input type=\"hidden\" name=\"forum_id\" value=\"";
            // line 58
            echo ($context["FORUM_ID"] ?? null);
            echo "\" />
\t\t\t";
            // line 59
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t";
            // line 60
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t</fieldset>
\t</form>

";
        }
        // line 65
        echo "
";
        // line 66
        $asset_file = "acp_topic_prefixes.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 67
        $this->loadTemplate("overall_footer.html", "acp_topic_prefixes.html", 67)->display($context);
    }

    public function getTemplateName()
    {
        return "acp_topic_prefixes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 67,  211 => 66,  208 => 65,  200 => 60,  196 => 59,  192 => 58,  187 => 56,  183 => 55,  179 => 54,  174 => 52,  169 => 49,  160 => 46,  157 => 45,  146 => 41,  140 => 40,  136 => 39,  130 => 38,  126 => 37,  115 => 35,  111 => 34,  108 => 33,  103 => 32,  96 => 28,  92 => 27,  88 => 26,  82 => 22,  80 => 21,  71 => 15,  65 => 14,  60 => 12,  54 => 9,  49 => 7,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_topic_prefixes.html", "");
    }
}
