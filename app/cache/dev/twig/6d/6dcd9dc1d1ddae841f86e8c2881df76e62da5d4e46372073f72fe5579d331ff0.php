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
        $__internal_0405f4ce49bec2bc32d2f18804409c462e28bfe7527a05a13c337db37ccbb7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0405f4ce49bec2bc32d2f18804409c462e28bfe7527a05a13c337db37ccbb7f2->enter($__internal_0405f4ce49bec2bc32d2f18804409c462e28bfe7527a05a13c337db37ccbb7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0405f4ce49bec2bc32d2f18804409c462e28bfe7527a05a13c337db37ccbb7f2->leave($__internal_0405f4ce49bec2bc32d2f18804409c462e28bfe7527a05a13c337db37ccbb7f2_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff95fdeba86e4d309c452ce2b5bfc148263a2478a4a6285a0cf638c8a6107e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff95fdeba86e4d309c452ce2b5bfc148263a2478a4a6285a0cf638c8a6107e1d->enter($__internal_ff95fdeba86e4d309c452ce2b5bfc148263a2478a4a6285a0cf638c8a6107e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
        ";
        
        $__internal_ff95fdeba86e4d309c452ce2b5bfc148263a2478a4a6285a0cf638c8a6107e1d->leave($__internal_ff95fdeba86e4d309c452ce2b5bfc148263a2478a4a6285a0cf638c8a6107e1d_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06ff91cdb729b55358f7c0ab20e5c6f8b023649e865db974a01a8bde4546b5bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ff91cdb729b55358f7c0ab20e5c6f8b023649e865db974a01a8bde4546b5bb->enter($__internal_06ff91cdb729b55358f7c0ab20e5c6f8b023649e865db974a01a8bde4546b5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06ff91cdb729b55358f7c0ab20e5c6f8b023649e865db974a01a8bde4546b5bb->leave($__internal_06ff91cdb729b55358f7c0ab20e5c6f8b023649e865db974a01a8bde4546b5bb_prof);

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
