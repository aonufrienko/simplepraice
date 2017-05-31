<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d242b2c48e521ad75a0189b7e8be0c0de875f82523e3656678797ad45ceba44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d242b2c48e521ad75a0189b7e8be0c0de875f82523e3656678797ad45ceba44c->enter($__internal_d242b2c48e521ad75a0189b7e8be0c0de875f82523e3656678797ad45ceba44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a1cb332dcac2b331f97d6f47b220aff42abfa152d4c49cb4e683935cc4b71320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cb332dcac2b331f97d6f47b220aff42abfa152d4c49cb4e683935cc4b71320->enter($__internal_a1cb332dcac2b331f97d6f47b220aff42abfa152d4c49cb4e683935cc4b71320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d242b2c48e521ad75a0189b7e8be0c0de875f82523e3656678797ad45ceba44c->leave($__internal_d242b2c48e521ad75a0189b7e8be0c0de875f82523e3656678797ad45ceba44c_prof);

        
        $__internal_a1cb332dcac2b331f97d6f47b220aff42abfa152d4c49cb4e683935cc4b71320->leave($__internal_a1cb332dcac2b331f97d6f47b220aff42abfa152d4c49cb4e683935cc4b71320_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a2e0bd1b0a8296c0ab47deac9f3a2b40a9b8317ccc2ab907d43ccc59c15b8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2e0bd1b0a8296c0ab47deac9f3a2b40a9b8317ccc2ab907d43ccc59c15b8e2->enter($__internal_7a2e0bd1b0a8296c0ab47deac9f3a2b40a9b8317ccc2ab907d43ccc59c15b8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_236f26efd6cda504c1663d1831f251a609e70a1aa04f269993f1b814f2df65be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236f26efd6cda504c1663d1831f251a609e70a1aa04f269993f1b814f2df65be->enter($__internal_236f26efd6cda504c1663d1831f251a609e70a1aa04f269993f1b814f2df65be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_236f26efd6cda504c1663d1831f251a609e70a1aa04f269993f1b814f2df65be->leave($__internal_236f26efd6cda504c1663d1831f251a609e70a1aa04f269993f1b814f2df65be_prof);

        
        $__internal_7a2e0bd1b0a8296c0ab47deac9f3a2b40a9b8317ccc2ab907d43ccc59c15b8e2->leave($__internal_7a2e0bd1b0a8296c0ab47deac9f3a2b40a9b8317ccc2ab907d43ccc59c15b8e2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3fda60b20c7251a388e9000be69a7ff5655115c574a87fdbff3a93baff71d83a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fda60b20c7251a388e9000be69a7ff5655115c574a87fdbff3a93baff71d83a->enter($__internal_3fda60b20c7251a388e9000be69a7ff5655115c574a87fdbff3a93baff71d83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_34eb1e5f86c5235e2ac802fa4155841c7e8a2e7fa774e4671888193a988204f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34eb1e5f86c5235e2ac802fa4155841c7e8a2e7fa774e4671888193a988204f4->enter($__internal_34eb1e5f86c5235e2ac802fa4155841c7e8a2e7fa774e4671888193a988204f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_34eb1e5f86c5235e2ac802fa4155841c7e8a2e7fa774e4671888193a988204f4->leave($__internal_34eb1e5f86c5235e2ac802fa4155841c7e8a2e7fa774e4671888193a988204f4_prof);

        
        $__internal_3fda60b20c7251a388e9000be69a7ff5655115c574a87fdbff3a93baff71d83a->leave($__internal_3fda60b20c7251a388e9000be69a7ff5655115c574a87fdbff3a93baff71d83a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7aa7b59d3f8479d49761024473347eed7fe049ce5c24f19502827173b439182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7aa7b59d3f8479d49761024473347eed7fe049ce5c24f19502827173b439182->enter($__internal_c7aa7b59d3f8479d49761024473347eed7fe049ce5c24f19502827173b439182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b6c0676384dd355383b3204639649500a5c4f184f8d155d0b15e6ee5216516fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c0676384dd355383b3204639649500a5c4f184f8d155d0b15e6ee5216516fc->enter($__internal_b6c0676384dd355383b3204639649500a5c4f184f8d155d0b15e6ee5216516fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b6c0676384dd355383b3204639649500a5c4f184f8d155d0b15e6ee5216516fc->leave($__internal_b6c0676384dd355383b3204639649500a5c4f184f8d155d0b15e6ee5216516fc_prof);

        
        $__internal_c7aa7b59d3f8479d49761024473347eed7fe049ce5c24f19502827173b439182->leave($__internal_c7aa7b59d3f8479d49761024473347eed7fe049ce5c24f19502827173b439182_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
