<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c4ce05921829ab9e8618ad92cc4f2aeed7403f604d7593a0504b1dc59c38f067 extends Twig_Template
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
        $__internal_cc0faa340c283ee2ec6724b099c49837a2385dd4a7d0a5707a1c73efbe69b86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0faa340c283ee2ec6724b099c49837a2385dd4a7d0a5707a1c73efbe69b86d->enter($__internal_cc0faa340c283ee2ec6724b099c49837a2385dd4a7d0a5707a1c73efbe69b86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_bd8f31506b9cf7f8003c652fe7e8f106c9e89211be792aefe3f18f54973bcec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8f31506b9cf7f8003c652fe7e8f106c9e89211be792aefe3f18f54973bcec5->enter($__internal_bd8f31506b9cf7f8003c652fe7e8f106c9e89211be792aefe3f18f54973bcec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_cc0faa340c283ee2ec6724b099c49837a2385dd4a7d0a5707a1c73efbe69b86d->leave($__internal_cc0faa340c283ee2ec6724b099c49837a2385dd4a7d0a5707a1c73efbe69b86d_prof);

        
        $__internal_bd8f31506b9cf7f8003c652fe7e8f106c9e89211be792aefe3f18f54973bcec5->leave($__internal_bd8f31506b9cf7f8003c652fe7e8f106c9e89211be792aefe3f18f54973bcec5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
