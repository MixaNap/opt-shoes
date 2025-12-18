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

/* Crazy/template/common/menu.twig */
class __TwigTemplate_4b850b845a862b7cdb8742bc00f7afdc extends Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<div class=\"menu-container\">
<div class=\"container\">
  <nav id=\"menu\" class=\"navbar\">
\t";
            // line 6
            echo "    <div class=\"navbar-header collapsed\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
\t\t<span id=\"category\" class=\"visible-xs\">";
            // line 7
            echo ($context["text_category"] ?? null);
            echo "</span>
     <!-- <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"material-icons\">dehaze</i></button>-->
    </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "        <li class=\"dropdown\">
\t\t\t<a href=\"";
                    // line 15
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                    echo "</a>
          <div class=\"dropdown-menu\">
          <div class=\"dropdown-inner\">
\t\t\t\t ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 18), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 19
                        echo "                 <ul class=\"list-unstyled childs_1 ";
                        if ((twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 19) <= 1)) {
                            echo " ";
                            echo "single-dropdown-menu";
                            echo " ";
                        } else {
                            echo " ";
                            echo "mega-dropdown-menu";
                            echo " ";
                        }
                        echo "\">
               
\t\t\t\t";
                        // line 21
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            echo "\t\t";
                            // line 22
                            echo "\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 22)) {
                                // line 23
                                echo "                <li class=\"dropdown\"><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 23);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 23);
                                echo "</a>

\t\t\t\t\t<div class=\"dropdown-menu\">
          \t\t\t<div class=\"dropdown-inner\">
 \t\t\t\t\t";
                                // line 27
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 27), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "childs", [], "any", false, false, false, 27)) / twig_round(twig_get_attribute($this->env, $this->source, $context["child"], "column", [], "any", false, false, false, 27), 1, "ceil"))));
                                foreach ($context['_seq'] as $context["_key"] => $context["childs_col"]) {
                                    // line 28
                                    echo "\t\t        \t <ul class=\"list-unstyled childs_2\">
\t\t\t\t\t\t";
                                    // line 29
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($context["childs_col"]);
                                    foreach ($context['_seq'] as $context["_key"] => $context["childs_2"]) {
                                        // line 30
                                        echo "\t\t\t\t\t\t  <li><a href=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "href", [], "any", false, false, false, 30);
                                        echo "\">";
                                        echo twig_get_attribute($this->env, $this->source, $context["childs_2"], "name", [], "any", false, false, false, 30);
                                        echo "</a></li>
\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_2'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 32
                                    echo "\t\t\t\t\t </ul>
\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childs_col'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 34
                                echo "\t\t\t\t\t </div>
\t\t\t\t\t </div>

\t\t\t\t</li>
\t\t\t\t";
                            } else {
                                // line 39
                                echo "\t\t\t\t\t<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 39);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 39);
                                echo "</a></li>
\t\t\t\t";
                            }
                            // line 40
                            echo "\t\t";
                            // line 41
                            echo "\t\t\t    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "\t\t\t</div>
\t\t\t</div>

\t\t\t</li>
\t\t";
                } else {
                    // line 49
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 49);
                    echo "\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49);
                    echo "</a></li>
\t\t";
                }
                // line 51
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t";
            if ((($context["blog_enable"] ?? null) == true)) {
                // line 53
                echo "\t\t\t\t<li> <a href=\"";
                echo ($context["all_blogs"] ?? null);
                echo "\">
\t\t\t\t<span data-hover=\"";
                // line 54
                echo ($context["text_blog"] ?? null);
                echo "\">";
                echo ($context["text_blog"] ?? null);
                echo "</span>
\t\t\t\t</a></li>       
\t\t";
            }
            // line 56
            echo "\t\t

      \t </ul>
      </div>
    </nav>
    </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/common/menu.twig";
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
        return array (  207 => 56,  199 => 54,  194 => 53,  191 => 52,  185 => 51,  175 => 49,  168 => 44,  161 => 42,  155 => 41,  153 => 40,  145 => 39,  138 => 34,  131 => 32,  120 => 30,  116 => 29,  113 => 28,  109 => 27,  99 => 23,  96 => 22,  91 => 21,  77 => 19,  73 => 18,  65 => 15,  62 => 14,  59 => 13,  55 => 12,  47 => 7,  44 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/common/menu.twig", "");
    }
}
