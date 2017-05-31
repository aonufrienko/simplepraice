<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ebfd5ace12b238358b83b89fff067be87118f7d5c896aa0ec1a13c49f82fea2f extends Twig_Template
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
        $__internal_1292fe5b057dc37366a1188211bae9782046fe5b6f7b2b087a2b1081356822a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1292fe5b057dc37366a1188211bae9782046fe5b6f7b2b087a2b1081356822a2->enter($__internal_1292fe5b057dc37366a1188211bae9782046fe5b6f7b2b087a2b1081356822a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_664c431f381dc6c622841d1fcdd74106c085773a97838b92aaa8d2c92b432e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664c431f381dc6c622841d1fcdd74106c085773a97838b92aaa8d2c92b432e5e->enter($__internal_664c431f381dc6c622841d1fcdd74106c085773a97838b92aaa8d2c92b432e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1292fe5b057dc37366a1188211bae9782046fe5b6f7b2b087a2b1081356822a2->leave($__internal_1292fe5b057dc37366a1188211bae9782046fe5b6f7b2b087a2b1081356822a2_prof);

        
        $__internal_664c431f381dc6c622841d1fcdd74106c085773a97838b92aaa8d2c92b432e5e->leave($__internal_664c431f381dc6c622841d1fcdd74106c085773a97838b92aaa8d2c92b432e5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
