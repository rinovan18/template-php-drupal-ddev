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

/* @ezcontent_theme/includes/header.html.twig */
class __TwigTemplate_aee63399e2a8369c140c3d6c10be01713b6bb8cb470493958c6bbfd09a4f5a7c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
  ";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 40
        echo "</header>
";
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 3) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 3)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 3))) {
            // line 4
            echo "      <nav class=\"navbar fixed-top navbar-light navbar-expand-lg ezcontent-header\">
      <div class=\"container\">
          ";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "
          ";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "
          ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 8)) {
                // line 9
                echo "            <div class=\"form-inline navbar-form float-right\">
              ";
                // line 10
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 13
            echo "      ";
            if (($context["container_navbar"] ?? null)) {
                // line 14
                echo "      </div>
      ";
            }
            // line 16
            echo "      </nav>
    ";
        }
        // line 18
        echo "    <nav class=\"navbar fixed-top navbar-light navbar-expand-lg ezcontent-header\">
      <div class=\"container\">
        ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
        ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 21) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 21))) {
            // line 22
            echo "          <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
          <div class=\"navbar-collapse collapse\" id=\"CollapsingNavbar\">
            ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "
            ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 25)) {
                // line 26
                echo "              <div class=\"form-inline navbar-form float-right\">
                ";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 30
            echo "        </div>
        ";
        }
        // line 32
        echo "        ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 33
            echo "          <button class=\"navbar-toggler navbar-toggler-left\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
        ";
        }
        // line 35
        echo "      ";
        if (($context["container_navbar"] ?? null)) {
            // line 36
            echo "      </div>
      ";
        }
        // line 38
        echo "    </nav>
  ";
    }

    public function getTemplateName()
    {
        return "@ezcontent_theme/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  136 => 36,  133 => 35,  129 => 33,  126 => 32,  122 => 30,  116 => 27,  113 => 26,  111 => 25,  107 => 24,  103 => 22,  101 => 21,  97 => 20,  93 => 18,  89 => 16,  85 => 14,  82 => 13,  76 => 10,  73 => 9,  71 => 8,  67 => 7,  63 => 6,  59 => 4,  56 => 3,  52 => 2,  47 => 40,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ezcontent_theme/includes/header.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/includes/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 2, "if" => 3);
        static $filters = array("t" => 1, "escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
