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
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/style.css\">
</head>
<body >


";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "

</body>
</html>
";
    }

    // line 15
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
        return array (  68 => 15,  60 => 16,  58 => 15,  50 => 9,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "/Applications/MAMP/htdocs/JohnStrugar/twigtemplates/base.twig");
    }
}
