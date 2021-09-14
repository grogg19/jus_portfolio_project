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

/* /home/www/themes/Jusikd_theme/partials/includes/social_buttons.htm */
class __TwigTemplate_8129d27a10f15b163d2ffcd1ae7cb7d94960db6b53408830771550cf11b33902 extends \Twig\Template
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
        $this->checkSecurity();
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
        return "/home/www/themes/Jusikd_theme/partials/includes/social_buttons.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"https://www.instagram.com/jusikd9/\"><i class=\"fa fa-instagram fa-lg\"></i></a>
<a href=\"https://www.behance.net/jusikd\"><i class=\"fa fa-behance fa-lg\"></i></a>
<a href=\"https://vk.com/jusikd\"><i class=\"fa fa-vk fa-lg\"></i></a>
<a href=\"https://www.facebook.com/jusikd\"><i class=\"fa fa-facebook fa-lg\"></i></a>", "/home/www/themes/Jusikd_theme/partials/includes/social_buttons.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

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
}
