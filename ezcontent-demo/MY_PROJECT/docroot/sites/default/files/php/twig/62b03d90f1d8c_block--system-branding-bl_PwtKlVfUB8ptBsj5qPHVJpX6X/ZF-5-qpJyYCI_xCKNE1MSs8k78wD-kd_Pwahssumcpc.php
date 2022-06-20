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

/* themes/contrib/ezcontent_theme/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_b78d026ce7edfaeaae39a382cd963e423e0b4ee7eea69536bd2fe874601df1bf extends \Twig\Template
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
        $context["data"] = ["logo" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 60
($context["content"] ?? null), "site_logo", [], "any", false, false, true, 60)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#uri"] ?? null) : null), "alt" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 61
($context["content"] ?? null), "site_logo", [], "any", false, false, true, 61)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#alt"] ?? null) : null)];
        // line 64
        echo "
<section";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        echo ">
  ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 66, $this->source), "html", null, true);
        echo "
  ";
        // line 67
        if (($context["label"] ?? null)) {
            // line 68
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 68, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 70
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 70, $this->source), "html", null, true);
        echo "

  ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "</section>
";
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    ";
        $this->loadTemplate("@atoms/04-images/00-logo.twig", "themes/contrib/ezcontent_theme/templates/block/block--system-branding-block.html.twig", 73)->display(twig_array_merge($context, ($context["data"] ?? null)));
        // line 74
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/ezcontent_theme/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 74,  91 => 73,  87 => 72,  82 => 75,  80 => 72,  74 => 70,  66 => 68,  64 => 67,  60 => 66,  56 => 65,  53 => 64,  51 => 61,  50 => 60,  49 => 59,  46 => 58,  44 => 54,  43 => 53,  42 => 52,  41 => 51,  40 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ezcontent_theme/templates/block/block--system-branding-block.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 67, "block" => 72, "include" => 73);
        static $filters = array("clean_class" => 51, "escape" => 65);
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
