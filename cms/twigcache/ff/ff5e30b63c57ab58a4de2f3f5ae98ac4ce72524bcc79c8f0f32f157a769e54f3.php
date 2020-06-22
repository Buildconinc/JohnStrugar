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

/* base.twig */
class __TwigTemplate_ae44558743b35f39d44c27fd22f9be8554b316686d1396632fd70e6d807eadb5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" style=\"height: 100%\">
<head>
  <base href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["_BASE"] ?? null), "html", null, true);
        echo "\">
  <title>John G. Strugar</title>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  ";
        // line 9
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"cms/sharedstyle.css\">
\t<link rel=\"stylesheet\" href=\"owl/assets/owl.carousel.min.css\"/>
  <link rel=\"stylesheet\" href=\"owl/assets/owl.theme.default.css\"/>  
\t<link rel=\"stylesheet\" href=\"fancybox-master/dist/jquery.fancybox.min.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/style.css\">
</head>
<body >

<div class=\"header\">
\t<div class=\"header-left display-none-960\">
\t\t<a href=\"#\">
\t\t\t<img class=\"margin-right-100\" src=\"./assets/images/full-logo.png\">
\t\t</a>
\t\t<a href=\"about_us\" class=\"font-14 color-white font-gotham margin-right-60\">About</a>
\t\t<a href=\"treatments\" class=\"font-14 color-white font-gotham margin-right-60\">Treatments</a>
\t\t<a href=\"blog\" class=\"font-14 color-white font-gotham margin-right-60\">Blog</a>
\t</div>
\t<div class=\"header-right display-none-960\">
\t\t<p class=\"font-14 color-white font-gotham margin-right-16 display-none-1024\">Address</p>
\t\t<p class=\"font-14 color-white font-gotham margin-right-55 display-none-1024\">500 Chase Parkway Waterbury, CT 06708</p>
\t\t<p class=\"font-14 color-white font-gotham margin-right-16 display-none-1024\">Phone</p>
\t\t<p class=\"font-14 color-white font-gotham margin-right-55 display-none-1024\">+1 (0) 44 832 58 58</p>
\t\t<a href=\"#contact\" class=\"font-14 color-white font-gotham\">Contact</a>
\t</div>
\t<div style=\"margin-left: 2rem;\" class=\"display-none flex-960\">
\t\t<a href=\"#\" onclick=\"OpenClose('false')\">
\t\t\t<img src=\"./assets/images/icons/logo.png\">
\t\t</a>
\t</div>
\t<div onclick=\"OpenClose()\" style=\"margin-right: 2rem;\" class=\"display-none flex-960\">
\t\t<img id=\"open\" class=\"flex\" src=\"./assets/images/icons/meni.png\">
\t\t<img id=\"close\" class=\"display-none\" src=\"./assets/images/icons/close.png\">
\t</div>
</div>
<div class=\"ham flex-column al-it-center\">
\t<a href=\"#\" onclick=\"OpenClose('false')\" class=\"font-16 line-height-19 color-white margin-bottom-50 margin-top-97\">Home</a>
\t<a href=\"about_us\" class=\"font-16 line-height-19 color-white margin-bottom-50\">About</a>
\t<a href=\"treatments\" class=\"font-16 line-height-19 color-white margin-bottom-50\">Treatments</a>
\t<a href=\"blog\" class=\"font-16 line-height-19 color-white margin-bottom-81\">Blog</a>
\t<a class=\"font-14 line-height-17 font-300 color-white margin-bottom-16\">Address</a>
\t<a class=\"font-14 line-height-17 color-white margin-bottom-50\">500 Chase Parkway Waterbury, CT 06708</a>
\t<a class=\"font-14 line-height-17 font-300 color-white margin-bottom-16\">Phone</a>
\t<a class=\"font-16 line-height-19 color-white margin-bottom-50\">+1 (0) 44 832 58 58</a>
\t<a href=\"#contact\" class=\"font-16 line-height-19 color-white margin-bottom-50\">Contact</a>
</div>
<div style=\"height: 2.75rem; width: 100%;\"></div>

";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "
<div id=\"contact\" class=\"footer flex-900-column\">
\t<div class=\"footer-left\">
\t<div class=\"footer-background\">
\t\t<div class=\"footer-left-block\">
\t\t\t<div class=\"flex flex-column margin-bottom-50\">
\t\t\t\t<div class=\"font-46 color-white font-bold margin-bottom-35\">CONTACT</div>
\t\t\t\t<div class=\"font-24 color-white\">Lorem Ipsum is simply dummy </br> text of the printing</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column\">
\t\t\t\t<div class=\"font-24 color-white margin-bottom-50\">Address</div>
\t\t\t\t<div class=\"flex flex-900-column\">
\t\t\t\t\t<div class=\"flex flex-column margin-right-95 margin-bottom-35\">
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17 margin-bottom-16\">WATERBURY</p>
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17\">Main Office</p>
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17\">500 Chase Parkway</p>
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17 margin-bottom-16\">Waterbury, CT 06708</p>
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17\">Phone: 203-755-6677</p>
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17\">Toll-Free: (800) 463-8764</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-column margin-bottom-35\">
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17 margin-bottom-16\">WATERBURY</p>
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17\">Hand to Shoulder Center</p>
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17\">1320 West Main Street</p>
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17 margin-bottom-16\">Waterbury, CT 06708</p>
\t\t\t\t\t\t<p class=\"font-14 color-white line-height-17\">Phone: 203-755-6677</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-column display-none-900\">
\t\t\t\t<div class=\"font-24 color-white margin-bottom-30\">Social networks</div>
\t\t\t\t<div class=\"flex\">
\t\t\t\t\t<img class=\"margin-right-16\" src=\"./assets/images/icons/ig.png\">
\t\t\t\t\t<img class=\"margin-right-16\" src=\"./assets/images/icons/facebook.png\">
\t\t\t\t\t<img src=\"./assets/images/icons/in.png\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-right\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2986.0018225965655!2d-73.06685628456921!3d41.54755777924971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e7c1c769116965%3A0x193ab5f6d2d2a41d!2sNOSS%3B%20Neurosurgery%2C%20Orthopaedics%20%26%20Spine%20Specialists%2C%20PC!5e0!3m2!1sen!2srs!4v1590764643079!5m2!1sen!2srs\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t</div>
\t<div class=\"flex-column display-none flex-900 background-color-gold padding-40\">
\t\t<div class=\"font-24 color-white margin-bottom-30\">Social networks</div>
\t\t<div class=\"flex\">
\t\t\t<img class=\"margin-right-16\" src=\"./assets/images/icons/ig.png\">
\t\t\t<img class=\"margin-right-16\" src=\"./assets/images/icons/facebook.png\">
\t\t\t<img src=\"./assets/images/icons/in.png\">
\t\t</div>
\t</div>
</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
<script src=\"owl/owl.carousel.min.js\"></script>
<script src=\"fancybox-master/dist/jquery.fancybox.min.js\"></script>

<script src=\"./js/owl.js\"></script>
<script src=\"./js/video.js\"></script>
<script src=\"./js/menu.js\"></script>

<script>
\t\$(document).ready(function() {
\t\t\$('.post-text p:has(img)').css({'margin-left':'-2rem', 'margin-right':'-2rem', 'margin-top':'2rem', 'margin-bottom':'2rem', 'text-align' : 'center',});
\t});
</script>

</body>
</html>
";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 56,  101 => 57,  99 => 56,  50 => 9,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/base.twig");
    }
}
