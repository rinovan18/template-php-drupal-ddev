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

/* themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_23163cb73d7c3366d07bb94aad2aae0fca7b9c6982025f221a661b78daeeea29 extends \Twig\Template
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
        // line 34
        echo "
";
        // line 35
        $context["menuArray"] = [];
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 37
            echo "  ";
            $context["menuArray"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["menuArray"] ?? null), 37, $this->source), [0 => ["url" => twig_get_attribute($this->env, $this->source,             // line 38
$context["item"], "url", [], "any", false, false, true, 38), "text" => twig_get_attribute($this->env, $this->source,             // line 39
$context["item"], "title", [], "any", false, false, true, 39), "attributes" => twig_get_attribute($this->env, $this->source,             // line 40
$context["item"], "attributes", [], "any", false, false, true, 40), "class" => "nav-link"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        $context["data"] = ["menu" => ["menuitems" =>         // line 47
($context["menuArray"] ?? null)]];
        // line 50
        echo "
";
        // line 51
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 51), 51, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 52
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 52, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 52, $this->source), "role", "aria-labelledby"), "html", null, true);
        echo ">
  ";
        // line 54
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 54)) {
            // line 55
            echo "    ";
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 55);
            // line 56
            echo "  ";
        }
        // line 57
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 57, $this->source), "html", null, true);
        echo "
  <h2";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["heading_id"] ?? null)], "method", false, false, true, 58), 58, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "</h2>
  ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 59, $this->source), "html", null, true);
        echo "

  ";
        // line 62
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "</nav>
";
    }

    // line 62
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "    ";
        $this->loadTemplate("@molecules/00-Menus/02-main-menu.twig", "themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--main.html.twig", 63)->display(twig_array_merge($context, ($context["data"] ?? null)));
        // line 64
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 64,  111 => 63,  107 => 62,  102 => 65,  99 => 62,  94 => 59,  88 => 58,  83 => 57,  80 => 56,  77 => 55,  74 => 54,  67 => 52,  65 => 51,  62 => 50,  60 => 47,  59 => 45,  53 => 40,  52 => 39,  51 => 38,  49 => 37,  45 => 36,  43 => 35,  40 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--main.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/block/block--system-menu-block--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "for" => 36, "if" => 54, "block" => 62, "include" => 63);
        static $filters = array("merge" => 37, "clean_id" => 51, "escape" => 52, "without" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'block', 'include'],
                ['merge', 'clean_id', 'escape', 'without'],
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
