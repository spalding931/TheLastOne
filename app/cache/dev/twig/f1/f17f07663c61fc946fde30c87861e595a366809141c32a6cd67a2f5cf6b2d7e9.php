<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_812142ca42ebe908b6249acc3ce2cefdeb619a61e0982ad47f15825197a1786e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_2b4323a1a46e51c68462dc95e18a471970ee9a576df8b4e6e8decaac1862cb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4323a1a46e51c68462dc95e18a471970ee9a576df8b4e6e8decaac1862cb88->enter($__internal_2b4323a1a46e51c68462dc95e18a471970ee9a576df8b4e6e8decaac1862cb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b4323a1a46e51c68462dc95e18a471970ee9a576df8b4e6e8decaac1862cb88->leave($__internal_2b4323a1a46e51c68462dc95e18a471970ee9a576df8b4e6e8decaac1862cb88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1c140fbbe7a1129d1742a48236632d465a0f18b5cc4d85a3e9ad607a085351f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c140fbbe7a1129d1742a48236632d465a0f18b5cc4d85a3e9ad607a085351f->enter($__internal_a1c140fbbe7a1129d1742a48236632d465a0f18b5cc4d85a3e9ad607a085351f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a1c140fbbe7a1129d1742a48236632d465a0f18b5cc4d85a3e9ad607a085351f->leave($__internal_a1c140fbbe7a1129d1742a48236632d465a0f18b5cc4d85a3e9ad607a085351f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c805594dc8a933d030a18f01d80b977d2f93bc0272ed0b0b93e71b28532ef7c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c805594dc8a933d030a18f01d80b977d2f93bc0272ed0b0b93e71b28532ef7c0->enter($__internal_c805594dc8a933d030a18f01d80b977d2f93bc0272ed0b0b93e71b28532ef7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c805594dc8a933d030a18f01d80b977d2f93bc0272ed0b0b93e71b28532ef7c0->leave($__internal_c805594dc8a933d030a18f01d80b977d2f93bc0272ed0b0b93e71b28532ef7c0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_54b777eb3a3a12358ee11708dd364cc5e8891b9bcb9624edea54d97dd4f376ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b777eb3a3a12358ee11708dd364cc5e8891b9bcb9624edea54d97dd4f376ec->enter($__internal_54b777eb3a3a12358ee11708dd364cc5e8891b9bcb9624edea54d97dd4f376ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_54b777eb3a3a12358ee11708dd364cc5e8891b9bcb9624edea54d97dd4f376ec->leave($__internal_54b777eb3a3a12358ee11708dd364cc5e8891b9bcb9624edea54d97dd4f376ec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
