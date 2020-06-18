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
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
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
        // line 28
        $this->loadTemplate("treatments-slider.twig", "index.twig", 28)->display($context);
        // line 29
        echo "
<!-- blog posts -->
<div class=\"background-color-grey flex\">
\t<div class=\"flex margin-top-97 width-100per\">
\t\t<div class=\"line-black margin-left-64 margin-top-19 display-none-960\"></div>
\t\t<div class=\"flex flex-column\">
\t\t\t<div class=\"font-32 color-black line-height-38 margin-left-40 margin-right-40 margin-bottom-81\">General Health Advice</div>
\t\t\t<div class=\"flex flex-wrap margin-left-40\">
\t\t\t";
        // line 37
        $context["Blog"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Blog"]);
        // line 38
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blog"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "\t\t\t\t<div class=\"flex flex-column margin-bottom-97 margin-right-40\">
\t\t\t\t\t<img class=\"image margin-bottom-22\" style=\"background-image: url('img/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Photo", [], "any", false, false, false, 40), "html", null, true);
            echo "')\">
\t\t\t\t\t<div class=\"width-24vw font-24 font-bold color-black line-height-28 margin-bottom-14\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 41), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"flex-wrap-3-line width-24vw font-14 color-black line-height-22 margin-bottom-22\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 42), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t\t\t<div class=\"line-small-black\"></div>
\t\t\t\t\t\t<a href=\"post/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 45), "html", null, true);
            echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t\t\t\t<a href=\"post/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 46), "html", null, true);
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
        // line 52
        echo "\t\t\t</div>
\t\t</div>
\t</div>\t
</div>

<!-- about -->
<div class=\"flex home-about flex-900-column\">
\t<div class=\"backgroung-color-white flex flex-column ju-co-center width-50per margin-top-40 margin-bottom-40\">
\t\t<div class=\"flex\">
\t\t\t<div class=\"line-black margin-left-64 margin-top-55 display-none-960\"></div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-16 font-300 color-black line-height-19 margin-left-40 margin-bottom-11\">About</div>
\t\t\t\t<div class=\"font-46 color-black line-height-54 margin-bottom-11 margin-left-40\">John G. Strugar, MD</div>
\t\t\t\t<div class=\"font-36 color-black line-height-42 margin-left-40 margin-bottom-50\">Board-Certified Neurosurgeon</div>
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-bottom-4 width-462 border-box margin-right-40\">Because I am part of the community here, I very much care about the long-term outcomes of my patients. I approach my patients the way you might approach a friend or a relative.”</div>
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-bottom-6 width-462 border-box margin-right-40\">Dr. Strugar’s areas of expertise as a neurosurgeon extend to spine tumors, cervical spine disorders and head and brain trauma. Fellowship-trained in skull base surgery, Dr. Strugar has deep expertise with intracranial injury. He is also extensively experienced in the surgical treatment of the spine, having performed numerous disc arthoplasties (artificial disc surgery) and minimally invasive spine surgeries, as well as combination arthroplasty and fusion surgery to treat complex spine disease.</div>
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-bottom-66 width-462 border-box margin-right-40\">Dr. Strugar has published and presented on a wide range of topics, including brain tumors, spine tumors, acute spinal cord injury and traumatic brain injury. A caring, dedicated and respected neurosurgeon, he is also highly experienced with independent medical evaluations and expert reviews of medical records.</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-black margin-left-64\"></div>
\t\t\t<a href=\"about_us\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t<a href=\"about_us\">
\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</a>
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
        return array (  129 => 52,  117 => 46,  113 => 45,  107 => 42,  103 => 41,  99 => 40,  96 => 39,  91 => 38,  89 => 37,  79 => 29,  77 => 28,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/index.twig");
    }
}
