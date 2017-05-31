<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_dd9b472061677e100d0f0a19ab190dc4b4a04a6db43ba963cd690561170a9900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_0352b4ebb1d3ac7556e817457c4a1c92ad5429d3ba71a90b888984039b5331d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0352b4ebb1d3ac7556e817457c4a1c92ad5429d3ba71a90b888984039b5331d4->enter($__internal_0352b4ebb1d3ac7556e817457c4a1c92ad5429d3ba71a90b888984039b5331d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d8cc1f36421533f1eaaf0ca83c3e5b15bdfef80a2db1d9360bcfe62c2b13813b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cc1f36421533f1eaaf0ca83c3e5b15bdfef80a2db1d9360bcfe62c2b13813b->enter($__internal_d8cc1f36421533f1eaaf0ca83c3e5b15bdfef80a2db1d9360bcfe62c2b13813b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0352b4ebb1d3ac7556e817457c4a1c92ad5429d3ba71a90b888984039b5331d4->leave($__internal_0352b4ebb1d3ac7556e817457c4a1c92ad5429d3ba71a90b888984039b5331d4_prof);

        
        $__internal_d8cc1f36421533f1eaaf0ca83c3e5b15bdfef80a2db1d9360bcfe62c2b13813b->leave($__internal_d8cc1f36421533f1eaaf0ca83c3e5b15bdfef80a2db1d9360bcfe62c2b13813b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f9db9ac8682924bc844e75fb5bd7c9d572dd3c862d2cf11b272d9f68d392f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9db9ac8682924bc844e75fb5bd7c9d572dd3c862d2cf11b272d9f68d392f09->enter($__internal_4f9db9ac8682924bc844e75fb5bd7c9d572dd3c862d2cf11b272d9f68d392f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32445d94f6b47733eb9b38321c6950168b6573e5e330d1dd9c62006cd783b556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32445d94f6b47733eb9b38321c6950168b6573e5e330d1dd9c62006cd783b556->enter($__internal_32445d94f6b47733eb9b38321c6950168b6573e5e330d1dd9c62006cd783b556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_32445d94f6b47733eb9b38321c6950168b6573e5e330d1dd9c62006cd783b556->leave($__internal_32445d94f6b47733eb9b38321c6950168b6573e5e330d1dd9c62006cd783b556_prof);

        
        $__internal_4f9db9ac8682924bc844e75fb5bd7c9d572dd3c862d2cf11b272d9f68d392f09->leave($__internal_4f9db9ac8682924bc844e75fb5bd7c9d572dd3c862d2cf11b272d9f68d392f09_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddfdcfe50c28794ad913acdce805976f53401ddebb3ccfa6cb4fdb01731b5468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfdcfe50c28794ad913acdce805976f53401ddebb3ccfa6cb4fdb01731b5468->enter($__internal_ddfdcfe50c28794ad913acdce805976f53401ddebb3ccfa6cb4fdb01731b5468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_794fa2927a93e182ffb55487610f75b305a5dacd75c5e7f489073f5a8c10305f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794fa2927a93e182ffb55487610f75b305a5dacd75c5e7f489073f5a8c10305f->enter($__internal_794fa2927a93e182ffb55487610f75b305a5dacd75c5e7f489073f5a8c10305f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_794fa2927a93e182ffb55487610f75b305a5dacd75c5e7f489073f5a8c10305f->leave($__internal_794fa2927a93e182ffb55487610f75b305a5dacd75c5e7f489073f5a8c10305f_prof);

        
        $__internal_ddfdcfe50c28794ad913acdce805976f53401ddebb3ccfa6cb4fdb01731b5468->leave($__internal_ddfdcfe50c28794ad913acdce805976f53401ddebb3ccfa6cb4fdb01731b5468_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
