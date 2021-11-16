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

/* @stevotvr_flair/display_options.html */
class __TwigTemplate_a02963aa0cce23edf9525e9e057c8ed8388d7747513b320623ecdbac88965e06 extends \Twig\Template
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
        echo "<fieldset>
\t<legend>";
        // line 2
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_DISPLAY_OPTIONS");
        echo "</legend>
";
        // line 3
        if (($context["S_SETTINGS_MODE"] ?? null)) {
            // line 4
            echo "\t<p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_DISPLAY_OPTIONS_EXPLAIN");
            echo "</p>
";
        }
        // line 6
        echo "\t<dl>
\t\t<dt><label for=\"flair_show_on_profile\">";
        // line 7
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_SHOW_ON_PROFILE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_SHOW_ON_PROFILE_EXPLAIN");
        echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"flair_show_on_profile\" name=\"flair_show_on_profile\" value=\"1\"";
        // line 8
        if (($context["FLAIR_SHOW_ON_PROFILE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label><label><input type=\"radio\" name=\"flair_show_on_profile\" value=\"0\"";
        if ( !($context["FLAIR_SHOW_ON_PROFILE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"flair_show_on_posts\">";
        // line 11
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_SHOW_ON_POSTS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_SHOW_ON_POSTS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"flair_show_on_posts\" name=\"flair_show_on_posts\" value=\"1\"";
        // line 12
        if (($context["FLAIR_SHOW_ON_POSTS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label><label><input type=\"radio\" name=\"flair_show_on_posts\" value=\"0\"";
        if ( !($context["FLAIR_SHOW_ON_POSTS"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " class=\"radio\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"flair_display_limit\">";
        // line 15
        echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_DISPLAY_LIMIT") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_DISPLAY_LIMIT_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"number\" id=\"flair_display_limit\" name=\"flair_display_limit\" value=\"";
        // line 16
        echo ($context["FLAIR_DISPLAY_LIMIT"] ?? null);
        echo "\" min=\"0\" max=\"16777215\" /></dd>
\t</dl>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "@stevotvr_flair/display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 16,  99 => 15,  83 => 12,  77 => 11,  61 => 8,  55 => 7,  52 => 6,  46 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@stevotvr_flair/display_options.html", "");
    }
}
