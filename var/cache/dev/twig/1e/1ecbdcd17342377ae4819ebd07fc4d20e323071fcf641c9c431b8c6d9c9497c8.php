<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f124d37a05b2262eb56cd6ffd21cd10989e9b2c0d575529b58e1af382450dda8 extends Twig_Template
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
        $__internal_38c1dd9d246fcb72a39707ab6bfb4bd19cb02c6c455def748e9b4919aefe07b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c1dd9d246fcb72a39707ab6bfb4bd19cb02c6c455def748e9b4919aefe07b3->enter($__internal_38c1dd9d246fcb72a39707ab6bfb4bd19cb02c6c455def748e9b4919aefe07b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9c4c7f77131301e8f28296c9084d9d5964161290b8b09a6907fcae453f84c4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4c7f77131301e8f28296c9084d9d5964161290b8b09a6907fcae453f84c4d7->enter($__internal_9c4c7f77131301e8f28296c9084d9d5964161290b8b09a6907fcae453f84c4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_38c1dd9d246fcb72a39707ab6bfb4bd19cb02c6c455def748e9b4919aefe07b3->leave($__internal_38c1dd9d246fcb72a39707ab6bfb4bd19cb02c6c455def748e9b4919aefe07b3_prof);

        
        $__internal_9c4c7f77131301e8f28296c9084d9d5964161290b8b09a6907fcae453f84c4d7->leave($__internal_9c4c7f77131301e8f28296c9084d9d5964161290b8b09a6907fcae453f84c4d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
