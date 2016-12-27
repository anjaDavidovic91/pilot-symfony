<?php

/* BookkeeperManagerBundle:book:new.html.twig */
class __TwigTemplate_5457d4eb93c0defce33d1393ca3a6dff0972af373a203696e84977ed5f5088a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BookkeeperManagerBundle:book:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3097ef2af10e05d4840ab503294196a8caeff7818d5025f9eb85157ffdaa82dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3097ef2af10e05d4840ab503294196a8caeff7818d5025f9eb85157ffdaa82dd->enter($__internal_3097ef2af10e05d4840ab503294196a8caeff7818d5025f9eb85157ffdaa82dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:book:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3097ef2af10e05d4840ab503294196a8caeff7818d5025f9eb85157ffdaa82dd->leave($__internal_3097ef2af10e05d4840ab503294196a8caeff7818d5025f9eb85157ffdaa82dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_542014ce4ebbb075ee9ebf343c2fae569a9dfb3151080cb689413a50e20ee1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542014ce4ebbb075ee9ebf343c2fae569a9dfb3151080cb689413a50e20ee1af->enter($__internal_542014ce4ebbb075ee9ebf343c2fae569a9dfb3151080cb689413a50e20ee1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Create new book</h1>
    <div class=\"col-xs-4\">
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "
    </div>
    <div class=\"col-xs-12\">
    <ul>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book");
        echo "\">Book manager</a></li>
    </ul>
    <div>


    ";
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        // line 20
        echo "            ";
        // line 21
        echo "                ";
        // line 22
        echo "                ";
        // line 23
        echo "            ";
        // line 24
        echo "            ";
        // line 25
        echo "                ";
        // line 26
        echo "                ";
        // line 27
        echo "            ";
        // line 28
        echo "        ";
        // line 29
        echo "    ";
        // line 30
        echo "
";
        
        $__internal_542014ce4ebbb075ee9ebf343c2fae569a9dfb3151080cb689413a50e20ee1af->leave($__internal_542014ce4ebbb075ee9ebf343c2fae569a9dfb3151080cb689413a50e20ee1af_prof);

    }

    public function getTemplateName()
    {
        return "BookkeeperManagerBundle:book:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  83 => 29,  81 => 28,  79 => 27,  77 => 26,  75 => 25,  73 => 24,  71 => 23,  69 => 22,  67 => 21,  65 => 20,  63 => 19,  61 => 18,  59 => 17,  51 => 11,  44 => 7,  40 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}

    <h1>Create new book</h1>
    <div class=\"col-xs-4\">
    {{ form(form, {attr: {novalidate: 'novalidate'}}) }}
    </div>
    <div class=\"col-xs-12\">
    <ul>
        <li><a href=\"{{ path('book') }}\">Book manager</a></li>
    </ul>
    <div>


    {#<div class=\"container\">#}
        {#<h2>Form control: input</h2>#}
        {#<p>The form below contains two input elements; one of type text and one of type password:</p>#}
        {#<form>#}
            {#<div class=\"form-group\">#}
                {#<label for=\"usr\">Name:</label>#}
                {#<input type=\"text\" class=\"form-control\" id=\"usr\">#}
            {#</div>#}
            {#<div class=\"form-group\">#}
                {#<label for=\"pwd\">Password:</label>#}
                {#<input type=\"password\" class=\"form-control\" id=\"pwd\">#}
            {#</div>#}
        {#</form>#}
    {#</div>#}

{% endblock -%}", "BookkeeperManagerBundle:book:new.html.twig", "/var/www/html/pilot-symfony/src/Bookkeeper/ManagerBundle/Resources/views/book/new.html.twig");
    }
}
