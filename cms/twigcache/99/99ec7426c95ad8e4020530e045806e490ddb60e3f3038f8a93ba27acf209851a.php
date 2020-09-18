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

/* testimonial.twig */
class __TwigTemplate_182e689d8b6559cff21665e4fb92a4e28bffc38e9b4a96bf641a1b7eced4190b extends \Twig\Template
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
        echo "<div class=\"background-color-grey padding-75 border-box flex\">
<!-- left -->
\t<div class=\"testimonial background-color-grey-dark flex al-it-center ju-co-center display-none-900\">
\t\t<img class=\"testimonial-logo\" src=\"./assets/images/JohnStrugar.png\">
\t</div>
\t<!-- right -->
\t<div style=\"position: relative\" class=\"testimonial background-color-white flex flex-column al-it-center ju-co-center\">
\t\t<div class=\"font-32 line-height-38 color-black margin-bottom-38\">Testimonial</div>
\t\t<div id=\"owl1\" class=\"owl-carousel owl-theme flex flex-column al-it-center ju-co-center\">
\t\t\t";
        // line 10
        $context["Testimonial"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Testimonial"]);
        // line 11
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Testimonial"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
\t\t\t<div style=\"width: 100%\" class=\"flex flex-column al-it-center ju-co-center\">
\t\t\t\t<div class=\"font-22 line-height-26 text-align-center color-black margin-bottom-9\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Name", [], "any", false, false, false, 13), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"font-18 line-height-22 text-align-center color-black margin-bottom-22\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "position", [], "any", false, false, false, 14), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"font-14 line-height-22 text-align-center color-black width-439 margin-bottom-38\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 15), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "testimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  66 => 15,  62 => 14,  58 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "testimonial.twig", "/Applications/MAMP/htdocs/johnstrugar/twigtemplates/testimonial.twig");
    }
}
