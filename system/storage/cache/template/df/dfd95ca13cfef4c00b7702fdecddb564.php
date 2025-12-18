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

/* Crazy/template/product/product.twig */
class __TwigTemplate_97f462ce692180e19f091439cdff6a3a extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-product\" class=\"container\">
  
  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6 productpage";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9 productpage";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12 productpage";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
    <ul class=\"breadcrumb\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </ul>
  ";
        // line 18
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\"> ";
        // line 19
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 20
            echo "        
        ";
            // line 21
            $context["class"] = "col-sm-6 product-left";
            // line 22
            echo "        ";
        } else {
            // line 23
            echo "        ";
            $context["class"] = "col-sm-4 product-left";
            // line 24
            echo "        ";
        }
        // line 25
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> 
    <div class=\"product-info\">    
     ";
        // line 27
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 28
            echo "          <div class=\"left product-image thumbnails\">
         ";
            // line 29
            if (($context["thumb"] ?? null)) {
                echo "      
    <!-- Webdigify Cloud-Zoom Image Effect Start -->
      <div class=\"image\"><a class=\"thumbnail\" href=\"";
                // line 31
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img id=\"tmzoom\" src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></div> 
      ";
            }
            // line 33
            echo "      ";
            if (($context["images"] ?? null)) {
                // line 34
                echo "       ";
                $context["sliderFor"] = 3;
                // line 35
                echo "      ";
                $context["imageCount"] = twig_length_filter($this->env, ($context["images"] ?? null));
                echo " 
      
     <div class=\"additional-carousel\">  
      ";
                // line 38
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    // line 39
                    echo "        <div class=\"customNavigation\">
        <a class=\"fa prev fa-arrow-left\">&nbsp;</a>
      <a class=\"fa next fa-arrow-right\">&nbsp;</a>
      </div> 
     ";
                }
                // line 43
                echo "        
      <div id=\"additional-carousel\" class=\"image-additional ";
                // line 44
                if ((($context["imageCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "product-carousel";
                }
                echo "\">
          
      <div class=\"slider-item\">
        <div class=\"product-block\">   
          <a href=\"";
                // line 48
                echo ($context["popup"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                echo ($context["thumb"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a>
        </div>
        </div>    
        
      ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 53
                    echo "        <div class=\"slider-item\">
        <div class=\"product-block\">   
              <a href=\"";
                    // line 55
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 55);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" class=\"elevatezoom-gallery\" data-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 55);
                    echo "\" data-zoom-image=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 55);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 55);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a>
        </div>
        </div>    
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "        
        </div>
      <span class=\"additional_default_width\" style=\"display:none; visibility:hidden\"></span>
      </div>
    ";
            }
            // line 62
            echo "         

  <!-- Webdigify Cloud-Zoom Image Effect End-->
    </div>
    ";
        }
        // line 67
        echo "        </div>
        </div>
        ";
        // line 69
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 70
            echo "        ";
            $context["class"] = "col-sm-6 product-right";
            // line 71
            echo "        ";
        } else {
            // line 72
            echo "        ";
            $context["class"] = "col-sm-5 product-right";
            // line 73
            echo "        ";
        }
        // line 74
        echo "       
        <div class=\"";
        // line 75
        echo ($context["class"] ?? null);
        echo "\">
          
          <div class=\"product-detail-left\">
          <h3 class=\"product-title\">";
        // line 78
        echo ($context["heading_title"] ?? null);
        echo "</h3>
           ";
        // line 79
        if (($context["review_status"] ?? null)) {
            // line 80
            echo "          <div class=\"rating-wrapper\">
            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 82
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 83
                    echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
              ";
                } else {
                    // line 85
                    echo "                <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
              ";
                }
                // line 87
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "              <a href=\"\" class=\"review-count\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a>  
              <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\" class=\"write-review\"><i class=\"fa fa-pencil\"></i>";
            // line 89
            echo ($context["text_write"] ?? null);
            echo "</a>
          </div>
          ";
        }
        // line 92
        echo "            <div class=\"description\">
        <table class=\"product-description\">

            ";
        // line 95
        if (($context["manufacturer"] ?? null)) {
            // line 96
            echo "            <tr><td><span class=\"desc\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span></td><td class=\"description-right\"><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></td></tr>
            ";
        }
        // line 98
        echo "            <tr><td><span class=\"desc\">";
        echo ($context["text_model"] ?? null);
        echo "</span></td><td  class=\"description-right\"> ";
        echo ($context["model"] ?? null);
        echo "</td></tr>
            ";
        // line 99
        if (($context["reward"] ?? null)) {
            // line 100
            echo "           <tr><td><span class=\"desc\">";
            echo ($context["text_reward"] ?? null);
            echo "</span> </td><td class=\"description-right\" >";
            echo ($context["reward"] ?? null);
            echo "</td></tr>
            ";
        }
        // line 102
        echo "            ";
        if (($context["sku"] ?? null)) {
            // line 103
            echo "           <tr><td><span class=\"desc\">SKU :</span> </td><td class=\"description-right\" >";
            echo ($context["sku"] ?? null);
            echo "</td></tr>
            ";
        }
        // line 105
        echo "             ";
        if ((($context["stock_qty"] ?? null) == "false")) {
            // line 106
            echo "           <tr><td><span class=\"desc\">";
            echo ($context["text_stock"] ?? null);
            echo "</span> </td><td class=\"description-right\" >
            <span style=\"color:#ff0000;\">";
            // line 107
            echo ($context["stock"] ?? null);
            echo "</span>
          </td></tr> ";
        }
        // line 109
        echo "    
          </table>
          ";
        // line 111
        if ((($context["stock_qty"] ?? null) == "true")) {
            // line 112
            echo "          \t<span class=\"stock_msg\" style=\"color:#228B22;\">";
            echo ($context["text_productavail"] ?? null);
            echo " : ";
            echo ($context["qty_stock"] ?? null);
            echo "</span>
          ";
        }
        // line 114
        echo "          <div class=\"countdown\">
            ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "specialTime", [], "any", false, false, false, 115)) {
            // line 116
            echo "             <div class=\"count-down clock\">
            <div data-countdown=\"";
            // line 117
            echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "specialTime", [], "any", false, false, false, 117);
            echo "\" class=\"countbox hastime\"></div>
            </div>\t
            ";
        }
        // line 120
        echo "          </div>\t
      </div>

          ";
        // line 123
        if (($context["price"] ?? null)) {
            // line 124
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 125
            if ( !($context["special"] ?? null)) {
                // line 126
                echo "            <li>
              <h4 class=\"special-price\"><span class=\"old-prices\">";
                // line 127
                echo ($context["price"] ?? null);
                echo "</span></h4>
            </li>
            ";
            } else {
                // line 130
                echo "            <li><h4 class=\"special-price\"><span class=\"new-prices\">";
                echo ($context["special"] ?? null);
                echo "</span></h4>
            \t<span class=\"old-price\" style=\"text-decoration: line-through;\"><span class=\"old-prices\">";
                // line 131
                echo ($context["price"] ?? null);
                echo "</span></span>
            \t<span class=\"discount-per\">&nbsp;&nbsp;";
                // line 132
                echo ($context["percentsaving"] ?? null);
                echo "% off</span>
            </li>
            ";
            }
            // line 135
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 136
                echo "            <li class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " <span class=\"product-tax\">";
                echo ($context["tax"] ?? null);
                echo "</span></li>
            ";
            }
            // line 138
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 139
                echo "            <li class=\"rewardpoint\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 141
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 142
                echo "           
            ";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 144
                    echo "            <li class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 144);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 144);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "            ";
            }
            // line 147
            echo "          </ul>
          ";
        }
        // line 149
        echo "          <div id=\"product\">
       ";
        // line 150
        if (($context["options"] ?? null)) {
            // line 151
            echo "            <h3 class=\"product-option\">";
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 153
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 153) == "select")) {
                    // line 154
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 154)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 155);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 155);
                    echo "</label>
              <select name=\"option[";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 156);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 157
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 158
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 158));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 159
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 159);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 159);
                        echo "
                ";
                        // line 160
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 160)) {
                            // line 161
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 161);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 161);
                            echo ")
                ";
                        }
                        // line 162
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 164
                    echo "              </select>
            </div>
            ";
                }
                // line 167
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 167) == "radio")) {
                    // line 168
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 168)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 169);
                    echo "</label>
              <div id=\"input-option";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 170));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 171
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 173
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 173);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 173);
                        echo "\" />
                    ";
                        // line 174
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 174)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 174);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 174);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 174)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 174);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 174);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 175
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 175);
                        echo "
                    ";
                        // line 176
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 176)) {
                            // line 177
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 177);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 177);
                            echo ")
                    ";
                        }
                        // line 178
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 180
                    echo " </div>
            </div>
            ";
                }
                // line 183
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 183) == "checkbox")) {
                    // line 184
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 184)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 185
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 185);
                    echo "</label>
              <div id=\"input-option";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 186);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 186));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 187
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 189
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 189);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 189);
                        echo "\" />
                    ";
                        // line 190
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 190)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 190);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 190);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 190);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 190);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 191
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 191);
                        echo "
                    ";
                        // line 192
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 192)) {
                            // line 193
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 193);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 193);
                            echo ")
                    ";
                        }
                        // line 194
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 196
                    echo " </div>
            </div>
            ";
                }
                // line 199
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 199) == "text")) {
                    // line 200
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 200)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 201
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 201);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 201);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 202
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 202);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 202);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 202);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 205
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 205) == "textarea")) {
                    // line 206
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 206)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 207
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 207);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 207);
                    echo "</label>
              <textarea name=\"option[";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 208);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 208);
                    echo "</textarea>
            </div>
            ";
                }
                // line 211
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 211) == "file")) {
                    // line 212
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 212)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 213
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 213);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 214
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 215
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 215);
                    echo "\" />
            </div>
            ";
                }
                // line 218
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 218) == "date")) {
                    // line 219
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 219)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 220);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 222);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 222);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 228
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 228) == "datetime")) {
                    // line 229
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 229)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 230);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 232
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 232);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 232);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 232);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 238
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 238) == "time")) {
                    // line 239
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 239)) {
                        echo " required";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 240);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 242);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 242);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 242);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 248
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "            ";
        }
        // line 250
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 251
            echo "            <hr>
            <h3>";
            // line 252
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 255
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 257
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 257);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 257);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 263
        echo "            <div class=\"form-group qty\">
              ";
        // line 264
        if ((($context["stock_qty"] ?? null) == "true")) {
            echo " 
              <div class=\"col-lg-3 col-md-12 col-sm-12 col-xs-12 op-box qty-plus-minus\">
                  <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\"></button>
                ";
            // line 268
            echo "                 <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 269
            echo ($context["product_id"] ?? null);
            echo "\" />
                   <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\"></button>
                   </div>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 272
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
              ";
        } else {
            // line 274
            echo "              <button type=\"button\" id=\"button\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block disabled\">";
            echo ($context["text_outstock"] ?? null);
            echo "</button> 
              ";
        }
        // line 276
        echo "               <div class=\"btn-group prd_page\">

            <button type=\"button\" class=\"btn btn-default wishlist\" title=\"";
        // line 278
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_wishlist"] ?? null);
        echo "</button>
            <button type=\"button\" class=\"btn btn-default compare\" title=\"";
        // line 279
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_compare"] ?? null);
        echo "</button>
          </div>
          </div>
            
          ";
        // line 283
        if ((($context["minimum"] ?? null) > 1)) {
            // line 284
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 286
        echo "            </div>

           

           <hr>
       <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 292
        echo ($context["share"] ?? null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
           
            <div class=\"content_product_block\">";
        // line 296
        echo ($context["productblock"] ?? null);
        echo "</div>
           
      </div>
     
            </div>
            ";
        // line 303
        echo "      </div>
     
          
      ";
        // line 306
        if (($context["tags"] ?? null)) {
            // line 307
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 308
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 309
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 309);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 309);
                    echo "</a>,
        ";
                } else {
                    // line 310
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["tags"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 310);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["tags"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 310);
                    echo "</a> ";
                }
                // line 311
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 313
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
   
    ";
        // line 316
        echo ($context["column_right"] ?? null);
        echo "
    
     <!-- product page tab code start-->
     ";
        // line 319
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 320
            echo "         ";
            $context["class"] = "col-sm-6";
            // line 321
            echo "         ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 322
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 323
            echo "         ";
        } else {
            // line 324
            echo "         ";
            $context["class"] = "col-sm-12";
            // line 325
            echo "        ";
        }
        // line 326
        echo "    <div id=\"tabs_info\" class=\"product-tab ";
        echo ($context["class"] ?? null);
        echo "\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 328
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 329
        if (($context["attribute_groups"] ?? null)) {
            // line 330
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 332
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 334
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 335
        if (($context["attribute_groups"] ?? null)) {
            // line 336
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 339
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 341
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 341);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 345
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 345));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 346
                    echo "                <tr>
                  <td>";
                    // line 347
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 347);
                    echo "</td>
                  <td>";
                    // line 348
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 348);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 351
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 353
            echo "              </table>
            </div>
            ";
        }
        // line 356
        echo "            </div>
      </div>
      <div class=\"product-review\">

        ";
        // line 360
        if (($context["review_status"] ?? null)) {
            // line 361
            echo "        <a href=\"#tab-review\" data-toggle=\"tab\" class=\"box-heading\">";
            echo ($context["tab_review"] ?? null);
            echo "</a>
        ";
        }
        // line 363
        echo "        
      </div>
      ";
        // line 365
        if (($context["review_status"] ?? null)) {
            // line 366
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h4>";
            // line 369
            echo ($context["text_write"] ?? null);
            echo "</h4>
                ";
            // line 370
            if (($context["review_guest"] ?? null)) {
                // line 371
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 373
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 374
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 379
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 381
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 386
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 387
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 397
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 399
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 402
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 406
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 408
            echo "              </form>
            </div>
            ";
        }
        // line 411
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 412
            echo "      <div class=\"box related_prd\">
        <div class=\"container\">
          <div class=\"row\">
      <div class=\"box-head\"> 
      
      <div class=\"box-heading\">";
            // line 417
            echo ($context["text_related"] ?? null);
            echo "</div>
      
      </div>
      <div class=\"box-content\">
      <div id=\"products-related\" class=\"related-products\">
      
      ";
            // line 423
            $context["sliderFor"] = 5;
            // line 424
            echo "      ";
            $context["productCount"] = twig_length_filter($this->env, ($context["products"] ?? null));
            echo " 
      
      ";
            // line 426
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                // line 427
                echo "       <div class=\"customNavigation\">
         <a class=\"fa prev fa-arrow-left\">&nbsp;</a>
         <a class=\"fa next fa-arrow-right\">&nbsp;</a>
       </div>  
      ";
            }
            // line 432
            echo "      
      <div class=\"box-product ";
            // line 433
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "product-carousel";
            } else {
                echo "productbox-grid";
            }
            echo "\" id=\"";
            if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                echo "related-carousel";
            } else {
                echo "related-grid";
            }
            echo "\">
         ";
            // line 434
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 435
                echo "      <div class=\"";
                if ((($context["productCount"] ?? null) >= ($context["sliderFor"] ?? null))) {
                    echo "slider-item";
                } else {
                    echo "product-items";
                }
                echo "\">
        <div class=\"product-block product-thumb transition\">
           <div class=\"product-block-inner\">     
      <div class=\"image ";
                // line 438
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 438) == 0)) {
                    echo "outstock";
                }
                echo "\">
      ";
                // line 439
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 439)) {
                    // line 440
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 440);
                    echo "\">
      <img src=\"";
                    // line 441
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 441);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 441);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 441);
                    echo "\" class=\"img-responsive reg-image\"/>
      <div class=\"image_content\"><img class=\"img-responsive hover-image\" src=\"";
                    // line 442
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 442);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 442);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 442);
                    echo "\"/>
      </div>
      </a>
      ";
                } else {
                    // line 446
                    echo "      <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 446);
                    echo "\">
      <img src=\"";
                    // line 447
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 447);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 447);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 447);
                    echo "\" class=\"img-responsive\"/></a>
      ";
                }
                // line 449
                echo "      
      ";
                // line 450
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 450)) {
                    // line 451
                    echo "      <span class=\"special-tag\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percentsaving", [], "any", false, false, false, 451);
                    echo "%</span>
      ";
                }
                // line 453
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 453) == 0)) {
                    // line 454
                    echo "             <span class=\"stock_status\">";
                    echo ($context["text_outstock"] ?? null);
                    echo "</span>
           ";
                }
                // line 456
                echo "       <div class=\"countdown\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 457
                if (twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 457)) {
                    // line 458
                    echo "\t\t\t\t\t\t\t\t\t\t\t <div class=\"count-down clock\">
\t\t\t\t\t\t\t\t\t\t\t<div data-countdown=\"";
                    // line 459
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "specialTime", [], "any", false, false, false, 459);
                    echo "\" class=\"countbox hastime\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 462
                echo "\t\t\t\t\t\t\t\t\t\t</div>\t
      
      </div>
      <div class=\"product-details\">
      <div class=\"caption\">
      
      
           ";
                // line 469
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 469)) {
                    // line 470
                    echo "            <div class=\"rating\">
            ";
                    // line 471
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 472
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 472) < $context["i"])) {
                            // line 473
                            echo "            <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
            ";
                        } else {
                            // line 475
                            echo "            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                        }
                        // line 477
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 478
                    echo "            ";
                    // line 479
                    echo "            </div>
           ";
                }
                // line 481
                echo "            ";
                // line 482
                echo "      
            <h4><a href=\"";
                // line 483
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 483);
                echo " \">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 483);
                echo " </a></h4>
            ";
                // line 484
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 484)) {
                    // line 485
                    echo "            <p class=\"price\">
            ";
                    // line 486
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 486)) {
                        // line 487
                        echo "            ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 487);
                        echo "
            ";
                    } else {
                        // line 489
                        echo "            <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 489);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 489);
                        echo "</span>
            ";
                    }
                    // line 491
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 491)) {
                        // line 492
                        echo "            <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 492);
                        echo "</span>
            ";
                    }
                    // line 494
                    echo "            </p>
            ";
                }
                // line 496
                echo "            
           <div class=\"product_hover_block\">
\t\t\t\t\t\t\t\t\t\t\t
            <div class=\"product_hover_block_inner\">
              <button class=\"wishlist\" type=\"button\"  title=\"";
                // line 500
                echo ($context["button_wishlist"] ?? null);
                echo " \" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 500);
                echo " ');\"></button>
              <button class=\"compare_button\" type=\"button\"  title=\"";
                // line 501
                echo ($context["button_compare"] ?? null);
                echo " \" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 501);
                echo " ');\"></button>
              <div class=\"quickview-button\">
              <a class=\"quickbox\"  title=\"";
                // line 503
                echo ($context["button_quickview"] ?? null);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quick", [], "any", false, false, false, 503);
                echo "\"></a>
            </div>
            
          </div>
          <div class=\"action\">
            ";
                // line 508
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 508) > 0)) {
                    // line 509
                    echo "                <button type=\"button\" class=\"cart_button\" onclick=\"cart.add('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 509);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\" >";
                    echo ($context["button_cart"] ?? null);
                    echo "</button>
                ";
                } else {
                    // line 511
                    echo "                <button type=\"button\" class=\"cart_button out_of_stock\" title=\"";
                    echo ($context["text_outstock"] ?? null);
                    echo "\" >";
                    echo ($context["text_outstock"] ?? null);
                    echo "</button>
            ";
                }
                // line 513
                echo "            </div></div>
          
      
           
      </div>                  
      </div>
      </div>
       </div>
      </div>
      
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            echo "      </div>
      <span class=\"related_default_width\" style=\"display:none; visibility:hidden\"></span>
      </div>
      </div>
      </div>
      </div>
      </div>
      ";
        }
        // line 532
        echo "    </div>
  </div>
<script type=\"text/javascript\">
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
  \$.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
    dataType: 'json',
    beforeSend: function() {
      \$('#recurring-description').html('');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();

      if (json['success']) {
        \$('#recurring-description').html(json['success']);
      }
    }
  });
});
</script> 
<script type=\"text/javascript\">
\$('#button-cart').on('click', function() {
  \$.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
    dataType: 'json',
    beforeSend: function() {
      \$('#button-cart').button('loading');
    },
    complete: function() {
      \$('#button-cart').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = \$('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            } else {
              element.before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        \$('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        \$.notify({
          message: json['success'],
          target: '_blank'
        },{
          // settings
          element: 'body',
          position: null,
          type: \"info\",
          allow_dismiss: true,
          newest_on_top: false,
          placement: {
            from: \"top\",
            align: \"center\"
          },
          offset: 0,
          spacing: 10,
          z_index: 2031,
          delay: 5000,
          timer: 1000,
          url_target: '_blank',
          mouse_over: null,
          animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
          },
          onShow: null,
          onShown: null,
          onClose: null,
          onClosed: null,
          icon_type: 'class',
          template: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
            '<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&nbsp;&times;</button>' +
            '<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
            '<div class=\"progress\" data-notify=\"progressbar\">' +
              '<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
            '</div>' +
            '<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
          '</div>' 
        });

        \$('#cart > button').html('<div class=\"cart_detail\"><div class=\"cart_image\"></div><span id=\"cart-total\"> ' + json['total'] + '</span>'  + '</div>');

        //\$('html, body').animate({ scrollTop: 0 }, 'slow');

        \$('#cart > ul').load('index.php?route=common/cart/info ul li');
      }
    },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
  });
});
</script> 
<script type=\"text/javascript\">
\$('.date').datetimepicker({
  language: '";
        // line 648
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 653
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});

\$('.time').datetimepicker({
  language: '";
        // line 659
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).button('loading');
        },
        complete: function() {
          \$(node).button('reset');
        },
        success: function(json) {
          \$('.text-danger').remove();

          if (json['error']) {
            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            \$(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  }, 500);
});
</script> 
<script type=\"text/javascript\">
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 726
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
  \$.ajax({
    url: 'index.php?route=product/product/write&product_id=";
        // line 730
        echo ($context["product_id"] ?? null);
        echo "',
    type: 'post',
    dataType: 'json',
    data: \$(\"#form-review\").serialize(),
    beforeSend: function() {
      \$('#button-review').button('loading');
    },
    complete: function() {
      \$('#button-review').button('reset');
    },
    success: function(json) {
      \$('.alert-dismissible').remove();

      if (json['error']) {
        \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

        \$('input[name=\\'name\\']').val('');
        \$('textarea[name=\\'text\\']').val('');
        \$('input[name=\\'rating\\']:checked').prop('checked', false);
      }
    }
  });
});

//\$(document).ready(function() {
//  \$('.thumbnails').magnificPopup({
//    type:'image',
//    delegate: 'a',
//    gallery: {
//      enabled: true
//    }
//  });
//});


\$(document).ready(function() {
  var ramswaroop = new URLSearchParams(window.location.search);
  var tarun = ramswaroop.has('review');
  if (tarun == true) {
    setTimeout(function(){ 
      \$('html, body').animate({scrollTop: \$('#tabs_info').offset().top}, 'slow'); 
      \$('a[href=\\'#tab-review\\']').trigger('click');
    }, 1000);
    return false;
  }
});

\$(document).ready(function() {
if (\$(window).width() > 767) {
    \$(\"#tmzoom\").elevateZoom({
        
        gallery:'additional-carousel',
        //inner zoom         
                 
        zoomType : \"inner\", 
        cursor: \"crosshair\" 
        
        /*//tint
        
        tint:true, 
        tintColour:'#F90', 
        tintOpacity:0.5
        
        //lens zoom
        
        zoomType : \"lens\", 
        lensShape : \"round\", 
        lensSize : 200 
        
        //Mousewheel zoom
        
        scrollZoom : true*/
        
        
      });
    var z_index = 0;
                  
                  \$(document).on('click', '.thumbnail', function () {
                    \$('.thumbnails').magnificPopup('open', z_index);
                    return false;
                  });
              
                  \$('.additional-carousel a').click(function() {
                    var smallImage = \$(this).attr('data-image');
                    var largeImage = \$(this).attr('data-zoom-image');
                    var ez =   \$('#tmzoom').data('elevateZoom');  
                    \$('.thumbnail').attr('href', largeImage);  
                    ez.swaptheimage(smallImage, largeImage); 
                    z_index = \$(this).index('.additional-carousel a');
                    return false;
                  });
      
  }else{
    \$(document).on('click', '.thumbnail', function () {
    \$('.thumbnails').magnificPopup('open', 0);
    return false;
    });
  }
});
\$(document).ready(function() {     
  \$('.thumbnails').magnificPopup({
    delegate: 'a.elevatezoom-gallery',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-with-zoom',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title');
      }
    }
  });
});

\$('#custom_tab a').tabs();
 \$('#tabs a').tabs();

</script>
<!--for product quantity plus minus-->
<script type=\"text/javascript\">
    //plugin bootstrap minus and plus
    \$(document).ready(function() {
    \$('.btn-number').click(function(e){
    e.preventDefault();
    var fieldName = \$(this).attr('data-field');
    var type = \$(this).attr('data-type');
    var input = \$(\"input[name='\" + fieldName + \"']\");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
    if (type == 'minus') {
    var minValue = parseInt(input.attr('min'));
    if (!minValue) minValue = 1;
    if (currentVal > minValue) {
    input.val(currentVal - 1).change();
    }
    if (parseInt(input.val()) == minValue) {
    \$(this).attr('disabled', true);
    }

    } else if (type == 'plus') {
    var maxValue = parseInt(input.attr('max'));
    if (!maxValue) maxValue = 999;
    if (currentVal < maxValue) {
    input.val(currentVal + 1).change();
    }
    if (parseInt(input.val()) == maxValue) {
    \$(this).attr('disabled', true);
    }

    }
    } else {
    input.val(0);
    }
    });
    \$('.input-number').focusin(function(){
    \$(this).data('oldValue', \$(this).val());
    });
    \$('.input-number').change(function() {

    var minValue = parseInt(\$(this).attr('min'));
    var maxValue = parseInt(\$(this).attr('max'));
    if (!minValue) minValue = 1;
    if (!maxValue) maxValue = 999;
    var valueCurrent = parseInt(\$(this).val());
    var name = \$(this).attr('name');
    if (valueCurrent >= minValue) {
    \$(\".btn-number[data-type='minus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the minimum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
    \$(\".btn-number[data-type='plus'][data-field='\" + name + \"']\").removeAttr('disabled')
    } else {
    alert('Sorry, the maximum value was reached');
    \$(this).val(\$(this).data('oldValue'));
    }
    });
    \$(\".input-number\").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||
            // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
            }
            });
    });
</script>


";
        // line 936
        if ((array_key_exists("update_price_status", $context) && ($context["update_price_status"] ?? null))) {
            // line 937
            echo "          
          <script type=\"text/javascript\">
          
            \$(\"#product input[type='checkbox']\").click(function() {
              changePrice();
            });
            
            \$(\"#product input[type='radio']\").click(function() {
              changePrice();
            });
            
            \$(\"#product select\").change(function() {
              changePrice();
            });
            
            \$(\"#input-quantity\").keyup(function() {
              changePrice();
            });
            
            function changePrice() {
              \$.ajax({
                url: 'index.php?route=product/product/updatePrice&product_id=";
            // line 958
            echo ($context["product_id"] ?? null);
            echo "',
                type: 'post',
                dataType: 'json',
                data: \$('#product input[name=\\'quantity\\'], #product select, #product input[type=\\'checkbox\\']:checked, #product input[type=\\'radio\\']:checked'),
                beforeSend: function() {
                  
                },
                complete: function() {
                  
                },
                success: function(json) {
                  \$('.alert-success, .alert-danger').remove();
                  
                  if(json['new_price_found']) {
                    \$('.new-prices').html(json['total_price']);
                    \$('.product-tax').html(json['tax_price']);
                  } else {
                    \$('.old-prices').html(json['total_price']);
                    \$('.product-tax').html(json['tax_price']);
                  }
                }
              });
            }
          </script>
          
        ";
        }
        // line 984
        echo " 
";
        // line 985
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/product/product.twig";
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
        return array (  2058 => 985,  2055 => 984,  2026 => 958,  2003 => 937,  2001 => 936,  1792 => 730,  1785 => 726,  1715 => 659,  1706 => 653,  1698 => 648,  1580 => 532,  1570 => 524,  1554 => 513,  1546 => 511,  1536 => 509,  1534 => 508,  1524 => 503,  1517 => 501,  1511 => 500,  1505 => 496,  1501 => 494,  1493 => 492,  1490 => 491,  1482 => 489,  1476 => 487,  1474 => 486,  1471 => 485,  1469 => 484,  1463 => 483,  1460 => 482,  1458 => 481,  1454 => 479,  1452 => 478,  1446 => 477,  1442 => 475,  1438 => 473,  1435 => 472,  1431 => 471,  1428 => 470,  1426 => 469,  1417 => 462,  1411 => 459,  1408 => 458,  1406 => 457,  1403 => 456,  1397 => 454,  1394 => 453,  1388 => 451,  1386 => 450,  1383 => 449,  1374 => 447,  1369 => 446,  1358 => 442,  1350 => 441,  1345 => 440,  1343 => 439,  1337 => 438,  1326 => 435,  1322 => 434,  1308 => 433,  1305 => 432,  1298 => 427,  1296 => 426,  1290 => 424,  1288 => 423,  1279 => 417,  1272 => 412,  1269 => 411,  1264 => 408,  1258 => 406,  1249 => 402,  1243 => 399,  1238 => 397,  1225 => 387,  1221 => 386,  1213 => 381,  1208 => 379,  1200 => 374,  1196 => 373,  1192 => 371,  1190 => 370,  1186 => 369,  1181 => 366,  1179 => 365,  1175 => 363,  1169 => 361,  1167 => 360,  1161 => 356,  1156 => 353,  1149 => 351,  1140 => 348,  1136 => 347,  1133 => 346,  1129 => 345,  1122 => 341,  1118 => 339,  1114 => 338,  1110 => 336,  1108 => 335,  1104 => 334,  1100 => 332,  1094 => 330,  1092 => 329,  1088 => 328,  1082 => 326,  1079 => 325,  1076 => 324,  1073 => 323,  1070 => 322,  1067 => 321,  1064 => 320,  1062 => 319,  1056 => 316,  1049 => 313,  1040 => 311,  1033 => 310,  1023 => 309,  1019 => 308,  1014 => 307,  1012 => 306,  1007 => 303,  999 => 296,  992 => 292,  984 => 286,  978 => 284,  976 => 283,  965 => 279,  957 => 278,  953 => 276,  945 => 274,  938 => 272,  932 => 269,  927 => 268,  921 => 264,  918 => 263,  912 => 259,  901 => 257,  897 => 256,  893 => 255,  887 => 252,  884 => 251,  881 => 250,  878 => 249,  872 => 248,  859 => 242,  852 => 240,  845 => 239,  842 => 238,  829 => 232,  822 => 230,  815 => 229,  812 => 228,  799 => 222,  792 => 220,  785 => 219,  782 => 218,  774 => 215,  766 => 214,  762 => 213,  755 => 212,  752 => 211,  740 => 208,  734 => 207,  727 => 206,  724 => 205,  712 => 202,  706 => 201,  699 => 200,  696 => 199,  691 => 196,  683 => 194,  676 => 193,  674 => 192,  669 => 191,  653 => 190,  647 => 189,  643 => 187,  637 => 186,  633 => 185,  626 => 184,  623 => 183,  618 => 180,  610 => 178,  603 => 177,  601 => 176,  597 => 175,  579 => 174,  573 => 173,  569 => 171,  563 => 170,  559 => 169,  552 => 168,  549 => 167,  544 => 164,  537 => 162,  530 => 161,  528 => 160,  521 => 159,  517 => 158,  513 => 157,  507 => 156,  501 => 155,  494 => 154,  491 => 153,  487 => 152,  482 => 151,  480 => 150,  477 => 149,  473 => 147,  470 => 146,  459 => 144,  455 => 143,  452 => 142,  449 => 141,  441 => 139,  438 => 138,  430 => 136,  427 => 135,  421 => 132,  417 => 131,  412 => 130,  406 => 127,  403 => 126,  401 => 125,  398 => 124,  396 => 123,  391 => 120,  385 => 117,  382 => 116,  380 => 115,  377 => 114,  369 => 112,  367 => 111,  363 => 109,  358 => 107,  353 => 106,  350 => 105,  344 => 103,  341 => 102,  333 => 100,  331 => 99,  324 => 98,  314 => 96,  312 => 95,  307 => 92,  301 => 89,  296 => 88,  290 => 87,  286 => 85,  282 => 83,  279 => 82,  275 => 81,  272 => 80,  270 => 79,  266 => 78,  260 => 75,  257 => 74,  254 => 73,  251 => 72,  248 => 71,  245 => 70,  243 => 69,  239 => 67,  232 => 62,  225 => 58,  203 => 55,  199 => 53,  195 => 52,  176 => 48,  167 => 44,  164 => 43,  157 => 39,  155 => 38,  148 => 35,  145 => 34,  142 => 33,  127 => 31,  122 => 29,  119 => 28,  117 => 27,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  100 => 21,  97 => 20,  95 => 19,  91 => 18,  88 => 17,  77 => 15,  73 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/product/product.twig", "");
    }
}
