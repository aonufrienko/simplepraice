<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dbe3596093799abfcc846c93c6aef5fe75cbd6a3fa3eb6d816cf5d49cfd6e8c5 extends Twig_Template
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
        $__internal_740b75a514b14138ac7263a51db035d6902d26602782030b7911ae099eb2ff9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740b75a514b14138ac7263a51db035d6902d26602782030b7911ae099eb2ff9a->enter($__internal_740b75a514b14138ac7263a51db035d6902d26602782030b7911ae099eb2ff9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ad6aed1d94088276df0358d850f91412817abbf335ab6041e4b375a0af23b818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6aed1d94088276df0358d850f91412817abbf335ab6041e4b375a0af23b818->enter($__internal_ad6aed1d94088276df0358d850f91412817abbf335ab6041e4b375a0af23b818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_740b75a514b14138ac7263a51db035d6902d26602782030b7911ae099eb2ff9a->leave($__internal_740b75a514b14138ac7263a51db035d6902d26602782030b7911ae099eb2ff9a_prof);

        
        $__internal_ad6aed1d94088276df0358d850f91412817abbf335ab6041e4b375a0af23b818->leave($__internal_ad6aed1d94088276df0358d850f91412817abbf335ab6041e4b375a0af23b818_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
