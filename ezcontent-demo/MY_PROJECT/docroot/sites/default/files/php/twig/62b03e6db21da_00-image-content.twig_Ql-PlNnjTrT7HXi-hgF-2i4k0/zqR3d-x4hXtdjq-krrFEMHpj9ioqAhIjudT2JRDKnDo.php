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

/* @molecules/05-HeroComponent/00-image-content.twig */
class __TwigTemplate_352906c8350440f710f04daf46c4c838d52a60d7b0449c05110e71edaecc9b5a extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "image", [], "any", false, false, true, 1)) {
            // line 2
            echo "\t";
            $this->loadTemplate("@atoms/04-images/01-image.twig", "@molecules/05-HeroComponent/00-image-content.twig", 2)->display(twig_array_merge($context, ["src" => twig_get_attribute($this->env, $this->source,             // line 3
($context["assets"] ?? null), "image", [], "any", false, false, true, 3)]));
        } else {
            // line 6
            echo "\t";
            $this->loadTemplate("@atoms/04-images/01-image.twig", "@molecules/05-HeroComponent/00-image-content.twig", 6)->display(twig_array_merge($context, ["src" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 7
($context["heroComponent"] ?? null), "heroAsset", [], "any", false, false, true, 7), "image", [], "any", false, false, true, 7)]));
        }
    }

    public function getTemplateName()
    {
        return "@molecules/05-HeroComponent/00-image-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  46 => 6,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/05-HeroComponent/00-image-content.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/01-molecules/05-HeroComponent/00-image-content.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "include" => 2);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
