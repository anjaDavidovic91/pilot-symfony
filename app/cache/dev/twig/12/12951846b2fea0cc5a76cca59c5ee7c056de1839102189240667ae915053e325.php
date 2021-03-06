<?php

/* BookkeeperManagerBundle:book:index.html.twig */
class __TwigTemplate_64c06dd4ac02623214190d744f74673c2ec106a21380e49d99b4fe7abc5b52ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BookkeeperManagerBundle:book:index.html.twig", 1);
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
        $__internal_d8a54fa5ea9ec603cc41b210914df816e3e9c4b8ccb08fd0e54deb26b880a405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a54fa5ea9ec603cc41b210914df816e3e9c4b8ccb08fd0e54deb26b880a405->enter($__internal_d8a54fa5ea9ec603cc41b210914df816e3e9c4b8ccb08fd0e54deb26b880a405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:book:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8a54fa5ea9ec603cc41b210914df816e3e9c4b8ccb08fd0e54deb26b880a405->leave($__internal_d8a54fa5ea9ec603cc41b210914df816e3e9c4b8ccb08fd0e54deb26b880a405_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7755d077a2ea3c80187b241fdedf0d47ba347001563a903ebdf344b7872d6697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7755d077a2ea3c80187b241fdedf0d47ba347001563a903ebdf344b7872d6697->enter($__internal_7755d077a2ea3c80187b241fdedf0d47ba347001563a903ebdf344b7872d6697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<ul>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 6
            echo "            <li>
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_show", array("id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
            echo "\">View ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "   </ul>

    <p><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book_new");
        echo "\">New book</a> </p>
";
        
        $__internal_7755d077a2ea3c80187b241fdedf0d47ba347001563a903ebdf344b7872d6697->leave($__internal_7755d077a2ea3c80187b241fdedf0d47ba347001563a903ebdf344b7872d6697_prof);

    }

    public function getTemplateName()
    {
        return "BookkeeperManagerBundle:book:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  63 => 10,  50 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
   <ul>
        {% for book in books %}
            <li>
                {{ book.title }} - <a href=\"{{ path('book_show', {'id': book.id}) }}\">View {{ book.title }}</a>
            </li>
        {% endfor %}
   </ul>

    <p><a href=\"{{ path('book_new') }}\">New book</a> </p>
{% endblock -%}", "BookkeeperManagerBundle:book:index.html.twig", "/var/www/html/pilot-symfony/src/Bookkeeper/ManagerBundle/Resources/views/book/index.html.twig");
    }
}
