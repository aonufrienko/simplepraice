<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0d6da3d269b57df170a380cd12cf14a9b588638f1fba119c9176bbf5197566c0 extends Twig_Template
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
        $__internal_ed616de2469e9b5d6a77f54c7e232e831c0105b328c1ed3b2c218ec75dae647d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed616de2469e9b5d6a77f54c7e232e831c0105b328c1ed3b2c218ec75dae647d->enter($__internal_ed616de2469e9b5d6a77f54c7e232e831c0105b328c1ed3b2c218ec75dae647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_cc6775b9138240af987a9e9b4cec339f775794f2a48a412f5f26d5d425134484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6775b9138240af987a9e9b4cec339f775794f2a48a412f5f26d5d425134484->enter($__internal_cc6775b9138240af987a9e9b4cec339f775794f2a48a412f5f26d5d425134484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ed616de2469e9b5d6a77f54c7e232e831c0105b328c1ed3b2c218ec75dae647d->leave($__internal_ed616de2469e9b5d6a77f54c7e232e831c0105b328c1ed3b2c218ec75dae647d_prof);

        
        $__internal_cc6775b9138240af987a9e9b4cec339f775794f2a48a412f5f26d5d425134484->leave($__internal_cc6775b9138240af987a9e9b4cec339f775794f2a48a412f5f26d5d425134484_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
