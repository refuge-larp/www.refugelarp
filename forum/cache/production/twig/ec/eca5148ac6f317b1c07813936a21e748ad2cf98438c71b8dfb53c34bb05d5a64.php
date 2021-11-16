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

/* ucp_flair.html */
class __TwigTemplate_9bb74dda71b1362366380a4f7407e6a728881362d11f51911ef4ab9ba4945d37 extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_flair.html", 1)->display($context);
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR");
        echo "</h2>

";
        // line 5
        $asset_file = "@stevotvr_flair/flair.css";
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
        $this->env->get_assets_bag()->add_stylesheet($asset);        // line 6
        echo "
<form id=\"user_flair\" method=\"post\" action=\"";
        // line 7
        echo ($context["U_ACTION"] ?? null);
        echo "\" data-ajax=\"true\" data-refresh=\"true\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t\t<div class=\"postbody\">

\t\t\t<div class=\"content\">
\t\t\t\t";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR_EXPLAIN");
        echo "
\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t</div>
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<fieldset>
\t\t\t\t<h3>";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_USER_FLAIR");
        echo "</h3>
\t\t\t\t<div class=\"flair\">
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_flair"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 28
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["c"], "CAT_NAME", [], "any", false, false, false, 28)) {
                echo "<h4>";
                echo twig_get_attribute($this->env, $this->source, $context["c"], "CAT_NAME", [], "any", false, false, false, 28);
                echo "</h4>";
            }
            // line 29
            echo "
\t\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "items", [], "any", false, false, false, 30));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "\t\t\t\t\t<table class=\"flair-tile\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th rowspan=\"2\">
\t\t\t\t\t\t\t\t";
                // line 34
                $this->loadTemplate("@stevotvr_flair/flair_item.html", "ucp_flair.html", 34)->display(twig_array_merge($context, $context["item"]));
                // line 35
                echo "\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 title=\"";
                // line 37
                echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_NAME", [], "any", false, false, false, 37);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_NAME_SHORT", [], "any", false, false, false, 37);
                echo "</h5>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"flair-buttons\">
\t\t\t\t\t\t\t";
                // line 42
                if (twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_FAV", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"unfav_flair[";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_ID", [], "any", false, false, false, 43);
                    echo "]\" value=\"&#xf005;\" class=\"button1 flair-fav\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR_UNFAV", twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_NAME", [], "any", false, false, false, 43));
                    echo "\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"fav_flair[";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_ID", [], "any", false, false, false, 45);
                    echo "]\" value=\"&#xf006;\" class=\"button1 flair-fav\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR_FAV", twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_NAME", [], "any", false, false, false, 45));
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "S_IS_FREE", [], "any", false, false, false, 47)) {
                    echo "<input type=\"submit\" name=\"remove_flair[";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_ID", [], "any", false, false, false, 47);
                    echo "]\" value=\"&times;\" class=\"button1 flair-remove\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR_REMOVE", twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_NAME", [], "any", false, false, false, 47));
                    echo "\" />";
                }
                // line 48
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 51)) {
                echo "<hr>";
            }
            // line 52
            echo "\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 53
            echo "\t\t\t\t\t<p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR_NO_FLAIR");
            echo "</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<fieldset>
\t\t\t\t<h3>";
        // line 62
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR_AVAILABLE");
        echo "</h3>
\t\t\t\t<div class=\"flair\">
\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["available_flair"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 65
            echo "\t\t\t\t\t<h4>";
            echo twig_get_attribute($this->env, $this->source, $context["c"], "CAT_NAME", [], "any", false, false, false, 65);
            echo "</h4>

\t\t\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "items", [], "any", false, false, false, 67));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 68
                echo "\t\t\t\t\t<table class=\"flair-tile\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th rowspan=\"2\">
\t\t\t\t\t\t\t\t";
                // line 71
                $this->loadTemplate("@stevotvr_flair/flair_item.html", "ucp_flair.html", 71)->display(twig_array_merge($context, $context["item"]));
                // line 72
                echo "\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 title=\"";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_NAME", [], "any", false, false, false, 74);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_NAME_SHORT", [], "any", false, false, false, 74);
                echo "</h5>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"flair-buttons\">
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"add_flair[";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_ID", [], "any", false, false, false, 79);
                echo "]\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR_ADD_BUTTON");
                echo "\" class=\"button2\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR_ADD", twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_NAME", [], "any", false, false, false, 79));
                echo "\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 83)) {
                echo "<hr>";
            }
            // line 84
            echo "\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 85
            echo "\t\t\t\t\t<p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_FLAIR_NO_AVAILABLE");
            echo "</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>

\t";
        // line 92
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</form>

";
        // line 95
        $this->loadTemplate("ucp_footer.html", "ucp_flair.html", 95)->display($context);
    }

    public function getTemplateName()
    {
        return "ucp_flair.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 95,  361 => 92,  354 => 87,  345 => 85,  332 => 84,  328 => 83,  305 => 79,  295 => 74,  291 => 72,  289 => 71,  284 => 68,  267 => 67,  261 => 65,  243 => 64,  238 => 62,  229 => 55,  220 => 53,  207 => 52,  203 => 51,  186 => 48,  177 => 47,  169 => 45,  161 => 43,  159 => 42,  149 => 37,  145 => 35,  143 => 34,  138 => 31,  121 => 30,  118 => 29,  111 => 28,  93 => 27,  88 => 25,  75 => 15,  64 => 7,  61 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_flair.html", "");
    }
}
