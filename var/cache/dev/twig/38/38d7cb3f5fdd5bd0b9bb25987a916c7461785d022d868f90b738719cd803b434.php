<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_85b25b27080361146b493977e63d8cfc90c12c43f5bfd11f29079cce126d93cf extends Twig_Template
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
        $__internal_84b6efedec8ec647a3bf5e20178224e858f82a1975ceb5213c835e8e654cdce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b6efedec8ec647a3bf5e20178224e858f82a1975ceb5213c835e8e654cdce7->enter($__internal_84b6efedec8ec647a3bf5e20178224e858f82a1975ceb5213c835e8e654cdce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_603cc0ad2fbe3abad215d36dde69ddc97776638549059a59255aaadda9730723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603cc0ad2fbe3abad215d36dde69ddc97776638549059a59255aaadda9730723->enter($__internal_603cc0ad2fbe3abad215d36dde69ddc97776638549059a59255aaadda9730723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_84b6efedec8ec647a3bf5e20178224e858f82a1975ceb5213c835e8e654cdce7->leave($__internal_84b6efedec8ec647a3bf5e20178224e858f82a1975ceb5213c835e8e654cdce7_prof);

        
        $__internal_603cc0ad2fbe3abad215d36dde69ddc97776638549059a59255aaadda9730723->leave($__internal_603cc0ad2fbe3abad215d36dde69ddc97776638549059a59255aaadda9730723_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
