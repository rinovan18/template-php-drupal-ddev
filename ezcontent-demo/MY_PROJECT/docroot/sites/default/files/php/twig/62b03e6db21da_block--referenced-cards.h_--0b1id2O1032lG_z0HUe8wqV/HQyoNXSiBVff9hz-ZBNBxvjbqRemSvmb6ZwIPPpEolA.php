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

/* themes/contrib/ezcontent_theme/templates/block/block--referenced-cards.html.twig */
class __TwigTemplate_0b9c6b813b91503ebcc6934212f9dd61dc75c9936592f40711daa5ed43ec54ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 51
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 51), 51, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["plugin_id"] ?? null), 52, $this->source))), 3 => ((        // line 53
($context["bundle"] ?? null)) ? (("block--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["bundle"] ?? null), 53, $this->source)))) : ("")), 4 => ((        // line 54
($context["view_mode"] ?? null)) ? (("block--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 54, $this->source)))) : ("")), 5 => "clearfix"];
        // line 58
        echo "
";
        // line 59
        if ((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null)) {
            // line 60
            echo "  ";
            $context["block_content"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#block_content"] ?? null) : null), "field_article", [], "any", false, false, true, 60);
        } else {
            // line 62
            echo "  ";
            $context["block_content"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#block_content"] ?? null) : null), "field_article", [], "any", false, false, true, 62);
            // line 63
            echo "  ";
            $context["actions"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "actions", [], "any", false, false, true, 63);
        }
        // line 65
        echo "
";
        // line 66
        $context["cardArray"] = [];
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["block_content"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 68
            echo "  ";
            $context["imgUrl"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["block_content"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["key"]] ?? null) : null), "entity", [], "any", false, false, true, 68), "field_thumbnail", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "field_media_image", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "uri", [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68), 68, $this->source));
            // line 69
            echo "  ";
            $context["pathUrl"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["block_content"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null), "entity", [], "any", false, false, true, 69), "nid", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69)]);
            // line 70
            echo "  ";
            $context["cardArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["cardArray"] ?? null), 70, $this->source), [0 => ["image" =>             // line 71
($context["imgUrl"] ?? null), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 =             // line 72
($context["block_content"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["key"]] ?? null) : null), "entity", [], "any", false, false, true, 72), "title", [], "method", false, false, true, 72), "date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 =             // line 73
($context["block_content"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["key"]] ?? null) : null), "entity", [], "any", false, false, true, 73), "created", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73), 73, $this->source), "F j, Y"), "path" =>             // line 74
($context["pathUrl"] ?? null), "summary" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 =             // line 75
($context["block_content"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["key"]] ?? null) : null), "entity", [], "any", false, false, true, 75), "field_summary", [], "any", false, false, true, 75), "value", [], "any", false, false, true, 75)]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        $context["data"] = ["referenceCard" => ["data" =>         // line 81
($context["cardArray"] ?? null)], "label" =>         // line 83
($context["label"] ?? null), "title_prefix" =>         // line 84
($context["title_prefix"] ?? null), "title_suffix" =>         // line 85
($context["title_suffix"] ?? null), "title_attributes" =>         // line 86
($context["title_attributes"] ?? null)];
        // line 88
        echo "
<section";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 89), 89, $this->source), "html", null, true);
        echo ">
  ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "</section>
";
    }

    // line 90
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "    ";
        if (($context["actions"] ?? null)) {
            // line 92
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actions"] ?? null), 92, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 94
        echo "
    ";
        // line 95
        $this->loadTemplate("@molecules/06-ReferenceCards/00-reference-cards.twig", "themes/contrib/ezcontent_theme/templates/block/block--referenced-cards.html.twig", 95)->display(twig_array_merge($context, ($context["data"] ?? null)));
        // line 96
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/ezcontent_theme/templates/block/block--referenced-cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 96,  126 => 95,  123 => 94,  117 => 92,  114 => 91,  110 => 90,  105 => 97,  103 => 90,  99 => 89,  96 => 88,  94 => 86,  93 => 85,  92 => 84,  91 => 83,  90 => 81,  89 => 79,  83 => 75,  82 => 74,  81 => 73,  80 => 72,  79 => 71,  77 => 70,  74 => 69,  71 => 68,  67 => 67,  65 => 66,  62 => 65,  58 => 63,  55 => 62,  51 => 60,  49 => 59,  46 => 58,  44 => 54,  43 => 53,  42 => 52,  41 => 51,  40 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ezcontent_theme/templates/block/block--referenced-cards.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/block/block--referenced-cards.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 59, "for" => 67, "block" => 90, "include" => 95);
        static $filters = array("clean_class" => 51, "merge" => 70, "date" => 73, "escape" => 89);
        static $functions = array("file_url" => 68, "path" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'block', 'include'],
                ['clean_class', 'merge', 'date', 'escape'],
                ['file_url', 'path']
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
