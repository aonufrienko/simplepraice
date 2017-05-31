<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_0e3eeb13897dd95a2ccd0f7e08e91385cff1ca9bd98eec3a7006ff5b1cbe5d6c extends Twig_Template
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
        $__internal_b9972371d10ee4ed43d422014ec94025bdef9a64294e2971716965331c9229d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9972371d10ee4ed43d422014ec94025bdef9a64294e2971716965331c9229d5->enter($__internal_b9972371d10ee4ed43d422014ec94025bdef9a64294e2971716965331c9229d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_05ae22afee684a3231e55d9e946b2ce1566f6108dd0ed78bb8103fe5d44b18be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ae22afee684a3231e55d9e946b2ce1566f6108dd0ed78bb8103fe5d44b18be->enter($__internal_05ae22afee684a3231e55d9e946b2ce1566f6108dd0ed78bb8103fe5d44b18be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b9972371d10ee4ed43d422014ec94025bdef9a64294e2971716965331c9229d5->leave($__internal_b9972371d10ee4ed43d422014ec94025bdef9a64294e2971716965331c9229d5_prof);

        
        $__internal_05ae22afee684a3231e55d9e946b2ce1566f6108dd0ed78bb8103fe5d44b18be->leave($__internal_05ae22afee684a3231e55d9e946b2ce1566f6108dd0ed78bb8103fe5d44b18be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
