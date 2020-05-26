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
class __TwigTemplate_e8c9fc0ada4505e61ce86fea9b22a25fae2d72db187522cc561a1aa436f23ef4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'description' => [$this, 'block_description'],
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
  <title>Drax Detailing</title>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo "\"/>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"cms/sharedstyle.css\">

\t<link rel=\"stylesheet\" href=\"css/jquery-ui.css\">

  <link rel=\"stylesheet\" href=\"owl/assets/owl.carousel.min.css\" />
  <link rel=\"stylesheet\" href=\"owl/assets/owl.theme.default.css\" />  

\t<link type=\"text/css\" rel=\"stylesheet\" href=\"lightGallery/src/css/lightgallery.css\" />                 

\t<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/style.css\">
  <!--
  <meta name=\"keywords\" content=\"\">
  <link rel=\"icon\" href=\"images/favicon.png\">
  -->
</head>
<body >


";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "

</body>
</html>
";
    }

    // line 8
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 27
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
        return array (  89 => 27,  83 => 8,  75 => 28,  73 => 27,  51 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "/Applications/MAMP/htdocs/john-g-strugar/twigtemplates/base.twig");
    }
}
