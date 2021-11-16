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

/* @stevotvr_flair/event/memberlist_view_content_append.html */
class __TwigTemplate_fe800d240fca80163b31e31b5c44ca1d70cde3b91b0ef1e44ee823db60b9179d extends \Twig\Template
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
        if (($context["flair"] ?? null)) {
            // line 2
            echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t\t<h3>";
            // line 4
            echo ($context["FLAIR_TITLE"] ?? null);
            echo "</h3>
\t\t\t<div class=\"profile-flair\">
\t\t\t\t";
            // line 6
            $this->loadTemplate("@stevotvr_flair/flair_items.html", "@stevotvr_flair/event/memberlist_view_content_append.html", 6)->display($context);
            // line 7
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@stevotvr_flair/event/memberlist_view_content_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@stevotvr_flair/event/memberlist_view_content_append.html", "");
    }
}
