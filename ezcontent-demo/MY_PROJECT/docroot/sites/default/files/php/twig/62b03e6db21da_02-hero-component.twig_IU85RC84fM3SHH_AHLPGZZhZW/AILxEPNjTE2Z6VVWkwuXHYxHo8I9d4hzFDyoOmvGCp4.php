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

/* @molecules/05-HeroComponent/02-hero-component.twig */
class __TwigTemplate_7382350c26dc36b3d16f8cbd0686c5aa989478cbec84b621def38babcbc45b81 extends \Twig\Template
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
        echo "<section class=\"hero-media-component mt-4 pb-2 block--type-hero-media-block\" aria-label=\"hero\">
    <div class=\"hero-banner-wrapper paragraph--view-mode--hero-media position-relative w-100\">
      ";
        // line 3
        $this->loadTemplate("@molecules/05-HeroComponent/00-image-content.twig", "@molecules/05-HeroComponent/02-hero-component.twig", 3)->display($context);
        // line 4
        echo "      <div class=\"hero-banner-body hero-media-content w-100 position-absolute ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["heroComponent"] ?? null), "heroAsset", [], "any", false, false, true, 4), "textPosition", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\"
          style=\"background-color:";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["heroComponent"] ?? null), "heroAsset", [], "any", false, false, true, 5), "bgColor", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
        ";
        // line 6
        $this->loadTemplate("@molecules/05-HeroComponent/01-text-content.twig", "@molecules/05-HeroComponent/02-hero-component.twig", 6)->display($context);
        // line 7
        echo "      </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@molecules/05-HeroComponent/02-hero-component.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  54 => 6,  50 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/05-HeroComponent/02-hero-component.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/01-molecules/05-HeroComponent/02-hero-component.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3);
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
