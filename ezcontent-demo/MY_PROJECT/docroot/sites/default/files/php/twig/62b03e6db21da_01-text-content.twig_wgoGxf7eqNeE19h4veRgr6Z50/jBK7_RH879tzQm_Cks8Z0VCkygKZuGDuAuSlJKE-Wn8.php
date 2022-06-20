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

/* @molecules/05-HeroComponent/01-text-content.twig */
class __TwigTemplate_6585c8dea9fee6f8b2ea2a75d8b7448ac48def59a9ac16bcb0583838fce0561f extends \Twig\Template
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
        echo "<div class=\"hero-banner-title field--name-field-title mr-0 text-black pt-0 pb-0 pr-2 pl-2 w-100\">
  ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "title", [], "any", false, false, true, 2)) {
            // line 3
            echo "    ";
            $this->loadTemplate("@atoms/02-text/00-headings.twig", "@molecules/05-HeroComponent/01-text-content.twig", 3)->display(twig_array_merge($context, ["heading_level" => 1, "heading" => twig_get_attribute($this->env, $this->source,             // line 5
($context["assets"] ?? null), "title", [], "any", false, false, true, 5)]));
            // line 7
            echo "  ";
        } else {
            // line 8
            echo "    ";
            $this->loadTemplate("@atoms/02-text/00-headings.twig", "@molecules/05-HeroComponent/01-text-content.twig", 8)->display(twig_array_merge($context, ["heading_level" => 1, "heading" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 10
($context["heroComponent"] ?? null), "heroAsset", [], "any", false, false, true, 10), "title", [], "any", false, false, true, 10)]));
            // line 12
            echo "  ";
        }
        // line 13
        echo "</div>

<div class=\"hero-banner-short-title pt-1 pl-2 pr-2 pb-0\">
  ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "field_short_title", [], "any", false, false, true, 16)) {
            // line 17
            echo "    ";
            $this->loadTemplate("@atoms/02-text/00-headings.twig", "@molecules/05-HeroComponent/01-text-content.twig", 17)->display(twig_array_merge($context, ["heading_level" => 4, "heading" => twig_get_attribute($this->env, $this->source,             // line 19
($context["assets"] ?? null), "field_short_title", [], "any", false, false, true, 19)]));
            // line 21
            echo "  ";
        } else {
            // line 22
            echo "    ";
            $this->loadTemplate("@atoms/02-text/00-headings.twig", "@molecules/05-HeroComponent/01-text-content.twig", 22)->display(twig_array_merge($context, ["heading_level" => 4, "heading" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
($context["heroComponent"] ?? null), "heroAsset", [], "any", false, false, true, 24), "field_short_title", [], "any", false, false, true, 24)]));
            // line 26
            echo "  ";
        }
        // line 27
        echo "</div>

";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "field_subhead", [], "any", false, false, true, 29)) {
            // line 30
            echo "  ";
            $this->loadTemplate("@atoms/02-text/08-field.twig", "@molecules/05-HeroComponent/01-text-content.twig", 30)->display(twig_array_merge($context, ["field_content" => twig_get_attribute($this->env, $this->source,             // line 31
($context["assets"] ?? null), "field_subhead", [], "any", false, false, true, 31), "class" => "hero-banner-subhead field--name-field-subhead pt-1 pl-2 pb-0"]));
        } else {
            // line 35
            echo "  ";
            $this->loadTemplate("@atoms/02-text/08-field.twig", "@molecules/05-HeroComponent/01-text-content.twig", 35)->display(twig_array_merge($context, ["field_content" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
($context["heroComponent"] ?? null), "heroAsset", [], "any", false, false, true, 36), "field_subhead", [], "any", false, false, true, 36), "class" => "hero-banner-subhead field--name-field-subhead pt-1 pl-2 pb-0"]));
        }
        // line 40
        echo "
<div class=\"hero-banner-text-desc mt-1 mb-1 mr-0 pl-2 text-black\">
  ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "description", [], "any", false, false, true, 42)) {
            // line 43
            echo "    ";
            $this->loadTemplate("@atoms/02-text/01-paragraph.twig", "@molecules/05-HeroComponent/01-text-content.twig", 43)->display(twig_array_merge($context, ["paragraph_content" => twig_get_attribute($this->env, $this->source,             // line 44
($context["assets"] ?? null), "description", [], "any", false, false, true, 44)]));
            // line 46
            echo "  ";
        } else {
            // line 47
            echo "    ";
            $this->loadTemplate("@atoms/02-text/01-paragraph.twig", "@molecules/05-HeroComponent/01-text-content.twig", 47)->display(twig_array_merge($context, ["paragraph_content" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 48
($context["heroComponent"] ?? null), "heroAsset", [], "any", false, false, true, 48), "description", [], "any", false, false, true, 48)]));
            // line 50
            echo "  ";
        }
        // line 51
        echo "</div>

<div class=\"hero-banner-btn-wrapper\">
  ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "url", [], "any", false, false, true, 54)) {
            // line 55
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assets"] ?? null), "url", [], "any", false, false, true, 55));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 56
                echo "      ";
                $this->loadTemplate("@atoms/12-links/00-links.twig", "@molecules/05-HeroComponent/01-text-content.twig", 56)->display(twig_array_merge($context, ["key" => twig_get_attribute($this->env, $this->source,                 // line 57
$context["loop"], "index", [], "any", false, false, true, 57), "url" => twig_get_attribute($this->env, $this->source,                 // line 58
$context["value"], "link", [], "any", false, false, true, 58), "text" => twig_get_attribute($this->env, $this->source,                 // line 59
$context["value"], "title", [], "any", false, false, true, 59), "class" => "rounded-0"]));
                // line 62
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "  ";
        } else {
            // line 64
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["heroComponent"] ?? null), "heroAsset", [], "any", false, false, true, 64), "url", [], "any", false, false, true, 64));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 65
                echo "      ";
                $this->loadTemplate("@atoms/12-links/00-links.twig", "@molecules/05-HeroComponent/01-text-content.twig", 65)->display(twig_array_merge($context, ["key" => twig_get_attribute($this->env, $this->source,                 // line 66
$context["loop"], "index", [], "any", false, false, true, 66), "url" => twig_get_attribute($this->env, $this->source,                 // line 67
$context["value"], "link", [], "any", false, false, true, 67), "text" => twig_get_attribute($this->env, $this->source,                 // line 68
$context["value"], "title", [], "any", false, false, true, 68), "class" => "rounded-0"]));
                // line 71
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "  ";
        }
        // line 73
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@molecules/05-HeroComponent/01-text-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 73,  201 => 72,  187 => 71,  185 => 68,  184 => 67,  183 => 66,  181 => 65,  163 => 64,  160 => 63,  146 => 62,  144 => 59,  143 => 58,  142 => 57,  140 => 56,  122 => 55,  120 => 54,  115 => 51,  112 => 50,  110 => 48,  108 => 47,  105 => 46,  103 => 44,  101 => 43,  99 => 42,  95 => 40,  92 => 36,  90 => 35,  87 => 31,  85 => 30,  83 => 29,  79 => 27,  76 => 26,  74 => 24,  72 => 22,  69 => 21,  67 => 19,  65 => 17,  63 => 16,  58 => 13,  55 => 12,  53 => 10,  51 => 8,  48 => 7,  46 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/05-HeroComponent/01-text-content.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/01-molecules/05-HeroComponent/01-text-content.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "include" => 3, "for" => 55);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include', 'for'],
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
