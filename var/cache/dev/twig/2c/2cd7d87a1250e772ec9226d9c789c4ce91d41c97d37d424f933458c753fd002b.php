<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d5c09493b70a447aab19cd8024e8cd115f80d3b47b167561362032c47f92bae6 extends Twig_Template
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
        $__internal_6231170097529dbe0556c1b67b810d6c2e188058c81fb501bac095181a2e67c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6231170097529dbe0556c1b67b810d6c2e188058c81fb501bac095181a2e67c7->enter($__internal_6231170097529dbe0556c1b67b810d6c2e188058c81fb501bac095181a2e67c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_9ffe398d1c4850b214e458d28c579437b53af2e99aff260dcf0ca97add6574ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffe398d1c4850b214e458d28c579437b53af2e99aff260dcf0ca97add6574ae->enter($__internal_9ffe398d1c4850b214e458d28c579437b53af2e99aff260dcf0ca97add6574ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6231170097529dbe0556c1b67b810d6c2e188058c81fb501bac095181a2e67c7->leave($__internal_6231170097529dbe0556c1b67b810d6c2e188058c81fb501bac095181a2e67c7_prof);

        
        $__internal_9ffe398d1c4850b214e458d28c579437b53af2e99aff260dcf0ca97add6574ae->leave($__internal_9ffe398d1c4850b214e458d28c579437b53af2e99aff260dcf0ca97add6574ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
