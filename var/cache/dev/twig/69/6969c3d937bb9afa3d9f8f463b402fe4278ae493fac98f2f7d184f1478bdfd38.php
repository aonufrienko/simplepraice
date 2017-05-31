<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_adb5c9aed8e238ce21f7bdcb74877aedf5f913e215cb2622a3e8afe3d625bd51 extends Twig_Template
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
        $__internal_a4f35337bd652565098a33eead2d89cebe648c80950f5a06de3c47b82a8e0975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f35337bd652565098a33eead2d89cebe648c80950f5a06de3c47b82a8e0975->enter($__internal_a4f35337bd652565098a33eead2d89cebe648c80950f5a06de3c47b82a8e0975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d8193e4a6faef51aa5dd921ab1c68ad27e28f8fc47e58befdeeb0582f666be2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8193e4a6faef51aa5dd921ab1c68ad27e28f8fc47e58befdeeb0582f666be2d->enter($__internal_d8193e4a6faef51aa5dd921ab1c68ad27e28f8fc47e58befdeeb0582f666be2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a4f35337bd652565098a33eead2d89cebe648c80950f5a06de3c47b82a8e0975->leave($__internal_a4f35337bd652565098a33eead2d89cebe648c80950f5a06de3c47b82a8e0975_prof);

        
        $__internal_d8193e4a6faef51aa5dd921ab1c68ad27e28f8fc47e58befdeeb0582f666be2d->leave($__internal_d8193e4a6faef51aa5dd921ab1c68ad27e28f8fc47e58befdeeb0582f666be2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
