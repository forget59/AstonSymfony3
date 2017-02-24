<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_80e59d28943ac93f2f459c95ec4f79e81bddc3b3ae600d8111fa7f80314bfcfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c9f45febb012ae1918eeb265af91768754654367490ff5ec042e8237e4d979e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9f45febb012ae1918eeb265af91768754654367490ff5ec042e8237e4d979e->enter($__internal_0c9f45febb012ae1918eeb265af91768754654367490ff5ec042e8237e4d979e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0c9f45febb012ae1918eeb265af91768754654367490ff5ec042e8237e4d979e->leave($__internal_0c9f45febb012ae1918eeb265af91768754654367490ff5ec042e8237e4d979e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_77cfe7a750dff3dc8f3ee8b848b231615eb99fa7e3ede6499f3ac6437cf818b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cfe7a750dff3dc8f3ee8b848b231615eb99fa7e3ede6499f3ac6437cf818b3->enter($__internal_77cfe7a750dff3dc8f3ee8b848b231615eb99fa7e3ede6499f3ac6437cf818b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_77cfe7a750dff3dc8f3ee8b848b231615eb99fa7e3ede6499f3ac6437cf818b3->leave($__internal_77cfe7a750dff3dc8f3ee8b848b231615eb99fa7e3ede6499f3ac6437cf818b3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_80dbfb37698d0b67e9fef598be733c50926cf1933c153d9d1e184f64b7351a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80dbfb37698d0b67e9fef598be733c50926cf1933c153d9d1e184f64b7351a99->enter($__internal_80dbfb37698d0b67e9fef598be733c50926cf1933c153d9d1e184f64b7351a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_80dbfb37698d0b67e9fef598be733c50926cf1933c153d9d1e184f64b7351a99->leave($__internal_80dbfb37698d0b67e9fef598be733c50926cf1933c153d9d1e184f64b7351a99_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2b3d64c3d1b4fac63097416e9bee601ddd9431d95d0f74672b89950894a485e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3d64c3d1b4fac63097416e9bee601ddd9431d95d0f74672b89950894a485e4->enter($__internal_2b3d64c3d1b4fac63097416e9bee601ddd9431d95d0f74672b89950894a485e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2b3d64c3d1b4fac63097416e9bee601ddd9431d95d0f74672b89950894a485e4->leave($__internal_2b3d64c3d1b4fac63097416e9bee601ddd9431d95d0f74672b89950894a485e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
