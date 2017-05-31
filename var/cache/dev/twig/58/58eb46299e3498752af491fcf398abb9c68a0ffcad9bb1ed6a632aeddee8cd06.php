<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d6cb6cbeeb3e1f514801834123a9f84a251f9971f4810198e3a6366663d6eaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef56131402cc9486b4221717f5e81e526a2936554acd0bcbecb6d497f92f9508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef56131402cc9486b4221717f5e81e526a2936554acd0bcbecb6d497f92f9508->enter($__internal_ef56131402cc9486b4221717f5e81e526a2936554acd0bcbecb6d497f92f9508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_01594517480aa79c9c8ecb4d640fc530d0b69d8f5d9d2c8e73bfb3b44d7a61e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01594517480aa79c9c8ecb4d640fc530d0b69d8f5d9d2c8e73bfb3b44d7a61e0->enter($__internal_01594517480aa79c9c8ecb4d640fc530d0b69d8f5d9d2c8e73bfb3b44d7a61e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ef56131402cc9486b4221717f5e81e526a2936554acd0bcbecb6d497f92f9508->leave($__internal_ef56131402cc9486b4221717f5e81e526a2936554acd0bcbecb6d497f92f9508_prof);

        
        $__internal_01594517480aa79c9c8ecb4d640fc530d0b69d8f5d9d2c8e73bfb3b44d7a61e0->leave($__internal_01594517480aa79c9c8ecb4d640fc530d0b69d8f5d9d2c8e73bfb3b44d7a61e0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4a4af3cf0b053e2b8aafb754d504cb0c138ac180f802600779919d2c4a82e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a4af3cf0b053e2b8aafb754d504cb0c138ac180f802600779919d2c4a82e46->enter($__internal_d4a4af3cf0b053e2b8aafb754d504cb0c138ac180f802600779919d2c4a82e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_08306a71a73a8567b2a8a82ade28de1b6b3bbdab7c601e095543040ab9388c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08306a71a73a8567b2a8a82ade28de1b6b3bbdab7c601e095543040ab9388c11->enter($__internal_08306a71a73a8567b2a8a82ade28de1b6b3bbdab7c601e095543040ab9388c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_08306a71a73a8567b2a8a82ade28de1b6b3bbdab7c601e095543040ab9388c11->leave($__internal_08306a71a73a8567b2a8a82ade28de1b6b3bbdab7c601e095543040ab9388c11_prof);

        
        $__internal_d4a4af3cf0b053e2b8aafb754d504cb0c138ac180f802600779919d2c4a82e46->leave($__internal_d4a4af3cf0b053e2b8aafb754d504cb0c138ac180f802600779919d2c4a82e46_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
