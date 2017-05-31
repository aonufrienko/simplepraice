<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b9b25b08d5c69581c7667fcda75a2ced09ec222373a448552c5e0ffb9baf130b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31efd692858f029818f294cd4ee643a2aa8c280c82280e5fd00859e82b38a64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31efd692858f029818f294cd4ee643a2aa8c280c82280e5fd00859e82b38a64e->enter($__internal_31efd692858f029818f294cd4ee643a2aa8c280c82280e5fd00859e82b38a64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a4a9d284855442ffbb81dc3e264f7e46551bfba7092b64e5130a4741c6d3d658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a9d284855442ffbb81dc3e264f7e46551bfba7092b64e5130a4741c6d3d658->enter($__internal_a4a9d284855442ffbb81dc3e264f7e46551bfba7092b64e5130a4741c6d3d658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31efd692858f029818f294cd4ee643a2aa8c280c82280e5fd00859e82b38a64e->leave($__internal_31efd692858f029818f294cd4ee643a2aa8c280c82280e5fd00859e82b38a64e_prof);

        
        $__internal_a4a9d284855442ffbb81dc3e264f7e46551bfba7092b64e5130a4741c6d3d658->leave($__internal_a4a9d284855442ffbb81dc3e264f7e46551bfba7092b64e5130a4741c6d3d658_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_38387e928689c5becc60d0008764838e768760c782b6f27a29c0f04b9992ca5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38387e928689c5becc60d0008764838e768760c782b6f27a29c0f04b9992ca5b->enter($__internal_38387e928689c5becc60d0008764838e768760c782b6f27a29c0f04b9992ca5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1b7476dd27ad120df27e91c4f55de9f14f45ee3d6cfc00f9df9468d23727fcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7476dd27ad120df27e91c4f55de9f14f45ee3d6cfc00f9df9468d23727fcb9->enter($__internal_1b7476dd27ad120df27e91c4f55de9f14f45ee3d6cfc00f9df9468d23727fcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1b7476dd27ad120df27e91c4f55de9f14f45ee3d6cfc00f9df9468d23727fcb9->leave($__internal_1b7476dd27ad120df27e91c4f55de9f14f45ee3d6cfc00f9df9468d23727fcb9_prof);

        
        $__internal_38387e928689c5becc60d0008764838e768760c782b6f27a29c0f04b9992ca5b->leave($__internal_38387e928689c5becc60d0008764838e768760c782b6f27a29c0f04b9992ca5b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_251bc3d0ded8ae8cbc15a93c217a264d8d7a78bd255091bc3160bf90ad55baf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251bc3d0ded8ae8cbc15a93c217a264d8d7a78bd255091bc3160bf90ad55baf8->enter($__internal_251bc3d0ded8ae8cbc15a93c217a264d8d7a78bd255091bc3160bf90ad55baf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dbbb2b3982550af9ccbeedce727d475d2596a2fd9ffd08bea47f823e04fe2ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbbb2b3982550af9ccbeedce727d475d2596a2fd9ffd08bea47f823e04fe2ff8->enter($__internal_dbbb2b3982550af9ccbeedce727d475d2596a2fd9ffd08bea47f823e04fe2ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dbbb2b3982550af9ccbeedce727d475d2596a2fd9ffd08bea47f823e04fe2ff8->leave($__internal_dbbb2b3982550af9ccbeedce727d475d2596a2fd9ffd08bea47f823e04fe2ff8_prof);

        
        $__internal_251bc3d0ded8ae8cbc15a93c217a264d8d7a78bd255091bc3160bf90ad55baf8->leave($__internal_251bc3d0ded8ae8cbc15a93c217a264d8d7a78bd255091bc3160bf90ad55baf8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
