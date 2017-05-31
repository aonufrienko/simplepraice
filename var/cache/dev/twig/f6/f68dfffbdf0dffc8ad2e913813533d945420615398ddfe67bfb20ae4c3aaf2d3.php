<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_75deec35f7d633e2129b60d241f12f3698b8c5e9d1a72cd4f2b0e40681d28a99 extends Twig_Template
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
        $__internal_dbc9c59d8803ecc1591092d97263f33920b7765d2647a63c1ff72a1f263902a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc9c59d8803ecc1591092d97263f33920b7765d2647a63c1ff72a1f263902a4->enter($__internal_dbc9c59d8803ecc1591092d97263f33920b7765d2647a63c1ff72a1f263902a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8c639f95bd11761030d0547bcc10d36e019c354de275fda32338a2bff5f703f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c639f95bd11761030d0547bcc10d36e019c354de275fda32338a2bff5f703f8->enter($__internal_8c639f95bd11761030d0547bcc10d36e019c354de275fda32338a2bff5f703f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_dbc9c59d8803ecc1591092d97263f33920b7765d2647a63c1ff72a1f263902a4->leave($__internal_dbc9c59d8803ecc1591092d97263f33920b7765d2647a63c1ff72a1f263902a4_prof);

        
        $__internal_8c639f95bd11761030d0547bcc10d36e019c354de275fda32338a2bff5f703f8->leave($__internal_8c639f95bd11761030d0547bcc10d36e019c354de275fda32338a2bff5f703f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
