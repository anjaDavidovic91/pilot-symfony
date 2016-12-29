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
        $__internal_87452d4c1c9b826aa27902cb362b47bdd2593abfdace28384279b23fa5ff95c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87452d4c1c9b826aa27902cb362b47bdd2593abfdace28384279b23fa5ff95c8->enter($__internal_87452d4c1c9b826aa27902cb362b47bdd2593abfdace28384279b23fa5ff95c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87452d4c1c9b826aa27902cb362b47bdd2593abfdace28384279b23fa5ff95c8->leave($__internal_87452d4c1c9b826aa27902cb362b47bdd2593abfdace28384279b23fa5ff95c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6c64765f45c96163f1b2bb263e30d09b8c9d0614addcc7b0a6cc90dae289483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c64765f45c96163f1b2bb263e30d09b8c9d0614addcc7b0a6cc90dae289483->enter($__internal_a6c64765f45c96163f1b2bb263e30d09b8c9d0614addcc7b0a6cc90dae289483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a6c64765f45c96163f1b2bb263e30d09b8c9d0614addcc7b0a6cc90dae289483->leave($__internal_a6c64765f45c96163f1b2bb263e30d09b8c9d0614addcc7b0a6cc90dae289483_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c14dde7a8401340450e1d3e09652ff96f39cffae13c840fa7a54c45d0558716c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14dde7a8401340450e1d3e09652ff96f39cffae13c840fa7a54c45d0558716c->enter($__internal_c14dde7a8401340450e1d3e09652ff96f39cffae13c840fa7a54c45d0558716c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c14dde7a8401340450e1d3e09652ff96f39cffae13c840fa7a54c45d0558716c->leave($__internal_c14dde7a8401340450e1d3e09652ff96f39cffae13c840fa7a54c45d0558716c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b51bbf6c5af59f9145300a5013c6bf82c5d51cfb1d274d570be39941f9f29b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b51bbf6c5af59f9145300a5013c6bf82c5d51cfb1d274d570be39941f9f29b4->enter($__internal_9b51bbf6c5af59f9145300a5013c6bf82c5d51cfb1d274d570be39941f9f29b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9b51bbf6c5af59f9145300a5013c6bf82c5d51cfb1d274d570be39941f9f29b4->leave($__internal_9b51bbf6c5af59f9145300a5013c6bf82c5d51cfb1d274d570be39941f9f29b4_prof);

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
