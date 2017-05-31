<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_633e562032fc2c207cb7b9d09c6a739a81d66b6c442451a74eeb29393ef2e537 extends Twig_Template
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
        $__internal_f752c89406cbef88f851fb1cf2e19f535709c48f07138076d19f2b8d42a611aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f752c89406cbef88f851fb1cf2e19f535709c48f07138076d19f2b8d42a611aa->enter($__internal_f752c89406cbef88f851fb1cf2e19f535709c48f07138076d19f2b8d42a611aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_cc60c83296251294850604107de0b032bed7eda69f6ff6c7187708271cbd70f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc60c83296251294850604107de0b032bed7eda69f6ff6c7187708271cbd70f8->enter($__internal_cc60c83296251294850604107de0b032bed7eda69f6ff6c7187708271cbd70f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f752c89406cbef88f851fb1cf2e19f535709c48f07138076d19f2b8d42a611aa->leave($__internal_f752c89406cbef88f851fb1cf2e19f535709c48f07138076d19f2b8d42a611aa_prof);

        
        $__internal_cc60c83296251294850604107de0b032bed7eda69f6ff6c7187708271cbd70f8->leave($__internal_cc60c83296251294850604107de0b032bed7eda69f6ff6c7187708271cbd70f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
