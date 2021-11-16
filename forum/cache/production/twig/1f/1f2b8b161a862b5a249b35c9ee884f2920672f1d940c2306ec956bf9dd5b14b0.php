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

/* overall_footer_simplified.html */
class __TwigTemplate_959c71a31bfeda665739e621c01fd6a2cd48276d7db4ed570763ff57ad39abba extends \Twig\Template
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
            <div>
                <a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
                ";
        // line 4
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 5
        echo "            </div>

            <script type=\"text/javascript\" src=\"";
        // line 7
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>

            ";
        // line 9
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 10
            echo "                <script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>
            ";
        }
        // line 12
        echo "
            <script type=\"text/javascript\" src=\"";
        // line 13
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>
            ";
        // line 14
        $asset_file = "forum_fn.js";
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
        $this->env->get_assets_bag()->add_script($asset);        // line 15
        echo "            ";
        $asset_file = "ajax.js";
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
        $this->env->get_assets_bag()->add_script($asset);        // line 16
        echo "
            ";
        // line 17
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 18
            echo "                <script type=\"text/javascript\">
                    (function(\$){
                        var \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
                            \$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
                        if (\$span.css('fontFamily') !== 'FontAwesome' ) {
                            \$fa_cdn.after('<link href=\"";
            // line 23
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
                            \$fa_cdn.remove();
                        }
                        \$span.remove();
                    })(jQuery);
                </script>
            ";
        }
        // line 30
        echo "

            ";
        // line 32
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbb_viglink', '__main__'));
        $this->env->loadTemplate('@phpbb_viglink/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('phpbbmodders_banhammer', '__main__'));
        $this->env->loadTemplate('@phpbbmodders_banhammer/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('vse_abbc3', '__main__'));
        $this->env->loadTemplate('@vse_abbc3/event/overall_footer_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 33
        echo "
            ";
        // line 34
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer_simplified.html", 34)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 35
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 35);
        echo "

            ";
        // line 37
        if (($context["STYLE_SETTINGS_CONFIG_DARK_TOGGLE"] ?? null)) {
            // line 38
            echo "            \t";
            $asset_file = "js.cookie.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 39
            echo "            ";
        }
        // line 40
        echo "
            ";
        // line 41
        if (($context["STYLE_SETTINGS_CONFIG_DARK_TOGGLE"] ?? null)) {
            // line 42
            echo "            <script type=\"text/javascript\">

            // Set variables
            var light_stylesheet_src = '";
            // line 45
            echo ($context["T_STYLESHEET_LINK"] ?? null);
            echo "';
            var dark_stylesheet_src = '";
            // line 46
            echo ($context["BOARD_URL"] ?? null);
            echo "styles/Milk_v2/theme/colours_dark.css';

            // Is there a cookie set already?
            if(Cookies.get('Dark_Toggle_Cookie')) {
              // Cookie below

              // Cookie: Set stylesheet
              \$(\"link.colour_switch_link\").attr(\"href\",Cookies.get('Dark_Toggle_Cookie'));

              // Cookie: Set icon & add dark_base class if necessary
              if(Cookies.get('Dark_Toggle_Cookie') == dark_stylesheet_src) {
                 \$(\"i.dark_toggle_icon\").addClass(\"fa-lightbulb-o\");
                 \$(\"body\").addClass(\"dark_base\");
              } else {
                \$(\"i.dark_toggle_icon\").addClass(\"fa-moon-o\");
              }

              // Cookie: click function
              \$(\"a.dark_toggle_link\").click(function() {
                if(Cookies.get('Dark_Toggle_Cookie') == dark_stylesheet_src) {
                  \$(\"link.colour_switch_link\").attr(\"href\",light_stylesheet_src);
                  \$(\"i.dark_toggle_icon\").addClass(\"fa-moon-o\");
                } else {
                  \$(\"link.colour_switch_link\").attr(\"href\",dark_stylesheet_src);
                  \$(\"i.dark_toggle_icon\").addClass(\"fa-lightbulb-o\");
                }

                Cookies.set('Dark_Toggle_Cookie', \$(\"link.colour_switch_link\").attr('href'), { expires: 365, path: '/' });
                location.reload();
              });

            } else {
              // No cookie below

              // No cookie: Set the icon
              ";
            // line 81
            if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Light")) {
                // line 82
                echo "                \$(\"i.dark_toggle_icon\").addClass(\"fa-moon-o\");
              ";
            } elseif ((            // line 83
($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
                // line 84
                echo "                \$(\"i.dark_toggle_icon\").addClass(\"fa-lightbulb-o\");
              ";
            }
            // line 86
            echo "
              // No cookie: Click function
              \$(\"a.dark_toggle_link\").click(function() {
                ";
            // line 89
            if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Light")) {
                // line 90
                echo "                  \$(\"link.colour_switch_link\").attr(\"href\",dark_stylesheet_src);
                  \$(\"body\").addClass(\"dark_base\");
                ";
            } elseif ((            // line 92
($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
                // line 93
                echo "                  \$(\"link.colour_switch_link\").attr(\"href\",light_stylesheet_src);
                  //Replace this with just clearing the cookie?
                ";
            }
            // line 96
            echo "                Cookies.set('Dark_Toggle_Cookie', \$(\"link.colour_switch_link\").attr('href'), { expires: 365, path: '/' });
                location.reload();
              });
            }
            </script>
            ";
        }
        // line 102
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer_simplified.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 102,  266 => 96,  261 => 93,  259 => 92,  255 => 90,  253 => 89,  248 => 86,  244 => 84,  242 => 83,  239 => 82,  237 => 81,  199 => 46,  195 => 45,  190 => 42,  188 => 41,  185 => 40,  182 => 39,  167 => 38,  165 => 37,  159 => 35,  145 => 34,  142 => 33,  129 => 32,  125 => 30,  115 => 23,  108 => 18,  106 => 17,  103 => 16,  88 => 15,  74 => 14,  68 => 13,  65 => 12,  57 => 10,  55 => 9,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer_simplified.html", "");
    }
}
