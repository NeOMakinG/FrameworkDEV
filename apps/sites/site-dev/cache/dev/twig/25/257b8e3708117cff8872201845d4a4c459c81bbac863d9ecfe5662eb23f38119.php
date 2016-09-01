<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5e9b56f3b244a86b94a7eece19fc01ed78f07db2cbed16f27cf1fdbf901d6751 extends Twig_Template
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
        $__internal_a2646bf68e02862041e62b301b40c0ac4b1955422891087176087a9b5c7c1c1a = $this->env->getExtension("native_profiler");
        $__internal_a2646bf68e02862041e62b301b40c0ac4b1955422891087176087a9b5c7c1c1a->enter($__internal_a2646bf68e02862041e62b301b40c0ac4b1955422891087176087a9b5c7c1c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2646bf68e02862041e62b301b40c0ac4b1955422891087176087a9b5c7c1c1a->leave($__internal_a2646bf68e02862041e62b301b40c0ac4b1955422891087176087a9b5c7c1c1a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_517efbb7ac44b1003c72d0e00dcf5d6bed35f1210005e6c28d184334579bf4c2 = $this->env->getExtension("native_profiler");
        $__internal_517efbb7ac44b1003c72d0e00dcf5d6bed35f1210005e6c28d184334579bf4c2->enter($__internal_517efbb7ac44b1003c72d0e00dcf5d6bed35f1210005e6c28d184334579bf4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_517efbb7ac44b1003c72d0e00dcf5d6bed35f1210005e6c28d184334579bf4c2->leave($__internal_517efbb7ac44b1003c72d0e00dcf5d6bed35f1210005e6c28d184334579bf4c2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cbbce1069e7beb44183169ebd84a861714df02be4a63389a3756208f47e6469 = $this->env->getExtension("native_profiler");
        $__internal_8cbbce1069e7beb44183169ebd84a861714df02be4a63389a3756208f47e6469->enter($__internal_8cbbce1069e7beb44183169ebd84a861714df02be4a63389a3756208f47e6469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8cbbce1069e7beb44183169ebd84a861714df02be4a63389a3756208f47e6469->leave($__internal_8cbbce1069e7beb44183169ebd84a861714df02be4a63389a3756208f47e6469_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a596e9fc9f054cf6b928d559b52d3cbdd66c4890b3377ae7f7f70cd9fa40b050 = $this->env->getExtension("native_profiler");
        $__internal_a596e9fc9f054cf6b928d559b52d3cbdd66c4890b3377ae7f7f70cd9fa40b050->enter($__internal_a596e9fc9f054cf6b928d559b52d3cbdd66c4890b3377ae7f7f70cd9fa40b050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a596e9fc9f054cf6b928d559b52d3cbdd66c4890b3377ae7f7f70cd9fa40b050->leave($__internal_a596e9fc9f054cf6b928d559b52d3cbdd66c4890b3377ae7f7f70cd9fa40b050_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
