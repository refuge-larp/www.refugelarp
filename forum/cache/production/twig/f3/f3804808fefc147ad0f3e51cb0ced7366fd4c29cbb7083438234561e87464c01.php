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

/* abbc3_url_wizard.html */
class __TwigTemplate_b0181138600587c8b5a05967c817e719096ad3541751716410b83d756ebff5a9 extends \Twig\Template
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
        echo "<form>
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<fieldset>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbcode_wizard_example\">";
        // line 6
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_BBCODE_WIZ_EXAMPLE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbcode_wizard_example\" name=\"bbcode_wizard_example\" readonly=\"readonly\" value=\"";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_URL_EXAMPLE");
        echo "\" size=\"45\" class=\"inputbox disabled\">
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<hr>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbcode_wizard_link\">";
        // line 13
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_URL_LINK") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbcode_wizard_link\" name=\"bbcode_wizard_link\" value=\"\" class=\"inputbox\" size=\"45\">
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbcode_wizard_description\">";
        // line 19
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_URL_DESCRIPTION") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbcode_wizard_description\" name=\"bbcode_wizard_description\" value=\"\" class=\"inputbox\" size=\"45\">
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t<div class=\"panel\" style=\"margin-bottom: 0;\">
\t\t<div class=\"inner\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_submit\" id=\"bbcode_wizard_submit\" value=\"";
        // line 30
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_BBCODE_WIZ_SUBMIT");
        echo "\" class=\"button1 button button-form\" data-bbcode=\"url\">&nbsp;
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_cancel\" id=\"bbcode_wizard_cancel\" value=\"";
        // line 31
        echo $this->extensions['phpbb\template\twig\extension']->lang("CANCEL");
        echo "\" class=\"button2 button button-form\">
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "abbc3_url_wizard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  80 => 30,  66 => 19,  57 => 13,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "abbc3_url_wizard.html", "");
    }
}
