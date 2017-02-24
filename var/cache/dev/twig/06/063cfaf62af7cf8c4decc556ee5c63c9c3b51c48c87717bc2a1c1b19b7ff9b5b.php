<?php

/* post/show.html.twig */
class __TwigTemplate_7701dd47391f7ba8bdba7fbc9b333d35655f13f1820f9a93ffe467b66d20590e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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
        $__internal_433d8f54c9c9bc3a671e9c8746e922058079dff5c6f8bee09affeba440176558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433d8f54c9c9bc3a671e9c8746e922058079dff5c6f8bee09affeba440176558->enter($__internal_433d8f54c9c9bc3a671e9c8746e922058079dff5c6f8bee09affeba440176558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433d8f54c9c9bc3a671e9c8746e922058079dff5c6f8bee09affeba440176558->leave($__internal_433d8f54c9c9bc3a671e9c8746e922058079dff5c6f8bee09affeba440176558_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9248f2312cf784bc96ec7dac0c32befe5b06a0e45a478aae41baa86d0e4203aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9248f2312cf784bc96ec7dac0c32befe5b06a0e45a478aae41baa86d0e4203aa->enter($__internal_9248f2312cf784bc96ec7dac0c32befe5b06a0e45a478aae41baa86d0e4203aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resume</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "resume", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>File</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "file", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>User</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creation</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9248f2312cf784bc96ec7dac0c32befe5b06a0e45a478aae41baa86d0e4203aa->leave($__internal_9248f2312cf784bc96ec7dac0c32befe5b06a0e45a478aae41baa86d0e4203aa_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  114 => 47,  108 => 44,  102 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ post.titre }}</td>
            </tr>
            <tr>
                <th>Resume</th>
                <td>{{ post.resume }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ post.contenu }}</td>
            </tr>
            <tr>
                <th>File</th>
                <td>{{ post.file }}</td>
            </tr>
            <tr>
                <th>User</th>
                <td>{{ post.user }}</td>
            </tr>
            <tr>
                <th>Creation</th>
                <td>{% if post.creation %}{{ post.creation|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "post/show.html.twig", "/var/www/symfony3/app/Resources/views/post/show.html.twig");
    }
}
