<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_a82dc9ed0a3234e9b020b9d99b60ea5afc6e984f2ec702e2d8be3db36a70983b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1557fe7d5bf88f4118f6ccb9a4d61f8f34aa8ff601f6fc65419036f32793d970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1557fe7d5bf88f4118f6ccb9a4d61f8f34aa8ff601f6fc65419036f32793d970->enter($__internal_1557fe7d5bf88f4118f6ccb9a4d61f8f34aa8ff601f6fc65419036f32793d970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "        <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
            ";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<div>
    ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_1557fe7d5bf88f4118f6ccb9a4d61f8f34aa8ff601f6fc65419036f32793d970->leave($__internal_1557fe7d5bf88f4118f6ccb9a4d61f8f34aa8ff601f6fc65419036f32793d970_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dd5f674f80cdb274c533735ccc8104b4a5342f9c87210f288cba29043acce85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd5f674f80cdb274c533735ccc8104b4a5342f9c87210f288cba29043acce85->enter($__internal_5dd5f674f80cdb274c533735ccc8104b4a5342f9c87210f288cba29043acce85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "    ";
        
        $__internal_5dd5f674f80cdb274c533735ccc8104b4a5342f9c87210f288cba29043acce85->leave($__internal_5dd5f674f80cdb274c533735ccc8104b4a5342f9c87210f288cba29043acce85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  67 => 11,  59 => 13,  57 => 11,  53 => 9,  40 => 5,  35 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% for type, messages in app.session.flashBag.all %}
    {% for message in messages %}
        <div class=\"{{ type }}\">
            {{ message|trans({}, 'FOSUserBundle') }}
        </div>
    {% endfor %}
{% endfor %}

<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
", "FOSUserBundle::layout.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
