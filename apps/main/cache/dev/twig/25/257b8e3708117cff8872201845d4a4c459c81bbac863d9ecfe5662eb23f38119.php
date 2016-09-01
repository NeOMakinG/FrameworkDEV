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
        $__internal_9282b45316769778cf7452436e69df4c2cf805de43d9ca95f5aa1dcc53b35d71 = $this->env->getExtension("native_profiler");
        $__internal_9282b45316769778cf7452436e69df4c2cf805de43d9ca95f5aa1dcc53b35d71->enter($__internal_9282b45316769778cf7452436e69df4c2cf805de43d9ca95f5aa1dcc53b35d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9282b45316769778cf7452436e69df4c2cf805de43d9ca95f5aa1dcc53b35d71->leave($__internal_9282b45316769778cf7452436e69df4c2cf805de43d9ca95f5aa1dcc53b35d71_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39908857496b17b4c4643d9b58137d9760f460f203eb55e90f81fe4afbe532c0 = $this->env->getExtension("native_profiler");
        $__internal_39908857496b17b4c4643d9b58137d9760f460f203eb55e90f81fe4afbe532c0->enter($__internal_39908857496b17b4c4643d9b58137d9760f460f203eb55e90f81fe4afbe532c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39908857496b17b4c4643d9b58137d9760f460f203eb55e90f81fe4afbe532c0->leave($__internal_39908857496b17b4c4643d9b58137d9760f460f203eb55e90f81fe4afbe532c0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_682cdb47bb5fd1f9655d00eddb89a60a67d9ed59d99cb903851a7fe0ac5327d7 = $this->env->getExtension("native_profiler");
        $__internal_682cdb47bb5fd1f9655d00eddb89a60a67d9ed59d99cb903851a7fe0ac5327d7->enter($__internal_682cdb47bb5fd1f9655d00eddb89a60a67d9ed59d99cb903851a7fe0ac5327d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_682cdb47bb5fd1f9655d00eddb89a60a67d9ed59d99cb903851a7fe0ac5327d7->leave($__internal_682cdb47bb5fd1f9655d00eddb89a60a67d9ed59d99cb903851a7fe0ac5327d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd26a37cad22b25179d484b1ce08700d35eed6ac64d4db81a1a7502c222f7f5a = $this->env->getExtension("native_profiler");
        $__internal_fd26a37cad22b25179d484b1ce08700d35eed6ac64d4db81a1a7502c222f7f5a->enter($__internal_fd26a37cad22b25179d484b1ce08700d35eed6ac64d4db81a1a7502c222f7f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd26a37cad22b25179d484b1ce08700d35eed6ac64d4db81a1a7502c222f7f5a->leave($__internal_fd26a37cad22b25179d484b1ce08700d35eed6ac64d4db81a1a7502c222f7f5a_prof);

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
