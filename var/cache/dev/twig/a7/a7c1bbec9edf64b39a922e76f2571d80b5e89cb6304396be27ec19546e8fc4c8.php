<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_898c425b961ff697b50402eff4a8175a1e1c615dcf8c63fd7371d89381c0a53e extends Twig_Template
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
        $__internal_2328ca0e93a5f34dfb88841cde1a0eb3ea1ec5da73c52ca50923f2e773e75837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2328ca0e93a5f34dfb88841cde1a0eb3ea1ec5da73c52ca50923f2e773e75837->enter($__internal_2328ca0e93a5f34dfb88841cde1a0eb3ea1ec5da73c52ca50923f2e773e75837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_53a31ad572fc8b36c32caf78015ca5fa9b56673814c1aac55e87079e7097eaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a31ad572fc8b36c32caf78015ca5fa9b56673814c1aac55e87079e7097eaae->enter($__internal_53a31ad572fc8b36c32caf78015ca5fa9b56673814c1aac55e87079e7097eaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2328ca0e93a5f34dfb88841cde1a0eb3ea1ec5da73c52ca50923f2e773e75837->leave($__internal_2328ca0e93a5f34dfb88841cde1a0eb3ea1ec5da73c52ca50923f2e773e75837_prof);

        
        $__internal_53a31ad572fc8b36c32caf78015ca5fa9b56673814c1aac55e87079e7097eaae->leave($__internal_53a31ad572fc8b36c32caf78015ca5fa9b56673814c1aac55e87079e7097eaae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
