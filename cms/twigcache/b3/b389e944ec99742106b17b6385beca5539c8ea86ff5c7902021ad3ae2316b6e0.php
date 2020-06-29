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

/* treatments.twig */
class __TwigTemplate_7d412aba83a52092a8fd184ea340fcba225f01caa947cf88c0e231f9fa6a3b24 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'og_url' => [$this, 'block_og_url'],
            'og_title' => [$this, 'block_og_title'],
            'og_description' => [$this, 'block_og_description'],
            'og_image' => [$this, 'block_og_image'],
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
        $context["Title_and_Description"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Title_and_Description", ["id" => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["_GET"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["0"] ?? null) : null)]])) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 1
        $this->parent = $this->loadTemplate("base.twig", "treatments.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "Title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "description", [], "any", false, false, false, 4), "html", null, true);
    }

    // line 5
    public function block_og_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "/treatments";
    }

    // line 6
    public function block_og_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "Title", [], "any", false, false, false, 6), "html", null, true);
    }

    // line 7
    public function block_og_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "description", [], "any", false, false, false, 7), "html", null, true);
    }

    // line 8
    public function block_og_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["_BASE"] ?? null), "html", null, true);
        echo "/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "og_img", [], "any", false, false, false, 8), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<!-- intro -->
<div class=\"treatments-intro flex al-it-center\">
\t<div class=\"flex flex-column display-none-960\">
\t\t<div class=\"treatments-intro-title color-black margin-left-114 margin-bottom-50\">Diseases of the spine</div>
\t\t<div class=\"treatments-intro-text font-14 color-black line-height-22 margin-bottom-38 width-386 margin-left-114\">Spinal stenosis, disc herniations, deformities, fractures, degenerative disease and tumors that lead to loss of motor and sensory function, pain, and if untreated, paralysis. There are surgical and non-surgical treatments but I will discuss the surgical bellow. These surgical approaches are not exhaustive, but are the more commonly encountered.</div>
\t</div>
</div>
<div class=\"flex-960 flex-column display-none margin-top-40 margin-bottom-40\">
\t<div class=\"treatments-intro-title color-black margin-left-114 margin-bottom-50\">Diseases of the spine</div>
\t<div class=\"treatments-intro-text font-14 color-black line-height-22 margin-bottom-38 margin-left-114\">Spinal stenosis, disc herniations, deformities, fractures, degenerative disease and tumors that lead to loss of motor and sensory function, pain, and if untreated, paralysis. There are surgical and non-surgical treatments but I will discuss the surgical bellow. These surgical approaches are not exhaustive, but are the more commonly encountered.</div>
</div>

<!-- treatments -->
<div class=\"font-32 line-height-38 color-black background-color-white padding-left-114 padding-top-90 padding-bottom-90\">Treatments</div>
<div class=\"flex flex-wrap ju-co-center\">
\t";
        // line 26
        $context["Treatments"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Treatments"]);
        // line 27
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Treatments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "\t\t<!-- 1 -->
\t\t<div class=\"treatments-tretment flex flex-column margin-bottom-81 margin-right-40\">
\t\t\t<div class=\"treatments-tretment-image margin-bottom-50\" style=\"background-image: url('img/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 30), "html", null, true);
            echo "')\"></div>
\t\t\t<div class=\"treatments-tretment-text font-20 line-height-24 font-bold color-black margin-bottom-22\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
\t\t\t<div class=\"flex-wrap-7-line treatments-tretment-text font-14 color-black line-height-22 margin-bottom-38\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 32), "html", null, true);
            echo "</div>
\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t<div class=\"line-black\"></div>
\t\t\t\t<a href=\"treatment/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t\t<a href=\"treatment/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
\t\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>

<!-- testimonial -->
";
        // line 45
        $this->loadTemplate("testimonial.twig", "treatments.twig", 45)->display($context);
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "treatments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 46,  169 => 45,  164 => 42,  152 => 36,  148 => 35,  142 => 32,  138 => 31,  134 => 30,  130 => 28,  125 => 27,  123 => 26,  105 => 10,  101 => 9,  92 => 8,  85 => 7,  77 => 6,  70 => 5,  63 => 4,  55 => 3,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "treatments.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/treatments.twig");
    }
}
