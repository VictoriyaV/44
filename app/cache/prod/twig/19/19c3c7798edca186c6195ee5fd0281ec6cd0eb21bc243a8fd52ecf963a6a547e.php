<?php

/* base.html.twig */
class __TwigTemplate_0ca2a21a5051e880b7fc7fc99dbf29be275e3806e177a311345e27a618f85f51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"Description\" content=\"Сайт об городе Харьков\">
    <meta name=\"Keywords\" content=\"первая столица Украины, Харьков\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body onload=\"myclock();\">
";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Операционные системы";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        <link media=\"screen\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/main.css"), "html", null, true);
        echo "\">
        <link media=\"print\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("styles/print.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <script async src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/lr6.js"), "html", null, true);
        echo "\"></script>
        <script async src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/DateFormat.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  87 => 16,  83 => 15,  78 => 14,  75 => 13,  69 => 11,  64 => 10,  61 => 9,  55 => 8,  50 => 22,  48 => 21,  41 => 18,  38 => 13,  36 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="Description" content="Сайт об городе Харьков">*/
/*     <meta name="Keywords" content="первая столица Украины, Харьков">*/
/*     <title>{% block title %}Операционные системы{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link media="screen" rel="stylesheet" href="{{ asset ('styles/main.css') }}">*/
/*         <link media="print" rel="stylesheet" href="{{ asset ('styles/print.css') }}">*/
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*         <script src="{{ asset ('js/jquery-2.1.4.min.js') }}"></script>*/
/*         <script async src="{{ asset ('js/lr6.js') }}"></script>*/
/*         <script async src="{{ asset ('js/DateFormat.js') }}"></script>*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}"/>*/
/* </head>*/
/* <body onload="myclock();">*/
/* {% block body %}{% endblock %}*/
/* </body>*/
/* </html>*/
