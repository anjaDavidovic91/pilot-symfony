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
        $__internal_f44fb746a0bb435dfb1d0c268152ab1da1a326f0ae15cc3962012fdbe54bf19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44fb746a0bb435dfb1d0c268152ab1da1a326f0ae15cc3962012fdbe54bf19b->enter($__internal_f44fb746a0bb435dfb1d0c268152ab1da1a326f0ae15cc3962012fdbe54bf19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:book:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f44fb746a0bb435dfb1d0c268152ab1da1a326f0ae15cc3962012fdbe54bf19b->leave($__internal_f44fb746a0bb435dfb1d0c268152ab1da1a326f0ae15cc3962012fdbe54bf19b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87e632deec5b89c1942e594ec4352bcf42115a35bab858c89025f1c202fa7885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e632deec5b89c1942e594ec4352bcf42115a35bab858c89025f1c202fa7885->enter($__internal_87e632deec5b89c1942e594ec4352bcf42115a35bab858c89025f1c202fa7885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Create new book</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "

    <ul>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book");
        echo "\">Book manager</a></li>
    </ul>


    ";
        // line 15
        echo "        ";
        // line 16
        echo "        ";
        // line 17
        echo "        ";
        // line 18
        echo "            ";
        // line 19
        echo "                ";
        // line 20
        echo "                ";
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        // line 23
        echo "                ";
        // line 24
        echo "                ";
        // line 25
        echo "            ";
        // line 26
        echo "        ";
        // line 27
        echo "    ";
        // line 28
        echo "
";
        
        $__internal_87e632deec5b89c1942e594ec4352bcf42115a35bab858c89025f1c202fa7885->leave($__internal_87e632deec5b89c1942e594ec4352bcf42115a35bab858c89025f1c202fa7885_prof);

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
        return array (  83 => 28,  81 => 27,  79 => 26,  77 => 25,  75 => 24,  73 => 23,  71 => 22,  69 => 21,  67 => 20,  65 => 19,  63 => 18,  61 => 17,  59 => 16,  57 => 15,  50 => 10,  44 => 7,  40 => 5,  34 => 3,  11 => 1,);
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

    {{ form(form, {attr: {novalidate: 'novalidate'}}) }}

    <ul>
        <li><a href=\"{{ path('book') }}\">Book manager</a></li>
    </ul>


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
