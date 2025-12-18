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

/* Crazy/template/extension/captcha/basic.twig */
class __TwigTemplate_8df5faab3015dcaa8b158745f9942699 extends Template
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
        echo "<fieldset>
  <legend>";
        // line 2
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
  <div class=\"form-group required\">
    ";
        // line 4
        if ((twig_slice($this->env, ($context["route"] ?? null), 0, 9) == "checkout/")) {
            // line 5
            echo "    <label class=\"control-label\" for=\"input-payment-captcha\">";
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
    <input type=\"text\" name=\"captcha\" id=\"input-payment-captcha\" class=\"form-control\" autocomplete=\"off\" />
    <img src=\"index.php?route=extension/captcha/basic/captcha\" alt=\"\" />
    ";
        } else {
            // line 9
            echo "    <label class=\"col-sm-3 control-label\" for=\"input-captcha\">";
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
    <div class=\"col-sm-8\">
      <input type=\"text\" name=\"captcha\" id=\"input-captcha\" class=\"form-control\" />
      <img src=\"index.php?route=extension/captcha/basic/captcha\" alt=\"\" />
      ";
            // line 13
            if (($context["error_captcha"] ?? null)) {
                // line 14
                echo "      <div class=\"text-danger\">";
                echo ($context["error_captcha"] ?? null);
                echo "</div>
      ";
            }
            // line 16
            echo "    </div>
    ";
        }
        // line 18
        echo "  </div>
</fieldset>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Crazy/template/extension/captcha/basic.twig";
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
        return array (  75 => 18,  71 => 16,  65 => 14,  63 => 13,  55 => 9,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Crazy/template/extension/captcha/basic.twig", "");
    }
}
