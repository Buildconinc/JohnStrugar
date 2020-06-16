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
        $this->parent = $this->loadTemplate("base.twig", "treatments.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
<!-- intro -->
<div class=\"treatments-intro flex al-it-center\">
\t<div class=\"flex flex-column\">
\t\t<div class=\"treatments-intro-title color-black margin-left-114 margin-bottom-50\">General text about treatments</div>
\t\t<div class=\"treatments-intro-text font-14 color-black line-height-22 margin-bottom-38 width-386 margin-left-114\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
\t</div>
</div>

<!-- treatments -->
<div class=\"font-32 line-height-38 color-black background-color-white padding-left-114 padding-top-90 padding-bottom-90\">Treatments</div>
<div class=\"flex flex-wrap\">
\t";
        // line 15
        $context["Treatments"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Treatments"]);
        // line 16
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Treatments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "\t\t<!-- 1 -->
\t\t<div class=\"treatments-tretment flex flex-column margin-bottom-81\">
\t\t\t<div class=\"treatments-tretment-image margin-bottom-50\" style=\"background-image: url('img/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 19), "html", null, true);
            echo "')\"></div>
\t\t\t<div class=\"treatments-tretment-text font-20 line-height-24 font-bold color-black margin-left-114 margin-bottom-22\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
\t\t\t<div class=\"flex-wrap-7-line treatments-tretment-text font-14 color-black line-height-22 margin-bottom-38 margin-left-114\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t<div class=\"line-black margin-left-114\"></div>
\t\t\t\t<a href=\"treatment/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 24), "html", null, true);
            echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t\t<a href=\"treatment/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 25), "html", null, true);
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
        // line 31
        echo "</div>

<!-- testimonial -->
";
        // line 34
        $this->loadTemplate("testimonial.twig", "treatments.twig", 34)->display($context);
        // line 35
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
        return array (  112 => 35,  110 => 34,  105 => 31,  93 => 25,  89 => 24,  83 => 21,  79 => 20,  75 => 19,  71 => 17,  66 => 16,  64 => 15,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "treatments.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/treatments.twig");
    }
}
