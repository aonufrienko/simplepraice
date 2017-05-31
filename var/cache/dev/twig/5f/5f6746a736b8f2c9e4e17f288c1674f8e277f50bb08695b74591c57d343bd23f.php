<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_84d8e4234ad8da65ead528aca2feb7c0ec16b867fc9e73a841cdd2f377dc8b9a extends Twig_Template
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
        $__internal_fc226bcadfea73baa628d51a17748ff1c1df141487aaa12167c95accda8c8a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc226bcadfea73baa628d51a17748ff1c1df141487aaa12167c95accda8c8a17->enter($__internal_fc226bcadfea73baa628d51a17748ff1c1df141487aaa12167c95accda8c8a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_dc129a9e388d96594c7e33fd5d76de475596944c875e62a8b1082ea421c35d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc129a9e388d96594c7e33fd5d76de475596944c875e62a8b1082ea421c35d8b->enter($__internal_dc129a9e388d96594c7e33fd5d76de475596944c875e62a8b1082ea421c35d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_fc226bcadfea73baa628d51a17748ff1c1df141487aaa12167c95accda8c8a17->leave($__internal_fc226bcadfea73baa628d51a17748ff1c1df141487aaa12167c95accda8c8a17_prof);

        
        $__internal_dc129a9e388d96594c7e33fd5d76de475596944c875e62a8b1082ea421c35d8b->leave($__internal_dc129a9e388d96594c7e33fd5d76de475596944c875e62a8b1082ea421c35d8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
