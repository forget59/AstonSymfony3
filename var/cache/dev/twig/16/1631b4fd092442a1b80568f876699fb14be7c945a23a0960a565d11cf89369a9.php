<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e8f5ed2bae2b38e17d71e3c3b3de88ae792658dc487776e540ae968cdbf2690c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5cac21c2fa2c244dd3d5bfa84280b470685059d89fa065e441b86fb78cfca4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cac21c2fa2c244dd3d5bfa84280b470685059d89fa065e441b86fb78cfca4dc->enter($__internal_5cac21c2fa2c244dd3d5bfa84280b470685059d89fa065e441b86fb78cfca4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cac21c2fa2c244dd3d5bfa84280b470685059d89fa065e441b86fb78cfca4dc->leave($__internal_5cac21c2fa2c244dd3d5bfa84280b470685059d89fa065e441b86fb78cfca4dc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e16f870f3ea95c4a67e2ebf76b7df11fc14133b61d367370a53de1517bf2d9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16f870f3ea95c4a67e2ebf76b7df11fc14133b61d367370a53de1517bf2d9f6->enter($__internal_e16f870f3ea95c4a67e2ebf76b7df11fc14133b61d367370a53de1517bf2d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_e16f870f3ea95c4a67e2ebf76b7df11fc14133b61d367370a53de1517bf2d9f6->leave($__internal_e16f870f3ea95c4a67e2ebf76b7df11fc14133b61d367370a53de1517bf2d9f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
