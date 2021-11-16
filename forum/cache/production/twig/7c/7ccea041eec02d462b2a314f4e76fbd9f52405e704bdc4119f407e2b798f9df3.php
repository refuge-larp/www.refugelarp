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

/* @paul999_tfa/event/overall_footer_body_after.html */
class __TwigTemplate_778a3f9175cff9c757be7cc98eb3aa58d7710e554f841ca247e6adbc455c2400 extends \Twig\Template
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
        if (($context["U2F_REQ"] ?? null)) {
            // line 2
            echo "<script>
    ";
            // line 4
            echo "    var req = ";
            echo ($context["U2F_REQ"] ?? null);
            echo ";
    console.log(\"Loading with \", req);
    \$(document).ready(function() {
        console.log(\"Loading U2F signing\");

        if(!(bowser.chrome && bowser.version >= 41)) {
            \$(\"#browser_supported\").show();
        }
        else {
            \$(\"#start_auth\").show();
            \$(\"#start_auth\").click(function() {
                u2f.sign(req, function (data) {
                    console.log(\"Received sign response\");
                    \$(\"#authenticate\").val(JSON.stringify(data));
                    \$(\"#submit_auth\").submit();
                });

                setTimeout(function () {
                    \$(\"#no_response\").show();
                }, 10000);
            });
        }
    });
</script>
";
        }
        // line 29
        if (($context["U2F_REG"] ?? null)) {
            // line 30
            echo "<script>
    ";
            // line 32
            echo "    var req = ";
            echo ($context["U2F_SIGN_REQUEST"] ?? null);
            echo ";
    var sigs = ";
            // line 33
            echo ($context["U2F_SIGN"] ?? null);
            echo ";

    if(!(bowser.chrome && bowser.version >= 41)) {
        \$(\"#browser_supported\").show();
        \$(\"#add_key\").hide();
    }

    \$(\"#add_key\").click(function() {
        console.log(\"Starting registration\");
        \$(\"#tfa_insert_key\").show();
        \$(\"#add_key\").hide();

        var tm = setTimeout(function(){
            \$(\"#no_response\").show();
        }, 10000);

        u2f.register([req], sigs, function(data) {

            console.log(\"Register callback\", data);
            if(data.errorCode) {
                var message = \"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("TFA_REG_FAILED"), "js");
            echo "\" + data.errorCode + \",\" + data.errorMessage;
                if (data.errorCode === 4) {
                    // ErrorCode for is when the device is already added.
                    message = \"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("TFA_REG_EXISTS"), "js");
            echo "\";
                }

                phpbb.alert(\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("TFA_ERROR"), "js");
            echo "\", message);
                \$(\"#tfa_insert_key\").hide();
                \$(\"#add_key\").show();
                clearTimeout(tm);
                \$(\"#no_response\").hide();
                return;
            }
            \$(\"#register\").val(JSON.stringify(data));
            \$(\"#md\").val(\"register\");
            \$(\"#ucp\").submit();
        });
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@paul999_tfa/event/overall_footer_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 59,  110 => 56,  104 => 53,  81 => 33,  76 => 32,  73 => 30,  71 => 29,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@paul999_tfa/event/overall_footer_body_after.html", "");
    }
}
