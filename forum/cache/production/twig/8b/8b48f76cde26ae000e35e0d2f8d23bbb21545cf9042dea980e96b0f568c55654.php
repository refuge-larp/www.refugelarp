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

/* email_notify.txt */
class __TwigTemplate_7961e0033f90f1db015ae7c89bc596dc25fd5bf5cfe6cef356a6a7f45e598b0a extends \Twig\Template
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
        echo "Subject: \"";
        echo ($context["SITENAME"] ?? null);
        echo "\" - Email a friend

Hello ";
        // line 3
        echo ($context["TO_USERNAME"] ?? null);
        echo ",

This email was sent from \"";
        // line 5
        echo ($context["SITENAME"] ?? null);
        echo "\" by ";
        echo ($context["FROM_USERNAME"] ?? null);
        echo " who thought you may be interested in the following topic:

";
        // line 7
        echo ($context["TOPIC_NAME"] ?? null);
        echo "

You can find it at:

";
        // line 11
        echo ($context["U_TOPIC"] ?? null);
        echo "

A message from ";
        // line 13
        echo ($context["FROM_USERNAME"] ?? null);
        echo " may also be included below. Please note that this message has not been seen or approved by the board administrators. If you wish to complain about having received this email please contact the board administrator at ";
        echo ($context["BOARD_CONTACT"] ?? null);
        echo ". Please quote the message headers when contacting this address.

----------

";
        // line 17
        echo ($context["MESSAGE"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "email_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  67 => 13,  62 => 11,  55 => 7,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "email_notify.txt", "");
    }
}
