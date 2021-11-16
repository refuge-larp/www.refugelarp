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

/* @stevotvr_flair/flair_item.html */
class __TwigTemplate_f736b168b466454131984ba6dc5b9185aa8dcfc1cdc6cec9e6fbc6f90bddf25c extends \Twig\Template
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
        if ((($context["FLAIR_TYPE"] ?? null) == 0)) {
            // line 2
            echo "<span class=\"flair-icon fa-stack";
            if (($context["FLAIR_SIZE"] ?? null)) {
                echo " fa-";
                echo ($context["FLAIR_SIZE"] ?? null);
                echo "x";
            }
            if ((($context["FLAIR_SIZE"] ?? null) > 1)) {
                echo " flair-lg";
            }
            echo "\" title=\"";
            echo ($context["FLAIR_NAME"] ?? null);
            if ((($context["FLAIR_COUNT"] ?? null) > 1)) {
                echo " (";
                echo ($context["FLAIR_COUNT"] ?? null);
                echo "x)";
            }
            echo "\"";
            if ((($context["FLAIR_ICON_WIDTH"] ?? null) &&  !($context["FLAIR_COLOR"] ?? null))) {
                echo " style=\"width: ";
                echo ($context["FLAIR_ICON_WIDTH"] ?? null);
                echo "em\"";
            }
            echo ">
\t";
            // line 3
            if (($context["FLAIR_COLOR"] ?? null)) {
                // line 4
                echo "\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                echo ($context["FLAIR_COLOR"] ?? null);
                echo "\" aria-hidden=\"true\"></i>
\t\t";
                // line 5
                if (($context["FLAIR_ICON"] ?? null)) {
                    // line 6
                    echo "\t\t\t<i class=\"fa ";
                    echo ($context["FLAIR_ICON"] ?? null);
                    echo " fa-stack-1x\"";
                    if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                        echo " style=\"color: #";
                        echo ($context["FLAIR_ICON_COLOR"] ?? null);
                        echo "\"";
                    }
                    echo " aria-hidden=\"true\"></i>
\t\t";
                }
                // line 8
                echo "\t";
            } elseif (($context["FLAIR_ICON"] ?? null)) {
                // line 9
                echo "\t\t<i class=\"fa ";
                echo ($context["FLAIR_ICON"] ?? null);
                echo " fa-stack-2x\"";
                if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                    echo " style=\"color: #";
                    echo ($context["FLAIR_ICON_COLOR"] ?? null);
                    echo "\"";
                }
                echo " aria-hidden=\"true\"></i>
\t";
            }
            // line 11
            echo "\t";
            if (((($context["FLAIR_COUNT"] ?? null) > 1) && ($context["FLAIR_FONT_COLOR"] ?? null))) {
                // line 12
                echo "\t\t<b class=\"flair-count\" style=\"color: #";
                echo ($context["FLAIR_FONT_COLOR"] ?? null);
                echo "\" aria-hidden=\"true\">";
                echo ($context["FLAIR_COUNT"] ?? null);
                echo "</b>
\t";
            }
            // line 14
            echo "</span>
";
        } else {
            // line 16
            echo "<span class=\"flair-icon";
            if ((($context["FLAIR_SIZE"] ?? null) > 1)) {
                echo " flair-lg";
            }
            echo "\" title=\"";
            echo ($context["FLAIR_NAME"] ?? null);
            if ((($context["FLAIR_COUNT"] ?? null) > 1)) {
                echo " (";
                echo ($context["FLAIR_COUNT"] ?? null);
                echo "x)";
            }
            echo "\">
\t";
            // line 17
            if (((($context["FLAIR_COUNT"] ?? null) > 1) && ($context["FLAIR_FONT_COLOR"] ?? null))) {
                // line 18
                echo "\t\t<b class=\"flair-count\" style=\"color: #";
                echo ($context["FLAIR_FONT_COLOR"] ?? null);
                echo "\" aria-hidden=\"true\">";
                echo ($context["FLAIR_COUNT"] ?? null);
                echo "</b>
\t";
            }
            // line 20
            echo "\t<img src=\"";
            echo ($context["FLAIR_IMG"] ?? null);
            echo "\" height=\"";
            if (( !($context["FLAIR_SIZE"] ?? null) || (($context["FLAIR_SIZE"] ?? null) == 1))) {
                echo "22";
            } elseif ((($context["FLAIR_SIZE"] ?? null) == 2)) {
                echo "44";
            } elseif ((($context["FLAIR_SIZE"] ?? null) > 2)) {
                echo "66";
            }
            echo "\" aria-hidden=\"true\" alt=\"";
            echo ($context["FLAIR_NAME"] ?? null);
            if ((($context["FLAIR_COUNT"] ?? null) > 1)) {
                echo " (";
                echo ($context["FLAIR_COUNT"] ?? null);
                echo "x)";
            }
            echo "\" />
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@stevotvr_flair/flair_item.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 20,  131 => 18,  129 => 17,  115 => 16,  111 => 14,  103 => 12,  100 => 11,  88 => 9,  85 => 8,  73 => 6,  71 => 5,  66 => 4,  64 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@stevotvr_flair/flair_item.html", "");
    }
}
