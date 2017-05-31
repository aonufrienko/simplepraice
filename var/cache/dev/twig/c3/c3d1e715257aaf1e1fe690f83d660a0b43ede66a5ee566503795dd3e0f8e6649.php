<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_dc9d6500c11d1ae432d2b97db25ad9f22c15c06b687f96b6c4fe1d737f1493a9 extends Twig_Template
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
        $__internal_c669170c554f8488d5117072ec1791fc294e40e242263549679a6c00b43f7e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c669170c554f8488d5117072ec1791fc294e40e242263549679a6c00b43f7e5b->enter($__internal_c669170c554f8488d5117072ec1791fc294e40e242263549679a6c00b43f7e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_9aa7994cd3a7cbfc560968cce8d0e712620057205ad4ca4ee57dc95410233541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa7994cd3a7cbfc560968cce8d0e712620057205ad4ca4ee57dc95410233541->enter($__internal_9aa7994cd3a7cbfc560968cce8d0e712620057205ad4ca4ee57dc95410233541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c669170c554f8488d5117072ec1791fc294e40e242263549679a6c00b43f7e5b->leave($__internal_c669170c554f8488d5117072ec1791fc294e40e242263549679a6c00b43f7e5b_prof);

        
        $__internal_9aa7994cd3a7cbfc560968cce8d0e712620057205ad4ca4ee57dc95410233541->leave($__internal_9aa7994cd3a7cbfc560968cce8d0e712620057205ad4ca4ee57dc95410233541_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
