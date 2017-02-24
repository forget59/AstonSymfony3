<?php

/* IKNSABlogBundle::layout.html.twig */
class __TwigTemplate_4f20a276129148652f2593a3a1aaa3744013a0725f09ed7399201f7d0dccb676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/blog.html.twig", "IKNSABlogBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1393f4251b9ba4e80da356f1baa1b104431a5058d78d27d6e89489420dd157aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1393f4251b9ba4e80da356f1baa1b104431a5058d78d27d6e89489420dd157aa->enter($__internal_1393f4251b9ba4e80da356f1baa1b104431a5058d78d27d6e89489420dd157aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1393f4251b9ba4e80da356f1baa1b104431a5058d78d27d6e89489420dd157aa->leave($__internal_1393f4251b9ba4e80da356f1baa1b104431a5058d78d27d6e89489420dd157aa_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/blog.html.twig' %}", "IKNSABlogBundle::layout.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/layout.html.twig");
    }
}
