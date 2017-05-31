<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ad13a00d8b12ccedd00ccd8c4d4f5b342773afabd7cc6654b67bf5571f4d9139 extends Twig_Template
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
        $__internal_1bd6c96bfe53e22f2ee763b3be4491b30484c83ee105992ee977dbeaeeb625ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bd6c96bfe53e22f2ee763b3be4491b30484c83ee105992ee977dbeaeeb625ec->enter($__internal_1bd6c96bfe53e22f2ee763b3be4491b30484c83ee105992ee977dbeaeeb625ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5204bb22532a11fe098c21691b2afa6b6e7c1b1f6fdfd06d6de4a96d6420cccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5204bb22532a11fe098c21691b2afa6b6e7c1b1f6fdfd06d6de4a96d6420cccc->enter($__internal_5204bb22532a11fe098c21691b2afa6b6e7c1b1f6fdfd06d6de4a96d6420cccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1bd6c96bfe53e22f2ee763b3be4491b30484c83ee105992ee977dbeaeeb625ec->leave($__internal_1bd6c96bfe53e22f2ee763b3be4491b30484c83ee105992ee977dbeaeeb625ec_prof);

        
        $__internal_5204bb22532a11fe098c21691b2afa6b6e7c1b1f6fdfd06d6de4a96d6420cccc->leave($__internal_5204bb22532a11fe098c21691b2afa6b6e7c1b1f6fdfd06d6de4a96d6420cccc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
