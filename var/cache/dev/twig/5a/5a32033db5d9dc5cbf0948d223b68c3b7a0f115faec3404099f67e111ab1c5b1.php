<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6023dfddd742055927c2478bd8aca76cd5d258ed0deeafefe067b10a6c6dc2c0 extends Twig_Template
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
        $__internal_0bcbdc7f0bbd909745dd7f2e160256a45c3db36f5558fc5a6a493c95e840a6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcbdc7f0bbd909745dd7f2e160256a45c3db36f5558fc5a6a493c95e840a6f5->enter($__internal_0bcbdc7f0bbd909745dd7f2e160256a45c3db36f5558fc5a6a493c95e840a6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7b3cf80db64fdba77d6d1b3943e889f86a16b0ff567400b050fb4d0e2324332a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3cf80db64fdba77d6d1b3943e889f86a16b0ff567400b050fb4d0e2324332a->enter($__internal_7b3cf80db64fdba77d6d1b3943e889f86a16b0ff567400b050fb4d0e2324332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0bcbdc7f0bbd909745dd7f2e160256a45c3db36f5558fc5a6a493c95e840a6f5->leave($__internal_0bcbdc7f0bbd909745dd7f2e160256a45c3db36f5558fc5a6a493c95e840a6f5_prof);

        
        $__internal_7b3cf80db64fdba77d6d1b3943e889f86a16b0ff567400b050fb4d0e2324332a->leave($__internal_7b3cf80db64fdba77d6d1b3943e889f86a16b0ff567400b050fb4d0e2324332a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
