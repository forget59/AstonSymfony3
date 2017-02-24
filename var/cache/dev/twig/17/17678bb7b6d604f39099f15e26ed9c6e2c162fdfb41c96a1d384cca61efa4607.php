<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_c62e0e585e69cbfb3b7f20d1ee19310ae5159a5d6bbabb1f7e9816e6090ce6ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_c9860919181327201c3ae8783ab26092645e81569b39808c0bcaea1b258ebf8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9860919181327201c3ae8783ab26092645e81569b39808c0bcaea1b258ebf8f->enter($__internal_c9860919181327201c3ae8783ab26092645e81569b39808c0bcaea1b258ebf8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9860919181327201c3ae8783ab26092645e81569b39808c0bcaea1b258ebf8f->leave($__internal_c9860919181327201c3ae8783ab26092645e81569b39808c0bcaea1b258ebf8f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2db2ff6dde89a0be31240d6671337522b70e7409fe6a9c97796288355dc88688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db2ff6dde89a0be31240d6671337522b70e7409fe6a9c97796288355dc88688->enter($__internal_2db2ff6dde89a0be31240d6671337522b70e7409fe6a9c97796288355dc88688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_2db2ff6dde89a0be31240d6671337522b70e7409fe6a9c97796288355dc88688->leave($__internal_2db2ff6dde89a0be31240d6671337522b70e7409fe6a9c97796288355dc88688_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
