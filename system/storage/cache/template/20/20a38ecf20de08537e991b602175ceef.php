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

/* Crazy/template/extension/module/slideshow.twig */
class __TwigTemplate_8de8e17cff72669c6d72f8f8325c8a26 extends Template
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
        echo "<div class=\"main-slider\">
<div id=\"spinner\"></div>
<div class=\"swiper-viewport\">
  <div id=\"slideshow";
        // line 4
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\" style=\"opacity: 1;\">
    <div class=\"swiper-wrapper\"> 
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 7
            echo "        <div class=\"swiper-slide text-center\">
          ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8)) {
                // line 9
                echo "          <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 9);
                echo "\">
            <img src=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive\" />
          </a>
          ";
            } else {
                // line 13
                echo "          <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 13);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 13);
                echo "\" class=\"img-responsive\" />
          ";
            }
            // line 15
            echo "          ";
            // line 16
            echo "            
              <div class=\"slider-content\">
               <div class=\"main-carousel-content\">
                <div class=\"slider-description\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 19);
            echo "</div>
                <div class=\"slider-title\">";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 20);
            echo "</div>
                ";
            // line 22
            echo "                <div class=\"slider-button\"> <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 22);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "button", [], "any", false, false, false, 22);
            echo "</a></div>
              </div>
            </div>
          </div> 
       ";
            // line 27
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      
  </div>
</div>

  <div class=\"swiper-pagination slideshow";
        // line 32
        echo ($context["module"] ?? null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
</div>
<script>
\$(window).load(function() {\t\t
\$('#slideshow0').swiper({
\tmode: 'horizontal',
\tslidesPerView: 4,
\tpagination: '.slideshow0',
\tpaginationClickable: true,
\tnextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 0,
\t   autoplay: 5500,
    autoplayDisableOnInteraction: true,
\tloop: true,
  effect:'slide',

   breakpoints: {
    991: {
      slidesPerView: 3,
      spaceBetween:0
    },
    543: {
      slidesPerView: 2,
      spaceBetween: 0
    },
    479: {
      slidesPerView: 2,
      spaceBetween: 0
    }
    }
});
\t});
</script>
<script>
\t// Can also be used with \$(document).ready()
\t\$(window).load(function() {\t\t
\t  \$(\"#spinner\").fadeOut(\"slow\");
\t});\t
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/extension/module/slideshow.twig";
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
        return array (  114 => 32,  108 => 28,  102 => 27,  92 => 22,  88 => 20,  84 => 19,  79 => 16,  77 => 15,  69 => 13,  61 => 10,  56 => 9,  54 => 8,  51 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/extension/module/slideshow.twig", "");
    }
}
