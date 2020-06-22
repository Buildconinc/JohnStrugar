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

/* educations_and_qualifications.twig */
class __TwigTemplate_f0e3076cf22cfb698918f712c6328fdf1edad91576f6f1cc35d78ebee75bbc1a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["item"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Educations_and_Qualifications"]);
        // line 1
        $this->parent = $this->loadTemplate("base.twig", "educations_and_qualifications.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<!-- intro -->
<div class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-45 display-none-960\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-16 line-height-19 color-black margin-left-40 margin-bottom-6\">Educations and Qualifications</div>
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "Title", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "Description", [], "any", false, false, false, 13);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710 margin-900-left-40 margin-900-right-40\">";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description2", [], "any", false, false, false, 16);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- testimonial -->
";
        // line 23
        $this->loadTemplate("testimonial.twig", "educations_and_qualifications.twig", 23)->display($context);
        // line 24
        echo "
<!-- treatments -->
";
        // line 26
        $this->loadTemplate("treatments-slider.twig", "educations_and_qualifications.twig", 26)->display($context);
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "educations_and_qualifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  89 => 26,  85 => 24,  83 => 23,  73 => 16,  67 => 13,  61 => 10,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "educations_and_qualifications.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/educations_and_qualifications.twig");
    }
}
