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

/* legend.html */
class __TwigTemplate_ac037dc0a0f1f65a165f1c5d5ee32d0e10a7d37b7ce5efd248bac3dacbed6f39 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "legend.html", 1)->display($context);
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("FLAIR_LEGEND_TITLE");
        echo "</h2>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cat"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 6
            echo "\t<div class=\"panel bg";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 6) % 2 == 1)) {
                echo "1";
            } else {
                echo "2";
            }
            echo " flair-legend\">

\t<div class=\"inner\">

\t\t<div id=\"flair-cat";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_ID", [], "any", false, false, false, 10);
            echo "\">
\t\t\t";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_NAME", [], "any", false, false, false, 11)) {
                echo "<h3><a href=\"#flair-cat";
                echo twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_ID", [], "any", false, false, false, 11);
                echo "\"></a>";
                echo twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_NAME", [], "any", false, false, false, 11);
                echo "</h3>";
            }
            // line 12
            echo "\t\t\t<dl class=\"details\">
\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cat"], "item", [], "any", false, false, false, 13));
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
                // line 14
                echo "\t\t\t\t\t<dt id=\"flair";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_ID", [], "any", false, false, false, 14);
                echo "\">";
                $this->loadTemplate("@stevotvr_flair/flair_item.html", "legend.html", 14)->display(twig_array_merge($context, $context["item"]));
                echo "</dt>
\t\t\t\t\t<dd><h4><a href=\"#flair";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_ID", [], "any", false, false, false, 15);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_NAME", [], "any", false, false, false, 15);
                echo "</a></h4></dd>
\t\t\t\t\t<dd>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_DESC", [], "any", false, false, false, 16);
                echo "</dd>
\t\t\t\t";
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
            // line 18
            echo "\t\t\t</dl>
\t\t</div>

\t</div>

\t</div>
";
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
            // line 25
            echo "\t<div class=\"panel bg1\">

\t<div class=\"inner\">

\t\t<p>";
            // line 29
            echo $this->extensions['phpbb\template\twig\extension']->lang("FLAIR_NO_FLAIR");
            echo "</p>

\t</div>

\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
";
        // line 36
        $this->loadTemplate("overall_footer.html", "legend.html", 36)->display($context);
    }

    public function getTemplateName()
    {
        return "legend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 36,  175 => 35,  163 => 29,  157 => 25,  138 => 18,  122 => 16,  116 => 15,  109 => 14,  92 => 13,  89 => 12,  81 => 11,  77 => 10,  65 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "legend.html", "");
    }
}
