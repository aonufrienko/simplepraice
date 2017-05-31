<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9a6d5f7db34d8bfb78f904a4ffb0f245ac568bf24fbbbf9b5594f504735cc98f extends Twig_Template
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
        $__internal_e694540fb135ff5c39f034c4e242ecf9abf8030d91e50e921d6ca2b39656420c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e694540fb135ff5c39f034c4e242ecf9abf8030d91e50e921d6ca2b39656420c->enter($__internal_e694540fb135ff5c39f034c4e242ecf9abf8030d91e50e921d6ca2b39656420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_7b24e01b2b3acde95361bba635a57f19d4e9e91aa691924290c1d22af36ca898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b24e01b2b3acde95361bba635a57f19d4e9e91aa691924290c1d22af36ca898->enter($__internal_7b24e01b2b3acde95361bba635a57f19d4e9e91aa691924290c1d22af36ca898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e694540fb135ff5c39f034c4e242ecf9abf8030d91e50e921d6ca2b39656420c->leave($__internal_e694540fb135ff5c39f034c4e242ecf9abf8030d91e50e921d6ca2b39656420c_prof);

        
        $__internal_7b24e01b2b3acde95361bba635a57f19d4e9e91aa691924290c1d22af36ca898->leave($__internal_7b24e01b2b3acde95361bba635a57f19d4e9e91aa691924290c1d22af36ca898_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
