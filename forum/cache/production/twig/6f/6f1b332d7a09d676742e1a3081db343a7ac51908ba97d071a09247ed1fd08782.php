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

/* settings.html */
class __TwigTemplate_b8a2359b1d030997ad0464435b7065c1240a41855260420146f878f3479d75e5 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "settings.html", 1)->display($context);
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("SETTINGS");
        echo "</h1>

";
        // line 7
        if (($context["S_ERROR"] ?? null)) {
            // line 8
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 10
            echo ($context["ERROR_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 13
        echo "
<form id=\"flair_settings\" method=\"post\" action=\"";
        // line 14
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 16
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_OPTIONS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"flair_notify_users\">";
        // line 18
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_NOTIFY_USERS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_NOTIFY_USERS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" id=\"flair_notify_users\" name=\"flair_notify_users\" value=\"1\"";
        // line 19
        if (($context["FLAIR_NOTIFY_USERS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label><label><input type=\"radio\" name=\"flair_notify_users\" value=\"0\"";
        if ( !($context["FLAIR_NOTIFY_USERS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t</fieldset>
\t";
        // line 22
        $this->loadTemplate("@stevotvr_flair/display_options.html", "settings.html", 22)->display($context);
        // line 23
        echo "\t<fieldset>
\t\t<legend>";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 26
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 27
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />
\t\t</p>
\t\t";
        // line 29
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

";
        // line 33
        $this->loadTemplate("overall_footer.html", "settings.html", 33)->display($context);
    }

    public function getTemplateName()
    {
        return "settings.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  118 => 29,  113 => 27,  109 => 26,  104 => 24,  101 => 23,  99 => 22,  83 => 19,  77 => 18,  72 => 16,  67 => 14,  64 => 13,  58 => 10,  54 => 9,  51 => 8,  49 => 7,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "settings.html", "");
    }
}
