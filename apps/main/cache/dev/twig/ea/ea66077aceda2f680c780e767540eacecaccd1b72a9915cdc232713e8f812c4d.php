<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_51f6d0c4971779eece53c2fd3b191fa307843ebf35fa160b1cd886813100b0b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_707378553e31057085e86f6afc9495372963f4cc7320f3ef5d8eff701a611791 = $this->env->getExtension("native_profiler");
        $__internal_707378553e31057085e86f6afc9495372963f4cc7320f3ef5d8eff701a611791->enter($__internal_707378553e31057085e86f6afc9495372963f4cc7320f3ef5d8eff701a611791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707378553e31057085e86f6afc9495372963f4cc7320f3ef5d8eff701a611791->leave($__internal_707378553e31057085e86f6afc9495372963f4cc7320f3ef5d8eff701a611791_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_512f578101d7d9e1d424ab241015ff65f58804e995fa940d8c3059875d1b467c = $this->env->getExtension("native_profiler");
        $__internal_512f578101d7d9e1d424ab241015ff65f58804e995fa940d8c3059875d1b467c->enter($__internal_512f578101d7d9e1d424ab241015ff65f58804e995fa940d8c3059875d1b467c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_512f578101d7d9e1d424ab241015ff65f58804e995fa940d8c3059875d1b467c->leave($__internal_512f578101d7d9e1d424ab241015ff65f58804e995fa940d8c3059875d1b467c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5602e22c0b4f3de3a491a8affec924fb63fce7fa017cc5d25909275a7644cd7a = $this->env->getExtension("native_profiler");
        $__internal_5602e22c0b4f3de3a491a8affec924fb63fce7fa017cc5d25909275a7644cd7a->enter($__internal_5602e22c0b4f3de3a491a8affec924fb63fce7fa017cc5d25909275a7644cd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5602e22c0b4f3de3a491a8affec924fb63fce7fa017cc5d25909275a7644cd7a->leave($__internal_5602e22c0b4f3de3a491a8affec924fb63fce7fa017cc5d25909275a7644cd7a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc8ae21281969befcc2c36f0e4706ba9b20ce33f90b3c29b8df0c8f79f2a6fe4 = $this->env->getExtension("native_profiler");
        $__internal_dc8ae21281969befcc2c36f0e4706ba9b20ce33f90b3c29b8df0c8f79f2a6fe4->enter($__internal_dc8ae21281969befcc2c36f0e4706ba9b20ce33f90b3c29b8df0c8f79f2a6fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc8ae21281969befcc2c36f0e4706ba9b20ce33f90b3c29b8df0c8f79f2a6fe4->leave($__internal_dc8ae21281969befcc2c36f0e4706ba9b20ce33f90b3c29b8df0c8f79f2a6fe4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
