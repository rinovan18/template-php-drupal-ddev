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

/* @molecules/01-Card/02-card.twig */
class __TwigTemplate_6352c3ff16a59b0c99d40f3bf3fd982a2ad18293568741f1f324b93f374c1f91 extends \Twig\Template
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
        // line 1
        echo "<div class=\"card-media\">
  <div class=\"layout layout--twocol-section layout--twocol-section--50-50\">
    <div class=\"layout--region layout--region--first\">
      ";
        // line 4
        if (((twig_get_attribute($this->env, $this->source, ($context["card"] ?? null), "select_layout", [], "any", false, false, true, 4) == "card_left_media") || (twig_get_attribute($this->env, $this->source, ($context["card"] ?? null), "select_layout", [], "any", false, false, true, 4) == null))) {
            // line 5
            echo "        ";
            $this->loadTemplate("@molecules/01-Card/00-card-image.twig", "@molecules/01-Card/02-card.twig", 5)->display($context);
            // line 6
            echo "      ";
        } else {
            // line 7
            echo "        ";
            $this->loadTemplate("@molecules/01-Card/01-card-text-content.twig", "@molecules/01-Card/02-card.twig", 7)->display($context);
            // line 8
            echo "      ";
        }
        // line 9
        echo "    </div>

    <div class=\"layout--region layout--region--second\">
      ";
        // line 12
        if (((twig_get_attribute($this->env, $this->source, ($context["card"] ?? null), "select_layout", [], "any", false, false, true, 12) == "card_left_media") || (twig_get_attribute($this->env, $this->source, ($context["card"] ?? null), "select_layout", [], "any", false, false, true, 12) == null))) {
            // line 13
            echo "        ";
            $this->loadTemplate("@molecules/01-Card/01-card-text-content.twig", "@molecules/01-Card/02-card.twig", 13)->display($context);
            // line 14
            echo "      ";
        } else {
            // line 15
            echo "        ";
            $this->loadTemplate("@molecules/01-Card/00-card-image.twig", "@molecules/01-Card/02-card.twig", 15)->display($context);
            // line 16
            echo "      ";
        }
        // line 17
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@molecules/01-Card/02-card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/01-Card/02-card.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/01-molecules/01-Card/02-card.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "include" => 5);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                [],
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
