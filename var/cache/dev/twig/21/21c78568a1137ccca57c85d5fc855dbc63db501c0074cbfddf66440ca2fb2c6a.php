<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f53598199cc3172408221a89a9eac1511d4f127300a5f528a0185e5de92d91d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_779061dcc6d3cd69697a931140d7ab74ff634f42120f2e367554bf92cc0e6274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779061dcc6d3cd69697a931140d7ab74ff634f42120f2e367554bf92cc0e6274->enter($__internal_779061dcc6d3cd69697a931140d7ab74ff634f42120f2e367554bf92cc0e6274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7f0edb0fc2f9ffa5bab4d6549483d735ca330d5677f73ad79dd0e5bf1056fd07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0edb0fc2f9ffa5bab4d6549483d735ca330d5677f73ad79dd0e5bf1056fd07->enter($__internal_7f0edb0fc2f9ffa5bab4d6549483d735ca330d5677f73ad79dd0e5bf1056fd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_779061dcc6d3cd69697a931140d7ab74ff634f42120f2e367554bf92cc0e6274->leave($__internal_779061dcc6d3cd69697a931140d7ab74ff634f42120f2e367554bf92cc0e6274_prof);

        
        $__internal_7f0edb0fc2f9ffa5bab4d6549483d735ca330d5677f73ad79dd0e5bf1056fd07->leave($__internal_7f0edb0fc2f9ffa5bab4d6549483d735ca330d5677f73ad79dd0e5bf1056fd07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9fc326bacc71959010a99c36c231ed6ec972ecc7803aa0dd14c8a3cb30841ec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc326bacc71959010a99c36c231ed6ec972ecc7803aa0dd14c8a3cb30841ec3->enter($__internal_9fc326bacc71959010a99c36c231ed6ec972ecc7803aa0dd14c8a3cb30841ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66967573a579ab64105198732126ced8bc86bf08444b393e35fa5fdd8588071d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66967573a579ab64105198732126ced8bc86bf08444b393e35fa5fdd8588071d->enter($__internal_66967573a579ab64105198732126ced8bc86bf08444b393e35fa5fdd8588071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_66967573a579ab64105198732126ced8bc86bf08444b393e35fa5fdd8588071d->leave($__internal_66967573a579ab64105198732126ced8bc86bf08444b393e35fa5fdd8588071d_prof);

        
        $__internal_9fc326bacc71959010a99c36c231ed6ec972ecc7803aa0dd14c8a3cb30841ec3->leave($__internal_9fc326bacc71959010a99c36c231ed6ec972ecc7803aa0dd14c8a3cb30841ec3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07ce6b693a47c21a3888936f1e0db8e867f8b8eb64b8f8a50212f48537a8e992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ce6b693a47c21a3888936f1e0db8e867f8b8eb64b8f8a50212f48537a8e992->enter($__internal_07ce6b693a47c21a3888936f1e0db8e867f8b8eb64b8f8a50212f48537a8e992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2cf16cc5a872809ebbf77386f3293ef43650e279a517bf2193d5083f25263779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf16cc5a872809ebbf77386f3293ef43650e279a517bf2193d5083f25263779->enter($__internal_2cf16cc5a872809ebbf77386f3293ef43650e279a517bf2193d5083f25263779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_2cf16cc5a872809ebbf77386f3293ef43650e279a517bf2193d5083f25263779->leave($__internal_2cf16cc5a872809ebbf77386f3293ef43650e279a517bf2193d5083f25263779_prof);

        
        $__internal_07ce6b693a47c21a3888936f1e0db8e867f8b8eb64b8f8a50212f48537a8e992->leave($__internal_07ce6b693a47c21a3888936f1e0db8e867f8b8eb64b8f8a50212f48537a8e992_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a9ac83cb6a7d5e5248e83a505b5dcc111dda5f36d8d1e3a511e9e2cd41c9ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9ac83cb6a7d5e5248e83a505b5dcc111dda5f36d8d1e3a511e9e2cd41c9ecd->enter($__internal_0a9ac83cb6a7d5e5248e83a505b5dcc111dda5f36d8d1e3a511e9e2cd41c9ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1bb6ac5fc12872de1c32723ebf89f9753b21220ce986c8bf75fc74d1f9459a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb6ac5fc12872de1c32723ebf89f9753b21220ce986c8bf75fc74d1f9459a04->enter($__internal_1bb6ac5fc12872de1c32723ebf89f9753b21220ce986c8bf75fc74d1f9459a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_1bb6ac5fc12872de1c32723ebf89f9753b21220ce986c8bf75fc74d1f9459a04->leave($__internal_1bb6ac5fc12872de1c32723ebf89f9753b21220ce986c8bf75fc74d1f9459a04_prof);

        
        $__internal_0a9ac83cb6a7d5e5248e83a505b5dcc111dda5f36d8d1e3a511e9e2cd41c9ecd->leave($__internal_0a9ac83cb6a7d5e5248e83a505b5dcc111dda5f36d8d1e3a511e9e2cd41c9ecd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ec2-user/tcc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
