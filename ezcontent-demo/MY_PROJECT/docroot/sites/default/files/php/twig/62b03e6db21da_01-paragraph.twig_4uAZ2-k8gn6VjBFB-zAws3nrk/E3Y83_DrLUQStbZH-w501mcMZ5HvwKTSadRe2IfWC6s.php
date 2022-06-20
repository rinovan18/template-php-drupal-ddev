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

/* @atoms/02-text/01-paragraph.twig */
class __TwigTemplate_a54b43e77ece9a52a9a62fb7266148b6cd8bd1a5bb36cab1410ef57e2bbbafa8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph_content' => [$this, 'block_paragraph_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        if (($context["paragraph_content"] ?? null)) {
            // line 15
            $context["paragraph_base_class"] = ((array_key_exists("paragraph_base_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["paragraph_base_class"] ?? null), 15, $this->source), "paragraph")) : ("paragraph"));
            // line 16
            echo "
<div ";
            // line 17
            if (($context["class"] ?? null)) {
                echo " class= \"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 17, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">
  ";
            // line 18
            $this->displayBlock('paragraph_content', $context, $blocks);
            // line 21
            echo "</div>

";
        } else {
            // line 24
            echo "<p ";
            if (($context["class"] ?? null)) {
                echo " class= \"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 24, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">A paragraph (from the Greek paragraphos, \"to write beside\" or \"written beside\") is a self-contained unit of a discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences. Though not required by the syntax of any language, paragraphs are usually an expected part of formal writing, used to organize longer prose.</p>
";
        }
    }

    // line 18
    public function block_paragraph_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["paragraph_content"] ?? null), 19, $this->source));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "@atoms/02-text/01-paragraph.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  74 => 18,  62 => 24,  57 => 21,  55 => 18,  47 => 17,  44 => 16,  42 => 15,  40 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/02-text/01-paragraph.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/00-atoms/02-text/01-paragraph.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "set" => 15, "block" => 18);
        static $filters = array("default" => 15, "escape" => 17, "raw" => 19);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'block'],
                ['default', 'escape', 'raw'],
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
