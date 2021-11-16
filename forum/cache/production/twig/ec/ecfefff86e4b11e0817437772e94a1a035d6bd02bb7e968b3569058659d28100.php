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

/* abbc3_pipes_wizard.html */
class __TwigTemplate_ecedb7e54be6291b2d7a6dfb820b9c470615fef55f83952044fa61263dcadbc4 extends \Twig\Template
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
\t\t\t<h2>";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_TABLES");
        echo "</h2>
\t\t\t<p>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_TABLES_EXPLAIN");
        echo " <a href=\"http://pandoc.org/MANUAL.html#extension-pipe_tables\"><i class=\"icon fa-external-link fa-fw\" aria-hidden=\"true\"></i><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_DOCUMENTATION");
        echo "</span></a>.</p>
\t\t\t<h3>";
        // line 6
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_SIMPLE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</h3>
\t\t\t<pre>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_SIMPLE_EX");
        echo "</pre>
\t\t\t<br>
\t\t\t<h3>";
        // line 9
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_COMPACT") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</h3>
\t\t\t<p>";
        // line 10
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_COMPACT_EXPLAIN");
        echo "</p>
\t\t\t<pre>";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_COMPACT_EX");
        echo "</pre>
\t\t\t<br>
\t\t\t<h3>";
        // line 13
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_ALIGNMENT") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</h3>
\t\t\t<pre>";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("ABBC3_PIPE_ALIGNMENT_EX");
        echo "</pre>
\t\t</div>
\t</div>
\t<div class=\"panel\" style=\"margin-bottom: 0;\">
\t\t<div class=\"inner\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_cancel\" id=\"bbcode_wizard_cancel\" value=\"";
        // line 20
        echo $this->extensions['phpbb\template\twig\extension']->lang("CLOSE_WINDOW");
        echo "\" class=\"button2 button button-form\">
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "abbc3_pipes_wizard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  78 => 14,  74 => 13,  69 => 11,  65 => 10,  61 => 9,  56 => 7,  52 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "abbc3_pipes_wizard.html", "");
    }
}
