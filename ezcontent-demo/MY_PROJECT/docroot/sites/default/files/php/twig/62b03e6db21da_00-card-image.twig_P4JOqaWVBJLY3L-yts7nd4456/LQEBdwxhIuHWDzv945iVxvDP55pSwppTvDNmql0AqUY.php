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

/* @molecules/01-Card/00-card-image.twig */
class __TwigTemplate_99e7855fba0b27fe650f523f5c4e92d00057c29b22d40532d9b5975c1a42e490 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card__img' => [$this, 'block_card__img'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('card__img', $context, $blocks);
    }

    public function block_card__img($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <div class=\"field--name-field-media-image\">
    ";
        // line 3
        $this->loadTemplate("@atoms/04-images/01-image.twig", "@molecules/01-Card/00-card-image.twig", 3)->display(twig_array_merge($context, ["src" => twig_get_attribute($this->env, $this->source,         // line 4
($context["card"] ?? null), "img_url", [], "any", false, false, true, 4), "alt" => twig_get_attribute($this->env, $this->source,         // line 5
($context["card"] ?? null), "img_alt", [], "any", false, false, true, 5)]));
        // line 7
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "@molecules/01-Card/00-card-image.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  52 => 5,  51 => 4,  50 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/01-Card/00-card-image.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/01-molecules/01-Card/00-card-image.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1, "include" => 3);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'include'],
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
