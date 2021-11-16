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

/* captcha_recaptcha_v3_acp.html */
class __TwigTemplate_836a11aac24360c85967cf03849fed9afaa0d58195c08ec94062570f88d4916c extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "captcha_recaptcha_v3_acp.html", 1)->display($context);
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_VC_SETTINGS");
        echo "</h1>
<p>";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_VC_SETTINGS_EXPLAIN");
        echo "</p>

<form id=\"acp_captcha\" method=\"post\" action=\"";
        // line 8
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("GENERAL_OPTIONS");
        echo "</legend>

\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label for=\"recaptcha_v3_key\">";
        // line 14
        echo ($this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_PUBLIC") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label>
\t\t\t\t<br><span>";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_V3_PUBLIC_EXPLAIN");
        echo "</span>
\t\t\t</dt>
\t\t\t<dd>
\t\t\t\t<input id=\"recaptcha_v3_key\" name=\"recaptcha_v3_key\" type=\"text\" value=\"";
        // line 18
        echo ($context["RECAPTCHA_V3_KEY"] ?? null);
        echo "\" size=\"50\">
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label for=\"recaptcha_v3_secret\">";
        // line 23
        echo ($this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_PRIVATE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label>
\t\t\t\t<br><span>";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_V3_PRIVATE_EXPLAIN");
        echo "</span>
\t\t\t</dt>
\t\t\t<dd>
\t\t\t\t<input id=\"recaptcha_v3_secret\" name=\"recaptcha_v3_secret\" type=\"text\" value=\"";
        // line 27
        echo ($context["RECAPTCHA_V3_SECRET"] ?? null);
        echo "\" size=\"50\">
\t\t\t</dd>
\t\t</dl>

\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label>";
        // line 33
        echo ($this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_V3_DOMAIN") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label>
\t\t\t\t<br><span>";
        // line 34
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_V3_DOMAIN_EXPLAIN");
        echo "</span>
\t\t\t</dt>
\t\t\t<dd>
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["RECAPTCHA_V3_DOMAINS"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 38
            echo "\t\t\t\t\t<label>
\t\t\t\t\t\t<input class=\"radio\" name=\"recaptcha_v3_domain\" type=\"radio\" value=\"";
            // line 39
            echo $context["domain"];
            echo "\"";
            echo ((($context["domain"] == ($context["RECAPTCHA_V3_DOMAIN"] ?? null))) ? (" checked") : (""));
            echo ">
\t\t\t\t\t\t<span>";
            // line 40
            echo $context["domain"];
            echo "</span>
\t\t\t\t\t</label>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt>
\t\t\t\t<label>";
        // line 47
        echo ($this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_V3_METHOD") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label>
\t\t\t\t<br><span>";
        // line 48
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_V3_METHOD_EXPLAIN");
        echo "</span>
\t\t\t</dt>
\t\t\t<dd>
\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["RECAPTCHA_V3_METHODS"] ?? null));
        foreach ($context['_seq'] as $context["method"] => $context["available"]) {
            // line 52
            echo "\t\t\t\t\t<label>
\t\t\t\t\t\t";
            // line 53
            $context["checked"] = ((($context["method"] == ($context["RECAPTCHA_V3_METHOD"] ?? null))) ? (" checked") : (""));
            // line 54
            echo "\t\t\t\t\t\t";
            $context["disabled"] = (( !$context["available"]) ? (" disabled") : (""));
            // line 55
            echo "
\t\t\t\t\t\t<input class=\"radio\" name=\"recaptcha_v3_method\" type=\"radio\" value=\"";
            // line 56
            echo $context["method"];
            echo "\"";
            echo (($context["checked"] ?? null) . ($context["disabled"] ?? null));
            echo ">
\t\t\t\t\t\t<span>";
            // line 57
            echo $this->extensions['phpbb\template\twig\extension']->lang(("RECAPTCHA_V3_METHOD_" . twig_upper_filter($this->env, $context["method"])));
            echo "</span>
\t\t\t\t\t</label>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['method'], $context['available'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t</dd>
\t\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 65
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_V3_THRESHOLDS");
        echo "</legend>
\t\t<p>";
        // line 66
        echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_V3_THRESHOLDS_EXPLAIN");
        echo "</p>

\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["thresholds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["threshold"]) {
            // line 69
            echo "\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["threshold"], "key", [], "any", false, false, false, 71);
            echo "\">";
            echo ($this->extensions['phpbb\template\twig\extension']->lang(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["threshold"], "key", [], "any", false, false, false, 71))) . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label>
\t\t\t\t\t";
            // line 72
            if ($this->extensions['phpbb\template\twig\extension']->lang_defined((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["threshold"], "key", [], "any", false, false, false, 72)) . "_EXPLAIN"))) {
                // line 73
                echo "\t\t\t\t\t\t<br><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["threshold"], "key", [], "any", false, false, false, 73)) . "_EXPLAIN"));
                echo "</span>
\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t</dt>
\t\t\t\t<dd><input id=\"";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["threshold"], "key", [], "any", false, false, false, 76);
            echo "\" name=\"";
            echo twig_get_attribute($this->env, $this->source, $context["threshold"], "key", [], "any", false, false, false, 76);
            echo "\" type=\"number\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["threshold"], "value", [], "any", false, false, false, 76);
            echo "\" min=\"0\" max=\"1\" step=\"0.1\"></dd>
\t\t\t</dl>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['threshold'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 82
        echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
        echo "</legend>

\t\t";
        // line 84
        if (($context["PREVIEW"] ?? null)) {
            // line 85
            echo "\t\t\t<div class=\"successbox\">
\t\t\t\t<h3>";
            // line 86
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t\t\t<p>";
            // line 87
            echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_PREVIEW_MSG");
            echo "</p>
\t\t\t</div>
\t\t";
        }
        // line 90
        echo "
\t\t";
        // line 91
        $this->loadTemplate(($context["CAPTCHA_PREVIEW"] ?? null), "captcha_recaptcha_v3_acp.html", 91)->display($context);
        // line 92
        echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 95
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" id=\"submit\" name=\"submit\" type=\"submit\" value=\"";
        // line 98
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\">
\t\t\t<input class=\"button2\" id=\"reset\" name=\"reset\" type=\"reset\" value=\"";
        // line 99
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\">

\t\t\t<input name=\"select_captcha\" type=\"hidden\" value=\"";
        // line 101
        echo ($context["CAPTCHA_NAME"] ?? null);
        echo "\">
\t\t\t<input name=\"configure\" type=\"hidden\" value=\"1\">
\t\t\t";
        // line 103
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t</p>
\t</fieldset>
</form>

";
        // line 108
        $this->loadTemplate("overall_footer.html", "captcha_recaptcha_v3_acp.html", 108)->display($context);
    }

    public function getTemplateName()
    {
        return "captcha_recaptcha_v3_acp.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 108,  289 => 103,  284 => 101,  279 => 99,  275 => 98,  269 => 95,  264 => 92,  262 => 91,  259 => 90,  253 => 87,  249 => 86,  246 => 85,  244 => 84,  239 => 82,  234 => 79,  221 => 76,  218 => 75,  212 => 73,  210 => 72,  204 => 71,  200 => 69,  196 => 68,  191 => 66,  187 => 65,  180 => 60,  171 => 57,  165 => 56,  162 => 55,  159 => 54,  157 => 53,  154 => 52,  150 => 51,  144 => 48,  140 => 47,  134 => 43,  125 => 40,  119 => 39,  116 => 38,  112 => 37,  106 => 34,  102 => 33,  93 => 27,  87 => 24,  83 => 23,  75 => 18,  69 => 15,  65 => 14,  58 => 10,  53 => 8,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_recaptcha_v3_acp.html", "");
    }
}
