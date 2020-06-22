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
        $this->parent = $this->loadTemplate("base.twig", "about_us.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
";
        // line 4
        $context["About_us"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["About_us"]);
        // line 5
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
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Name", [], "any", false, false, false, 14), "html", null, true);
        echo " </div>
\t\t\t\t\t<div class=\"font-36 color-black line-height-42 margin-left-40 margin-bottom-50\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Position", [], "any", false, false, false, 15), "html", null, true);
        echo "</div>
\t\t\t\t\t";
        // line 17
        echo "\t\t\t\t\t";
        // line 18
        echo "\t\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-right-40 border-box margin-bottom-66 width-462\">";
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_text", [], "any", false, false, false, 18);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t<div class=\"line-black margin-left-64\"></div>
\t\t\t\t<a href=\"educations_and_qualifications\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Education and Qualifications</a>
\t\t\t\t<img class=\"margin-right-40\" src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<div style=\"background-image: url('img/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "about_us_photo", [], "any", false, false, false, 28), "html", null, true);
        echo "');\" class=\"home-about-image width-50per\"></div>
</div>

<!-- picture -->
<div style=\"background-image: url('img/";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "video_image", [], "any", false, false, false, 32), "html", null, true);
        echo "');\" class=\"about-picture-1 flex al-it-center\">
\t<a data-fancybox href=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "Video", [], "any", false, false, false, 33), "html", null, true);
        echo " \">
\t\t<img class=\"home-intro-play\" src=\"./assets/images/icons/play_gold.png\">\t</a>
</div>

<!-- treatments -->
";
        // line 38
        $this->loadTemplate("treatments-slider.twig", "about_us.twig", 38)->display($context);
        // line 39
        echo "
<!-- picture -->
<div style=\"background-image: url('img/";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "image", [], "any", false, false, false, 41), "html", null, true);
        echo "');\" class=\"about-picture-2 flex al-it-center\"></div>

<!-- philosophy -->
<div class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-45 display-none-960\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-16 line-height-19 color-black margin-left-40 margin-bottom-6\">Philosophy</div>
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_title", [], "any", false, false, false, 48), "html", null, true);
        echo " </div>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t";
        // line 52
        echo "\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_text1", [], "any", false, false, false, 52);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column margin-900-left-40 margin-900-right-40\">
\t\t\t\t";
        // line 56
        echo "\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">";
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy1_text2", [], "any", false, false, false, 56);
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
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_title", [], "any", false, false, false, 71), "html", null, true);
        echo " </div>
\t\t<div class=\"flex flex-900-column\">
\t\t\t<div class=\"flex flex-column margin-right-120 margin-900-bottom-40 margin-900-right-40\">
\t\t\t\t";
        // line 75
        echo "\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">";
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_text1", [], "any", false, false, false, 75);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column margin-900-left-40 margin-900-right-40\">
\t\t\t\t";
        // line 79
        echo "\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">";
        echo twig_get_attribute($this->env, $this->source, ($context["About_us"] ?? null), "philosophy2_text2", [], "any", false, false, false, 79);
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
        return array (  170 => 79,  163 => 75,  157 => 71,  138 => 56,  131 => 52,  125 => 48,  115 => 41,  111 => 39,  109 => 38,  101 => 33,  97 => 32,  90 => 28,  76 => 18,  74 => 17,  70 => 15,  66 => 14,  55 => 5,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "about_us.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/about_us.twig");
    }
}
