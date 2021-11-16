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

/* @paul999_tfa/event/overall_footer_copyright_append.html */
class __TwigTemplate_2628712caa43cae7c07f62aadbe2f04f986210bbc388f85392d1e69c3e235da2 extends \Twig\Template
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
        echo "<p class=\"footer-row\">
\t<span>";
        // line 2
        echo $this->extensions['phpbb\template\twig\extension']->lang("TFA_CP_TXT");
        echo " &copy; <a href=\"https://www.phpbbextensions.io/\" target=\"_blank\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TFA_CP_NAME");
        echo "</a></span>
</p>
";
    }

    public function getTemplateName()
    {
        return "@paul999_tfa/event/overall_footer_copyright_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@paul999_tfa/event/overall_footer_copyright_append.html", "");
    }
}
