<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_602b203dd35e13055bff4ccb552538a2647d7938861765566022e5171311cfc4 extends Twig_Template
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
        $__internal_4565628cca4577e243063a26da37977fd3b62901552c5a90744b71c9846f7cb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4565628cca4577e243063a26da37977fd3b62901552c5a90744b71c9846f7cb7->enter($__internal_4565628cca4577e243063a26da37977fd3b62901552c5a90744b71c9846f7cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_337404ed6adb6b28f6b8b3848bc192fe94f739f8dbd9ec4e8de7b1c20e202873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337404ed6adb6b28f6b8b3848bc192fe94f739f8dbd9ec4e8de7b1c20e202873->enter($__internal_337404ed6adb6b28f6b8b3848bc192fe94f739f8dbd9ec4e8de7b1c20e202873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_4565628cca4577e243063a26da37977fd3b62901552c5a90744b71c9846f7cb7->leave($__internal_4565628cca4577e243063a26da37977fd3b62901552c5a90744b71c9846f7cb7_prof);

        
        $__internal_337404ed6adb6b28f6b8b3848bc192fe94f739f8dbd9ec4e8de7b1c20e202873->leave($__internal_337404ed6adb6b28f6b8b3848bc192fe94f739f8dbd9ec4e8de7b1c20e202873_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
