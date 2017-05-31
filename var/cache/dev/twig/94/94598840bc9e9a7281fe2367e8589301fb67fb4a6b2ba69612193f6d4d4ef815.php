<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9f73aad1d1c41cba15b2554e9ba554bdecaeb1bafa27d9717867fe27e1d1473c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_122e8decfd16ec105cf4cdee447cf587d5c11d61e246eb5c972457b4973dc183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122e8decfd16ec105cf4cdee447cf587d5c11d61e246eb5c972457b4973dc183->enter($__internal_122e8decfd16ec105cf4cdee447cf587d5c11d61e246eb5c972457b4973dc183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b74e36aef42404b45950746549afaca690c2eacb88149def8000af670b5920fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74e36aef42404b45950746549afaca690c2eacb88149def8000af670b5920fa->enter($__internal_b74e36aef42404b45950746549afaca690c2eacb88149def8000af670b5920fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_122e8decfd16ec105cf4cdee447cf587d5c11d61e246eb5c972457b4973dc183->leave($__internal_122e8decfd16ec105cf4cdee447cf587d5c11d61e246eb5c972457b4973dc183_prof);

        
        $__internal_b74e36aef42404b45950746549afaca690c2eacb88149def8000af670b5920fa->leave($__internal_b74e36aef42404b45950746549afaca690c2eacb88149def8000af670b5920fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_55e5e11a705dba5630e2a89a5924b2ab954a384ad97facae1a5a09943756c9dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e5e11a705dba5630e2a89a5924b2ab954a384ad97facae1a5a09943756c9dc->enter($__internal_55e5e11a705dba5630e2a89a5924b2ab954a384ad97facae1a5a09943756c9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47730029c47f5cb1925a108500bc301b0e1c0c1dcf8e4d28bd40e9322b096837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47730029c47f5cb1925a108500bc301b0e1c0c1dcf8e4d28bd40e9322b096837->enter($__internal_47730029c47f5cb1925a108500bc301b0e1c0c1dcf8e4d28bd40e9322b096837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_47730029c47f5cb1925a108500bc301b0e1c0c1dcf8e4d28bd40e9322b096837->leave($__internal_47730029c47f5cb1925a108500bc301b0e1c0c1dcf8e4d28bd40e9322b096837_prof);

        
        $__internal_55e5e11a705dba5630e2a89a5924b2ab954a384ad97facae1a5a09943756c9dc->leave($__internal_55e5e11a705dba5630e2a89a5924b2ab954a384ad97facae1a5a09943756c9dc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ebc733f9d634fec5f32216bc3cc4f110e14c11bb57b3d85ace173709d121ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ebc733f9d634fec5f32216bc3cc4f110e14c11bb57b3d85ace173709d121ba6->enter($__internal_7ebc733f9d634fec5f32216bc3cc4f110e14c11bb57b3d85ace173709d121ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d0b74329c914ecff10233b3e2d5c69a0155bb66a3ae40c5d8357762f6299b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0b74329c914ecff10233b3e2d5c69a0155bb66a3ae40c5d8357762f6299b37->enter($__internal_8d0b74329c914ecff10233b3e2d5c69a0155bb66a3ae40c5d8357762f6299b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8d0b74329c914ecff10233b3e2d5c69a0155bb66a3ae40c5d8357762f6299b37->leave($__internal_8d0b74329c914ecff10233b3e2d5c69a0155bb66a3ae40c5d8357762f6299b37_prof);

        
        $__internal_7ebc733f9d634fec5f32216bc3cc4f110e14c11bb57b3d85ace173709d121ba6->leave($__internal_7ebc733f9d634fec5f32216bc3cc4f110e14c11bb57b3d85ace173709d121ba6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
