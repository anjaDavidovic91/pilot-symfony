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
        $__internal_49a8f64fd974d6974712c27caef6a538b3114f347c7ba63cb56303995b203d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a8f64fd974d6974712c27caef6a538b3114f347c7ba63cb56303995b203d50->enter($__internal_49a8f64fd974d6974712c27caef6a538b3114f347c7ba63cb56303995b203d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49a8f64fd974d6974712c27caef6a538b3114f347c7ba63cb56303995b203d50->leave($__internal_49a8f64fd974d6974712c27caef6a538b3114f347c7ba63cb56303995b203d50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8f1c529e720378590a37f17d0defff8dc276dd61a0e6cc88e45e7ea35668a285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1c529e720378590a37f17d0defff8dc276dd61a0e6cc88e45e7ea35668a285->enter($__internal_8f1c529e720378590a37f17d0defff8dc276dd61a0e6cc88e45e7ea35668a285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f1c529e720378590a37f17d0defff8dc276dd61a0e6cc88e45e7ea35668a285->leave($__internal_8f1c529e720378590a37f17d0defff8dc276dd61a0e6cc88e45e7ea35668a285_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_645024183df7f15b5d5c0be8ebbbcf9eb912981d8db45b6bfdad8c1952b9e15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_645024183df7f15b5d5c0be8ebbbcf9eb912981d8db45b6bfdad8c1952b9e15f->enter($__internal_645024183df7f15b5d5c0be8ebbbcf9eb912981d8db45b6bfdad8c1952b9e15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_645024183df7f15b5d5c0be8ebbbcf9eb912981d8db45b6bfdad8c1952b9e15f->leave($__internal_645024183df7f15b5d5c0be8ebbbcf9eb912981d8db45b6bfdad8c1952b9e15f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ee2036e17b6f7942f73eae741d52a761deeffa4491982abd0f215759a1972f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ee2036e17b6f7942f73eae741d52a761deeffa4491982abd0f215759a1972f->enter($__internal_c4ee2036e17b6f7942f73eae741d52a761deeffa4491982abd0f215759a1972f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c4ee2036e17b6f7942f73eae741d52a761deeffa4491982abd0f215759a1972f->leave($__internal_c4ee2036e17b6f7942f73eae741d52a761deeffa4491982abd0f215759a1972f_prof);

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
