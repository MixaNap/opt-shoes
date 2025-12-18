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

/* Crazy/template/common/search.twig */
class __TwigTemplate_aed85d2aed3f1c554650f9f466dea051 extends Template
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
        echo "
<div id=\"search\" class=\"input-group\">
    <span class=\"search_button\"></span><span class=\"search-title\">";
        // line 3
        echo ($context["text_search_title"] ?? null);
        echo "</span>
\t\t";
        // line 30
        echo "<div class=\"search_toggle\">
    <div id=\"searchbox\">
        <input type=\"text\" name=\"search\" value=\"";
        // line 32
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg\" />
        <span class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\"></i>";
        // line 34
        echo ($context["button_search"] ?? null);
        echo "</button>
        </span>
    </div>
</div>
  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/common/search.twig";
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
        return array (  56 => 34,  49 => 32,  45 => 30,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/common/search.twig", "");
    }
}
