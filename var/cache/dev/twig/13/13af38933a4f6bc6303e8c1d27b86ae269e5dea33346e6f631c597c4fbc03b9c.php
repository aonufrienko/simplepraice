<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2258561f07ff140e32c1f4f73224d9e8986815460ce10492ae868cda41c8499c extends Twig_Template
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
        $__internal_a92af7390dc854ae792a9f44a32666a73470a2aab5202bc7aa040eed29884906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92af7390dc854ae792a9f44a32666a73470a2aab5202bc7aa040eed29884906->enter($__internal_a92af7390dc854ae792a9f44a32666a73470a2aab5202bc7aa040eed29884906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_afb07e0dd9597a6bdc7e8115d2fdd21e3beec81b91d635c990a0087d6c6fa070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb07e0dd9597a6bdc7e8115d2fdd21e3beec81b91d635c990a0087d6c6fa070->enter($__internal_afb07e0dd9597a6bdc7e8115d2fdd21e3beec81b91d635c990a0087d6c6fa070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a92af7390dc854ae792a9f44a32666a73470a2aab5202bc7aa040eed29884906->leave($__internal_a92af7390dc854ae792a9f44a32666a73470a2aab5202bc7aa040eed29884906_prof);

        
        $__internal_afb07e0dd9597a6bdc7e8115d2fdd21e3beec81b91d635c990a0087d6c6fa070->leave($__internal_afb07e0dd9597a6bdc7e8115d2fdd21e3beec81b91d635c990a0087d6c6fa070_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
