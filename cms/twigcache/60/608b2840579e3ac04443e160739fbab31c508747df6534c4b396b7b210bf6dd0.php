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
class __TwigTemplate_77227f581bdd2f3dab86934c4925bb3b37f9a61e55431fee8d4e0dfa509a3bbc extends \Twig\Template
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
        // line 3
        $context["Title_and_Description"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Title_and_Description"])) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 1
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
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
    public function block_og_url($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_og_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "Title", [], "any", false, false, false, 7), "html", null, true);
    }

    // line 8
    public function block_og_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "description", [], "any", false, false, false, 8), "html", null, true);
    }

    // line 9
    public function block_og_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["_BASE"] ?? null), "html", null, true);
        echo "img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Title_and_Description"] ?? null), "og_img", [], "any", false, false, false, 9), "html", null, true);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
<!-- home page -->
";
        // line 107
        echo "
<!-- home page -->

";
        // line 110
        $context["About_us"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["About_us"]);
        // line 111
        echo "
<!-- about -->
<div class=\"flex home-about flex-900-column\">
\t<div style=\"background-color: #FBFBFB\" class=\"width-50per\">
\t\t<div class=\"home-about-background flex flex-column ju-co-center padding-top-40 padding-bottom-40\">
\t\t\t<div class=\"flex\">
\t\t\t\t<div class=\"line-black margin-left-64 margin-top-55 display-none-960\"></div>
\t\t\t\t<div class=\"flex flex-column\">
\t\t\t\t\t<div class=\"font-16 font-300 color-black line-height-19 margin-left-40 margin-bottom-11 margin-top-19\">About</div>
\t\t\t\t\t<h1 class=\"font-46 color-black line-height-54 margin-bottom-11 margin-left-40\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Name", [], "any", false, false, false, 120), "html", null, true);
        echo " </h1>
\t\t\t\t\t<h1 class=\"font-36 color-black line-height-42 margin-left-40 margin-bottom-50\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Position", [], "any", false, false, false, 121), "html", null, true);
        echo "</h1>
\t\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-right-40 border-box margin-bottom-66 width-462\">";
        // line 122
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_text", [], "any", false, false, false, 122);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div style=\"background-image: url('img/";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_photo", [], "any", false, false, false, 127), "html", null, true);
        echo "');\" class=\"home-about-image width-50per display-none-900\"></div>
</div>

<!-- philosophy -->
<div class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-45 display-none-960\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-16 line-height-19 color-black margin-left-40 margin-bottom-6\">Philosophy</div>
\t\t<h2 class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_title", [], "any", false, false, false, 135), "html", null, true);
        echo " </h2>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 138
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_text1", [], "any", false, false, false, 138);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column margin-900-left-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">";
        // line 141
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_text2", [], "any", false, false, false, 141);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 147
        $context["item"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Educations_and_Qualifications"]);
        // line 148
        echo "<!-- education -->
<div style=\"background-color: #FBFBFB\" class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-16 display-none-960\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-32 line-height-38 color-black margin-left-40 margin-bottom-6\">Education and Qualifications</div>
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "Title", [], "any", false, false, false, 153), "html", null, true);
        echo "</div>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 156
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "Description", [], "any", false, false, false, 156);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710 margin-900-left-40 margin-900-right-40\">";
        // line 159
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description2", [], "any", false, false, false, 159);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 165
        $context["videos"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Videos"]);
        // line 166
        echo "<!-- video -->
<div style=\"background-color: #A59484\" class=\"padding-top-60 padding-bottom-60\">
\t<div class=\"flex\">
\t<div class=\"line-white margin-left-64 margin-top-16 display-none-960\"></div>
\t\t<div class=\"font-32 line-height-38 color-white width-550 margin-left-40\">Video</div>
\t</div>
\t<div style=\"flex-wrap: wrap;\" class=\"flex al-it-center ju-co-center\">
\t";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 174
            echo "\t<div class=\"margin-top-45\">
\t\t<a data-fancybox href=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "Video", [], "any", false, false, false, 175), "html", null, true);
            echo " \">
\t\t\t<div style=\"background-image: url('img/";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "Image", [], "any", false, false, false, 176), "html", null, true);
            echo "');\" class=\"video flex al-it-center\">
\t\t\t\t<img class=\"home-intro-play-2\" src=\"./assets/images/icons/play_gold.png\">\t
\t\t\t</div> 
\t\t</a>
\t\t<div style=\"margin-left: 0.5rem; margin-right: 0.5rem\" class=\"color-white font-16 font-bold margin-top-16\">";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "Title", [], "any", false, false, false, 180), "html", null, true);
            echo "</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "\t</div>
</div>

<!-- treatments -->
";
        // line 187
        $this->loadTemplate("treatments-slider.twig", "index.twig", 187)->display($context);
        // line 188
        echo "
<!-- picture -->
<div style=\"background-image: url('img/";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "image", [], "any", false, false, false, 190), "html", null, true);
        echo "');\" class=\"about-picture-2 flex al-it-center\"></div>

<!-- logo -->
<div class=\"about-logo flex al-it-center ju-co-center\">
\t<a target=\"_blank\" href=\"https://www.nossmd.com/\">
\t\t<img style=\"max-width: 18.438rem; max-height: 9rem;\" src=\"./assets/images/NOSS.png\">
\t</a>
</div>

<!-- NOSS -->
<div class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-19 display-none-960\"></div>
\t<div class=\"flex flex-column\">
\t\t<h2 class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_title", [], "any", false, false, false, 203), "html", null, true);
        echo " </h2>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 206
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_text1", [], "any", false, false, false, 206);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column margin-900-left-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">";
        // line 209
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_text2", [], "any", false, false, false, 209);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return array (  281 => 209,  275 => 206,  269 => 203,  253 => 190,  249 => 188,  247 => 187,  241 => 183,  232 => 180,  225 => 176,  221 => 175,  218 => 174,  214 => 173,  205 => 166,  203 => 165,  194 => 159,  188 => 156,  182 => 153,  175 => 148,  173 => 147,  164 => 141,  158 => 138,  152 => 135,  141 => 127,  133 => 122,  129 => 121,  125 => 120,  114 => 111,  112 => 110,  107 => 107,  103 => 11,  99 => 10,  90 => 9,  83 => 8,  76 => 7,  70 => 6,  63 => 5,  55 => 4,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Users/igor/Projects/JohnStrugar/twigtemplates/index.twig");
    }
}
