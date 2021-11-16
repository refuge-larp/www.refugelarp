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
class __TwigTemplate_37d5a747e28cfdcf33c1893115d362bdf16d451baa0b25eccb48d40e6c4aaab1 extends \Twig\Template
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
            echo "\t<noscript>
\t\t<div>";
            // line 3
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_NOSCRIPT");
            echo "</div>
\t</noscript>

\t<script src=\"";
            // line 6
            echo ($context["U_RECAPTCHA_SCRIPT"] ?? null);
            echo "\" async defer></script>

\t";
            // line 9
            echo "\t<input class=\"g-recaptcha\" type=\"hidden\" name=\"recaptcha_action\" value=\"";
            echo ($context["RECAPTCHA_ACTION"] ?? null);
            echo "\" data-recaptcha-v3=\"";
            echo ($context["RECAPTCHA_KEY"] ?? null);
            echo "\">
\t<input type=\"hidden\" name=\"recaptcha_token\" value=\"\">
";
        } else {
            // line 12
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
        return array (  62 => 12,  53 => 9,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_recaptcha_v3.html", "");
    }
}
