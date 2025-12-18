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

/* Crazy/template/common/header.twig */
class __TwigTemplate_f6188e04602e6bc14296b3683c7dc1ad extends Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.countdown.min.js\"></script>
<script src=\"catalog/view/javascript/jquery.countdown.js\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" /> 
<link href=\"catalog/view/theme/";
        // line 26
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/stylesheet.css\" rel=\"stylesheet\" />
<link href=\"https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i\" rel=\"stylesheet\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 30
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/lightbox.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 31
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 32
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/custom.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 33
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/bootstrap.min.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 34
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/animate.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 35
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/category-list.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 36
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/newsletter.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
        // line 37
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/megamenu.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/owl-carousel/owl.carousel.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/owl-carousel/owl.transitions.css\" />
 <link rel=stylesheet href=\"catalog/view/theme/";
        // line 40
        echo ($context["mytemplate"] ?? null);
        echo "/stylesheet/webdigify/jquery.fancybox.css\" type=\"text/css\"/>
";
        // line 41
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 42
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/";
            echo ($context["mytemplate"] ?? null);
            echo "/stylesheet/webdigify/rtl.css\">
";
        }
        // line 44
        echo "<link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp\">
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 47
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 47);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 47);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 47);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 50
            echo "<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 53
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 53);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 53);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 56
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "<!-- webdigify www.webdigify.com - Start -->
<script src=\"catalog/view/javascript/webdigify/custom.js\"></script>
<script src=\"catalog/view/javascript/webdigify/parallax.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jstree.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/carousel.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/webdigify.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/backgroundVideo.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.custom.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.formalize.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.elevatezoom.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/bootstrap-notify.min.js\"></script>  
<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/tabs.js\"></script>
<script src=\"catalog/view/javascript/webdigify/jquery.hoverdir.js\"></script>
<script src=\"catalog/view/javascript/webdigify/modernizr.js\"></script>
<script src=\"catalog/view/javascript/lightbox/lightbox-2.6.min.js\"></script>
<script src=\"catalog/view/javascript/webdigify/inview.js\"></script>
<script src=\"catalog/view/javascript/webdigify/megamenu.js\"></script>
<script src=\"catalog/view/javascript/webdigify/backgroundVideo.js\"></script>
 <script src=\"catalog/view/javascript/webdigify/jquery.fancybox.js\"></script>

<!-- ======= Quick view JS ========= -->
<script> 

function quickbox(){
 if (\$(window).width() > 767) {
    \$('.quickview-button').magnificPopup({
      type:'iframe',
      delegate: 'a',
      preloader: true,
      tLoading: 'Loading image #%curr%...',
    });
 }  
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});

\$(document).ready(function(){
\t\t\t\$('.category_list ul').owlCarousel({
\t\t\t\t\titems: 4,
\t\t\t\t\tautoPlay: false,
\t\t\t\t\tsingleItem: false,
\t\t\t\t\tnavigation: true,
\t\t\t\t\tnavigationText: ['<i class=\"fa fa-chevron-left fa-5x\"></i>', '<i class=\"fa fa-chevron-right fa-5x\"></i>'],
\t\t\t\t\tpagination: false,
\t\t\t\t\titemsDesktop : [1259,4],
\t\t\t\t\titemsDesktopSmall:[1199,3],
\t\t\t\t\titemsTablet :\t[767,3],
\t\t\t\t\titemsTabletSmall : [543, 2],
\t\t\t\t\titemsMobile: [379, 1]
\t\t\t\t});
\t\t\t});

</script>

<!-- webdigify www.templatemela.com - End -->

<script src=\"catalog/view/javascript/common.js\"></script>

</head>

";
        // line 119
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 120
            $context["layoutclass"] = "layout-3";
        } elseif ((        // line 121
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 122
            if (($context["column_left"] ?? null)) {
                // line 123
                $context["layoutclass"] = "layout-2 left-col";
            } elseif (            // line 124
($context["column_right"] ?? null)) {
                // line 125
                $context["layoutclass"] = "layout-2 right-col";
            }
        } else {
            // line 128
            $context["layoutclass"] = "layout-1";
        }
        // line 130
        echo "
<body class=\"";
        // line 131
        echo ($context["class"] ?? null);
        echo " ";
        echo " ";
        echo " ";
        echo ($context["layoutclass"] ?? null);
        echo "\">
<header>
 <nav class=\"header_nav\">
  <div class=\"container\">
    <div class=\"row\">
    <div class=\"left-nav\"> 
      ";
        // line 137
        echo ($context["headernav"] ?? null);
        echo "

    </div>
    <div class=\"right-nav\">
      <li class=\"lang-curr-wrapper\">
        ";
        // line 142
        echo ($context["language"] ?? null);
        echo "
        ";
        // line 143
        echo ($context["currency"] ?? null);
        echo "
      </li>
    </div></div>
    </div>
</nav>
  <div class=\"header_top\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"header_top_inner\">
      <div class=\"col-sm-4 header-logo\">
        <div id=\"logo\">";
        // line 153
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 154
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 156
        echo "        </div>
      </div>  
      ";
        // line 158
        echo ($context["headertop"] ?? null);
        echo "
      
      <div class=\"nav2\">   
    
        <div class=\"col-sm-3 header_cart\">";
        // line 162
        echo ($context["cart"] ?? null);
        echo "</div>
        <div class=\"account\">     
          <div class=\"dropdown myaccount\">
            <a href=\"";
        // line 165
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            <span class=\"account_title\">";
        // line 166
        echo ($context["text_account"] ?? null);
        echo "</span> 
            <span class=\"account_text\">";
        // line 167
        echo ($context["text_account_subtitle"] ?? null);
        echo "</span>
            <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-right myaccount-menu\">
            <span class=\"drop_account\">
            <div class=\"login_acc\">
            ";
        // line 172
        if (($context["logged"] ?? null)) {
            // line 173
            echo "              <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\" title=\"";
            echo ($context["text_account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 174
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><span class=\"checkout\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
              <li><a class=\"account_logout1\" href=\"";
            // line 175
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
              ";
        } else {
            // line 177
            echo "                <li><a class=\"login\" href=\"";
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
              <li><a class=\"reg\" href=\"";
            // line 178
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 179
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><span class=\"checkout\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
           
            ";
        }
        // line 182
        echo "            <div class=\"compare\"><a href=\"";
        echo ($context["compare"] ?? null);
        echo "\" id=\"compare-total\" title=\"";
        echo ($context["text_compare"] ?? null);
        echo "\">";
        echo ($context["text_compare"] ?? null);
        echo "</a></div>
            </div>\t
            
              </span>      
             </ul>
            </div>
          </div>
          <div class=\"header_wishlist\"><a href=\"";
        // line 189
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></div>
      </div>
    </div>
    </div>
  </div>
</div>
      <div class=\"header_bottom\">
        <div class=\"container\">
          <div class=\"row\">
              ";
        // line 198
        echo ($context["headerbottom"] ?? null);
        echo "
            <div class=\"col-sm-5 header_search\">";
        // line 199
        echo ($context["search"] ?? null);
        echo "</div>
          </div>
        </div>
      </div>
  <div class=\"mobile-search\">
        <div class=\"container\">
          <div class=\"row\">
          </div>
        </div>
  </div>
    <!-- <div id=\"_desktop_contact_link\"></div> -->

</div>

</header>
<div class=\"content-top-breadcum\">
<div class=\"container\">
</div>
</div>



";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/common/header.twig";
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
        return array (  471 => 199,  467 => 198,  453 => 189,  438 => 182,  428 => 179,  422 => 178,  415 => 177,  408 => 175,  400 => 174,  391 => 173,  389 => 172,  381 => 167,  377 => 166,  371 => 165,  365 => 162,  358 => 158,  354 => 156,  346 => 154,  334 => 153,  321 => 143,  317 => 142,  309 => 137,  296 => 131,  293 => 130,  290 => 128,  286 => 125,  284 => 124,  282 => 123,  280 => 122,  278 => 121,  276 => 120,  274 => 119,  211 => 58,  203 => 56,  199 => 55,  188 => 53,  184 => 52,  175 => 50,  171 => 49,  158 => 47,  154 => 46,  150 => 44,  144 => 42,  142 => 41,  138 => 40,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  97 => 26,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/common/header.twig", "");
    }
}
