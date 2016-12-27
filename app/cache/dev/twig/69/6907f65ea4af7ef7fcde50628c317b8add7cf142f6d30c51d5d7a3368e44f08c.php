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
        $__internal_80b7d60dcf6ebce8f460da268156501dc0faa3442c61eee87f33fc1c8e5db5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b7d60dcf6ebce8f460da268156501dc0faa3442c61eee87f33fc1c8e5db5b6->enter($__internal_80b7d60dcf6ebce8f460da268156501dc0faa3442c61eee87f33fc1c8e5db5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:book:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b7d60dcf6ebce8f460da268156501dc0faa3442c61eee87f33fc1c8e5db5b6->leave($__internal_80b7d60dcf6ebce8f460da268156501dc0faa3442c61eee87f33fc1c8e5db5b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_165b10a50a61cb8d915ea56b5a7f09520a0a9eb7caf6e3339b9040f34cb52003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165b10a50a61cb8d915ea56b5a7f09520a0a9eb7caf6e3339b9040f34cb52003->enter($__internal_165b10a50a61cb8d915ea56b5a7f09520a0a9eb7caf6e3339b9040f34cb52003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Edit</h1>

    <div class=\"col-xs-4\">
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>

    <div class=\"col-xs-12\">
    <ul>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book");
        echo "\">Book manager</a></li>
    </ul>
    </div>

";
        
        $__internal_165b10a50a61cb8d915ea56b5a7f09520a0a9eb7caf6e3339b9040f34cb52003->leave($__internal_165b10a50a61cb8d915ea56b5a7f09520a0a9eb7caf6e3339b9040f34cb52003_prof);

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
        return array (  53 => 13,  45 => 8,  40 => 5,  34 => 3,  11 => 1,);
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

    <div class=\"col-xs-4\">
    {{ form(form) }}
    </div>

    <div class=\"col-xs-12\">
    <ul>
        <li><a href=\"{{ path('book') }}\">Book manager</a></li>
    </ul>
    </div>

{% endblock -%}", "BookkeeperManagerBundle:book:edit.html.twig", "/var/www/html/pilot-symfony/src/Bookkeeper/ManagerBundle/Resources/views/book/edit.html.twig");
    }
}
