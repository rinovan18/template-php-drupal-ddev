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

/* @molecules/01-Card/01-card-text-content.twig */
class __TwigTemplate_1fddc091706b23c594b2c10966b571c76672b4fcb4d40c40692757ca9ba434d1 extends \Twig\Template
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
        echo "<div class=\"card-text-content\">
  ";
        // line 2
        $this->loadTemplate("@atoms/02-text/00-headings.twig", "@molecules/01-Card/01-card-text-content.twig", 2)->display(twig_array_merge($context, ["heading_level" => 1, "heading" => twig_get_attribute($this->env, $this->source,         // line 4
($context["card"] ?? null), "title", [], "any", false, false, true, 4), "class" => "field--name-field-title"]));
        // line 7
        echo "
  ";
        // line 8
        $this->loadTemplate("@atoms/02-text/00-headings.twig", "@molecules/01-Card/01-card-text-content.twig", 8)->display(twig_array_merge($context, ["heading_level" => 4, "heading" => twig_get_attribute($this->env, $this->source,         // line 10
($context["card"] ?? null), "short_title", [], "any", false, false, true, 10), "class" => "field--name-field-short-title"]));
        // line 13
        echo "
  ";
        // line 14
        $this->loadTemplate("@atoms/02-text/08-field.twig", "@molecules/01-Card/01-card-text-content.twig", 14)->display(twig_array_merge($context, ["field_content" => twig_get_attribute($this->env, $this->source,         // line 15
($context["card"] ?? null), "sub_head", [], "any", false, false, true, 15), "class" => "field--name-field-subhead"]));
        // line 18
        echo "
  ";
        // line 19
        $this->loadTemplate("@atoms/02-text/01-paragraph.twig", "@molecules/01-Card/01-card-text-content.twig", 19)->display(twig_array_merge($context, ["paragraph_content" => twig_get_attribute($this->env, $this->source,         // line 20
($context["card"] ?? null), "description", [], "any", false, false, true, 20), "class" => "field--name-field-summary"]));
        // line 23
        echo "
  <div class=\"field--name-field-link\">
    ";
        // line 25
        $this->loadTemplate("@atoms/12-links/00-links.twig", "@molecules/01-Card/01-card-text-content.twig", 25)->display(twig_array_merge($context, ["text" => twig_get_attribute($this->env, $this->source,         // line 26
($context["card"] ?? null), "link_text", [], "any", false, false, true, 26), "url" => twig_get_attribute($this->env, $this->source,         // line 27
($context["card"] ?? null), "link_url", [], "any", false, false, true, 27)]));
        // line 29
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@molecules/01-Card/01-card-text-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  69 => 27,  68 => 26,  67 => 25,  63 => 23,  61 => 20,  60 => 19,  57 => 18,  55 => 15,  54 => 14,  51 => 13,  49 => 10,  48 => 8,  45 => 7,  43 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/01-Card/01-card-text-content.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/01-molecules/01-Card/01-card-text-content.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 2);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
