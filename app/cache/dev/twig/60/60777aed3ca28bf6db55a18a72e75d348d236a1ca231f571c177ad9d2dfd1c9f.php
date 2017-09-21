<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_75bfdd138505ccde8c7228a2c24e8e152e6924f4af704d1cff0d1bda07f3ed6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77d38698843a5a22a4785256a071684f1eba70baa9735497abb29a3b987379f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d38698843a5a22a4785256a071684f1eba70baa9735497abb29a3b987379f3->enter($__internal_77d38698843a5a22a4785256a071684f1eba70baa9735497abb29a3b987379f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d38698843a5a22a4785256a071684f1eba70baa9735497abb29a3b987379f3->leave($__internal_77d38698843a5a22a4785256a071684f1eba70baa9735497abb29a3b987379f3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4e686b8c1afb6254c6c6671756e068a6e6442d5ca3d84e5705222ca89ef51ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e686b8c1afb6254c6c6671756e068a6e6442d5ca3d84e5705222ca89ef51ad->enter($__internal_a4e686b8c1afb6254c6c6671756e068a6e6442d5ca3d84e5705222ca89ef51ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a4e686b8c1afb6254c6c6671756e068a6e6442d5ca3d84e5705222ca89ef51ad->leave($__internal_a4e686b8c1afb6254c6c6671756e068a6e6442d5ca3d84e5705222ca89ef51ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
