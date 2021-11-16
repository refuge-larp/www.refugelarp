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

/* ucp_agreement.html */
class __TwigTemplate_ae87b42ee8bfc9c4f8271a9341dcfb961cc5d67092e711d20dc6b66e626fc00f extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null))) {
            // line 4
            echo "
";
            // line 5
            if (($context["S_LANG_OPTIONS"] ?? null)) {
                // line 6
                echo "<script type=\"text/javascript\">
// <![CDATA[
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
                // line 13
                echo ($context["COOKIE_NAME"] ?? null);
                echo "_lang=' + lang_iso + '; path=";
                echo ($context["COOKIE_PATH"] ?? null);
                echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit();
\t}

// ]]>
</script>

\t<form method=\"post\" action=\"";
                // line 21
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\" id=\"register\">
\t\t<p class=\"rightside\">
\t\t\t<label for=\"lang\">";
                // line 23
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE");
                echo "\">";
                echo ($context["S_LANG_OPTIONS"] ?? null);
                echo "</select>
\t\t\t";
                // line 24
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t</p>
\t</form>

\t<div class=\"clear\"></div>

";
            }
            // line 31
            echo "
\t<form method=\"post\" action=\"";
            // line 32
            echo ($context["S_UCP_ACTION"] ?? null);
            echo "\" id=\"agreement\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 37
            echo ($context["SITENAME"] ?? null);
            echo " - ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTRATION");
            echo "</h2>
\t\t\t";
            // line 38
            // line 39
            echo "\t\t\t<p>";
            if (($context["S_SHOW_COPPA"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_OF_USE");
            }
            echo "</p>
\t\t\t";
            // line 40
            // line 41
            echo "\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 48
            if (($context["S_SHOW_COPPA"] ?? null)) {
                // line 49
                echo "\t\t\t<strong><a href=\"";
                echo ($context["U_COPPA_NO"] ?? null);
                echo "\" class=\"button1\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_NO");
                echo "</a></strong>&nbsp; <a href=\"";
                echo ($context["U_COPPA_YES"] ?? null);
                echo "\" class=\"button2\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("COPPA_YES");
                echo "</a>
\t\t\t";
            } else {
                // line 51
                echo "\t\t\t<input type=\"submit\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("AGREE");
                echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"not_agreed\" value=\"";
                // line 52
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOT_AGREE");
                echo "\" class=\"button2\" />
\t\t\t";
            }
            // line 54
            echo "\t\t\t";
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t";
            // line 55
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t\t</div>
\t</div>
\t</form>

";
        } elseif (        // line 61
($context["S_AGREEMENT"] ?? null)) {
            // line 62
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 66
            echo ($context["SITENAME"] ?? null);
            echo " - ";
            echo ($context["AGREEMENT_TITLE"] ?? null);
            echo "</h2>
\t\t\t<p>";
            // line 67
            echo ($context["AGREEMENT_TEXT"] ?? null);
            echo "</p>
\t\t</div>
\t\t</div>
\t</div>

";
        }
        // line 73
        echo "
";
        // line 74
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 74)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 74,  203 => 73,  194 => 67,  188 => 66,  182 => 62,  180 => 61,  171 => 55,  166 => 54,  161 => 52,  156 => 51,  144 => 49,  142 => 48,  133 => 41,  132 => 40,  123 => 39,  122 => 38,  116 => 37,  108 => 32,  105 => 31,  95 => 24,  86 => 23,  81 => 21,  68 => 13,  59 => 6,  57 => 5,  54 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_agreement.html", "");
    }
}
