<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0d8317a3fd0ec22eaf2fc0b395b7762cf7194e61fbe4efd96498ee899771b688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_074cf4251c1d71f54d17a00eb1c99eb4d9e99cb2ef5688ce2b68865b5b524c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074cf4251c1d71f54d17a00eb1c99eb4d9e99cb2ef5688ce2b68865b5b524c02->enter($__internal_074cf4251c1d71f54d17a00eb1c99eb4d9e99cb2ef5688ce2b68865b5b524c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_634695a3779f026289a3561c8773afd6957a47bd1b4396013d7c0b32a34e5a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634695a3779f026289a3561c8773afd6957a47bd1b4396013d7c0b32a34e5a46->enter($__internal_634695a3779f026289a3561c8773afd6957a47bd1b4396013d7c0b32a34e5a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074cf4251c1d71f54d17a00eb1c99eb4d9e99cb2ef5688ce2b68865b5b524c02->leave($__internal_074cf4251c1d71f54d17a00eb1c99eb4d9e99cb2ef5688ce2b68865b5b524c02_prof);

        
        $__internal_634695a3779f026289a3561c8773afd6957a47bd1b4396013d7c0b32a34e5a46->leave($__internal_634695a3779f026289a3561c8773afd6957a47bd1b4396013d7c0b32a34e5a46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c668fdf7eafe96644ee33632e9d908c456e16808253dbed46502fa146d457f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c668fdf7eafe96644ee33632e9d908c456e16808253dbed46502fa146d457f76->enter($__internal_c668fdf7eafe96644ee33632e9d908c456e16808253dbed46502fa146d457f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4eca431f5447a1b191bccb149e37dca67deb8ce53a11b72972fddf3ede8cd0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eca431f5447a1b191bccb149e37dca67deb8ce53a11b72972fddf3ede8cd0f0->enter($__internal_4eca431f5447a1b191bccb149e37dca67deb8ce53a11b72972fddf3ede8cd0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4eca431f5447a1b191bccb149e37dca67deb8ce53a11b72972fddf3ede8cd0f0->leave($__internal_4eca431f5447a1b191bccb149e37dca67deb8ce53a11b72972fddf3ede8cd0f0_prof);

        
        $__internal_c668fdf7eafe96644ee33632e9d908c456e16808253dbed46502fa146d457f76->leave($__internal_c668fdf7eafe96644ee33632e9d908c456e16808253dbed46502fa146d457f76_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_685ee82c1e437cb526413dcdcb98ad5fd304bbde884f6a301b8872691db7d0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685ee82c1e437cb526413dcdcb98ad5fd304bbde884f6a301b8872691db7d0a8->enter($__internal_685ee82c1e437cb526413dcdcb98ad5fd304bbde884f6a301b8872691db7d0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf1f1dc0721e1848188a063228db81083f9ca25428a7e666ade8e8d185f4cc41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1f1dc0721e1848188a063228db81083f9ca25428a7e666ade8e8d185f4cc41->enter($__internal_bf1f1dc0721e1848188a063228db81083f9ca25428a7e666ade8e8d185f4cc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bf1f1dc0721e1848188a063228db81083f9ca25428a7e666ade8e8d185f4cc41->leave($__internal_bf1f1dc0721e1848188a063228db81083f9ca25428a7e666ade8e8d185f4cc41_prof);

        
        $__internal_685ee82c1e437cb526413dcdcb98ad5fd304bbde884f6a301b8872691db7d0a8->leave($__internal_685ee82c1e437cb526413dcdcb98ad5fd304bbde884f6a301b8872691db7d0a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
