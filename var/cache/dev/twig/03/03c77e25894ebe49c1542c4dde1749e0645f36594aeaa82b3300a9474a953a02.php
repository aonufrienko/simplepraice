<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3c1e989bc1e6d036adbf4dd72cdd5c30b24d7b1eb719f118ff343db1b4c092b8 extends Twig_Template
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
        $__internal_d44ab6b08505ee29857c5b011d97b83f208d6a910d2e43dcb78f5eff4788b541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44ab6b08505ee29857c5b011d97b83f208d6a910d2e43dcb78f5eff4788b541->enter($__internal_d44ab6b08505ee29857c5b011d97b83f208d6a910d2e43dcb78f5eff4788b541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9b61bb7be95ee28f1232d30fd93e05eb9fa10c74d98c18edc937c50137c940c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b61bb7be95ee28f1232d30fd93e05eb9fa10c74d98c18edc937c50137c940c8->enter($__internal_9b61bb7be95ee28f1232d30fd93e05eb9fa10c74d98c18edc937c50137c940c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d44ab6b08505ee29857c5b011d97b83f208d6a910d2e43dcb78f5eff4788b541->leave($__internal_d44ab6b08505ee29857c5b011d97b83f208d6a910d2e43dcb78f5eff4788b541_prof);

        
        $__internal_9b61bb7be95ee28f1232d30fd93e05eb9fa10c74d98c18edc937c50137c940c8->leave($__internal_9b61bb7be95ee28f1232d30fd93e05eb9fa10c74d98c18edc937c50137c940c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
