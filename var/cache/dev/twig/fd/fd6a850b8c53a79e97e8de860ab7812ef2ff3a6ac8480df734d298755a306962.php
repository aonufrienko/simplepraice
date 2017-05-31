<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f552dfa054d78a62a39392f1febcdc0bce099ec6395a39f2054e0be026bf40de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_47d1e3131e57a5ef61b68a199087aff7053c03164ff0c6e4a75463da085f72a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d1e3131e57a5ef61b68a199087aff7053c03164ff0c6e4a75463da085f72a0->enter($__internal_47d1e3131e57a5ef61b68a199087aff7053c03164ff0c6e4a75463da085f72a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_af1b890f467984d7e79805b7bcc99cebe6b8ff980b5d057ef7a35b56747c0bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1b890f467984d7e79805b7bcc99cebe6b8ff980b5d057ef7a35b56747c0bdd->enter($__internal_af1b890f467984d7e79805b7bcc99cebe6b8ff980b5d057ef7a35b56747c0bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d1e3131e57a5ef61b68a199087aff7053c03164ff0c6e4a75463da085f72a0->leave($__internal_47d1e3131e57a5ef61b68a199087aff7053c03164ff0c6e4a75463da085f72a0_prof);

        
        $__internal_af1b890f467984d7e79805b7bcc99cebe6b8ff980b5d057ef7a35b56747c0bdd->leave($__internal_af1b890f467984d7e79805b7bcc99cebe6b8ff980b5d057ef7a35b56747c0bdd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d2f014bc898355afb384bd79f3c2e608bbe487a365d3bf85dc5699da32a0966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2f014bc898355afb384bd79f3c2e608bbe487a365d3bf85dc5699da32a0966->enter($__internal_1d2f014bc898355afb384bd79f3c2e608bbe487a365d3bf85dc5699da32a0966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_612206126e35d81c9d014992c62df13a35090967b1088a5aac8e07ebf788f15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612206126e35d81c9d014992c62df13a35090967b1088a5aac8e07ebf788f15c->enter($__internal_612206126e35d81c9d014992c62df13a35090967b1088a5aac8e07ebf788f15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_612206126e35d81c9d014992c62df13a35090967b1088a5aac8e07ebf788f15c->leave($__internal_612206126e35d81c9d014992c62df13a35090967b1088a5aac8e07ebf788f15c_prof);

        
        $__internal_1d2f014bc898355afb384bd79f3c2e608bbe487a365d3bf85dc5699da32a0966->leave($__internal_1d2f014bc898355afb384bd79f3c2e608bbe487a365d3bf85dc5699da32a0966_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4e868ea4fd9b5afbcfe77196eacdfaca469c4a31b0bc8621974668d0cc4e519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e868ea4fd9b5afbcfe77196eacdfaca469c4a31b0bc8621974668d0cc4e519->enter($__internal_c4e868ea4fd9b5afbcfe77196eacdfaca469c4a31b0bc8621974668d0cc4e519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_80a466d22cb80850208843fb9fe2c6648f0a870e08b623f4acf1868433189e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a466d22cb80850208843fb9fe2c6648f0a870e08b623f4acf1868433189e54->enter($__internal_80a466d22cb80850208843fb9fe2c6648f0a870e08b623f4acf1868433189e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_80a466d22cb80850208843fb9fe2c6648f0a870e08b623f4acf1868433189e54->leave($__internal_80a466d22cb80850208843fb9fe2c6648f0a870e08b623f4acf1868433189e54_prof);

        
        $__internal_c4e868ea4fd9b5afbcfe77196eacdfaca469c4a31b0bc8621974668d0cc4e519->leave($__internal_c4e868ea4fd9b5afbcfe77196eacdfaca469c4a31b0bc8621974668d0cc4e519_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_433431c8345ec276416387bb93667c9d6aa615bb8072449363c2f8a034628fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433431c8345ec276416387bb93667c9d6aa615bb8072449363c2f8a034628fbf->enter($__internal_433431c8345ec276416387bb93667c9d6aa615bb8072449363c2f8a034628fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aef7edaa70ec2c078a8ce8f5e0985d3a8b1c480fd830b390166378743fde04b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef7edaa70ec2c078a8ce8f5e0985d3a8b1c480fd830b390166378743fde04b5->enter($__internal_aef7edaa70ec2c078a8ce8f5e0985d3a8b1c480fd830b390166378743fde04b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_aef7edaa70ec2c078a8ce8f5e0985d3a8b1c480fd830b390166378743fde04b5->leave($__internal_aef7edaa70ec2c078a8ce8f5e0985d3a8b1c480fd830b390166378743fde04b5_prof);

        
        $__internal_433431c8345ec276416387bb93667c9d6aa615bb8072449363c2f8a034628fbf->leave($__internal_433431c8345ec276416387bb93667c9d6aa615bb8072449363c2f8a034628fbf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
