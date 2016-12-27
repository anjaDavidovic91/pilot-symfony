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
        $__internal_2595f021364cf81a8c466041ea69da122c05ec338ca8c74bc7be14fce7a14db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2595f021364cf81a8c466041ea69da122c05ec338ca8c74bc7be14fce7a14db6->enter($__internal_2595f021364cf81a8c466041ea69da122c05ec338ca8c74bc7be14fce7a14db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2595f021364cf81a8c466041ea69da122c05ec338ca8c74bc7be14fce7a14db6->leave($__internal_2595f021364cf81a8c466041ea69da122c05ec338ca8c74bc7be14fce7a14db6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7643b91e1a713f6ef7bfeaa21d134cc5de10ff2504003970bda6a335d412b6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7643b91e1a713f6ef7bfeaa21d134cc5de10ff2504003970bda6a335d412b6df->enter($__internal_7643b91e1a713f6ef7bfeaa21d134cc5de10ff2504003970bda6a335d412b6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7643b91e1a713f6ef7bfeaa21d134cc5de10ff2504003970bda6a335d412b6df->leave($__internal_7643b91e1a713f6ef7bfeaa21d134cc5de10ff2504003970bda6a335d412b6df_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04e1a91b8c083cca3fa9ae376a918747c0e8e7bcbcf6abc50a46b9d3383ba65e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e1a91b8c083cca3fa9ae376a918747c0e8e7bcbcf6abc50a46b9d3383ba65e->enter($__internal_04e1a91b8c083cca3fa9ae376a918747c0e8e7bcbcf6abc50a46b9d3383ba65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04e1a91b8c083cca3fa9ae376a918747c0e8e7bcbcf6abc50a46b9d3383ba65e->leave($__internal_04e1a91b8c083cca3fa9ae376a918747c0e8e7bcbcf6abc50a46b9d3383ba65e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f09a25346fc647a30b02de584aa85f5df64d86ff522ec844db74a4b437d06ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f09a25346fc647a30b02de584aa85f5df64d86ff522ec844db74a4b437d06ef->enter($__internal_4f09a25346fc647a30b02de584aa85f5df64d86ff522ec844db74a4b437d06ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f09a25346fc647a30b02de584aa85f5df64d86ff522ec844db74a4b437d06ef->leave($__internal_4f09a25346fc647a30b02de584aa85f5df64d86ff522ec844db74a4b437d06ef_prof);

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
