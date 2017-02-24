<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a3a4e325a79834b01e3bc3f22db29d8f2a3c9da12a1385a21d31f5a612604e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_84908f1e493ed02b93de4c0496d9a32ab66e2d1af85ea3f69ef336317bb226d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84908f1e493ed02b93de4c0496d9a32ab66e2d1af85ea3f69ef336317bb226d0->enter($__internal_84908f1e493ed02b93de4c0496d9a32ab66e2d1af85ea3f69ef336317bb226d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84908f1e493ed02b93de4c0496d9a32ab66e2d1af85ea3f69ef336317bb226d0->leave($__internal_84908f1e493ed02b93de4c0496d9a32ab66e2d1af85ea3f69ef336317bb226d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74dca7699c88956293b45914147af9ce4ee74b887ea240a9d198cc90a6645c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74dca7699c88956293b45914147af9ce4ee74b887ea240a9d198cc90a6645c88->enter($__internal_74dca7699c88956293b45914147af9ce4ee74b887ea240a9d198cc90a6645c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_74dca7699c88956293b45914147af9ce4ee74b887ea240a9d198cc90a6645c88->leave($__internal_74dca7699c88956293b45914147af9ce4ee74b887ea240a9d198cc90a6645c88_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
