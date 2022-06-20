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

/* @atoms/02-text/00-headings.twig */
class __TwigTemplate_eb3e02a662c44440ec8e5607f4a54141d43fa747ca037a2be49b32fb7607c70f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        if (($context["heading_level"] ?? null)) {
            // line 20
            echo "
";
            // line 21
            $context["heading_base_class"] = ((array_key_exists("heading_base_class", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["heading_base_class"] ?? null), 21, $this->source), ("h" . $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 21, $this->source)))) : (("h" . $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 21, $this->source))));
            // line 22
            echo "<h";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 22, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 22, $this->source), "html", null, true);
            echo " ";
            if (($context["class"] ?? null)) {
                echo " class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 22, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">
  ";
            // line 23
            if (($context["heading_url"] ?? null)) {
                // line 24
                echo "    ";
                $this->loadTemplate("@atoms/links/links.twig", "@atoms/02-text/00-headings.twig", 24)->display(twig_array_merge($context, ["link_content" =>                 // line 25
($context["heading"] ?? null), "link_url" =>                 // line 26
($context["heading_url"] ?? null), "link_attributes" =>                 // line 27
($context["heading_link_attributes"] ?? null), "link_base_class" =>                 // line 28
($context["heading_link_base_class"] ?? null), "link_modifiers" =>                 // line 29
($context["heading_link_modifiers"] ?? null), "link_blockname" => ((                // line 30
array_key_exists("heading_link_blockname", $context)) ? (_twig_default_filter(($context["heading_link_blockname"] ?? null), ($context["heading_base_class"] ?? null))) : (($context["heading_base_class"] ?? null)))]));
                // line 32
                echo "  ";
            } else {
                // line 33
                echo "    ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 33, $this->source), "html", null, true);
                echo "
  ";
            }
            // line 35
            echo "</h";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_level"] ?? null), 35, $this->source), "html", null, true);
            echo ">
";
        } else {
            // line 37
            echo "
<h1 ";
            // line 38
            if (($context["class"] ?? null)) {
                echo " class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 38, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">Heading Level 1</h1>
<h2 ";
            // line 39
            if (($context["class"] ?? null)) {
                echo " class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 39, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">Heading Level 2</h2>
<h3 ";
            // line 40
            if (($context["class"] ?? null)) {
                echo " class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 40, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">Heading Level 3</h3>
<h4 ";
            // line 41
            if (($context["class"] ?? null)) {
                echo " class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 41, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">Heading Level 4</h4>
<h5 ";
            // line 42
            if (($context["class"] ?? null)) {
                echo " class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 42, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">Heading Level 5</h5>
<h6 ";
            // line 43
            if (($context["class"] ?? null)) {
                echo " class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 43, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">Heading Level 6</h6>

";
        }
    }

    public function getTemplateName()
    {
        return "@atoms/02-text/00-headings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  120 => 42,  112 => 41,  104 => 40,  96 => 39,  88 => 38,  85 => 37,  79 => 35,  73 => 33,  70 => 32,  68 => 30,  67 => 29,  66 => 28,  65 => 27,  64 => 26,  63 => 25,  61 => 24,  59 => 23,  46 => 22,  44 => 21,  41 => 20,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/02-text/00-headings.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/00-atoms/02-text/00-headings.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 21, "include" => 24);
        static $filters = array("default" => 21, "escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['default', 'escape'],
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
