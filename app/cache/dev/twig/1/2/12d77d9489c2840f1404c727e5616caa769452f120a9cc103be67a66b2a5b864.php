<?php

/* PartieuneMiniblogBundle:Default:index.html.twig */
class __TwigTemplate_12d77d9489c2840f1404c727e5616caa769452f120a9cc103be67a66b2a5b864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PartieuneMiniblogBundle::layout.html.twig", "PartieuneMiniblogBundle:Default:index.html.twig", 2);
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
        $__internal_b88fd5213a5150d4cc2a8b1161982bc5c09be784ee3a615da860573baf3808de = $this->env->getExtension("native_profiler");
        $__internal_b88fd5213a5150d4cc2a8b1161982bc5c09be784ee3a615da860573baf3808de->enter($__internal_b88fd5213a5150d4cc2a8b1161982bc5c09be784ee3a615da860573baf3808de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartieuneMiniblogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b88fd5213a5150d4cc2a8b1161982bc5c09be784ee3a615da860573baf3808de->leave($__internal_b88fd5213a5150d4cc2a8b1161982bc5c09be784ee3a615da860573baf3808de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfb92406217565c0179a158cef478a7e61caad958d5cee3481d1b720366b29c4 = $this->env->getExtension("native_profiler");
        $__internal_bfb92406217565c0179a158cef478a7e61caad958d5cee3481d1b720366b29c4->enter($__internal_bfb92406217565c0179a158cef478a7e61caad958d5cee3481d1b720366b29c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - liste des messages";
        
        $__internal_bfb92406217565c0179a158cef478a7e61caad958d5cee3481d1b720366b29c4->leave($__internal_bfb92406217565c0179a158cef478a7e61caad958d5cee3481d1b720366b29c4_prof);

    }

    // line 5
    public function block_miniblog_body($context, array $blocks = array())
    {
        $__internal_e75214b8a47e07a9f84a2e6a15e4556a86e7ed4a7b68f00a31d87601c2692dbb = $this->env->getExtension("native_profiler");
        $__internal_e75214b8a47e07a9f84a2e6a15e4556a86e7ed4a7b68f00a31d87601c2692dbb->enter($__internal_e75214b8a47e07a9f84a2e6a15e4556a86e7ed4a7b68f00a31d87601c2692dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "miniblog_body"));

        // line 6
        echo "    <h2>Liste des messages</h2>
    <p>

        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "ladate", array()), "d/m/Y"), "html", null, true);
            echo "
            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partieune_miniblog_afficher", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "titre", array()), "html", null, true);
            echo " </a> <t/>
            (par ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "auteur", array()), "html", null, true);
            echo ")
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partieune_miniblog_supprimer", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\"> Supprimer</a>
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("partieune_miniblog_modifier", array("id" => $this->getAttribute($context["message"], "id", array()))), "html", null, true);
            echo "\">  Modifier </a>

            <br />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    </p>


";
        
        $__internal_e75214b8a47e07a9f84a2e6a15e4556a86e7ed4a7b68f00a31d87601c2692dbb->leave($__internal_e75214b8a47e07a9f84a2e6a15e4556a86e7ed4a7b68f00a31d87601c2692dbb_prof);

    }

    public function getTemplateName()
    {
        return "PartieuneMiniblogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  82 => 14,  78 => 13,  74 => 12,  68 => 11,  63 => 10,  59 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 2,);
    }
}
