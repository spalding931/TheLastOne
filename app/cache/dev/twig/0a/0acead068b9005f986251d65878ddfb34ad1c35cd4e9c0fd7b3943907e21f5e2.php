<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_cd8674e4ab203af8ca42cadeb9e60cb11a383bbeadcb461f34fba5c2703cdf33 extends Twig_Template
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
        $__internal_94553f96a3d0e3f0af4f51318ac041211da66a019fcd0d1d413c75c276acdaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94553f96a3d0e3f0af4f51318ac041211da66a019fcd0d1d413c75c276acdaa3->enter($__internal_94553f96a3d0e3f0af4f51318ac041211da66a019fcd0d1d413c75c276acdaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94553f96a3d0e3f0af4f51318ac041211da66a019fcd0d1d413c75c276acdaa3->leave($__internal_94553f96a3d0e3f0af4f51318ac041211da66a019fcd0d1d413c75c276acdaa3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2ac407f15fcfcbd26af2e3f317053593433a5385d2d8736f0df10d2602902ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ac407f15fcfcbd26af2e3f317053593433a5385d2d8736f0df10d2602902ae->enter($__internal_e2ac407f15fcfcbd26af2e3f317053593433a5385d2d8736f0df10d2602902ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e2ac407f15fcfcbd26af2e3f317053593433a5385d2d8736f0df10d2602902ae->leave($__internal_e2ac407f15fcfcbd26af2e3f317053593433a5385d2d8736f0df10d2602902ae_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/thelastone/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
