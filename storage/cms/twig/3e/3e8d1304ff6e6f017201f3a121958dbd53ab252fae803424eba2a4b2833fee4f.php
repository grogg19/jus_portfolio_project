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

/* /var/www/u0916085/data/www/jusikd.art/themes/Jusikd_theme/partials/includes/social_buttons.htm */
class __TwigTemplate_0bf5584923fa5f86dbee0a883709fc02aa41690e073be4b62731c1d0f1319e07 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<a href=\"https://www.instagram.com/jusikd9/\"><i class=\"fa fa-instagram fa-lg\"></i></a>
<a href=\"https://www.behance.net/jusikd\"><i class=\"fa fa-behance fa-lg\"></i></a>
<a href=\"https://vk.com/jusikd\"><i class=\"fa fa-vk fa-lg\"></i></a>
<a href=\"https://www.facebook.com/jusikd\"><i class=\"fa fa-facebook fa-lg\"></i></a>";
    }

    public function getTemplateName()
    {
        return "/var/www/u0916085/data/www/jusikd.art/themes/Jusikd_theme/partials/includes/social_buttons.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"https://www.instagram.com/jusikd9/\"><i class=\"fa fa-instagram fa-lg\"></i></a>
<a href=\"https://www.behance.net/jusikd\"><i class=\"fa fa-behance fa-lg\"></i></a>
<a href=\"https://vk.com/jusikd\"><i class=\"fa fa-vk fa-lg\"></i></a>
<a href=\"https://www.facebook.com/jusikd\"><i class=\"fa fa-facebook fa-lg\"></i></a>", "/var/www/u0916085/data/www/jusikd.art/themes/Jusikd_theme/partials/includes/social_buttons.htm", "");
    }
}