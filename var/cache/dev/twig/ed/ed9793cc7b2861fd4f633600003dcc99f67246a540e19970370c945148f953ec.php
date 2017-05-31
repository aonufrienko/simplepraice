<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b9722f19ed09fef2b51b2dd70e6c854f2e25abf70a6d3bbb338dcfaddfc89139 extends Twig_Template
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
        $__internal_ab76c6624f59b2ee1a7e9acc8eef013bd83b67e767cea400b9fda64d5c09ce7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab76c6624f59b2ee1a7e9acc8eef013bd83b67e767cea400b9fda64d5c09ce7a->enter($__internal_ab76c6624f59b2ee1a7e9acc8eef013bd83b67e767cea400b9fda64d5c09ce7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ee1952e78cce181d7aa619b2cfb6032e4748742efd054cea999b923e250695e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1952e78cce181d7aa619b2cfb6032e4748742efd054cea999b923e250695e3->enter($__internal_ee1952e78cce181d7aa619b2cfb6032e4748742efd054cea999b923e250695e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ab76c6624f59b2ee1a7e9acc8eef013bd83b67e767cea400b9fda64d5c09ce7a->leave($__internal_ab76c6624f59b2ee1a7e9acc8eef013bd83b67e767cea400b9fda64d5c09ce7a_prof);

        
        $__internal_ee1952e78cce181d7aa619b2cfb6032e4748742efd054cea999b923e250695e3->leave($__internal_ee1952e78cce181d7aa619b2cfb6032e4748742efd054cea999b923e250695e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
