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

/* newtopic_notify.txt */
class __TwigTemplate_6bf57cd6240d1b74fdd2ac84eed3335b095d8f80220b9eb4002fe9fb679bcf8f extends \Twig\Template
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
        echo "Subject: New topic notification - \"";
        echo ($context["FORUM_NAME"] ?? null);
        echo "\"
List-Unsubscribe: <";
        // line 2
        echo ($context["U_STOP_WATCHING_FORUM"] ?? null);
        echo ">

Hello ";
        // line 4
        echo ($context["USERNAME"] ?? null);
        echo ",

You are receiving this notification because you are watching the forum \"";
        // line 6
        echo ($context["FORUM_NAME"] ?? null);
        echo "\" at \"";
        echo ($context["SITENAME"] ?? null);
        echo "\". This forum has received a new topic";
        if ((($context["AUTHOR_NAME"] ?? null) != "")) {
            echo " by ";
            echo ($context["AUTHOR_NAME"] ?? null);
        }
        echo " since your last visit, \"";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "\". You can use the following link to view the forum, no more notifications will be sent until you visit the forum.

";
        // line 8
        echo ($context["U_FORUM"] ?? null);
        echo "

To see new topic directly, visit the following link:

";
        // line 12
        echo ($context["U_TOPIC"] ?? null);
        echo "

If you no longer wish to watch this forum you can either click the \"Unsubscribe forum\" link found in the forum above, or by clicking the following link:

";
        // line 16
        echo ($context["U_STOP_WATCHING_FORUM"] ?? null);
        echo "

";
        // line 18
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "newtopic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  80 => 16,  73 => 12,  66 => 8,  52 => 6,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newtopic_notify.txt", "");
    }
}
