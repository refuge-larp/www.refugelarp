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

/* user_activate.txt */
class __TwigTemplate_2cb37fdc92b89be879c49cae4d6dcf7da9d1a5560d910b8467d55341040f69aa extends \Twig\Template
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
        echo "Subject: Reactivate your account

Hello ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo ",

Your account on \"";
        // line 5
        echo ($context["SITENAME"] ?? null);
        echo "\" has been deactivated, most likely due to changes made to your profile. In order to reactivate your account you must click on the link below:

";
        // line 7
        echo ($context["U_ACTIVATE"] ?? null);
        echo "

";
        // line 9
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_activate.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  51 => 7,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_activate.txt", "");
    }
}
