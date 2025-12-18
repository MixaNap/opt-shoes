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

/* Crazy/template/extension/module/special.twig */
class __TwigTemplate_0f99cf12ed7ee1a52d09f2e2f4678fe1 extends Template
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
        echo "\t<div class=\"box special bottom-to-top hb-animate-element\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
  <div class=\"box-heading\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</div>

  <div class=\"box-content\">
\t\t";
        // line 7
        $context["sliderFor"] = 5;
        // line 8
        echo "\t\t";
        $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
        // line 9
        echo "\t";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            // line 10
            echo "\t\t<div class=\"customNavigation\">
\t\t\t<a class=\"fa prev wdspecial_prev fa-arrow-left\">&nbsp;</a>
\t\t\t<a class=\"fa next wdspecial_next fa-arrow-right\">&nbsp;</a>
\t\t</div>\t
\t";
        }
        // line 15
        echo "\t
\t<div class=\"box-product ";
        // line 16
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "owl-carousel specialcarousel";
        } else {
            echo " productbox-grid";
        }
        echo "\" id=\"";
        if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
            echo "special-carousel";
        } else {
            echo "special-grid";
        }
        echo "\">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "  <div class=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "slider-item";
            } else {
                echo "product-items";
            }
            echo "\">
    <div class=\"product-block product-thumb transition\">
\t  <div class=\"product-block-inner\">\t  \t
\t\t<div class=\"image ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 21) == 0)) {
                echo "outstock";
            }
            echo "\">
\t\t\t";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 22)) {
                // line 23
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 24);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                echo "\" class=\"img-responsive reg-image\"/>
\t\t\t\t\t<div class=\"image_content\">
\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 26);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 30);
                echo "\">
\t\t\t\t\t<img src=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 31);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                echo "\" class=\"img-responsive\"/></a>
\t\t\t";
            }
            // line 33
            echo "\t\t\t
\t\t\t";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 34)) {
                // line 35
                echo "\t\t\t<span class=\"special-tag\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 35);
                echo "%</span>
\t\t";
            }
            // line 37
            echo "\t\t<div class=\"countdown\">
\t\t\t\t\t";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 38)) {
                // line 39
                echo "\t\t\t\t\t <div class=\"count-down clock\">
\t\t\t\t\t<div data-countdown=\"";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 40);
                echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t</div>\t
\t\t
\t  ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 45) == 0)) {
                // line 46
                echo "\t  <span class=\"stock_status\">";
                echo ($context["text_outstock"] ?? null);
                echo "</span>
    ";
            }
            // line 47
            echo " 
\t\t</div>
      \t<div class=\"product-details\">
\t\t\t<div class=\"caption\">
\t\t\t\t\t
\t\t\t\t  
\t\t ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 53)) {
                // line 54
                echo "\t\t\t<div class=\"rating\">
\t\t\t\t";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    echo "\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 56) < $context["i"])) {
                        // line 57
                        echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t";
                    } else {
                        // line 59
                        echo "\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t";
                    }
                    // line 61
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "\t\t\t\t";
                // line 63
                echo "\t\t\t</div>
\t\t";
            }
            // line 65
            echo "\t\t\t\t 
\t\t\t\t<h4><a href=\"";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
            echo " \">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
            echo " </a></h4>
\t\t\t\t
\t\t\t\t";
            // line 68
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 68)) {
                // line 69
                echo "        \t\t\t<p class=\"price\">
       \t\t\t    ";
                // line 70
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "          \t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 71);
                    echo "
         \t\t\t";
                } else {
                    // line 73
                    echo "         \t\t\t<span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 73);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73);
                    echo "</span>
\t\t\t        ";
                }
                // line 75
                echo "  \t\t            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "\t\t            <span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 76);
                    echo "</span>
          \t\t\t";
                }
                // line 78
                echo "\t\t\t        </p>
\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"product_hover_block_inner\">
\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
            // line 83
            echo ($context["button_wishlist"] ?? null);
            echo " \" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 83);
            echo " ');\"></button>
\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
            // line 84
            echo ($context["button_compare"] ?? null);
            echo " \" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 84);
            echo " ');\"></button>
\t\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
            // line 86
            echo ($context["button_quickview"] ?? null);
            echo "\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 86);
            echo "\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 90) > 0)) {
                // line 91
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 91);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" >";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t";
            } else {
                // line 93
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                echo ($context["text_outstock"] ?? null);
                echo "\" >";
                echo ($context["text_outstock"] ?? null);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t</div> 
\t\t\t</div>
\t\t\t\t";
            // line 98
            echo "\t\t\t</div>\t\t
 \t  
\t\t\t\t
\t\t\t\t";
            // line 101
            if ((($context["stock_qty"] ?? null) == "true")) {
                // line 102
                echo "\t\t\t\t<span class=\"stock_msg\" style=\"color:#228B22;\">";
                echo ($context["text_productavail"] ?? null);
                echo " : ";
                echo ($context["qty_stock"] ?? null);
                echo "</span>
\t\t\t\t";
            }
            // line 104
            echo "\t\t\t\t
\t\t\t\t
\t  \t</div>
  \t</div>
\t</div>
</div>
  
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</div>
  </div>
</div>
</div>
</div>
<span class=\"special_default_width\" style=\"display:none; visibility:hidden\"></span>

<script type=\"text/javascript\"><!--

\$(document).ready(function(){
\t\$('.specialcarousel').owlCarousel({
\t\titems: 4,
\t\tsingleItem: false,
\t\tnavigation: false,
\t\tpagination: false,
\t\titemsDesktop : [1499,4],
\t\titemsDesktopSmall :\t[1199,4],
\t\titemsTablet :\t[991,3],
\t\titemsTabletSmall :\t[650,2],
\t\titemsMobile :\t[319,1]
\t});
\t// Custom Navigation Events
\t\$(\".wdspecial_next\").click(function(){
\t\t\$('.specialcarousel').trigger('owl.next');
\t})
\t\$(\".wdspecial_prev\").click(function(){
\t\t\$('.specialcarousel').trigger('owl.prev');
\t});\t
});\t
--></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/extension/module/special.twig";
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
        return array (  344 => 112,  331 => 104,  323 => 102,  321 => 101,  316 => 98,  312 => 95,  304 => 93,  294 => 91,  292 => 90,  283 => 86,  276 => 84,  270 => 83,  265 => 80,  261 => 78,  253 => 76,  250 => 75,  242 => 73,  236 => 71,  234 => 70,  231 => 69,  229 => 68,  222 => 66,  219 => 65,  215 => 63,  213 => 62,  207 => 61,  203 => 59,  199 => 57,  196 => 56,  192 => 55,  189 => 54,  187 => 53,  179 => 47,  173 => 46,  171 => 45,  167 => 43,  161 => 40,  158 => 39,  156 => 38,  153 => 37,  147 => 35,  145 => 34,  142 => 33,  133 => 31,  128 => 30,  117 => 26,  108 => 24,  103 => 23,  101 => 22,  95 => 21,  84 => 18,  80 => 17,  66 => 16,  63 => 15,  56 => 10,  53 => 9,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/extension/module/special.twig", "");
    }
}
