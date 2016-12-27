<?php

/* BookkeeperManagerBundle:book:show.html.twig */
class __TwigTemplate_b906a61322a7d256415a95029b8609224a1ddb88bf6e7cf964703be817d9a66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BookkeeperManagerBundle:book:show.html.twig", 1);
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
        $__internal_4d7bf96b1222007dac2f71b6de243afe33eee0445ceba0d3d2387f42eeac3ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7bf96b1222007dac2f71b6de243afe33eee0445ceba0d3d2387f42eeac3ce4->enter($__internal_4d7bf96b1222007dac2f71b6de243afe33eee0445ceba0d3d2387f42eeac3ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:book:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7bf96b1222007dac2f71b6de243afe33eee0445ceba0d3d2387f42eeac3ce4->leave($__internal_4d7bf96b1222007dac2f71b6de243afe33eee0445ceba0d3d2387f42eeac3ce4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcf31e42fec05afd82f451be41c9b6b515c32ffe56e3ebc5f40d8e98da17c871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf31e42fec05afd82f451be41c9b6b515c32ffe56e3ebc5f40d8e98da17c871->enter($__internal_fcf31e42fec05afd82f451be41c9b6b515c32ffe56e3ebc5f40d8e98da17c871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Show</h1>

    <h3>Book #";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "title", array()), "html", null, true);
        echo "</h3>

    <h4>No. of Pages: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "pages", array()), "html", null, true);
        echo "</h4>

    <p>Desctiption: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "description", array()), "html", null, true);
        echo "</p>

    <ul>
        <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book");
        echo "\">Book manager</a></li>
        <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_edit", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()))), "html", null, true);
        echo "\">Edit book</a></li>
        <li>";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>

";
        
        $__internal_fcf31e42fec05afd82f451be41c9b6b515c32ffe56e3ebc5f40d8e98da17c871->leave($__internal_fcf31e42fec05afd82f451be41c9b6b515c32ffe56e3ebc5f40d8e98da17c871_prof);

    }

    public function getTemplateName()
    {
        return "BookkeeperManagerBundle:book:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  66 => 15,  62 => 14,  56 => 11,  51 => 9,  44 => 7,  40 => 5,  34 => 3,  11 => 1,);
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

    <h1>Show</h1>

    <h3>Book #{{ book.id }} - {{ book.title }}</h3>

    <h4>No. of Pages: {{ book.pages }}</h4>

    <p>Desctiption: {{ book.description }}</p>

    <ul>
        <li><a href=\"{{ path('book') }}\">Book manager</a></li>
        <li><a href=\"{{ path('book_edit', {'id':book.id}) }}\">Edit book</a></li>
        <li>{{ form(delete_form) }}</li>
    </ul>

{% endblock -%}", "BookkeeperManagerBundle:book:show.html.twig", "/var/www/html/pilot-symfony/src/Bookkeeper/ManagerBundle/Resources/views/book/show.html.twig");
    }
}
