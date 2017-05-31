<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9781175d7d2f96a0c4395b170a783381bf7238ea78dcfd332ae3f67f5fa84a44 extends Twig_Template
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
        $__internal_da41f56a4b67ee958f7b45b480885236045a8697a48f71cb83e270fbe24f36c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da41f56a4b67ee958f7b45b480885236045a8697a48f71cb83e270fbe24f36c7->enter($__internal_da41f56a4b67ee958f7b45b480885236045a8697a48f71cb83e270fbe24f36c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_477cf82bf2ff4d4de2a97d8f2ecc10cf2677d925f1891c5e3e6beaedb7f9219a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477cf82bf2ff4d4de2a97d8f2ecc10cf2677d925f1891c5e3e6beaedb7f9219a->enter($__internal_477cf82bf2ff4d4de2a97d8f2ecc10cf2677d925f1891c5e3e6beaedb7f9219a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_da41f56a4b67ee958f7b45b480885236045a8697a48f71cb83e270fbe24f36c7->leave($__internal_da41f56a4b67ee958f7b45b480885236045a8697a48f71cb83e270fbe24f36c7_prof);

        
        $__internal_477cf82bf2ff4d4de2a97d8f2ecc10cf2677d925f1891c5e3e6beaedb7f9219a->leave($__internal_477cf82bf2ff4d4de2a97d8f2ecc10cf2677d925f1891c5e3e6beaedb7f9219a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
