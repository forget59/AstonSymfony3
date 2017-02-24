<?php

/* IKNSABlogBundle:Blog:index.html.twig */
class __TwigTemplate_102ffe784cdfcd1f23182fab05ba2072074e0a9b48c7051d869dd2881e7c0fe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IKNSABlogBundle::layout.html.twig", "IKNSABlogBundle:Blog:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "IKNSABlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bc7239f0f504c93aaf7604c76b3b8b9ef999d6d1048d1953b93ebc9320b2a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc7239f0f504c93aaf7604c76b3b8b9ef999d6d1048d1953b93ebc9320b2a95->enter($__internal_9bc7239f0f504c93aaf7604c76b3b8b9ef999d6d1048d1953b93ebc9320b2a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bc7239f0f504c93aaf7604c76b3b8b9ef999d6d1048d1953b93ebc9320b2a95->leave($__internal_9bc7239f0f504c93aaf7604c76b3b8b9ef999d6d1048d1953b93ebc9320b2a95_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:Blog:index.html.twig";
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
        return new Twig_Source("{% extends 'IKNSABlogBundle::layout.html.twig' %}", "IKNSABlogBundle:Blog:index.html.twig", "/var/www/symfony3/src/IKNSA/BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
