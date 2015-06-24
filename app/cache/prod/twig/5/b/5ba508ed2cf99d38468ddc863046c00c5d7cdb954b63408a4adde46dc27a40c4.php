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
        $__internal_23c76ddf657f042d480303e4b8104f08e2db9fe0bc09e0c6bf98db55c7708e8d = $this->env->getExtension("native_profiler");
        $__internal_23c76ddf657f042d480303e4b8104f08e2db9fe0bc09e0c6bf98db55c7708e8d->enter($__internal_23c76ddf657f042d480303e4b8104f08e2db9fe0bc09e0c6bf98db55c7708e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23c76ddf657f042d480303e4b8104f08e2db9fe0bc09e0c6bf98db55c7708e8d->leave($__internal_23c76ddf657f042d480303e4b8104f08e2db9fe0bc09e0c6bf98db55c7708e8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f34ee2dcaba0530d6f7e1bb78d6deecb659dc2adb6a4f9a5a7b7d296fb23755 = $this->env->getExtension("native_profiler");
        $__internal_2f34ee2dcaba0530d6f7e1bb78d6deecb659dc2adb6a4f9a5a7b7d296fb23755->enter($__internal_2f34ee2dcaba0530d6f7e1bb78d6deecb659dc2adb6a4f9a5a7b7d296fb23755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f34ee2dcaba0530d6f7e1bb78d6deecb659dc2adb6a4f9a5a7b7d296fb23755->leave($__internal_2f34ee2dcaba0530d6f7e1bb78d6deecb659dc2adb6a4f9a5a7b7d296fb23755_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_21493d4f7cf56edc1ac25a60cf523abf987ca525c6a8e1f1a446d0127595c8b6 = $this->env->getExtension("native_profiler");
        $__internal_21493d4f7cf56edc1ac25a60cf523abf987ca525c6a8e1f1a446d0127595c8b6->enter($__internal_21493d4f7cf56edc1ac25a60cf523abf987ca525c6a8e1f1a446d0127595c8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_21493d4f7cf56edc1ac25a60cf523abf987ca525c6a8e1f1a446d0127595c8b6->leave($__internal_21493d4f7cf56edc1ac25a60cf523abf987ca525c6a8e1f1a446d0127595c8b6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_be30f7de09a9c600cbc309de36cd66fddc6afa1f099a8612c163ad6aeb5396d2 = $this->env->getExtension("native_profiler");
        $__internal_be30f7de09a9c600cbc309de36cd66fddc6afa1f099a8612c163ad6aeb5396d2->enter($__internal_be30f7de09a9c600cbc309de36cd66fddc6afa1f099a8612c163ad6aeb5396d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_be30f7de09a9c600cbc309de36cd66fddc6afa1f099a8612c163ad6aeb5396d2->leave($__internal_be30f7de09a9c600cbc309de36cd66fddc6afa1f099a8612c163ad6aeb5396d2_prof);

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
