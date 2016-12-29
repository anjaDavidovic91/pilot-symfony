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
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_489ab4a39e59aee0d64edcea12aa262f182f5ca04920c95e82a0e7b6c77728ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489ab4a39e59aee0d64edcea12aa262f182f5ca04920c95e82a0e7b6c77728ca->enter($__internal_489ab4a39e59aee0d64edcea12aa262f182f5ca04920c95e82a0e7b6c77728ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BookkeeperManagerBundle:book:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489ab4a39e59aee0d64edcea12aa262f182f5ca04920c95e82a0e7b6c77728ca->leave($__internal_489ab4a39e59aee0d64edcea12aa262f182f5ca04920c95e82a0e7b6c77728ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a67dbe800130cd0b81e3642d9d982dc76e10fa5454d881d0454d997dee8afb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67dbe800130cd0b81e3642d9d982dc76e10fa5454d881d0454d997dee8afb48->enter($__internal_a67dbe800130cd0b81e3642d9d982dc76e10fa5454d881d0454d997dee8afb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    ";
        // line 17
        echo "                    ";
        // line 18
        echo "
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                        <input type=\"checkbox\" name=\"category[]\" class=\"category\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </div>

                <div class=\"col-xs-2\">
                    <div class=\"form-group\">
                        <div class=\"btn btn-primary\" id=\"saveCategory\">Save</div>
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
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book");
        echo "\">Book manager</a></li>
    </ul>
    <div>
";
        
        $__internal_a67dbe800130cd0b81e3642d9d982dc76e10fa5454d881d0454d997dee8afb48->leave($__internal_a67dbe800130cd0b81e3642d9d982dc76e10fa5454d881d0454d997dee8afb48_prof);

    }

    // line 45
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_119331ce84c711b7a76efa6bce78b19d6110e5623dc7f90fa13335cc94228600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119331ce84c711b7a76efa6bce78b19d6110e5623dc7f90fa13335cc94228600->enter($__internal_119331ce84c711b7a76efa6bce78b19d6110e5623dc7f90fa13335cc94228600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 46
        echo "
       <script>
       var categories = [];

        \$(\".category\").change(function() {
            var ckbox = \$('.category');
                if (ckbox.is(':checked')) {
                    var category = \$(this).val();
                    var idExist = \$.inArray(category, categories);
                    if (idExist == -1) {
                        categories.push(category);
                   }
                 }
               });

        \$(\"#saveCategory\").click(function() {
           url = '";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("book-category");
        echo "';
               \$.ajax({
                url: url,
                method: \"POST\",
                data: {category:categories}
              });
           });
        </script>




";
        
        $__internal_119331ce84c711b7a76efa6bce78b19d6110e5623dc7f90fa13335cc94228600->leave($__internal_119331ce84c711b7a76efa6bce78b19d6110e5623dc7f90fa13335cc94228600_prof);

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
        return array (  131 => 62,  113 => 46,  107 => 45,  96 => 40,  76 => 22,  65 => 20,  61 => 19,  58 => 18,  56 => 17,  45 => 8,  41 => 6,  35 => 3,  11 => 1,);
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
                    {#<label for=\"categories\">Categories</label>#}
                    {#<input type=\"text\" class=\"form-control\" id=\"categories\">#}

                    {% for category in categories %}
                        <input type=\"checkbox\" name=\"category[]\" class=\"category\" value=\"{{ category.id }}\">{{ category.name }}
                    {% endfor %}
                </div>

                <div class=\"col-xs-2\">
                    <div class=\"form-group\">
                        <div class=\"btn btn-primary\" id=\"saveCategory\">Save</div>
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
{% endblock -%}

{% block scripts %}

       <script>
       var categories = [];

        \$(\".category\").change(function() {
            var ckbox = \$('.category');
                if (ckbox.is(':checked')) {
                    var category = \$(this).val();
                    var idExist = \$.inArray(category, categories);
                    if (idExist == -1) {
                        categories.push(category);
                   }
                 }
               });

        \$(\"#saveCategory\").click(function() {
           url = '{{ path('book-category') }}';
               \$.ajax({
                url: url,
                method: \"POST\",
                data: {category:categories}
              });
           });
        </script>




{% endblock %}", "BookkeeperManagerBundle:book:new.html.twig", "/var/www/html/pilot-symfony/src/Bookkeeper/ManagerBundle/Resources/views/book/new.html.twig");
    }
}
