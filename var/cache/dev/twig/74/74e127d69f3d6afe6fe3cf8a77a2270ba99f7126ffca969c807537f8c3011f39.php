<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3b7fd179de688f855b8cf53fafd7d36aeab75261fa332761cd672720bffd2c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7fd179de688f855b8cf53fafd7d36aeab75261fa332761cd672720bffd2c97->enter($__internal_3b7fd179de688f855b8cf53fafd7d36aeab75261fa332761cd672720bffd2c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b7fd179de688f855b8cf53fafd7d36aeab75261fa332761cd672720bffd2c97->leave($__internal_3b7fd179de688f855b8cf53fafd7d36aeab75261fa332761cd672720bffd2c97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c3e7a32365230e01524e427634858fe8318ef254c976270bb59ffcc2125c8d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e7a32365230e01524e427634858fe8318ef254c976270bb59ffcc2125c8d4e->enter($__internal_c3e7a32365230e01524e427634858fe8318ef254c976270bb59ffcc2125c8d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c3e7a32365230e01524e427634858fe8318ef254c976270bb59ffcc2125c8d4e->leave($__internal_c3e7a32365230e01524e427634858fe8318ef254c976270bb59ffcc2125c8d4e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_feb0f96d7ad703a26d3b249220dab2fa8df09f3f0c8012b8f923799a7ce96112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb0f96d7ad703a26d3b249220dab2fa8df09f3f0c8012b8f923799a7ce96112->enter($__internal_feb0f96d7ad703a26d3b249220dab2fa8df09f3f0c8012b8f923799a7ce96112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_feb0f96d7ad703a26d3b249220dab2fa8df09f3f0c8012b8f923799a7ce96112->leave($__internal_feb0f96d7ad703a26d3b249220dab2fa8df09f3f0c8012b8f923799a7ce96112_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4991665686a25a52af28a37043706acde0d42d227370cddeb6e6c7c1ea5cb2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4991665686a25a52af28a37043706acde0d42d227370cddeb6e6c7c1ea5cb2fa->enter($__internal_4991665686a25a52af28a37043706acde0d42d227370cddeb6e6c7c1ea5cb2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4991665686a25a52af28a37043706acde0d42d227370cddeb6e6c7c1ea5cb2fa->leave($__internal_4991665686a25a52af28a37043706acde0d42d227370cddeb6e6c7c1ea5cb2fa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
