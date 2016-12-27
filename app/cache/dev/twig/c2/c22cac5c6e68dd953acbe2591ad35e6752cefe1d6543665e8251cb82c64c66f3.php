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
        $__internal_4268786cb80dfc564f8a85664acb0d0e86e2e6f215173a930f0df334a67bd6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4268786cb80dfc564f8a85664acb0d0e86e2e6f215173a930f0df334a67bd6b1->enter($__internal_4268786cb80dfc564f8a85664acb0d0e86e2e6f215173a930f0df334a67bd6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        ";
        // line 11
        echo "    </head>

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
        
        $__internal_4268786cb80dfc564f8a85664acb0d0e86e2e6f215173a930f0df334a67bd6b1->leave($__internal_4268786cb80dfc564f8a85664acb0d0e86e2e6f215173a930f0df334a67bd6b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4b7c55db755924930800165923fcc3379c918aabec08440c2f983c0fca6ac20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b7c55db755924930800165923fcc3379c918aabec08440c2f983c0fca6ac20->enter($__internal_c4b7c55db755924930800165923fcc3379c918aabec08440c2f983c0fca6ac20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c4b7c55db755924930800165923fcc3379c918aabec08440c2f983c0fca6ac20->leave($__internal_c4b7c55db755924930800165923fcc3379c918aabec08440c2f983c0fca6ac20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7cd77041f882f3dda88cf09e2ee33e77ef1954ac129e3a87752af805ceab36d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd77041f882f3dda88cf09e2ee33e77ef1954ac129e3a87752af805ceab36d2->enter($__internal_7cd77041f882f3dda88cf09e2ee33e77ef1954ac129e3a87752af805ceab36d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7cd77041f882f3dda88cf09e2ee33e77ef1954ac129e3a87752af805ceab36d2->leave($__internal_7cd77041f882f3dda88cf09e2ee33e77ef1954ac129e3a87752af805ceab36d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_02c8df6bdd49883ba71b0e74dbf289f363619a91609f35f6755b7134d85bb48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c8df6bdd49883ba71b0e74dbf289f363619a91609f35f6755b7134d85bb48e->enter($__internal_02c8df6bdd49883ba71b0e74dbf289f363619a91609f35f6755b7134d85bb48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_02c8df6bdd49883ba71b0e74dbf289f363619a91609f35f6755b7134d85bb48e->leave($__internal_02c8df6bdd49883ba71b0e74dbf289f363619a91609f35f6755b7134d85bb48e_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9fb4344764975c994132f2f1a016ee10a8ac066f5ec548b55a03f5af10beae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fb4344764975c994132f2f1a016ee10a8ac066f5ec548b55a03f5af10beae6->enter($__internal_a9fb4344764975c994132f2f1a016ee10a8ac066f5ec548b55a03f5af10beae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "
        ";
        
        $__internal_a9fb4344764975c994132f2f1a016ee10a8ac066f5ec548b55a03f5af10beae6->leave($__internal_a9fb4344764975c994132f2f1a016ee10a8ac066f5ec548b55a03f5af10beae6_prof);

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
        return array (  119 => 19,  113 => 18,  102 => 17,  91 => 6,  79 => 5,  70 => 21,  67 => 18,  64 => 17,  55 => 15,  51 => 14,  46 => 11,  44 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        {#<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>#}
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
