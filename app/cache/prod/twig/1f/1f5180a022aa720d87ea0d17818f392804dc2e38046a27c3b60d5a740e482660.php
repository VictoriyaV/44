<?php

/* blocks/leftcont.html.twig */
class __TwigTemplate_ce5e566407a7d05558f8846b732c77d37000d8a9b8a83b49b8ee9d1a6ac158fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"leftcontainer\">
    <div id=\"headlogo\">
        <img id=\"logo\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Логотип\">
    </div>

    <div id=\"leftmenu\">
        <ul>
            ";
        // line 8
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AppBundle:Default:menu"), array());
        // line 9
        echo "        </ul>
    </div>

    <div id=\"auth\">
        
    </div>

    <div id=\"leftdoing\">
        <div id=\"doingsName\" onClick=\"toggle('blockHide');\"><h2>События</h2></div>
        <div id=\"blockHide\">
            ";
        // line 19
        $this->loadTemplate("blocks/doings_block.html.twig", "blocks/leftcont.html.twig", 19)->display($context);
        // line 20
        echo "        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "blocks/leftcont.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  45 => 19,  33 => 9,  31 => 8,  23 => 3,  19 => 1,);
    }
}
/* <div id="leftcontainer">*/
/*     <div id="headlogo">*/
/*         <img id="logo" src="{{ asset('img/logo.png') }}" alt="Логотип">*/
/*     </div>*/
/* */
/*     <div id="leftmenu">*/
/*         <ul>*/
/*             {% render(controller('AppBundle:Default:menu')) %}*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div id="auth">*/
/*         */
/*     </div>*/
/* */
/*     <div id="leftdoing">*/
/*         <div id="doingsName" onClick="toggle('blockHide');"><h2>События</h2></div>*/
/*         <div id="blockHide">*/
/*             {% include 'blocks/doings_block.html.twig' %}*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
