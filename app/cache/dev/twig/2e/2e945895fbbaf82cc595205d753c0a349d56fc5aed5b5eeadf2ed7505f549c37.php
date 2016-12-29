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
        $__internal_c35a5cbf1a45a390808272da90d0d4871428bb2933ca7538acebfd102ef4bab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35a5cbf1a45a390808272da90d0d4871428bb2933ca7538acebfd102ef4bab6->enter($__internal_c35a5cbf1a45a390808272da90d0d4871428bb2933ca7538acebfd102ef4bab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35a5cbf1a45a390808272da90d0d4871428bb2933ca7538acebfd102ef4bab6->leave($__internal_c35a5cbf1a45a390808272da90d0d4871428bb2933ca7538acebfd102ef4bab6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c08e0360f1726b77a5d213c9b56b2ca02cad4c8bf136e9aa34700e0cf89a3d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08e0360f1726b77a5d213c9b56b2ca02cad4c8bf136e9aa34700e0cf89a3d21->enter($__internal_c08e0360f1726b77a5d213c9b56b2ca02cad4c8bf136e9aa34700e0cf89a3d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c08e0360f1726b77a5d213c9b56b2ca02cad4c8bf136e9aa34700e0cf89a3d21->leave($__internal_c08e0360f1726b77a5d213c9b56b2ca02cad4c8bf136e9aa34700e0cf89a3d21_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0cc848f2d0849d9ec0f8b3cb952455668c1451c19ea76b00c587cd7d39e71b1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc848f2d0849d9ec0f8b3cb952455668c1451c19ea76b00c587cd7d39e71b1d->enter($__internal_0cc848f2d0849d9ec0f8b3cb952455668c1451c19ea76b00c587cd7d39e71b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cc848f2d0849d9ec0f8b3cb952455668c1451c19ea76b00c587cd7d39e71b1d->leave($__internal_0cc848f2d0849d9ec0f8b3cb952455668c1451c19ea76b00c587cd7d39e71b1d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_915ff7937685809f67a6aad3ce0d24f1f6e3533408333880e1a1997d03c708fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915ff7937685809f67a6aad3ce0d24f1f6e3533408333880e1a1997d03c708fa->enter($__internal_915ff7937685809f67a6aad3ce0d24f1f6e3533408333880e1a1997d03c708fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_915ff7937685809f67a6aad3ce0d24f1f6e3533408333880e1a1997d03c708fa->leave($__internal_915ff7937685809f67a6aad3ce0d24f1f6e3533408333880e1a1997d03c708fa_prof);

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
