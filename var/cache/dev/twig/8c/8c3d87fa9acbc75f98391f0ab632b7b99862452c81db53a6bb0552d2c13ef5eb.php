<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_60e083c17cec66ad39289ca2141495650554dd49914cff5ece633d1b7ae23703 extends Twig_Template
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
        $__internal_160e24e74b4311617621997a1d8fbc4464f43f080dd2efd0636d0ef3aba8d6e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160e24e74b4311617621997a1d8fbc4464f43f080dd2efd0636d0ef3aba8d6e2->enter($__internal_160e24e74b4311617621997a1d8fbc4464f43f080dd2efd0636d0ef3aba8d6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_22ff7d22941bb9af8cb2d18da449c2c5864296e72005e5da6e0910c0ade9ee64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ff7d22941bb9af8cb2d18da449c2c5864296e72005e5da6e0910c0ade9ee64->enter($__internal_22ff7d22941bb9af8cb2d18da449c2c5864296e72005e5da6e0910c0ade9ee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_160e24e74b4311617621997a1d8fbc4464f43f080dd2efd0636d0ef3aba8d6e2->leave($__internal_160e24e74b4311617621997a1d8fbc4464f43f080dd2efd0636d0ef3aba8d6e2_prof);

        
        $__internal_22ff7d22941bb9af8cb2d18da449c2c5864296e72005e5da6e0910c0ade9ee64->leave($__internal_22ff7d22941bb9af8cb2d18da449c2c5864296e72005e5da6e0910c0ade9ee64_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
