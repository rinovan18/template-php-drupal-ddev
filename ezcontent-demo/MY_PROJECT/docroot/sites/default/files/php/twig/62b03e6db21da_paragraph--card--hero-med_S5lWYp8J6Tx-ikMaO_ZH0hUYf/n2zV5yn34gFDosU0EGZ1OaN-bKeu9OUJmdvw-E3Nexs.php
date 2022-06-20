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

/* themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card--hero-media.html.twig */
class __TwigTemplate_8153ae0ae872d8d888d4828bb98a02d416cd7dad92ce131f99fa28014750dec5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 44
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 44), 44, $this->source))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 45, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 46
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 46)) ? ("paragraph--unpublished") : ("")), 4 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 47
($context["paragraph"] ?? null), "layout_selection", [], "any", false, false, true, 47), "target_id", [], "any", false, false, true, 47)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "layout_selection", [], "any", false, false, true, 47), "target_id", [], "any", false, false, true, 47)) : (""))];
        // line 50
        echo "
";
        // line 52
        $context["img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media", [], "any", false, false, true, 52), 0, [], "any", false, false, true, 52)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#media"] ?? null) : null), "field_media_image", [], "any", false, false, true, 52), 0, [], "any", false, false, true, 52), "entity", [], "any", false, false, true, 52), "uri", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 52, $this->source));
        // line 54
        echo "

";
        // line 56
        $context["data"] = ["heroComponent" => ["heroAsset" => ["image" =>         // line 59
($context["img_url"] ?? null), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["paragraph"] ?? null), "field_title", [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), "description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["paragraph"] ?? null), "field_summary", [], "any", false, false, true, 61), "value", [], "any", false, false, true, 61), "field_subhead" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["paragraph"] ?? null), "field_subhead", [], "any", false, false, true, 62), "value", [], "any", false, false, true, 62), "bgColor" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["content"] ?? null), "group_hero_media_content", [], "any", false, false, true, 63), "field_text_background_color", [], "any", false, false, true, 63), 0, [], "any", false, false, true, 63)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#markup"] ?? null) : null), "textPosition" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["paragraph"] ?? null), "field_text_position", [], "any", false, false, true, 64), 0, [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64), "field_short_title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["paragraph"] ?? null), "field_short_title", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65), "url" => [0 => ["link" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["paragraph"] ?? null), "field_link", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68), "url", [], "any", false, false, true, 68), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 69
($context["paragraph"] ?? null), "field_link", [], "any", false, false, true, 69), 0, [], "any", false, false, true, 69), "title", [], "any", false, false, true, 69)]]]]];
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
        echo ">
    ";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "contextual_links", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "
    ";
        // line 79
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "  </div>
";
    }

    // line 79
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "      ";
        $this->loadTemplate("@molecules/05-HeroComponent/02-hero-component.twig", "themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card--hero-media.html.twig", 80)->display(twig_array_merge($context, ($context["data"] ?? null)));
        // line 81
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card--hero-media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 81,  97 => 80,  93 => 79,  88 => 82,  86 => 79,  82 => 78,  77 => 77,  70 => 76,  67 => 75,  65 => 69,  64 => 68,  63 => 65,  62 => 64,  61 => 63,  60 => 62,  59 => 61,  58 => 60,  57 => 59,  56 => 56,  52 => 54,  50 => 52,  47 => 50,  45 => 47,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card--hero-media.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card--hero-media.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 76, "include" => 80);
        static $filters = array("clean_class" => 44, "escape" => 77);
        static $functions = array("file_url" => 52);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include'],
                ['clean_class', 'escape'],
                ['file_url']
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
