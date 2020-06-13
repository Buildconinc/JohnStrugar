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
\t<!-- 1 -->
\t<div class=\"treatments-tretment flex flex-column margin-bottom-81\">
\t\t<img class=\"treatments-tretment-image margin-bottom-50\" src=\"./assets/images/test2.jpg\">
\t\t<div class=\"treatments-tretment-text font-20 line-height-24 font-bold color-black margin-left-114 margin-bottom-22\">Spinal diseases of the young</div>
\t\t<div class=\"treatments-tretment-text font-14 color-black line-height-22 margin-bottom-38 margin-left-114\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-black margin-left-114\"></div>
\t\t\t<div class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</div>
\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t</div>
\t</div>
\t<!-- 2 -->
\t<div class=\"treatments-tretment flex flex-column margin-bottom-81\">
\t\t<img class=\"treatments-tretment-image margin-bottom-50\" src=\"./assets/images/test2.jpg\">
\t\t<div class=\"treatments-tretment-text font-20 line-height-24 font-bold color-black margin-left-114 margin-bottom-22\">Spinal diseases of the young</div>
\t\t<div class=\"treatments-tretment-text font-14 color-black line-height-22 margin-bottom-38 margin-left-114\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-black margin-left-114\"></div>
\t\t\t<div class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</div>
\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t</div>
\t</div>
\t<!-- 3 -->
\t<div class=\"treatments-tretment flex flex-column margin-bottom-81\">
\t\t<img class=\"treatments-tretment-image margin-bottom-50\" src=\"./assets/images/test2.jpg\">
\t\t<div class=\"treatments-tretment-text font-20 line-height-24 font-bold color-black margin-left-114 margin-bottom-22\">Spinal diseases of the young</div>
\t\t<div class=\"treatments-tretment-text font-14 color-black line-height-22 margin-bottom-38 margin-left-114\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-black margin-left-114\"></div>
\t\t\t<a href=\"treatment\" class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</a>
\t\t\t<a href=\"treatment\"><img src=\"./assets/images/icons/arrowRight.png\"></a>
\t\t</div>
\t</div>

</div>

<!-- testimonial -->
";
        // line 52
        $this->loadTemplate("testimonial.twig", "treatments.twig", 52)->display($context);
        // line 53
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
        return array (  103 => 53,  101 => 52,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "treatments.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/treatments.twig");
    }
}
