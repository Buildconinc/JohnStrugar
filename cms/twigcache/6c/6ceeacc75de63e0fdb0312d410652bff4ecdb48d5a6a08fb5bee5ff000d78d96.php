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
<!-- intro -->
<div class=\"blog-intro flex\">
\t<div class=\"flex flex-column ju-co-center width-50per\">
\t\t<div class=\"flex\">
\t\t\t<div class=\"line-black margin-left-64 margin-top-19\"></div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-46 color-black line-height-54 margin-bottom-11 margin-left-40\">Industrial accidents</div>
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-bottom-66 width-462\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-black margin-left-64\"></div>
\t\t\t<div class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</div>
\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t</div>
\t</div>
\t<div class=\"blog-intro-image\"></div>
</div>

<!-- blog posts -->
<div class=\"background-color-grey flex\">
\t<div class=\"flex margin-top-97 width-100per\">
\t\t<div class=\"line-transparent margin-left-64 margin-top-19\"></div>
\t\t<div class=\"flex flex-column width-80per\">
\t\t\t<div class=\"flex flex-wrap ju-co-between margin-left-40 width-100per\">
\t\t\t<!-- 1 -->
\t\t\t\t<div class=\"flex flex-column margin-bottom-81\">
\t\t\t\t\t<img class=\"image margin-bottom-22\" src=\"./assets/images/test.jpg\">
\t\t\t\t\t<div class=\"width-20vw font-24 font-bold color-black line-height-28 margin-bottom-14\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t\t\t<div class=\"width-20vw font-14 color-black line-height-22 margin-bottom-22\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'...</div>
\t\t\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t\t\t<div class=\"line-small-black margin-right-16\"></div>
\t\t\t\t\t\t<div class=\"font-16 color-black line-height-19 margin-right-19\">Read more</div>
\t\t\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- 2 -->
\t\t\t\t<div class=\"flex flex-column margin-bottom-81\">
\t\t\t\t\t<img class=\"image margin-bottom-22\" src=\"./assets/images/test.jpg\">
\t\t\t\t\t<div class=\"width-20vw font-24 font-bold color-black line-height-28 margin-bottom-14\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t\t\t<div class=\"width-20vw font-14 color-black line-height-22 margin-bottom-22\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'...</div>
\t\t\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t\t\t<div class=\"line-small-black margin-right-16\"></div>
\t\t\t\t\t\t<div class=\"font-16 color-black line-height-19 margin-right-19\">Read more</div>
\t\t\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- 3 -->
\t\t\t\t<div class=\"flex flex-column margin-bottom-81\">
\t\t\t\t\t<img class=\"image margin-bottom-22\" src=\"./assets/images/test.jpg\">
\t\t\t\t\t<div class=\"width-20vw font-24 font-bold color-black line-height-28 margin-bottom-14\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t\t\t<div class=\"width-20vw font-14 font-300 color-black line-height-22 margin-bottom-22\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'...</div>
\t\t\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t\t\t<div class=\"line-small-black margin-right-16\"></div>
\t\t\t\t\t\t<div class=\"font-16  color-black line-height-19 margin-right-19\">Read more</div>
\t\t\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<!-- 4 -->
\t\t\t\t<div class=\"flex flex-column margin-bottom-81\">
\t\t\t\t\t<img class=\"image margin-bottom-22\" src=\"./assets/images/test.jpg\">
\t\t\t\t\t<div class=\"width-20vw font-24 font-bold color-black line-height-28 margin-bottom-14\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t\t\t<div class=\"flex-wrap-3-line width-20vw font-14 font-300 color-black line-height-22 margin-bottom-22\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry' Lorem Ipsum has been the industry'</div>
\t\t\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t\t\t<div class=\"line-small-black margin-right-16\"></div>
\t\t\t\t\t\t<div class=\"font-16  color-black line-height-19 margin-right-19\">Read more</div>
\t\t\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
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
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "blog.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/blog.twig");
    }
}
