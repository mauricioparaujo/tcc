<?php

/* base.html.twig */
class __TwigTemplate_5d62cafbbc88a9fa4cff75ce337df80f884869ab3374bb766fe546606c0b7288 extends Twig_Template
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
        $__internal_b1c528f645f75ed93053303d5981fd1cd7dd24693c39875386d09b0e8600fe97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c528f645f75ed93053303d5981fd1cd7dd24693c39875386d09b0e8600fe97->enter($__internal_b1c528f645f75ed93053303d5981fd1cd7dd24693c39875386d09b0e8600fe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e11f997adae74cc835c2c9fdc115c569137bc6f80841e83dadb98ff3ca7db58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11f997adae74cc835c2c9fdc115c569137bc6f80841e83dadb98ff3ca7db58f->enter($__internal_e11f997adae74cc835c2c9fdc115c569137bc6f80841e83dadb98ff3ca7db58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b1c528f645f75ed93053303d5981fd1cd7dd24693c39875386d09b0e8600fe97->leave($__internal_b1c528f645f75ed93053303d5981fd1cd7dd24693c39875386d09b0e8600fe97_prof);

        
        $__internal_e11f997adae74cc835c2c9fdc115c569137bc6f80841e83dadb98ff3ca7db58f->leave($__internal_e11f997adae74cc835c2c9fdc115c569137bc6f80841e83dadb98ff3ca7db58f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_86a532dc61af26d8ba375b52d4a499aa3096112956dc8a51741d9a494d7a2e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a532dc61af26d8ba375b52d4a499aa3096112956dc8a51741d9a494d7a2e06->enter($__internal_86a532dc61af26d8ba375b52d4a499aa3096112956dc8a51741d9a494d7a2e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64e9a6a2ecb0b773787e11332c1afcd28a7abe1cb24684d73aa2376dc78a231c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e9a6a2ecb0b773787e11332c1afcd28a7abe1cb24684d73aa2376dc78a231c->enter($__internal_64e9a6a2ecb0b773787e11332c1afcd28a7abe1cb24684d73aa2376dc78a231c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_64e9a6a2ecb0b773787e11332c1afcd28a7abe1cb24684d73aa2376dc78a231c->leave($__internal_64e9a6a2ecb0b773787e11332c1afcd28a7abe1cb24684d73aa2376dc78a231c_prof);

        
        $__internal_86a532dc61af26d8ba375b52d4a499aa3096112956dc8a51741d9a494d7a2e06->leave($__internal_86a532dc61af26d8ba375b52d4a499aa3096112956dc8a51741d9a494d7a2e06_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8eee9401927f37c89a4c3555ec0658053ac2936b89b47029eb5500f1a0c66c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eee9401927f37c89a4c3555ec0658053ac2936b89b47029eb5500f1a0c66c8d->enter($__internal_8eee9401927f37c89a4c3555ec0658053ac2936b89b47029eb5500f1a0c66c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_12ebead5c68c1a16403c286168124d5d6d5edaf1352899d2f577d8f92584b61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ebead5c68c1a16403c286168124d5d6d5edaf1352899d2f577d8f92584b61b->enter($__internal_12ebead5c68c1a16403c286168124d5d6d5edaf1352899d2f577d8f92584b61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12ebead5c68c1a16403c286168124d5d6d5edaf1352899d2f577d8f92584b61b->leave($__internal_12ebead5c68c1a16403c286168124d5d6d5edaf1352899d2f577d8f92584b61b_prof);

        
        $__internal_8eee9401927f37c89a4c3555ec0658053ac2936b89b47029eb5500f1a0c66c8d->leave($__internal_8eee9401927f37c89a4c3555ec0658053ac2936b89b47029eb5500f1a0c66c8d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b130ed00d2cd37469c70ac91a4fb15f836e953035523a043a456ccfe8b8d35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b130ed00d2cd37469c70ac91a4fb15f836e953035523a043a456ccfe8b8d35e->enter($__internal_0b130ed00d2cd37469c70ac91a4fb15f836e953035523a043a456ccfe8b8d35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a7b4418a6ed9f727ee9840adc1da0877b25781891bc57560a7c47498adca4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7b4418a6ed9f727ee9840adc1da0877b25781891bc57560a7c47498adca4d2->enter($__internal_2a7b4418a6ed9f727ee9840adc1da0877b25781891bc57560a7c47498adca4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a7b4418a6ed9f727ee9840adc1da0877b25781891bc57560a7c47498adca4d2->leave($__internal_2a7b4418a6ed9f727ee9840adc1da0877b25781891bc57560a7c47498adca4d2_prof);

        
        $__internal_0b130ed00d2cd37469c70ac91a4fb15f836e953035523a043a456ccfe8b8d35e->leave($__internal_0b130ed00d2cd37469c70ac91a4fb15f836e953035523a043a456ccfe8b8d35e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c2582b1519c4761ef56cd1937dda74878041703ac647b06f1f2c78f2e932f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2582b1519c4761ef56cd1937dda74878041703ac647b06f1f2c78f2e932f8c->enter($__internal_4c2582b1519c4761ef56cd1937dda74878041703ac647b06f1f2c78f2e932f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ac27a04fb009790d159232602ed2abcb8dedd3ca8c74ce7b859b4a542f6017c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac27a04fb009790d159232602ed2abcb8dedd3ca8c74ce7b859b4a542f6017c7->enter($__internal_ac27a04fb009790d159232602ed2abcb8dedd3ca8c74ce7b859b4a542f6017c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ac27a04fb009790d159232602ed2abcb8dedd3ca8c74ce7b859b4a542f6017c7->leave($__internal_ac27a04fb009790d159232602ed2abcb8dedd3ca8c74ce7b859b4a542f6017c7_prof);

        
        $__internal_4c2582b1519c4761ef56cd1937dda74878041703ac647b06f1f2c78f2e932f8c->leave($__internal_4c2582b1519c4761ef56cd1937dda74878041703ac647b06f1f2c78f2e932f8c_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
", "base.html.twig", "/home/ec2-user/tcc/app/Resources/views/base.html.twig");
    }
}
