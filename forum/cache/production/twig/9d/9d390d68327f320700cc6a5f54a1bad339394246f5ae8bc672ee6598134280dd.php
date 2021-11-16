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

/* @stevotvr_flair/flair_items.html */
class __TwigTemplate_8d92c83ad36373c8e4ae8980c57fc3f4740c400b9a1b53dabe2d09ebaa9c0b27 extends \Twig\Template
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
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["flair"] ?? null));
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
            // line 2
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_NAME", [], "any", false, false, false, 2)) {
                echo "<h4>";
                echo twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_NAME", [], "any", false, false, false, 2);
                echo "</h4>";
            }
            // line 3
            echo "
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cat"], "item", [], "any", false, false, false, 4));
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
                // line 5
                echo "\t\t\t";
                if (($context["U_FLAIR_LEGEND"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_FLAIR_LEGEND"] ?? null);
                    echo "#flair";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "FLAIR_ID", [], "any", false, false, false, 5);
                    echo "\">";
                }
                // line 6
                echo "\t\t\t\t";
                $this->loadTemplate("@stevotvr_flair/flair_item.html", "@stevotvr_flair/flair_items.html", 6)->display(twig_array_merge($context, $context["item"]));
                // line 7
                echo "\t\t\t";
                if (($context["U_FLAIR_LEGEND"] ?? null)) {
                    echo "</a>";
                }
                // line 8
                echo "\t\t";
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
            // line 9
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@stevotvr_flair/flair_items.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 9,  99 => 8,  94 => 7,  91 => 6,  82 => 5,  65 => 4,  62 => 3,  55 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@stevotvr_flair/flair_items.html", "");
    }
}
