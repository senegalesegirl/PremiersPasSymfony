<?php

/* PartieuneMiniblogBundle:Default:ajouter.html.twig */
class __TwigTemplate_2dfbef1c0933a03e216c28b1f96f31381715dc91a50eb342bbdca5a3e7ca22ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PartieuneMiniblogBundle::layout.html.twig", "PartieuneMiniblogBundle:Default:ajouter.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'miniblog_body' => array($this, 'block_miniblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PartieuneMiniblogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea75a613ae106423849519409e3390d9b424f3d7e7f7aa7bce876e9e06084093 = $this->env->getExtension("native_profiler");
        $__internal_ea75a613ae106423849519409e3390d9b424f3d7e7f7aa7bce876e9e06084093->enter($__internal_ea75a613ae106423849519409e3390d9b424f3d7e7f7aa7bce876e9e06084093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartieuneMiniblogBundle:Default:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea75a613ae106423849519409e3390d9b424f3d7e7f7aa7bce876e9e06084093->leave($__internal_ea75a613ae106423849519409e3390d9b424f3d7e7f7aa7bce876e9e06084093_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ec2479ecc57c21ae90a92fcf7891ed1400b2afe765db39ca9bba4d506e4dbb6 = $this->env->getExtension("native_profiler");
        $__internal_6ec2479ecc57c21ae90a92fcf7891ed1400b2afe765db39ca9bba4d506e4dbb6->enter($__internal_6ec2479ecc57c21ae90a92fcf7891ed1400b2afe765db39ca9bba4d506e4dbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - ajout d'un message";
        
        $__internal_6ec2479ecc57c21ae90a92fcf7891ed1400b2afe765db39ca9bba4d506e4dbb6->leave($__internal_6ec2479ecc57c21ae90a92fcf7891ed1400b2afe765db39ca9bba4d506e4dbb6_prof);

    }

    // line 5
    public function block_miniblog_body($context, array $blocks = array())
    {
        $__internal_605e4f33944dc5b6d62be0df568a52f203bff5ddefdfab7b023c0477381c8917 = $this->env->getExtension("native_profiler");
        $__internal_605e4f33944dc5b6d62be0df568a52f203bff5ddefdfab7b023c0477381c8917->enter($__internal_605e4f33944dc5b6d62be0df568a52f203bff5ddefdfab7b023c0477381c8917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "miniblog_body"));

        // line 6
        echo "    <h2>Ajout d'un message</h2>
    ";
        // line 7
        $this->loadTemplate("PartieuneMiniblogBundle:Default:form.html.twig", "PartieuneMiniblogBundle:Default:ajouter.html.twig", 7)->display($context);
        
        $__internal_605e4f33944dc5b6d62be0df568a52f203bff5ddefdfab7b023c0477381c8917->leave($__internal_605e4f33944dc5b6d62be0df568a52f203bff5ddefdfab7b023c0477381c8917_prof);

    }

    public function getTemplateName()
    {
        return "PartieuneMiniblogBundle:Default:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  54 => 6,  48 => 5,  35 => 3,  11 => 2,);
    }
}
