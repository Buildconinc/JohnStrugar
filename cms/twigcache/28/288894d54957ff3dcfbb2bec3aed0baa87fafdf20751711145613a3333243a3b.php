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

/* post.twig */
class __TwigTemplate_ab1c89aae8fc3bf4a78957763676fa746a247c5b5b2bcb9e6b8b231149b7f0b4 extends \Twig\Template
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
        $context["Post"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Blog", ["id" => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["_GET"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["1"] ?? null) : null)]])) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null);
        // line 1
        $this->parent = $this->loadTemplate("base.twig", "post.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<!-- title -->
<div class=\"flex flex-column al-it-center margin-top-97 margin-bottom-81\">
\t<div class=\"font-46 color-black line-height-54 margin-bottom-22 text-align-center width-462\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Post"] ?? null), "Title", [], "any", false, false, false, 7), "html", null, true);
        echo "</div>
\t<div class=\"font-18 color-black line-height-21 margin-botton-81\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Post"] ?? null), "date", [], "any", false, false, false, 8), "html", null, true);
        echo "</div>
</div>

<!-- body -->
<div class=\"flex ju-co-center margin-bottom-81 margin-left-40 margin-right-40\">
\t<div id=\"html\" class=\"post-text font-14 color-black line-height-22\">";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["Post"] ?? null), "body", [], "any", false, false, false, 13);
        echo "</div>
</div>

<!-- share -->
<div class=\"flex ju-co-center margin-bottom-97\">
\t<div class=\"margin-left-16 margin-right-16\">
\t\t<a href=\"https://twitter.com/share?url=";
        // line 19
        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Slug", [], "any", false, false, false, 19)), "html", null, true);
        echo "&amp;url=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["_BASE"] ?? null)), "html", null, true);
        echo "prost%2F";
        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Slug", [], "any", false, false, false, 19)), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t<img src=\"./assets/images/icons/twitter.png\">
\t\t</a>
\t</div>
\t<div class=\"margin-left-16 margin-right-16\">
\t\t<a href=\"http://www.facebook.com/sharer/sharer.php?u=";
        // line 24
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["_BASE"] ?? null)), "html", null, true);
        echo "prost%2F";
        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Slug", [], "any", false, false, false, 24)), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t<img src=\"./assets/images/icons/fb.png\">
\t\t</a>
\t</div>
</div>

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

<!-- back -->
<div class=\"flex al-it-center ju-co-center background-color-white margin-top-97 margin-bottom-97\">
\t<a href=\"blog\"><img class=\"margin-right-19\" src=\"./assets/images/icons/arrowLeft.png\"></a>
\t<a href=\"blog\" class=\"font-16 color-black line-height-19 margin-right-19\">Back to Blog</a>
\t<div class=\"line-small-black\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 52,  137 => 46,  133 => 45,  127 => 42,  123 => 41,  119 => 40,  116 => 39,  111 => 38,  109 => 37,  91 => 24,  79 => 19,  70 => 13,  62 => 8,  58 => 7,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "post.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/post.twig");
    }
}
