<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_de1f5f72e120339d190fec1b11a3597a53c62af32e76a907f28ce77092c7d32d extends Twig_Template
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
        $__internal_3d2209bbcc8b84f66cdb29cfda1ad57a20abb74ca43f96ae024c37276112f7ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2209bbcc8b84f66cdb29cfda1ad57a20abb74ca43f96ae024c37276112f7ef->enter($__internal_3d2209bbcc8b84f66cdb29cfda1ad57a20abb74ca43f96ae024c37276112f7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_ae1a2b65dae8eb93593e31830f2755adcbf88e308bf6b6072b35ddb94cb77d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1a2b65dae8eb93593e31830f2755adcbf88e308bf6b6072b35ddb94cb77d7b->enter($__internal_ae1a2b65dae8eb93593e31830f2755adcbf88e308bf6b6072b35ddb94cb77d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_3d2209bbcc8b84f66cdb29cfda1ad57a20abb74ca43f96ae024c37276112f7ef->leave($__internal_3d2209bbcc8b84f66cdb29cfda1ad57a20abb74ca43f96ae024c37276112f7ef_prof);

        
        $__internal_ae1a2b65dae8eb93593e31830f2755adcbf88e308bf6b6072b35ddb94cb77d7b->leave($__internal_ae1a2b65dae8eb93593e31830f2755adcbf88e308bf6b6072b35ddb94cb77d7b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
