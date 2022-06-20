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

/* themes/contrib/ezcontent_theme/templates/block/block--map-block.html.twig */
class __TwigTemplate_3e69cc8d397b3a0f44085287e3adc38b203a71217334b8238858a20a51b9a19c extends \Twig\Template
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
        // line 60
        if ((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null)) {
            // line 61
            echo "  ";
            $context["block_content"] = (($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#block_content"] ?? null) : null);
        } else {
            // line 63
            echo "  ";
            $context["block_content"] = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 63)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#block_content"] ?? null) : null);
            // line 64
            echo "  ";
            $context["actions"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "actions", [], "any", false, false, true, 64);
        }
        // line 66
        echo "
";
        // line 67
        $context["data"] = ["map" => ["subTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 69
($context["block_content"] ?? null), "field_short_title", [], "any", false, false, true, 69), "value", [], "any", false, false, true, 69), "url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
($context["block_content"] ?? null), "field_map", [], "any", false, false, true, 70), 0, [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70), "body" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["block_content"] ?? null), "body", [], "any", false, false, true, 71), "processed", [], "any", false, false, true, 71), "links" => ["url" => twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["block_content"] ?? null), "field_link", [], "any", false, false, true, 73), "value", [], "any", false, false, true, 73)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "uri", [], "any", false, false, true, 73), "title" => twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
($context["block_content"] ?? null), "field_link", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "title", [], "any", false, false, true, 74)]]];
        // line 78
        echo "
<section";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        echo ">
  ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 80, $this->source), "html", null, true);
        echo "
  ";
        // line 81
        if (($context["label"] ?? null)) {
            // line 82
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 82), 82, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 82, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 84
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 84, $this->source), "html", null, true);
        echo "

  ";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "</section>
";
    }

    // line 86
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    ";
        if (($context["actions"] ?? null)) {
            // line 88
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actions"] ?? null), 88, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        $this->loadTemplate("@molecules/03-MapComponent/00-map-component.twig", "themes/contrib/ezcontent_theme/templates/block/block--map-block.html.twig", 91)->display(twig_array_merge($context, ($context["data"] ?? null)));
        // line 92
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/ezcontent_theme/templates/block/block--map-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 92,  123 => 91,  120 => 90,  114 => 88,  111 => 87,  107 => 86,  102 => 93,  100 => 86,  94 => 84,  86 => 82,  84 => 81,  80 => 80,  76 => 79,  73 => 78,  71 => 74,  70 => 73,  69 => 71,  68 => 70,  67 => 69,  66 => 67,  63 => 66,  59 => 64,  56 => 63,  52 => 61,  50 => 60,  46 => 58,  44 => 54,  43 => 53,  42 => 52,  41 => 51,  40 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ezcontent_theme/templates/block/block--map-block.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/block/block--map-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 60, "block" => 86, "include" => 91);
        static $filters = array("clean_class" => 51, "escape" => 79);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['clean_class', 'escape'],
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
