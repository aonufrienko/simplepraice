<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a78a6ff1855a11fa56b9aa6f9e619d5d8d1b705a194d0b65fc2ec565b651ab79 extends Twig_Template
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
        $__internal_f2baa9ae708ad0200122f2a5b33c0584499a037d4633607ea431ffab6e4ade5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2baa9ae708ad0200122f2a5b33c0584499a037d4633607ea431ffab6e4ade5c->enter($__internal_f2baa9ae708ad0200122f2a5b33c0584499a037d4633607ea431ffab6e4ade5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2e34baa5b2158fa5c3ce5a5998d820eb38b26fb553f7642ce9394119f473d1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e34baa5b2158fa5c3ce5a5998d820eb38b26fb553f7642ce9394119f473d1f5->enter($__internal_2e34baa5b2158fa5c3ce5a5998d820eb38b26fb553f7642ce9394119f473d1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f2baa9ae708ad0200122f2a5b33c0584499a037d4633607ea431ffab6e4ade5c->leave($__internal_f2baa9ae708ad0200122f2a5b33c0584499a037d4633607ea431ffab6e4ade5c_prof);

        
        $__internal_2e34baa5b2158fa5c3ce5a5998d820eb38b26fb553f7642ce9394119f473d1f5->leave($__internal_2e34baa5b2158fa5c3ce5a5998d820eb38b26fb553f7642ce9394119f473d1f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
