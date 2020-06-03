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
\t<img class=\"home-intro-play\" src=\"./assets/images/icons/play.png\">
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-16 color-white line-height-19 margin-left-202 margin-bottom-16\">Treatments</div>
\t\t<div class=\"flex\">
\t\t\t<div class=\"line-white margin-left-64 margin-top-19\"></div>
\t\t\t<div class=\"font-32 color-white line-height-38 margin-bottom-38 width-416 margin-left-40\">Lorem Ipsum is simply dummy text</div>
\t\t</div>
\t\t<div class=\"font-14 color-white font-300 line-height-22 margin-left-202 margin-bottom-66 width-462\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
\t\t<div class=\"flex al-it-center\">
\t\t\t<div class=\"line-white margin-left-64\"></div>
\t\t\t<div class=\"font-16 font-bold color-white line-height-19 margin-left-40 margin-right-19\">Read more</div>
\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t</div>
\t</div>
</div>

<!-- treatments -->

<!-- blog posts -->
<div class=\"background-color-grey flex flex-column\">
\t<div class=\"flex al-it-center margin-bottom-81 margin-top-97\">
\t\t<div class=\"line-black margin-left-64\"></div>
\t\t<div class=\"font-32 color-black line-height-38 margin-left-40\">General Health Advice</div>
\t</div>
\t<div class=\"flex ju-co-between padding-left-202 padding-right-202 margin-bottom-97\">
\t<!-- 1 -->
\t\t<div class=\"flex flex-column\">
\t\t\t<img class=\"image margin-bottom-22\" src=\"./assets/images/test.jpg\">
\t\t\t<div class=\"width-20vw font-24 font-bold color-black line-height-28 margin-bottom-14\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t<div class=\"width-20vw font-14 color-black line-height-22 margin-bottom-22\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t<div class=\"line-small-black margin-right-16\"></div>
\t\t\t\t<div class=\"font-16 font-bold color-black line-height-19 margin-right-19\">Read more</div>
\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</div>
\t\t</div>
\t<!-- 2 -->
\t\t<div class=\"flex flex-column\">
\t\t\t<img class=\"image margin-bottom-22\" src=\"./assets/images/test.jpg\">
\t\t\t<div class=\"width-20vw font-24 font-bold color-black line-height-28 margin-bottom-14\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t<div class=\"width-20vw font-14 color-black line-height-22 margin-bottom-22\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t<div class=\"line-small-black margin-right-16\"></div>
\t\t\t\t<div class=\"font-16 font-bold color-black line-height-19 margin-right-19\">Read more</div>
\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</div>
\t\t</div>
\t<!-- 3 -->
\t\t<div class=\"flex flex-column\">
\t\t\t<img class=\"image margin-bottom-22\" src=\"./assets/images/test.jpg\">
\t\t\t<div class=\"width-20vw font-24 font-bold color-black line-height-28 margin-bottom-14\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t<div class=\"width-20vw font-14 color-black line-height-22 margin-bottom-22\">Lorem Ipsum is simply dummy text of the printing</div>
\t\t\t<div class=\"flex al-it-center\">
\t\t\t\t<div class=\"line-small-black margin-right-16\"></div>
\t\t\t\t<div class=\"font-16 font-bold color-black line-height-19 margin-right-19\">Read more</div>
\t\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- about -->

<!-- text -->

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
        return array (  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/index.twig");
    }
}
