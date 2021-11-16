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

/* @phpbb_topicprefixes/event/posting_editor_subject_before.html */
class __TwigTemplate_facd6782883bf4db81ee543b3659dddbe92d2d51a2c85222d313083ae1b29898 extends \Twig\Template
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
        if (((($context["PREFIXES"] ?? null) && ($context["S_NEW_MESSAGE"] ?? null)) &&  !($context["S_PRIVMSGS"] ?? null))) {
            // line 2
            echo "\t";
            $asset_file = "@phpbb_topicprefixes/js/topic_prefixes.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 3
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"topic_prefix\">";
            // line 4
            echo ($this->extensions['phpbb\template\twig\extension']->lang("TOPIC_PREFIX") . $this->extensions['phpbb\template\twig\extension']->lang("COLON"));
            echo "</label></dt>
\t\t<dd>
\t\t\t<select name=\"topic_prefix\" id=\"topic_prefix\">
\t\t\t\t<option value=\"\">-----</option>
\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["PREFIXES"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prefix"]) {
                // line 9
                echo "\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["prefix"], "prefix_id", [], "any", false, false, false, 9);
                echo "\"";
                if ((($context["SELECTED_PREFIX"] ?? null) == twig_get_attribute($this->env, $this->source, $context["prefix"], "prefix_tag", [], "any", false, false, false, 9))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["prefix"], "prefix_tag", [], "any", false, false, false, 9);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prefix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t\t\t</select>
\t\t</dd>
\t</dl>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_topicprefixes/event/posting_editor_subject_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  68 => 9,  64 => 8,  57 => 4,  54 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_topicprefixes/event/posting_editor_subject_before.html", "");
    }
}
