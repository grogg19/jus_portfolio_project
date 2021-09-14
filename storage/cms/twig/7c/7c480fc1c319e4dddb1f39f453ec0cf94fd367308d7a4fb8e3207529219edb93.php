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

/* /home/www/themes/Jusikd_theme/partials/includes/menu.htm */
class __TwigTemplate_69f9ed554b22f6875498c359d22e78298c6e651e3312dddbc57b036d7f302e18 extends \Twig\Template
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
        echo "<ul class=\"list-unstyled components\">
    <li>
        <a href=\"#section-preloader\" target=\"_self\" class=\"list-menu\">Наверх</a>
    </li>
    <li>
        <a href=\"#section-aboutus1\" target=\"_self\" class=\"list-menu\">Обо мне</a>
    </li>
    <li>
        <a href=\"#section-recentworks1\"  target=\"_self\" class=\"list-menu\">Портфолио</a>
    </li>
    <li>
        <a href=\"#section-contactform1\" target=\"_self\" class=\"list-menu\">Контакты</a>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "/home/www/themes/Jusikd_theme/partials/includes/menu.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"list-unstyled components\">
    <li>
        <a href=\"#section-preloader\" target=\"_self\" class=\"list-menu\">Наверх</a>
    </li>
    <li>
        <a href=\"#section-aboutus1\" target=\"_self\" class=\"list-menu\">Обо мне</a>
    </li>
    <li>
        <a href=\"#section-recentworks1\"  target=\"_self\" class=\"list-menu\">Портфолио</a>
    </li>
    <li>
        <a href=\"#section-contactform1\" target=\"_self\" class=\"list-menu\">Контакты</a>
    </li>
</ul>", "/home/www/themes/Jusikd_theme/partials/includes/menu.htm", "");
    }
}
