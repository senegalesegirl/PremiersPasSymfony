<?php

/* PartieuneMiniblogBundle::layout.html.twig */
class __TwigTemplate_e21c9cb73d8ea2d8857f385b53cce32921525dadb0135c4f60cc1202b35ad4a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "PartieuneMiniblogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'miniblog_body' => array($this, 'block_miniblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Mini Blog Khairy";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <h1>Mini Blog</h1>

    ";
        // line 8
        $this->displayBlock('miniblog_body', $context, $blocks);
        // line 11
        echo "
";
    }

    // line 8
    public function block_miniblog_body($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "PartieuneMiniblogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  47 => 11,  45 => 8,  40 => 5,  37 => 4,  30 => 3,  11 => 2,);
    }
}
