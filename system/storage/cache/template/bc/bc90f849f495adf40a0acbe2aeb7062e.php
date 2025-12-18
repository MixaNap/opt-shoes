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

/* Crazy/template/extension/module/carousel.twig */
class __TwigTemplate_03626b961283f60c48680d2c25e0358a extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"carousel-";
        echo ($context["module"] ?? null);
        echo "\" class=\"banners-slider-carousel bottom-to-top hb-animate-element\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"box-content\">
\t<div class=\"customNavigation\">
\t\t<a class=\"prev fa fa-arrow-left\">&nbsp;</a>
\t\t<a class=\"next fa fa-arrow-right\">&nbsp;</a>
\t</div>
  <div class=\"product-carousel\" id=\"module-";
        // line 9
        echo ($context["module"] ?? null);
        echo "-carousel\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 11
            echo "    \t<div class=\"slider-item\">
\t\t<div class=\"product-block\">
\t\t<div class=\"product-block-inner\">
\t\t\t";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 14)) {
                // line 15
                echo "   <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 15);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 15);
                echo "\" class=\"img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 15);
                echo "\" /></a>
    ";
            } else {
                // line 17
                echo "    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 17);
                echo "\" class=\"img-responsive\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 17);
                echo "\" />
    ";
            }
            // line 19
            echo "\t\t</div></div></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </div>
</div>
</div>
</div>
</div>
<span class=\"module_default_width\" style=\"display:none; visibility:hidden\"></span>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/extension/module/carousel.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  89 => 21,  82 => 19,  74 => 17,  64 => 15,  62 => 14,  57 => 11,  53 => 10,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/extension/module/carousel.twig", "");
    }
}
