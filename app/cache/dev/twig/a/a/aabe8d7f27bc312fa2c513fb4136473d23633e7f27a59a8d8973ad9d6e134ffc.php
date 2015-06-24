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
        $__internal_87efd8d75955ddb51975d3a31ad462a89e6cf4592c70ba025e489fefcda13b79 = $this->env->getExtension("native_profiler");
        $__internal_87efd8d75955ddb51975d3a31ad462a89e6cf4592c70ba025e489fefcda13b79->enter($__internal_87efd8d75955ddb51975d3a31ad462a89e6cf4592c70ba025e489fefcda13b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 19
        echo $this->env->getExtension('routing')->getPath("partieune_miniblog_homepage");
        echo "\">  Liste des messages</a><br />
                 <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("partieune_miniblog_ajouter");
        echo "\"> Ajouter un message</a><br />
             </div>

             <div id=\"\"miniblog>
                ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "             </div>
         </div>
     </div>
    </body>
</html>
";
        
        $__internal_87efd8d75955ddb51975d3a31ad462a89e6cf4592c70ba025e489fefcda13b79->leave($__internal_87efd8d75955ddb51975d3a31ad462a89e6cf4592c70ba025e489fefcda13b79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77ef62eec6c02075d338a5e66f4595d2c216090e0b2f9c1a9c4fc08c67fc2049 = $this->env->getExtension("native_profiler");
        $__internal_77ef62eec6c02075d338a5e66f4595d2c216090e0b2f9c1a9c4fc08c67fc2049->enter($__internal_77ef62eec6c02075d338a5e66f4595d2c216090e0b2f9c1a9c4fc08c67fc2049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenu sur mon miniblog de test!!!!!";
        
        $__internal_77ef62eec6c02075d338a5e66f4595d2c216090e0b2f9c1a9c4fc08c67fc2049->leave($__internal_77ef62eec6c02075d338a5e66f4595d2c216090e0b2f9c1a9c4fc08c67fc2049_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2fc78ad96a61641ea336eb2efb61cb1f569f7cc8924aa0300adda74d91fac57 = $this->env->getExtension("native_profiler");
        $__internal_e2fc78ad96a61641ea336eb2efb61cb1f569f7cc8924aa0300adda74d91fac57->enter($__internal_e2fc78ad96a61641ea336eb2efb61cb1f569f7cc8924aa0300adda74d91fac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/monsite.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        ";
        
        $__internal_e2fc78ad96a61641ea336eb2efb61cb1f569f7cc8924aa0300adda74d91fac57->leave($__internal_e2fc78ad96a61641ea336eb2efb61cb1f569f7cc8924aa0300adda74d91fac57_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa8ab218961029f3fe2fc7caecc3349d377ea1d57ada0e30429dd3ce5cdf6704 = $this->env->getExtension("native_profiler");
        $__internal_fa8ab218961029f3fe2fc7caecc3349d377ea1d57ada0e30429dd3ce5cdf6704->enter($__internal_fa8ab218961029f3fe2fc7caecc3349d377ea1d57ada0e30429dd3ce5cdf6704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa8ab218961029f3fe2fc7caecc3349d377ea1d57ada0e30429dd3ce5cdf6704->leave($__internal_fa8ab218961029f3fe2fc7caecc3349d377ea1d57ada0e30429dd3ce5cdf6704_prof);

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
        return array (  104 => 24,  94 => 7,  88 => 6,  76 => 5,  64 => 25,  62 => 24,  55 => 20,  51 => 19,  37 => 9,  35 => 6,  31 => 5,  25 => 1,);
    }
}
