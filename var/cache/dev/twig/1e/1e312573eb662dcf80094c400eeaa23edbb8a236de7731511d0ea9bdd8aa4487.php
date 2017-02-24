<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e47e9e5c81b9c6e510f9b000c89e6e85e600408d81b43181b31a83e6cdae37f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_51a265c13f48e53a3f8459aa5056c0841e207de01954b0fdc1e519331951a3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a265c13f48e53a3f8459aa5056c0841e207de01954b0fdc1e519331951a3bd->enter($__internal_51a265c13f48e53a3f8459aa5056c0841e207de01954b0fdc1e519331951a3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51a265c13f48e53a3f8459aa5056c0841e207de01954b0fdc1e519331951a3bd->leave($__internal_51a265c13f48e53a3f8459aa5056c0841e207de01954b0fdc1e519331951a3bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90ab7c2cdfa189cda9a108dc06cd083d19adaeae683f457fcbaa4790db7be288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ab7c2cdfa189cda9a108dc06cd083d19adaeae683f457fcbaa4790db7be288->enter($__internal_90ab7c2cdfa189cda9a108dc06cd083d19adaeae683f457fcbaa4790db7be288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_90ab7c2cdfa189cda9a108dc06cd083d19adaeae683f457fcbaa4790db7be288->leave($__internal_90ab7c2cdfa189cda9a108dc06cd083d19adaeae683f457fcbaa4790db7be288_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
