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

/* themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card.html.twig */
class __TwigTemplate_988ba3f65967a98403c7e930e722aecb5b2c07f966f2a9bfae72c9fd07d45df2 extends \Twig\Template
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
        $context["img_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_media", [], "any", false, false, true, 52), 0, [], "any", false, false, true, 52), "entity", [], "any", false, false, true, 52), "field_media_image", [], "any", false, false, true, 52), 0, [], "any", false, false, true, 52), "entity", [], "any", false, false, true, 52), "uri", [], "any", false, false, true, 52), "value", [], "any", false, false, true, 52), 52, $this->source));
        // line 54
        echo "
";
        // line 55
        $context["data"] = ["card" => ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["paragraph"] ?? null), "field_title", [], "any", false, false, true, 57), 0, [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), "short_title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["paragraph"] ?? null), "field_short_title", [], "any", false, false, true, 58), 0, [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58), "sub_head" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["paragraph"] ?? null), "field_subhead", [], "any", false, false, true, 59), 0, [], "any", false, false, true, 59), "value", [], "any", false, false, true, 59), "description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["paragraph"] ?? null), "field_summary", [], "any", false, false, true, 60), 0, [], "any", false, false, true, 60), "value", [], "any", false, false, true, 60), "link_text" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["paragraph"] ?? null), "field_link", [], "any", false, false, true, 61), 0, [], "any", false, false, true, 61), "title", [], "any", false, false, true, 61), "link_url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["paragraph"] ?? null), "field_link", [], "any", false, false, true, 62), 0, [], "any", false, false, true, 62), "url", [], "any", false, false, true, 62), "img_url" =>         // line 63
($context["img_url"] ?? null), "img_alt" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["paragraph"] ?? null), "field_media", [], "any", false, false, true, 64), 0, [], "any", false, false, true, 64), "entity", [], "any", false, false, true, 64), "field_media_image", [], "any", false, false, true, 64), "alt", [], "any", false, false, true, 64), "select_layout" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 65
($context["paragraph"] ?? null), "layout_selection", [], "any", false, false, true, 65), 0, [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65), "target_id", [], "any", false, false, true, 65)]];
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
        echo ">
    ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "contextual_links", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "
    ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "  </div>
";
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "      ";
        $this->loadTemplate("@organisms/01-cards/00-card-list.twig", "themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card.html.twig", 73)->display(twig_array_merge($context, ($context["data"] ?? null)));
        // line 74
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 74,  96 => 73,  92 => 72,  87 => 75,  85 => 72,  81 => 71,  76 => 70,  69 => 69,  66 => 68,  64 => 65,  63 => 64,  62 => 63,  61 => 62,  60 => 61,  59 => 60,  58 => 59,  57 => 58,  56 => 57,  55 => 55,  52 => 54,  50 => 52,  47 => 50,  45 => 47,  44 => 46,  43 => 45,  42 => 44,  41 => 42,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/paragraphs/paragraph--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "block" => 69, "include" => 73);
        static $filters = array("clean_class" => 44, "escape" => 70);
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
