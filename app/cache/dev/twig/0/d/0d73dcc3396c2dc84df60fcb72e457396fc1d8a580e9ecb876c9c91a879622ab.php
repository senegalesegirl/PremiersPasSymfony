<?php

/* PartieuneMiniblogBundle:Default:modifier.html.twig */
class __TwigTemplate_0d73dcc3396c2dc84df60fcb72e457396fc1d8a580e9ecb876c9c91a879622ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PartieuneMiniblogBundle::layout.html.twig", "PartieuneMiniblogBundle:Default:modifier.html.twig", 2);
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
        $__internal_cded925319ab81fa14ccfc5b02dedbd03f43d2f303c90c29c8e53af439005ea0 = $this->env->getExtension("native_profiler");
        $__internal_cded925319ab81fa14ccfc5b02dedbd03f43d2f303c90c29c8e53af439005ea0->enter($__internal_cded925319ab81fa14ccfc5b02dedbd03f43d2f303c90c29c8e53af439005ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartieuneMiniblogBundle:Default:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cded925319ab81fa14ccfc5b02dedbd03f43d2f303c90c29c8e53af439005ea0->leave($__internal_cded925319ab81fa14ccfc5b02dedbd03f43d2f303c90c29c8e53af439005ea0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4262bd3935f1fb9113beaedc40e1e251086e1ee686536c68bdcb897543cbd633 = $this->env->getExtension("native_profiler");
        $__internal_4262bd3935f1fb9113beaedc40e1e251086e1ee686536c68bdcb897543cbd633->enter($__internal_4262bd3935f1fb9113beaedc40e1e251086e1ee686536c68bdcb897543cbd633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - modification d'un message";
        
        $__internal_4262bd3935f1fb9113beaedc40e1e251086e1ee686536c68bdcb897543cbd633->leave($__internal_4262bd3935f1fb9113beaedc40e1e251086e1ee686536c68bdcb897543cbd633_prof);

    }

    // line 4
    public function block_miniblog_body($context, array $blocks = array())
    {
        $__internal_34c46d64c21e6d6609d3fda086515cb0c0dc26db9f1bf6d2ee03bbe10d9feea7 = $this->env->getExtension("native_profiler");
        $__internal_34c46d64c21e6d6609d3fda086515cb0c0dc26db9f1bf6d2ee03bbe10d9feea7->enter($__internal_34c46d64c21e6d6609d3fda086515cb0c0dc26db9f1bf6d2ee03bbe10d9feea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "miniblog_body"));

        // line 5
        echo "    <h2>Ajout d'un message</h2>
    ";
        // line 6
        $this->loadTemplate("PartieuneMiniblogBundle:Default:form.html.twig", "PartieuneMiniblogBundle:Default:modifier.html.twig", 6)->display($context);
        // line 7
        echo "
";
        
        $__internal_34c46d64c21e6d6609d3fda086515cb0c0dc26db9f1bf6d2ee03bbe10d9feea7->leave($__internal_34c46d64c21e6d6609d3fda086515cb0c0dc26db9f1bf6d2ee03bbe10d9feea7_prof);

    }

    public function getTemplateName()
    {
        return "PartieuneMiniblogBundle:Default:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  57 => 6,  54 => 5,  48 => 4,  35 => 3,  11 => 2,);
    }
}
