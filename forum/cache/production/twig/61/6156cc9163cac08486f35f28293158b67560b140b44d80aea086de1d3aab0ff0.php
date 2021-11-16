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

/* @phpbbmodders_banhammer/event/overall_footer_after.html */
class __TwigTemplate_5f6b2c9958fd96ac9b22ff371a5a02ada8502c055359c068ae405a2a5ccbceef extends \Twig\Template
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
        if (($context["S_SHOW_BH"] ?? null)) {
            // line 2
            echo "<script type=\"text/javascript\">
(function(\$){  // Avoid conflicts with other libraries
\t'use strict';
\t\$('.bh-click').click(
\tfunction() {
\t\t\$('#bh-options').toggle('slow');
\t});

\t\$(\".bh_hover\").hover(
\tfunction() {
\t\t\$(this).css('background-color', '#ecf3f7')
\t},
\tfunction() {
\t\t\$(this).css('background-color', '')
\t});
})(jQuery);
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbbmodders_banhammer/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbbmodders_banhammer/event/overall_footer_after.html", "");
    }
}
