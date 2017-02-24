<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a6dbddc3ed3e88bdc7fe41c39e88a8ad76e25d7ff3e227d9e08612d2067fa8de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_f7b60ff376c1e19e7ac7ff769e620dde7a808b6bba6be2a3273235f5f17db3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b60ff376c1e19e7ac7ff769e620dde7a808b6bba6be2a3273235f5f17db3c4->enter($__internal_f7b60ff376c1e19e7ac7ff769e620dde7a808b6bba6be2a3273235f5f17db3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b60ff376c1e19e7ac7ff769e620dde7a808b6bba6be2a3273235f5f17db3c4->leave($__internal_f7b60ff376c1e19e7ac7ff769e620dde7a808b6bba6be2a3273235f5f17db3c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8701f222e5eab3bb6e7470e5a46501433bf03d84e7a79dd7ecaf8ac570fb4238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8701f222e5eab3bb6e7470e5a46501433bf03d84e7a79dd7ecaf8ac570fb4238->enter($__internal_8701f222e5eab3bb6e7470e5a46501433bf03d84e7a79dd7ecaf8ac570fb4238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8701f222e5eab3bb6e7470e5a46501433bf03d84e7a79dd7ecaf8ac570fb4238->leave($__internal_8701f222e5eab3bb6e7470e5a46501433bf03d84e7a79dd7ecaf8ac570fb4238_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
