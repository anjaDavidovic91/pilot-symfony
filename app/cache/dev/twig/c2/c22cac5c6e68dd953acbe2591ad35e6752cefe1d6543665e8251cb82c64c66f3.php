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
        $__internal_a564dabfc570b20b45b9358f472ffabd8b2bd135bce63168882e27d653bf49e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a564dabfc570b20b45b9358f472ffabd8b2bd135bce63168882e27d653bf49e6->enter($__internal_a564dabfc570b20b45b9358f472ffabd8b2bd135bce63168882e27d653bf49e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </head>

    <body>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "            <div>";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </body>
</html>
";
        
        $__internal_a564dabfc570b20b45b9358f472ffabd8b2bd135bce63168882e27d653bf49e6->leave($__internal_a564dabfc570b20b45b9358f472ffabd8b2bd135bce63168882e27d653bf49e6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48083446cf0b5504d93f5d593faef7c5ddd84915a60968eb0c37b2c5e571f62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48083446cf0b5504d93f5d593faef7c5ddd84915a60968eb0c37b2c5e571f62f->enter($__internal_48083446cf0b5504d93f5d593faef7c5ddd84915a60968eb0c37b2c5e571f62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48083446cf0b5504d93f5d593faef7c5ddd84915a60968eb0c37b2c5e571f62f->leave($__internal_48083446cf0b5504d93f5d593faef7c5ddd84915a60968eb0c37b2c5e571f62f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b247c4c5e4182b4693f20b2cebf28ca381b6ee5717e201ab074dd4173fff3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b247c4c5e4182b4693f20b2cebf28ca381b6ee5717e201ab074dd4173fff3b9->enter($__internal_7b247c4c5e4182b4693f20b2cebf28ca381b6ee5717e201ab074dd4173fff3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7b247c4c5e4182b4693f20b2cebf28ca381b6ee5717e201ab074dd4173fff3b9->leave($__internal_7b247c4c5e4182b4693f20b2cebf28ca381b6ee5717e201ab074dd4173fff3b9_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_b712e10c4bb681aa9ca5a8c39b5cb57c6b8fb423d58cc53e30dbda4ebbc0deea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b712e10c4bb681aa9ca5a8c39b5cb57c6b8fb423d58cc53e30dbda4ebbc0deea->enter($__internal_b712e10c4bb681aa9ca5a8c39b5cb57c6b8fb423d58cc53e30dbda4ebbc0deea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b712e10c4bb681aa9ca5a8c39b5cb57c6b8fb423d58cc53e30dbda4ebbc0deea->leave($__internal_b712e10c4bb681aa9ca5a8c39b5cb57c6b8fb423d58cc53e30dbda4ebbc0deea_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff2200807ff5873efbdf96763677d49ff23f5f9ae6f9af23a2bca2a1cb961edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2200807ff5873efbdf96763677d49ff23f5f9ae6f9af23a2bca2a1cb961edb->enter($__internal_ff2200807ff5873efbdf96763677d49ff23f5f9ae6f9af23a2bca2a1cb961edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "
        ";
        
        $__internal_ff2200807ff5873efbdf96763677d49ff23f5f9ae6f9af23a2bca2a1cb961edb->leave($__internal_ff2200807ff5873efbdf96763677d49ff23f5f9ae6f9af23a2bca2a1cb961edb_prof);

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
        return array (  117 => 19,  111 => 18,  100 => 17,  89 => 6,  77 => 5,  68 => 21,  65 => 18,  62 => 17,  53 => 15,  49 => 14,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    </head>

    <body>
        {% for flashMessage in app.session.flashbag.get('msg') %}
            <div>{{ flashMessage }}</div>
        {% endfor %}
        {% block body %}{% endblock %}
        {% block javascripts %}

        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/pilot-symfony/app/Resources/views/base.html.twig");
    }
}
