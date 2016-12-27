<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5b706ce5b3c3e5afcca1d9a7b9455f17d62bf231bcda8ef43ef6a0fe112e75ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18f38f23c509348d9f5581219964a57d1e8dc799fd17a24c85b56af47f8e08d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f38f23c509348d9f5581219964a57d1e8dc799fd17a24c85b56af47f8e08d7->enter($__internal_18f38f23c509348d9f5581219964a57d1e8dc799fd17a24c85b56af47f8e08d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18f38f23c509348d9f5581219964a57d1e8dc799fd17a24c85b56af47f8e08d7->leave($__internal_18f38f23c509348d9f5581219964a57d1e8dc799fd17a24c85b56af47f8e08d7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac61d565bba8743d87f8137e9a173300ce5b1f90ec162f7ad90f6916e44cdbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac61d565bba8743d87f8137e9a173300ce5b1f90ec162f7ad90f6916e44cdbb1->enter($__internal_ac61d565bba8743d87f8137e9a173300ce5b1f90ec162f7ad90f6916e44cdbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ac61d565bba8743d87f8137e9a173300ce5b1f90ec162f7ad90f6916e44cdbb1->leave($__internal_ac61d565bba8743d87f8137e9a173300ce5b1f90ec162f7ad90f6916e44cdbb1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20ce626d04d2ca3a98157bf55d7a8ee2e1974da68002b4f9ba6e3cabe0866651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ce626d04d2ca3a98157bf55d7a8ee2e1974da68002b4f9ba6e3cabe0866651->enter($__internal_20ce626d04d2ca3a98157bf55d7a8ee2e1974da68002b4f9ba6e3cabe0866651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_20ce626d04d2ca3a98157bf55d7a8ee2e1974da68002b4f9ba6e3cabe0866651->leave($__internal_20ce626d04d2ca3a98157bf55d7a8ee2e1974da68002b4f9ba6e3cabe0866651_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f6a1c464fe0049f5d5b2ba0e11183d7503fefbef66a810ffccf5d0f946700e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6a1c464fe0049f5d5b2ba0e11183d7503fefbef66a810ffccf5d0f946700e0->enter($__internal_4f6a1c464fe0049f5d5b2ba0e11183d7503fefbef66a810ffccf5d0f946700e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4f6a1c464fe0049f5d5b2ba0e11183d7503fefbef66a810ffccf5d0f946700e0->leave($__internal_4f6a1c464fe0049f5d5b2ba0e11183d7503fefbef66a810ffccf5d0f946700e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/pilot-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
