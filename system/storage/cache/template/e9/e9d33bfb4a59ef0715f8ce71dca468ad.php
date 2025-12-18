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

/* Crazy/template/product/quick_view.twig */
class __TwigTemplate_0df59494bee10be4a3d8c028e1681686 extends Template
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
<div class=\"quickview-model\">
<div class=\"quickview-container\">
  
  
    <div id=\"content\" class=\"productpage-quickview\">";
        // line 6
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"\">
        <h2 class=\"page-title\">";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h2>
\t\t        
\t\t<div class=\"col-sm-6 product-left\">
\t\t<div class=\"product-info\">
         ";
        // line 12
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 13
            echo "    <div class=\"left product-image thumbnails\">
      ";
            // line 14
            if (($context["thumb"] ?? null)) {
                // line 15
                echo "\t  <!-- Webdigify Cloud-Zoom Image Effect Start -->
\t  \t<div class=\"image\"><a class=\"thumbnail\" title=\"";
                // line 16
                echo ($context["heading_title"] ?? null);
                echo "\"><img id=\"wdzoom\" src=\"";
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
            // line 18
            echo "      ";
            if (($context["images"] ?? null)) {
                echo " 
\t\t";
                // line 19
                $context["sliderFor"] = 3;
                // line 20
                echo "\t\t";
                $context["imageCount"] = twig_length_filter($this->env, ($context["images"] ?? null));
                echo "\t\t\t 
\t  ";
            }
            // line 21
            echo "\t\t  \t  
  

\t<!-- Webdigify Cloud-Zoom Image Effect End-->
    </div>
    ";
        }
        // line 27
        echo "\t\t
\t</div>
        </div>

        <div class=\"col-sm-6 product-right\">
          <h3 class=\"product-title\">";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "</h3>

\t\t  
\t\t  ";
        // line 35
        if (($context["review_status"] ?? null)) {
            // line 36
            echo "          <div class=\"rating-wrapper\">            
              ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 39
                    echo "\t\t\t   <span class=\"fa fa-stack\"><i class=\"fa fa-star off fa-stack-2x\"></i></span>
\t\t\t  ";
                } else {
                    // line 41
                    echo "\t\t\t   <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t  ";
                }
                // line 43
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t  </div>
          ";
        }
        // line 46
        echo "\t\t  
          <ul class=\"list-unstyled short-desc\">
            ";
        // line 48
        if (($context["manufacturer"] ?? null)) {
            // line 49
            echo "            <li><span class=\"desc\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 51
        echo "            <li><span class=\"desc\">";
        echo ($context["text_model"] ?? null);
        echo "</span>";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 52
        if (($context["reward"] ?? null)) {
            // line 53
            echo "            <li><span class=\"desc\">";
            echo ($context["text_reward"] ?? null);
            echo "</span>";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 55
        echo "            <li><span class=\"desc\">";
        echo ($context["text_stock"] ?? null);
        echo "</span>";
        echo ($context["stock"] ?? null);
        echo "</li>
          </ul>
\t\t  
\t\t  
\t\t ";
        // line 59
        if (($context["price"] ?? null)) {
            // line 60
            echo "          <ul class=\"list-unstyled\">
            ";
            // line 61
            if ( !($context["special"] ?? null)) {
                // line 62
                echo "            <li>
              <h4 class=\"special-price\">";
                // line 63
                echo ($context["price"] ?? null);
                echo "</h4>
            </li>
            ";
            } else {
                // line 66
                echo "            <li><h4 class=\"special-price\">";
                echo ($context["special"] ?? null);
                echo "</h4>
              <span class=\"old-price\" style=\"text-decoration: line-through;\">";
                // line 67
                echo ($context["price"] ?? null);
                echo "</span>
            </li>
            ";
            }
            // line 70
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 71
                echo "            <li class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</li>
            ";
            }
            // line 73
            echo "            ";
            if (($context["points"] ?? null)) {
                // line 74
                echo "            <li class=\"rewardpoint\">";
                echo ($context["text_points"] ?? null);
                echo " ";
                echo ($context["points"] ?? null);
                echo "</li>
            ";
            }
            // line 76
            echo "            ";
            if (($context["discounts"] ?? null)) {
                // line 77
                echo "           
            ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 79
                    echo "            <li class=\"discount\">";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 79);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 79);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "            ";
            }
            // line 82
            echo "          </ul>
          ";
        }
        // line 84
        echo "         
          <div id=\"product2\">
           ";
        // line 86
        if (($context["options"] ?? null)) {
            // line 87
            echo "            <hr>
            <h3>";
            // line 88
            echo ($context["text_option"] ?? null);
            echo "</h3>
            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 90
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 90) == "select")) {
                    // line 91
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 91)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 92
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 92);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 92);
                    echo "</label>
              <select name=\"option[";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 93);
                    echo "]\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 93);
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 94
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                ";
                    // line 95
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 95));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 96
                        echo "                <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 96);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 96);
                        echo "
                ";
                        // line 97
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 97)) {
                            // line 98
                            echo "                (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 98);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 98);
                            echo ")
                ";
                        }
                        // line 99
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 101
                    echo "              </select>
            </div>
            ";
                }
                // line 104
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 104) == "radio")) {
                    // line 105
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 105)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 106);
                    echo "</label>
              <div id=\"input-option";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 107);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 107));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 108
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 110
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 110);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 110);
                        echo "\" />
                    ";
                        // line 111
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 111)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 111);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 111);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 111)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 111);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 111);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 112
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 112);
                        echo "
                    ";
                        // line 113
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 113)) {
                            // line 114
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 114);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 114);
                            echo ")
                    ";
                        }
                        // line 115
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 117
                    echo " </div>
            </div>
            ";
                }
                // line 120
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 120) == "checkbox")) {
                    // line 121
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 121)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 122
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 122);
                    echo "</label>
              <div id=\"input-option";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 123);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 123));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 124
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 126
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 126);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 126);
                        echo "\" />
                    ";
                        // line 127
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 127)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 127);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 127);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 127)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 127);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 127);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 128
                        echo "                    ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 128);
                        echo "
                    ";
                        // line 129
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 129)) {
                            // line 130
                            echo "                    (";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 130);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 130);
                            echo ")
                    ";
                        }
                        // line 131
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 133
                    echo " </div>
            </div>
            ";
                }
                // line 136
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 136) == "text")) {
                    // line 137
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 137)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 138);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 138);
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 139);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 139);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 139);
                    echo "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 142
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 142) == "textarea")) {
                    // line 143
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 143)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 144);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 144);
                    echo "</label>
              <textarea name=\"option[";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 145);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 145);
                    echo "</textarea>
            </div>
            ";
                }
                // line 148
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148) == "file")) {
                    // line 149
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 149)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 150);
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 151);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 152);
                    echo "\" />
            </div>
            ";
                }
                // line 155
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 155) == "date")) {
                    // line 156
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 156)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 157);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 157);
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 159
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 159);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 159);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 159);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 165
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 165) == "datetime")) {
                    // line 166
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 166)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 167);
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 169
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 169);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 169);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 175
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 175) == "time")) {
                    // line 176
                    echo "            <div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 176)) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 177);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 177);
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 179);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    echo "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 185
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "            ";
        }
        // line 187
        echo "            ";
        if (($context["recurrings"] ?? null)) {
            // line 188
            echo "            <hr>
            <h3>";
            // line 189
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 192
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 194
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 194);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 194);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 199
        echo "   
\t\t<div class=\"product-rightinfo\">\t 
\t\t\t<div class=\"form-group cart-block\">
\t\t\t\t";
        // line 202
        if ((($context["stock_qty"] ?? null) == "true")) {
            // line 203
            echo "              <div class=\"col-lg-3 col-md-12 col-sm-12 col-xs-12 op-box qty-plus-minus\">
                  <button type=\"button\" class=\"form-control pull-left btn-number btnminus\" disabled=\"disabled\" data-type=\"minus\" data-field=\"quantity\"></button>
                ";
            // line 206
            echo "                 <input id=\"input-quantity\" type=\"text\" name=\"quantity\" value=\"";
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control input-number pull-left\" />
                  <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 207
            echo ($context["product_id"] ?? null);
            echo "\" />
                   <button type=\"button\" class=\"form-control pull-left btn-number btnplus\" data-type=\"plus\" data-field=\"quantity\"></button>
                   </div>
\t\t\t  <div class=\"offer-btn\"> <button type=\"button\" id=\"button-cart2\" data-loading-text=\"";
            // line 210
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button></div>
              ";
        } else {
            // line 212
            echo "              <span style=\"color:#f00;\">";
            echo ($context["text_outstock"] ?? null);
            echo "</span>
              ";
        }
        // line 214
        echo "              <div class=\"btn-group prd_page\">

\t\t\t\t<div class=\"offer-btn\"><button type=\"button\" class=\"btn btn-default wishlist\" title=\"";
        // line 216
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_wishlist"] ?? null);
        echo "</button></div>
\t\t\t\t<div class=\"offer-btn\"><button type=\"button\" class=\"btn btn-default compare\" title=\"";
        // line 217
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\">";
        echo ($context["button_compare"] ?? null);
        echo "</button></div>
            </div> </div>
            ";
        // line 219
        if ((($context["minimum"] ?? null) > 1)) {
            // line 220
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 222
        echo "\t\t\t
\t\t  \t\t
\t\t</div>
\t\t</div>
\t\t<div class=\"content_product_block\">";
        // line 226
        echo ($context["productblock"] ?? null);
        echo " </div> \t
\t\t</div>
\t
\t\t</div>
\t\t</div>  
    
\t";
        // line 232
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
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
<script type=\"text/javascript\"><!--
\$('#button-cart2').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product2 input[type=\\'text\\'], #product2 input[type=\\'hidden\\'], #product2 input[type=\\'radio\\']:checked, #product2 input[type=\\'checkbox\\']:checked, #product2 select, #product2 textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart2').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart2').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.before('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\tif (json['success']) {
\t\t\t\tif (parent) {

\t\t\t\tparent.\$.notify({
\t\t\t\t\tmessage: json['success'],
\t\t\t\t\ttarget: '_blank'
\t\t\t\t},{
\t\t\t\t\t// settings
\t\t\t\t\telement: 'body',
\t\t\t\t\tposition: null,
\t\t\t\t\ttype: \"info\",
\t\t\t\t\tallow_dismiss: true,
\t\t\t\t\tnewest_on_top: false,
\t\t\t\t\tplacement: {
\t\t\t\t\t\tfrom: \"top\",
\t\t\t\t\t\talign: \"center\"
\t\t\t\t\t},
\t\t\t\t\toffset: 0,
\t\t\t\t\tspacing: 10,
\t\t\t\t\tz_index: 2031,
\t\t\t\t\tdelay: 5000,
\t\t\t\t\ttimer: 1000,
\t\t\t\t\turl_target: '_blank',
\t\t\t\t\tmouse_over: null,
\t\t\t\t\tanimate: {
\t\t\t\t\t\tenter: 'animated fadeInDown',
\t\t\t\t\t\texit: 'animated fadeOutUp'
\t\t\t\t\t},
\t\t\t\t\tonShow: null,
\t\t\t\t\tonShown: null,
\t\t\t\t\tonClose: null,
\t\t\t\t\tonClosed: null,
\t\t\t\t\ticon_type: 'class',
\t\t\t\t\ttemplate: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-success\" role=\"alert\">' +
\t\t\t\t\t\t'<button type=\"button\" aria-hidden=\"true\" class=\"close\" data-notify=\"dismiss\">&nbsp;&times;</button>' +
\t\t\t\t\t\t'<span data-notify=\"message\"><i class=\"fa fa-check-circle\"></i>&nbsp; {2}</span>' +
\t\t\t\t\t\t'<div class=\"progress\" data-notify=\"progressbar\">' +
\t\t\t\t\t\t\t'<div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>' +
\t\t\t\t\t\t'</div>' +
\t\t\t\t\t\t'<a href=\"{3}\" target=\"{4}\" data-notify=\"url\"></a>' +
\t\t\t\t\t'</div>' 
\t\t\t\t});

\t\t\t\t\tparent.\$('#cart > button').html('<div class=\"cart_detail\"><div class=\"cart_image\"></div><span id=\"cart-total\"> ' + json['total'] + '</span>'  + '</div>');

\t\t\t\tparent.\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t\t
\t\t\t\t} else {
\t\t\t\t\t
\t\t\t\t\t \$('#cart > button').html('<div class=\"cart_detail\"><div class=\"cart_image\"></div><span id=\"cart-total\"> ' + json['total'] + '</span>'  + '</div>');
\t\t\t\t\t
\t\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t\t
\t\t\t\t};
\t\t\t\t
\t\t\t\t

\t\t\t\t//\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t
      }
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
  e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 512
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 516
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-success, .alert-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

//\$(document).ready(function() {
//\t\$('.thumbnails').magnificPopup({
//\t\ttype:'image',
//\t\tdelegate: 'a',
//\t\tgallery: {
//\t\t\tenabled:true
//\t\t}
//\t});
//});


\$(document).ready(function() {
if (\$(window).width() > 767) {
\t\t\$(\"#wdzoom\").elevateZoom({
\t\t\t\t
\t\t\t\tgallery:'additional-carousel',
\t\t\t\t//inner zoom\t\t\t\t 
\t\t\t\t\t\t\t\t 
\t\t\t\tzoomType : \"inner\", 
\t\t\t\tcursor: \"crosshair\" 
\t\t\t\t
\t\t\t\t/*//tint
\t\t\t\t
\t\t\t\ttint:true, 
\t\t\t\ttintColour:'#F90', 
\t\t\t\ttintOpacity:0.5
\t\t\t\t
\t\t\t\t//lens zoom
\t\t\t\t
\t\t\t\tzoomType : \"lens\", 
\t\t\t\tlensShape : \"round\", 
\t\t\t\tlensSize : 200 
\t\t\t\t
\t\t\t\t//Mousewheel zoom
\t\t\t\t
\t\t\t\tscrollZoom : true*/
\t\t\t\t
\t\t\t\t
\t\t\t});
\t\tvar z_index = 0;
     \t\t\t    \t\t
     \t\t\t    \t\t\$(document).on('click', '.thumbnail', function () {
     \t\t\t    \t\t  \$('.thumbnails').magnificPopup('open', z_index);
     \t\t\t    \t\t  return false;
     \t\t\t    \t\t});
\t\t\t    \t\t
     \t\t\t    \t\t\$('.additional-carousel a').click(function() {
     \t\t\t    \t\t\tvar smallImage = \$(this).attr('data-image');
     \t\t\t    \t\t\tvar largeImage = \$(this).attr('data-zoom-image');
     \t\t\t    \t\t\tvar ez =   \$('#wdzoom').data('elevateZoom');\t
     \t\t\t    \t\t\t\$('.thumbnail').attr('href', largeImage);  
     \t\t\t    \t\t\tez.swaptheimage(smallImage, largeImage); 
     \t\t\t    \t\t\tz_index = \$(this).index('.additional-carousel a');
     \t\t\t    \t\t\treturn false;
     \t\t\t    \t\t});
\t\t\t
\t}else{
\t\t\$(document).on('click', '.thumbnail', function () {
\t\t\$('.thumbnails').magnificPopup('open', 0);
\t\treturn false;
\t\t});
\t}
});
\$(document).ready(function() {     
\t\$('.thumbnails').magnificPopup({
\t\tdelegate: 'a.elevatezoom-gallery',
\t\ttype: 'image',
\t\ttLoading: 'Loading image #%curr%...',
\t\tmainClass: 'mfp-with-zoom',
\t\tgallery: {
\t\t\tenabled: true,
\t\t\tnavigateByImgClick: true,
\t\t\tpreload: [0,1] // Will preload 0 - before current, and 1 after the current image
\t\t},
\t\timage: {
\t\t\ttError: '<a href=\"%url%\">The image #%curr%</a> could not be loaded.',
\t\t\ttitleSrc: function(item) {
\t\t\t\treturn item.el.attr('title');
\t\t\t}
\t\t}
\t});
});

\$('#tabs a').tabs();
\$('#custom_tab a').tabs();
\$('#top').remove();
\$('.top_button').remove();


//--></script>
";
        // line 634
        echo ($context["footer"] ?? null);
        echo "
<style>
nav, header {
    display: none !important;
}

footer {
    display: none;
}
.content-top-breadcum {
    display: none;
}
#powered {
    display: none;
}
#container {
    width: 850px;
}
.top_button { display:none !important; }

</style>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/product/quick_view.twig";
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
        return array (  1198 => 634,  1077 => 516,  1070 => 512,  787 => 232,  778 => 226,  772 => 222,  766 => 220,  764 => 219,  755 => 217,  747 => 216,  743 => 214,  737 => 212,  730 => 210,  724 => 207,  719 => 206,  715 => 203,  713 => 202,  708 => 199,  702 => 196,  691 => 194,  687 => 193,  683 => 192,  677 => 189,  674 => 188,  671 => 187,  668 => 186,  662 => 185,  649 => 179,  642 => 177,  635 => 176,  632 => 175,  619 => 169,  612 => 167,  605 => 166,  602 => 165,  589 => 159,  582 => 157,  575 => 156,  572 => 155,  564 => 152,  556 => 151,  552 => 150,  545 => 149,  542 => 148,  530 => 145,  524 => 144,  517 => 143,  514 => 142,  502 => 139,  496 => 138,  489 => 137,  486 => 136,  481 => 133,  473 => 131,  466 => 130,  464 => 129,  459 => 128,  443 => 127,  437 => 126,  433 => 124,  427 => 123,  423 => 122,  416 => 121,  413 => 120,  408 => 117,  400 => 115,  393 => 114,  391 => 113,  387 => 112,  369 => 111,  363 => 110,  359 => 108,  353 => 107,  349 => 106,  342 => 105,  339 => 104,  334 => 101,  327 => 99,  320 => 98,  318 => 97,  311 => 96,  307 => 95,  303 => 94,  297 => 93,  291 => 92,  284 => 91,  281 => 90,  277 => 89,  273 => 88,  270 => 87,  268 => 86,  264 => 84,  260 => 82,  257 => 81,  246 => 79,  242 => 78,  239 => 77,  236 => 76,  228 => 74,  225 => 73,  217 => 71,  214 => 70,  208 => 67,  203 => 66,  197 => 63,  194 => 62,  192 => 61,  189 => 60,  187 => 59,  177 => 55,  169 => 53,  167 => 52,  160 => 51,  150 => 49,  148 => 48,  144 => 46,  140 => 44,  134 => 43,  130 => 41,  126 => 39,  123 => 38,  119 => 37,  116 => 36,  114 => 35,  108 => 32,  101 => 27,  93 => 21,  87 => 20,  85 => 19,  80 => 18,  67 => 16,  64 => 15,  62 => 14,  59 => 13,  57 => 12,  50 => 8,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/product/quick_view.twig", "");
    }
}
