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
        $__internal_35e0b284b73b9f105f7634ab4b78e7787c4874721d119d5f0032c965f295bf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e0b284b73b9f105f7634ab4b78e7787c4874721d119d5f0032c965f295bf65->enter($__internal_35e0b284b73b9f105f7634ab4b78e7787c4874721d119d5f0032c965f295bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:book:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35e0b284b73b9f105f7634ab4b78e7787c4874721d119d5f0032c965f295bf65->leave($__internal_35e0b284b73b9f105f7634ab4b78e7787c4874721d119d5f0032c965f295bf65_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbb83e7398f0005a426993ed12817db5c35a6466dd3f465e71d270d6877e3125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb83e7398f0005a426993ed12817db5c35a6466dd3f465e71d270d6877e3125->enter($__internal_fbb83e7398f0005a426993ed12817db5c35a6466dd3f465e71d270d6877e3125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <p>Author: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getAuthor", array(), "method"), "getFirstname", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getAuthor", array(), "method"), "getLastname", array(), "method"), "html", null, true);
        echo "</p>

    <ul>
        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book");
        echo "\">Book manager</a></li>
        <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_edit", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()))), "html", null, true);
        echo "\">Edit book</a></li>
        <li>";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>

";
        
        $__internal_fbb83e7398f0005a426993ed12817db5c35a6466dd3f465e71d270d6877e3125->leave($__internal_fbb83e7398f0005a426993ed12817db5c35a6466dd3f465e71d270d6877e3125_prof);

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
        return array (  77 => 18,  73 => 17,  69 => 16,  61 => 13,  56 => 11,  51 => 9,  44 => 7,  40 => 5,  34 => 3,  11 => 1,);
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

    <p>Author: {{ book.getAuthor().getFirstname() }} {{ book.getAuthor().getLastname() }}</p>

    <ul>
        <li><a href=\"{{ path('book') }}\">Book manager</a></li>
        <li><a href=\"{{ path('book_edit', {'id':book.id}) }}\">Edit book</a></li>
        <li>{{ form(delete_form) }}</li>
    </ul>

{% endblock -%}", "BookkeeperManagerBundle:book:show.html.twig", "/var/www/html/pilot-symfony/src/Bookkeeper/ManagerBundle/Resources/views/book/show.html.twig");
    }
}
