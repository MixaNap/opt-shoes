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

/* Crazy/template/extension/module/blogger.twig */
class __TwigTemplate_9881bb7d651e8e809b25df4fe09f5aa5 extends Template
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
        echo "<div class=\"box webdigifyblog bottom-to-top hb-animate-element\">
<div class=\"container\">
<div class=\"row\">
\t";
        // line 4
        $context["sliderFor"] = 1;
        // line 5
        echo "\t";
        $context["blogCount"] = twig_length_filter($this->env, ($context["blogs"] ?? null));
        // line 6
        echo " <div class=\"box-heading\">";
        echo ($context["heading_title"] ?? null);
        echo "</div>


  <div class=\"box-content\">
    <div class=\"box-product ";
        // line 10
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "owl-carousel blogcarousel ";
        } else {
            echo "productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "blog-carousel";
        } else {
            echo "blog-grid";
        }
        echo "\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            echo " 
    <div class=\"";
            // line 12
            if ((($context["blogCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "blog-item";
            } else {
                echo " product-items";
            }
            echo "\">
\t<div class=\"product-block\">
     ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 14)) {
                echo " 
\t  <div class=\"blog-left\">
\t  <div class=\"blog-image\">
\t  <img src=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 17);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" />
\t  <div class=\"post-image-hover\"> </div>
\t<p class=\"post_hover\"><a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 19);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\"></i> </a><a class=\"icon readmore_link\" title=\"Click to view Read More \" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 19);
                echo "\"><i class=\"fa fa-link\"></i></a></p>


\t  </div>
\t   <div class=\"blog-right\"> 
\t   ";
                // line 25
                echo "\t   <div class=\"view-blog\">
\t\t<div class=\"date-time\"> <i class=\"fa fa-calendar\"></i>  ";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 26);
                echo "</div> 
\t\t  <h4><a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 27);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 27);
                echo "</a> </h4>
\t\t  ";
                // line 31
                echo "\t  </div>
     
\t </div>
\t  </div>
\t ";
            }
            // line 35
            echo " \t
\t 
    </div>
\t</div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " \t 
   
  </div>
  ";
        // line 45
        echo "\t<span class=\"blog_default_width\" style=\"display:none; visibility:hidden\"></span>
  </div>
 </div>
 </div>
 </div>


<script type=\"text/javascript\">

\$(document).ready(function(){
\$('.blogcarousel').owlCarousel({
\t\titems: 3,
\t\tautoPlay: false,
\t\tsingleItem: false,
\t\tnavigation: true,
\t\tnavigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
\t\tpagination: true,
\t\titemsDesktop : [1199,2],
\t\titemsDesktopSmall:[991,2],
\t\titemsTablet :\t[575,1]
\t});
});\t
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/extension/module/blogger.twig";
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
        return array (  144 => 45,  139 => 39,  129 => 35,  122 => 31,  116 => 27,  112 => 26,  109 => 25,  99 => 19,  90 => 17,  84 => 14,  75 => 12,  69 => 11,  55 => 10,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/extension/module/blogger.twig", "");
    }
}
