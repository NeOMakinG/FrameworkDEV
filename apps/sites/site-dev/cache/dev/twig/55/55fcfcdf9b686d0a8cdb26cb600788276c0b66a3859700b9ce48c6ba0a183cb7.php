<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2d60e1dd45bc717339c2d22de3455878122b8e3f4047e2a43d5eebdd0cf3e8f1 extends Twig_Template
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
        $__internal_b0da37be1aec62f6351ed196eff83169ef18287e1bf5dee6b5b26637bf4ebe78 = $this->env->getExtension("native_profiler");
        $__internal_b0da37be1aec62f6351ed196eff83169ef18287e1bf5dee6b5b26637bf4ebe78->enter($__internal_b0da37be1aec62f6351ed196eff83169ef18287e1bf5dee6b5b26637bf4ebe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0da37be1aec62f6351ed196eff83169ef18287e1bf5dee6b5b26637bf4ebe78->leave($__internal_b0da37be1aec62f6351ed196eff83169ef18287e1bf5dee6b5b26637bf4ebe78_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a988a16eaa75cdac88da02a9b6e40d5f7019e3761534ee20e22ea3791cfaf267 = $this->env->getExtension("native_profiler");
        $__internal_a988a16eaa75cdac88da02a9b6e40d5f7019e3761534ee20e22ea3791cfaf267->enter($__internal_a988a16eaa75cdac88da02a9b6e40d5f7019e3761534ee20e22ea3791cfaf267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a988a16eaa75cdac88da02a9b6e40d5f7019e3761534ee20e22ea3791cfaf267->leave($__internal_a988a16eaa75cdac88da02a9b6e40d5f7019e3761534ee20e22ea3791cfaf267_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c4b337cc6cb681bd43459e3d147b4713154e2139d1340e684a1c7a8fd3e9590 = $this->env->getExtension("native_profiler");
        $__internal_9c4b337cc6cb681bd43459e3d147b4713154e2139d1340e684a1c7a8fd3e9590->enter($__internal_9c4b337cc6cb681bd43459e3d147b4713154e2139d1340e684a1c7a8fd3e9590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c4b337cc6cb681bd43459e3d147b4713154e2139d1340e684a1c7a8fd3e9590->leave($__internal_9c4b337cc6cb681bd43459e3d147b4713154e2139d1340e684a1c7a8fd3e9590_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_100be357f1c0fe743ff05554a36d943bb4350d7ae14eb25f532e7e4ed37c6a74 = $this->env->getExtension("native_profiler");
        $__internal_100be357f1c0fe743ff05554a36d943bb4350d7ae14eb25f532e7e4ed37c6a74->enter($__internal_100be357f1c0fe743ff05554a36d943bb4350d7ae14eb25f532e7e4ed37c6a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_100be357f1c0fe743ff05554a36d943bb4350d7ae14eb25f532e7e4ed37c6a74->leave($__internal_100be357f1c0fe743ff05554a36d943bb4350d7ae14eb25f532e7e4ed37c6a74_prof);

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
