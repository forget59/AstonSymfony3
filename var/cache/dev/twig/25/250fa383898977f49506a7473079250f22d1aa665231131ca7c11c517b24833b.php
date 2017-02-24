<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c9360aaad1f455fa4cb44daa26758ed9d0f59c059fa73ef709d1eae14c956fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_9e4f734e12c71c6267ba7c0949e431d798ab5558b3825c4b5e1804c9fb409f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4f734e12c71c6267ba7c0949e431d798ab5558b3825c4b5e1804c9fb409f29->enter($__internal_9e4f734e12c71c6267ba7c0949e431d798ab5558b3825c4b5e1804c9fb409f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4f734e12c71c6267ba7c0949e431d798ab5558b3825c4b5e1804c9fb409f29->leave($__internal_9e4f734e12c71c6267ba7c0949e431d798ab5558b3825c4b5e1804c9fb409f29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_272cf151fa923a1342eedc959490e57a4456e78f245752d1ebb2411a38033afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272cf151fa923a1342eedc959490e57a4456e78f245752d1ebb2411a38033afa->enter($__internal_272cf151fa923a1342eedc959490e57a4456e78f245752d1ebb2411a38033afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_272cf151fa923a1342eedc959490e57a4456e78f245752d1ebb2411a38033afa->leave($__internal_272cf151fa923a1342eedc959490e57a4456e78f245752d1ebb2411a38033afa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
