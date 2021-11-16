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

/* captcha_recaptcha_acp.html */
class __TwigTemplate_70fff066e4f803b2feaac3c3b547e4869614d0aa5064dd1ab7dd775e7d2d1b50 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "captcha_recaptcha_acp.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_VC_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_VC_SETTINGS_EXPLAIN");
        echo "</p>


<form id=\"acp_captcha\" method=\"post\" action=\"";
        // line 10
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
<legend>";
        // line 13
        echo $this->extensions['phpbb\template\twig\extension']->lang("GENERAL_OPTIONS");
        echo "</legend>

<dl>
\t<dt><label for=\"recaptcha_pubkey\">";
        // line 16
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_PUBLIC");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_PUBLIC_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"recaptcha_pubkey\" name=\"recaptcha_pubkey\" value=\"";
        // line 17
        echo ($context["RECAPTCHA_PUBKEY"] ?? null);
        echo "\" size=\"50\" type=\"text\" /></dd>
</dl>
<dl>
\t<dt><label for=\"recaptcha_privkey\">";
        // line 20
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_PRIVATE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_PRIVATE_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"recaptcha_privkey\" name=\"recaptcha_privkey\" value=\"";
        // line 21
        echo ($context["RECAPTCHA_PRIVKEY"] ?? null);
        echo "\" size=\"50\" type=\"text\" /></dd>
</dl>


</fieldset>
<fieldset>
\t<legend>";
        // line 27
        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
        echo "</legend>
";
        // line 28
        if (($context["PREVIEW"] ?? null)) {
            // line 29
            echo "\t<div class=\"successbox\">
\t\t<h3>";
            // line 30
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 31
            echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_PREVIEW_MSG");
            echo "</p>
\t</div>
";
        }
        // line 34
        $location = (("" . ($context["CAPTCHA_PREVIEW"] ?? null)) . "");
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate((("" . ($context["CAPTCHA_PREVIEW"] ?? null)) . ""), "captcha_recaptcha_acp.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 35
        echo "</fieldset>

<fieldset>
\t<legend>";
        // line 38
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 41
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />&nbsp;
\t</p>
\t<input type=\"hidden\" name=\"select_captcha\" value=\"";
        // line 43
        echo ($context["CAPTCHA_NAME"] ?? null);
        echo "\" />
\t<input type=\"hidden\" name=\"configure\" value=\"1\" />

\t";
        // line 46
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

";
        // line 50
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "captcha_recaptcha_acp.html", 50)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "captcha_recaptcha_acp.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 50,  162 => 46,  156 => 43,  151 => 41,  147 => 40,  142 => 38,  137 => 35,  125 => 34,  119 => 31,  115 => 30,  112 => 29,  110 => 28,  106 => 27,  97 => 21,  90 => 20,  84 => 17,  77 => 16,  71 => 13,  65 => 10,  59 => 7,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_recaptcha_acp.html", "");
    }
}
