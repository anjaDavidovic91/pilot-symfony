<?php

/* ::base.html.twig */
class __TwigTemplate_f557b9cac0a366f70383bb4c3d13819539660dd7f4a939be53d7e4c5fe901d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c96916fb44f8df861a3d56a7a07c72db9dd65a61c01198232d9b0b98f35e708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c96916fb44f8df861a3d56a7a07c72db9dd65a61c01198232d9b0b98f35e708->enter($__internal_2c96916fb44f8df861a3d56a7a07c72db9dd65a61c01198232d9b0b98f35e708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        // line 10
        echo "
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"navbar-form navbar-left\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        ";
        // line 66
        echo "    </head>

    <body style=\"background: #fafafa\">

    <div class=\"container-fluid\">


        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 74
            echo "            <div>";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "
    </div>
    </body>
</html>
";
        
        $__internal_2c96916fb44f8df861a3d56a7a07c72db9dd65a61c01198232d9b0b98f35e708->leave($__internal_2c96916fb44f8df861a3d56a7a07c72db9dd65a61c01198232d9b0b98f35e708_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceb3a404ab0259253e0e7d50b71f7890fa3d650d6113f467a7f843aa83b4ff01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb3a404ab0259253e0e7d50b71f7890fa3d650d6113f467a7f843aa83b4ff01->enter($__internal_ceb3a404ab0259253e0e7d50b71f7890fa3d650d6113f467a7f843aa83b4ff01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ceb3a404ab0259253e0e7d50b71f7890fa3d650d6113f467a7f843aa83b4ff01->leave($__internal_ceb3a404ab0259253e0e7d50b71f7890fa3d650d6113f467a7f843aa83b4ff01_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42c9ccbb4a635ba6a9dec8be7782052b48ea667e28857f93f9d6a3c610b4ccdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c9ccbb4a635ba6a9dec8be7782052b48ea667e28857f93f9d6a3c610b4ccdf->enter($__internal_42c9ccbb4a635ba6a9dec8be7782052b48ea667e28857f93f9d6a3c610b4ccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_42c9ccbb4a635ba6a9dec8be7782052b48ea667e28857f93f9d6a3c610b4ccdf->leave($__internal_42c9ccbb4a635ba6a9dec8be7782052b48ea667e28857f93f9d6a3c610b4ccdf_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_7afd54ef7a2bf4bb5f020a07a270cae7c98901a0526cf8f8639c2c2dff03fa91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afd54ef7a2bf4bb5f020a07a270cae7c98901a0526cf8f8639c2c2dff03fa91->enter($__internal_7afd54ef7a2bf4bb5f020a07a270cae7c98901a0526cf8f8639c2c2dff03fa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7afd54ef7a2bf4bb5f020a07a270cae7c98901a0526cf8f8639c2c2dff03fa91->leave($__internal_7afd54ef7a2bf4bb5f020a07a270cae7c98901a0526cf8f8639c2c2dff03fa91_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3605b55c483f0f7605280959a6e85db765dddeafceadd17df146b1a37242895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3605b55c483f0f7605280959a6e85db765dddeafceadd17df146b1a37242895->enter($__internal_d3605b55c483f0f7605280959a6e85db765dddeafceadd17df146b1a37242895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "
        ";
        
        $__internal_d3605b55c483f0f7605280959a6e85db765dddeafceadd17df146b1a37242895->leave($__internal_d3605b55c483f0f7605280959a6e85db765dddeafceadd17df146b1a37242895_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 79,  176 => 78,  165 => 77,  154 => 6,  142 => 5,  131 => 81,  128 => 78,  126 => 77,  123 => 76,  114 => 74,  110 => 73,  101 => 66,  44 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        {#<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>#}

        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class=\"navbar-form navbar-left\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        {#<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>#}
    </head>

    <body style=\"background: #fafafa\">

    <div class=\"container-fluid\">


        {% for flashMessage in app.session.flashbag.get('msg') %}
            <div>{{ flashMessage }}</div>
        {% endfor %}

        {% block body %}{% endblock %}
        {% block javascripts %}

        {% endblock %}

    </div>
    </body>
</html>
", "::base.html.twig", "/var/www/html/pilot-symfony/app/Resources/views/base.html.twig");
    }
}
