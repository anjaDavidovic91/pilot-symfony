<?php

/* BookkeeperManagerBundle:author:show.html.twig */
class __TwigTemplate_190691bc984fa24b27f77100c42dd9d6c20728ec6883c3be2a419b9cf5793140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BookkeeperManagerBundle:author:show.html.twig", 1);
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
        $__internal_b452caaeaaf2c095160f3ebef1ec2f865dd569f579be12c053785392140f3360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b452caaeaaf2c095160f3ebef1ec2f865dd569f579be12c053785392140f3360->enter($__internal_b452caaeaaf2c095160f3ebef1ec2f865dd569f579be12c053785392140f3360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:author:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b452caaeaaf2c095160f3ebef1ec2f865dd569f579be12c053785392140f3360->leave($__internal_b452caaeaaf2c095160f3ebef1ec2f865dd569f579be12c053785392140f3360_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_78497369f093b7710603f45cb3f35f081c4b4663e5c7aa546bdeac3e50ff3e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78497369f093b7710603f45cb3f35f081c4b4663e5c7aa546bdeac3e50ff3e2d->enter($__internal_78497369f093b7710603f45cb3f35f081c4b4663e5c7aa546bdeac3e50ff3e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Show</h1>

    <h3>Author #";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "lastname", array()), "html", null, true);
        echo "</h3>

    ";
        // line 10
        echo "
    ";
        // line 12
        echo "
    ";
        // line 14
        echo "
    <h3>Books</h3>

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 18
            echo "        <ul>
            <li>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</li>
        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        // line 26
        echo "    ";
        // line 27
        echo "
";
        
        $__internal_78497369f093b7710603f45cb3f35f081c4b4663e5c7aa546bdeac3e50ff3e2d->leave($__internal_78497369f093b7710603f45cb3f35f081c4b4663e5c7aa546bdeac3e50ff3e2d_prof);

    }

    public function getTemplateName()
    {
        return "BookkeeperManagerBundle:author:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  88 => 26,  86 => 25,  84 => 24,  82 => 23,  80 => 22,  71 => 19,  68 => 18,  64 => 17,  59 => 14,  56 => 12,  53 => 10,  44 => 7,  40 => 5,  34 => 3,  11 => 1,);
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

    <h3>Author #{{ author.id }} - {{ author.firstname }} {{ author.lastname }}</h3>

    {#<h4>No. of Pages: {{ book.pages }}</h4>#}

    {#<p>Desctiption: {{ book.description }}</p>#}

    {#<p>Author: {{ book.getAuthor().getFirstname() }} {{ book.getAuthor().getLastname() }}</p>#}

    <h3>Books</h3>

    {%  for book in books %}
        <ul>
            <li>{{ book.title }}</li>
        </ul>
    {% endfor %}
    {#<ul>#}
        {#<li><a href=\"{{ path('book') }}\">Book manager</a></li>#}
        {#<li><a href=\"{{ path('book_edit', {'id':book.id}) }}\">Edit book</a></li>#}
        {#<li>{{ form(delete_form) }}</li>#}
    {#</ul>#}

{% endblock %}
", "BookkeeperManagerBundle:author:show.html.twig", "/var/www/html/pilot-symfony/src/Bookkeeper/ManagerBundle/Resources/views/author/show.html.twig");
    }
}
