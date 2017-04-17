<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dae027eb2981f265b54ea1a4e8e6d99771f230f3406bbec133f56678914f8dbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c010c391178716dc6a438e6d89285b15c2f21ed210a95b625f3a47631292c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c010c391178716dc6a438e6d89285b15c2f21ed210a95b625f3a47631292c90->enter($__internal_9c010c391178716dc6a438e6d89285b15c2f21ed210a95b625f3a47631292c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ed2f4dd8e94c19f5adbda0552a557e3f92a86f45ec0070299abb185fcf616f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2f4dd8e94c19f5adbda0552a557e3f92a86f45ec0070299abb185fcf616f1e->enter($__internal_ed2f4dd8e94c19f5adbda0552a557e3f92a86f45ec0070299abb185fcf616f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c010c391178716dc6a438e6d89285b15c2f21ed210a95b625f3a47631292c90->leave($__internal_9c010c391178716dc6a438e6d89285b15c2f21ed210a95b625f3a47631292c90_prof);

        
        $__internal_ed2f4dd8e94c19f5adbda0552a557e3f92a86f45ec0070299abb185fcf616f1e->leave($__internal_ed2f4dd8e94c19f5adbda0552a557e3f92a86f45ec0070299abb185fcf616f1e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_561e483dbe4b18167a0c61ec30edad33c4a4722db0f99211770a23893f1888b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_561e483dbe4b18167a0c61ec30edad33c4a4722db0f99211770a23893f1888b8->enter($__internal_561e483dbe4b18167a0c61ec30edad33c4a4722db0f99211770a23893f1888b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6fc88f12522526a65ab371e3950b3cb0d42f666727b7dd53f57d8f475be72bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fc88f12522526a65ab371e3950b3cb0d42f666727b7dd53f57d8f475be72bd->enter($__internal_c6fc88f12522526a65ab371e3950b3cb0d42f666727b7dd53f57d8f475be72bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6fc88f12522526a65ab371e3950b3cb0d42f666727b7dd53f57d8f475be72bd->leave($__internal_c6fc88f12522526a65ab371e3950b3cb0d42f666727b7dd53f57d8f475be72bd_prof);

        
        $__internal_561e483dbe4b18167a0c61ec30edad33c4a4722db0f99211770a23893f1888b8->leave($__internal_561e483dbe4b18167a0c61ec30edad33c4a4722db0f99211770a23893f1888b8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36bf647e09a41a5fd783795ae42fcec417f70439aaacc5f0f0401bb5981d0a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36bf647e09a41a5fd783795ae42fcec417f70439aaacc5f0f0401bb5981d0a7d->enter($__internal_36bf647e09a41a5fd783795ae42fcec417f70439aaacc5f0f0401bb5981d0a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0262d9a1aec95696ebee847c2279690976090829dc7d8316c899bc551cf2f3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0262d9a1aec95696ebee847c2279690976090829dc7d8316c899bc551cf2f3dc->enter($__internal_0262d9a1aec95696ebee847c2279690976090829dc7d8316c899bc551cf2f3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0262d9a1aec95696ebee847c2279690976090829dc7d8316c899bc551cf2f3dc->leave($__internal_0262d9a1aec95696ebee847c2279690976090829dc7d8316c899bc551cf2f3dc_prof);

        
        $__internal_36bf647e09a41a5fd783795ae42fcec417f70439aaacc5f0f0401bb5981d0a7d->leave($__internal_36bf647e09a41a5fd783795ae42fcec417f70439aaacc5f0f0401bb5981d0a7d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49c6354f190036f8a725c92acdda78d8b73ea2e9e39a782934c6fd7e9576a02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c6354f190036f8a725c92acdda78d8b73ea2e9e39a782934c6fd7e9576a02f->enter($__internal_49c6354f190036f8a725c92acdda78d8b73ea2e9e39a782934c6fd7e9576a02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_296336534c4ecf4144ff6b753bb685e4e159e1e2262b34b6328ce3fc28c4efe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296336534c4ecf4144ff6b753bb685e4e159e1e2262b34b6328ce3fc28c4efe5->enter($__internal_296336534c4ecf4144ff6b753bb685e4e159e1e2262b34b6328ce3fc28c4efe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_296336534c4ecf4144ff6b753bb685e4e159e1e2262b34b6328ce3fc28c4efe5->leave($__internal_296336534c4ecf4144ff6b753bb685e4e159e1e2262b34b6328ce3fc28c4efe5_prof);

        
        $__internal_49c6354f190036f8a725c92acdda78d8b73ea2e9e39a782934c6fd7e9576a02f->leave($__internal_49c6354f190036f8a725c92acdda78d8b73ea2e9e39a782934c6fd7e9576a02f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ec2-user/tcc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
