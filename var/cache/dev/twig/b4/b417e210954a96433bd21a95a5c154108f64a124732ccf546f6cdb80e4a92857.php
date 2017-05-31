<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e1dc7024c0c5331030807caecae9982bd09782eac2728b21e6dbfdc4e12f3b01 extends Twig_Template
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
        $__internal_f5b771ce7c416fa912abe3d1fb83379c5f257279222ff48756ec0530f34eff8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b771ce7c416fa912abe3d1fb83379c5f257279222ff48756ec0530f34eff8b->enter($__internal_f5b771ce7c416fa912abe3d1fb83379c5f257279222ff48756ec0530f34eff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f0b71544e080a0fb749b5f47be47503f9d5e8d27fa93667f7ba583302fb711f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0b71544e080a0fb749b5f47be47503f9d5e8d27fa93667f7ba583302fb711f1->enter($__internal_f0b71544e080a0fb749b5f47be47503f9d5e8d27fa93667f7ba583302fb711f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f5b771ce7c416fa912abe3d1fb83379c5f257279222ff48756ec0530f34eff8b->leave($__internal_f5b771ce7c416fa912abe3d1fb83379c5f257279222ff48756ec0530f34eff8b_prof);

        
        $__internal_f0b71544e080a0fb749b5f47be47503f9d5e8d27fa93667f7ba583302fb711f1->leave($__internal_f0b71544e080a0fb749b5f47be47503f9d5e8d27fa93667f7ba583302fb711f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
