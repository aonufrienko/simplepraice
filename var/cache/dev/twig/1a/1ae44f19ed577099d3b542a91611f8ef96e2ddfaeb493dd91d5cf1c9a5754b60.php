<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_07b9dd8bb00f04fbdf98042be15f69075581e401b4e98e42a2cf4d6eca16055c extends Twig_Template
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
        $__internal_0e58e3fc1cb4907de7d733df7bce5c1d01ece2541871498afa698af63701e250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e58e3fc1cb4907de7d733df7bce5c1d01ece2541871498afa698af63701e250->enter($__internal_0e58e3fc1cb4907de7d733df7bce5c1d01ece2541871498afa698af63701e250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_82c4cb43047c3623976cc6657f35814816637abb4d0ef9f3fb116e2a5d96fd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c4cb43047c3623976cc6657f35814816637abb4d0ef9f3fb116e2a5d96fd0b->enter($__internal_82c4cb43047c3623976cc6657f35814816637abb4d0ef9f3fb116e2a5d96fd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0e58e3fc1cb4907de7d733df7bce5c1d01ece2541871498afa698af63701e250->leave($__internal_0e58e3fc1cb4907de7d733df7bce5c1d01ece2541871498afa698af63701e250_prof);

        
        $__internal_82c4cb43047c3623976cc6657f35814816637abb4d0ef9f3fb116e2a5d96fd0b->leave($__internal_82c4cb43047c3623976cc6657f35814816637abb4d0ef9f3fb116e2a5d96fd0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
