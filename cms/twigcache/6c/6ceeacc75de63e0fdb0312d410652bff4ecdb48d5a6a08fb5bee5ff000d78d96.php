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

/* blog.twig */
class __TwigTemplate_756e408ceb652f037ad6ec5f0c33540c5a49e6e4ec78e1c90431569a62f8eb61 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "blog.twig", 1);
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
        echo "/blog";
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
        $context["Blog"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Blog"]);
        // line 12
        echo "
<!-- intro -->
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blog"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15) < 2)) {
                // line 16
                echo "<div class=\"blog-intro flex flex-900-column\">
\t<div class=\"flex flex-column ju-co-center width-50per margin-top-40 margin-bottom-40\">
\t\t<div class=\"flex\">
\t\t\t<div class=\"line-black margin-left-64 margin-top-19 display-none-960\"></div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-46 color-black line-height-54 margin-bottom-11 margin-left-40 width-462\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 21), "html", null, true);
                echo "</div>
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-bottom-66 width-462 margin-900-right-40 border-box\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 22), "html", null, true);
                echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-black margin-left-64\"></div>
\t\t\t<a href=\"post/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t<a href=\"post/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</a>
\t\t</div>
\t</div>
\t<div style=\"background-image: url('img/";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Photo", [], "any", false, false, false, 33), "html", null, true);
                echo "')\" class=\"blog-intro-image\"></div>
</div>
";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
<!-- blog posts -->
<div class=\"background-color-grey flex\">
\t<div class=\"flex margin-top-97 width-100per ju-co-center\">
\t\t";
        // line 42
        echo "\t\t<div class=\"flex flex-column al-it-900-center\">
\t\t\t<div class=\"flex flex-wrap margin-left-40 ju-co-900-center\">
\t\t\t
\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Blog"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46) > 1)) {
                // line 47
                echo "\t\t\t\t<div class=\"flex flex-column margin-bottom-97 margin-right-40\">
\t\t\t\t\t<div class=\"image margin-bottom-22\" style=\"background-image: url('img/";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Photo", [], "any", false, false, false, 48), "html", null, true);
                echo "')\"></div>
\t\t\t\t\t<div class=\"width-24vw font-24 font-bold color-black line-height-28 margin-bottom-14\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 49), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"flex-wrap-3-line width-24vw font-14 color-black line-height-22 margin-bottom-22\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 50), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t\t\t<div class=\"line-small-black\"></div>
\t\t\t\t\t\t<a href=\"post/";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 53), "html", null, true);
                echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t\t\t\t<a href=\"post/";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 54), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t</div>
\t\t</div>
\t</div>\t
</div>


";
    }

    public function getTemplateName()
    {
        return "blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 61,  243 => 60,  234 => 54,  230 => 53,  224 => 50,  220 => 49,  216 => 48,  213 => 47,  210 => 46,  193 => 45,  188 => 42,  182 => 37,  164 => 33,  156 => 28,  152 => 27,  144 => 22,  140 => 21,  133 => 16,  131 => 15,  114 => 14,  110 => 12,  108 => 11,  105 => 10,  101 => 9,  92 => 8,  85 => 7,  77 => 6,  70 => 5,  63 => 4,  55 => 3,  50 => 1,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/blog.twig");
    }
}
