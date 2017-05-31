<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c461d682694ac95db26a8c5b409f676678bf985c3e11dd5a56033a90c67dead0 extends Twig_Template
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
        $__internal_656938b5625f8676e0d749d1b867e9a886dc310618c2864f67d040ebad386561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656938b5625f8676e0d749d1b867e9a886dc310618c2864f67d040ebad386561->enter($__internal_656938b5625f8676e0d749d1b867e9a886dc310618c2864f67d040ebad386561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2abcfc5684ed95b2c534982d01364d083425e0938a5dbe34b9c0b4e9d8a10f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abcfc5684ed95b2c534982d01364d083425e0938a5dbe34b9c0b4e9d8a10f21->enter($__internal_2abcfc5684ed95b2c534982d01364d083425e0938a5dbe34b9c0b4e9d8a10f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_656938b5625f8676e0d749d1b867e9a886dc310618c2864f67d040ebad386561->leave($__internal_656938b5625f8676e0d749d1b867e9a886dc310618c2864f67d040ebad386561_prof);

        
        $__internal_2abcfc5684ed95b2c534982d01364d083425e0938a5dbe34b9c0b4e9d8a10f21->leave($__internal_2abcfc5684ed95b2c534982d01364d083425e0938a5dbe34b9c0b4e9d8a10f21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
