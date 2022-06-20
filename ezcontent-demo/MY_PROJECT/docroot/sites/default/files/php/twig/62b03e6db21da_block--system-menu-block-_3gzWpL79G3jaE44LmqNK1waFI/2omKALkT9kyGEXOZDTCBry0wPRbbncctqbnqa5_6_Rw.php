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

/* themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--privacy-policy.html.twig */
class __TwigTemplate_9d61950c33a9481ce7ff17264e52fc4bd8cfb0a68ab567f0b9c2273143dcb8fd extends \Twig\Template
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
        $context["menuArray"] = [];
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 61
            echo "\t";
            $context["menuArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menuArray"] ?? null), 61, $this->source), [0 => ["url" => twig_get_attribute($this->env, $this->source,             // line 62
$context["item"], "url", [], "any", false, false, true, 62), "text" => twig_get_attribute($this->env, $this->source,             // line 63
$context["item"], "title", [], "any", false, false, true, 63), "attributes" => twig_get_attribute($this->env, $this->source,             // line 64
$context["item"], "attributes", [], "any", false, false, true, 64), "class" => "nav-link"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
";
        // line 70
        $context["data"] = ["menu" => ["footerBottom" =>         // line 72
($context["menuArray"] ?? null)]];
        // line 75
        echo "
<section";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 76), 76, $this->source), "html", null, true);
        echo ">
  ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "</section>
";
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "    ";
        $this->loadTemplate("@molecules/13-FooterBottom/02-footer-bottom-menu.twig", "themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--privacy-policy.html.twig", 78)->display(twig_array_merge($context, ($context["data"] ?? null)));
        // line 79
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--privacy-policy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 79,  89 => 78,  85 => 77,  80 => 80,  78 => 77,  74 => 76,  71 => 75,  69 => 72,  68 => 70,  65 => 69,  59 => 64,  58 => 63,  57 => 62,  55 => 61,  51 => 60,  49 => 59,  46 => 58,  44 => 54,  43 => 53,  42 => 52,  41 => 51,  40 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--privacy-policy.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--privacy-policy.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "for" => 60, "block" => 77, "include" => 78);
        static $filters = array("clean_class" => 51, "merge" => 61, "escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'block', 'include'],
                ['clean_class', 'merge', 'escape'],
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
