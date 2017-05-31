<?php

/* ::base.html.twig */
class __TwigTemplate_ed670b1aee3e66b8ce31e5932f55a332c35f0ac82419849f8f18b38bb46e527f extends Twig_Template
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
        $__internal_c7e9c1253d7a5809044b4dee652d4565bcabddddc568005545ae202b315206a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7e9c1253d7a5809044b4dee652d4565bcabddddc568005545ae202b315206a1->enter($__internal_c7e9c1253d7a5809044b4dee652d4565bcabddddc568005545ae202b315206a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_29cfd343806e7e96ceac44a93bd35f0de27aeb451c7826465ad9673b382352c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cfd343806e7e96ceac44a93bd35f0de27aeb451c7826465ad9673b382352c1->enter($__internal_29cfd343806e7e96ceac44a93bd35f0de27aeb451c7826465ad9673b382352c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c7e9c1253d7a5809044b4dee652d4565bcabddddc568005545ae202b315206a1->leave($__internal_c7e9c1253d7a5809044b4dee652d4565bcabddddc568005545ae202b315206a1_prof);

        
        $__internal_29cfd343806e7e96ceac44a93bd35f0de27aeb451c7826465ad9673b382352c1->leave($__internal_29cfd343806e7e96ceac44a93bd35f0de27aeb451c7826465ad9673b382352c1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51ed636543a1704715fb48e29adbdf789342019630cf310f884acb6d3bd97a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ed636543a1704715fb48e29adbdf789342019630cf310f884acb6d3bd97a91->enter($__internal_51ed636543a1704715fb48e29adbdf789342019630cf310f884acb6d3bd97a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43b09daa5868f389e819b404ba86e98ba8c53d68958f00f658e04f8ff46a3a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b09daa5868f389e819b404ba86e98ba8c53d68958f00f658e04f8ff46a3a7f->enter($__internal_43b09daa5868f389e819b404ba86e98ba8c53d68958f00f658e04f8ff46a3a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_43b09daa5868f389e819b404ba86e98ba8c53d68958f00f658e04f8ff46a3a7f->leave($__internal_43b09daa5868f389e819b404ba86e98ba8c53d68958f00f658e04f8ff46a3a7f_prof);

        
        $__internal_51ed636543a1704715fb48e29adbdf789342019630cf310f884acb6d3bd97a91->leave($__internal_51ed636543a1704715fb48e29adbdf789342019630cf310f884acb6d3bd97a91_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36ad5fedb436e4e6efda3ec4fc774f1e5139dbfd583273a12608d4539178cccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ad5fedb436e4e6efda3ec4fc774f1e5139dbfd583273a12608d4539178cccf->enter($__internal_36ad5fedb436e4e6efda3ec4fc774f1e5139dbfd583273a12608d4539178cccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_71c9d1c23a94a16626a0cf0d9d85b76cdcb7011a51cb34a731ed25cfb9fd21d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c9d1c23a94a16626a0cf0d9d85b76cdcb7011a51cb34a731ed25cfb9fd21d6->enter($__internal_71c9d1c23a94a16626a0cf0d9d85b76cdcb7011a51cb34a731ed25cfb9fd21d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_71c9d1c23a94a16626a0cf0d9d85b76cdcb7011a51cb34a731ed25cfb9fd21d6->leave($__internal_71c9d1c23a94a16626a0cf0d9d85b76cdcb7011a51cb34a731ed25cfb9fd21d6_prof);

        
        $__internal_36ad5fedb436e4e6efda3ec4fc774f1e5139dbfd583273a12608d4539178cccf->leave($__internal_36ad5fedb436e4e6efda3ec4fc774f1e5139dbfd583273a12608d4539178cccf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ccf01c2ff0c451ffd033a4ba2a06c3b39689005c4788300c9b9d866e0571715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ccf01c2ff0c451ffd033a4ba2a06c3b39689005c4788300c9b9d866e0571715->enter($__internal_6ccf01c2ff0c451ffd033a4ba2a06c3b39689005c4788300c9b9d866e0571715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_932e4f3e4368e86bc3a780c9f0bb81ec84746fa01c7ece15392706dae1e5deec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_932e4f3e4368e86bc3a780c9f0bb81ec84746fa01c7ece15392706dae1e5deec->enter($__internal_932e4f3e4368e86bc3a780c9f0bb81ec84746fa01c7ece15392706dae1e5deec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_932e4f3e4368e86bc3a780c9f0bb81ec84746fa01c7ece15392706dae1e5deec->leave($__internal_932e4f3e4368e86bc3a780c9f0bb81ec84746fa01c7ece15392706dae1e5deec_prof);

        
        $__internal_6ccf01c2ff0c451ffd033a4ba2a06c3b39689005c4788300c9b9d866e0571715->leave($__internal_6ccf01c2ff0c451ffd033a4ba2a06c3b39689005c4788300c9b9d866e0571715_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2570b443c8418e14b866960b1d9be88587caf98365cc0c434235e068fb4c2e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2570b443c8418e14b866960b1d9be88587caf98365cc0c434235e068fb4c2e23->enter($__internal_2570b443c8418e14b866960b1d9be88587caf98365cc0c434235e068fb4c2e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dd5224db2ca7131a4ad48a15a91f39d2166ef9b6be56b930fea1933610d08779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5224db2ca7131a4ad48a15a91f39d2166ef9b6be56b930fea1933610d08779->enter($__internal_dd5224db2ca7131a4ad48a15a91f39d2166ef9b6be56b930fea1933610d08779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dd5224db2ca7131a4ad48a15a91f39d2166ef9b6be56b930fea1933610d08779->leave($__internal_dd5224db2ca7131a4ad48a15a91f39d2166ef9b6be56b930fea1933610d08779_prof);

        
        $__internal_2570b443c8418e14b866960b1d9be88587caf98365cc0c434235e068fb4c2e23->leave($__internal_2570b443c8418e14b866960b1d9be88587caf98365cc0c434235e068fb4c2e23_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "E:\\OpenServer\\domains\\jobeet\\app/Resources\\views/base.html.twig");
    }
}
