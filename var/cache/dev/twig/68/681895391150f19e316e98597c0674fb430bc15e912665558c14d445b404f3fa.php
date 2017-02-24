<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1c37874738953529b4457236dc462d0685884944bd2295fa25ed56b669b5ee00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48211b4c28c70b394bf3deca98662ec99303c84a81d1dd20faf80cf83f92297b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48211b4c28c70b394bf3deca98662ec99303c84a81d1dd20faf80cf83f92297b->enter($__internal_48211b4c28c70b394bf3deca98662ec99303c84a81d1dd20faf80cf83f92297b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48211b4c28c70b394bf3deca98662ec99303c84a81d1dd20faf80cf83f92297b->leave($__internal_48211b4c28c70b394bf3deca98662ec99303c84a81d1dd20faf80cf83f92297b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee74395e6a873ec4dc2dfe809fd54e9ffe715e3da7867c2237beb45a12cf29e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee74395e6a873ec4dc2dfe809fd54e9ffe715e3da7867c2237beb45a12cf29e8->enter($__internal_ee74395e6a873ec4dc2dfe809fd54e9ffe715e3da7867c2237beb45a12cf29e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ee74395e6a873ec4dc2dfe809fd54e9ffe715e3da7867c2237beb45a12cf29e8->leave($__internal_ee74395e6a873ec4dc2dfe809fd54e9ffe715e3da7867c2237beb45a12cf29e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33f32582430a54e672ad656d909e9cbcfd9ee187d83ea02590bbc44c97ab68e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f32582430a54e672ad656d909e9cbcfd9ee187d83ea02590bbc44c97ab68e3->enter($__internal_33f32582430a54e672ad656d909e9cbcfd9ee187d83ea02590bbc44c97ab68e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33f32582430a54e672ad656d909e9cbcfd9ee187d83ea02590bbc44c97ab68e3->leave($__internal_33f32582430a54e672ad656d909e9cbcfd9ee187d83ea02590bbc44c97ab68e3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3106045613a4744b90e0128f038d5dfb32bd421d900a3afd4b337ae192ae3026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3106045613a4744b90e0128f038d5dfb32bd421d900a3afd4b337ae192ae3026->enter($__internal_3106045613a4744b90e0128f038d5dfb32bd421d900a3afd4b337ae192ae3026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3106045613a4744b90e0128f038d5dfb32bd421d900a3afd4b337ae192ae3026->leave($__internal_3106045613a4744b90e0128f038d5dfb32bd421d900a3afd4b337ae192ae3026_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
