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

/* @phpbb_collapsiblecategories/event/forumlist_body_category_header_before.html */
class __TwigTemplate_987de2c551de67845148283d840171147fc106bb7ae04899f938b19a2d9d770b extends \Twig\Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "S_IS_CAT", [], "any", false, false, false, 1) || twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "S_FIRST_ROW", [], "any", false, false, false, 1)) || twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "S_NO_CAT", [], "any", false, false, false, 1))) {
            // line 2
            echo "\t<a class=\"category";
            if (twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "S_FORUM_HIDDEN", [], "any", false, false, false, 2)) {
                echo " hidden-category";
            }
            echo "\" id=\"category";
            echo twig_get_attribute($this->env, $this->source, ($context["forumrow"] ?? null), "FORUM_ID", [], "any", false, false, false, 2);
            echo "\" style=\"display: none; height: 0\"></a>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_collapsiblecategories/event/forumlist_body_category_header_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_collapsiblecategories/event/forumlist_body_category_header_before.html", "");
    }
}
