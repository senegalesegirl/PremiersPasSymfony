<?php

/* ::base.html.twig */
class __TwigTemplate_aabe8d7f27bc312fa2c513fb4136473d23633e7f27a59a8d8973ad9d6e134ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
     <div id=\"principal\">
         <div id=\"bandeau\"></div>
         <div id=\"corps\">
             <div id=\"presentation\">
                 <h1>Mon site</h1>
                 <h2>mon blog</h2>
                 <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("partieune_miniblog_homepage");
        echo "\">  Liste des messages</a><br />
                 <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("partieune_miniblog_ajouter");
        echo "\"> Ajouter un message</a><br />

             </div>
             <div id=\"\"miniblog>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "             </div>
         </div>
     </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenu sur mon miniblog de test!!!!!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/monsite.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  78 => 7,  75 => 6,  69 => 5,  60 => 24,  58 => 23,  51 => 19,  47 => 18,  34 => 9,  32 => 6,  28 => 5,  22 => 1,);
    }
}
