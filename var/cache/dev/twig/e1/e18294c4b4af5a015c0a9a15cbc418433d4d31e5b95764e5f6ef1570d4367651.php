<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_07e48d0a50392af885080e28f6130fa0a71811d01c3e6c9ab444d7df40a149e0 extends Twig_Template
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
        $__internal_25f33ad06ebcdf91b16d24b3f638a9994dc36c69f4ee62583291cf78086f4ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f33ad06ebcdf91b16d24b3f638a9994dc36c69f4ee62583291cf78086f4ddf->enter($__internal_25f33ad06ebcdf91b16d24b3f638a9994dc36c69f4ee62583291cf78086f4ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_db94e005436e814a08df7e69a1eb144df2b89b2ec47793b97ccbfcf4e6a9eb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db94e005436e814a08df7e69a1eb144df2b89b2ec47793b97ccbfcf4e6a9eb4e->enter($__internal_db94e005436e814a08df7e69a1eb144df2b89b2ec47793b97ccbfcf4e6a9eb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_25f33ad06ebcdf91b16d24b3f638a9994dc36c69f4ee62583291cf78086f4ddf->leave($__internal_25f33ad06ebcdf91b16d24b3f638a9994dc36c69f4ee62583291cf78086f4ddf_prof);

        
        $__internal_db94e005436e814a08df7e69a1eb144df2b89b2ec47793b97ccbfcf4e6a9eb4e->leave($__internal_db94e005436e814a08df7e69a1eb144df2b89b2ec47793b97ccbfcf4e6a9eb4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
