<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fc56cc03328e3d8df3c43e22f6ef798ff6630e720605144e70a6f675fb162816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0660559d16a1d0f6832174795a23daa2243d02aa2899c3c3f7c3202dd94b10a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0660559d16a1d0f6832174795a23daa2243d02aa2899c3c3f7c3202dd94b10a3->enter($__internal_0660559d16a1d0f6832174795a23daa2243d02aa2899c3c3f7c3202dd94b10a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dcff5bcf8c728944a43a169f4329f4b5b55d31e87c6816f46947ab6602482a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcff5bcf8c728944a43a169f4329f4b5b55d31e87c6816f46947ab6602482a75->enter($__internal_dcff5bcf8c728944a43a169f4329f4b5b55d31e87c6816f46947ab6602482a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0660559d16a1d0f6832174795a23daa2243d02aa2899c3c3f7c3202dd94b10a3->leave($__internal_0660559d16a1d0f6832174795a23daa2243d02aa2899c3c3f7c3202dd94b10a3_prof);

        
        $__internal_dcff5bcf8c728944a43a169f4329f4b5b55d31e87c6816f46947ab6602482a75->leave($__internal_dcff5bcf8c728944a43a169f4329f4b5b55d31e87c6816f46947ab6602482a75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d66fdbdfc9e13b1ded49bc937ed43171e6fa1dea3e5206c8ce4e3392132e827e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66fdbdfc9e13b1ded49bc937ed43171e6fa1dea3e5206c8ce4e3392132e827e->enter($__internal_d66fdbdfc9e13b1ded49bc937ed43171e6fa1dea3e5206c8ce4e3392132e827e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e0654e08ce7f3e635de447203cf32078e66aa8997a59e41d72478303bf78208c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0654e08ce7f3e635de447203cf32078e66aa8997a59e41d72478303bf78208c->enter($__internal_e0654e08ce7f3e635de447203cf32078e66aa8997a59e41d72478303bf78208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e0654e08ce7f3e635de447203cf32078e66aa8997a59e41d72478303bf78208c->leave($__internal_e0654e08ce7f3e635de447203cf32078e66aa8997a59e41d72478303bf78208c_prof);

        
        $__internal_d66fdbdfc9e13b1ded49bc937ed43171e6fa1dea3e5206c8ce4e3392132e827e->leave($__internal_d66fdbdfc9e13b1ded49bc937ed43171e6fa1dea3e5206c8ce4e3392132e827e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/ec2-user/tcc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
