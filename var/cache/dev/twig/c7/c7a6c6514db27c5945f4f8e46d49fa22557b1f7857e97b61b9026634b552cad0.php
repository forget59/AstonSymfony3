<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3f5917d11a1511f491e195e0f3b4ed712061c434a09793b8a05058ff91af2bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_adb272891446c46e61fc0fe02eba0c4bcc4c131b7a3ce65a35d7768d9be8cd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb272891446c46e61fc0fe02eba0c4bcc4c131b7a3ce65a35d7768d9be8cd34->enter($__internal_adb272891446c46e61fc0fe02eba0c4bcc4c131b7a3ce65a35d7768d9be8cd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb272891446c46e61fc0fe02eba0c4bcc4c131b7a3ce65a35d7768d9be8cd34->leave($__internal_adb272891446c46e61fc0fe02eba0c4bcc4c131b7a3ce65a35d7768d9be8cd34_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a36f6b2680dc2fad269a3a8057167f02ca1588c790f257495df36313f8bf307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a36f6b2680dc2fad269a3a8057167f02ca1588c790f257495df36313f8bf307->enter($__internal_1a36f6b2680dc2fad269a3a8057167f02ca1588c790f257495df36313f8bf307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_1a36f6b2680dc2fad269a3a8057167f02ca1588c790f257495df36313f8bf307->leave($__internal_1a36f6b2680dc2fad269a3a8057167f02ca1588c790f257495df36313f8bf307_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
