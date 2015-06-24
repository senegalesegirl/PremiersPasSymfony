<?php

/* PartieuneMiniblogBundle:Default:form.html.twig */
class __TwigTemplate_9bd9b6cae5a38c471e82c248936455acb6131762fec12638bd1d1de31bbf25a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79816e6dad27e74b91b5d0caee661b70d49e1747f253cdc6759033cec580d2e7 = $this->env->getExtension("native_profiler");
        $__internal_79816e6dad27e74b91b5d0caee661b70d49e1747f253cdc6759033cec580d2e7->enter($__internal_79816e6dad27e74b91b5d0caee661b70d49e1747f253cdc6759033cec580d2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartieuneMiniblogBundle:Default:form.html.twig"));

        // line 2
        echo "<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "  ";
        // line 4
        echo "    <br /><br />
    <input type=\"submit\" />
</form>";
        
        $__internal_79816e6dad27e74b91b5d0caee661b70d49e1747f253cdc6759033cec580d2e7->leave($__internal_79816e6dad27e74b91b5d0caee661b70d49e1747f253cdc6759033cec580d2e7_prof);

    }

    public function getTemplateName()
    {
        return "PartieuneMiniblogBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  27 => 3,  22 => 2,);
    }
}
