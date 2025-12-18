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

/* Crazy/template/extension/module/newsletters.twig */
class __TwigTemplate_714701eaa3473947fc9fe4d99ac000b2 extends Template
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
        echo "<script>
\t\tfunction subscribe()
\t\t{
\t\t\tvar emailpattern = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+\$/;
\t\t\tvar email = \$('#txtemail').val();
\t\t\tif(email != \"\")
\t\t\t{
\t\t\t\tif(!emailpattern.test(email))
\t\t\t\t{
\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\tvar str = '<span class=\"error\">Invalid Email</span>';
\t\t\t\t\t\$('#txtemail').after('<div class=\"text-danger\">Invalid Email</div>');

\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=extension/module/newsletters/news',
\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdata: 'email=' + \$('#txtemail').val(),
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t
\t\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t\t\$('#txtemail').after('<div class=\"text-danger\">' + json.message + '</div>');
\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\$('#txtemail').after('<div class=\"text-danger\">Email Is Require</div>');
\t\t\t\t\$(email).focus();

\t\t\t\treturn false;
\t\t\t}
\t\t\t

\t\t}
\t</script>

<div class=\"newsletter\">
\t<div class=\"news-left\">
\t\t<div class=\"news-title\">";
        // line 51
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t</div>
\t<div class=\"news-right\">
\t<div class=\"news-des\">";
        // line 54
        echo ($context["heading_subtitle"] ?? null);
        echo "</div>
\t<form method=\"post\">
\t\t<div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 57
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"input-news\">
              <input type=\"email\" name=\"txtemail\" id=\"txtemail\" value=\"\" placeholder=\"";
        // line 59
        echo ($context["entry_email"] ?? null);
        echo "\" class=\"form-control input-lg\"  />    
\t\t\t<button type=\"submit\" class=\"btn btn-default btn-lg\" onclick=\"return subscribe();\">";
        // line 60
        echo ($context["text_subscribe"] ?? null);
        echo "</button>  
            </div>
\t\t</div>
\t\t</form>
\t</div>
</div>


";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/extension/module/newsletters.twig";
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
        return array (  110 => 60,  106 => 59,  101 => 57,  95 => 54,  89 => 51,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/extension/module/newsletters.twig", "");
    }
}
