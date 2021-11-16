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

/* @phpbb_boardannouncements/event/acp_overall_footer_after.html */
class __TwigTemplate_12d9ae971e645a498c6475bb35e6d4e48ad18ceb34834eb5624c668f229f77c8 extends \Twig\Template
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
        if (($context["S_BOARD_ANNOUNCEMENTS"] ?? null)) {
            // line 2
            echo "
\t";
            // line 3
            if ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "INCLUDED_COLPICKJS", [], "any", false, false, false, 3)) {
                // line 4
                echo "\t\t";
                $asset_file = "@phpbb_boardannouncements/colpick.js";
                $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->env->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
                }
                $this->env->get_assets_bag()->add_script($asset);                // line 5
                echo "\t\t";
                $asset_file = "@phpbb_boardannouncements/colpick.css";
                $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->env->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
                }
                $this->env->get_assets_bag()->add_stylesheet($asset);                // line 6
                echo "\t\t";
                $value = true;
                $context['definition']->set('INCLUDED_COLPICKJS', $value);
                // line 7
                echo "\t";
            }
            // line 8
            echo "
\t";
            // line 9
            if ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "INCLUDED_DATETIMEPICKERJS", [], "any", false, false, false, 9)) {
                // line 10
                echo "\t\t";
                $asset_file = "@phpbb_boardannouncements/datetimepicker/jquery.datetimepicker.full.min.js";
                $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->env->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
                }
                $this->env->get_assets_bag()->add_script($asset);                // line 11
                echo "\t\t";
                $asset_file = "@phpbb_boardannouncements/datetimepicker/jquery.datetimepicker.min.css";
                $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->env->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
                }
                $this->env->get_assets_bag()->add_stylesheet($asset);                // line 12
                echo "\t\t";
                $value = true;
                $context['definition']->set('INCLUDED_DATETIMEPICKERJS', $value);
                // line 13
                echo "\t";
            }
            // line 14
            echo "
\t<script>
\tjQuery(function(\$) {
\t\tvar bgcolor = '";
            // line 17
            echo twig_escape_filter($this->env, ($context["BOARD_ANNOUNCEMENTS_BGCOLOR"] ?? null), "js");
            echo "';
\t\t\$('#board_announcements_bgcolor').colpick({
\t\t\tlayout: 'hex',
\t\t\tsubmit: 0,
\t\t\tonBeforeShow: function() {
\t\t\t\tif (bgcolor !== '') {
\t\t\t\t\t\$(this).colpickSetColor(bgcolor);
\t\t\t\t\tbgcolor = '';
\t\t\t\t}
\t\t\t},
\t\t\tonChange: function(hsb, hex, rgb, el, bySetColor) {
\t\t\t\t\$(el).css({
\t\t\t\t\t'border-right-color': '#' + hex,
\t\t\t\t\t'border-right-width': '20px',
\t\t\t\t\t'border-right-type': 'solid'
\t\t\t\t});
\t\t\t\tif (!bySetColor) {
\t\t\t\t\t\$(el).val(hex);
\t\t\t\t}
\t\t\t}
\t\t}).keyup(function() {
\t\t\t\$(this).colpickSetColor(this.value || 'ffffff');
\t\t});
\t\t\$('#board_announcements_expiry').datetimepicker({
\t\t\tformat:'";
            // line 41
            echo twig_escape_filter($this->env, ($context["PICKER_DATE_FORMAT"] ?? null), "js");
            echo "',
\t\t\tvalidateOnBlur: false,
\t\t\tminDate: 0
\t\t});
\t\t\$.datetimepicker.setLocale('";
            // line 45
            echo ($context["S_USER_LANG"] ?? null);
            echo "')
\t});
\t</script>

";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_boardannouncements/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 45,  155 => 41,  128 => 17,  123 => 14,  120 => 13,  116 => 12,  101 => 11,  86 => 10,  84 => 9,  81 => 8,  78 => 7,  74 => 6,  59 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_boardannouncements/event/acp_overall_footer_after.html", "");
    }
}
