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

/* @phpbbmodders_banhammer/event/memberlist_view_content_prepend.html */
class __TwigTemplate_79ed22b21069c9036440991672f1758e079da86102007acb82140269c123d156 extends \Twig\Template
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
        if (($context["BH_MESSAGE"] ?? null)) {
            // line 2
            echo "<div class=\"panel bg2\" style=\"background-color: ";
            echo ($context["BH_STYLE"] ?? null);
            echo ";\">
\t<div class=\"inner bh\">
\t\t<span>";
            // line 4
            echo ($context["BH_MESSAGE"] ?? null);
            echo "</span>
\t</div>
</div>

";
        } elseif (        // line 8
($context["S_SHOW_BH"] ?? null)) {
            // line 9
            echo "<div class=\"panel bg2\">
\t<p class=\"bh bh-click\">";
            // line 10
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_THIS_USER");
            echo "</p>
\t<div class=\"inner\" id=\"bh-options\" style=\"display: none;\">
\t\t<form id=\"bh-form\" method=\"post\" action=\"";
            // line 12
            echo ($context["U_HAMMERBAN"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_BAN_EMAIL");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"ban_email\" value=\"1\" ";
            // line 17
            if (($context["BH_BAN_EMAIL"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> &nbsp;
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"ban_email\" value=\"0\" ";
            // line 18
            if ( !($context["BH_BAN_EMAIL"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>\t\t\t
\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
            // line 22
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_BAN_IP");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_BAN_IP_EXPLAIN");
            echo "</span></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"ban_ip\" value=\"1\" ";
            // line 24
            if (($context["BH_BAN_IP"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> &nbsp;
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"ban_ip\" value=\"0\" ";
            // line 25
            if ( !($context["BH_BAN_IP"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
            // line 29
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_LENGTH");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_LENGTH_EXPLAIN");
            echo "</span></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<select name=\"ban_time\" id=\"ban_time\">";
            // line 31
            echo ($context["BAN_TIME"] ?? null);
            echo "</select>
\t\t\t\t\t</dd>
\t\t\t\t</dl>\t\t\t\t\t
\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
            // line 35
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_DEL_POSTS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_posts\" value=\"1\" ";
            // line 37
            if (($context["BH_DEL_POSTS"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> &nbsp;
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_posts\" value=\"0\" ";
            // line 38
            if ( !($context["BH_DEL_POSTS"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
            // line 42
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_DEL_PRIVMSGS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_privmsgs\" value=\"1\" ";
            // line 44
            if (($context["BH_DEL_PRIVMSGS"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> &nbsp;
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_privmsgs\" value=\"0\" ";
            // line 45
            if ( !($context["BH_DEL_PRIVMSGS"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
            // line 49
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_DEL_AVATAR");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_avatar\" value=\"1\" ";
            // line 51
            if (($context["BH_DEL_AVATAR"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> &nbsp;
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_avatar\" value=\"0\" ";
            // line 52
            if ( !($context["BH_DEL_AVATAR"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_DEL_SIGNATURE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_signature\" value=\"1\" ";
            // line 58
            if (($context["BH_DEL_SIGNATURE"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> &nbsp;
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_signature\" value=\"0\" ";
            // line 59
            if ( !($context["BH_DEL_SIGNATURE"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
            // line 63
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_DEL_PROFILE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_profile\" value=\"1\" ";
            // line 65
            if (($context["BH_DEL_PROFILE"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label> &nbsp;
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"del_profile\" value=\"0\" ";
            // line 66
            if ( !($context["BH_DEL_PROFILE"] ?? null)) {
                echo "checked=\"checked\"";
            }
            echo "/> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t";
            // line 69
            if (($context["L_BH_MOVE_GROUP"] ?? null)) {
                // line 70
                echo "\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
                // line 71
                echo $this->extensions['phpbb\template\twig\extension']->lang("BH_MOVE_GROUP");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"move_group\" value=\"1\" checked=\"checked\" /> ";
                // line 73
                echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
                echo "</label> &nbsp;
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"move_group\" value=\"0\" /> ";
                // line 74
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
                echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t";
            if (($context["S_BH_SFS"] ?? null)) {
                // line 79
                echo "\t\t\t\t<dl class=\"bg2 bh_hover\">
\t\t\t\t\t<dt><label>";
                // line 80
                echo $this->extensions['phpbb\template\twig\extension']->lang("SFS_REPORT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"sfs_report\" value=\"1\" checked=\"checked\" /> ";
                // line 82
                echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
                echo "</label> &nbsp;
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"sfs_report\" value=\"0\" /> ";
                // line 83
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
                echo "</label>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
            // line 88
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_BAN_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd><input name=\"bh_reason\" type=\"text\" class=\"text medium\" maxlength=\"255\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label>";
            // line 92
            echo $this->extensions['phpbb\template\twig\extension']->lang("BH_BAN_GIVE_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd><input name=\"bh_reason_user\" type=\"text\" class=\"text medium\" maxlength=\"255\" /></dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 97
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 98
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" />
\t\t\t</fieldset>
\t\t</form>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbbmodders_banhammer/event/memberlist_view_content_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 98,  324 => 97,  315 => 92,  307 => 88,  304 => 87,  297 => 83,  293 => 82,  287 => 80,  284 => 79,  281 => 78,  274 => 74,  270 => 73,  264 => 71,  261 => 70,  259 => 69,  249 => 66,  241 => 65,  235 => 63,  224 => 59,  216 => 58,  210 => 56,  199 => 52,  191 => 51,  185 => 49,  174 => 45,  166 => 44,  160 => 42,  149 => 38,  141 => 37,  135 => 35,  128 => 31,  120 => 29,  109 => 25,  101 => 24,  93 => 22,  82 => 18,  74 => 17,  68 => 15,  62 => 12,  57 => 10,  54 => 9,  52 => 8,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbbmodders_banhammer/event/memberlist_view_content_prepend.html", "");
    }
}
