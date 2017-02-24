<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_8fbe2ee0a1a36f5fc6c535a554d0290977c9974f964678199e9cf11c53d9b4a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_1e69723efb8e05cf2fecbfc86988c1d88c3ebc0f6cf503ed8190d023dab5d51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e69723efb8e05cf2fecbfc86988c1d88c3ebc0f6cf503ed8190d023dab5d51d->enter($__internal_1e69723efb8e05cf2fecbfc86988c1d88c3ebc0f6cf503ed8190d023dab5d51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e69723efb8e05cf2fecbfc86988c1d88c3ebc0f6cf503ed8190d023dab5d51d->leave($__internal_1e69723efb8e05cf2fecbfc86988c1d88c3ebc0f6cf503ed8190d023dab5d51d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4db97080586244aceba2647b7cdcbb77d0842587fc565025a2645aaf43b5e6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db97080586244aceba2647b7cdcbb77d0842587fc565025a2645aaf43b5e6e9->enter($__internal_4db97080586244aceba2647b7cdcbb77d0842587fc565025a2645aaf43b5e6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4db97080586244aceba2647b7cdcbb77d0842587fc565025a2645aaf43b5e6e9->leave($__internal_4db97080586244aceba2647b7cdcbb77d0842587fc565025a2645aaf43b5e6e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
