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
        $__internal_69877457f9f9dc2b9635c9c3b9edff0ec4eee1547960ed5ea68e414db87bc61b = $this->env->getExtension("native_profiler");
        $__internal_69877457f9f9dc2b9635c9c3b9edff0ec4eee1547960ed5ea68e414db87bc61b->enter($__internal_69877457f9f9dc2b9635c9c3b9edff0ec4eee1547960ed5ea68e414db87bc61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartieuneMiniblogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69877457f9f9dc2b9635c9c3b9edff0ec4eee1547960ed5ea68e414db87bc61b->leave($__internal_69877457f9f9dc2b9635c9c3b9edff0ec4eee1547960ed5ea68e414db87bc61b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_09c284f0e416768fa73e1c62ebf77df572502037c7273ec74a9c88940eb7fc8a = $this->env->getExtension("native_profiler");
        $__internal_09c284f0e416768fa73e1c62ebf77df572502037c7273ec74a9c88940eb7fc8a->enter($__internal_09c284f0e416768fa73e1c62ebf77df572502037c7273ec74a9c88940eb7fc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Mini Blog Khairy";
        
        $__internal_09c284f0e416768fa73e1c62ebf77df572502037c7273ec74a9c88940eb7fc8a->leave($__internal_09c284f0e416768fa73e1c62ebf77df572502037c7273ec74a9c88940eb7fc8a_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_451c50274d5dfff91f5f0b47bc17f421b3368f73292020201cc06d74a891fa1b = $this->env->getExtension("native_profiler");
        $__internal_451c50274d5dfff91f5f0b47bc17f421b3368f73292020201cc06d74a891fa1b->enter($__internal_451c50274d5dfff91f5f0b47bc17f421b3368f73292020201cc06d74a891fa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <h1>Mini Blog</h1>

    ";
        // line 8
        $this->displayBlock('miniblog_body', $context, $blocks);
        // line 9
        echo "
";
        
        $__internal_451c50274d5dfff91f5f0b47bc17f421b3368f73292020201cc06d74a891fa1b->leave($__internal_451c50274d5dfff91f5f0b47bc17f421b3368f73292020201cc06d74a891fa1b_prof);

    }

    // line 8
    public function block_miniblog_body($context, array $blocks = array())
    {
        $__internal_892d60212b7472dc801fdf23f95308cc2129c3b2d22dae67460cc868e7488e99 = $this->env->getExtension("native_profiler");
        $__internal_892d60212b7472dc801fdf23f95308cc2129c3b2d22dae67460cc868e7488e99->enter($__internal_892d60212b7472dc801fdf23f95308cc2129c3b2d22dae67460cc868e7488e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "miniblog_body"));

        
        $__internal_892d60212b7472dc801fdf23f95308cc2129c3b2d22dae67460cc868e7488e99->leave($__internal_892d60212b7472dc801fdf23f95308cc2129c3b2d22dae67460cc868e7488e99_prof);

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
        return array (  70 => 8,  62 => 9,  60 => 8,  55 => 5,  49 => 4,  36 => 3,  11 => 2,);
    }
}
