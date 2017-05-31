<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f2c75c71d755c20233abb6dae5681d4ad78b3f519dc5ee83edf32e5282f28ad7 extends Twig_Template
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
        $__internal_1d97a57cb550adc2c364f975e4f480d9f900eb9bcd7de88daae396215b5221ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d97a57cb550adc2c364f975e4f480d9f900eb9bcd7de88daae396215b5221ce->enter($__internal_1d97a57cb550adc2c364f975e4f480d9f900eb9bcd7de88daae396215b5221ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_a110a3ef14d652746b478b6f88304d36355df282641699aab4b69e075742f824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a110a3ef14d652746b478b6f88304d36355df282641699aab4b69e075742f824->enter($__internal_a110a3ef14d652746b478b6f88304d36355df282641699aab4b69e075742f824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1d97a57cb550adc2c364f975e4f480d9f900eb9bcd7de88daae396215b5221ce->leave($__internal_1d97a57cb550adc2c364f975e4f480d9f900eb9bcd7de88daae396215b5221ce_prof);

        
        $__internal_a110a3ef14d652746b478b6f88304d36355df282641699aab4b69e075742f824->leave($__internal_a110a3ef14d652746b478b6f88304d36355df282641699aab4b69e075742f824_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
