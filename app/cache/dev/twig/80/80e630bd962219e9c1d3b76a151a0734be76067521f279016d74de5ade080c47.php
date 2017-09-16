<?php

/* base.html.twig */
class __TwigTemplate_13f2665cf97097705074f136c02d275818ec853e877157cf5be7093db7eb5b1c extends Twig_Template
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
        $__internal_986b29e272974b6cd72b7bd75f0aae058131b8c91d115175f5ad5df56698b20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986b29e272974b6cd72b7bd75f0aae058131b8c91d115175f5ad5df56698b20f->enter($__internal_986b29e272974b6cd72b7bd75f0aae058131b8c91d115175f5ad5df56698b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_986b29e272974b6cd72b7bd75f0aae058131b8c91d115175f5ad5df56698b20f->leave($__internal_986b29e272974b6cd72b7bd75f0aae058131b8c91d115175f5ad5df56698b20f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1674a15a63376c0ac87554ea0ca54b33df0890da8ea206be703a5121c8bf97a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1674a15a63376c0ac87554ea0ca54b33df0890da8ea206be703a5121c8bf97a7->enter($__internal_1674a15a63376c0ac87554ea0ca54b33df0890da8ea206be703a5121c8bf97a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1674a15a63376c0ac87554ea0ca54b33df0890da8ea206be703a5121c8bf97a7->leave($__internal_1674a15a63376c0ac87554ea0ca54b33df0890da8ea206be703a5121c8bf97a7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_056bf24b46eabefd54d26f89a4e02ae91efe0751e0142525ee21069fc1ff7175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056bf24b46eabefd54d26f89a4e02ae91efe0751e0142525ee21069fc1ff7175->enter($__internal_056bf24b46eabefd54d26f89a4e02ae91efe0751e0142525ee21069fc1ff7175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_056bf24b46eabefd54d26f89a4e02ae91efe0751e0142525ee21069fc1ff7175->leave($__internal_056bf24b46eabefd54d26f89a4e02ae91efe0751e0142525ee21069fc1ff7175_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bff5bb5fba14c6997bbfad392a8daa4abd72aa5433a07295a21cb0e161e13db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bff5bb5fba14c6997bbfad392a8daa4abd72aa5433a07295a21cb0e161e13db->enter($__internal_9bff5bb5fba14c6997bbfad392a8daa4abd72aa5433a07295a21cb0e161e13db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9bff5bb5fba14c6997bbfad392a8daa4abd72aa5433a07295a21cb0e161e13db->leave($__internal_9bff5bb5fba14c6997bbfad392a8daa4abd72aa5433a07295a21cb0e161e13db_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ebc124a7a32377608520a46fc8d85588bd2bd4eed651b2cd3659cb6c3e9e117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebc124a7a32377608520a46fc8d85588bd2bd4eed651b2cd3659cb6c3e9e117->enter($__internal_3ebc124a7a32377608520a46fc8d85588bd2bd4eed651b2cd3659cb6c3e9e117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ebc124a7a32377608520a46fc8d85588bd2bd4eed651b2cd3659cb6c3e9e117->leave($__internal_3ebc124a7a32377608520a46fc8d85588bd2bd4eed651b2cd3659cb6c3e9e117_prof);

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
", "base.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/thelastone/app/Resources/views/base.html.twig");
    }
}
