<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_60f4ec78c4b7cd383730742837bb6b3740b4e14ca380bac4513551a7028251bb extends Twig_Template
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
        $__internal_1228a1b8b6f76c5c9f23e1945fdf4e7511271de9840ad1fec7886198fa6c240d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1228a1b8b6f76c5c9f23e1945fdf4e7511271de9840ad1fec7886198fa6c240d->enter($__internal_1228a1b8b6f76c5c9f23e1945fdf4e7511271de9840ad1fec7886198fa6c240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_021b2ac7abcda587523960cec5475e3eb54c1c33a99f0fac7e0307331467ccef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021b2ac7abcda587523960cec5475e3eb54c1c33a99f0fac7e0307331467ccef->enter($__internal_021b2ac7abcda587523960cec5475e3eb54c1c33a99f0fac7e0307331467ccef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_1228a1b8b6f76c5c9f23e1945fdf4e7511271de9840ad1fec7886198fa6c240d->leave($__internal_1228a1b8b6f76c5c9f23e1945fdf4e7511271de9840ad1fec7886198fa6c240d_prof);

        
        $__internal_021b2ac7abcda587523960cec5475e3eb54c1c33a99f0fac7e0307331467ccef->leave($__internal_021b2ac7abcda587523960cec5475e3eb54c1c33a99f0fac7e0307331467ccef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "E:\\OpenServer\\domains\\jobeet\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
