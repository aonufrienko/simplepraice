<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bc4aa508fa507f6e799d778c57026a449a85d83d46c32467104ce2b28c814a1c extends Twig_Template
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
        $__internal_915b8887fe9736a5d49f3db56c88ca5575ea288c4688ae0017041b4d4089415b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915b8887fe9736a5d49f3db56c88ca5575ea288c4688ae0017041b4d4089415b->enter($__internal_915b8887fe9736a5d49f3db56c88ca5575ea288c4688ae0017041b4d4089415b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d722fec0bfb4f6a597612005a525393a8708889beace15e3a62fa445528668a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d722fec0bfb4f6a597612005a525393a8708889beace15e3a62fa445528668a8->enter($__internal_d722fec0bfb4f6a597612005a525393a8708889beace15e3a62fa445528668a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_915b8887fe9736a5d49f3db56c88ca5575ea288c4688ae0017041b4d4089415b->leave($__internal_915b8887fe9736a5d49f3db56c88ca5575ea288c4688ae0017041b4d4089415b_prof);

        
        $__internal_d722fec0bfb4f6a597612005a525393a8708889beace15e3a62fa445528668a8->leave($__internal_d722fec0bfb4f6a597612005a525393a8708889beace15e3a62fa445528668a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
