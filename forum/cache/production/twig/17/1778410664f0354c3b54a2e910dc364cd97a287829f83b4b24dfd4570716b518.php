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

/* drafts.html */
class __TwigTemplate_c3124930623a794ea4e906204d9919f55dd40f99317afd2c4700ca7af8160ea3 extends \Twig\Template
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
        echo "

";
        // line 3
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "draftrow", [], "any", false, false, false, 3))) {
            // line 4
            echo "<div class=\"panel\">
\t<div class=\"inner\">

\t<h3 class=\"draft-title\">";
            // line 7
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
            echo "</h3>
\t<p>";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT_EXPLAIN");
            echo "</p>

\t</div>
</div>

<div class=\"";
            // line 13
            if ( !($context["S_PRIVMSGS"] ?? null)) {
                echo "forumbg";
            } else {
                echo "panel";
            }
            echo "\">
\t<div class=\"inner\">

\t<ul class=\"topiclist two-long-columns\">
\t\t<li class=\"header\">
\t\t\t<dl>
\t\t\t\t<dt>";
            // line 19
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
            echo "</dt>
\t\t\t\t<dd class=\"info\">";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE_DATE");
            echo "</dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist two-long-columns";
            // line 24
            if ( !($context["S_PRIVMSGS"] ?? null)) {
                echo " topics";
            } else {
                echo " cplist";
            }
            echo "\">

\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "draftrow", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["draftrow"]) {
                // line 27
                echo "\t<li class=\"row";
                if ((twig_get_attribute($this->env, $this->source, $context["draftrow"], "S_ROW_COUNT", [], "any", false, false, false, 27) % 2 == 0)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t<dl>
\t\t\t<dt>
\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t<a href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_INSERT", [], "any", false, false, false, 31);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
                echo "\" class=\"topictitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "DRAFT_SUBJECT", [], "any", false, false, false, 31);
                echo "</a><br />
\t\t\t\t\t";
                // line 32
                if ( !($context["S_PRIVMSGS"] ?? null)) {
                    if (twig_get_attribute($this->env, $this->source, $context["draftrow"], "S_LINK_TOPIC", [], "any", false, false, false, 32)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_VIEW", [], "any", false, false, false, 32);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "TITLE", [], "any", false, false, false, 32);
                        echo "</a>
\t\t\t\t\t";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 33
$context["draftrow"], "S_LINK_FORUM", [], "any", false, false, false, 33)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "U_VIEW", [], "any", false, false, false, 33);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "TITLE", [], "any", false, false, false, 33);
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 34
                        echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPIC_FORUM");
                    }
                }
                // line 35
                echo "\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t";
                // line 36
                echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE_DATE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "DATE", [], "any", false, false, false, 36);
                echo "</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dt>
\t\t\t<dd class=\"info\"><span>";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["draftrow"], "DATE", [], "any", false, false, false, 40);
                echo "</span></dd>
\t\t</dl>
\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draftrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
\t</ul>

\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "drafts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 44,  156 => 40,  146 => 36,  143 => 35,  139 => 34,  128 => 33,  117 => 32,  109 => 31,  97 => 27,  93 => 26,  84 => 24,  77 => 20,  73 => 19,  60 => 13,  52 => 8,  48 => 7,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "drafts.html", "");
    }
}
