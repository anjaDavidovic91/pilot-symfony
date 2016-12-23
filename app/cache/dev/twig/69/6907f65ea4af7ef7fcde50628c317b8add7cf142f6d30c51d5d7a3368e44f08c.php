<?php

/* BookkeeperManagerBundle:book:edit.html.twig */
class __TwigTemplate_0b84346bfaacb75cfba66fa7f50ab8e28098273cdc27169271837427c8860ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BookkeeperManagerBundle:book:edit.html.twig", 1);
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
        $__internal_7aae60114c565717d7ee233f91e5393c4f2a7b8826c153cd4a056a5e27ffd8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aae60114c565717d7ee233f91e5393c4f2a7b8826c153cd4a056a5e27ffd8b8->enter($__internal_7aae60114c565717d7ee233f91e5393c4f2a7b8826c153cd4a056a5e27ffd8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:book:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aae60114c565717d7ee233f91e5393c4f2a7b8826c153cd4a056a5e27ffd8b8->leave($__internal_7aae60114c565717d7ee233f91e5393c4f2a7b8826c153cd4a056a5e27ffd8b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a10e347e47b30522c10adebbe1dd22d32bfd691aa4f8909e5d46f4041ab5d219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10e347e47b30522c10adebbe1dd22d32bfd691aa4f8909e5d46f4041ab5d219->enter($__internal_a10e347e47b30522c10adebbe1dd22d32bfd691aa4f8909e5d46f4041ab5d219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <ul>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book");
        echo "\">Book manager</a></li>
    </ul>

";
        
        $__internal_a10e347e47b30522c10adebbe1dd22d32bfd691aa4f8909e5d46f4041ab5d219->leave($__internal_a10e347e47b30522c10adebbe1dd22d32bfd691aa4f8909e5d46f4041ab5d219_prof);

    }

    public function getTemplateName()
    {
        return "BookkeeperManagerBundle:book:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  44 => 7,  40 => 5,  34 => 3,  11 => 1,);
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

    <h1>Edit</h1>

    {{ form(form) }}

    <ul>
        <li><a href=\"{{ path('book') }}\">Book manager</a></li>
    </ul>

{% endblock -%}", "BookkeeperManagerBundle:book:edit.html.twig", "/var/www/html/pilot-symfony/src/Bookkeeper/ManagerBundle/Resources/views/book/edit.html.twig");
    }
}
