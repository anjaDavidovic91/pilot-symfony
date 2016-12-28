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
        $__internal_bc1d4046c90aa9e9dae79db492ad6d0a3aa315b7050760bc3b28e1d26c8a51f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1d4046c90aa9e9dae79db492ad6d0a3aa315b7050760bc3b28e1d26c8a51f9->enter($__internal_bc1d4046c90aa9e9dae79db492ad6d0a3aa315b7050760bc3b28e1d26c8a51f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:book:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc1d4046c90aa9e9dae79db492ad6d0a3aa315b7050760bc3b28e1d26c8a51f9->leave($__internal_bc1d4046c90aa9e9dae79db492ad6d0a3aa315b7050760bc3b28e1d26c8a51f9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19b15040059c0beee316edbfa645bb076cd3cdc11abadc9b58309535210abc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b15040059c0beee316edbfa645bb076cd3cdc11abadc9b58309535210abc56->enter($__internal_19b15040059c0beee316edbfa645bb076cd3cdc11abadc9b58309535210abc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"col-xs-4\">
    <h3>Create new book</h3>
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "
    </div>


    <div class=\"col-xs-4 col-xs-offset-3\">
        <h3>Choose category for book</h3>
            <form>
                <div class=\"form-group\">
                    <label for=\"categories\">Categories</label>
                    <input type=\"text\" class=\"form-control\" id=\"categories\">
                </div>

                <div class=\"col-xs-2\">
                    <div class=\"form-group\">
                        <button class=\"btn btn-primary\">Save</button>
                    </div>
                </div>

                <div class=\"col-xs-2\">
                    <div class=\"form-group\">
                        <button class=\"btn btn-default\">Add new</button>
                    </div>
                </div>
            </form>
    </div>

    <div class=\"col-xs-12\">
    <ul>
        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book");
        echo "\">Book manager</a></li>
    </ul>
    <div>


";
        
        $__internal_19b15040059c0beee316edbfa645bb076cd3cdc11abadc9b58309535210abc56->leave($__internal_19b15040059c0beee316edbfa645bb076cd3cdc11abadc9b58309535210abc56_prof);

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
        return array (  75 => 36,  44 => 8,  40 => 6,  34 => 3,  11 => 1,);
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


    <div class=\"col-xs-4\">
    <h3>Create new book</h3>
    {{ form(form, {attr: {novalidate: 'novalidate'}}) }}
    </div>


    <div class=\"col-xs-4 col-xs-offset-3\">
        <h3>Choose category for book</h3>
            <form>
                <div class=\"form-group\">
                    <label for=\"categories\">Categories</label>
                    <input type=\"text\" class=\"form-control\" id=\"categories\">
                </div>

                <div class=\"col-xs-2\">
                    <div class=\"form-group\">
                        <button class=\"btn btn-primary\">Save</button>
                    </div>
                </div>

                <div class=\"col-xs-2\">
                    <div class=\"form-group\">
                        <button class=\"btn btn-default\">Add new</button>
                    </div>
                </div>
            </form>
    </div>

    <div class=\"col-xs-12\">
    <ul>
        <li><a href=\"{{ path('book') }}\">Book manager</a></li>
    </ul>
    <div>


{% endblock -%}", "BookkeeperManagerBundle:book:new.html.twig", "/var/www/html/pilot-symfony/src/Bookkeeper/ManagerBundle/Resources/views/book/new.html.twig");
    }
}
