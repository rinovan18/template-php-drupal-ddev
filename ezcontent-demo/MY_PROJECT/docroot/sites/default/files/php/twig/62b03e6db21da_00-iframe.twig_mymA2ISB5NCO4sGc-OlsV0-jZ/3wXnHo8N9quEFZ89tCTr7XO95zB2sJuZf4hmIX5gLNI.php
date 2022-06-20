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

/* @atoms/14-iframe/00-iframe.twig */
class __TwigTemplate_0cee66576a4f380517f8339a4917887fd813d1ef0841786a49fc064ef64f0234 extends \Twig\Template
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
        if (($context["src"] ?? null)) {
            // line 2
            echo "  <iframe
\t";
            // line 3
            if (($context["class"] ?? null)) {
                echo " class= \"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class"] ?? null), 3, $this->source), "html", null, true);
                echo "\" ";
            }
            // line 4
            echo "\t";
            if (($context["src"] ?? null)) {
                echo " src=";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["src"] ?? null), 4, $this->source), "html", null, true);
                echo " ";
            }
            // line 5
            echo "\t";
            if (($context["frameBorder"] ?? null)) {
                echo " frameBorder=";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["frameBorder"] ?? null), 5, $this->source), "html", null, true);
                echo " ";
            }
            // line 6
            echo "\t";
            if (($context["height"] ?? null)) {
                echo " height=";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 6, $this->source), "html", null, true);
                echo " ";
            }
            // line 7
            echo "\t";
            if (($context["width"] ?? null)) {
                echo " width=";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 7, $this->source), "html", null, true);
                echo " ";
            }
            // line 8
            echo "\t";
            if (($context["allow"] ?? null)) {
                echo "  allow=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["allow"] ?? null), 8, $this->source), "html", null, true);
                echo "\" ";
            }
            echo ">
  ";
            // line 9
            if (($context["text"] ?? null)) {
                echo "  ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 9, $this->source), "html", null, true);
                echo " ";
            }
            // line 10
            echo "  </iframe>

\t";
        } else {
            // line 13
            echo "\t<iframe class=\"w-100\" src=\"https://www.youtube.com/embed/YE7VzlLtp-4\" frameBorder=\"0\" height=\"410\">
    Map
\t</iframe>
";
        }
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "@atoms/14-iframe/00-iframe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 17,  98 => 13,  93 => 10,  87 => 9,  78 => 8,  71 => 7,  64 => 6,  57 => 5,  50 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@atoms/14-iframe/00-iframe.twig", "/var/www/html/ezcontent-demo/MY_PROJECT/docroot/themes/contrib/ezcontent_theme/pattern-lab/source/_patterns/00-atoms/14-iframe/00-iframe.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
