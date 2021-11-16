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

/* manage.html */
class __TwigTemplate_6056190f90ae3ce93c8f5274d9ea19722dcebe9df2ac6678bb9b88836cb42a22 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "manage.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $asset_file = "@stevotvr_flair/flair.css";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_stylesheet($asset);        // line 4
        echo "
<a id=\"maincontent\"></a>

";
        // line 7
        if ((($context["S_ADD_CAT"] ?? null) || ($context["S_EDIT_CAT"] ?? null))) {
            // line 8
            echo "
\t<a href=\"";
            // line 9
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

\t";
            // line 11
            if (($context["S_ERROR"] ?? null)) {
                // line 12
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 13
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 14
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 17
            echo "
\t";
            // line 18
            if (($context["S_ADD_CAT"] ?? null)) {
                // line 19
                echo "\t\t<h1>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_ADD_CAT");
                echo "</h1>
\t";
            } else {
                // line 21
                echo "\t\t<h1>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_EDIT_CAT");
                echo " :: ";
                echo ($context["FLAIR_NAME"] ?? null);
                echo "</h1>
\t";
            }
            // line 23
            echo "
\t<form id=\"add_edit_cat\" method=\"post\" action=\"";
            // line 24
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 26
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_CAT_DETAILS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"cat_name\">";
            // line 28
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_CAT_NAME") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"cat_name\" name=\"cat_name\" value=\"";
            // line 29
            echo ($context["CAT_NAME"] ?? null);
            echo "\" maxlength=\"50\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t";
            // line 32
            $this->loadTemplate("@stevotvr_flair/display_options.html", "manage.html", 32)->display($context);
            // line 33
            echo "\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 34
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 35
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" />
\t\t\t";
            // line 36
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>

";
        } elseif (        // line 40
($context["S_DELETE_CAT"] ?? null)) {
            // line 41
            echo "
\t<a href=\"";
            // line 42
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

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
\t<h1>";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_DELETE_CAT");
            echo "</h1>

\t<form id=\"delete_cat\" method=\"post\" action=\"";
            // line 53
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 55
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_DELETE_CAT");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 57
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_CAT_NAME") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 58
            echo ($context["CAT_NAME"] ?? null);
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 60
            if (($context["S_HAS_FLAIR"] ?? null)) {
                // line 61
                echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete_action\">";
                // line 62
                echo ($this->extensions['phpbb\template\twig\extension']->lang("ACTION") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                echo "</label></dt>
\t\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"delete_action\" name=\"action_flair\" value=\"delete\" checked=\"checked\" /> ";
                // line 63
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_DELETE_ALL_FLAIR");
                echo "</label></dd>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"action_flair\" value=\"move\" /> ";
                // line 65
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_MOVE_FLAIR_TO");
                echo "</label>
\t\t\t\t\t\t<select name=\"flair_to_cat\">
\t\t\t\t\t\t\t<option value=\"0\">";
                // line 67
                echo $this->extensions['phpbb\template\twig\extension']->lang("FLAIR_UNCATEGORIZED");
                echo "</option>
\t\t\t\t\t\t\t";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_ID", [], "any", false, false, false, 69);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_NAME", [], "any", false, false, false, 69);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 75
            echo "\t\t\t<p class=\"quick\">
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 76
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t\t\t</p>
\t\t\t";
            // line 78
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>

";
        } elseif ((        // line 82
($context["S_ADD_FLAIR"] ?? null) || ($context["S_EDIT_FLAIR"] ?? null))) {
            // line 83
            echo "
\t";
            // line 84
            $asset_file = "@stevotvr_flair/edit_flair.js";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_script($asset);            // line 85
            echo "
\t<a href=\"";
            // line 86
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

\t";
            // line 88
            if (($context["S_ERROR"] ?? null)) {
                // line 89
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 90
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 91
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 94
            echo "
\t";
            // line 95
            if (($context["S_ADD_FLAIR"] ?? null)) {
                // line 96
                echo "\t\t<h1>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_ADD");
                echo "</h1>
\t";
            } else {
                // line 98
                echo "\t\t<h1>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_EDIT");
                echo " :: ";
                echo ($context["FLAIR_NAME"] ?? null);
                echo "</h1>
\t";
            }
            // line 100
            echo "
\t<form id=\"add_edit_flair\" method=\"post\" action=\"";
            // line 101
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 103
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_DETAILS");
            echo "</legend>
\t\t\t";
            // line 104
            if (($context["cats"] ?? null)) {
                // line 105
                echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"flair_category\">";
                // line 106
                echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_CAT") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<select name=\"flair_category\">
\t\t\t\t\t\t\t<option value=\"0\">";
                // line 109
                echo $this->extensions['phpbb\template\twig\extension']->lang("FLAIR_UNCATEGORIZED");
                echo "</option>
\t\t\t\t\t\t\t";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_ID", [], "any", false, false, false, 111);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["cat"], "S_SELECTED", [], "any", false, false, false, 111)) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["cat"], "CAT_NAME", [], "any", false, false, false, 111);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 117
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_name\">";
            // line 118
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_NAME") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"flair_name\" name=\"flair_name\" value=\"";
            // line 119
            echo ($context["FLAIR_NAME"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_desc\">";
            // line 122
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_DESC") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_DESC_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><textarea id=\"flair_desc\" name=\"flair_desc\" rows=\"5\" cols=\"45\" data-bbcode=\"true\">";
            // line 123
            echo ($context["FLAIR_DESC"] ?? null);
            echo "</textarea></dd>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"parse_bbcode\"";
            // line 125
            if (($context["S_PARSE_BBCODE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"<";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"parse_smilies\"<";
            // line 126
            if (($context["S_PARSE_SMILIES_CHECKED"] ?? null)) {
                echo " checked=\"checked\"<";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"parse_magic_url\"<";
            // line 127
            if (($context["S_PARSE_MAGIC_URL_CHECKED"] ?? null)) {
                echo " checked=\"checked\"<";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PARSE_URLS");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 132
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_APPEARANCE");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_type\">";
            // line 134
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_TYPE") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select name=\"flair_type\" id=\"flair_type\">
\t\t\t\t\t\t<option value=\"0\"";
            // line 137
            if ((($context["FLAIR_TYPE"] ?? null) == 0)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_TYPE_FA");
            echo "</option>
\t\t\t\t\t\t<option value=\"1\"";
            // line 138
            if ((($context["FLAIR_TYPE"] ?? null) == 1)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_TYPE_IMG");
            echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 143
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_PREVIEW") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd id=\"flair_preview\">
\t\t\t\t\t";
            // line 145
            if ((($context["FLAIR_TYPE"] ?? null) == 0)) {
                // line 146
                echo "\t\t\t\t\t\t<span class=\"flair-icon fa-stack fa-2x flair-lg\">
\t\t\t\t\t\t\t";
                // line 147
                if (($context["FLAIR_COLOR"] ?? null)) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                    echo ($context["FLAIR_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    // line 149
                    if (($context["FLAIR_ICON"] ?? null)) {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo ($context["FLAIR_ICON"] ?? null);
                        echo " fa-stack-1x\"";
                        if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                            echo " style=\"color: #";
                            echo ($context["FLAIR_ICON_COLOR"] ?? null);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 152
                    echo "\t\t\t\t\t\t\t";
                } elseif (($context["FLAIR_ICON"] ?? null)) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa ";
                    echo ($context["FLAIR_ICON"] ?? null);
                    echo " fa-stack-2x\"";
                    if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                        echo " style=\"color: #";
                        echo ($context["FLAIR_ICON_COLOR"] ?? null);
                        echo "\"";
                    }
                    echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t";
                }
                // line 155
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"flair-icon fa-stack\">
\t\t\t\t\t\t\t";
                // line 157
                if (($context["FLAIR_COLOR"] ?? null)) {
                    // line 158
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                    echo ($context["FLAIR_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    // line 159
                    if (($context["FLAIR_ICON"] ?? null)) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo ($context["FLAIR_ICON"] ?? null);
                        echo " fa-stack-1x\"";
                        if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                            echo " style=\"color: #";
                            echo ($context["FLAIR_ICON_COLOR"] ?? null);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 162
                    echo "\t\t\t\t\t\t\t";
                } elseif (($context["FLAIR_ICON"] ?? null)) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa ";
                    echo ($context["FLAIR_ICON"] ?? null);
                    echo " fa-stack-2x\"";
                    if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                        echo " style=\"color: #";
                        echo ($context["FLAIR_ICON_COLOR"] ?? null);
                        echo "\"";
                    }
                    echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t";
                }
                // line 165
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                // line 166
                if (($context["FLAIR_FONT_COLOR"] ?? null)) {
                    // line 167
                    echo "\t\t\t\t\t\t\t<span class=\"flair-icon fa-stack fa-2x flair-lg\">
\t\t\t\t\t\t\t\t";
                    // line 168
                    if (($context["FLAIR_COLOR"] ?? null)) {
                        // line 169
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                        echo ($context["FLAIR_COLOR"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        // line 170
                        if (($context["FLAIR_ICON"] ?? null)) {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                            echo ($context["FLAIR_ICON"] ?? null);
                            echo " fa-stack-1x\"";
                            if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                                echo " style=\"color: #";
                                echo ($context["FLAIR_ICON_COLOR"] ?? null);
                                echo "\"";
                            }
                            echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 173
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif (($context["FLAIR_ICON"] ?? null)) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo ($context["FLAIR_ICON"] ?? null);
                        echo " fa-stack-2x\"";
                        if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                            echo " style=\"color: #";
                            echo ($context["FLAIR_ICON_COLOR"] ?? null);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t<b class=\"flair-count\" style=\"color: #";
                    echo ($context["FLAIR_FONT_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\">2</b>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"flair-icon fa-stack\">
\t\t\t\t\t\t\t\t";
                    // line 179
                    if (($context["FLAIR_COLOR"] ?? null)) {
                        // line 180
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                        echo ($context["FLAIR_COLOR"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        // line 181
                        if (($context["FLAIR_ICON"] ?? null)) {
                            // line 182
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                            echo ($context["FLAIR_ICON"] ?? null);
                            echo " fa-stack-1x\"";
                            if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                                echo " style=\"color: #";
                                echo ($context["FLAIR_ICON_COLOR"] ?? null);
                                echo "\"";
                            }
                            echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 184
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif (($context["FLAIR_ICON"] ?? null)) {
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo ($context["FLAIR_ICON"] ?? null);
                        echo " fa-stack-2x\"";
                        if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                            echo " style=\"color: #";
                            echo ($context["FLAIR_ICON_COLOR"] ?? null);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t<b class=\"flair-count\" style=\"color: #";
                    echo ($context["FLAIR_FONT_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\">2</b>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t";
            } else {
                // line 191
                echo "\t\t\t\t\t\t<span class=\"flair-icon flair_lg\">
\t\t\t\t\t\t\t<img src=\"";
                // line 192
                echo (($context["FLAIR_IMG_PATH"] ?? null) . ($context["FLAIR_IMG_X2"] ?? null));
                echo "\" height=\"44\" aria-hidden=\"true\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"flair-icon\">
\t\t\t\t\t\t\t<img src=\"";
                // line 195
                echo (($context["FLAIR_IMG_PATH"] ?? null) . ($context["FLAIR_IMG"] ?? null));
                echo "\" height=\"22\" aria-hidden=\"true\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                // line 197
                if (($context["FLAIR_FONT_COLOR"] ?? null)) {
                    // line 198
                    echo "\t\t\t\t\t\t\t<span class=\"flair-icon flair-lg\">
\t\t\t\t\t\t\t\t<b class=\"flair-count\" style=\"color: #";
                    // line 199
                    echo ($context["FLAIR_FONT_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\">2</b>
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 200
                    echo (($context["FLAIR_IMG_PATH"] ?? null) . ($context["FLAIR_IMG_X2"] ?? null));
                    echo "\" height=\"44\" aria-hidden=\"true\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"flair-icon\">
\t\t\t\t\t\t\t\t<b class=\"flair-count\" style=\"color: #";
                    // line 203
                    echo ($context["FLAIR_FONT_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\">2</b>
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 204
                    echo (($context["FLAIR_IMG_PATH"] ?? null) . ($context["FLAIR_IMG"] ?? null));
                    echo "\" height=\"22\" aria-hidden=\"true\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 207
                echo "\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"type_fa\">
\t\t\t\t<dt><label for=\"flair_color\">";
            // line 211
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_COLOR") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"flair_color\" name=\"flair_color\" value=\"";
            // line 213
            echo ($context["FLAIR_COLOR"] ?? null);
            echo "\" size=\"6\" maxlength=\"6\" />
\t\t\t\t\t&nbsp;&nbsp;<span>[ <a href=\"#\" id=\"color_palette_toggle1\">";
            // line 214
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLOUR_SWATCH");
            echo "</a> ]</span>
\t\t\t\t\t<div id=\"color_palette_placeholder\" class=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#flair_color\"></div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"type_fa\">
\t\t\t\t<dt><label for=\"flair_icon\">";
            // line 219
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_ICON") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_ICON_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"flair_icon\" name=\"flair_icon\" value=\"";
            // line 220
            echo ($context["FLAIR_ICON"] ?? null);
            echo "\" maxlength=\"50\" /></dd>
\t\t\t</dl>
\t\t\t<dl class=\"type_fa\">
\t\t\t\t<dt><label for=\"flair_icon_color\">";
            // line 223
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_ICON_COLOR") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_ICON_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"flair_icon_color\" name=\"flair_icon_color\" value=\"";
            // line 225
            echo ($context["FLAIR_ICON_COLOR"] ?? null);
            echo "\" size=\"6\" maxlength=\"6\" />
\t\t\t\t\t&nbsp;&nbsp;<span>[ <a href=\"#\" id=\"color_palette_toggle2\">";
            // line 226
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLOUR_SWATCH");
            echo "</a> ]</span>
\t\t\t\t\t<div id=\"color_palette_placeholder2\" class=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#flair_icon_color\"></div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"type_img\">
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"flair_img\">";
            // line 232
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_IMG") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_IMG_EXPLAIN");
            echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t";
            // line 235
            if (($context["imgs"] ?? null)) {
                // line 236
                echo "\t\t\t\t\t\t<select id=\"flair_img\" name=\"flair_img\">
\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t";
                // line 238
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["imgs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t<option ";
                    if (twig_get_attribute($this->env, $this->source, $context["img"], "S_SELECTED", [], "any", false, false, false, 239)) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "IMG_NAME", [], "any", false, false, false, 239);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 241
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
            } else {
                // line 243
                echo "\t\t\t\t\t\t";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_NO_IMGS");
                echo "
\t\t\t\t\t";
            }
            // line 245
            echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_font_color\">";
            // line 248
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_FONT_COLOR") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FONT_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"flair_font_color\" name=\"flair_font_color\" value=\"";
            // line 250
            echo ($context["FLAIR_FONT_COLOR"] ?? null);
            echo "\" size=\"6\" maxlength=\"6\" />
\t\t\t\t\t&nbsp;&nbsp;<span>[ <a href=\"#\" id=\"color_palette_toggle3\">";
            // line 251
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLOUR_SWATCH");
            echo "</a> ]</span>
\t\t\t\t\t<div id=\"color_palette_placeholder3\" class=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#flair_font_color\"></div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 257
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_GROUPS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_groups\">";
            // line 259
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_GROUPS") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_GROUPS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select name=\"flair_groups[]\" id=\"flair_groups\" multiple=\"multiple\" size=\"10\">
\t\t\t\t\t\t";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["group"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                // line 263
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["g"], "GROUP_ID", [], "any", false, false, false, 263);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["g"], "S_SELECTED", [], "any", false, false, false, 263)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["g"], "GROUP_NAME", [], "any", false, false, false, 263);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_groups_auto\">";
            // line 269
            echo ($this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_FORM_GROUPS_AUTO") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_GROUPS_AUTO_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" id=\"flair_groups_auto\" name=\"flair_groups_auto\" value=\"1\"";
            // line 270
            if (($context["FLAIR_GROUPS_AUTO"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " class=\"radio\" /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label><label><input type=\"radio\" name=\"flair_groups_auto\" value=\"0\"";
            if ( !($context["FLAIR_GROUPS_AUTO"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " class=\"radio\" /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 274
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_AUTO_ASSIGN");
            echo "</legend>
\t\t\t<p>";
            // line 275
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_AUTO_ASSIGN_EXPLAIN");
            echo "</p>
\t\t\t";
            // line 276
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["trigger"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 277
                echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"flair_trigger_";
                // line 278
                echo twig_get_attribute($this->env, $this->source, $context["t"], "TRIG_KEY", [], "any", false, false, false, 278);
                echo "\">";
                echo (twig_get_attribute($this->env, $this->source, $context["t"], "TRIG_NAME", [], "any", false, false, false, 278) . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
                echo "</label>";
                if (twig_get_attribute($this->env, $this->source, $context["t"], "TRIG_EXPLAIN", [], "any", false, false, false, 278)) {
                    echo "<br /><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["t"], "TRIG_EXPLAIN", [], "any", false, false, false, 278);
                    echo "</span>";
                }
                echo "</dt>
\t\t\t\t\t<dd><input type=\"number\" id=\"flair_trigger_";
                // line 279
                echo twig_get_attribute($this->env, $this->source, $context["t"], "TRIG_KEY", [], "any", false, false, false, 279);
                echo "\" name=\"flair_triggers[";
                echo twig_get_attribute($this->env, $this->source, $context["t"], "TRIG_KEY", [], "any", false, false, false, 279);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["t"], "TRIG_VALUE", [], "any", false, false, false, 279);
                echo "\" min=\"0\" max=\"16777215\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "\t\t</fieldset>
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 284
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 285
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" />
\t\t\t";
            // line 286
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
\t<script type=\"text/javascript\">
\t\tvar flair = {
\t\t\timgPath:\t'";
            // line 291
            echo twig_escape_filter($this->env, ($context["FLAIR_IMG_PATH"] ?? null), "js");
            echo "'
\t\t};
\t</script>

";
        } else {
            // line 296
            echo "
\t";
            // line 297
            if ( !($context["S_IN_CAT"] ?? null)) {
                // line 298
                echo "\t\t<h1>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_MANAGE_CATS");
                echo "</h1>

\t\t<p>";
                // line 300
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_MANAGE_CATS_EXPLAIN");
                echo "</p>

\t\t<table class=\"table1 zebra-table responsive\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 305
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_NAME");
                echo "</th>
\t\t\t\t\t<th style=\"width: 10%\">";
                // line 306
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_DISPLAY_ON");
                echo "</th>
\t\t\t\t\t<th style=\"width: 10%\">";
                // line 307
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
                echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
                // line 311
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? null));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 312
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><strong>";
                    // line 313
                    if (twig_get_attribute($this->env, $this->source, $context["c"], "U_FLAIR", [], "any", false, false, false, 313)) {
                        echo "<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["c"], "U_FLAIR", [], "any", false, false, false, 313);
                        echo "\">";
                    }
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "CAT_NAME", [], "any", false, false, false, 313);
                    if (twig_get_attribute($this->env, $this->source, $context["c"], "U_FLAIR", [], "any", false, false, false, 313)) {
                        echo "</a>";
                    }
                    echo "</strong></td>
\t\t\t\t\t\t<td>";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "DISPLAY_ON", [], "any", false, false, false, 314);
                    echo "</td>
\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                    // line 316
                    echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t<span class=\"up\"><a href=\"";
                    // line 317
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "U_MOVE_UP", [], "any", false, false, false, 317);
                    echo "\" data-ajax=\"row_up\">";
                    echo ($context["ICON_MOVE_UP"] ?? null);
                    echo "</a></span>
\t\t\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                    // line 318
                    echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t<span class=\"down\"><a href=\"";
                    // line 319
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "U_MOVE_DOWN", [], "any", false, false, false, 319);
                    echo "\" data-ajax=\"row_down\">";
                    echo ($context["ICON_MOVE_DOWN"] ?? null);
                    echo "</a></span>
\t\t\t\t\t\t\t<a href=\"";
                    // line 320
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "U_EDIT", [], "any", false, false, false, 320);
                    echo "\">";
                    echo ($context["ICON_EDIT"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t<a href=\"";
                    // line 321
                    echo twig_get_attribute($this->env, $this->source, $context["c"], "U_DELETE", [], "any", false, false, false, 321);
                    echo "\">";
                    echo ($context["ICON_DELETE"] ?? null);
                    echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 325
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\" style=\"text-align: center;\">";
                    // line 326
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_CATS_EMPTY");
                    echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "\t\t\t</tbody>
\t\t</table>

\t\t<form id=\"flair_add\" method=\"post\" action=\"";
                // line 332
                echo ($context["U_ADD_CAT"] ?? null);
                echo "\">
\t\t\t<fieldset class=\"quick\">
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"addcat\" value=\"";
                // line 334
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_ADD_CAT");
                echo "\" />
\t\t\t</fieldset>
\t\t</form>
\t";
            } else {
                // line 338
                echo "\t\t<a href=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" style=\"float: ";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo ";\">&laquo; ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
                echo "</a>
\t";
            }
            // line 340
            echo "
\t<h1>";
            // line 341
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_MANAGE");
            echo " :: ";
            echo ($context["CAT_NAME"] ?? null);
            echo "</h1>

\t<p>";
            // line 343
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_MANAGE_EXPLAIN");
            echo "</p>

\t<table class=\"table1 zebra-table responsive\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th style=\"width: 23px\">&nbsp;</th>
\t\t\t\t<th>";
            // line 349
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_NAME");
            echo "</th>
\t\t\t\t<th style=\"width: 10%\">";
            // line 350
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 354
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["flair"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 355
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td style=\"text-align: center\">
\t\t\t\t\t\t";
                // line 357
                if ((twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_TYPE", [], "any", false, false, false, 357) == 0)) {
                    // line 358
                    echo "\t\t\t\t\t\t\t<span class=\"flair-icon fa-stack\">
\t\t\t\t\t\t\t\t";
                    // line 359
                    if (twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_COLOR", [], "any", false, false, false, 359)) {
                        // line 360
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                        echo twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_COLOR", [], "any", false, false, false, 360);
                        echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        // line 361
                        if (twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_ICON", [], "any", false, false, false, 361)) {
                            // line 362
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                            echo twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_ICON", [], "any", false, false, false, 362);
                            echo " fa-stack-1x\"";
                            if (twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_ICON_COLOR", [], "any", false, false, false, 362)) {
                                echo " style=\"color: #";
                                echo twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_ICON_COLOR", [], "any", false, false, false, 362);
                                echo "\"";
                            }
                            echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 364
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_ICON", [], "any", false, false, false, 364)) {
                        // line 365
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_ICON", [], "any", false, false, false, 365);
                        echo " fa-stack-2x\"";
                        if (twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_ICON_COLOR", [], "any", false, false, false, 365)) {
                            echo " style=\"color: #";
                            echo twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_ICON_COLOR", [], "any", false, false, false, 365);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 367
                    echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                } else {
                    // line 369
                    echo "\t\t\t\t\t\t\t<span class=\"flair-icon\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 370
                    echo twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_IMG", [], "any", false, false, false, 370);
                    echo "\" height=\"22\" aria-hidden=\"true\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 373
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td><strong><a href=\"";
                // line 374
                echo twig_get_attribute($this->env, $this->source, $context["f"], "U_EDIT", [], "any", false, false, false, 374);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["f"], "FLAIR_NAME", [], "any", false, false, false, 374);
                echo "</a></strong></td>
\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 376
                echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                echo "</span>
\t\t\t\t\t\t<span class=\"up\"><a href=\"";
                // line 377
                echo twig_get_attribute($this->env, $this->source, $context["f"], "U_MOVE_UP", [], "any", false, false, false, 377);
                echo "\" data-ajax=\"row_up\">";
                echo ($context["ICON_MOVE_UP"] ?? null);
                echo "</a></span>
\t\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 378
                echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                echo "</span>
\t\t\t\t\t\t<span class=\"down\"><a href=\"";
                // line 379
                echo twig_get_attribute($this->env, $this->source, $context["f"], "U_MOVE_DOWN", [], "any", false, false, false, 379);
                echo "\" data-ajax=\"row_down\">";
                echo ($context["ICON_MOVE_DOWN"] ?? null);
                echo "</a></span>
\t\t\t\t\t\t<a href=\"";
                // line 380
                echo twig_get_attribute($this->env, $this->source, $context["f"], "U_EDIT", [], "any", false, false, false, 380);
                echo "\">";
                echo ($context["ICON_EDIT"] ?? null);
                echo "</a>
\t\t\t\t\t\t<a href=\"";
                // line 381
                echo twig_get_attribute($this->env, $this->source, $context["f"], "U_DELETE", [], "any", false, false, false, 381);
                echo "\" data-ajax=\"row_delete\">";
                echo ($context["ICON_DELETE"] ?? null);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 385
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\" style=\"text-align: center;\">";
                // line 386
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_EMPTY");
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 389
            echo "\t\t</tbody>
\t</table>

\t<form id=\"flair_add\" method=\"post\" action=\"";
            // line 392
            echo ($context["U_ADD_FLAIR"] ?? null);
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"addflair\" value=\"";
            // line 394
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_FLAIR_ADD");
            echo "\" />
\t\t</fieldset>
\t</form>

";
        }
        // line 399
        echo "
";
        // line 400
        $this->loadTemplate("overall_footer.html", "manage.html", 400)->display($context);
    }

    public function getTemplateName()
    {
        return "manage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1251 => 400,  1248 => 399,  1240 => 394,  1235 => 392,  1230 => 389,  1221 => 386,  1218 => 385,  1207 => 381,  1201 => 380,  1195 => 379,  1191 => 378,  1185 => 377,  1181 => 376,  1174 => 374,  1171 => 373,  1165 => 370,  1162 => 369,  1158 => 367,  1146 => 365,  1143 => 364,  1131 => 362,  1129 => 361,  1124 => 360,  1122 => 359,  1119 => 358,  1117 => 357,  1113 => 355,  1108 => 354,  1101 => 350,  1097 => 349,  1088 => 343,  1081 => 341,  1078 => 340,  1068 => 338,  1061 => 334,  1056 => 332,  1051 => 329,  1042 => 326,  1039 => 325,  1028 => 321,  1022 => 320,  1016 => 319,  1012 => 318,  1006 => 317,  1002 => 316,  997 => 314,  985 => 313,  982 => 312,  977 => 311,  970 => 307,  966 => 306,  962 => 305,  954 => 300,  948 => 298,  946 => 297,  943 => 296,  935 => 291,  927 => 286,  923 => 285,  919 => 284,  915 => 282,  902 => 279,  890 => 278,  887 => 277,  883 => 276,  879 => 275,  875 => 274,  858 => 270,  852 => 269,  846 => 265,  831 => 263,  827 => 262,  819 => 259,  814 => 257,  805 => 251,  801 => 250,  794 => 248,  789 => 245,  783 => 243,  779 => 241,  766 => 239,  762 => 238,  758 => 236,  756 => 235,  748 => 232,  739 => 226,  735 => 225,  728 => 223,  722 => 220,  716 => 219,  708 => 214,  704 => 213,  697 => 211,  692 => 208,  689 => 207,  683 => 204,  679 => 203,  673 => 200,  669 => 199,  666 => 198,  664 => 197,  659 => 195,  653 => 192,  650 => 191,  647 => 190,  640 => 187,  628 => 185,  625 => 184,  613 => 182,  611 => 181,  606 => 180,  604 => 179,  597 => 176,  585 => 174,  582 => 173,  570 => 171,  568 => 170,  563 => 169,  561 => 168,  558 => 167,  556 => 166,  553 => 165,  541 => 163,  538 => 162,  526 => 160,  524 => 159,  519 => 158,  517 => 157,  513 => 155,  501 => 153,  498 => 152,  486 => 150,  484 => 149,  479 => 148,  477 => 147,  474 => 146,  472 => 145,  467 => 143,  455 => 138,  447 => 137,  441 => 134,  436 => 132,  424 => 127,  416 => 126,  408 => 125,  403 => 123,  397 => 122,  391 => 119,  387 => 118,  384 => 117,  378 => 113,  363 => 111,  359 => 110,  355 => 109,  349 => 106,  346 => 105,  344 => 104,  340 => 103,  335 => 101,  332 => 100,  324 => 98,  318 => 96,  316 => 95,  313 => 94,  307 => 91,  303 => 90,  300 => 89,  298 => 88,  289 => 86,  286 => 85,  272 => 84,  269 => 83,  267 => 82,  260 => 78,  255 => 76,  252 => 75,  246 => 71,  235 => 69,  231 => 68,  227 => 67,  222 => 65,  217 => 63,  213 => 62,  210 => 61,  208 => 60,  203 => 58,  199 => 57,  194 => 55,  189 => 53,  184 => 51,  181 => 50,  175 => 47,  171 => 46,  168 => 45,  166 => 44,  157 => 42,  154 => 41,  152 => 40,  145 => 36,  141 => 35,  137 => 34,  134 => 33,  132 => 32,  126 => 29,  122 => 28,  117 => 26,  112 => 24,  109 => 23,  101 => 21,  95 => 19,  93 => 18,  90 => 17,  84 => 14,  80 => 13,  77 => 12,  75 => 11,  66 => 9,  63 => 8,  61 => 7,  56 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "manage.html", "");
    }
}
