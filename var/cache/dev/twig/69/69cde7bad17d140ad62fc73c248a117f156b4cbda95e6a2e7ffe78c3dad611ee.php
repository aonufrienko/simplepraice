<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9fb48ab85c6fa2ec16cc489adf99081fd879f3501ba7d70b54c2fa40d5384b93 extends Twig_Template
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
        $__internal_26a8dafaad6736b0e5cab1f741f435258b5371798ca1e65697e31f0954bea88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a8dafaad6736b0e5cab1f741f435258b5371798ca1e65697e31f0954bea88f->enter($__internal_26a8dafaad6736b0e5cab1f741f435258b5371798ca1e65697e31f0954bea88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_acafe531a0b35344eaa6fd52789954bdf4695b7c8707dc1d25ad15ae6581cb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acafe531a0b35344eaa6fd52789954bdf4695b7c8707dc1d25ad15ae6581cb6b->enter($__internal_acafe531a0b35344eaa6fd52789954bdf4695b7c8707dc1d25ad15ae6581cb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_26a8dafaad6736b0e5cab1f741f435258b5371798ca1e65697e31f0954bea88f->leave($__internal_26a8dafaad6736b0e5cab1f741f435258b5371798ca1e65697e31f0954bea88f_prof);

        
        $__internal_acafe531a0b35344eaa6fd52789954bdf4695b7c8707dc1d25ad15ae6581cb6b->leave($__internal_acafe531a0b35344eaa6fd52789954bdf4695b7c8707dc1d25ad15ae6581cb6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
