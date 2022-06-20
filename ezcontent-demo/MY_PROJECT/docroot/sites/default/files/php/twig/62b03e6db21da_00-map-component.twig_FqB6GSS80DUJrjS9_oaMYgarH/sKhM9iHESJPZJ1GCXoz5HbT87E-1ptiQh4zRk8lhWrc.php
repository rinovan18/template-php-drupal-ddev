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

/* @molecules/03-MapComponent/00-map-component.twig */
class __TwigTemplate_5df7f1a85121c2edeed4c14aec62bfa3783542b48ae52b5e9bd6081c40905b3d extends \Twig\Template
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
        echo "<div class=\"map-component\">
  ";
        // line 2
        $this->loadTemplate("@atoms/02-text/00-headings.twig", "@molecules/03-MapComponent/00-map-component.twig", 2)->display(twig_array_merge($context, ["heading_level" => 2, "heading" => twig_get_attribute($this->env, $this->source,         // line 4
($context["map"] ?? null), "title", [], "any", false, false, true, 4), "class" => "field--name-field-title"]));
        // line 7
        echo "
  ";
        // line 8
        $this->loadTemplate("@atoms/02-text/00-headings.twig", "@molecules/03-MapComponent/00-map-component.twig", 8)->display(twig_array_merge($context, ["heading_level" => 4, "heading" => twig_get_attribute($this->env, $this->source,         // line 10
($context["map"] ?? null), "subTitle", [], "any", false, false, true, 10), "class" => "field--name-field-short-title"]));
        // line 13
        echo "
  ";
        // line 14
        $context["mapUrl"] = twig_replace_filter((("https://maps.google.com/maps?hl=en&q=" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "url", [], "any", false, false, true, 14), 14, $this->source)) . "&t=m&z=14&output=embed"), [" " => "+", "," => ""]);
        // line 15
        echo "
  ";
        // line 16
        $this->loadTemplate("@atoms/14-iframe/00-iframe.twig", "@molecules/03-MapComponent/00-map-component.twig", 16)->display(twig_array_merge($context, ["src" =>         // line 17
($context["mapUrl"] ?? null), "class" => "w-100", "frameBorder" => "0", "height" => "410", "text" => "map"]));
        // line 23
        echo "
  ";
        // line 24
        $this->loadTemplate("@atoms/02-text/01-paragraph.twig", "@molecules/03-MapComponent/00-map-component.twig", 24)->display(twig_array_merge($context, ["paragraph_content" => twig_get_attribute($this->env, $this->source,         // line 25
($context["map"] ?? null), "body", [], "any", false, false, true, 25), "class" => "field--name-field-body"]));
        // line 28
        echo "
  ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "links", [], "any", true, true, true, 29) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "links", [], "any", false, false, true, 29)))) {
            // line 30
            echo "    <div class=\"w-100 text-right field--name-field-link\">
      ";
            // line 31
            $this->loadTemplate("@atoms/12-links/00-links.twig", "@molecules/03-MapComponent/00-map-component.twig", 31)->display(twig_array_merge($context, ["text" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 32
($context["map"] ?? null), "links", [], "any", false, false, true, 32), "title", [], "any", false, false, true, 32)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "links", [], "any", false, false, true, 32), "title", [], "any", false, false, true, 32)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["map"] ?? null), "links", [], "any", false, false, true, 32), "url", [], "any", false, false, true, 32))), "url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 33
($context["map"] ?? null), "links", [], "any", false, false, true, 33), "url", [], "any", false, false, true, 33), "class" => "rounded-0"]));
            // line 36
            echo "    </div>
  ";
        }
        // line 38
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@molecules/03-MapComponent/00-map-component.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 38,  80 => 36,  78 => 33,  77 => 32,  76 => 31,  73 => 30,  71 => 29,  68 => 28,  66 => 25,  65 => 24,  62 => 23,  60 => 17,  59 => 16,  56 => 15,  54 => 14,  51 => 13,  49 => 10,  48 => 8,  45 => 7,  43 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/03-MapComponent/00-map-component.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/01-molecules/03-MapComponent/00-map-component.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2, "set" => 14, "if" => 29);
        static $filters = array("replace" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'set', 'if'],
                ['replace'],
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
