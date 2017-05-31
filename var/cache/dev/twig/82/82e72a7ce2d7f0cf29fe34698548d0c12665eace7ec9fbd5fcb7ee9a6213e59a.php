<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_81adae75faad2e6ba3c986a31a7c8b6df32ae167cdececdf2a290bce27b530a6 extends Twig_Template
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
        $__internal_4e6fd50844c7d7519ec5bf4bdd29a7b5533395d1e6fff60d3744af6f8724a01c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6fd50844c7d7519ec5bf4bdd29a7b5533395d1e6fff60d3744af6f8724a01c->enter($__internal_4e6fd50844c7d7519ec5bf4bdd29a7b5533395d1e6fff60d3744af6f8724a01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e0a002669c2b3fe7779aa6d042ae70bee9d5d278f41f4356a99f2da4bb9e6649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a002669c2b3fe7779aa6d042ae70bee9d5d278f41f4356a99f2da4bb9e6649->enter($__internal_e0a002669c2b3fe7779aa6d042ae70bee9d5d278f41f4356a99f2da4bb9e6649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4e6fd50844c7d7519ec5bf4bdd29a7b5533395d1e6fff60d3744af6f8724a01c->leave($__internal_4e6fd50844c7d7519ec5bf4bdd29a7b5533395d1e6fff60d3744af6f8724a01c_prof);

        
        $__internal_e0a002669c2b3fe7779aa6d042ae70bee9d5d278f41f4356a99f2da4bb9e6649->leave($__internal_e0a002669c2b3fe7779aa6d042ae70bee9d5d278f41f4356a99f2da4bb9e6649_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
