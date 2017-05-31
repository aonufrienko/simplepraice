<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ec6d46555e2034d392cd4f045ddf46fc6f02ca06ac3658e287a7488bdcb299c3 extends Twig_Template
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
        $__internal_318def842442450881666dbf118e68d12c1d0b172e908da209538e8ee3082fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318def842442450881666dbf118e68d12c1d0b172e908da209538e8ee3082fc9->enter($__internal_318def842442450881666dbf118e68d12c1d0b172e908da209538e8ee3082fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a1742d9233d1d83a6ba18c6c7df515ba9c4bfed4c5dae7dd589566a1473ebd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1742d9233d1d83a6ba18c6c7df515ba9c4bfed4c5dae7dd589566a1473ebd2b->enter($__internal_a1742d9233d1d83a6ba18c6c7df515ba9c4bfed4c5dae7dd589566a1473ebd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_318def842442450881666dbf118e68d12c1d0b172e908da209538e8ee3082fc9->leave($__internal_318def842442450881666dbf118e68d12c1d0b172e908da209538e8ee3082fc9_prof);

        
        $__internal_a1742d9233d1d83a6ba18c6c7df515ba9c4bfed4c5dae7dd589566a1473ebd2b->leave($__internal_a1742d9233d1d83a6ba18c6c7df515ba9c4bfed4c5dae7dd589566a1473ebd2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
