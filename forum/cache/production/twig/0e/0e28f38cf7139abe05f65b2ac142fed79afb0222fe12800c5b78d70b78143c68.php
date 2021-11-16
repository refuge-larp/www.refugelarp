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

/* @stevotvr_flair/event/viewtopic_body_contact_fields_after.html */
class __TwigTemplate_871aff7cb6c98ff2d41e9618e8a1b8b288a41991cbc4fdada84dc19647494fbe extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["postrow"] ?? null), "flair", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t<dd class=\"profile-flair\">
\t\t";
            // line 3
            $this->loadTemplate("@stevotvr_flair/flair_items.html", "@stevotvr_flair/event/viewtopic_body_contact_fields_after.html", 3)->display(twig_array_merge($context, ($context["postrow"] ?? null)));
            // line 4
            echo "\t</dd>
";
        }
    }

    public function getTemplateName()
    {
        return "@stevotvr_flair/event/viewtopic_body_contact_fields_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@stevotvr_flair/event/viewtopic_body_contact_fields_after.html", "");
    }
}
