<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_448e5b24b9ca089e245b3081b87fe470ef1658bbc73c95651afe003a2920dde1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdfdc841fcdabab22d2c11cf6d339bd99a781f2318fa8b3b77757d596791c701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfdc841fcdabab22d2c11cf6d339bd99a781f2318fa8b3b77757d596791c701->enter($__internal_fdfdc841fcdabab22d2c11cf6d339bd99a781f2318fa8b3b77757d596791c701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdfdc841fcdabab22d2c11cf6d339bd99a781f2318fa8b3b77757d596791c701->leave($__internal_fdfdc841fcdabab22d2c11cf6d339bd99a781f2318fa8b3b77757d596791c701_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d66de7d314cdc8388165c38e564ff978f7f38f08bc11f847144094bc8e2aee52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66de7d314cdc8388165c38e564ff978f7f38f08bc11f847144094bc8e2aee52->enter($__internal_d66de7d314cdc8388165c38e564ff978f7f38f08bc11f847144094bc8e2aee52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d66de7d314cdc8388165c38e564ff978f7f38f08bc11f847144094bc8e2aee52->leave($__internal_d66de7d314cdc8388165c38e564ff978f7f38f08bc11f847144094bc8e2aee52_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9de520b66daa8562fa81417fd505e970346d7f30037dbb15bbc7cc4bd3a373f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9de520b66daa8562fa81417fd505e970346d7f30037dbb15bbc7cc4bd3a373f->enter($__internal_b9de520b66daa8562fa81417fd505e970346d7f30037dbb15bbc7cc4bd3a373f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b9de520b66daa8562fa81417fd505e970346d7f30037dbb15bbc7cc4bd3a373f->leave($__internal_b9de520b66daa8562fa81417fd505e970346d7f30037dbb15bbc7cc4bd3a373f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db023201c3909c5070748705e2248347da2025c058cd62f841309e2949b454b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db023201c3909c5070748705e2248347da2025c058cd62f841309e2949b454b1->enter($__internal_db023201c3909c5070748705e2248347da2025c058cd62f841309e2949b454b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_db023201c3909c5070748705e2248347da2025c058cd62f841309e2949b454b1->leave($__internal_db023201c3909c5070748705e2248347da2025c058cd62f841309e2949b454b1_prof);

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
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
