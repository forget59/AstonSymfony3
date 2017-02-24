<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6a266cff9d13d1638c1ad79ed20e09209d138a2cd0c06d19e073bb641433d9b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_61444ae2b6bbb76aebd6bd6e56cd18fd37dc2e5c8d4b3de7237c05080644bafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61444ae2b6bbb76aebd6bd6e56cd18fd37dc2e5c8d4b3de7237c05080644bafb->enter($__internal_61444ae2b6bbb76aebd6bd6e56cd18fd37dc2e5c8d4b3de7237c05080644bafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61444ae2b6bbb76aebd6bd6e56cd18fd37dc2e5c8d4b3de7237c05080644bafb->leave($__internal_61444ae2b6bbb76aebd6bd6e56cd18fd37dc2e5c8d4b3de7237c05080644bafb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_058e5f9017af99bae41f5747c2eeaf9c0f1566d0f0c693071003b79a1665a2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058e5f9017af99bae41f5747c2eeaf9c0f1566d0f0c693071003b79a1665a2da->enter($__internal_058e5f9017af99bae41f5747c2eeaf9c0f1566d0f0c693071003b79a1665a2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_058e5f9017af99bae41f5747c2eeaf9c0f1566d0f0c693071003b79a1665a2da->leave($__internal_058e5f9017af99bae41f5747c2eeaf9c0f1566d0f0c693071003b79a1665a2da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
