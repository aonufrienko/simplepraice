<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fd43c6564980443072a892d087ebb765d2dd8ea5efff9575c380daf465fd917e extends Twig_Template
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
        $__internal_d3c62ebd69e503b3ab332fb8dc3a4357f374f360e421465c9d1486f1d035b51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c62ebd69e503b3ab332fb8dc3a4357f374f360e421465c9d1486f1d035b51b->enter($__internal_d3c62ebd69e503b3ab332fb8dc3a4357f374f360e421465c9d1486f1d035b51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f0ef357ffc3ea55b5e627500e9bfb41e154ea8547a174adf6321ad9de3b18d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ef357ffc3ea55b5e627500e9bfb41e154ea8547a174adf6321ad9de3b18d6b->enter($__internal_f0ef357ffc3ea55b5e627500e9bfb41e154ea8547a174adf6321ad9de3b18d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d3c62ebd69e503b3ab332fb8dc3a4357f374f360e421465c9d1486f1d035b51b->leave($__internal_d3c62ebd69e503b3ab332fb8dc3a4357f374f360e421465c9d1486f1d035b51b_prof);

        
        $__internal_f0ef357ffc3ea55b5e627500e9bfb41e154ea8547a174adf6321ad9de3b18d6b->leave($__internal_f0ef357ffc3ea55b5e627500e9bfb41e154ea8547a174adf6321ad9de3b18d6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
