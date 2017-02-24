<?php

/* base.html.twig */
class __TwigTemplate_9c30c8caa2190cce6b3efcb71a12791a2b2b712595fca4d30ad168687eccaf21 extends Twig_Template
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
        $__internal_7d1296053573c523a62cc6fbbf481bb949ddada68b61d4b9dd2e358df675cd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1296053573c523a62cc6fbbf481bb949ddada68b61d4b9dd2e358df675cd9e->enter($__internal_7d1296053573c523a62cc6fbbf481bb949ddada68b61d4b9dd2e358df675cd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7d1296053573c523a62cc6fbbf481bb949ddada68b61d4b9dd2e358df675cd9e->leave($__internal_7d1296053573c523a62cc6fbbf481bb949ddada68b61d4b9dd2e358df675cd9e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_374cbe3a659022619709b27682713ee794521fe4318245756663a3420e41458c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374cbe3a659022619709b27682713ee794521fe4318245756663a3420e41458c->enter($__internal_374cbe3a659022619709b27682713ee794521fe4318245756663a3420e41458c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_374cbe3a659022619709b27682713ee794521fe4318245756663a3420e41458c->leave($__internal_374cbe3a659022619709b27682713ee794521fe4318245756663a3420e41458c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ebec69d2e1ab747680891890ee5a7178f94b48988ebbf141e78ce892e53c819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebec69d2e1ab747680891890ee5a7178f94b48988ebbf141e78ce892e53c819->enter($__internal_2ebec69d2e1ab747680891890ee5a7178f94b48988ebbf141e78ce892e53c819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ebec69d2e1ab747680891890ee5a7178f94b48988ebbf141e78ce892e53c819->leave($__internal_2ebec69d2e1ab747680891890ee5a7178f94b48988ebbf141e78ce892e53c819_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b359b1e308fcf41740d262ad2f4fd7852126a00c14a1b9b7210f19a8c9672e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b359b1e308fcf41740d262ad2f4fd7852126a00c14a1b9b7210f19a8c9672e40->enter($__internal_b359b1e308fcf41740d262ad2f4fd7852126a00c14a1b9b7210f19a8c9672e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b359b1e308fcf41740d262ad2f4fd7852126a00c14a1b9b7210f19a8c9672e40->leave($__internal_b359b1e308fcf41740d262ad2f4fd7852126a00c14a1b9b7210f19a8c9672e40_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3551f0868a514623f169160b4c7c89830958e33f07bf65122466ce9a29452d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3551f0868a514623f169160b4c7c89830958e33f07bf65122466ce9a29452d57->enter($__internal_3551f0868a514623f169160b4c7c89830958e33f07bf65122466ce9a29452d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3551f0868a514623f169160b4c7c89830958e33f07bf65122466ce9a29452d57->leave($__internal_3551f0868a514623f169160b4c7c89830958e33f07bf65122466ce9a29452d57_prof);

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
