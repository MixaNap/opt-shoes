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

/* Crazy/template/extension/module/webdigifytabs.twig */
class __TwigTemplate_2ade11a405fe8548d424dce7e9cf6f70 extends Template
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
        echo "<div class=\"hometab box bottom-to-top hb-animate-element\">
<div class=\"container\">
<div class=\"row\">
\t<div class=\"tab-head\">
\t<div class=\"hometab-heading box-heading\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</div>
<div id=\"tabs\" class=\"htabs\">
  <ul class='etabs'>
\t<li class='tab'>
\t\t";
        // line 9
        if (($context["latestproducts"] ?? null)) {
            // line 10
            echo "\t\t\t<a href=\"#tab-latest\">";
            echo ($context["tab_latest"] ?? null);
            echo "</a>
\t\t";
        }
        // line 12
        echo "\t</li>
\t<li class='tab'>
\t\t";
        // line 14
        if (($context["bestsellersproducts"] ?? null)) {
            // line 15
            echo "\t\t<a href=\"#tab-bestseller\">";
            echo ($context["tab_bestseller"] ?? null);
            echo "</a>
\t\t";
        }
        // line 17
        echo "\t</li>\t
\t<li class='tab'>
\t\t";
        // line 19
        if (($context["specialproducts"] ?? null)) {
            // line 20
            echo "\t\t\t<a href=\"#tab-special\">";
            echo ($context["tab_special"] ?? null);
            echo "</a>
\t\t";
        }
        // line 22
        echo "\t</li>
\t</ul>

 </div>
</div>
<div class=\"product-column\">
";
        // line 28
        if (($context["bestsellersproducts"] ?? null)) {
            // line 29
            echo " <div id=\"tab-bestseller\" class=\"tab-content\">
    \t  <div class=\"box\">
\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t";
            // line 32
            $context["sliderFor"] = 11;
            // line 33
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["bestsellersproducts"] ?? null));
            // line 34
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 35
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 36
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid-hometab";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tabbestseller-carousel";
            } else {
                echo "tabbestseller-grid";
            }
            echo "\">
\t\t\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bestsellersproducts"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 43
                echo "\t\t\t\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43) % 2) == 1)) {
                    // line 44
                    echo "\t\t\t\t\t\t<li class=\"double-slideitem slider-item\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image ";
                // line 50
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 50) == 0)) {
                    echo "outstock";
                }
                echo "\">

\t\t\t\t\t\t\t\t\t\t\t";
                // line 52
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 52)) {
                    // line 53
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 53);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 55);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 55);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image_content\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 57);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57);
                    echo "\"/></div>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 60
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 60);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 61);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 63
                echo "      \t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 64);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 66) == 0)) {
                    // line 67
                    echo "\t\t\t\t\t\t\t            \t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t            ";
                }
                // line 69
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 70
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 70)) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t\t <div class=\"count-down clock\">
\t\t\t\t\t\t\t\t\t\t\t<div data-countdown=\"";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 72);
                    echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 83) < $context["i"])) {
                            // line 84
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 86
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 88
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 93
                echo "\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 96);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 96);
                echo "</a></h4> 
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 97
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 97)) {
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 99
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 99)) {
                        // line 100
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 100);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 102);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 102);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 104)) {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 105);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 112
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 112);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 113
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 113);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 115
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 115);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 120
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 120) > 0)) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script> 
\t\t\t\t\t\t\t\t     \$('.total-review";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132);
                echo "').on('click', function() { 
\t\t\t\t\t\t\t\t       var t='";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                echo "'; 
\t\t\t\t\t\t\t\t       const parseResult = new DOMParser().parseFromString(t, \"text/html\");
\t\t\t\t\t\t\t\t       const parsedUrl = parseResult.documentElement.textContent;
\t\t\t\t\t\t\t\t       window.location.href = parsedUrl + '&review';
\t\t\t\t\t\t\t\t       return false;
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t </script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 141
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 141) % 2) != 1)) {
                    // line 142
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 145
                echo "\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t <span class=\"tabbestseller_default_width\" style=\"display:none; visibility:hidden\"></span>
 </div>
";
        }
        // line 152
        if (($context["latestproducts"] ?? null)) {
            // line 153
            echo "<div id=\"tab-latest\" class=\"tab-content\">
\t<div class=\"box\">
\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t";
            // line 157
            $context["sliderFor"] = 9;
            // line 158
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["latestproducts"] ?? null));
            // line 159
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
            // line 160
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 161
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 166
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tablatest-carousel";
            } else {
                echo "tablatest-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latestproducts"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 168
                echo "\t\t\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 168) % 2) == 1)) {
                    // line 169
                    echo "\t\t\t\t\t<li class=\"double-slideitem slider-item\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image ";
                // line 175
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 175) == 0)) {
                    echo "outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 176
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 176)) {
                    // line 177
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 177);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 179);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 179);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 179);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image_content\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 181);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 181);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 181);
                    echo "\"/></div>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 184
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 184);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 185);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 185);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 185);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 187
                echo "      \t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 187)) {
                    // line 188
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 188);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 190) == 0)) {
                    // line 191
                    echo "\t\t\t\t\t\t\t            \t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t            ";
                }
                // line 193
                echo "\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 195
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 195)) {
                    // line 196
                    echo "\t\t\t\t\t\t\t\t\t\t\t <div class=\"count-down clock\">
\t\t\t\t\t\t\t\t\t\t\t<div data-countdown=\"";
                    // line 197
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 197);
                    echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 208
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 208)) {
                    // line 209
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 210
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 211
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 211) < $context["i"])) {
                            // line 212
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 214
                            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 217
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 218
                echo "\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 222
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 224
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 224);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 224);
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 225
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 225)) {
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 227
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 227)) {
                        // line 228
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 228);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 230
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 230);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 230);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 232
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 232)) {
                        // line 233
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 233);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 235
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 237
                echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 241
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 241);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 242
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 242);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 244
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 244);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 249
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 249) > 0)) {
                    // line 250
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 250);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 252
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 254
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script> 
\t\t\t\t\t\t\t\t     \$('.total-review";
                // line 261
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 261);
                echo "').on('click', function() { 
\t\t\t\t\t\t\t\t       var t='";
                // line 262
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 262);
                echo "'; 
\t\t\t\t\t\t\t\t       const parseResult = new DOMParser().parseFromString(t, \"text/html\");
\t\t\t\t\t\t\t\t       const parsedUrl = parseResult.documentElement.textContent;
\t\t\t\t\t\t\t\t       window.location.href = parsedUrl + '&review';
\t\t\t\t\t\t\t\t       return false;
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t </script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 270
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 270) % 2) != 1)) {
                    // line 271
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 274
                echo "\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t  <span class=\"tablatest_default_width\" style=\"display:none; visibility:hidden\"></span>
\t\t\t\t</div>
 </div>
";
        }
        // line 282
        echo "


";
        // line 285
        if (($context["specialproducts"] ?? null)) {
            // line 286
            echo "<div id=\"tab-special\" class=\"tab-content\">
\t<div class=\"box\">
\t\t\t\t<div class=\"box-content\">

\t\t\t\t\t";
            // line 290
            $context["sliderFor"] = 9;
            // line 291
            echo "\t\t\t\t\t";
            $context["productCount"] = twig_length_filter($this->env, ($context["specialproducts"] ?? null));
            // line 292
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
            // line 293
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 294
                echo "\t\t\t\t\t\t<div class=\"customNavigation\">
\t\t\t\t\t\t\t<a class=\"fa prev fa-arrow-left\">&nbsp;</a>
\t\t\t\t\t\t\t<a class=\"fa next fa-arrow-right\">&nbsp;</a>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t";
            }
            // line 299
            echo "\t\t\t\t\t<div class=\"box-product ";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo " productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "tabspecial-carousel";
            } else {
                echo "tabspecial-grid";
            }
            echo "\">
\t\t\t\t\t";
            // line 300
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["specialproducts"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 301
                echo "\t\t\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 301) % 2) == 1)) {
                    // line 302
                    echo "\t\t\t\t\t<li class=\"double-slideitem slider-item\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                }
                // line 305
                echo "\t\t\t\t\t\t\t<div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"product-block product-thumb transition\">
\t\t\t\t\t\t\t\t\t<div class=\"product-block-inner\">\t  \t
\t\t\t\t\t\t\t\t\t\t<div class=\"image ";
                // line 308
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 308) == 0)) {
                    echo "outstock";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 309
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 309)) {
                    // line 310
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 310);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 312);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 312);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 312);
                    echo "\" class=\"img-responsive reg-image\"/>
      \t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image_content\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-image\" src=\"";
                    // line 314
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 314);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 314);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 314);
                    echo "\"/></div>
      \t\t\t\t\t\t\t\t\t\t\t\t</a>
      \t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 317
                    echo "      \t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 317);
                    echo "\">
      \t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 318
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 318);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 318);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 318);
                    echo "\" class=\"img-responsive\"/></a>
      \t\t\t\t\t\t\t\t\t\t";
                }
                // line 320
                echo "      \t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 320)) {
                    // line 321
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 321);
                    echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 323
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 323) == 0)) {
                    // line 324
                    echo "\t\t\t\t\t\t\t            \t<span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t            ";
                }
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 327
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 327)) {
                    // line 328
                    echo "\t\t\t\t\t\t\t\t\t\t\t <div class=\"count-down clock\">
\t\t\t\t\t\t\t\t\t\t\t<div data-countdown=\"";
                    // line 329
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 329);
                    echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 332
                echo "\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 337
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 337)) {
                    // line 338
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 339
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 340
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 340) < $context["i"])) {
                            // line 341
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 343
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 345
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 346
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 348
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 352
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 355
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 355);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 355);
                echo " </a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 356
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 356)) {
                    // line 357
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 358
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 358)) {
                        // line 359
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 359);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 361
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 361);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 361);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 363
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 363)) {
                        // line 364
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 364);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 366
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 368
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_hover_block_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"wishlist\" type=\"button\"  title=\"";
                // line 373
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 373);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"compare_button\" type=\"button\"  title=\"";
                // line 374
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 374);
                echo " ');\"></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"quickview-button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"quickbox\"  title=\"";
                // line 376
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 376);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 381
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 381) > 0)) {
                    // line 382
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 382);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 384
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 386
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<script> 
\t\t\t\t\t\t\t\t     \$('.total-review";
                // line 394
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 394);
                echo "').on('click', function() { 
\t\t\t\t\t\t\t\t       var t='";
                // line 395
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 395);
                echo "'; 
\t\t\t\t\t\t\t\t       const parseResult = new DOMParser().parseFromString(t, \"text/html\");
\t\t\t\t\t\t\t\t       const parsedUrl = parseResult.documentElement.textContent;
\t\t\t\t\t\t\t\t       window.location.href = parsedUrl + '&review';
\t\t\t\t\t\t\t\t       return false;
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t </script>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 403
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 403) % 2) != 1)) {
                    // line 404
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 407
                echo "\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t </div>
\t\t\t  <span class=\"tabspecial_default_width\" style=\"display:none; visibility:hidden\"></span>
\t\t\t\t</div>
 </div>
";
        }
        // line 415
        echo "

</div>
";
        // line 418
        echo ($context["bannerfirst"] ?? null);
        echo "
</div>
</div>
<script>
\$('#tabs a').tabs();
</script> ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/extension/module/webdigifytabs.twig";
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
        return array (  1137 => 418,  1132 => 415,  1123 => 408,  1109 => 407,  1104 => 404,  1102 => 403,  1091 => 395,  1087 => 394,  1077 => 386,  1069 => 384,  1059 => 382,  1057 => 381,  1047 => 376,  1040 => 374,  1034 => 373,  1027 => 368,  1023 => 366,  1015 => 364,  1012 => 363,  1004 => 361,  998 => 359,  996 => 358,  993 => 357,  991 => 356,  985 => 355,  980 => 352,  977 => 348,  973 => 346,  967 => 345,  963 => 343,  959 => 341,  956 => 340,  952 => 339,  949 => 338,  947 => 337,  940 => 332,  934 => 329,  931 => 328,  929 => 327,  926 => 326,  920 => 324,  917 => 323,  911 => 321,  908 => 320,  899 => 318,  894 => 317,  884 => 314,  875 => 312,  869 => 310,  867 => 309,  861 => 308,  850 => 305,  845 => 302,  842 => 301,  825 => 300,  810 => 299,  803 => 294,  801 => 293,  798 => 292,  795 => 291,  793 => 290,  787 => 286,  785 => 285,  780 => 282,  771 => 275,  757 => 274,  752 => 271,  750 => 270,  739 => 262,  735 => 261,  726 => 254,  718 => 252,  708 => 250,  706 => 249,  696 => 244,  689 => 242,  683 => 241,  677 => 237,  673 => 235,  665 => 233,  662 => 232,  654 => 230,  648 => 228,  646 => 227,  643 => 226,  641 => 225,  635 => 224,  631 => 222,  628 => 218,  624 => 217,  618 => 216,  614 => 214,  610 => 212,  607 => 211,  603 => 210,  600 => 209,  598 => 208,  588 => 200,  582 => 197,  579 => 196,  577 => 195,  573 => 193,  567 => 191,  564 => 190,  558 => 188,  555 => 187,  546 => 185,  541 => 184,  531 => 181,  522 => 179,  516 => 177,  514 => 176,  508 => 175,  497 => 172,  492 => 169,  489 => 168,  472 => 167,  457 => 166,  450 => 161,  448 => 160,  445 => 159,  442 => 158,  440 => 157,  434 => 153,  432 => 152,  424 => 146,  410 => 145,  405 => 142,  403 => 141,  392 => 133,  388 => 132,  379 => 125,  371 => 123,  361 => 121,  359 => 120,  349 => 115,  342 => 113,  336 => 112,  331 => 109,  327 => 107,  319 => 105,  316 => 104,  308 => 102,  302 => 100,  300 => 99,  297 => 98,  295 => 97,  289 => 96,  284 => 93,  282 => 91,  278 => 89,  272 => 88,  268 => 86,  264 => 84,  261 => 83,  257 => 82,  254 => 81,  252 => 80,  245 => 75,  239 => 72,  236 => 71,  234 => 70,  231 => 69,  225 => 67,  222 => 66,  216 => 64,  213 => 63,  204 => 61,  199 => 60,  189 => 57,  180 => 55,  174 => 53,  172 => 52,  165 => 50,  154 => 47,  149 => 44,  146 => 43,  129 => 42,  114 => 41,  107 => 36,  105 => 35,  102 => 34,  99 => 33,  97 => 32,  92 => 29,  90 => 28,  82 => 22,  76 => 20,  74 => 19,  70 => 17,  64 => 15,  62 => 14,  58 => 12,  52 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/extension/module/webdigifytabs.twig", "");
    }
}
