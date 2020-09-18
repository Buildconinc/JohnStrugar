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
class __TwigTemplate_2957be6d1d50d86f111610fde470330300cfc64769634c9ba69fe74d8ab7d595 extends \Twig\Template
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
<!-- home page -->
";
        // line 106
        echo "
<!-- home page -->

";
        // line 109
        $context["About_us"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["About_us"]);
        // line 110
        echo "
<!-- about -->
<div class=\"flex home-about flex-900-column\">
\t<div style=\"background-color: #FBFBFB\" class=\"width-50per\">
\t\t<div class=\"home-about-background flex flex-column ju-co-center padding-top-40 padding-bottom-40\">
\t\t\t<div class=\"flex\">
\t\t\t\t<div class=\"line-black margin-left-64 margin-top-55 display-none-960\"></div>
\t\t\t\t<div class=\"flex flex-column\">
\t\t\t\t\t<div class=\"font-16 font-300 color-black line-height-19 margin-left-40 margin-bottom-11 margin-top-19\">About</div>
\t\t\t\t\t<div class=\"font-46 color-black line-height-54 margin-bottom-11 margin-left-40\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Name", [], "any", false, false, false, 119), "html", null, true);
        echo " </div>
\t\t\t\t\t<div class=\"font-36 color-black line-height-42 margin-left-40 margin-bottom-50\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Position", [], "any", false, false, false, 120), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-right-40 border-box margin-bottom-66 width-462\">";
        // line 121
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_text", [], "any", false, false, false, 121);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div style=\"background-image: url('img/";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_photo", [], "any", false, false, false, 126), "html", null, true);
        echo "');\" class=\"home-about-image width-50per display-none-900\"></div>
</div>

<!-- philosophy -->
<div class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-45 display-none-960\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-16 line-height-19 color-black margin-left-40 margin-bottom-6\">Philosophy</div>
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_title", [], "any", false, false, false, 134), "html", null, true);
        echo " </div>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 137
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_text1", [], "any", false, false, false, 137);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column margin-900-left-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">";
        // line 140
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_text2", [], "any", false, false, false, 140);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 146
        $context["item"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Educations_and_Qualifications"]);
        // line 147
        echo "<!-- education -->
<div style=\"background-color: #FBFBFB\" class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-16 display-none-960\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-32 line-height-38 color-black margin-left-40 margin-bottom-6\">Education and Qualifications</div>
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "Title", [], "any", false, false, false, 152), "html", null, true);
        echo "</div>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 155
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "Description", [], "any", false, false, false, 155);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710 margin-900-left-40 margin-900-right-40\">";
        // line 158
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description2", [], "any", false, false, false, 158);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 164
        $context["videos"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Videos"]);
        // line 165
        echo "<!-- video -->
<div style=\"background-color: #A59484\" class=\"padding-top-60 padding-bottom-60\">
\t<div class=\"flex\">
\t<div class=\"line-white margin-left-64 margin-top-16 display-none-960\"></div>
\t\t<div class=\"font-32 line-height-38 color-white width-550 margin-left-40\">Video</div>
\t</div>
\t<div style=\"flex-wrap: wrap;\" class=\"flex al-it-center ju-co-center\">
\t";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 173
            echo "\t<div class=\"margin-top-45\">
\t\t<a data-fancybox href=\"";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "Video", [], "any", false, false, false, 174), "html", null, true);
            echo " \">
\t\t\t<div style=\"background-image: url('img/";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "Image", [], "any", false, false, false, 175), "html", null, true);
            echo "');\" class=\"video flex al-it-center\">
\t\t\t\t<img class=\"home-intro-play-2\" src=\"./assets/images/icons/play_gold.png\">\t
\t\t\t</div> 
\t\t</a>
\t\t<div style=\"margin-left: 0.5rem; margin-right: 0.5rem\" class=\"color-white font-16 font-bold margin-top-16\">";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "Title", [], "any", false, false, false, 179), "html", null, true);
            echo "</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "\t</div>
</div>

<!-- treatments -->
";
        // line 186
        $this->loadTemplate("treatments-slider.twig", "index.twig", 186)->display($context);
        // line 187
        echo "
<!-- picture -->
<div style=\"background-image: url('img/";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "image", [], "any", false, false, false, 189), "html", null, true);
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
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_title", [], "any", false, false, false, 202), "html", null, true);
        echo " </div>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        // line 205
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_text1", [], "any", false, false, false, 205);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column margin-900-left-40 margin-900-right-40\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">";
        // line 208
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_text2", [], "any", false, false, false, 208);
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
        return array (  282 => 208,  276 => 205,  270 => 202,  254 => 189,  250 => 187,  248 => 186,  242 => 182,  233 => 179,  226 => 175,  222 => 174,  219 => 173,  215 => 172,  206 => 165,  204 => 164,  195 => 158,  189 => 155,  183 => 152,  176 => 147,  174 => 146,  165 => 140,  159 => 137,  153 => 134,  142 => 126,  134 => 121,  130 => 120,  126 => 119,  115 => 110,  113 => 109,  108 => 106,  104 => 10,  100 => 9,  91 => 8,  84 => 7,  76 => 6,  70 => 5,  63 => 4,  55 => 3,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Applications/MAMP/htdocs/johnstrugar/twigtemplates/index.twig");
    }
}
