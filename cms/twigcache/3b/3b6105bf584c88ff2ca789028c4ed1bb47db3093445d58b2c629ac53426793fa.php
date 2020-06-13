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

/* treatment.twig */
class __TwigTemplate_5781a95e91d77eabc83df4ec23b29e504e276633fb30c771319be0e875b243cf extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "treatment.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
<!-- intro -->
<div class=\"flex padding-top-160 padding-bottom-160\">
\t<div class=\"line-black margin-left-64 margin-top-45\"></div>
\t<div class=\"flex flex-column\">
\t\t<div class=\"font-16 line-height-19 color-black margin-left-40 margin-bottom-6\">Treatments</div>
\t\t<div class=\"font-32 line-height-38 color-black width-550 margin-left-40 margin-bottom-50\">Spinal diseases of the young</div>
\t\t<div class=\"flex\">
\t\t\t<div class=\"flex flex-column margin-right-120\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 margin-bottom-6 width-710\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</div>
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-left-40 width-710\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 margin-bottom-6 width-710\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</div>
\t\t\t\t<div class=\"font-14 color-black font-300 line-height-22 width-710\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- video -->
<div class=\"home-intro flex al-it-end ju-co-center\">
\t<img class=\"home-intro-play\" src=\"./assets/images/icons/play.png\">
\t<div class=\"font-24 line-height-29 color-white margin-bottom-38\">video with short sentence</div>
</div>

<!-- testimonial -->
";
        // line 30
        $this->loadTemplate("testimonial.twig", "treatment.twig", 30)->display($context);
        // line 31
        echo "
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
\t\t\t<div class=\"font-16 font-gotham color-black line-height-19 margin-left-40 margin-right-19\">Read more</div>
\t\t\t<img src=\"./assets/images/icons/arrowRight.png\">
\t\t</div>
\t</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "treatment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  79 => 30,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "treatment.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/treatment.twig");
    }
}
