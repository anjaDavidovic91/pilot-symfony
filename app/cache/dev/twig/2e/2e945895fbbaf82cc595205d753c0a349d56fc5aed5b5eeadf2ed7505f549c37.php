<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8bc184a8fd45f62e70efa3671c17866539a599716d347e34de065521040a445e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27948ad01c0fd742524a2eb64e661718418694a5b9c93e6801801a100d112042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27948ad01c0fd742524a2eb64e661718418694a5b9c93e6801801a100d112042->enter($__internal_27948ad01c0fd742524a2eb64e661718418694a5b9c93e6801801a100d112042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27948ad01c0fd742524a2eb64e661718418694a5b9c93e6801801a100d112042->leave($__internal_27948ad01c0fd742524a2eb64e661718418694a5b9c93e6801801a100d112042_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9019aeb1cc13562e3b211de11d0c031f677573c66abbcde6591cefb0088ff73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9019aeb1cc13562e3b211de11d0c031f677573c66abbcde6591cefb0088ff73d->enter($__internal_9019aeb1cc13562e3b211de11d0c031f677573c66abbcde6591cefb0088ff73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9019aeb1cc13562e3b211de11d0c031f677573c66abbcde6591cefb0088ff73d->leave($__internal_9019aeb1cc13562e3b211de11d0c031f677573c66abbcde6591cefb0088ff73d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ebe6ff07ef5464c080d7c63af7337f3da5c77cc68c4fe133c192a2f8cf4a114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebe6ff07ef5464c080d7c63af7337f3da5c77cc68c4fe133c192a2f8cf4a114->enter($__internal_7ebe6ff07ef5464c080d7c63af7337f3da5c77cc68c4fe133c192a2f8cf4a114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ebe6ff07ef5464c080d7c63af7337f3da5c77cc68c4fe133c192a2f8cf4a114->leave($__internal_7ebe6ff07ef5464c080d7c63af7337f3da5c77cc68c4fe133c192a2f8cf4a114_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_075a28863051789881497c3d406e5d8eb328ead20e1f34677123c6e4681e81b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_075a28863051789881497c3d406e5d8eb328ead20e1f34677123c6e4681e81b5->enter($__internal_075a28863051789881497c3d406e5d8eb328ead20e1f34677123c6e4681e81b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_075a28863051789881497c3d406e5d8eb328ead20e1f34677123c6e4681e81b5->leave($__internal_075a28863051789881497c3d406e5d8eb328ead20e1f34677123c6e4681e81b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/pilot-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
