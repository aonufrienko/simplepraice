<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e0f971210a2118e226bb84aee46a0abb2057b39af44c6fd69545236a42f8c632 extends Twig_Template
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
        $__internal_da6f2d8c046401f885a5d91f5935c837c32d55b340fdb7eeed3266d213f34e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6f2d8c046401f885a5d91f5935c837c32d55b340fdb7eeed3266d213f34e26->enter($__internal_da6f2d8c046401f885a5d91f5935c837c32d55b340fdb7eeed3266d213f34e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ec9e7849011562a48ea2c3b1146c768692c34c47a15ae44a1fbbcf0966e2adf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9e7849011562a48ea2c3b1146c768692c34c47a15ae44a1fbbcf0966e2adf2->enter($__internal_ec9e7849011562a48ea2c3b1146c768692c34c47a15ae44a1fbbcf0966e2adf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_da6f2d8c046401f885a5d91f5935c837c32d55b340fdb7eeed3266d213f34e26->leave($__internal_da6f2d8c046401f885a5d91f5935c837c32d55b340fdb7eeed3266d213f34e26_prof);

        
        $__internal_ec9e7849011562a48ea2c3b1146c768692c34c47a15ae44a1fbbcf0966e2adf2->leave($__internal_ec9e7849011562a48ea2c3b1146c768692c34c47a15ae44a1fbbcf0966e2adf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
