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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - liste des messages";
    }

    // line 5
    public function block_miniblog_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h2>Liste des messages</h2>
    <p>

        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
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
            echo " </a>

            (par ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "auteur", array()), "html", null, true);
            echo ")

            <br />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    </p>


";
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
        return array (  71 => 18,  60 => 13,  53 => 11,  48 => 10,  44 => 9,  39 => 6,  36 => 5,  29 => 3,  11 => 2,);
    }
}
