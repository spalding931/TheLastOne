<?php

/* default/auth.html.twig */
class __TwigTemplate_b69223ba30f5709804c7976f50cff8a90c9cda892ae94080ceaa59bc824c3cb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/auth.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_222a6445584b3e1bb8844be20be719870176359fce5b5e24fb3baccf73a39edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_222a6445584b3e1bb8844be20be719870176359fce5b5e24fb3baccf73a39edb->enter($__internal_222a6445584b3e1bb8844be20be719870176359fce5b5e24fb3baccf73a39edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/auth.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222a6445584b3e1bb8844be20be719870176359fce5b5e24fb3baccf73a39edb->leave($__internal_222a6445584b3e1bb8844be20be719870176359fce5b5e24fb3baccf73a39edb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c2b34686ca6157bbfced5b996820ff9c7e93530e5b08eee23f80daf67c71e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2b34686ca6157bbfced5b996820ff9c7e93530e5b08eee23f80daf67c71e9b->enter($__internal_0c2b34686ca6157bbfced5b996820ff9c7e93530e5b08eee23f80daf67c71e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Header -->
    <div class=\"header\">

    </div>

    <!-- Body -->
    <div class=\"content-auth\">

    </div>

    <!-- Footer -->
    <div class=\"footer\">

    </div>

";
        
        $__internal_0c2b34686ca6157bbfced5b996820ff9c7e93530e5b08eee23f80daf67c71e9b->leave($__internal_0c2b34686ca6157bbfced5b996820ff9c7e93530e5b08eee23f80daf67c71e9b_prof);

    }

    public function getTemplateName()
    {
        return "default/auth.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <!-- Header -->
    <div class=\"header\">

    </div>

    <!-- Body -->
    <div class=\"content-auth\">

    </div>

    <!-- Footer -->
    <div class=\"footer\">

    </div>

{% endblock %}


", "default/auth.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/app/Resources/views/default/auth.html.twig");
    }
}
