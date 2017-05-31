<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e6a617f70ceb20ccf700a800676314ea2830de0d56a1bd622841f731eda41c61 extends Twig_Template
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
        $__internal_c970168f36827ca5db62a8c2e1446634a19358ab10920852097cf44b4131cb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c970168f36827ca5db62a8c2e1446634a19358ab10920852097cf44b4131cb62->enter($__internal_c970168f36827ca5db62a8c2e1446634a19358ab10920852097cf44b4131cb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_82ac903f59e88a5f2d6607cc78593a46198ea71c7d11cd9394b7734663cc2cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ac903f59e88a5f2d6607cc78593a46198ea71c7d11cd9394b7734663cc2cc2->enter($__internal_82ac903f59e88a5f2d6607cc78593a46198ea71c7d11cd9394b7734663cc2cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c970168f36827ca5db62a8c2e1446634a19358ab10920852097cf44b4131cb62->leave($__internal_c970168f36827ca5db62a8c2e1446634a19358ab10920852097cf44b4131cb62_prof);

        
        $__internal_82ac903f59e88a5f2d6607cc78593a46198ea71c7d11cd9394b7734663cc2cc2->leave($__internal_82ac903f59e88a5f2d6607cc78593a46198ea71c7d11cd9394b7734663cc2cc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
