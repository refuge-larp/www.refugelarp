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

/* login_body.html */
class __TwigTemplate_240e2aef4170a8a416610228c724200081278849580cdf83e224f0528f4e5d56 extends \Twig\Template
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
        $location = "overall_header_simplified.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header_simplified.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"login_container";
        // line 3
        if (($context["S_ADMIN_AUTH"] ?? null)) {
            echo " login_container_admin_auth";
        }
        echo "\">
    <div class=\"login_container_left\">
        <div class=\"login_container_left_section_content fancy_panel animated fadeIn\">
        \t<div class=\"login_container_padding login_form\">
                <form action=\"";
        // line 7
        echo ($context["S_LOGIN_ACTION"] ?? null);
        echo "\" method=\"post\" id=\"login\" data-focus=\"";
        if (($context["S_ADMIN_AUTH"] ?? null)) {
            echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        } else {
            echo ($context["USERNAME_CREDENTIAL"] ?? null);
        }
        echo "\">
                    <h2 class=\"login-title\">";
        // line 8
        if (($context["LOGIN_EXPLAIN"] ?? null)) {
            echo ($context["LOGIN_EXPLAIN"] ?? null);
        } else {
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        }
        echo "</h2>
                
                    <fieldset ";
        // line 10
        if ( !($context["S_CONFIRM_CODE"] ?? null)) {
            echo "class=\"fields1\"";
        } else {
            echo "class=\"fields2\"";
        }
        echo ">
                        ";
        // line 11
        if (($context["LOGIN_ERROR"] ?? null)) {
            echo "<div class=\"error\">";
            echo ($context["LOGIN_ERROR"] ?? null);
            echo "</div>";
        }
        // line 12
        echo "                        <div>
                            <label for=\"";
        // line 13
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo "</label>
                            <input type=\"text\" tabindex=\"1\" name=\"";
        // line 14
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" id=\"";
        echo ($context["USERNAME_CREDENTIAL"] ?? null);
        echo "\" size=\"25\" value=\"";
        echo ($context["USERNAME"] ?? null);
        echo "\" class=\"inputbox\" />
                        </div>
                        <div>
                            <label for=\"";
        // line 17
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
        echo "</label>
                            <input type=\"password\" tabindex=\"2\" id=\"";
        // line 18
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" name=\"";
        echo ($context["PASSWORD_CREDENTIAL"] ?? null);
        echo "\" size=\"25\" class=\"inputbox\" autocomplete=\"off\" />
                        </div>
                        ";
        // line 20
        if ((($context["S_DISPLAY_FULL_LOGIN"] ?? null) && (($context["U_SEND_PASSWORD"] ?? null) || ($context["U_RESEND_ACTIVATION"] ?? null)))) {
            // line 21
            echo "                            <div>                    
                                ";
            // line 22
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                echo "<label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\" /> ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo "</label>";
            }
            echo "                            
                            </div>
                        ";
        }
        // line 25
        echo "                        ";
        if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
            // line 26
            echo "                            <div>
                                ";
            // line 27
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 28
            echo "                                ";
            $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "login_body.html", 28)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 29
            echo "                            </div>
                        ";
        }
        // line 31
        echo "                
                        ";
        // line 32
        echo ($context["S_LOGIN_REDIRECT"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 33
        echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
        echo "
                        ";
        // line 34
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "
                        <input type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
        // line 35
        echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
        echo "\" class=\"button2 specialbutton\" />
                    </fieldset>            
                </form>
                ";
        // line 38
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["PROVIDER_TEMPLATE_FILE"] ?? null))) {
            // line 39
            echo "                    ";
            $location = (("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["PROVIDER_TEMPLATE_FILE"] ?? null)) . ""), "login_body.html", 39)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 40
            echo "                ";
        }
        // line 41
        echo "                ";
        if (($context["U_SEND_PASSWORD"] ?? null)) {
            // line 42
            echo "                \t<div class=\"login_form_forgot_link\">
\t\t\t\t\t\t<a href=\"";
            // line 43
            echo ($context["U_SEND_PASSWORD"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
            echo "</a>
                    </div>
                ";
        }
        // line 46
        echo "\t\t\t\t";
        if (($context["U_RESEND_ACTIVATION"] ?? null)) {
            // line 47
            echo "                \t<div class=\"login_form_forgot_link\">
                    \t<a href=\"";
            // line 48
            echo ($context["U_RESEND_ACTIVATION"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESEND_ACTIVATION");
            echo "</a>
                    </div>
                ";
        }
        // line 50
        echo "                
            </div>
        </div>
    </div>
    
\t";
        // line 55
        if (( !($context["S_ADMIN_AUTH"] ?? null) && ($context["S_REGISTER_ENABLED"] ?? null))) {
            // line 56
            echo "    <div class=\"login_container_right\">
        <div class=\"login_container_right_section_content fancy_panel animated fadeIn\"> 
\t\t\t<div class=\"login_container_padding\"> 
                <h3>";
            // line 59
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "</h3>
                <p class=\"login_container_info\">";
            // line 60
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_INFO");
            echo "</p>
                <p><strong><a href=\"";
            // line 61
            echo ($context["U_TERMS_USE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("TERMS_USE");
            echo "</a> | <a href=\"";
            echo ($context["U_PRIVACY"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVACY");
            echo "</a></strong></p>
                <p><a href=\"";
            // line 62
            echo ($context["U_REGISTER"] ?? null);
            echo "\" class=\"button2 specialbutton\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
            echo "</a></p>
            </div> 
        </div>
    </div> 
\t";
        }
        // line 66
        echo "             

</div><!-- /.login_container -->

<script type=\"text/javascript\">

</script>

";
        // line 74
        $location = "overall_footer_simplified.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer_simplified.html", "login_body.html", 74)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 74,  276 => 66,  266 => 62,  256 => 61,  252 => 60,  248 => 59,  243 => 56,  241 => 55,  234 => 50,  226 => 48,  223 => 47,  220 => 46,  212 => 43,  209 => 42,  206 => 41,  203 => 40,  190 => 39,  188 => 38,  182 => 35,  178 => 34,  174 => 33,  170 => 32,  167 => 31,  163 => 29,  150 => 28,  147 => 27,  144 => 26,  141 => 25,  131 => 22,  128 => 21,  126 => 20,  119 => 18,  113 => 17,  103 => 14,  97 => 13,  94 => 12,  88 => 11,  80 => 10,  71 => 8,  61 => 7,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login_body.html", "");
    }
}
