<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b4dfc649d51332319d1239ffcad7e55f9d3c8d397770cc237bb5d9f7bd9a95d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4dfc649d51332319d1239ffcad7e55f9d3c8d397770cc237bb5d9f7bd9a95d1->enter($__internal_b4dfc649d51332319d1239ffcad7e55f9d3c8d397770cc237bb5d9f7bd9a95d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bdaf1b01d16a44bda0455e88605389c41e5971447824d7bbb909c8037f16b1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdaf1b01d16a44bda0455e88605389c41e5971447824d7bbb909c8037f16b1fe->enter($__internal_bdaf1b01d16a44bda0455e88605389c41e5971447824d7bbb909c8037f16b1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4dfc649d51332319d1239ffcad7e55f9d3c8d397770cc237bb5d9f7bd9a95d1->leave($__internal_b4dfc649d51332319d1239ffcad7e55f9d3c8d397770cc237bb5d9f7bd9a95d1_prof);

        
        $__internal_bdaf1b01d16a44bda0455e88605389c41e5971447824d7bbb909c8037f16b1fe->leave($__internal_bdaf1b01d16a44bda0455e88605389c41e5971447824d7bbb909c8037f16b1fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a642886f1942932fb0f741cd884f99a7ec5aec909b9c9da70c7ba63ae57665f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a642886f1942932fb0f741cd884f99a7ec5aec909b9c9da70c7ba63ae57665f4->enter($__internal_a642886f1942932fb0f741cd884f99a7ec5aec909b9c9da70c7ba63ae57665f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bcd75ba6b3cd6e933b22759f4b2a27db94ff9bc54ceaa1c0ebcc5a3e2015f744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd75ba6b3cd6e933b22759f4b2a27db94ff9bc54ceaa1c0ebcc5a3e2015f744->enter($__internal_bcd75ba6b3cd6e933b22759f4b2a27db94ff9bc54ceaa1c0ebcc5a3e2015f744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bcd75ba6b3cd6e933b22759f4b2a27db94ff9bc54ceaa1c0ebcc5a3e2015f744->leave($__internal_bcd75ba6b3cd6e933b22759f4b2a27db94ff9bc54ceaa1c0ebcc5a3e2015f744_prof);

        
        $__internal_a642886f1942932fb0f741cd884f99a7ec5aec909b9c9da70c7ba63ae57665f4->leave($__internal_a642886f1942932fb0f741cd884f99a7ec5aec909b9c9da70c7ba63ae57665f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_673a1f5cd9a8ca3e1cf3858e18ebc7e0f6a63f7823e740a2ed781c3fa3dd4bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673a1f5cd9a8ca3e1cf3858e18ebc7e0f6a63f7823e740a2ed781c3fa3dd4bf0->enter($__internal_673a1f5cd9a8ca3e1cf3858e18ebc7e0f6a63f7823e740a2ed781c3fa3dd4bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eed164e18b1b5cec126f4a106ca466191ecdf08887b64e18b67c2a0e13c55893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed164e18b1b5cec126f4a106ca466191ecdf08887b64e18b67c2a0e13c55893->enter($__internal_eed164e18b1b5cec126f4a106ca466191ecdf08887b64e18b67c2a0e13c55893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eed164e18b1b5cec126f4a106ca466191ecdf08887b64e18b67c2a0e13c55893->leave($__internal_eed164e18b1b5cec126f4a106ca466191ecdf08887b64e18b67c2a0e13c55893_prof);

        
        $__internal_673a1f5cd9a8ca3e1cf3858e18ebc7e0f6a63f7823e740a2ed781c3fa3dd4bf0->leave($__internal_673a1f5cd9a8ca3e1cf3858e18ebc7e0f6a63f7823e740a2ed781c3fa3dd4bf0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7409503c7d98aaede57380b0c22f6afc7a998835949809b2c5f01ff3334de172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7409503c7d98aaede57380b0c22f6afc7a998835949809b2c5f01ff3334de172->enter($__internal_7409503c7d98aaede57380b0c22f6afc7a998835949809b2c5f01ff3334de172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ccd3d2b2e4808df843523a63f6403b3fe57d365df4c7eb59c105232c9fe08225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd3d2b2e4808df843523a63f6403b3fe57d365df4c7eb59c105232c9fe08225->enter($__internal_ccd3d2b2e4808df843523a63f6403b3fe57d365df4c7eb59c105232c9fe08225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ccd3d2b2e4808df843523a63f6403b3fe57d365df4c7eb59c105232c9fe08225->leave($__internal_ccd3d2b2e4808df843523a63f6403b3fe57d365df4c7eb59c105232c9fe08225_prof);

        
        $__internal_7409503c7d98aaede57380b0c22f6afc7a998835949809b2c5f01ff3334de172->leave($__internal_7409503c7d98aaede57380b0c22f6afc7a998835949809b2c5f01ff3334de172_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
