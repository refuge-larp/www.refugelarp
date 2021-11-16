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

/* overall_footer.html */
class __TwigTemplate_11e0e362fccfeae81231a3112b1099d2f91fb2c3a3644536c13ff930c320ece2 extends \Twig\Template
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
        echo "\t\t\t\t\t";
        if (($context["STYLE_SETTINGS_CONFIG_SIDEBARS"] ?? null)) {
            // line 2
            echo "                            \t\t</div>
                                </div>
                            </div>

\t\t\t\t\t\t\t";
            // line 6
            if (((($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Left Only") || (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Both"))) {
                // line 7
                echo "                            <div id=\"leftcolumn\">
                            \t<div class=\"innertube\">";
                // line 8
                $location = "sidebar_left.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("sidebar_left.html", "overall_footer.html", 8)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                echo "</div>
                            </div>
                            ";
            }
            // line 11
            echo "
                            ";
            // line 12
            if (((($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Right Only") || (($context["STYLE_SETTINGS_CONFIG_SIDEBAR_PLACEMENT"] ?? null) == "Both"))) {
                // line 13
                echo "                            <div id=\"rightcolumn\">
                                <div class=\"innertube\">";
                // line 14
                $location = "sidebar_right.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("sidebar_right.html", "overall_footer.html", 14)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                echo "</div>
                            </div>
                            ";
            }
            // line 17
            echo "\t\t\t\t\t\t</div><!-- /#maincontainer -->
                    ";
        }
        // line 19
        echo "

                    ";
        // line 21
        // line 22
        echo "                </div>

            ";
        // line 24
        // line 25
        echo "
            \t</div><!-- /#inner-wrap -->

                ";
        // line 28
        if ((($context["STYLE_SETTINGS_HTML_3"] ?? null) &&  !($context["STYLE_SETTINGS_CONFIG_HIDE_SOCIAL_BAR"] ?? null))) {
            // line 29
            echo "                \t<div class=\"social_links_footer\">";
            echo ($context["STYLE_SETTINGS_HTML_3"] ?? null);
            echo "</div>
                ";
        }
        // line 31
        echo "

            <div id=\"page-footer\" class=\"page-footer\" role=\"contentinfo\">
                ";
        // line 34
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 35
        echo "
                <div id=\"darkenwrapper\" class=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 36
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
                    <div id=\"darken\" class=\"darken\">&nbsp;</div>
                </div>

                <div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
                    <a href=\"#\" class=\"alert_close\">
                        <i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                    <h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
                </div>
                <div id=\"phpbb_confirm\" class=\"phpbb_alert\">
                    <a href=\"#\" class=\"alert_close\">
                        <i class=\"icon fa-times-circle fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                    <div class=\"alert_text\"></div>
                </div>
            </div>

            <div class=\"copyright_bar\">
                Powered by <a href=\"http://www.phpBB.com/\">phpBB</a>&trade; <span class=\"planetstyles_credit";
        // line 55
        if (($context["STYLE_SETTINGS_CONFIG_CREDIT_LINE"] ?? null)) {
            echo " planetstyles_credit_hidden";
        }
        echo "\">&bull; Design by <a href=\"http://www.planetstyles.net\">PlanetStyles</a></span>
                ";
        // line 56
        // line 57
        echo "                ";
        if (($context["TRANSLATION_INFO"] ?? null)) {
            echo "<br />";
            echo ($context["TRANSLATION_INFO"] ?? null);
        }
        // line 58
        echo "                ";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('paul999_tfa', '__main__'));
        $this->env->loadTemplate('@paul999_tfa/event/overall_footer_copyright_append.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 59
        echo "                ";
        if (($context["DEBUG_OUTPUT"] ?? null)) {
            echo "<br />";
            echo ($context["DEBUG_OUTPUT"] ?? null);
        }
        // line 60
        echo "            </div>

            </div> <!-- /#wrap -->

            <div style=\"display: none;\">
                <a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
                ";
        // line 66
        if ( !($context["S_IS_BOT"] ?? null)) {
            echo ($context["RUN_CRON_TASK"] ?? null);
        }
        // line 67
        echo "            </div>

            <script type=\"text/javascript\" src=\"";
        // line 69
        echo ($context["T_JQUERY_LINK"] ?? null);
        echo "\"></script>

            ";
        // line 71
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 72
            echo "                <script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/javascript/jquery-3.5.1.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\">\\x3C/script>');</script>
            ";
        }
        // line 74
        echo "
            <script type=\"text/javascript\" src=\"";
        // line 75
        echo ($context["T_ASSETS_PATH"] ?? null);
        echo "/javascript/core.js?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\"></script>

\t\t\t";
        // line 77
        if (($context["STYLE_SETTINGS_CONFIG_PARALLAX_HEADER"] ?? null)) {
            // line 78
            echo "            \t";
            $asset_file = "parallax.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 79
            echo "            ";
        }
        // line 80
        echo "
            ";
        // line 81
        $asset_file = "tooltipster.bundle.min.js";
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
        $this->env->get_assets_bag()->add_script($asset);        // line 82
        echo "            ";
        if (($context["STYLE_SETTINGS_CONFIG_COLLAPSIBLE_PANELS"] ?? null)) {
            // line 83
            echo "                ";
            $asset_file = "jquery.collapse.js";
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
            $this->env->get_assets_bag()->add_script($asset);            // line 84
            echo "                ";
            $asset_file = "jquery.collapse_storage.js";
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
            echo "            ";
        }
        // line 86
        echo "
            ";
        // line 87
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
        $this->env->get_assets_bag()->add_script($asset);        // line 88
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
        $this->env->get_assets_bag()->add_script($asset);        // line 89
        echo "
            ";
        // line 90
        if (($context["STYLE_SETTINGS_CONFIG_DARK_TOGGLE"] ?? null)) {
            // line 91
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
            $this->env->get_assets_bag()->add_script($asset);            // line 92
            echo "            ";
        }
        // line 93
        echo "
            ";
        // line 94
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 95
            echo "                <script type=\"text/javascript\">
                    (function(\$){
                        var \$fa_cdn = \$('head').find('link[rel=\"stylesheet\"]').first(),
                            \$span = \$('<span class=\"fa\" style=\"display:none\"></span>').appendTo('body');
                        if (\$span.css('fontFamily') !== 'FontAwesome' ) {
                            \$fa_cdn.after('<link href=\"";
            // line 100
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/css/font-awesome.min.css\" rel=\"stylesheet\">');
                            \$fa_cdn.remove();
                        }
                        \$span.remove();
                    })(jQuery);
                </script>
            ";
        }
        // line 107
        echo "
            ";
        // line 108
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 109
            echo "                <script src=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.js?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\"></script>
                <script>
\t\t\t\tif (typeof window.cookieconsent === \"object\") {
                    window.addEventListener(\"load\", function(){
                        window.cookieconsent.initialise({
                            \"palette\": {
                                \"popup\": {
                                    \"background\": \"#0F538A\"
                                },
                                \"button\": {
                                    \"background\": \"#E5E5E5\"
                                }
                            },
                            \"theme\": \"classic\",
                            \"content\": {
                                \"message\": \"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_MSG"), "js");
            echo "\",
                                \"dismiss\": \"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_OK"), "js");
            echo "\",
                                \"link\": \"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COOKIE_CONSENT_INFO"), "js");
            echo "\",
\t\t\t\t\t\t\t\t\"href\": \"";
            // line 127
            echo ($context["UA_PRIVACY"] ?? null);
            echo "\"
                            }
                        });
\t\t\t\t\t});
\t\t\t\t}
                </script>
            ";
        }
        // line 134
        echo "
            ";
        // line 135
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
        // line 136
        echo "
            ";
        // line 137
        if (($context["S_PLUPLOAD"] ?? null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 137)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 138
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SCRIPTS", [], "any", false, false, false, 138);
        echo "

            ";
        // line 140
        if (($context["STYLE_SETTINGS_CONFIG_HEADER_PARTICLES"] ?? null)) {
            // line 141
            echo "                <style>
                    img.custom_logo {
                        /* Define height to prevent layout issues with uncached logos in particle header */
                        ";
            // line 144
            if (($context["FORUM_LOGO_HEIGHT"] ?? null)) {
                // line 145
                echo "                            height: ";
                echo ($context["FORUM_LOGO_HEIGHT"] ?? null);
                echo "px;
                        ";
            } else {
                // line 147
                echo "                            height: 100px;
                        ";
            }
            // line 149
            echo "                    }                    
                </style>
                <script type=\"text/javascript\">
\t\t\t\t\t/* Identify the height of headerbar */
\t\t\t\t\tvar headerbar_height = \$('.headerbar').height();
\t\t\t\t\t/* Match particle container height to headerbar. Creates window for canvas */
\t\t\t\t\t\$('.particles_container').css({'height': headerbar_height});

\t\t\t\t\t/* Dynamically apply width to site desc container, maximising clickable area behind it. We only need this to happen when particles are enabled. */
\t\t\t\t\tvar logo_width = \$('.site-description').width();
\t\t\t\t\tvar logo_width_fix = (logo_width+2); /* Caters for retina devices where the width is defined as a decimal. Obvs we can't set a decimal pixel width */
\t\t\t\t\t\$('.site-description').css({'width': logo_width_fix});
\t\t\t\t</script>
\t\t\t\t<script src=\"";
            // line 162
            echo ($context["T_TEMPLATE_PATH"] ?? null);
            echo "/particles.js\"></script>
                <script src=\"";
            // line 163
            echo ($context["T_TEMPLATE_PATH"] ?? null);
            echo "/particles.app.js\"></script>

                <script type=\"text/javascript\">
\t\t\t\t\t/* Reposition the canvas so it aligns with headerbar */
\t\t\t\t\t\$('canvas.particles-js-canvas-el').css({'margin-top': -headerbar_height});
\t\t\t\t</script>
            ";
        }
        // line 170
        echo "
\t\t\t<script type=\"text/javascript\">
            \$(function(\$) {
                var num_cols = 3,
                container = \$('.sub-forumlist'),
                listItem = 'li',
                listClass = 'sub-list';
                container.each(function() {
                    var items_per_col = new Array(),
                    items = \$(this).find(listItem),
                    min_items_per_col = Math.floor(items.length / num_cols),
                    difference = items.length - (min_items_per_col * num_cols);
                    for (var i = 0; i < num_cols; i++) {
                        if (i < difference) {
                            items_per_col[i] = min_items_per_col + 1;
                        } else {
                            items_per_col[i] = min_items_per_col;
                        }
                    }
                    for (var i = 0; i < num_cols; i++) {
                        \$(this).append(\$('<ul ></ul>').addClass(listClass));
                        for (var j = 0; j < items_per_col[i]; j++) {
                            var pointer = 0;
                            for (var k = 0; k < i; k++) {
                                pointer += items_per_col[k];
                            }
                            \$(this).find('.' + listClass).last().append(items[j + pointer]);
                        }
                    }
                });
            });
            </script>

\t\t\t

            ";
        // line 205
        if (($context["STYLE_SETTINGS_CONFIG_LIGHT_DARK_TOGGLE"] ?? null)) {
            // line 206
            echo "
            <!--
            \"[BETA] Enable Light/Dark User Toggle\": {
            \t\"name\": \"light_dark_toggle\",
            \t\"type\": \"bool\",
            \t\"help\": \"Enables a one-click light/dark preset toggle in top nav bar.<br />Default Value: No\"
            },
            -->

            <!--
            <script type=\"text/javascript\">
                // Set variables
                var light_stylesheet_src = '";
            // line 218
            echo ($context["T_STYLESHEET_LINK"] ?? null);
            echo "';
                var dark_stylesheet_src = '";
            // line 219
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
            // line 254
            if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Light")) {
                // line 255
                echo "                    \$(\"i.dark_toggle_icon\").addClass(\"fa-moon-o\");
                  ";
            } elseif ((            // line 256
($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
                // line 257
                echo "                    \$(\"i.dark_toggle_icon\").addClass(\"fa-lightbulb-o\");
                  ";
            }
            // line 259
            echo "
                  // No cookie: Click function
                  \$(\"a.dark_toggle_link\").click(function() {
                    ";
            // line 262
            if ((($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Light")) {
                // line 263
                echo "                      \$(\"link.colour_switch_link\").attr(\"href\",dark_stylesheet_src);
                      \$(\"body\").addClass(\"dark_base\");
                    ";
            } elseif ((            // line 265
($context["STYLE_SETTINGS_CONFIG_BASE_COLOUR"] ?? null) == "Dark")) {
                // line 266
                echo "                      \$(\"link.colour_switch_link\").attr(\"href\",light_stylesheet_src);
                      //Replace this with just clearing the cookie?
                    ";
            }
            // line 269
            echo "                    Cookies.set('Dark_Toggle_Cookie', \$(\"link.colour_switch_link\").attr('href'), { expires: 365, path: '/' });
                    location.reload();
                  });
                }
            </script>
            -->
            ";
        }
        // line 276
        echo "
            <script type=\"text/javascript\">
                // Add user icon in front of forumlist mods
            \t\$(\"span.forumlist_mods a\").each(function(i) {
            \t\t\$(this).prepend(\"<i class='icon fa-shield fa-fw'></i>\");
            \t});
            \t// Remove the comma seperator
            \t\$(\"span.forumlist_mods\").each(function() {
            \t\t\$(this).html(\$(this).html().replace(/,/g , ''));
            \t});
            </script>

            ";
        // line 288
        if ( !($context["STYLE_SETTINGS_CONFIG_DISABLE_CSS_ANIMATIONS"] ?? null)) {
            // line 289
            echo "            <script type=\"text/javascript\">
        \t\t// Animate Forumlist and other things
        \t\t// Add a small transition delay to each block for nice effect
        \t\t\$(\"#nav-main, #logo, #site-description h1, #site-description p, #nav-breadcrumbs, #page-body\").each(function(i) {
        \t\t\t\$(this).addClass(\"animated fadeIn\");

        \t\t\tvar transitiondelay = (('0.' + (i+1)))/2 + 's';
        \t\t\t\$(this).css({
        \t\t\t\t\"transform\": 'translateY(0px)',
        \t\t\t\t\"transition-delay\": transitiondelay,
        \t\t\t\t\"animation-delay\": transitiondelay
        \t\t\t});
        \t\t\t console.log(transitiondelay);
                });             
            </script>
            ";
        }
        // line 305
        echo "
            ";
        // line 306
        if ((($context["STYLE_SETTINGS_CONFIG_FORUMLIST_DISPLAY"] ?? null) == "Grid")) {
            // line 307
            echo "            <script type=\"text/javascript\">
                // Remove the comma seperator
            \t\$(\".forumlist_grid time\").each(function() {
            \t\tvar last_post_time = \$(this).html();
                    \$(this).html(last_post_time.split(',')[0])
            \t});
            </script>
            ";
        }
        // line 315
        echo "
      ";
        // line 316
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('paul999_tfa', '__main__'));
        $this->env->loadTemplate('@paul999_tfa/event/overall_footer_body_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 317
        echo "
\t\t\t";
        // line 318
        if (($context["STYLE_SETTINGS_CONFIG_SCROLL_TO_TOP"] ?? null)) {
            // line 319
            echo "        <a href=\"#\" class=\"scrollToTop\"><span class=\"fa fa-arrow-up\"></span></a>
      ";
        }
        // line 321
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 321,  719 => 319,  717 => 318,  714 => 317,  709 => 316,  706 => 315,  696 => 307,  694 => 306,  691 => 305,  673 => 289,  671 => 288,  657 => 276,  648 => 269,  643 => 266,  641 => 265,  637 => 263,  635 => 262,  630 => 259,  626 => 257,  624 => 256,  621 => 255,  619 => 254,  581 => 219,  577 => 218,  563 => 206,  561 => 205,  524 => 170,  514 => 163,  510 => 162,  495 => 149,  491 => 147,  485 => 145,  483 => 144,  478 => 141,  476 => 140,  470 => 138,  456 => 137,  453 => 136,  440 => 135,  437 => 134,  427 => 127,  423 => 126,  419 => 125,  415 => 124,  394 => 109,  392 => 108,  389 => 107,  379 => 100,  372 => 95,  370 => 94,  367 => 93,  364 => 92,  349 => 91,  347 => 90,  344 => 89,  329 => 88,  315 => 87,  312 => 86,  309 => 85,  294 => 84,  279 => 83,  276 => 82,  262 => 81,  259 => 80,  256 => 79,  241 => 78,  239 => 77,  232 => 75,  229 => 74,  221 => 72,  219 => 71,  214 => 69,  210 => 67,  206 => 66,  198 => 60,  192 => 59,  186 => 58,  180 => 57,  179 => 56,  173 => 55,  153 => 40,  138 => 36,  135 => 35,  123 => 34,  118 => 31,  112 => 29,  110 => 28,  105 => 25,  104 => 24,  100 => 22,  99 => 21,  95 => 19,  91 => 17,  75 => 14,  72 => 13,  70 => 12,  67 => 11,  51 => 8,  48 => 7,  46 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_footer.html", "");
    }
}
