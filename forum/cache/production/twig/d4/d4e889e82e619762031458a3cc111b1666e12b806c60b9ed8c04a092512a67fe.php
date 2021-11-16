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
class __TwigTemplate_8d8355559dd5630f9b284ffefa45e6e42adeed4f6b1385d893efb5f7ab142ffb extends \Twig\Template
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
