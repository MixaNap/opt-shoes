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

/* Crazy/template/extension/module/wdnewsletterpopup.twig */
class __TwigTemplate_835d6eede39a060870e9189ac3c827f7 extends Template
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
        echo "<div class=\"newletter-popup\">
<div class=\"ttpopupclose\"></div>
<div id=\"boxes\" class=\"newletter-container\">
 <div style=\"\" id=\"dialog\" class=\"window\">
\t<div id=\"popup2\">
\t\t<span class=\"b-close\"><i class=\"material-icons icon-close\">clear</i></span>
\t</div>
\t<div class=\"newslatter-img col-sm-12\">
\t ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 10
            echo "    <img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
            echo "\" class=\"img-responsive\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t<div class=\"newslatterpopup-details\">
\t\t<div class=\"newletter-title\"><h2>";
        // line 13
        echo ($context["heading_title1"] ?? null);
        echo "</h2></div>
\t\t<span>";
        // line 14
        echo ($context["entry_email1"] ?? null);
        echo "</span>
\t</div>
\t</div>
\t<div class=\"box col-sm-12\">
\t  <div class=\"box-content newleter-content\">
\t  <label>";
        // line 19
        echo ($context["newletter_lable"] ?? null);
        echo "</label>
\t\t  <div id=\"frm_subscribe\">
\t\t\t  <form name=\"subscribe\" id=\"subscribe_popup\">
\t\t\t\t   <div class=\"newslatterpopup-content\">
\t\t\t\t\t\t <div id=\"notification\"></div>
\t\t\t\t\t\t <input type=\"text\" value=\"\" name=\"subscribe_pemail\" id=\"subscribe_pemail\" placeholder=\"";
        // line 24
        echo ($context["entry_email"] ?? null);
        echo "\">
\t\t\t\t\t\t <input type=\"hidden\" value=\"\" name=\"subscribe_pname\" id=\"subscribe_pname\" />
\t\t\t\t\t\t 
\t\t\t\t\t\t <div class=\"popup-button\">
\t\t\t\t\t\t\t<a class=\"button btn btn-primary\" onclick=\"email_subscribepopup()\"><span>";
        // line 28
        echo ($context["popup_entry_button"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t";
        // line 29
        if (($context["option_unsubscribe"] ?? null)) {
            // line 30
            echo "\t\t\t\t\t\t\t<a class=\"button btn btn-primary\" onclick=\"email_unsubscribepopup()\"><span>";
            echo ($context["entry_unbutton"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t\t\t </div>
\t\t\t\t    </div>  
\t\t\t  </form>
\t\t\t  <div class=\"subscribe-bottom\">
\t\t\t\t\t<input type=\"checkbox\" id=\"newsletter_popup_dont_show_again\">
\t\t\t\t\t<label for=\"newsletter_popup_dont_show_again\">";
        // line 37
        echo ($context["entry_show_again"] ?? null);
        echo "</label>
\t\t\t  </div>
\t\t  </div><!-- /#frm_subscribe -->
\t  </div><!-- /.box-content -->
 \t</div>
 </div>\t

<script>
function email_subscribepopup(){
\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: 'index.php?route=extension/module/wdnewslettersubscribe/subscribepopup',
\t\t\tdataType: 'html',
            data:\$(\"#subscribe_popup\").serialize(),
\t\t\tsuccess: function (html) {
\t\t\t\t//\$.cookie('shownewsletter', '1');
\t\t\t\t\ttry {
\t\t\t\t\t
\t\t\t\t\t\teval(html);
\t\t\t\t\t
\t\t\t\t\t} catch (e) {
\t\t\t\t\t}
\t\t\t}}); 
\t
\t
}
function email_unsubscribepopup(){
\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: 'index.php?route=extension/module/wdnewslettersubscribe/unsubscribe',
\t\t\tdataType: 'html',
            data:\$(\"#subscribe_popup\").serialize(),
\t\t\tsuccess: function (html) {
\t\t\t\t\ttry {
\t\t\t
\t\t\t\t\t\teval(html);
\t\t\t\t\t
\t\t\t\t\t} catch (e) {
\t\t\t\t\t}
\t\t\t}}); 
\t\$('html, body').delay( 1500 ).animate({ scrollTop: 0 }, 'slow'); 
\t
}
</script>
<script>
    \$(document).ready(function() {

\t\tif(\$.cookie('shownewsletter')==1) \$('.newletter-popup').hide();
\t\t\$('#subscribe_pemail').keypress(function(e) {
            if(e.which == 13) {
                e.preventDefault();
                email_subscribepopup();
            }
\t\t\tvar name= \$(this).val();
\t\t  \t\$('#subscribe_pname').val(name);
        });
\t\t\$('#subscribe_pemail').change(function() {
\t\t var name= \$(this).val();
\t\t  \t\t\$('#subscribe_pname').val(name);
\t\t});


        //transition effect
        if(\$.cookie(\"shownewsletter\") != 1){
\t\t\t\$('.newletter-popup').bPopup();
      
        }
\t\t
\t\t
\t\t\$('#newsletter_popup_dont_show_again').on('change', function(){
\t\t\tif(\$.cookie(\"shownewsletter\") != 1){   
\t\t\t\t\$.cookie(\"shownewsletter\",'1')
\t\t\t}else{
\t\t\t\t\$.cookie(\"shownewsletter\",'0')
\t\t\t}
\t\t}); 
\t\t

    });
</script>

</div>
</div><!-- /.box -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/extension/module/wdnewsletterpopup.twig";
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
        return array (  109 => 37,  102 => 32,  96 => 30,  94 => 29,  90 => 28,  83 => 24,  75 => 19,  67 => 14,  63 => 13,  60 => 12,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/extension/module/wdnewsletterpopup.twig", "");
    }
}
