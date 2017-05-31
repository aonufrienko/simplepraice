<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_65d02beada4105a42f1c9dc203d5b07f852175dd8e584f087aad9d8d4bc1423a extends Twig_Template
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
        $__internal_cc8e01cca3d665c3d19c3b110adff30737a19feea0d141e7eee0c7a3aebd158f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8e01cca3d665c3d19c3b110adff30737a19feea0d141e7eee0c7a3aebd158f->enter($__internal_cc8e01cca3d665c3d19c3b110adff30737a19feea0d141e7eee0c7a3aebd158f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d03dfcb5bbc7f3747392a5d116b20fc9421299f22194fc5aa59253897192216c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03dfcb5bbc7f3747392a5d116b20fc9421299f22194fc5aa59253897192216c->enter($__internal_d03dfcb5bbc7f3747392a5d116b20fc9421299f22194fc5aa59253897192216c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cc8e01cca3d665c3d19c3b110adff30737a19feea0d141e7eee0c7a3aebd158f->leave($__internal_cc8e01cca3d665c3d19c3b110adff30737a19feea0d141e7eee0c7a3aebd158f_prof);

        
        $__internal_d03dfcb5bbc7f3747392a5d116b20fc9421299f22194fc5aa59253897192216c->leave($__internal_d03dfcb5bbc7f3747392a5d116b20fc9421299f22194fc5aa59253897192216c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
