<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c696b9552286b857f8e85620c8d7118e7594c7a885948abc3189462fa317d64f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6d6d6dc02eebd235a3240940b45595d073073e9dcbe703e1000d2bb31f4d603f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6d6dc02eebd235a3240940b45595d073073e9dcbe703e1000d2bb31f4d603f->enter($__internal_6d6d6dc02eebd235a3240940b45595d073073e9dcbe703e1000d2bb31f4d603f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d6d6dc02eebd235a3240940b45595d073073e9dcbe703e1000d2bb31f4d603f->leave($__internal_6d6d6dc02eebd235a3240940b45595d073073e9dcbe703e1000d2bb31f4d603f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af55ab385bc2b82b5cfc85009390dbc325269a8870a6e8367768232f0c14308d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af55ab385bc2b82b5cfc85009390dbc325269a8870a6e8367768232f0c14308d->enter($__internal_af55ab385bc2b82b5cfc85009390dbc325269a8870a6e8367768232f0c14308d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_af55ab385bc2b82b5cfc85009390dbc325269a8870a6e8367768232f0c14308d->leave($__internal_af55ab385bc2b82b5cfc85009390dbc325269a8870a6e8367768232f0c14308d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
