<?php

/* base.html.twig */
class __TwigTemplate_cacf579b6000f723f17482e8fbcf34b983262632f4c235fe52e12381e458265c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_980333561fd961ecfa9ec454bf4b7bfbb3cb90a48c260f8e489e644cc34c2900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980333561fd961ecfa9ec454bf4b7bfbb3cb90a48c260f8e489e644cc34c2900->enter($__internal_980333561fd961ecfa9ec454bf4b7bfbb3cb90a48c260f8e489e644cc34c2900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_67ce54a790964af4573c5f26f0f7d983efba302567d655c89cba6e0533600bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ce54a790964af4573c5f26f0f7d983efba302567d655c89cba6e0533600bb7->enter($__internal_67ce54a790964af4573c5f26f0f7d983efba302567d655c89cba6e0533600bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_980333561fd961ecfa9ec454bf4b7bfbb3cb90a48c260f8e489e644cc34c2900->leave($__internal_980333561fd961ecfa9ec454bf4b7bfbb3cb90a48c260f8e489e644cc34c2900_prof);

        
        $__internal_67ce54a790964af4573c5f26f0f7d983efba302567d655c89cba6e0533600bb7->leave($__internal_67ce54a790964af4573c5f26f0f7d983efba302567d655c89cba6e0533600bb7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e2c78a023d9dca1e2f2d80f82dec00620ac8829c1da1bd08d56b0acc1bd9bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2c78a023d9dca1e2f2d80f82dec00620ac8829c1da1bd08d56b0acc1bd9bbc->enter($__internal_0e2c78a023d9dca1e2f2d80f82dec00620ac8829c1da1bd08d56b0acc1bd9bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5bdc3da9419f9ab98b4b936a5379fcd91b7e35f8323d166a95a9fb5672a799da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdc3da9419f9ab98b4b936a5379fcd91b7e35f8323d166a95a9fb5672a799da->enter($__internal_5bdc3da9419f9ab98b4b936a5379fcd91b7e35f8323d166a95a9fb5672a799da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5bdc3da9419f9ab98b4b936a5379fcd91b7e35f8323d166a95a9fb5672a799da->leave($__internal_5bdc3da9419f9ab98b4b936a5379fcd91b7e35f8323d166a95a9fb5672a799da_prof);

        
        $__internal_0e2c78a023d9dca1e2f2d80f82dec00620ac8829c1da1bd08d56b0acc1bd9bbc->leave($__internal_0e2c78a023d9dca1e2f2d80f82dec00620ac8829c1da1bd08d56b0acc1bd9bbc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e745a815ff0716722137de4d039e7011e7d63aedacc595d990707942e03d8403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e745a815ff0716722137de4d039e7011e7d63aedacc595d990707942e03d8403->enter($__internal_e745a815ff0716722137de4d039e7011e7d63aedacc595d990707942e03d8403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fdd01101314ff4e880144699153e3ca021c4a9fe180c7c2ade55a0b73d866658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd01101314ff4e880144699153e3ca021c4a9fe180c7c2ade55a0b73d866658->enter($__internal_fdd01101314ff4e880144699153e3ca021c4a9fe180c7c2ade55a0b73d866658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fdd01101314ff4e880144699153e3ca021c4a9fe180c7c2ade55a0b73d866658->leave($__internal_fdd01101314ff4e880144699153e3ca021c4a9fe180c7c2ade55a0b73d866658_prof);

        
        $__internal_e745a815ff0716722137de4d039e7011e7d63aedacc595d990707942e03d8403->leave($__internal_e745a815ff0716722137de4d039e7011e7d63aedacc595d990707942e03d8403_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_477f69a70e1d205adf75f827031270497ebe97a7e06a34519f9cbff45d540202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477f69a70e1d205adf75f827031270497ebe97a7e06a34519f9cbff45d540202->enter($__internal_477f69a70e1d205adf75f827031270497ebe97a7e06a34519f9cbff45d540202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0bc5dfde0ba7936a431d5c35187d117e1f4675b0496e20ce49eb3a9d9c4a7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0bc5dfde0ba7936a431d5c35187d117e1f4675b0496e20ce49eb3a9d9c4a7e2->enter($__internal_e0bc5dfde0ba7936a431d5c35187d117e1f4675b0496e20ce49eb3a9d9c4a7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0bc5dfde0ba7936a431d5c35187d117e1f4675b0496e20ce49eb3a9d9c4a7e2->leave($__internal_e0bc5dfde0ba7936a431d5c35187d117e1f4675b0496e20ce49eb3a9d9c4a7e2_prof);

        
        $__internal_477f69a70e1d205adf75f827031270497ebe97a7e06a34519f9cbff45d540202->leave($__internal_477f69a70e1d205adf75f827031270497ebe97a7e06a34519f9cbff45d540202_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d4efc879f12c51a327f3eaebe059e5c1c9681b4db8a96d897e90fc56ac1ecf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4efc879f12c51a327f3eaebe059e5c1c9681b4db8a96d897e90fc56ac1ecf9->enter($__internal_7d4efc879f12c51a327f3eaebe059e5c1c9681b4db8a96d897e90fc56ac1ecf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f6ce217d9e01591147d7794191f313b9fea248a6e008066d02636098c0e7ed0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ce217d9e01591147d7794191f313b9fea248a6e008066d02636098c0e7ed0a->enter($__internal_f6ce217d9e01591147d7794191f313b9fea248a6e008066d02636098c0e7ed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f6ce217d9e01591147d7794191f313b9fea248a6e008066d02636098c0e7ed0a->leave($__internal_f6ce217d9e01591147d7794191f313b9fea248a6e008066d02636098c0e7ed0a_prof);

        
        $__internal_7d4efc879f12c51a327f3eaebe059e5c1c9681b4db8a96d897e90fc56ac1ecf9->leave($__internal_7d4efc879f12c51a327f3eaebe059e5c1c9681b4db8a96d897e90fc56ac1ecf9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\OpenServer\\domains\\jobeet\\app\\Resources\\views\\base.html.twig");
    }
}
