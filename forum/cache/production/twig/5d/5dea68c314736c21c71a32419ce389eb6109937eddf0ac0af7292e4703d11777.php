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

/* test.txt */
class __TwigTemplate_227e16f6a1bcbc3a05d9d1764375259e80fa9b0b9d28285718734608f2907713 extends \Twig\Template
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
        echo "Subject: phpBB is correctly configured to send emails

Hello ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo ",

Congratulations. If you received this email, phpBB is correctly configured to send emails.

";
        // line 7
        if (($context["MESSAGE"] ?? null)) {
            // line 8
            echo ($context["MESSAGE"] ?? null);
            echo "

";
        }
        // line 11
        echo "In case you require assistance, please visit the phpBB support forums - https://www.phpbb.com/community/

";
        // line 13
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "test.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  56 => 11,  50 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test.txt", "");
    }
}
