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

/* index.twig */
class __TwigTemplate_54000e50edb793ba35c07f3d1886cc6cb9f57cfaef44aa5de78e92a9b539b2a0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'og_url' => [$this, 'block_og_url'],
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
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
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_og_url($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "Title", [], "any", false, false, false, 4), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "description", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<!-- intro -->
<div class=\"home-intro flex al-it-center\">
\t<a data-fancybox href=\"https://www.youtube.com/watch?v=DVHr8Dy8cPE&feature=youtu.be\">
\t\t<img class=\"home-intro-play\" src=\"./assets/images/icons/play.png\">\t</a>
\t<div class=\"flex flex-column display-none-1024\">
\t\t <div class=\"flex\">
\t\t\t<div class=\"line-white margin-left-64 margin-top-55\"></div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-16 color-white line-height-19 margin-left-40 margin-bottom-16\">Treatments</div>
\t\t\t\t<div class=\"font-32 color-white line-height-38 margin-bottom-38 width-416 margin-left-40\">Lorem Ipsum is simply dummy text</div>
\t\t\t\t<div class=\"font-14 color-white font-300 line-height-22 margin-left-40 margin-bottom-66 width-462\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-white margin-left-64\"></div>
\t\t\t<a href=\"treatments\" class=\"font-16 font-gotham color-white line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t<a href=\"treatments\">
\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</a>
\t\t</div>
\t</div>
</div>

<!-- treatments -->
";
        // line 32
        $this->loadTemplate("treatments-slider.twig", "index.twig", 32)->display($context);
        // line 33
        echo "
<!-- blog posts -->
<div class=\"background-color-grey flex\">
\t<div class=\"flex margin-top-97 width-100per\">
\t\t<div class=\"line-black margin-left-64 margin-top-19 display-none-960\"></div>
\t\t<div class=\"flex flex-column\">
\t\t\t<div class=\"font-32 color-black line-height-38 margin-left-40 margin-right-40 margin-bottom-81\">General Health Advice</div>
\t\t\t<div class=\"flex flex-wrap margin-left-40\">
\t\t\t";
        // line 41
        $context["Blog"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Blog"]);
        // line 42
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blog"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "\t\t\t\t<div class=\"flex flex-column margin-bottom-97 margin-right-40\">
\t\t\t\t\t<img class=\"image margin-bottom-22\" style=\"background-image: url('img/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Photo", [], "any", false, false, false, 44), "html", null, true);
            echo "')\">
\t\t\t\t\t<div class=\"width-24vw font-24 font-bold color-black line-height-28 margin-bottom-14\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 45), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"flex-wrap-3-line width-24vw font-14 color-black line-height-22 margin-bottom-22\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t\t\t<div class=\"line-small-black\"></div>
\t\t\t\t\t\t<a href=\"post/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 49), "html", null, true);
            echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t\t\t\t<a href=\"post/";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 50), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t</div>
\t\t</div>
\t</div>\t
</div>

";
        // line 61
        $context["About_us"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["About_us"]);
        // line 62
        echo "<!-- about -->
<div class=\"flex home-about flex-900-column\">
\t<div class=\"backgroung-color-white width-50per\">
\t\t<div class=\"home-about-background flex flex-column ju-co-center padding-top-40 padding-bottom-40\">
\t\t\t<div class=\"flex\">
\t\t\t\t<div class=\"line-black margin-left-64 margin-top-55 display-none-960\"></div>
\t\t\t\t<div class=\"flex flex-column\">
\t\t\t\t\t<div class=\"font-16 font-300 color-black line-height-19 margin-left-40 margin-bottom-11\">About</div>
\t\t\t\t\t<div class=\"font-46 color-black line-height-54 margin-bottom-11 margin-left-40\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Name", [], "any", false, false, false, 70), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"font-36 color-black line-height-42 margin-left-40 margin-bottom-50\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Position", [], "any", false, false, false, 71), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-bottom-66 width-462 border-box margin-right-40\">";
        // line 72
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_text", [], "any", false, false, false, 72);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t<div class=\"line-black margin-left-64\"></div>
\t\t\t\t<a href=\"about_us\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t\t<a href=\"about_us\">
\t\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"home-about-image width-50per\"></div>
</div>

<!-- text -->
<div class=\"background-color-grey flex al-it-center ju-co-center height-430 padding-40\">
\t<div class=\"font-24 font-300 line-height-36 color-black text-align-center width-854\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 72,  179 => 71,  175 => 70,  165 => 62,  163 => 61,  156 => 56,  144 => 50,  140 => 49,  134 => 46,  130 => 45,  126 => 44,  123 => 43,  118 => 42,  116 => 41,  106 => 33,  104 => 32,  77 => 7,  73 => 6,  66 => 5,  58 => 4,  52 => 3,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/index.twig");
    }
}
