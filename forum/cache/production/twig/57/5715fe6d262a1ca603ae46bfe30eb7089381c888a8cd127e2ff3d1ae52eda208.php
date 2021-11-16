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

/* captcha_qa.html */
class __TwigTemplate_eeb1e3f584f9bd498a911429c6a63ae916dfb7b18baa52b59cc7901890717d27 extends \Twig\Template
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
        if ((($context["S_TYPE"] ?? null) == 1)) {
            // line 2
            echo "<div class=\"panel captcha-panel\">
\t<div class=\"inner\">

\t<h3 class=\"captcha-title\">";
            // line 5
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRMATION");
            echo "</h3>
\t<fieldset class=\"fields2\">
";
        }
        // line 8
        echo "
\t<dl>
\t<dt><label>";
        // line 10
        echo ($context["QA_CONFIRM_QUESTION"] ?? null);
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_QUESTION_EXPLAIN");
        echo "</span></dt>
\t<dd class=\"captcha\">
\t\t<input type=\"text\" tabindex=\"";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "CAPTCHA_TAB_INDEX", [], "any", false, false, false, 12);
        echo "\" name=\"qa_answer\" id=\"answer\" size=\"45\"  class=\"inputbox autowidth\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ANSWER");
        echo "\" />
\t\t<input type=\"hidden\" name=\"qa_confirm_id\" id=\"qa_confirm_id\" value=\"";
        // line 13
        echo ($context["QA_CONFIRM_ID"] ?? null);
        echo "\" />
\t</dd>
\t</dl>

";
        // line 17
        if ((($context["S_TYPE"] ?? null) == 1)) {
            // line 18
            echo "\t</fieldset>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_qa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  75 => 17,  68 => 13,  62 => 12,  54 => 10,  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_qa.html", "");
    }
}
