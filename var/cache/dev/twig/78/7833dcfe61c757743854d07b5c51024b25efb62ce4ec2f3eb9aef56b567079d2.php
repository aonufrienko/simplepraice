<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2217e951f851b5300708fb402981f8cf553a5d24f371a268136f234a1fe2dfc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_065f06e0b8c5b786874aab9454ac28c1c3953595d489757f8bdd6bc5a8effd7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065f06e0b8c5b786874aab9454ac28c1c3953595d489757f8bdd6bc5a8effd7b->enter($__internal_065f06e0b8c5b786874aab9454ac28c1c3953595d489757f8bdd6bc5a8effd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_87141a4a0afe41f9240ea34fdde7ee4862c12cdc7125ab38dbd146b422198483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87141a4a0afe41f9240ea34fdde7ee4862c12cdc7125ab38dbd146b422198483->enter($__internal_87141a4a0afe41f9240ea34fdde7ee4862c12cdc7125ab38dbd146b422198483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_065f06e0b8c5b786874aab9454ac28c1c3953595d489757f8bdd6bc5a8effd7b->leave($__internal_065f06e0b8c5b786874aab9454ac28c1c3953595d489757f8bdd6bc5a8effd7b_prof);

        
        $__internal_87141a4a0afe41f9240ea34fdde7ee4862c12cdc7125ab38dbd146b422198483->leave($__internal_87141a4a0afe41f9240ea34fdde7ee4862c12cdc7125ab38dbd146b422198483_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97537a1b97b65a135bb4d088a642df3ece69ba44f692f9d9138ee1a86e799b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97537a1b97b65a135bb4d088a642df3ece69ba44f692f9d9138ee1a86e799b01->enter($__internal_97537a1b97b65a135bb4d088a642df3ece69ba44f692f9d9138ee1a86e799b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba33e3da8d1cfd15e0e0ebf8b71d739b5ce8feec6cdb96c49466da9dc7420868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba33e3da8d1cfd15e0e0ebf8b71d739b5ce8feec6cdb96c49466da9dc7420868->enter($__internal_ba33e3da8d1cfd15e0e0ebf8b71d739b5ce8feec6cdb96c49466da9dc7420868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ba33e3da8d1cfd15e0e0ebf8b71d739b5ce8feec6cdb96c49466da9dc7420868->leave($__internal_ba33e3da8d1cfd15e0e0ebf8b71d739b5ce8feec6cdb96c49466da9dc7420868_prof);

        
        $__internal_97537a1b97b65a135bb4d088a642df3ece69ba44f692f9d9138ee1a86e799b01->leave($__internal_97537a1b97b65a135bb4d088a642df3ece69ba44f692f9d9138ee1a86e799b01_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4242042ced98c90b0124286574ec34e7184611f1003f94f985cb1357f90de3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4242042ced98c90b0124286574ec34e7184611f1003f94f985cb1357f90de3cc->enter($__internal_4242042ced98c90b0124286574ec34e7184611f1003f94f985cb1357f90de3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_530b9735943b26ea6a330176f54d31ac9707a159aa3637ee1cd5e38fa5b9e208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530b9735943b26ea6a330176f54d31ac9707a159aa3637ee1cd5e38fa5b9e208->enter($__internal_530b9735943b26ea6a330176f54d31ac9707a159aa3637ee1cd5e38fa5b9e208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_530b9735943b26ea6a330176f54d31ac9707a159aa3637ee1cd5e38fa5b9e208->leave($__internal_530b9735943b26ea6a330176f54d31ac9707a159aa3637ee1cd5e38fa5b9e208_prof);

        
        $__internal_4242042ced98c90b0124286574ec34e7184611f1003f94f985cb1357f90de3cc->leave($__internal_4242042ced98c90b0124286574ec34e7184611f1003f94f985cb1357f90de3cc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
