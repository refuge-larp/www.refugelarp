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

/* index_body.html */
class __TwigTemplate_f52291e74bf25b1480a91014aab52872aad7cae44d35143f83ec8c76126a1f6f extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
";
        // line 5
        // line 6
        echo "
";
        // line 7
        if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
            echo "<div id=\"forumlist_collapse\">";
        }
        // line 8
        echo "
";
        // line 9
        if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid")) {
            // line 10
            echo "     ";
            $location = "forumlist_grid.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_grid.html", "index_body.html", 10)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 12
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "index_body.html", 12)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 14
        echo "
<div class=\"post_forumlist_links\">
\t";
        // line 16
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            // line 17
            echo "    \t<span class=\"current_time\">";
            echo ($context["CURRENT_TIME"] ?? null);
            echo "</span>
    ";
        }
        // line 19
        echo "    ";
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 20
            echo "        <br /><a href=\"";
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            echo "</a>
    ";
        }
        // line 22
        echo "</div>

";
        // line 24
        // line 25
        echo "
<div class=\"forumbg alt_block\">
    <div class=\"inner\">
    <ul class=\"topiclist\">
        <li class=\"header\">
            <dl class=\"row-item\">
                <dt><div class=\"list-inner\"><i class=\"fa fa-line-chart\"></i> &nbsp;";
        // line 31
        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
        echo "</div></dt>
            </dl>
        </li>
    </ul>
    ";
        // line 35
        if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
            // line 36
            echo "        <div class=\"collapse-trigger open\">
            <span class=\"icon fa-minus tooltip-left\" title=\"Collapse\"></span>
            <span class=\"icon fa-plus tooltip-left\" title=\"Expand\"></span>
        </div>
    ";
        }
        // line 40
        echo "            
    <ul class=\"topiclist forums\">
    \t
        
            ";
        // line 44
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 45
            echo "                <li class=\"row";
            if (((($context["STYLE_SETTINGS_CONFIG_PROFILE_WIDGET"] ?? null) && ($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null)) && ((($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Right Only") || (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Both")))) {
                echo " responsive-hide stat_login_hide";
            }
            echo "\">
                    <form method=\"post\" action=\"";
            // line 46
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
                    <h3><a href=\"";
            // line 47
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a>";
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
                        <fieldset class=\"quick-login\">
                            <label for=\"username\"><span>";
            // line 49
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
                            <label for=\"password\"><span>";
            // line 50
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
                            ";
            // line 51
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 52
                echo "                                <a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
                            ";
            }
            // line 54
            echo "                            ";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 55
                echo "                                <span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
                            ";
            }
            // line 57
            echo "                            <input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
                            ";
            // line 58
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t\t\t\t\t";
            // line 59
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
                        </fieldset>
                    </form>
                </li>
            ";
        }
        // line 64
        echo "            
            
            ";
        // line 66
        // line 67
        echo "            
            ";
        // line 68
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 69
            echo "            <li class=\"row\">
                <div class=\"stat-block online-list\">
                    ";
            // line 71
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 72
            echo "                    <p>
                        ";
            // line 73
            // line 74
            echo "                        ";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
                        ";
            // line 75
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 76
                echo "                        \t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
                        ";
            }
            // line 78
            echo "                        ";
            if (($context["LEGEND"] ?? null)) {
                echo "<br /><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " ";
                echo ($context["LEGEND"] ?? null);
                echo "</strong>";
            }
            // line 79
            echo "                        ";
            // line 80
            echo "                    </p>
                </div>
            </li>
            ";
        }
        // line 84
        echo "            ";
        if (($context["NEWEST_USER"] ?? null)) {
            // line 85
            echo "            \t<li class=\"row\">
                    <div class=\"stat-block statistics\">
                        <h3>";
            // line 87
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
                        <p>
                            ";
            // line 89
            // line 90
            echo "                            ";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
                            ";
            // line 91
            // line 92
            echo "                        </p>
                    </div>
                </li>
            ";
        }
        // line 96
        echo "            ";
        echo "  
            ";
        // line 97
        if ((($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null) && ($context["BIRTHDAY_LIST"] ?? null))) {
            // line 98
            echo "            <li class=\"row\">
                <div class=\"stat-block birthday-list\">
                    <h3>";
            // line 100
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
                    <p>
                        ";
            // line 102
            // line 103
            echo "                        ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 103))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 103));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 103);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 103) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 103);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 103)) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BIRTHDAYS");
            }
            // line 104
            echo "                        ";
            // line 105
            echo "                    </p>
                </div>
            </li>
            ";
        }
        // line 109
        echo "            
            ";
        // line 110
        // line 111
        echo "        </li>
    </ul>
    </div>
</div>

";
        // line 116
        if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
            echo "</div>";
        }
        // line 117
        echo "        

";
        // line 119
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 119)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 119,  394 => 117,  390 => 116,  383 => 111,  382 => 110,  379 => 109,  373 => 105,  371 => 104,  345 => 103,  344 => 102,  339 => 100,  335 => 98,  333 => 97,  329 => 96,  323 => 92,  322 => 91,  311 => 90,  310 => 89,  305 => 87,  301 => 85,  298 => 84,  292 => 80,  290 => 79,  280 => 78,  274 => 76,  272 => 75,  263 => 74,  262 => 73,  259 => 72,  247 => 71,  243 => 69,  241 => 68,  238 => 67,  237 => 66,  233 => 64,  225 => 59,  221 => 58,  216 => 57,  210 => 55,  207 => 54,  199 => 52,  197 => 51,  190 => 50,  183 => 49,  168 => 47,  164 => 46,  157 => 45,  155 => 44,  149 => 40,  142 => 36,  140 => 35,  133 => 31,  125 => 25,  124 => 24,  120 => 22,  112 => 20,  109 => 19,  103 => 17,  101 => 16,  97 => 14,  83 => 12,  69 => 10,  67 => 9,  64 => 8,  60 => 7,  57 => 6,  56 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
