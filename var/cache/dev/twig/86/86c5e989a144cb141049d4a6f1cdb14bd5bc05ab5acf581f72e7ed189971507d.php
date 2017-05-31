<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_12070d718bfc51e8a51c7abb3735953deaf59e9121363fd43fe8f77c18067e86 extends Twig_Template
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
        $__internal_9c44174a0b7f1e12f095bd9445bc5cf708619213f13ce0982f32f262eedaf47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c44174a0b7f1e12f095bd9445bc5cf708619213f13ce0982f32f262eedaf47d->enter($__internal_9c44174a0b7f1e12f095bd9445bc5cf708619213f13ce0982f32f262eedaf47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_edf053a35ce4ecb2c1093048dbe0226f8a022804792caedfb402d370568b834d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf053a35ce4ecb2c1093048dbe0226f8a022804792caedfb402d370568b834d->enter($__internal_edf053a35ce4ecb2c1093048dbe0226f8a022804792caedfb402d370568b834d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9c44174a0b7f1e12f095bd9445bc5cf708619213f13ce0982f32f262eedaf47d->leave($__internal_9c44174a0b7f1e12f095bd9445bc5cf708619213f13ce0982f32f262eedaf47d_prof);

        
        $__internal_edf053a35ce4ecb2c1093048dbe0226f8a022804792caedfb402d370568b834d->leave($__internal_edf053a35ce4ecb2c1093048dbe0226f8a022804792caedfb402d370568b834d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
