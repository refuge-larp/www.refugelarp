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

/* privmsg_notify.txt */
class __TwigTemplate_3c09b1ffd90aef429d132646211849c715b5298fae443675f5a459d37d08999d extends \Twig\Template
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
        echo "Subject: New private message has arrived

Hello ";
        // line 3
        echo ($context["USERNAME"] ?? null);
        echo ",

You have received a new private message from \"";
        // line 5
        echo ($context["AUTHOR_NAME"] ?? null);
        echo "\" to your account on \"";
        echo ($context["SITENAME"] ?? null);
        echo "\" with the following subject:

";
        // line 7
        echo ($context["SUBJECT"] ?? null);
        echo "

You can view your new message by clicking on the following link:

";
        // line 11
        echo ($context["U_VIEW_MESSAGE"] ?? null);
        echo "

You have requested that you be notified on this event, remember that you can always choose not to be notified of new messages by changing the appropriate setting in your profile.

";
        // line 15
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "privmsg_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 15,  60 => 11,  53 => 7,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "privmsg_notify.txt", "");
    }
}
