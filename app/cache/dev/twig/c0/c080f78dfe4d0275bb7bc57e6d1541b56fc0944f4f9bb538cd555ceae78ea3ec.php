<?php

/* base.html.twig */
class __TwigTemplate_31cb31c902ecdaccb9f2e4aeb5d7cc5938bdb0a90364761c8c92383479c3b0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd336dde8fd5a6fb540a2fa6450aed1b5fce4766b58099bc286f6d6766c09e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd336dde8fd5a6fb540a2fa6450aed1b5fce4766b58099bc286f6d6766c09e99->enter($__internal_cd336dde8fd5a6fb540a2fa6450aed1b5fce4766b58099bc286f6d6766c09e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <!-- Metas -->
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>The Last One</title>
        <!-- Style and fonts -->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/css/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">

    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_cd336dde8fd5a6fb540a2fa6450aed1b5fce4766b58099bc286f6d6766c09e99->leave($__internal_cd336dde8fd5a6fb540a2fa6450aed1b5fce4766b58099bc286f6d6766c09e99_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_9834a6471726bf8167fb9afe1f06b4b0993cd1dd96f08eb2bfe2383dd1a8b24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9834a6471726bf8167fb9afe1f06b4b0993cd1dd96f08eb2bfe2383dd1a8b24e->enter($__internal_9834a6471726bf8167fb9afe1f06b4b0993cd1dd96f08eb2bfe2383dd1a8b24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
        ";
        
        $__internal_9834a6471726bf8167fb9afe1f06b4b0993cd1dd96f08eb2bfe2383dd1a8b24e->leave($__internal_9834a6471726bf8167fb9afe1f06b4b0993cd1dd96f08eb2bfe2383dd1a8b24e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d215b088855a338b50fa3d36b5f633dc14b0ca6f841d2af36bda3a7ef6d3e53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d215b088855a338b50fa3d36b5f633dc14b0ca6f841d2af36bda3a7ef6d3e53b->enter($__internal_d215b088855a338b50fa3d36b5f633dc14b0ca6f841d2af36bda3a7ef6d3e53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d215b088855a338b50fa3d36b5f633dc14b0ca6f841d2af36bda3a7ef6d3e53b->leave($__internal_d215b088855a338b50fa3d36b5f633dc14b0ca6f841d2af36bda3a7ef6d3e53b_prof);

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
        return array (  84 => 21,  76 => 16,  70 => 15,  61 => 22,  59 => 21,  55 => 20,  51 => 19,  48 => 18,  46 => 15,  38 => 10,  34 => 9,  24 => 1,);
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
        <!-- Metas -->
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>The Last One</title>
        <!-- Style and fonts -->
        <link href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/vendor/css/stylesheet.css') }}\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">

    </head>
    <body>
        {% block body %}

        {% endblock %}

        <script src=\"{{ asset('assets/vendor/jquery/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/app/Resources/views/base.html.twig");
    }
}
