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

/* themes/contrib/ezcontent_theme/templates/page/page--landing-page.html.twig */
class __TwigTemplate_8df43010e428d9ea7c9dca8f803c82f6419dea8c650b3de03efb7e117a231ad9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "
";
        // line 71
        $context["date"] = twig_date_format_filter($this->env, "now", "Y");
        // line 72
        $context["sitename"] = ($context["site_name"] ?? null);
        // line 73
        $context["text"] = t("Ltd. All rights reserved.");
        // line 74
        echo "
";
        // line 75
        $context["data1"] = ["copy_right" => ["date" =>         // line 77
($context["date"] ?? null), "sitename" =>         // line 78
($context["sitename"] ?? null), "text" =>         // line 79
($context["text"] ?? null)]];
        // line 82
        echo "
<div id=\"page-wrapper\">
  <div id=\"page\">
    ";
        // line 85
        $this->loadTemplate("@ezcontent_theme/includes/header.html.twig", "themes/contrib/ezcontent_theme/templates/page/page--landing-page.html.twig", 85)->display($context);
        // line 86
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 86)) {
            // line 87
            echo "      <div class=\"highlighted\">
        <aside class=\"section clearfix\" role=\"complementary\">
          ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 93
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 93)) {
            // line 94
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 101
            echo "    ";
        }
        // line 102
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper ezcontent-main-wrapper clearfix\">
      ";
        // line 103
        $this->displayBlock('content', $context, $blocks);
        // line 134
        echo "    </div>
    ";
        // line 135
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 135) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 135)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 135))) {
            // line 136
            echo "      <div class=\"featured-bottom\">
        <aside class=\"clearfix\" role=\"complementary\">
          ";
            // line 138
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            echo "
          ";
            // line 139
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            echo "
          ";
            // line 140
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 144
        echo "    <footer class=\"footer\">
      ";
        // line 145
        $this->displayBlock('footer', $context, $blocks);
        // line 167
        echo "    </footer>
  </div>
</div>
";
    }

    // line 94
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section clearfix\" role=\"complementary\">
            ";
        // line 97
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 103
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "        <div id=\"main\" class=\"container\">
          ";
        // line 105
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
            ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 107) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 107))) {
            // line 108
            echo "              <main class=\"main-content col-lg-9\" id=\"content\" role=\"main\">
            ";
        } else {
            // line 110
            echo "              <main class=\"main-content col\" id=\"content\" role=\"main\">
            ";
        }
        // line 112
        echo "                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 114
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117)) {
            // line 118
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sidebar_first_attributes"] ?? null), "removeClass", [0 => "col-md-3"], "method", false, false, true, 118), "addClass", [0 => "col-lg-3"], "method", false, false, true, 118), 118, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 120
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 124
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 124)) {
            // line 125
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sidebar_second_attributes"] ?? null), "removeClass", [0 => "col-md-3"], "method", false, false, true, 125), "addClass", [0 => "col-lg-3"], "method", false, false, true, 125), 125, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 127
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 131
        echo "          </div>
        </div>
      ";
    }

    // line 145
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "        <div class=\"container\">
          ";
        // line 147
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 147) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 147)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 147)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 147))) {
            // line 148
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "
              ";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "
              ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "
              ";
            // line 152
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 155
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 155)) {
            // line 156
            echo "            <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "region-footer"], "method", false, false, true, 156), 156, $this->source), "html", null, true);
            echo ">
              ";
            // line 157
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 157), 157, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 160
        echo "        </div>
        <div class=\"footer-copyright\">
          <section class=\"copyright\">
           ";
        // line 163
        $this->loadTemplate("@molecules/13-FooterBottom/03-copyright.twig", "themes/contrib/ezcontent_theme/templates/page/page--landing-page.html.twig", 163)->display(twig_array_merge($context, ($context["data1"] ?? null)));
        // line 164
        echo "          </section>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/ezcontent_theme/templates/page/page--landing-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 164,  264 => 163,  259 => 160,  253 => 157,  248 => 156,  245 => 155,  239 => 152,  235 => 151,  231 => 150,  227 => 149,  224 => 148,  222 => 147,  219 => 146,  215 => 145,  209 => 131,  202 => 127,  196 => 125,  193 => 124,  186 => 120,  180 => 118,  178 => 117,  172 => 114,  168 => 112,  164 => 110,  160 => 108,  158 => 107,  153 => 105,  150 => 104,  146 => 103,  138 => 97,  134 => 95,  130 => 94,  123 => 167,  121 => 145,  118 => 144,  111 => 140,  107 => 139,  103 => 138,  99 => 136,  97 => 135,  94 => 134,  92 => 103,  89 => 102,  86 => 101,  83 => 94,  80 => 93,  73 => 89,  69 => 87,  66 => 86,  64 => 85,  59 => 82,  57 => 79,  56 => 78,  55 => 77,  54 => 75,  51 => 74,  49 => 73,  47 => 72,  45 => 71,  42 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/ezcontent_theme/templates/page/page--landing-page.html.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/templates/page/page--landing-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "include" => 85, "if" => 86, "block" => 94);
        static $filters = array("date" => 71, "t" => 73, "escape" => 89);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if', 'block'],
                ['date', 't', 'escape'],
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
