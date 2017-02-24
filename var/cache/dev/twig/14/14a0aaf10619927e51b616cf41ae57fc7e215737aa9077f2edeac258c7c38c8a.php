<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_31b8446e06e6bef31033e72ee9cc49f089d0f5e540cb6303e73e45502a69294f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63d2a9241155cad653ac1744377bb921c90ddaf51ddd2eb3aeb1024460d323bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d2a9241155cad653ac1744377bb921c90ddaf51ddd2eb3aeb1024460d323bd->enter($__internal_63d2a9241155cad653ac1744377bb921c90ddaf51ddd2eb3aeb1024460d323bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d2a9241155cad653ac1744377bb921c90ddaf51ddd2eb3aeb1024460d323bd->leave($__internal_63d2a9241155cad653ac1744377bb921c90ddaf51ddd2eb3aeb1024460d323bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a1124d1cb0b015bf4c5feb943998c1c6d9582cf1690a20b2de967dd1e525c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1124d1cb0b015bf4c5feb943998c1c6d9582cf1690a20b2de967dd1e525c7d->enter($__internal_7a1124d1cb0b015bf4c5feb943998c1c6d9582cf1690a20b2de967dd1e525c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7a1124d1cb0b015bf4c5feb943998c1c6d9582cf1690a20b2de967dd1e525c7d->leave($__internal_7a1124d1cb0b015bf4c5feb943998c1c6d9582cf1690a20b2de967dd1e525c7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdae4e2d99b1775937c92528f11ecd1d6ea5153db143f4b863a9764308cee850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdae4e2d99b1775937c92528f11ecd1d6ea5153db143f4b863a9764308cee850->enter($__internal_fdae4e2d99b1775937c92528f11ecd1d6ea5153db143f4b863a9764308cee850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fdae4e2d99b1775937c92528f11ecd1d6ea5153db143f4b863a9764308cee850->leave($__internal_fdae4e2d99b1775937c92528f11ecd1d6ea5153db143f4b863a9764308cee850_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e069bb9d03bc4ca159d1401ce143d68f09971980884f359bd976a98604f50689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e069bb9d03bc4ca159d1401ce143d68f09971980884f359bd976a98604f50689->enter($__internal_e069bb9d03bc4ca159d1401ce143d68f09971980884f359bd976a98604f50689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e069bb9d03bc4ca159d1401ce143d68f09971980884f359bd976a98604f50689->leave($__internal_e069bb9d03bc4ca159d1401ce143d68f09971980884f359bd976a98604f50689_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
