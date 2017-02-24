<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bfc282b9ca3d542b98f9bc584dd01e9bba6ec1e5d156bc181cdfd393e8af68a8 extends Twig_Template
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
        $__internal_01b5e21279484838638c38b121a3f519872d9abff31be4f671543092a48554f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01b5e21279484838638c38b121a3f519872d9abff31be4f671543092a48554f6->enter($__internal_01b5e21279484838638c38b121a3f519872d9abff31be4f671543092a48554f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_01b5e21279484838638c38b121a3f519872d9abff31be4f671543092a48554f6->leave($__internal_01b5e21279484838638c38b121a3f519872d9abff31be4f671543092a48554f6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fee8ca302330f8e6fb7982935bea1dd9fc11d98d8d48523e68f5c447ce96d0d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee8ca302330f8e6fb7982935bea1dd9fc11d98d8d48523e68f5c447ce96d0d1->enter($__internal_fee8ca302330f8e6fb7982935bea1dd9fc11d98d8d48523e68f5c447ce96d0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_fee8ca302330f8e6fb7982935bea1dd9fc11d98d8d48523e68f5c447ce96d0d1->leave($__internal_fee8ca302330f8e6fb7982935bea1dd9fc11d98d8d48523e68f5c447ce96d0d1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ed8c375ce8481038d53a758b3fc76203fd8ebf01dec89407727348134ffe98ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8c375ce8481038d53a758b3fc76203fd8ebf01dec89407727348134ffe98ed->enter($__internal_ed8c375ce8481038d53a758b3fc76203fd8ebf01dec89407727348134ffe98ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ed8c375ce8481038d53a758b3fc76203fd8ebf01dec89407727348134ffe98ed->leave($__internal_ed8c375ce8481038d53a758b3fc76203fd8ebf01dec89407727348134ffe98ed_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b6d6a38a25fa4185475496582cfb88ba2cd999e916c325d836a675eb87e05c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d6a38a25fa4185475496582cfb88ba2cd999e916c325d836a675eb87e05c31->enter($__internal_b6d6a38a25fa4185475496582cfb88ba2cd999e916c325d836a675eb87e05c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6d6a38a25fa4185475496582cfb88ba2cd999e916c325d836a675eb87e05c31->leave($__internal_b6d6a38a25fa4185475496582cfb88ba2cd999e916c325d836a675eb87e05c31_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
