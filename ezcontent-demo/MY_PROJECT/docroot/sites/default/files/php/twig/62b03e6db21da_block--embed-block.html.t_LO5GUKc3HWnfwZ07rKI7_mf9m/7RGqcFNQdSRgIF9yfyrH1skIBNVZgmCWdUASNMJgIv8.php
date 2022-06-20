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

/* themes/contrib/ezcontent_theme/templates/block/block--embed-block.html.twig */
class __TwigTemplate_c59d6749ecc4fe2102f9ea9b9e8a8b486b35f9dca64c4daba9aa9979a6c4c240 extends \Twig\Template
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
            $context["block_content"] = (($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#block_content"] ?? null) : null);
        } else {
            // line 62
            echo "  ";
            $context["block_content"] = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#block_content"] ?? null) : null);
            // line 63
            echo "  ";
            $context["actions"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "actions", [], "any", false, false, true, 63);
        }
        // line 65
        echo "
";
        // line 66
        $context["data"] = ["embed" => ["src" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["block_content"] ?? null), "field_script", [], "any", false, false, true, 68), 0, [], "any", false, false, true, 68), "value", [], "any", false, false, true, 68)]];
        // line 71
        echo "
<section";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 72), 72, $this->source), "html", null, true);
        echo ">
  ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 73, $this->source), "html", null, true);
        echo "
  ";
        // line 74
        if (($context["label"] ?? null)) {
            // line 75
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 75), 75, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 75, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 77
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 77, $this->source), "html", null, true);
        echo "

  ";
        // line 79
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "</section>
";
    }

    // line 79
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "    ";
        if (($context["actions"] ?? null)) {
            // line 81
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actions"] ?? null), 81, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 83
        echo "
    ";
        // line 84
        $this->loadTemplate("@molecules/11-Embed/00-embed.twig", "themes/contrib/ezcontent_theme/templates/block/block--embed-block.html.twig", 84)->display(twig_array_merge($context, ($context["data"] ?? null)));
        // line 85
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/ezcontent_theme/templates/block/block--embed-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 85,  118 => 84,  115 => 83,  109 => 81,  106 => 80,  102 => 79,  97 => 86,  95 => 79,  89 => 77,  81 => 75,  79 => 74,  75 => 73,  71 => 72,  68 => 71,  66 => 68,  65 => 66,  62 => 65,  58 => 63,  55 => 62,  51 => 60,  49 => 59,  46 => 58,  44 => 54,  43 => 53,  42 => 52,  41 => 51,  40 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ezcontent_theme/templates/block/block--embed-block.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/block/block--embed-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 59, "block" => 79, "include" => 84);
        static $filters = array("clean_class" => 51, "escape" => 72);
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
