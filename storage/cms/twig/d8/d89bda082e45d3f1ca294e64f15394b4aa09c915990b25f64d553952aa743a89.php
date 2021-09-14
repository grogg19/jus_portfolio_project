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

/* /home/www/themes/Jusikd_theme/layouts/main_template.htm */
class __TwigTemplate_a9b2e91e865a6bb869d780abf13c78ca2426a7c9a697a994b59b96537e6d8026 extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("sweetAlertMessage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <!-- Uniocde -->
    <meta charset=\"utf-8\">
    <!--[if IE]>
    <meta http-equiv=\"X-UA Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_description", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "meta_title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\">
    <!-- Page Kewords -->
    <meta name=\"keywords\" content=\"JUSIKD.ART\">
    <!-- Site Author -->
    <meta name=\"author\" content=\"JUSIKD.ART\">
    <meta name=\"p:domain_verify\" content=\"ef6e6cb75fbf1d463694a4ea4fc664ce\"/>
    <!-- Title -->
    <title>JUSIKD.ART | ";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</title>
    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\">
    <!-- Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" type=\"text/css\">
    <!-- Swiper Slider -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/swiper.min.css");
        echo "\" type=\"text/css\">
    <!-- Fonts -->

    
    <!--link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/flaticon/flaticon.css");
        echo "\" type=\"text/css\"-->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/fontawesome/font-awesome.min.css");
        echo "\">
    <!-- OWL Carousel -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.min.css");
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.theme.default.min.css");
        echo "\" type=\"text/css\">
    <!-- CSS Animate -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.min.css");
        echo "\" type=\"text/css\">
    <!-- Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" type=\"text/css\">
    <!-- REVOLUTION SLIDER -->
    
\t<!--link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css");
        echo "\"-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/fonts/font-awesome/css/font-awesome.css");
        echo "\">
\t<!-- REVOLUTION STYLE SHEETS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/css/settings.css");
        echo "\">
\t<!-- REVOLUTION LAYERS STYLES -->
\t<link rel=\"stylesheet\" href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/css/inline-revslider1.css\" type=\"text/css");
        echo "\">
\t<!-- ADD-ONS CSS FILES -->
\t<link rel=\"stylesheet\" type=\"text/css\"  media=\"all\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/css/revolution.addon.particles.css");
        echo "\" />
\t<link rel=\"stylesheet\" type=\"text/css\"  media=\"all\" href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/css/revolution.addon.polyfold.css");
        echo "\" />
\t<!-- /.REVOLUTION SLIDER -->
\t<link rel=\"stylesheet\" href=\"/plugins/planetadeleste/swal/assets/vendor/sweetalert/sweetalert.css\">
</head>
<body>
\t<!-- Section Preloader -->
\t<div id=\"section-preloader\">
\t\t<div class=\"blobs\">
\t\t\t<div class=\"blob-center\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t</div>
\t</div>
\t<!-- /.Section Preloader -->
\t<!-- Section Navbar -->
\t<div id=\"section-navbar1\">
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-expand-lg\">
\t\t\t\t<div class=\"header-logo mr-auto\">
\t\t\t\t\t<a href=\"/\" class=\"header-contact\"><img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jus_logo_2020_long_white-01.svg");
        echo "\" alt=\"JUSIKD.ART\" height=\"50\" width=\"200\"><span></span></a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav navbar-nav navbar1\">
\t\t            <li class=\"nav-item\">
\t\t                <button type=\"button\" id=\"sidebarCollapse\" class=\"navbar-btn active\">
\t\t\t                <span></span>
\t\t\t                <span></span>
\t\t\t                <span></span>
\t\t\t                <span></span>
\t\t\t            </button>
\t\t            </li>
\t\t        </ul>
\t\t    </nav>
\t\t</div>
\t</div>
\t<div id=\"section-search\" class=\"close-search\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navigation-search\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col ns-logo\">
\t\t\t\t\t\t<a href=\"/\"><img src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jus_logo_2020_long_white-01.svg");
        echo "\" alt=\"Jusikd.ART\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col ns-close\">
\t\t\t\t\t\t<span class=\"close\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /.Section Navbar -->
\t<div class=\"main-wrapper\">
        <!-- Sidebar  -->
        <nav id=\"sidebar\" class=\"active\">
        \t<div class=\"social-links socials-header text-center\">
                ";
        // line 103
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("includes/social_buttons"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 104
        echo "            </div>
            ";
        // line 105
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("includes/menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 106
        echo "        </nav>
        <!-- /.Sidebar  -->
        <!-- Page Content  -->
        <div id=\"main-content\" class=\"active\">
            <!-- Revolution Slider 1 -->
            <div id=\"rev_slider_14_1_wrapper\" class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"akroot\" data-source=\"gallery\" style=\"background:#ffffff;padding:0px;\">
\t\t\t\t<!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
\t\t\t\t<div id=\"rev_slider_14_1\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\" data-version=\"5.4.8.1\">
\t\t\t\t\t<ul>\t<!-- SLIDE  -->
\t\t\t\t\t<li data-index=\"rs-49\" data-transition=\"slidingoverlayright\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"1000\"  data-thumb=\"assets/revslider1/assets/100x50_9e6da-slider1.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t<img src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/assets/9e6da-slider1.jpg");
        echo "\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t<!-- LAYERS -->
\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-49-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-82','-82','-72','-47']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"><strong>Создаю</strong> яркие, </div>
\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t<div class=\"tp-caption  \"
\t\t\t\t\t\t\tid=\"slide-49-layer-4\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">запоминающиеся </div>
\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-49-layer-5\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['81','83','70','45']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">знаки, логотипы, </div>
\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-49-layer-7\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['162','166','140','91']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 8; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"> фирменные стили
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- LAYER NR. 5 -->
\t\t\t\t\t\t<a class=\"tp-caption scroll-down\"
\t\t\t\t\t\t\thref=\"#section-aboutus1\" target=\"_self\"\tid=\"slide-49-layer-9\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['-38','-38','-38','-38']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['208','216','193','156']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-actions=''
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":1500,\"speed\":2000,\"frame\":\"0\",\"from\":\"y:50px;opacity:0;\",\"to\":\"o:1;rZ:-90;\",\"ease\":\"Power2.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 9; white-space: nowrap; font-size: 14px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Oswald;text-decoration: none;\"> Вниз </a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t<li data-index=\"rs-68\" data-transition=\"slidingoverlayright\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"1000\"  data-thumb=\"assets/revslider1/assets/100x50_93b58-slider2.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t<img src=\"";
        // line 223
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/assets/93b58-slider2.jpg");
        echo "\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t<!-- LAYERS -->
\t\t\t\t\t\t<!-- LAYER NR. 6 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-68-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-82','-82','-72','-47']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"><strong>Верстаю</strong> красивые </div>
\t\t\t\t\t\t<!-- LAYER NR. 7 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-68-layer-4\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">печатные макеты </div>
\t\t\t\t\t\t<!-- LAYER NR. 8 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-68-layer-5\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['81','83','70','45']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">с иллюстрациями,</div>
\t\t\t\t\t\t<!-- LAYER NR. 8 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-7\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['162','166','140','91']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 8; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"> леттерингом, дудлами</div>
\t\t\t\t\t\t<!-- LAYER NR. 9 -->
\t\t\t\t\t\t<a class=\"tp-caption scroll-down\"
\t\t\t\t\t\t\thref=\"#section-aboutus1\" target=\"_self\"\tid=\"slide-68-layer-9\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['-38','-38','-38','-38']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['208','216','193','156']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-actions=''
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":1500,\"speed\":2000,\"frame\":\"0\",\"from\":\"y:50px;opacity:0;\",\"to\":\"o:1;rZ:-90;\",\"ease\":\"Power2.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 9; white-space: nowrap; font-size: 14px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Oswald;text-decoration: none;\"> Вниз </a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t<li data-index=\"rs-69\" data-transition=\"slidingoverlayright\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"1000\"  data-thumb=\"assets/revslider1/assets/100x50_30d37-slider5.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t<img src=\"";
        // line 328
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/assets/30d37-slider5.jpg");
        echo "\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t<!-- LAYERS -->
\t\t\t\t\t\t<!-- LAYER NR. 11 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-82','-82','-72','-47']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"><strong>Проектирую</strong></div>
\t\t\t\t\t\t<!-- LAYER NR. 12 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-4\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">оригинальные,</div>
\t\t\t\t\t\t<!-- LAYER NR. 13 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-5\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['81','83','70','45']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">интересные концепты </div>
\t\t\t\t\t\t<!-- LAYER NR. 14 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-6\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['162','166','140','92']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 8; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">для упаковок, дисплеев,</div>
\t\t\t\t\t\t<!-- LAYER NR. 15 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-7\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['248','246','213','140']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 8; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">театрализаций</div>
\t\t\t\t\t\t<!-- LAYER NR. 16 -->
\t\t\t\t\t\t<a class=\"tp-caption scroll-down\"
\t\t\t\t\t\t\thref=\"#section-aboutus1\" target=\"_self\"\tid=\"slide-69-layer-9\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['-38','-38','-38','-38']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['288','256','253','216']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-actions=''
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":1500,\"speed\":2000,\"frame\":\"0\",\"from\":\"y:50px;opacity:0;\",\"to\":\"o:1;rZ:-90;\",\"ease\":\"Power2.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 9; white-space: nowrap; font-size: 14px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Oswald;text-decoration: none;\"> Вниз </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>\t</div>
\t\t\t</div>
\t\t\t<!-- /.Revolution Slider 1 -->
\t\t\t<!-- Setion About us -->
\t\t\t<div id=\"section-aboutus1\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"left col-sm-12 col-md-6\">
\t\t\t\t\t\t\t<h6>Обо мне</h6>
\t\t\t\t\t\t\t<h1>Я Девятова Юлия,<br><span>графический дизайнер, художник</span></h1>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t    <li>12 лет опыта работы в области графического дизайна</li>
                                <li>4 года в должности арт-директора</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Умею рисовать традиционными материалами и в цифре,<br>а ещё обожаю леттеринг и каллиграфию!</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right ez-animate col-sm-12 col-md-6\" data-animation=\"slideInUp\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 468
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-aboutus1.png");
        echo "\" alt=\"JUSIKD.ART\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom ez-animate col-12\" data-animation=\"slideInUp\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 471
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-aboutus2.png");
        echo "\" alt=\"JUSIKD.ART\">
\t\t\t\t\t\t\t<label>Люблю Делать <span>Красивые Картинки</span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.Setion About us -->
\t\t\t<!-- Section section-recentworks 1 -->
\t\t\t<div id=\"section-recentworks1\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"title1 ez-animate col-12\" data-animation=\"fadeInUp\">
\t\t\t\t\t\t\t<h6>СВЕЖИЕ РАБОТЫ</h6>
\t\t\t\t\t\t\t<h2>Моё Портфолио</h2>
\t\t\t\t\t\t\t<i class=\"flaticon-download\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"our-portfolio col-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"item col-12 col-md-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 492
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/recentworks-1.jpg");
        echo "\" alt=\"Akroot\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>The big drop in slow motion</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Photography</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item col-12 col-md-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 506
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/recentworks-2.jpg");
        echo "\" alt=\"Akroot\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>The big drop in slow motion</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Photography</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item col-12 col-md-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 520
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/recentworks-3.jpg");
        echo "\" alt=\"Akroot\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>The big drop in slow motion</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Photography</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 532
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/recentworks-4.jpg");
        echo "\" alt=\"Akroot\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>The big drop in slow motion</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Photography</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.Section section-recentworks 1 -->\t\t\t
\t\t\t<!-- Section Contact Form 1 -->
\t\t\t<div id=\"section-contactform1\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"title1 ez-animate col-12\" data-animation=\"fadeInUp\">
\t\t\t\t\t\t\t\t<h6>КОНТАКТЫ</h6>
\t\t\t\t\t\t\t\t<h2>Свяжитесь со мной</h2>
\t\t\t\t\t\t\t\t<i class=\"flaticon-download\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contactform1\">
\t\t\t\t\t\t\t    <div class=\"confirm-contact-container\"></div>
\t\t\t\t\t\t\t\t<form id=\"contact-form\" data-request=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["contactForm"] ?? null), 561, $this->source), "html", null, true);
        echo "::onMailSend\"
                                          data-request-update=\"'";
        // line 562
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["contactForm"] ?? null), 562, $this->source), "html", null, true);
        echo "::confirm': '.confirm-contact-container'\"
                                          data-request-success=\"getMessage()\"
                                          ";
        // line 564
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableFileUpload", [], "any", false, false, true, 564)) {
            // line 565
            echo "                                          data-request-files
                                          ";
        }
        // line 566
        echo ">
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "name", [], "any", false, false, true, 569), 569, $this->source), "html", null, true);
        echo " *\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "email", [], "any", false, false, true, 572), 572, $this->source), "html", null, true);
        echo " *\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 575
        if ((twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enablePhoneNumber", [], "any", false, false, true, 575) || twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableSubject", [], "any", false, false, true, 575))) {
            // line 576
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t     ";
            // line 577
            if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enablePhoneNumber", [], "any", false, false, true, 577)) {
                // line 578
                echo "                                            <div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t    <input type=\"text\" class=\"form-control\" name=\"phone_number\" id=\"PhoneNumber\" placeholder=\"";
                // line 579
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "phone_number", [], "any", false, false, true, 579), 579, $this->source), "html", null, true);
                echo " *\" required>
\t\t\t\t\t\t\t\t\t\t    </div>
                                         ";
            }
            // line 582
            echo "                                         ";
            if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableSubject", [], "any", false, false, true, 582)) {
                // line 583
                echo "                                            <div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t    <input type=\"text\" class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"";
                // line 584
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "subject", [], "any", false, false, true, 584), 584, $this->source), "html", null, true);
                echo " *\" required>
\t\t\t\t\t\t\t\t\t\t    </div>
                                         ";
            }
            // line 587
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 589
        echo "\t\t\t\t\t\t\t\t\t";
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableFileUpload", [], "any", false, false, true, 589)) {
            // line 590
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
                                        <div class=\"form-group col-md-12\">
                                            <label for=\"attachment\">";
            // line 592
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "attachment", [], "any", false, false, true, 592), 592, $this->source), "html", null, true);
            echo "</label>
                                            <input type=\"file\" name=\"attachment\" class=\"form-control\">
                                        </div>
                                    </div>
                                    ";
        }
        // line 597
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"message\" name=\"message_content\" rows=\"3\" placeholder=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "message", [], "any", false, false, true, 599), 599, $this->source), "html", null, true);
        echo " *\" required></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 602
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "enableCaptcha", [], "any", false, false, true, 602)) {
            // line 603
            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
                                        <div class=\"form-group col-md-12\">
                                            <div class=\"g-recaptcha\" data-theme=\"dark\" data-sitekey=\"";
            // line 605
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "captchaSiteKey", [], "any", false, false, true, 605), 605, $this->source), "html", null, true);
            echo "\"></div>
                                        </div>
                                    </div>
                                    ";
        }
        // line 609
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["contactForm"] ?? null), "mailgunSubscribeExist", [], "any", false, false, true, 609)) {
            // line 610
            echo "                                    <div class=\"form-row\">
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <label><input type=\"checkbox\" name=\"maillist_subscribe\" checked>";
            // line 613
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "maillist", [], "any", false, false, true, 613), 613, $this->source), "html", null, true);
            echo "</label>
                                                <input type=\"hidden\" name=\"confirm_subscribe\" value=\"true\">
                                            </div>
                                        </div>
                                    </div>
                                    ";
        }
        // line 619
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-bot0 col-md-12 \">
\t\t\t\t\t\t\t\t\t\t\t<!--button type=\"submit\">";
        // line 621
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "button_text", [], "any", false, false, true, 621), 621, $this->source), "html", null, true);
        echo "</button-->
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg pull-left mt-4\">
                                                ";
        // line 623
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), "button_text", [], "any", false, false, true, 623), 623, $this->source), "html", null, true);
        echo "
                                            </button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.Section Contact Form 1 -->
\t\t\t<!-- Section Footer -->
\t\t\t<div id=\"section-footer\">
\t\t\t\t<div class=\"footer1 col-12\">
\t\t\t\t\t<div class=\"widget col-12\">
\t\t\t\t\t\t<a href=\"/\"><img src=\"";
        // line 638
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/jus_logo_2020_mini_white.svg");
        echo "\" alt=\"JUSIKD.ART\" height=\"100\" width=\"100\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"footer2 row\">
\t\t\t\t\t\t<div class=\"ft-copyright col-md-6\">
\t\t\t\t\t\t\t<p>Copyright © ";
        // line 644
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 644, $this->source), "Y"), "html", null, true);
        echo " <a href=\"/\">JUSIKD.ART</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ft-socialmedia col-md-6\">
\t\t\t\t\t\t\t<div class=\"social-links socials-header\">
\t\t\t\t\t\t\t    ";
        // line 648
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("includes/social_buttons"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 649
        echo "\t\t\t\t            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.Section Footer -->
        </div>
    </div>
\t<!-- Javascript Files -->
\t<script src=\"";
        // line 658
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
\t<!-- Bootstrap -->
\t<script src=\"";
        // line 660
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
\t<!-- Swiper Slider -->
\t<script src=\"";
        // line 662
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/swiper.min.js");
        echo "\"></script>
\t<!-- OWL Carousel -->
\t<script src=\"";
        // line 664
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
\t<!-- Waypoint -->
\t<script src=\"";
        // line 666
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.waypoints.min.js");
        echo "\"></script>
\t<!-- Easy Waypoint -->
\t<script src=\"";
        // line 668
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/easy-waypoint-animate.js");
        echo "\"></script>
\t<!-- Counter -->
\t<script src=\"";
        // line 670
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.countup.js");
        echo "\"></script>
\t<script src=\"";
        // line 671
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/cmz-count.js");
        echo "\"></script>
\t<!-- Scripts -->
\t<script src=\"";
        // line 673
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/scripts.js");
        echo "\"></script>
\t<!-- REVOLUTION SLIDER -->
\t<!-- ADD-ONS JS FILES -->
\t<script src=\"";
        // line 676
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/revolution.addon.particles.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 677
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/revolution.addon.snow.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 678
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/revolution.addon.polyfold.min.js");
        echo "\"></script>
\t<!-- REVOLUTION JS FILES -->
\t<script src=\"";
        // line 680
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/jquery.themepunch.tools.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 681
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/jquery.themepunch.revolution.min.js");
        echo "\"></script>
\t<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
\t<script src=\"";
        // line 683
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/extensions/revolution.extension.actions.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 684
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/extensions/revolution.extension.carousel.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 685
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/extensions/revolution.extension.kenburn.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 686
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/extensions/revolution.extension.layeranimation.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 687
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/extensions/revolution.extension.migration.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 688
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/extensions/revolution.extension.navigation.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 689
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/extensions/revolution.extension.parallax.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 690
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/extensions/revolution.extension.slideanims.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 691
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/extensions/revolution.extension.video.min.js");
        echo "\"></script>
\t<!-- Inline JS -->
\t<script src=\"";
        // line 693
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/revslider1/js/inline-revslider1.js");
        echo "\"></script>
\t
\t<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
\t
\t<script src=\"/plugins/planetadeleste/swal/assets/vendor/sweetalert/sweetalert.min.js\"></script>
    <script src=\"/plugins/planetadeleste/swal/assets/js/flash-swal.js\"></script>
    
    ";
        // line 700
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 701
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/www/themes/Jusikd_theme/layouts/main_template.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1003 => 701,  992 => 700,  982 => 693,  977 => 691,  973 => 690,  969 => 689,  965 => 688,  961 => 687,  957 => 686,  953 => 685,  949 => 684,  945 => 683,  940 => 681,  936 => 680,  931 => 678,  927 => 677,  923 => 676,  917 => 673,  912 => 671,  908 => 670,  903 => 668,  898 => 666,  893 => 664,  888 => 662,  883 => 660,  878 => 658,  867 => 649,  863 => 648,  856 => 644,  847 => 638,  829 => 623,  824 => 621,  820 => 619,  811 => 613,  806 => 610,  803 => 609,  796 => 605,  792 => 603,  790 => 602,  784 => 599,  780 => 597,  772 => 592,  768 => 590,  765 => 589,  761 => 587,  755 => 584,  752 => 583,  749 => 582,  743 => 579,  740 => 578,  738 => 577,  735 => 576,  733 => 575,  727 => 572,  721 => 569,  716 => 566,  712 => 565,  710 => 564,  705 => 562,  701 => 561,  669 => 532,  654 => 520,  637 => 506,  620 => 492,  596 => 471,  590 => 468,  447 => 328,  339 => 223,  230 => 117,  217 => 106,  213 => 105,  210 => 104,  206 => 103,  189 => 89,  166 => 69,  140 => 46,  136 => 45,  131 => 43,  126 => 41,  121 => 39,  117 => 38,  111 => 35,  106 => 33,  101 => 31,  97 => 30,  92 => 28,  88 => 27,  81 => 23,  76 => 21,  71 => 19,  66 => 17,  56 => 10,  52 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'sweetAlertMessage' %}<!DOCTYPE html>
<html lang=\"ru\">
<head>
    <!-- Uniocde -->
    <meta charset=\"utf-8\">
    <!--[if IE]>
    <meta http-equiv=\"X-UA Compatible\" content=\"IE=edge\">
    <![endif]-->
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <!-- Page Kewords -->
    <meta name=\"keywords\" content=\"JUSIKD.ART\">
    <!-- Site Author -->
    <meta name=\"author\" content=\"JUSIKD.ART\">
    <meta name=\"p:domain_verify\" content=\"ef6e6cb75fbf1d463694a4ea4fc664ce\"/>
    <!-- Title -->
    <title>JUSIKD.ART | {{ this.page.title }}</title>
    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.ico'|theme  }}\">
    <!-- Bootstrap 4 -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" type=\"text/css\">
    <!-- Swiper Slider -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/swiper.min.css'|theme }}\" type=\"text/css\">
    <!-- Fonts -->

    
    <!--link rel=\"stylesheet\" href=\"{{ 'assets/fonts/flaticon/flaticon.css'|theme }}\" type=\"text/css\"-->
    <link rel=\"stylesheet\" href=\"{{ 'assets/fonts/fontawesome/font-awesome.min.css'|theme }}\">
    <!-- OWL Carousel -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.min.css'|theme }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.theme.default.min.css'|theme }}\" type=\"text/css\">
    <!-- CSS Animate -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.min.css'|theme }}\" type=\"text/css\">
    <!-- Style -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\" type=\"text/css\">
    <!-- REVOLUTION SLIDER -->
    
\t<!--link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/revslider1/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css'|theme }}\"-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/revslider1/fonts/font-awesome/css/font-awesome.css'|theme }}\">
\t<!-- REVOLUTION STYLE SHEETS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets/revslider1/css/settings.css'|theme }}\">
\t<!-- REVOLUTION LAYERS STYLES -->
\t<link rel=\"stylesheet\" href=\"{{ 'assets/revslider1/css/inline-revslider1.css\" type=\"text/css'|theme }}\">
\t<!-- ADD-ONS CSS FILES -->
\t<link rel=\"stylesheet\" type=\"text/css\"  media=\"all\" href=\"{{ 'assets/revslider1/css/revolution.addon.particles.css'|theme }}\" />
\t<link rel=\"stylesheet\" type=\"text/css\"  media=\"all\" href=\"{{ 'assets/revslider1/css/revolution.addon.polyfold.css'|theme }}\" />
\t<!-- /.REVOLUTION SLIDER -->
\t<link rel=\"stylesheet\" href=\"/plugins/planetadeleste/swal/assets/vendor/sweetalert/sweetalert.css\">
</head>
<body>
\t<!-- Section Preloader -->
\t<div id=\"section-preloader\">
\t\t<div class=\"blobs\">
\t\t\t<div class=\"blob-center\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t\t<div class=\"blob\"></div>
\t\t</div>
\t</div>
\t<!-- /.Section Preloader -->
\t<!-- Section Navbar -->
\t<div id=\"section-navbar1\">
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-expand-lg\">
\t\t\t\t<div class=\"header-logo mr-auto\">
\t\t\t\t\t<a href=\"/\" class=\"header-contact\"><img src=\"{{ 'assets/images/jus_logo_2020_long_white-01.svg'|theme }}\" alt=\"JUSIKD.ART\" height=\"50\" width=\"200\"><span></span></a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"nav navbar-nav navbar1\">
\t\t            <li class=\"nav-item\">
\t\t                <button type=\"button\" id=\"sidebarCollapse\" class=\"navbar-btn active\">
\t\t\t                <span></span>
\t\t\t                <span></span>
\t\t\t                <span></span>
\t\t\t                <span></span>
\t\t\t            </button>
\t\t            </li>
\t\t        </ul>
\t\t    </nav>
\t\t</div>
\t</div>
\t<div id=\"section-search\" class=\"close-search\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navigation-search\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col ns-logo\">
\t\t\t\t\t\t<a href=\"/\"><img src=\"{{ 'assets/images/jus_logo_2020_long_white-01.svg'|theme }}\" alt=\"Jusikd.ART\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col ns-close\">
\t\t\t\t\t\t<span class=\"close\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /.Section Navbar -->
\t<div class=\"main-wrapper\">
        <!-- Sidebar  -->
        <nav id=\"sidebar\" class=\"active\">
        \t<div class=\"social-links socials-header text-center\">
                {% partial 'includes/social_buttons' %}
            </div>
            {% partial 'includes/menu' %}
        </nav>
        <!-- /.Sidebar  -->
        <!-- Page Content  -->
        <div id=\"main-content\" class=\"active\">
            <!-- Revolution Slider 1 -->
            <div id=\"rev_slider_14_1_wrapper\" class=\"rev_slider_wrapper fullscreen-container\" data-alias=\"akroot\" data-source=\"gallery\" style=\"background:#ffffff;padding:0px;\">
\t\t\t\t<!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
\t\t\t\t<div id=\"rev_slider_14_1\" class=\"rev_slider fullscreenbanner\" style=\"display:none;\" data-version=\"5.4.8.1\">
\t\t\t\t\t<ul>\t<!-- SLIDE  -->
\t\t\t\t\t<li data-index=\"rs-49\" data-transition=\"slidingoverlayright\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"1000\"  data-thumb=\"assets/revslider1/assets/100x50_9e6da-slider1.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t<img src=\"{{ 'assets/revslider1/assets/9e6da-slider1.jpg'|theme }}\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t<!-- LAYERS -->
\t\t\t\t\t\t<!-- LAYER NR. 1 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-49-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-82','-82','-72','-47']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"><strong>Создаю</strong> яркие, </div>
\t\t\t\t\t\t<!-- LAYER NR. 2 -->
\t\t\t\t\t\t<div class=\"tp-caption  \"
\t\t\t\t\t\t\tid=\"slide-49-layer-4\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">запоминающиеся </div>
\t\t\t\t\t\t<!-- LAYER NR. 3 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-49-layer-5\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['81','83','70','45']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">знаки, логотипы, </div>
\t\t\t\t\t\t<!-- LAYER NR. 4 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-49-layer-7\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['162','166','140','91']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 8; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"> фирменные стили
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- LAYER NR. 5 -->
\t\t\t\t\t\t<a class=\"tp-caption scroll-down\"
\t\t\t\t\t\t\thref=\"#section-aboutus1\" target=\"_self\"\tid=\"slide-49-layer-9\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['-38','-38','-38','-38']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['208','216','193','156']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-actions=''
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":1500,\"speed\":2000,\"frame\":\"0\",\"from\":\"y:50px;opacity:0;\",\"to\":\"o:1;rZ:-90;\",\"ease\":\"Power2.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 9; white-space: nowrap; font-size: 14px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Oswald;text-decoration: none;\"> Вниз </a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t<li data-index=\"rs-68\" data-transition=\"slidingoverlayright\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"1000\"  data-thumb=\"assets/revslider1/assets/100x50_93b58-slider2.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t<img src=\"{{ 'assets/revslider1/assets/93b58-slider2.jpg'|theme }}\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t<!-- LAYERS -->
\t\t\t\t\t\t<!-- LAYER NR. 6 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-68-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-82','-82','-72','-47']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"><strong>Верстаю</strong> красивые </div>
\t\t\t\t\t\t<!-- LAYER NR. 7 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-68-layer-4\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">печатные макеты </div>
\t\t\t\t\t\t<!-- LAYER NR. 8 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-68-layer-5\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['81','83','70','45']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">с иллюстрациями,</div>
\t\t\t\t\t\t<!-- LAYER NR. 8 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-7\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['162','166','140','91']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 8; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"> леттерингом, дудлами</div>
\t\t\t\t\t\t<!-- LAYER NR. 9 -->
\t\t\t\t\t\t<a class=\"tp-caption scroll-down\"
\t\t\t\t\t\t\thref=\"#section-aboutus1\" target=\"_self\"\tid=\"slide-68-layer-9\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['-38','-38','-38','-38']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['208','216','193','156']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-actions=''
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":1500,\"speed\":2000,\"frame\":\"0\",\"from\":\"y:50px;opacity:0;\",\"to\":\"o:1;rZ:-90;\",\"ease\":\"Power2.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 9; white-space: nowrap; font-size: 14px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Oswald;text-decoration: none;\"> Вниз </a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- SLIDE  -->
\t\t\t\t\t<li data-index=\"rs-69\" data-transition=\"slidingoverlayright\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"1000\"  data-thumb=\"assets/revslider1/assets/100x50_30d37-slider5.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Slide\" data-param1=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
\t\t\t\t\t\t<!-- MAIN IMAGE -->
\t\t\t\t\t\t<img src=\"{{ 'assets/revslider1/assets/30d37-slider5.jpg'|theme }}\"  alt=\"\"  data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\" data-no-retina>
\t\t\t\t\t\t<!-- LAYERS -->
\t\t\t\t\t\t<!-- LAYER NR. 11 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-3\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['-82','-82','-72','-47']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 5; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\"><strong>Проектирую</strong></div>
\t\t\t\t\t\t<!-- LAYER NR. 12 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-4\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">оригинальные,</div>
\t\t\t\t\t\t<!-- LAYER NR. 13 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-5\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['81','83','70','45']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">интересные концепты </div>
\t\t\t\t\t\t<!-- LAYER NR. 14 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-6\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['162','166','140','92']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 8; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">для упаковок, дисплеев,</div>
\t\t\t\t\t\t<!-- LAYER NR. 15 -->
\t\t\t\t\t\t<div class=\"tp-caption\"
\t\t\t\t\t\t\tid=\"slide-69-layer-7\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['0','0','0','0']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['248','246','213','140']\"
\t\t\t\t\t\t\tdata-fontsize=\"['60','60','50','30']\"
\t\t\t\t\t\t\tdata-lineheight=\"['80','80','70','40']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":800,\"speed\":1500,\"frame\":\"0\",\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"to\":\"o:1;\",\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"frame\":\"999\",\"to\":\"x:[-100%];\",\"mask\":\"x:inherit;y:inherit;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 8; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Oswald;\">театрализаций</div>
\t\t\t\t\t\t<!-- LAYER NR. 16 -->
\t\t\t\t\t\t<a class=\"tp-caption scroll-down\"
\t\t\t\t\t\t\thref=\"#section-aboutus1\" target=\"_self\"\tid=\"slide-69-layer-9\"
\t\t\t\t\t\t\tdata-x=\"['right','right','right','right']\" data-hoffset=\"['-38','-38','-38','-38']\"
\t\t\t\t\t\t\tdata-y=\"['middle','middle','middle','middle']\" data-voffset=\"['288','256','253','216']\"
\t\t\t\t\t\t\tdata-width=\"none\"
\t\t\t\t\t\t\tdata-height=\"none\"
\t\t\t\t\t\t\tdata-whitespace=\"nowrap\"
\t\t\t\t\t\t\tdata-type=\"text\"
\t\t\t\t\t\t\tdata-actions=''
\t\t\t\t\t\t\tdata-responsive_offset=\"on\"
\t\t\t\t\t\t\tdata-responsive=\"off\"
\t\t\t\t\t\t\tdata-frames='[{\"delay\":1500,\"speed\":2000,\"frame\":\"0\",\"from\":\"y:50px;opacity:0;\",\"to\":\"o:1;rZ:-90;\",\"ease\":\"Power2.easeInOut\"},{\"delay\":\"wait\",\"speed\":300,\"frame\":\"999\",\"to\":\"opacity:0;\",\"ease\":\"Power3.easeInOut\"}]'
\t\t\t\t\t\t\tdata-textAlign=\"['inherit','inherit','inherit','inherit']\"
\t\t\t\t\t\t\tdata-paddingtop=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingright=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingbottom=\"[0,0,0,0]\"
\t\t\t\t\t\t\tdata-paddingleft=\"[0,0,0,0]\"
\t\t\t\t\t\tstyle=\"z-index: 9; white-space: nowrap; font-size: 14px; line-height: 100px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Oswald;text-decoration: none;\"> Вниз </a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tp-bannertimer tp-bottom\" style=\"visibility: hidden !important;\"></div>\t</div>
\t\t\t</div>
\t\t\t<!-- /.Revolution Slider 1 -->
\t\t\t<!-- Setion About us -->
\t\t\t<div id=\"section-aboutus1\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"left col-sm-12 col-md-6\">
\t\t\t\t\t\t\t<h6>Обо мне</h6>
\t\t\t\t\t\t\t<h1>Я Девятова Юлия,<br><span>графический дизайнер, художник</span></h1>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t    <li>12 лет опыта работы в области графического дизайна</li>
                                <li>4 года в должности арт-директора</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p>Умею рисовать традиционными материалами и в цифре,<br>а ещё обожаю леттеринг и каллиграфию!</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right ez-animate col-sm-12 col-md-6\" data-animation=\"slideInUp\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ 'assets/images/img-aboutus1.png'|theme }}\" alt=\"JUSIKD.ART\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom ez-animate col-12\" data-animation=\"slideInUp\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ 'assets/images/img-aboutus2.png'|theme }}\" alt=\"JUSIKD.ART\">
\t\t\t\t\t\t\t<label>Люблю Делать <span>Красивые Картинки</span></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.Setion About us -->
\t\t\t<!-- Section section-recentworks 1 -->
\t\t\t<div id=\"section-recentworks1\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"title1 ez-animate col-12\" data-animation=\"fadeInUp\">
\t\t\t\t\t\t\t<h6>СВЕЖИЕ РАБОТЫ</h6>
\t\t\t\t\t\t\t<h2>Моё Портфолио</h2>
\t\t\t\t\t\t\t<i class=\"flaticon-download\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"our-portfolio col-12\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"item col-12 col-md-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ 'assets/images/recentworks-1.jpg'|theme }}\" alt=\"Akroot\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>The big drop in slow motion</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Photography</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item col-12 col-md-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ 'assets/images/recentworks-2.jpg'|theme }}\" alt=\"Akroot\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>The big drop in slow motion</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Photography</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"item col-12 col-md-4\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ 'assets/images/recentworks-3.jpg'|theme }}\" alt=\"Akroot\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>The big drop in slow motion</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Photography</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img-container\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ 'assets/images/recentworks-4.jpg'|theme }}\" alt=\"Akroot\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>The big drop in slow motion</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Photography</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div-->
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.Section section-recentworks 1 -->\t\t\t
\t\t\t<!-- Section Contact Form 1 -->
\t\t\t<div id=\"section-contactform1\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"title1 ez-animate col-12\" data-animation=\"fadeInUp\">
\t\t\t\t\t\t\t\t<h6>КОНТАКТЫ</h6>
\t\t\t\t\t\t\t\t<h2>Свяжитесь со мной</h2>
\t\t\t\t\t\t\t\t<i class=\"flaticon-download\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contactform1\">
\t\t\t\t\t\t\t    <div class=\"confirm-contact-container\"></div>
\t\t\t\t\t\t\t\t<form id=\"contact-form\" data-request=\"{{ contactForm }}::onMailSend\"
                                          data-request-update=\"'{{ contactForm }}::confirm': '.confirm-contact-container'\"
                                          data-request-success=\"getMessage()\"
                                          {% if contactForm.enableFileUpload %}
                                          data-request-files
                                          {% endif %}>
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"{{ label.name }} *\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"{{ label.email }} *\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if contactForm.enablePhoneNumber or contactForm.enableSubject %}
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t     {% if contactForm.enablePhoneNumber %}
                                            <div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t    <input type=\"text\" class=\"form-control\" name=\"phone_number\" id=\"PhoneNumber\" placeholder=\"{{ label.phone_number }} *\" required>
\t\t\t\t\t\t\t\t\t\t    </div>
                                         {% endif %}
                                         {% if contactForm.enableSubject %}
                                            <div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t    <input type=\"text\" class=\"form-control\" id=\"subject\" name=\"subject\" placeholder=\"{{ label.subject }} *\" required>
\t\t\t\t\t\t\t\t\t\t    </div>
                                         {% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if contactForm.enableFileUpload %}
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
                                        <div class=\"form-group col-md-12\">
                                            <label for=\"attachment\">{{ label.attachment }}</label>
                                            <input type=\"file\" name=\"attachment\" class=\"form-control\">
                                        </div>
                                    </div>
                                    {% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"message\" name=\"message_content\" rows=\"3\" placeholder=\"{{ label.message }} *\" required></textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% if contactForm.enableCaptcha %}
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
                                        <div class=\"form-group col-md-12\">
                                            <div class=\"g-recaptcha\" data-theme=\"dark\" data-sitekey=\"{{ contactForm.captchaSiteKey }}\"></div>
                                        </div>
                                    </div>
                                    {% endif %}
                                    {% if contactForm.mailgunSubscribeExist %}
                                    <div class=\"form-row\">
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <label><input type=\"checkbox\" name=\"maillist_subscribe\" checked>{{label.maillist}}</label>
                                                <input type=\"hidden\" name=\"confirm_subscribe\" value=\"true\">
                                            </div>
                                        </div>
                                    </div>
                                    {% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group m-bot0 col-md-12 \">
\t\t\t\t\t\t\t\t\t\t\t<!--button type=\"submit\">{{label.button_text}}</button-->
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-lg pull-left mt-4\">
                                                {{label.button_text}}
                                            </button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.Section Contact Form 1 -->
\t\t\t<!-- Section Footer -->
\t\t\t<div id=\"section-footer\">
\t\t\t\t<div class=\"footer1 col-12\">
\t\t\t\t\t<div class=\"widget col-12\">
\t\t\t\t\t\t<a href=\"/\"><img src=\"{{ 'assets/images/jus_logo_2020_mini_white.svg'|theme }}\" alt=\"JUSIKD.ART\" height=\"100\" width=\"100\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"footer2 row\">
\t\t\t\t\t\t<div class=\"ft-copyright col-md-6\">
\t\t\t\t\t\t\t<p>Copyright © {{ date|date(\"Y\") }} <a href=\"/\">JUSIKD.ART</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ft-socialmedia col-md-6\">
\t\t\t\t\t\t\t<div class=\"social-links socials-header\">
\t\t\t\t\t\t\t    {% partial 'includes/social_buttons' %}
\t\t\t\t            </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.Section Footer -->
        </div>
    </div>
\t<!-- Javascript Files -->
\t<script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
\t<!-- Bootstrap -->
\t<script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
\t<!-- Swiper Slider -->
\t<script src=\"{{ 'assets/js/swiper.min.js'|theme }}\"></script>
\t<!-- OWL Carousel -->
\t<script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
\t<!-- Waypoint -->
\t<script src=\"{{ 'assets/js/jquery.waypoints.min.js'|theme }}\"></script>
\t<!-- Easy Waypoint -->
\t<script src=\"{{ 'assets/js/easy-waypoint-animate.js'|theme }}\"></script>
\t<!-- Counter -->
\t<script src=\"{{ 'assets/js/jquery.countup.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/cmz-count.js'|theme }}\"></script>
\t<!-- Scripts -->
\t<script src=\"{{ 'assets/js/scripts.js'|theme }}\"></script>
\t<!-- REVOLUTION SLIDER -->
\t<!-- ADD-ONS JS FILES -->
\t<script src=\"{{ 'assets/revslider1/js/revolution.addon.particles.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/revolution.addon.snow.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/revolution.addon.polyfold.min.js'|theme }}\"></script>
\t<!-- REVOLUTION JS FILES -->
\t<script src=\"{{ 'assets/revslider1/js/jquery.themepunch.tools.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/jquery.themepunch.revolution.min.js'|theme }}\"></script>
\t<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
\t<script src=\"{{ 'assets/revslider1/js/extensions/revolution.extension.actions.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/extensions/revolution.extension.carousel.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/extensions/revolution.extension.kenburn.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/extensions/revolution.extension.layeranimation.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/extensions/revolution.extension.migration.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/extensions/revolution.extension.navigation.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/extensions/revolution.extension.parallax.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/extensions/revolution.extension.slideanims.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/revslider1/js/extensions/revolution.extension.video.min.js'|theme }}\"></script>
\t<!-- Inline JS -->
\t<script src=\"{{ 'assets/revslider1/js/inline-revslider1.js'|theme }}\"></script>
\t
\t<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
\t
\t<script src=\"/plugins/planetadeleste/swal/assets/vendor/sweetalert/sweetalert.min.js\"></script>
    <script src=\"/plugins/planetadeleste/swal/assets/js/flash-swal.js\"></script>
    
    {% framework extras %}
</body>
</html>", "/home/www/themes/Jusikd_theme/layouts/main_template.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 1, "partial" => 103, "if" => 564, "framework" => 700);
        static $filters = array("escape" => 9, "theme" => 19, "date" => 644);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'partial', 'if', 'framework'],
                ['escape', 'theme', 'date'],
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
