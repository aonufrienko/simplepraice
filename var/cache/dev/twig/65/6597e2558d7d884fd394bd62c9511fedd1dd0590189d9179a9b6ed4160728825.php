<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cdb3575a619998ebb252f9109c917dc67e86641891bea4facb8b035c73e065db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e1776c523a80891970618eea63c43309b8f5aaab2328ad32d6b09bc86d9718d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1776c523a80891970618eea63c43309b8f5aaab2328ad32d6b09bc86d9718d8->enter($__internal_e1776c523a80891970618eea63c43309b8f5aaab2328ad32d6b09bc86d9718d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_fe4765ddd28e8a86a752b76c764404f0ffe9c60b7d25b184f3862682d5f623a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4765ddd28e8a86a752b76c764404f0ffe9c60b7d25b184f3862682d5f623a6->enter($__internal_fe4765ddd28e8a86a752b76c764404f0ffe9c60b7d25b184f3862682d5f623a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1776c523a80891970618eea63c43309b8f5aaab2328ad32d6b09bc86d9718d8->leave($__internal_e1776c523a80891970618eea63c43309b8f5aaab2328ad32d6b09bc86d9718d8_prof);

        
        $__internal_fe4765ddd28e8a86a752b76c764404f0ffe9c60b7d25b184f3862682d5f623a6->leave($__internal_fe4765ddd28e8a86a752b76c764404f0ffe9c60b7d25b184f3862682d5f623a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2f784369d57e9551cf3b5d4b7144eee5c0d655dad37b023949a6bfb68c507bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f784369d57e9551cf3b5d4b7144eee5c0d655dad37b023949a6bfb68c507bb->enter($__internal_c2f784369d57e9551cf3b5d4b7144eee5c0d655dad37b023949a6bfb68c507bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2560f43eb098ec8859a159894a1497869cc6b5d27882f40b8a3cdb86ad896105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2560f43eb098ec8859a159894a1497869cc6b5d27882f40b8a3cdb86ad896105->enter($__internal_2560f43eb098ec8859a159894a1497869cc6b5d27882f40b8a3cdb86ad896105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2560f43eb098ec8859a159894a1497869cc6b5d27882f40b8a3cdb86ad896105->leave($__internal_2560f43eb098ec8859a159894a1497869cc6b5d27882f40b8a3cdb86ad896105_prof);

        
        $__internal_c2f784369d57e9551cf3b5d4b7144eee5c0d655dad37b023949a6bfb68c507bb->leave($__internal_c2f784369d57e9551cf3b5d4b7144eee5c0d655dad37b023949a6bfb68c507bb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f646480e29fe823bf4ffa01878b79b3878037d512c95fa2be7d3668662b142d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f646480e29fe823bf4ffa01878b79b3878037d512c95fa2be7d3668662b142d->enter($__internal_7f646480e29fe823bf4ffa01878b79b3878037d512c95fa2be7d3668662b142d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22edb473271fd21f02b335518e39b0535421496b5c2b9241802b64281b5fd405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22edb473271fd21f02b335518e39b0535421496b5c2b9241802b64281b5fd405->enter($__internal_22edb473271fd21f02b335518e39b0535421496b5c2b9241802b64281b5fd405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_22edb473271fd21f02b335518e39b0535421496b5c2b9241802b64281b5fd405->leave($__internal_22edb473271fd21f02b335518e39b0535421496b5c2b9241802b64281b5fd405_prof);

        
        $__internal_7f646480e29fe823bf4ffa01878b79b3878037d512c95fa2be7d3668662b142d->leave($__internal_7f646480e29fe823bf4ffa01878b79b3878037d512c95fa2be7d3668662b142d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ba0709c644478838b48e6fcd75c990c1cf44477d83f345b8ea2e55267c21455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba0709c644478838b48e6fcd75c990c1cf44477d83f345b8ea2e55267c21455->enter($__internal_7ba0709c644478838b48e6fcd75c990c1cf44477d83f345b8ea2e55267c21455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62b0a4857101c59833bceedf3e53975ac8857f3c31f7d79af8c7538066d262ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b0a4857101c59833bceedf3e53975ac8857f3c31f7d79af8c7538066d262ff->enter($__internal_62b0a4857101c59833bceedf3e53975ac8857f3c31f7d79af8c7538066d262ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_62b0a4857101c59833bceedf3e53975ac8857f3c31f7d79af8c7538066d262ff->leave($__internal_62b0a4857101c59833bceedf3e53975ac8857f3c31f7d79af8c7538066d262ff_prof);

        
        $__internal_7ba0709c644478838b48e6fcd75c990c1cf44477d83f345b8ea2e55267c21455->leave($__internal_7ba0709c644478838b48e6fcd75c990c1cf44477d83f345b8ea2e55267c21455_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
