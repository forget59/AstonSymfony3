<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ffda30ea633f2a02e97f12895d30d77fc212725993e5e718e6849326440abb21 extends Twig_Template
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
        $__internal_b9b22dcb2f72ec3ecad0fb7ad71155c03ce6db7c7314946029c3d64d1eaa91a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b22dcb2f72ec3ecad0fb7ad71155c03ce6db7c7314946029c3d64d1eaa91a0->enter($__internal_b9b22dcb2f72ec3ecad0fb7ad71155c03ce6db7c7314946029c3d64d1eaa91a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b22dcb2f72ec3ecad0fb7ad71155c03ce6db7c7314946029c3d64d1eaa91a0->leave($__internal_b9b22dcb2f72ec3ecad0fb7ad71155c03ce6db7c7314946029c3d64d1eaa91a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9fbbf27f05fb13937b37c9dab101719a26d1521f5f60ab202be38973fbb7869e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbbf27f05fb13937b37c9dab101719a26d1521f5f60ab202be38973fbb7869e->enter($__internal_9fbbf27f05fb13937b37c9dab101719a26d1521f5f60ab202be38973fbb7869e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9fbbf27f05fb13937b37c9dab101719a26d1521f5f60ab202be38973fbb7869e->leave($__internal_9fbbf27f05fb13937b37c9dab101719a26d1521f5f60ab202be38973fbb7869e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd910116b473edad22cb44406609976f791994a5aa19a9f311afa9f4a2c210ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd910116b473edad22cb44406609976f791994a5aa19a9f311afa9f4a2c210ca->enter($__internal_bd910116b473edad22cb44406609976f791994a5aa19a9f311afa9f4a2c210ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bd910116b473edad22cb44406609976f791994a5aa19a9f311afa9f4a2c210ca->leave($__internal_bd910116b473edad22cb44406609976f791994a5aa19a9f311afa9f4a2c210ca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efaa7834cefc6fa6ef937885e6c47a87f7cf8a0ebfe23da7c068220640d0147a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efaa7834cefc6fa6ef937885e6c47a87f7cf8a0ebfe23da7c068220640d0147a->enter($__internal_efaa7834cefc6fa6ef937885e6c47a87f7cf8a0ebfe23da7c068220640d0147a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_efaa7834cefc6fa6ef937885e6c47a87f7cf8a0ebfe23da7c068220640d0147a->leave($__internal_efaa7834cefc6fa6ef937885e6c47a87f7cf8a0ebfe23da7c068220640d0147a_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
