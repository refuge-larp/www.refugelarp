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

/* @phpbb_collapsiblecategories/event/forumlist_body_category_header_row_append.html */
class __TwigTemplate_55162a456b4c62dbf204bbf60fc73268ec1670be72862bacaf028203cb7aa723 extends \Twig\Template
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
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 2
            echo "\t";
            $context["S_CC_FORUM_HIDDEN"] = twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "S_FORUM_HIDDEN", [], "any", false, false, false, 2);
            // line 3
            echo "\t";
            $context["U_CC_COLLAPSE_URL"] = twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "U_COLLAPSE_URL", [], "any", false, false, false, 3);
            // line 4
            echo "\t";
            $this->loadTemplate("@phpbb_collapsiblecategories/collapsible_categories_button.html", "@phpbb_collapsiblecategories/event/forumlist_body_category_header_row_append.html", 4)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_collapsiblecategories/event/forumlist_body_category_header_row_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_collapsiblecategories/event/forumlist_body_category_header_row_append.html", "");
    }
}
