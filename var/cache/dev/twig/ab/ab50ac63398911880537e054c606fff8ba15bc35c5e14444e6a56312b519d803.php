<?php

/* base.html.twig */
class __TwigTemplate_16a23e782c877cef47f574aedb0825f8bdb2fcf5aed0bf15a527a227eee5d38c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7439a07678fc55920a93c3b8c6db9df13170f6260afd01936717a765158f2216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7439a07678fc55920a93c3b8c6db9df13170f6260afd01936717a765158f2216->enter($__internal_7439a07678fc55920a93c3b8c6db9df13170f6260afd01936717a765158f2216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7439a07678fc55920a93c3b8c6db9df13170f6260afd01936717a765158f2216->leave($__internal_7439a07678fc55920a93c3b8c6db9df13170f6260afd01936717a765158f2216_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa7d31c1ab268676c2d3aaa0fb0b37e84a146dcaace8627e0c4cca37a5cbaa52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7d31c1ab268676c2d3aaa0fb0b37e84a146dcaace8627e0c4cca37a5cbaa52->enter($__internal_aa7d31c1ab268676c2d3aaa0fb0b37e84a146dcaace8627e0c4cca37a5cbaa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aa7d31c1ab268676c2d3aaa0fb0b37e84a146dcaace8627e0c4cca37a5cbaa52->leave($__internal_aa7d31c1ab268676c2d3aaa0fb0b37e84a146dcaace8627e0c4cca37a5cbaa52_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17be944767b66c69c974b19ae39f3198fe5b8d6e589ca5bc0e38ea73056df713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17be944767b66c69c974b19ae39f3198fe5b8d6e589ca5bc0e38ea73056df713->enter($__internal_17be944767b66c69c974b19ae39f3198fe5b8d6e589ca5bc0e38ea73056df713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_17be944767b66c69c974b19ae39f3198fe5b8d6e589ca5bc0e38ea73056df713->leave($__internal_17be944767b66c69c974b19ae39f3198fe5b8d6e589ca5bc0e38ea73056df713_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc903b8b943a4fb17529322b900c22735b8cf9d39afe301ae20efb917c482b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc903b8b943a4fb17529322b900c22735b8cf9d39afe301ae20efb917c482b1->enter($__internal_cbc903b8b943a4fb17529322b900c22735b8cf9d39afe301ae20efb917c482b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cbc903b8b943a4fb17529322b900c22735b8cf9d39afe301ae20efb917c482b1->leave($__internal_cbc903b8b943a4fb17529322b900c22735b8cf9d39afe301ae20efb917c482b1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_299019bbdd716ee58f5f8c7fed2884c85121c6f787052083f23c1cd1382b90e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_299019bbdd716ee58f5f8c7fed2884c85121c6f787052083f23c1cd1382b90e5->enter($__internal_299019bbdd716ee58f5f8c7fed2884c85121c6f787052083f23c1cd1382b90e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_299019bbdd716ee58f5f8c7fed2884c85121c6f787052083f23c1cd1382b90e5->leave($__internal_299019bbdd716ee58f5f8c7fed2884c85121c6f787052083f23c1cd1382b90e5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/symfony3/app/Resources/views/base.html.twig");
    }
}
