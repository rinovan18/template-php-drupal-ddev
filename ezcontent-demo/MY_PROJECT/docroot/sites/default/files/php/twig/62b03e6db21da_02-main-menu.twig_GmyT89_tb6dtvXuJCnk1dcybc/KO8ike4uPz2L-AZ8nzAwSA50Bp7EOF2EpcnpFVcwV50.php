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

/* @molecules/00-Menus/02-main-menu.twig */
class __TwigTemplate_3645cc7aa2a16b0e24a5801ff549f02e08b6c6ba6b62fe56468d9f2ea92ec536 extends \Twig\Template
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
        $context["menuData"] = ($context["menu"] ?? null);
        // line 2
        $this->loadTemplate("@molecules/00-Menus/01-menu-list.twig", "@molecules/00-Menus/02-main-menu.twig", 2)->display(twig_array_merge($context, ($context["menuData"] ?? null)));
    }

    public function getTemplateName()
    {
        return "@molecules/00-Menus/02-main-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/00-Menus/02-main-menu.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/01-molecules/00-Menus/02-main-menu.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "include" => 2);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
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
