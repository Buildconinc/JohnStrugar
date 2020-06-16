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
        $this->parent = $this->loadTemplate("base.twig", "blog.twig", 1);
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
        $context["Blog"] = call_user_func_array($this->env->getFunction('fetch')->getCallable(), ["Blog"]);
        // line 5
        echo "
<!-- intro -->
";
        // line 7
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
            // line 8
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 8) < 2)) {
                // line 9
                echo "<div class=\"blog-intro flex\">
\t<div class=\"flex flex-column ju-co-center width-50per\">
\t\t<div class=\"flex\">
\t\t\t<div class=\"line-black margin-left-64 margin-top-19\"></div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-46 color-black line-height-54 margin-bottom-11 margin-left-40 width-462\">";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 14), "html", null, true);
                echo "</div>
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-bottom-66 width-462\">";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 15), "html", null, true);
                echo "</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-black margin-left-64\"></div>
\t\t\t<a href=\"post/";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 20), "html", null, true);
                echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t<a href=\"post/";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</a>
\t\t</div>
\t</div>
\t<div style=\"background-image: url('img/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Photo", [], "any", false, false, false, 26), "html", null, true);
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
        // line 30
        echo "
<!-- blog posts -->
<div class=\"background-color-grey flex\">
\t<div class=\"flex margin-top-97 width-100per\">
\t\t<div class=\"line-transparent margin-left-64 margin-top-19\"></div>
\t\t<div class=\"flex flex-column width-80per\">
\t\t\t<div class=\"flex flex-wrap ju-co-between margin-left-40 width-100per\">
\t\t\t
\t\t\t";
        // line 38
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
            // line 39
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39) > 1)) {
                // line 40
                echo "\t\t\t\t<div class=\"flex flex-column margin-bottom-81\">
\t\t\t\t\t<img class=\"image margin-bottom-22\" style=\"background-image: url('img/";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Photo", [], "any", false, false, false, 41), "html", null, true);
                echo "')\">
\t\t\t\t\t<div class=\"width-20vw font-24 font-bold color-black line-height-28 margin-bottom-14\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Title", [], "any", false, false, false, 42), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"flex-wrap-3-line width-20vw font-14 color-black line-height-22 margin-bottom-22\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "short_text", [], "any", false, false, false, 43), "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t\t\t<div class=\"line-small-black margin-right-16\"></div>
\t\t\t\t\t\t<a href=\"post/";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 46), "html", null, true);
                echo "\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t\t\t\t<a href=\"post/";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "Slug", [], "any", false, false, false, 47), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 53
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
        // line 54
        echo "\t\t\t<!-- 2 -->
\t\t\t\t";
        // line 87
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
        return array (  204 => 87,  201 => 54,  187 => 53,  178 => 47,  174 => 46,  168 => 43,  164 => 42,  160 => 41,  157 => 40,  154 => 39,  137 => 38,  127 => 30,  109 => 26,  101 => 21,  97 => 20,  89 => 15,  85 => 14,  78 => 9,  76 => 8,  59 => 7,  55 => 5,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/blog.twig");
    }
}
