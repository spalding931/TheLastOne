<?php

/* base.html.twig */
class __TwigTemplate_a737f0a49b3929ec383c9103437e47f02f30a74f938448ead7faff18441324d6 extends Twig_Template
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
        $__internal_db2ee9883495a49c5101a65bc0db3a56c97b5ccf8a200477bc6ef94be681363f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2ee9883495a49c5101a65bc0db3a56c97b5ccf8a200477bc6ef94be681363f->enter($__internal_db2ee9883495a49c5101a65bc0db3a56c97b5ccf8a200477bc6ef94be681363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_db2ee9883495a49c5101a65bc0db3a56c97b5ccf8a200477bc6ef94be681363f->leave($__internal_db2ee9883495a49c5101a65bc0db3a56c97b5ccf8a200477bc6ef94be681363f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_83f4b169e03e33f7a0134a9b9f2fea1cd6e92e6c7a6e838853a28a0b6f933925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83f4b169e03e33f7a0134a9b9f2fea1cd6e92e6c7a6e838853a28a0b6f933925->enter($__internal_83f4b169e03e33f7a0134a9b9f2fea1cd6e92e6c7a6e838853a28a0b6f933925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
        ";
        
        $__internal_83f4b169e03e33f7a0134a9b9f2fea1cd6e92e6c7a6e838853a28a0b6f933925->leave($__internal_83f4b169e03e33f7a0134a9b9f2fea1cd6e92e6c7a6e838853a28a0b6f933925_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d2f1b72a88a96ed9902534c7391864e16d81b848915c24feed437280af8e21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2f1b72a88a96ed9902534c7391864e16d81b848915c24feed437280af8e21a->enter($__internal_1d2f1b72a88a96ed9902534c7391864e16d81b848915c24feed437280af8e21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1d2f1b72a88a96ed9902534c7391864e16d81b848915c24feed437280af8e21a->leave($__internal_1d2f1b72a88a96ed9902534c7391864e16d81b848915c24feed437280af8e21a_prof);

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
