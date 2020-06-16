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

/* treatment.twig */
class __TwigTemplate_5781a95e91d77eabc83df4ec23b29e504e276633fb30c771319be0e875b243cf extends \Twig\Template
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
        $context["treatment"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Treatments", ["id" => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["_GET"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["1"] ?? null) : null)]])) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 1
        $this->parent = $this->loadTemplate("base.twig", "treatment.twig", 1);
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
\t<div class=\"line-black margin-left-64 margin-top-45\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-16 line-height-19 color-black margin-left-40 margin-bottom-6\">Treatments</div>
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["treatment"] ?? null), "Title", [], "any", false, false, false, 10), "html", null, true);
        echo "</div>
\t\t<div class=\"flex\">
\t\t\t<div class=\"flex flex-column margin-right-120\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["treatment"] ?? null), "Description", [], "any", false, false, false, 13);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["treatment"] ?? null), "description2", [], "any", false, false, false, 16);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- video -->
<div class=\"home-intro flex al-it-end ju-co-center\">
\t<a data-fancybox id=\"v";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["treatment"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "\" onclick=\"url2embed('v";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["treatment"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["treatment"] ?? null), "Video", [], "any", false, false, false, 24), "html", null, true);
        echo "');\">
\t\t<img class=\"home-intro-play\" src=\"./assets/images/icons/play.png\">\t
\t</a>
</div>

<!-- testimonial -->
";
        // line 30
        $this->loadTemplate("testimonial.twig", "treatment.twig", 30)->display($context);
        // line 31
        echo "
<!-- treatments -->
<div class=\"font-32 line-height-38 color-black background-color-white padding-left-114 padding-top-90 padding-bottom-90\">Treatments</div>
<div class=\"flex flex-wrap\">
";
        // line 35
        $context["Treatments"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Treatments"]);
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Treatments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "\t<!-- 1 -->
\t<div class=\"treatments-tretment flex flex-column margin-bottom-81\">
\t\t<div class=\"treatments-tretment-image margin-bottom-50\" style=\"background-image: url('img/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 39), "html", null, true);
            echo "')\"></div>
\t\t<div class=\"treatments-tretment-text font-20 line-height-24 font-bold color-black margin-left-114 margin-bottom-22\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 40), "html", null, true);
            echo "</div>
\t\t<div class=\"flex-wrap-7-line treatments-tretment-text font-14 color-black line-height-22 margin-bottom-38 margin-left-114\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Description", [], "any", false, false, false, 41), "html", null, true);
            echo "</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-black margin-left-114\"></div>
\t\t\t<a href=\"treatment/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 44), "html", null, true);
            echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t<a href=\"treatment/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</a>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "treatment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 51,  133 => 45,  129 => 44,  123 => 41,  119 => 40,  115 => 39,  111 => 37,  107 => 36,  105 => 35,  99 => 31,  97 => 30,  84 => 24,  73 => 16,  67 => 13,  61 => 10,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "treatment.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/treatment.twig");
    }
}
