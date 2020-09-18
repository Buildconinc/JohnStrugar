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

/* treatments-slider.twig */
class __TwigTemplate_7d9e89c40eb5b0e7265c8440bd6188f8fffcb1ec1be149b1fde5b5d74909414c extends \Twig\Template
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
        echo "<div style=\"overflow: hidden;\" class=\"flex\">
\t<div class=\"background-image flex padding-top-160 padding-bottom-160\">
\t\t<div class=\"line-black margin-left-64 margin-top-19 display-none-960\"></div>
\t\t<div class=\"width-135-per flex flex-column\">
\t\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">Treatments</div>
\t\t\t";
        // line 6
        $context["Treatments"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Treatments"]);
        // line 7
        echo "\t\t\t<div id=\"owl2\" class=\"owl-carousel owl-theme flex\">
\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Treatments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "\t\t\t\t<a href=\"treatment/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 9), "html", null, true);
            echo "\" class=\"flex flex-column margin-right-120 margin-900-left-40 \">
\t\t\t\t\t<div class=\"font-20 color-black font-bold line-height-24 margin-bottom-22\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 10), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"flex-wrap-7-line font-14 color-black font-300 line-height-22 margin-bottom-6 width-710 margin-900-bottom-40 border-box\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 11), "html", null, true);
            echo "</div>
\t\t\t\t</a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "treatments-slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 14,  62 => 11,  58 => 10,  53 => 9,  49 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "treatments-slider.twig", "/Applications/MAMP/htdocs/johnstrugar/twigtemplates/treatments-slider.twig");
    }
}
