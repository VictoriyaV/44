<?php

/* blocks/layout.html.twig */
class __TwigTemplate_9961cba0ff7eb7a8b578b75018fd4b904dfa12b1e4b924208cc919cfd20fa009 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blocks/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"content\">
        ";
        // line 4
        $this->loadTemplate("blocks/leftcont.html.twig", "blocks/layout.html.twig", 4)->display($context);
        // line 5
        echo "        
        <div id=\"mainpart\">
            <div id=\"head\">
                <div id=\"headimages\">
                    <a href=\"lions.php#metallist\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/metallist.jpg"), "html", null, true);
        echo "\" alt=\"Стадион Металлист\"></a>
                    <a href=\"lions.php#example\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/mirrorStream.jpg"), "html", null, true);
        echo "\" alt=\"Зеркальная струя\"></a>
                    <a href=\"lions.php#example\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/parkGorkogo.jpg"), "html", null, true);
        echo "\" alt=\"Парк Горького\"></a>
                </div>
                <div id=\"mainimagesthis\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/content/gerb.png"), "html", null, true);
        echo "\" alt=\"Герб Харькова\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/content/flag.png"), "html", null, true);
        echo "\" alt=\"Флаг Харькова\">
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/content/kharkiv.png"), "html", null, true);
        echo "\" alt=\"Карта Харькова\">
                </div>
                <div id=\"mainannotation\">
                    <p>Харьков — крупнейший город на северо-востоке Украины, первая столица Украины.</p>
                </div>
            </div>
            <div id=\"maincontent\">
                ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "            </div>

        </div>
        ";
        // line 28
        $this->loadTemplate("blocks/footer.html.twig", "blocks/layout.html.twig", 28)->display($context);
        // line 29
        echo "    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "                ";
    }

    public function getTemplateName()
    {
        return "blocks/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  89 => 23,  84 => 29,  82 => 28,  77 => 25,  75 => 23,  65 => 16,  61 => 15,  57 => 14,  51 => 11,  47 => 10,  43 => 9,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div id="content">*/
/*         {% include ('blocks/leftcont.html.twig') %}*/
/*         */
/*         <div id="mainpart">*/
/*             <div id="head">*/
/*                 <div id="headimages">*/
/*                     <a href="lions.php#metallist"><img src="{{ asset('img/metallist.jpg') }}" alt="Стадион Металлист"></a>*/
/*                     <a href="lions.php#example"><img src="{{ asset('img/mirrorStream.jpg') }}" alt="Зеркальная струя"></a>*/
/*                     <a href="lions.php#example"><img src="{{ asset('img/parkGorkogo.jpg') }}" alt="Парк Горького"></a>*/
/*                 </div>*/
/*                 <div id="mainimagesthis">*/
/*                     <img src="{{ asset('img/content/gerb.png') }}" alt="Герб Харькова">*/
/*                     <img src="{{ asset('img/content/flag.png') }}" alt="Флаг Харькова">*/
/*                     <img src="{{ asset('img/content/kharkiv.png') }}" alt="Карта Харькова">*/
/*                 </div>*/
/*                 <div id="mainannotation">*/
/*                     <p>Харьков — крупнейший город на северо-востоке Украины, первая столица Украины.</p>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="maincontent">*/
/*                 {% block content %}*/
/*                 {% endblock %}*/
/*             </div>*/
/* */
/*         </div>*/
/*         {% include ('blocks/footer.html.twig') %}*/
/*     </div>*/
/* {% endblock %}*/
