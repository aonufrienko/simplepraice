<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_0081d48ac35342391a640c6ebbcf9ec7a68cca53c228369e3c98ff621deb31f6 extends Twig_Template
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
        $__internal_142aa0c11d6610f94d7d1d6e1e0625295fb4d6b4690a7f8f6c73869737a015f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142aa0c11d6610f94d7d1d6e1e0625295fb4d6b4690a7f8f6c73869737a015f1->enter($__internal_142aa0c11d6610f94d7d1d6e1e0625295fb4d6b4690a7f8f6c73869737a015f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_56b0e1b746ebb6d85b6853c7a8336d00b78e529e2377ef5a7437b373f8f95826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b0e1b746ebb6d85b6853c7a8336d00b78e529e2377ef5a7437b373f8f95826->enter($__internal_56b0e1b746ebb6d85b6853c7a8336d00b78e529e2377ef5a7437b373f8f95826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_142aa0c11d6610f94d7d1d6e1e0625295fb4d6b4690a7f8f6c73869737a015f1->leave($__internal_142aa0c11d6610f94d7d1d6e1e0625295fb4d6b4690a7f8f6c73869737a015f1_prof);

        
        $__internal_56b0e1b746ebb6d85b6853c7a8336d00b78e529e2377ef5a7437b373f8f95826->leave($__internal_56b0e1b746ebb6d85b6853c7a8336d00b78e529e2377ef5a7437b373f8f95826_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
