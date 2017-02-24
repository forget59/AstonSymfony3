<?php

/* IKNSAPostBundle:Default:index.html.twig */
class __TwigTemplate_b52d35d352f8580cd76f3d80fd2831d3b2cd51b3fa48834479d8f6302f8897f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_038c029a32a98361b481ecc8c296b53d5c4e5e8cb9c910bb48781ef8abbe17ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038c029a32a98361b481ecc8c296b53d5c4e5e8cb9c910bb48781ef8abbe17ab->enter($__internal_038c029a32a98361b481ecc8c296b53d5c4e5e8cb9c910bb48781ef8abbe17ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAPostBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_038c029a32a98361b481ecc8c296b53d5c4e5e8cb9c910bb48781ef8abbe17ab->leave($__internal_038c029a32a98361b481ecc8c296b53d5c4e5e8cb9c910bb48781ef8abbe17ab_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAPostBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "IKNSAPostBundle:Default:index.html.twig", "/var/www/symfony3/src/IKNSA/PostBundle/Resources/views/Default/index.html.twig");
    }
}
