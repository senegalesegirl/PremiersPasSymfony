<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5ba508ed2cf99d38468ddc863046c00c5d7cdb954b63408a4adde46dc27a40c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7303d90a241df9f4215fa7bcb74294f758ca7651efe13f1cbe859df161a51552 = $this->env->getExtension("native_profiler");
        $__internal_7303d90a241df9f4215fa7bcb74294f758ca7651efe13f1cbe859df161a51552->enter($__internal_7303d90a241df9f4215fa7bcb74294f758ca7651efe13f1cbe859df161a51552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7303d90a241df9f4215fa7bcb74294f758ca7651efe13f1cbe859df161a51552->leave($__internal_7303d90a241df9f4215fa7bcb74294f758ca7651efe13f1cbe859df161a51552_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17a1ed493cde4e957a308fb6488c0b11bb47db8c3d726ba8a90aa3a7b83eb02f = $this->env->getExtension("native_profiler");
        $__internal_17a1ed493cde4e957a308fb6488c0b11bb47db8c3d726ba8a90aa3a7b83eb02f->enter($__internal_17a1ed493cde4e957a308fb6488c0b11bb47db8c3d726ba8a90aa3a7b83eb02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_17a1ed493cde4e957a308fb6488c0b11bb47db8c3d726ba8a90aa3a7b83eb02f->leave($__internal_17a1ed493cde4e957a308fb6488c0b11bb47db8c3d726ba8a90aa3a7b83eb02f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fd5d1f0ace9cecd9dedf25b10ef4403399b0eb1c56fec5796cd5ea799e20ad5 = $this->env->getExtension("native_profiler");
        $__internal_2fd5d1f0ace9cecd9dedf25b10ef4403399b0eb1c56fec5796cd5ea799e20ad5->enter($__internal_2fd5d1f0ace9cecd9dedf25b10ef4403399b0eb1c56fec5796cd5ea799e20ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2fd5d1f0ace9cecd9dedf25b10ef4403399b0eb1c56fec5796cd5ea799e20ad5->leave($__internal_2fd5d1f0ace9cecd9dedf25b10ef4403399b0eb1c56fec5796cd5ea799e20ad5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ffbdccdba37ef7efa3b1edcc7880d7a7eb8686feb2c735c12d40617ba58c9a0 = $this->env->getExtension("native_profiler");
        $__internal_9ffbdccdba37ef7efa3b1edcc7880d7a7eb8686feb2c735c12d40617ba58c9a0->enter($__internal_9ffbdccdba37ef7efa3b1edcc7880d7a7eb8686feb2c735c12d40617ba58c9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9ffbdccdba37ef7efa3b1edcc7880d7a7eb8686feb2c735c12d40617ba58c9a0->leave($__internal_9ffbdccdba37ef7efa3b1edcc7880d7a7eb8686feb2c735c12d40617ba58c9a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
