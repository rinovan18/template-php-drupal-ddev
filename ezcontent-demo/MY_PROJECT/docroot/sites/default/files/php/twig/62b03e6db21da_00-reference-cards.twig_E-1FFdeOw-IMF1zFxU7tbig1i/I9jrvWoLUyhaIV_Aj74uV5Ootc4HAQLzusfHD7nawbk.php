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

/* @molecules/06-ReferenceCards/00-reference-cards.twig */
class __TwigTemplate_c422711c3ac6e4d30334f4537a57b91cd10c284eb53f6f7c82b89cbe90cffd5f extends \Twig\Template
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
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 1, $this->source), "html", null, true);
        echo "
";
        // line 2
        if (($context["label"] ?? null)) {
            // line 3
            echo "  <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 3), 3, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 3, $this->source), "html", null, true);
            echo "</h2>
";
        }
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 5, $this->source), "html", null, true);
        echo "

";
        // line 7
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  <div class=\"text-left referenced-card\" aria-label=\"reference cards\">
    <div class=\"field--name-field-article\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["referenceCard"] ?? null), "data", [], "any", false, false, true, 10));
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
            // line 11
            echo "        <div class=\"field__item\" key=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo ">
          <div class=\"field--type-image\">
            ";
            // line 13
            $this->loadTemplate("@atoms/04-images/01-image.twig", "@molecules/06-ReferenceCards/00-reference-cards.twig", 13)->display(twig_array_merge($context, ["src" => twig_get_attribute($this->env, $this->source,             // line 14
$context["value"], "image", [], "any", false, false, true, 14), "alt" => twig_get_attribute($this->env, $this->source,             // line 15
$context["value"], "alt", [], "any", false, false, true, 15)]));
            // line 17
            echo "          </div>

          ";
            // line 19
            $this->loadTemplate("@atoms/02-text/08-field.twig", "@molecules/06-ReferenceCards/00-reference-cards.twig", 19)->display(twig_array_merge($context, ["field_content" => twig_get_attribute($this->env, $this->source,             // line 20
$context["value"], "date", [], "any", false, false, true, 20), "class" => "referenced-date"]));
            // line 23
            echo "
          <div class=\"block-field-blocknodearticletitle\" key=";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">
            ";
            // line 25
            $this->loadTemplate("@atoms/12-links/00-links.twig", "@molecules/06-ReferenceCards/00-reference-cards.twig", 25)->display(twig_array_merge($context, ["url" => twig_get_attribute($this->env, $this->source,             // line 26
$context["value"], "path", [], "any", false, false, true, 26), "text" => twig_get_attribute($this->env, $this->source,             // line 27
$context["value"], "title", [], "any", false, false, true, 27)]));
            // line 29
            echo "          </div>

          ";
            // line 31
            $this->loadTemplate("@atoms/02-text/01-paragraph.twig", "@molecules/06-ReferenceCards/00-reference-cards.twig", 31)->display(twig_array_merge($context, ["paragraph_content" => twig_get_attribute($this->env, $this->source,             // line 32
$context["value"], "summary", [], "any", false, false, true, 32), "class" => "referenced-summary"]));
            // line 35
            echo "        </div>
      ";
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
        // line 37
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@molecules/06-ReferenceCards/00-reference-cards.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  122 => 35,  120 => 32,  119 => 31,  115 => 29,  113 => 27,  112 => 26,  111 => 25,  107 => 24,  104 => 23,  102 => 20,  101 => 19,  97 => 17,  95 => 15,  94 => 14,  93 => 13,  87 => 11,  70 => 10,  66 => 8,  59 => 7,  54 => 5,  46 => 3,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/06-ReferenceCards/00-reference-cards.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/01-molecules/06-ReferenceCards/00-reference-cards.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "block" => 7, "for" => 10, "include" => 13);
        static $filters = array("escape" => 1);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'for', 'include'],
                ['escape'],
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
