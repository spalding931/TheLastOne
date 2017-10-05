<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_175a2d168c543885bb8e305a1d7cef0ff2921a0fa6c29a899a4f6a048d7e4162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_443bb96c2925d31074af63f8fba492da3b394db09fb2a4026dc7f18b77dd867f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443bb96c2925d31074af63f8fba492da3b394db09fb2a4026dc7f18b77dd867f->enter($__internal_443bb96c2925d31074af63f8fba492da3b394db09fb2a4026dc7f18b77dd867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_443bb96c2925d31074af63f8fba492da3b394db09fb2a4026dc7f18b77dd867f->leave($__internal_443bb96c2925d31074af63f8fba492da3b394db09fb2a4026dc7f18b77dd867f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d75076ee208b869246dc81cfc7e634c4b366d3bbd366d39c244b2ac0dd934408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75076ee208b869246dc81cfc7e634c4b366d3bbd366d39c244b2ac0dd934408->enter($__internal_d75076ee208b869246dc81cfc7e634c4b366d3bbd366d39c244b2ac0dd934408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d75076ee208b869246dc81cfc7e634c4b366d3bbd366d39c244b2ac0dd934408->leave($__internal_d75076ee208b869246dc81cfc7e634c4b366d3bbd366d39c244b2ac0dd934408_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
