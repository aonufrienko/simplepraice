<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_87a08ea14c26eecd3a8576d0e4f63eb4bacf4d180b7fdf13ae0b811b7302eed3 extends Twig_Template
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
        $__internal_6f2cdd8c29be64f808666ecff2f68ddd3b1892e4b787a5b230d1d851fd96fbfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2cdd8c29be64f808666ecff2f68ddd3b1892e4b787a5b230d1d851fd96fbfd->enter($__internal_6f2cdd8c29be64f808666ecff2f68ddd3b1892e4b787a5b230d1d851fd96fbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_953eafabd941771477e043c3dd1e4b332979334fff56de9edf637c87d8dc784d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953eafabd941771477e043c3dd1e4b332979334fff56de9edf637c87d8dc784d->enter($__internal_953eafabd941771477e043c3dd1e4b332979334fff56de9edf637c87d8dc784d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6f2cdd8c29be64f808666ecff2f68ddd3b1892e4b787a5b230d1d851fd96fbfd->leave($__internal_6f2cdd8c29be64f808666ecff2f68ddd3b1892e4b787a5b230d1d851fd96fbfd_prof);

        
        $__internal_953eafabd941771477e043c3dd1e4b332979334fff56de9edf637c87d8dc784d->leave($__internal_953eafabd941771477e043c3dd1e4b332979334fff56de9edf637c87d8dc784d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
