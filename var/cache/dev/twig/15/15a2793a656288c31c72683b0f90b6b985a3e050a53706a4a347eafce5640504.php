<?php

/* :post:new.html.twig */
class __TwigTemplate_41026eac1eb938aa7975c2956021d0ac484b07ad69bd19eda922001e028ffff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11cc339f3a227f6da341b63a0f0a4ff138c1e7f24eea60acb501a7eb64eba8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cc339f3a227f6da341b63a0f0a4ff138c1e7f24eea60acb501a7eb64eba8a3->enter($__internal_11cc339f3a227f6da341b63a0f0a4ff138c1e7f24eea60acb501a7eb64eba8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11cc339f3a227f6da341b63a0f0a4ff138c1e7f24eea60acb501a7eb64eba8a3->leave($__internal_11cc339f3a227f6da341b63a0f0a4ff138c1e7f24eea60acb501a7eb64eba8a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_207ec4cf60d37f816b676835448241b001d8cb2d9f1a0f2ae210f6979f0d3acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207ec4cf60d37f816b676835448241b001d8cb2d9f1a0f2ae210f6979f0d3acb->enter($__internal_207ec4cf60d37f816b676835448241b001d8cb2d9f1a0f2ae210f6979f0d3acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_207ec4cf60d37f816b676835448241b001d8cb2d9f1a0f2ae210f6979f0d3acb->leave($__internal_207ec4cf60d37f816b676835448241b001d8cb2d9f1a0f2ae210f6979f0d3acb_prof);

    }

    public function getTemplateName()
    {
        return ":post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":post:new.html.twig", "/var/www/symfony3/app/Resources/views/post/new.html.twig");
    }
}
