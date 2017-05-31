<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8b2a29beef47614af8f624c4629a4dbd63828ec2fa153ac163f68ba72fd05d25 extends Twig_Template
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
        $__internal_d16fd94ed666e3f5a118cfdda8c956e8546e91c335ed0763e9ed1a7d6b10b476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16fd94ed666e3f5a118cfdda8c956e8546e91c335ed0763e9ed1a7d6b10b476->enter($__internal_d16fd94ed666e3f5a118cfdda8c956e8546e91c335ed0763e9ed1a7d6b10b476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_3e2f2986720872210c169a6efd904f7e10c45f29df36cf721cec0c16084eca43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2f2986720872210c169a6efd904f7e10c45f29df36cf721cec0c16084eca43->enter($__internal_3e2f2986720872210c169a6efd904f7e10c45f29df36cf721cec0c16084eca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d16fd94ed666e3f5a118cfdda8c956e8546e91c335ed0763e9ed1a7d6b10b476->leave($__internal_d16fd94ed666e3f5a118cfdda8c956e8546e91c335ed0763e9ed1a7d6b10b476_prof);

        
        $__internal_3e2f2986720872210c169a6efd904f7e10c45f29df36cf721cec0c16084eca43->leave($__internal_3e2f2986720872210c169a6efd904f7e10c45f29df36cf721cec0c16084eca43_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
