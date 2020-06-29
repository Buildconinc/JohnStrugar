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

/* about_us.twig */
class __TwigTemplate_f9586f2d35467df14fe72940cae834e3901c93102989566cf2ba6dba3fc00530 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "about_us.twig", 1);
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
        echo "/about_us";
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
";
        // line 11
        $context["About_us"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["About_us"]);
        // line 12
        echo "
<!-- about -->
<div class=\"flex home-about flex-900-column\">
\t<div class=\"backgroung-color-white width-50per\">
\t\t<div class=\"home-about-background flex flex-column ju-co-center padding-top-40 padding-bottom-40\">
\t\t\t<div class=\"flex\">
\t\t\t\t<div class=\"line-black margin-left-64 margin-top-55 display-none-960\"></div>
\t\t\t\t<div class=\"flex flex-column\">
\t\t\t\t\t<div class=\"font-16 font-300 color-black line-height-19 margin-left-40 margin-bottom-11\">About</div>
\t\t\t\t\t<div class=\"font-46 color-black line-height-54 margin-bottom-11 margin-left-40\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Name", [], "any", false, false, false, 21), "html", null, true);
        echo " </div>
\t\t\t\t\t<div class=\"font-36 color-black line-height-42 margin-left-40 margin-bottom-50\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Position", [], "any", false, false, false, 22), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-right-40 border-box margin-bottom-66 width-462\">";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_text", [], "any", false, false, false, 23);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t<div class=\"line-black margin-left-64\"></div>
\t\t\t\t<a href=\"education_and_qualifications\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Education and Qualifications</a>
\t\t\t\t<a href=\"education_and_qualifications\">
\t\t\t\t\t<img class=\"margin-right-40\" src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div style=\"background-image: url('img/";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_photo", [], "any", false, false, false, 35), "html", null, true);
        echo "');\" class=\"home-about-image width-50per\"></div>
</div>

<!-- picture -->
<div style=\"background-image: url('img/";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "video_image", [], "any", false, false, false, 39), "html", null, true);
        echo "');\" class=\"about-picture-1 flex al-it-center\">
\t<a data-fancybox href=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Video", [], "any", false, false, false, 40), "html", null, true);
        echo " \">
\t\t<img class=\"home-intro-play\" src=\"./assets/images/icons/play_gold.png\">\t</a>
</div>

<!-- treatments -->
";
        // line 45
        $this->loadTemplate("treatments-slider.twig", "about_us.twig", 45)->display($context);
        // line 46
        echo "
<!-- picture -->
<div style=\"background-image: url('img/";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "image", [], "any", false, false, false, 48), "html", null, true);
        echo "');\" class=\"about-picture-2 flex al-it-center\"></div>

<!-- philosophy -->
<div class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-45 display-none-960\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-16 line-height-19 color-black margin-left-40 margin-bottom-6\">Philosophy</div>
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_title", [], "any", false, false, false, 55), "html", null, true);
        echo " </div>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_text1", [], "any", false, false, false, 58);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column margin-900-left-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">";
        // line 61
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_text2", [], "any", false, false, false, 61);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- logo -->
<div class=\"about-logo flex al-it-center ju-co-center\">
\t<img style=\"max-width: 18.438rem; max-height: 9rem;\" src=\"./assets/images/NOSS.png\">
</div>

<!-- NOSS -->
<div class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-19 display-none-960\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_title", [], "any", false, false, false, 76), "html", null, true);
        echo " </div>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 79
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_text1", [], "any", false, false, false, 79);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column margin-900-left-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">";
        // line 82
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_text2", [], "any", false, false, false, 82);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "about_us.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 82,  215 => 79,  209 => 76,  191 => 61,  185 => 58,  179 => 55,  169 => 48,  165 => 46,  163 => 45,  155 => 40,  151 => 39,  144 => 35,  129 => 23,  125 => 22,  121 => 21,  110 => 12,  108 => 11,  105 => 10,  101 => 9,  92 => 8,  85 => 7,  77 => 6,  70 => 5,  63 => 4,  55 => 3,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about_us.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/about_us.twig");
    }
}
