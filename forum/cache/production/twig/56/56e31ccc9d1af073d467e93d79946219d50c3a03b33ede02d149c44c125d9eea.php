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

/* @vse_abbc3/event/quickreply_editor_message_before.html */
class __TwigTemplate_37ac2fa0bd16ca3eb08b87aace9f023a793acc9b5a52b4b7c66766295cba8eac extends \Twig\Template
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
        if (($context["S_BBCODE_ALLOWED"] ?? null)) {
            // line 2
            echo "\t";
            $this->loadTemplate("posting_buttons.html", "@vse_abbc3/event/quickreply_editor_message_before.html", 2)->display($context);
            // line 3
            echo "\t<script>
\t\tif (typeof form_name === 'undefined') {
\t\t\tvar form_name;
\t\t}
\t\tform_name = 'qr_postform';
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/quickreply_editor_message_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_abbc3/event/quickreply_editor_message_before.html", "");
    }
}
