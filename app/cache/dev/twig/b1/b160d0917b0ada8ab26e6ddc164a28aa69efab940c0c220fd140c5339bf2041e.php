<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a3029e753f8820431b3c925af63cdda25e6712d8bda16b3a0492b7992b87c788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16cbf1fa266050d0ec42c97d158c4e991cb06caa469b8edcb8b7cea8c0244866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cbf1fa266050d0ec42c97d158c4e991cb06caa469b8edcb8b7cea8c0244866->enter($__internal_16cbf1fa266050d0ec42c97d158c4e991cb06caa469b8edcb8b7cea8c0244866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "
<form class=\"form-sign-in\" action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control input-sign-up", "placeholder" => "Email", "required" => "required")));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control input-sign-up", "placeholder" => "Username", "required" => "required")));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control input-sign-up", "placeholder" => "Password", "required" => "required")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control input-sign-up", "placeholder" => "Retype password", "required" => "required")));
        echo "
    <div class=\"center\">
        <input class=\"btn btn-default btn-sign-up\" type=\"submit\" value=\"Sign Up\" />
    </div>

    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</form>
";
        
        $__internal_16cbf1fa266050d0ec42c97d158c4e991cb06caa469b8edcb8b7cea8c0244866->leave($__internal_16cbf1fa266050d0ec42c97d158c4e991cb06caa469b8edcb8b7cea8c0244866_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
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
<form class=\"form-sign-in\" action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\" class=\"form-horizontal\">
    {{ form_start(form) }}
    {{ form_widget(form.email,{'attr': {'class': 'form-control input-sign-up', 'placeholder': 'Email', 'required': 'required'}}) }}
    {{ form_widget(form.username,{'attr': {'class': 'form-control input-sign-up', 'placeholder': 'Username', 'required': 'required'}}) }}
    {{ form_widget(form.plainPassword.first,{'attr': {'class': 'form-control input-sign-up', 'placeholder': 'Password', 'required': 'required'}}) }}
    {{ form_widget(form.plainPassword.second,{'attr': {'class': 'form-control input-sign-up', 'placeholder': 'Retype password', 'required': 'required'}}) }}
    <div class=\"center\">
        <input class=\"btn btn-default btn-sign-up\" type=\"submit\" value=\"Sign Up\" />
    </div>

    {{ form_end(form) }}
</form>
", "FOSUserBundle:Registration:register_content.html.twig", "/Users/bouthoukinea/Documents/school/TheLastOne/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
