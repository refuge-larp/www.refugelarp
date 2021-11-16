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

/* @vse_abbc3/event/acp_bbcodes_actions_prepend.html */
class __TwigTemplate_465eb046d44dd8bc64ee7aab504ca290eb0e07210fec184c36694afc87c16eab extends \Twig\Template
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
        echo "<span class=\"up-disabled\" style=\"display: none;\">";
        echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
        echo "</span>
<span class=\"up\"><a href=\"";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["bbcodes"] ?? null), "U_MOVE_UP", [], "any", false, false, false, 2);
        echo "\" data-ajax=\"row_up\">";
        echo ($context["ICON_MOVE_UP"] ?? null);
        echo "</a></span>
<span class=\"down-disabled\" style=\"display:none;\">";
        // line 3
        echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
        echo "</span>
<span class=\"down\"><a href=\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["bbcodes"] ?? null), "U_MOVE_DOWN", [], "any", false, false, false, 4);
        echo "\" data-ajax=\"row_down\">";
        echo ($context["ICON_MOVE_DOWN"] ?? null);
        echo "</a></span>
";
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_bbcodes_actions_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  48 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_abbc3/event/acp_bbcodes_actions_prepend.html", "");
    }
}
