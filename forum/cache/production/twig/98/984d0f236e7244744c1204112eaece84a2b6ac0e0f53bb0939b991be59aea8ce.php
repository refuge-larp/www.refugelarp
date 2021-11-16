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

/* @rmcgirr83_printallposts/event/viewtopic_topic_tools_after.html */
class __TwigTemplate_dedce863631ffd06fa9312468b6b83de69253d98db6346f0d64b30959b1bc9f0 extends \Twig\Template
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
        if (($context["U_PRINTALLPOSTS"] ?? null)) {
            // line 2
            echo "\t<li>
\t\t<a href=\"";
            // line 3
            echo ($context["U_PRINTALLPOSTS"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRINT_ALL_POSTS");
            echo "\">
\t\t\t<i class=\"icon fa-print fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 4
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRINT_ALL_POSTS");
            echo "</span>
\t\t</a>
\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@rmcgirr83_printallposts/event/viewtopic_topic_tools_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@rmcgirr83_printallposts/event/viewtopic_topic_tools_after.html", "");
    }
}
