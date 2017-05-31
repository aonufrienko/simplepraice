<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_2c87a578c185107e57d3b9d81e50c99f30e8f51a361ccc39d53fc0a1fc05274b extends Twig_Template
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
        $__internal_9abba0c86278d93376ad234d7daaced6ccf5689f005f0974036a92efbf736e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abba0c86278d93376ad234d7daaced6ccf5689f005f0974036a92efbf736e00->enter($__internal_9abba0c86278d93376ad234d7daaced6ccf5689f005f0974036a92efbf736e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_a203431a4f842ad386e005d6e9d9ffcba6e29f674b9101a430c7b674aa20bbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a203431a4f842ad386e005d6e9d9ffcba6e29f674b9101a430c7b674aa20bbf8->enter($__internal_a203431a4f842ad386e005d6e9d9ffcba6e29f674b9101a430c7b674aa20bbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9abba0c86278d93376ad234d7daaced6ccf5689f005f0974036a92efbf736e00->leave($__internal_9abba0c86278d93376ad234d7daaced6ccf5689f005f0974036a92efbf736e00_prof);

        
        $__internal_a203431a4f842ad386e005d6e9d9ffcba6e29f674b9101a430c7b674aa20bbf8->leave($__internal_a203431a4f842ad386e005d6e9d9ffcba6e29f674b9101a430c7b674aa20bbf8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
