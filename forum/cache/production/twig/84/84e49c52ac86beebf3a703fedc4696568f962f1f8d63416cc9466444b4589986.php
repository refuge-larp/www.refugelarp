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

/* @phpbb_collapsiblecategories/collapsible_categories_button.html */
class __TwigTemplate_602a84834520a4f72082def68ee1f47fb0d89f3e862e33e1d80a5dbbdc265c4a extends \Twig\Template
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
        echo "<a href=\"";
        echo ($context["U_CC_COLLAPSE_URL"] ?? null);
        echo "\"
   class=\"collapse-btn\"
   data-hidden=\"";
        // line 3
        echo ($context["S_CC_FORUM_HIDDEN"] ?? null);
        echo "\"
   data-ajax=\"phpbb_collapse\"
   data-overlay=\"true\"
   data-title-alt=\"";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSIBLE_CATEGORIES_TITLE", ( !($context["S_CC_FORUM_HIDDEN"] ?? null) * 1));
        echo "\"
   title=\"";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSIBLE_CATEGORIES_TITLE", (($context["S_CC_FORUM_HIDDEN"] ?? null) * 1));
        echo "\"
   style=\"display: none; line-height: 0;\">
\t<i class=\"fa ";
        // line 9
        if (($context["S_CC_FORUM_HIDDEN"] ?? null)) {
            echo "fa-plus-square";
        } else {
            echo "fa-minus-square";
        }
        echo "\"></i>
</a>
";
    }

    public function getTemplateName()
    {
        return "@phpbb_collapsiblecategories/collapsible_categories_button.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 7,  49 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_collapsiblecategories/collapsible_categories_button.html", "");
    }
}
