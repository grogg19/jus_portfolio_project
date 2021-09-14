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

/* /home/www/plugins/planetadeleste/swal/components/swal/default.htm */
class __TwigTemplate_14db374dfc4a76a9aa58fd17e17da64dfd230c46178286415d14cb38a5504f32 extends \Twig\Template
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
        $tags = array("put" => 1);
        $filters = array("length" => 3, "raw" => 4, "json_encode" => 4, "default" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put'],
                ['length', 'raw', 'json_encode', 'default'],
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "<script>
    document.swalFlash = ";
        // line 3
        echo ((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["options"] ?? null), 3, $this->source))) ? ("true") : ("false"));
        echo ";
    document.swalOptions = ";
        // line 4
        echo json_encode((((isset($context["options"]) || array_key_exists("options", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["options"] ?? null), 4, $this->source), [])) : ([])));
        echo ";
    document.swalGlobalOptions = ";
        // line 5
        echo json_encode((((isset($context["globalOptions"]) || array_key_exists("globalOptions", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["globalOptions"] ?? null), 5, $this->source), [])) : ([])));
        echo ";
</script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/www/plugins/planetadeleste/swal/components/swal/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 1,  75 => 5,  71 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
<script>
    document.swalFlash = {{ options|length ? 'true' : 'false' }};
    document.swalOptions = {{ options|default([])|json_encode|raw }};
    document.swalGlobalOptions = {{ globalOptions|default([])|json_encode|raw }};
</script>
{% endput %}", "/home/www/plugins/planetadeleste/swal/components/swal/default.htm", "");
    }
}
