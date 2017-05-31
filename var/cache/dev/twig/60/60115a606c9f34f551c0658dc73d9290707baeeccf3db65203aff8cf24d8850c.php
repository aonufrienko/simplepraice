<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d8e6638505157a324f24d52cc7106b82f2c80b68e7e7d4765fd3773aef3fea18 extends Twig_Template
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
        $__internal_d211a4f67bdb1791f433c18a9ec1df695f609071f4d640d64a328a3aea252d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d211a4f67bdb1791f433c18a9ec1df695f609071f4d640d64a328a3aea252d9d->enter($__internal_d211a4f67bdb1791f433c18a9ec1df695f609071f4d640d64a328a3aea252d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_e457c8f5ed4f1477371e7289e620d99a4bcaf5e37d004f31097ccdce6037c74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e457c8f5ed4f1477371e7289e620d99a4bcaf5e37d004f31097ccdce6037c74e->enter($__internal_e457c8f5ed4f1477371e7289e620d99a4bcaf5e37d004f31097ccdce6037c74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d211a4f67bdb1791f433c18a9ec1df695f609071f4d640d64a328a3aea252d9d->leave($__internal_d211a4f67bdb1791f433c18a9ec1df695f609071f4d640d64a328a3aea252d9d_prof);

        
        $__internal_e457c8f5ed4f1477371e7289e620d99a4bcaf5e37d004f31097ccdce6037c74e->leave($__internal_e457c8f5ed4f1477371e7289e620d99a4bcaf5e37d004f31097ccdce6037c74e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
