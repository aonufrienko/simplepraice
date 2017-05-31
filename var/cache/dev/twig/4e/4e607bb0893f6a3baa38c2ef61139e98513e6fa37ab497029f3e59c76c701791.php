<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_415ead967e717ee7456672796cc78232cafb69075362f92cbf8c3e651373f519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c3bf602a8384dddde22dc56b1a29c083e3929903eee54e6e5056690b32404947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3bf602a8384dddde22dc56b1a29c083e3929903eee54e6e5056690b32404947->enter($__internal_c3bf602a8384dddde22dc56b1a29c083e3929903eee54e6e5056690b32404947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ae0e2491c5283d6749e721833aa1517b7b93d890b51c69d8617a25261f15914b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0e2491c5283d6749e721833aa1517b7b93d890b51c69d8617a25261f15914b->enter($__internal_ae0e2491c5283d6749e721833aa1517b7b93d890b51c69d8617a25261f15914b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3bf602a8384dddde22dc56b1a29c083e3929903eee54e6e5056690b32404947->leave($__internal_c3bf602a8384dddde22dc56b1a29c083e3929903eee54e6e5056690b32404947_prof);

        
        $__internal_ae0e2491c5283d6749e721833aa1517b7b93d890b51c69d8617a25261f15914b->leave($__internal_ae0e2491c5283d6749e721833aa1517b7b93d890b51c69d8617a25261f15914b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9eb9ee5d7af64af42cf0bafb25a4d2eb86ccbffcad4cd5c33147209fa4f409dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb9ee5d7af64af42cf0bafb25a4d2eb86ccbffcad4cd5c33147209fa4f409dc->enter($__internal_9eb9ee5d7af64af42cf0bafb25a4d2eb86ccbffcad4cd5c33147209fa4f409dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1e6f01d051fb2c20032b12e571d824e314a8ffd6a3db5f500424bde504897a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6f01d051fb2c20032b12e571d824e314a8ffd6a3db5f500424bde504897a0b->enter($__internal_1e6f01d051fb2c20032b12e571d824e314a8ffd6a3db5f500424bde504897a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e6f01d051fb2c20032b12e571d824e314a8ffd6a3db5f500424bde504897a0b->leave($__internal_1e6f01d051fb2c20032b12e571d824e314a8ffd6a3db5f500424bde504897a0b_prof);

        
        $__internal_9eb9ee5d7af64af42cf0bafb25a4d2eb86ccbffcad4cd5c33147209fa4f409dc->leave($__internal_9eb9ee5d7af64af42cf0bafb25a4d2eb86ccbffcad4cd5c33147209fa4f409dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a02e69fc05f92ba43612ce5fdcbb0176af216401c670cd3cb135cdf67f0fd821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02e69fc05f92ba43612ce5fdcbb0176af216401c670cd3cb135cdf67f0fd821->enter($__internal_a02e69fc05f92ba43612ce5fdcbb0176af216401c670cd3cb135cdf67f0fd821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_841541d6b663d67fd2ebefc0af26df9990b8610eec5f64fc14d9fd247eec60d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841541d6b663d67fd2ebefc0af26df9990b8610eec5f64fc14d9fd247eec60d9->enter($__internal_841541d6b663d67fd2ebefc0af26df9990b8610eec5f64fc14d9fd247eec60d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_841541d6b663d67fd2ebefc0af26df9990b8610eec5f64fc14d9fd247eec60d9->leave($__internal_841541d6b663d67fd2ebefc0af26df9990b8610eec5f64fc14d9fd247eec60d9_prof);

        
        $__internal_a02e69fc05f92ba43612ce5fdcbb0176af216401c670cd3cb135cdf67f0fd821->leave($__internal_a02e69fc05f92ba43612ce5fdcbb0176af216401c670cd3cb135cdf67f0fd821_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7eed66ef7dd9e908add5b3c282ceb95477e0bf5c131085517eabd12cef2a0bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7eed66ef7dd9e908add5b3c282ceb95477e0bf5c131085517eabd12cef2a0bb->enter($__internal_a7eed66ef7dd9e908add5b3c282ceb95477e0bf5c131085517eabd12cef2a0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b7d2b131978d4bd21a388c473588738e9c9d641bd536d85590a7dc0987a9fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7d2b131978d4bd21a388c473588738e9c9d641bd536d85590a7dc0987a9fa8->enter($__internal_5b7d2b131978d4bd21a388c473588738e9c9d641bd536d85590a7dc0987a9fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b7d2b131978d4bd21a388c473588738e9c9d641bd536d85590a7dc0987a9fa8->leave($__internal_5b7d2b131978d4bd21a388c473588738e9c9d641bd536d85590a7dc0987a9fa8_prof);

        
        $__internal_a7eed66ef7dd9e908add5b3c282ceb95477e0bf5c131085517eabd12cef2a0bb->leave($__internal_a7eed66ef7dd9e908add5b3c282ceb95477e0bf5c131085517eabd12cef2a0bb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
