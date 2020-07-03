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
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
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
<div class=\"home-intro flex al-it-center\">
\t<a data-fancybox href=\"https://www.youtube.com/watch?v=DVHr8Dy8cPE&feature=youtu.be\">
\t\t<img class=\"home-intro-play\" src=\"./assets/images/icons/play.png\">\t</a>
\t<div class=\"flex flex-column display-none-1024\">
\t\t <div class=\"flex\">
\t\t\t<div class=\"line-white margin-left-64 margin-top-55\"></div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t";
        // line 19
        $context["Treatments"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Treatments"]);
        // line 20
        echo "\t\t\t\t<div class=\"font-16 color-white line-height-19 margin-left-40 margin-bottom-16\">Treatments</div>
\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Treatments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["treatment"]) {
            // line 22
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["treatment"], "show", [], "any", false, false, false, 22) == "true")) {
                // line 23
                echo "\t\t\t\t<div class=\"font-32 color-white line-height-38 margin-bottom-38 width-416 margin-left-40\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["treatment"], "Title", [], "any", false, false, false, 23), "html", null, true);
                echo "</div>
\t\t\t\t<div class=\"font-14 color-white font-300 line-height-22 margin-left-40 margin-bottom-66 width-462\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["treatment"], "short_text", [], "any", false, false, false, 24), "html", null, true);
                echo " </div>
\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treatment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-white margin-left-64\"></div>
\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Treatments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["treatment"]) {
            // line 32
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["treatment"], "show", [], "any", false, false, false, 32) == "true")) {
                // line 33
                echo "\t\t\t<a href=\"treatment/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["treatment"], "Slug", [], "any", false, false, false, 33), "html", null, true);
                echo "\" class=\"font-16 font-gotham color-white line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t<a href=\"treatment/";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["treatment"], "Slug", [], "any", false, false, false, 34), "html", null, true);
                echo "\">
\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</a>
\t\t\t";
            }
            // line 38
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treatment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t</div>
\t</div>
</div>

<!-- treatments -->
";
        // line 44
        $this->loadTemplate("treatments-slider.twig", "index.twig", 44)->display($context);
        // line 45
        echo "
<!-- blog posts -->
<div class=\"background-color-grey flex\">
\t<div class=\"flex margin-top-97 width-100per\">
\t\t<div class=\"line-black margin-left-64 margin-top-19 display-none-960\"></div>
\t\t<div class=\"flex flex-column\">
\t\t\t<div class=\"font-32 color-black line-height-38 margin-left-40 margin-right-40 margin-bottom-81\">General Health Advice</div>
\t\t\t<div class=\"flex flex-wrap margin-left-40 ju-co-center\">
\t\t\t";
        // line 53
        $context["Blog"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Blog"]);
        // line 54
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blog"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "\t\t\t\t<div class=\"flex flex-column margin-bottom-97 margin-right-40\">
\t\t\t\t\t<div class=\"image margin-bottom-22\" style=\"background-image: url('img/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Photo", [], "any", false, false, false, 56), "html", null, true);
            echo "')\"></div>
\t\t\t\t\t<div class=\"width-24vw font-24 font-bold color-black line-height-28 margin-bottom-14\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 57), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"flex-wrap-3-line width-24vw font-14 color-black line-height-22 margin-bottom-22\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 58), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t\t\t<div class=\"line-small-black\"></div>
\t\t\t\t\t\t<a href=\"post/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 61), "html", null, true);
            echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t\t\t\t<a href=\"post/";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 62), "html", null, true);
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
        // line 68
        echo "\t\t\t</div>
\t\t</div>
\t</div>\t
</div>

";
        // line 73
        $context["About_us"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["About_us"]);
        // line 74
        echo "<!-- about -->
<div class=\"flex home-about flex-900-column\">
\t<div class=\"backgroung-color-white width-50per\">
\t\t<div class=\"home-about-background flex flex-column ju-co-center padding-top-40 padding-bottom-40\">
\t\t\t<div class=\"flex\">
\t\t\t\t<div class=\"line-black margin-left-64 margin-top-55 display-none-960\"></div>
\t\t\t\t<div class=\"flex flex-column\">
\t\t\t\t\t<div class=\"font-16 font-300 color-black line-height-19 margin-left-40 margin-bottom-11 margin-top-19\">About</div>
\t\t\t\t\t<div class=\"font-46 color-black line-height-54 margin-bottom-11 margin-left-40\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Name", [], "any", false, false, false, 82), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"font-36 color-black line-height-42 margin-left-40 margin-bottom-50\">";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Position", [], "any", false, false, false, 83), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-bottom-66 width-462 border-box margin-right-40\">";
        // line 84
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_text", [], "any", false, false, false, 84);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex al-it-center margin-bottom-11\">
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
\t<div class=\"font-24 font-300 line-height-36 color-black text-align-center width-854\">To practice Neurosurgery at present requires keeping what works and persisting at introducing innovation.</div>
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
        return array (  260 => 84,  256 => 83,  252 => 82,  242 => 74,  240 => 73,  233 => 68,  221 => 62,  217 => 61,  211 => 58,  207 => 57,  203 => 56,  200 => 55,  195 => 54,  193 => 53,  183 => 45,  181 => 44,  174 => 39,  168 => 38,  161 => 34,  156 => 33,  153 => 32,  149 => 31,  143 => 27,  137 => 26,  132 => 24,  127 => 23,  124 => 22,  120 => 21,  117 => 20,  115 => 19,  104 => 10,  100 => 9,  91 => 8,  84 => 7,  76 => 6,  70 => 5,  63 => 4,  55 => 3,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/index.twig");
    }
}
