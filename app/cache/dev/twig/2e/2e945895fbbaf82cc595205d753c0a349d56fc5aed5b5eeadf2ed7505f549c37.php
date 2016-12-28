<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8bc184a8fd45f62e70efa3671c17866539a599716d347e34de065521040a445e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ce4114f47fa0f5acd757ef7d39a79217bf1247fbadec872ee21bbb34436fd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce4114f47fa0f5acd757ef7d39a79217bf1247fbadec872ee21bbb34436fd30->enter($__internal_5ce4114f47fa0f5acd757ef7d39a79217bf1247fbadec872ee21bbb34436fd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ce4114f47fa0f5acd757ef7d39a79217bf1247fbadec872ee21bbb34436fd30->leave($__internal_5ce4114f47fa0f5acd757ef7d39a79217bf1247fbadec872ee21bbb34436fd30_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db18e772a63d4ae9122db8c534d03f0d2eb161a02b5e9aa29fb00aa99dc99496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db18e772a63d4ae9122db8c534d03f0d2eb161a02b5e9aa29fb00aa99dc99496->enter($__internal_db18e772a63d4ae9122db8c534d03f0d2eb161a02b5e9aa29fb00aa99dc99496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db18e772a63d4ae9122db8c534d03f0d2eb161a02b5e9aa29fb00aa99dc99496->leave($__internal_db18e772a63d4ae9122db8c534d03f0d2eb161a02b5e9aa29fb00aa99dc99496_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5553bcff35d45384b6cc95cbe23ff69fd953e842bf2f30659314fa98ce3930f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5553bcff35d45384b6cc95cbe23ff69fd953e842bf2f30659314fa98ce3930f9->enter($__internal_5553bcff35d45384b6cc95cbe23ff69fd953e842bf2f30659314fa98ce3930f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5553bcff35d45384b6cc95cbe23ff69fd953e842bf2f30659314fa98ce3930f9->leave($__internal_5553bcff35d45384b6cc95cbe23ff69fd953e842bf2f30659314fa98ce3930f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a88295f2a37380218bd15ed13340167e9d3ed79b8b2714a98e75762a1c181074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88295f2a37380218bd15ed13340167e9d3ed79b8b2714a98e75762a1c181074->enter($__internal_a88295f2a37380218bd15ed13340167e9d3ed79b8b2714a98e75762a1c181074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a88295f2a37380218bd15ed13340167e9d3ed79b8b2714a98e75762a1c181074->leave($__internal_a88295f2a37380218bd15ed13340167e9d3ed79b8b2714a98e75762a1c181074_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/pilot-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
