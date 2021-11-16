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

/* images.html */
class __TwigTemplate_a7de50f386c7a972f7d15991bb31a30c1091563f8ab55ba7ac91511728cc8030 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "images.html", 1)->display($context);
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_ADD"] ?? null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_ADD_IMGS");
            echo "</h1>

\t<div>
\t\t<p>";
            // line 12
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_TABLE_EXPLAIN");
            echo "</p>
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>";
            // line 15
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_TABLE_NAME");
            echo "</th>
\t\t\t\t<th>";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_TABLE_SIZE");
            echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td><i>[";
            // line 19
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_TABLE_PLACEHOLDER");
            echo "]</i>-x1.<i>[gif|png|jpg]</i></td>
\t\t\t\t<td>22";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_TABLE_PX");
            echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td><i>[";
            // line 23
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_TABLE_PLACEHOLDER");
            echo "]</i>-x2.<i>[gif|png|jpg]</i></td>
\t\t\t\t<td>44";
            // line 24
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_TABLE_PX");
            echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td><i>[";
            // line 27
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_TABLE_PLACEHOLDER");
            echo "]</i>-x3.<i>[gif|png|jpg]</i></td>
\t\t\t\t<td>66";
            // line 28
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_TABLE_PX");
            echo "</td>
\t\t\t</tr>
\t\t</table>
\t</div>

\t<hr />

\t<h1>";
            // line 35
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_UPLOADING");
            echo "</h1>

\t";
            // line 37
            if (($context["S_NOTICE"] ?? null)) {
                // line 38
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<h3>";
                // line 39
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTICE");
                echo "</h3>
\t\t\t<p>";
                // line 40
                echo ($context["NOTICE_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 43
            echo "
\t";
            // line 44
            if (($context["S_ERROR"] ?? null)) {
                // line 45
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 46
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 47
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 50
            echo "
\t";
            // line 51
            if (($context["S_SHOW_FORM"] ?? null)) {
                // line 52
                echo "\t\t<form id=\"image_add\" method=\"post\" action=\"";
                echo ($context["U_ADD"] ?? null);
                echo "\" enctype=\"multipart/form-data\">
\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 54
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_UPLOAD_IMG");
                echo "</legend>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"img_file\">";
                // line 56
                echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_IMG_FILE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_IMG_FILE_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><input type=\"file\" id=\"img_file\" name=\"img_file\" /></dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"img_overwrite\">";
                // line 60
                echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_IMG_OVERWRITE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_IMG_OVERWRITE_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd><label><input type=\"radio\" id=\"img_overwrite\" name=\"img_overwrite\" value=\"1\"";
                // line 61
                if (($context["IMG_OVERWRITE"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " class=\"radio\" /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
                echo "</label><label><input type=\"radio\" name=\"img_overwrite\" value=\"0\"";
                if ( !($context["IMG_OVERWRITE"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " class=\"radio\" /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
                echo "</label></dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 65
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 66
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
                echo "\" />
\t\t\t\t";
                // line 67
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t</form>
\t";
            }
            // line 71
            echo "
";
        } else {
            // line 73
            echo "
\t<h1>";
            // line 74
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMAGES");
            echo "</h1>

\t<p>";
            // line 76
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMAGES_EXPLAIN");
            echo "</p>

\t<table class=\"table1 zebra-table responsive\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>";
            // line 81
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_NAME");
            echo "</th>
\t\t\t\t<th style=\"width: 10%\">X1</th>
\t\t\t\t<th style=\"width: 10%\">X2</th>
\t\t\t\t<th style=\"width: 10%\">X3</th>
\t\t\t\t<th style=\"width: 10%\">";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["imgs"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 90
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["i"], "IMG_NAME", [], "any", false, false, false, 91);
                echo "</td>
\t\t\t\t\t<td style=\"text-align: center\"><img src=\"";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["i"], "U_IMG_X1", [], "any", false, false, false, 92);
                echo "\" height=\"18\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["i"], "IMG_NAME", [], "any", false, false, false, 92);
                echo "\"></td>
\t\t\t\t\t<td style=\"text-align: center\"><img src=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["i"], "U_IMG_X2", [], "any", false, false, false, 93);
                echo "\" height=\"38\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["i"], "IMG_NAME", [], "any", false, false, false, 93);
                echo "\"></td>
\t\t\t\t\t<td style=\"text-align: center\"><img src=\"";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["i"], "U_IMG_X3", [], "any", false, false, false, 94);
                echo "\" height=\"64\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["i"], "IMG_NAME", [], "any", false, false, false, 94);
                echo "\"></td>
\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["i"], "U_DELETE", [], "any", false, false, false, 96)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["i"], "U_DELETE", [], "any", false, false, false, 96);
                    echo "\" data-ajax=\"row_delete\">";
                    echo ($context["ICON_DELETE"] ?? null);
                    echo "</a>";
                } else {
                    echo ($context["ICON_DELETE_DISABLED"] ?? null);
                }
                // line 97
                echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 100
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                // line 101
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMGS_EMPTY");
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t</tbody>
\t</table>

\t<form id=\"image_add\" method=\"post\" action=\"";
            // line 107
            echo ($context["U_ADD"] ?? null);
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"addflair\" value=\"";
            // line 109
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_ADD_IMG");
            echo "\" />
\t\t</fieldset>
\t</form>

";
        }
        // line 114
        echo "
";
        // line 115
        $this->loadTemplate("overall_footer.html", "images.html", 115)->display($context);
    }

    public function getTemplateName()
    {
        return "images.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 115,  327 => 114,  319 => 109,  314 => 107,  309 => 104,  300 => 101,  297 => 100,  290 => 97,  280 => 96,  273 => 94,  267 => 93,  261 => 92,  257 => 91,  254 => 90,  249 => 89,  242 => 85,  235 => 81,  227 => 76,  222 => 74,  219 => 73,  215 => 71,  208 => 67,  204 => 66,  200 => 65,  183 => 61,  177 => 60,  168 => 56,  163 => 54,  157 => 52,  155 => 51,  152 => 50,  146 => 47,  142 => 46,  139 => 45,  137 => 44,  134 => 43,  128 => 40,  124 => 39,  121 => 38,  119 => 37,  114 => 35,  104 => 28,  100 => 27,  94 => 24,  90 => 23,  84 => 20,  80 => 19,  74 => 16,  70 => 15,  64 => 12,  58 => 9,  49 => 7,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "images.html", "");
    }
}
