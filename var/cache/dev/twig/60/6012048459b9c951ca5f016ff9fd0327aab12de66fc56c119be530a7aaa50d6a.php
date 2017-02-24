<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1440d079e58e690f62f8e05a84fb33fd268ca30f21ace308d88c322d130fee43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c6fe85734f0fd792f5d371e05b2cb607252f89bc2f0fa5a47852e53acb192fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6fe85734f0fd792f5d371e05b2cb607252f89bc2f0fa5a47852e53acb192fe->enter($__internal_7c6fe85734f0fd792f5d371e05b2cb607252f89bc2f0fa5a47852e53acb192fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c6fe85734f0fd792f5d371e05b2cb607252f89bc2f0fa5a47852e53acb192fe->leave($__internal_7c6fe85734f0fd792f5d371e05b2cb607252f89bc2f0fa5a47852e53acb192fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0184304ee5ef423d64daab0ca8fdb08cb0b7b8ee241d3429a71efb47d5e080fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0184304ee5ef423d64daab0ca8fdb08cb0b7b8ee241d3429a71efb47d5e080fd->enter($__internal_0184304ee5ef423d64daab0ca8fdb08cb0b7b8ee241d3429a71efb47d5e080fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_0184304ee5ef423d64daab0ca8fdb08cb0b7b8ee241d3429a71efb47d5e080fd->leave($__internal_0184304ee5ef423d64daab0ca8fdb08cb0b7b8ee241d3429a71efb47d5e080fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
