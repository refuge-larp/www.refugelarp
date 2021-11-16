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

/* captcha_recaptcha_v3.html */
class __TwigTemplate_b245d6dd655525dac8a86d02487692f2074a6a32979c7d970be131df7a2456d3 extends \Twig\Template
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
        if (($context["S_RECAPTCHA_AVAILABLE"] ?? null)) {
            // line 2
            echo "\t<dl>
\t\t<dt>&nbsp;</dt>
\t\t<dd>
\t\t\t<noscript>
\t\t\t\t<div class=\"warningbox\">";
            // line 6
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_NOSCRIPT");
            echo "</div>
\t\t\t</noscript>

\t\t\t";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_INVISIBLE");
            echo "
\t\t\t<script src=\"";
            // line 10
            echo ($context["U_RECAPTCHA_SCRIPT"] ?? null);
            echo "\" async defer></script>
\t\t</dd>
\t</dl>
";
        } else {
            // line 14
            echo "\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_NOT_AVAILABLE");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_recaptcha_v3.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  55 => 10,  51 => 9,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_recaptcha_v3.html", "");
    }
}
