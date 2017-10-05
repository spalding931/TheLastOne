<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_0f763955e2b4e7bfa252bc7ac7510eaaadc1b300f2fb6fcf2a9d1dead7fa739d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_023cd10f9e082de5deb100c5ba9fadffbd2f0bc67f08640841e2506ca4679ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023cd10f9e082de5deb100c5ba9fadffbd2f0bc67f08640841e2506ca4679ae8->enter($__internal_023cd10f9e082de5deb100c5ba9fadffbd2f0bc67f08640841e2506ca4679ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_023cd10f9e082de5deb100c5ba9fadffbd2f0bc67f08640841e2506ca4679ae8->leave($__internal_023cd10f9e082de5deb100c5ba9fadffbd2f0bc67f08640841e2506ca4679ae8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd0d7d0b912fc9f3820ccc042a4276cfdeba5bf07532721a43826b7bb4f25a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0d7d0b912fc9f3820ccc042a4276cfdeba5bf07532721a43826b7bb4f25a17->enter($__internal_cd0d7d0b912fc9f3820ccc042a4276cfdeba5bf07532721a43826b7bb4f25a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <form class=\"form-sign-in\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <input class=\"form-control input-sign-in\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

        <input class=\"form-control input-sign-in\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />

        <label for=\"remember_me\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-default btn-sign-in\">Sign In</button>

    </form>
";
        
        $__internal_cd0d7d0b912fc9f3820ccc042a4276cfdeba5bf07532721a43826b7bb4f25a17->leave($__internal_cd0d7d0b912fc9f3820ccc042a4276cfdeba5bf07532721a43826b7bb4f25a17_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  50 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    <form class=\"form-sign-in\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

        <input class=\"form-control input-sign-in\" placeholder=\"Username\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

        <input class=\"form-control input-sign-in\" placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />

        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>
        <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-default btn-sign-in\">Sign In</button>

    </form>
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
