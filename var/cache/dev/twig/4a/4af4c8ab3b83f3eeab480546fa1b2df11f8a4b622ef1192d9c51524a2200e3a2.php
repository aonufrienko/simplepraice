<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_82d52eab7308b1bfe1d92d13d442c73173fdd0c340797dfed469885bd831c198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4584f3c69a297694b4e457b59123faefd837c965cbad68abaab6f22495fb2eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4584f3c69a297694b4e457b59123faefd837c965cbad68abaab6f22495fb2eb7->enter($__internal_4584f3c69a297694b4e457b59123faefd837c965cbad68abaab6f22495fb2eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_fd5d9752cc428ccf824e8e6da1bb8e937e0f64356e8c8f96aed188fbc2453740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5d9752cc428ccf824e8e6da1bb8e937e0f64356e8c8f96aed188fbc2453740->enter($__internal_fd5d9752cc428ccf824e8e6da1bb8e937e0f64356e8c8f96aed188fbc2453740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_4584f3c69a297694b4e457b59123faefd837c965cbad68abaab6f22495fb2eb7->leave($__internal_4584f3c69a297694b4e457b59123faefd837c965cbad68abaab6f22495fb2eb7_prof);

        
        $__internal_fd5d9752cc428ccf824e8e6da1bb8e937e0f64356e8c8f96aed188fbc2453740->leave($__internal_fd5d9752cc428ccf824e8e6da1bb8e937e0f64356e8c8f96aed188fbc2453740_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
