<?php

/* base.html.twig */
class __TwigTemplate_89475fe470135b9fea8004ff7d9a66eca2d8e32ec4de7c8e8a1f6647d29bcf1a extends Twig_Template
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
        $__internal_01ac0436bcaada6f5d21feda8d54d45a74b5b6f6eea129e5252d348f5273db7b = $this->env->getExtension("native_profiler");
        $__internal_01ac0436bcaada6f5d21feda8d54d45a74b5b6f6eea129e5252d348f5273db7b->enter($__internal_01ac0436bcaada6f5d21feda8d54d45a74b5b6f6eea129e5252d348f5273db7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_01ac0436bcaada6f5d21feda8d54d45a74b5b6f6eea129e5252d348f5273db7b->leave($__internal_01ac0436bcaada6f5d21feda8d54d45a74b5b6f6eea129e5252d348f5273db7b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da74f4d707f3fd31ce346d70194fb5c834554f0957fb3ceb91bb904f362eba0d = $this->env->getExtension("native_profiler");
        $__internal_da74f4d707f3fd31ce346d70194fb5c834554f0957fb3ceb91bb904f362eba0d->enter($__internal_da74f4d707f3fd31ce346d70194fb5c834554f0957fb3ceb91bb904f362eba0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da74f4d707f3fd31ce346d70194fb5c834554f0957fb3ceb91bb904f362eba0d->leave($__internal_da74f4d707f3fd31ce346d70194fb5c834554f0957fb3ceb91bb904f362eba0d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0be8d8ac939c11474cc068702a02cc931c44fc944f2fa1cbb7b455e2b677e14c = $this->env->getExtension("native_profiler");
        $__internal_0be8d8ac939c11474cc068702a02cc931c44fc944f2fa1cbb7b455e2b677e14c->enter($__internal_0be8d8ac939c11474cc068702a02cc931c44fc944f2fa1cbb7b455e2b677e14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0be8d8ac939c11474cc068702a02cc931c44fc944f2fa1cbb7b455e2b677e14c->leave($__internal_0be8d8ac939c11474cc068702a02cc931c44fc944f2fa1cbb7b455e2b677e14c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cd1c427321a1e3b5ae7d849bf8a4cb03a15d1e36b0bcd326590dedd9172a704 = $this->env->getExtension("native_profiler");
        $__internal_2cd1c427321a1e3b5ae7d849bf8a4cb03a15d1e36b0bcd326590dedd9172a704->enter($__internal_2cd1c427321a1e3b5ae7d849bf8a4cb03a15d1e36b0bcd326590dedd9172a704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2cd1c427321a1e3b5ae7d849bf8a4cb03a15d1e36b0bcd326590dedd9172a704->leave($__internal_2cd1c427321a1e3b5ae7d849bf8a4cb03a15d1e36b0bcd326590dedd9172a704_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62c97a9e6ec8f348987af910da0b783e076a224a413d9dbcb47b4adb5ba2fb38 = $this->env->getExtension("native_profiler");
        $__internal_62c97a9e6ec8f348987af910da0b783e076a224a413d9dbcb47b4adb5ba2fb38->enter($__internal_62c97a9e6ec8f348987af910da0b783e076a224a413d9dbcb47b4adb5ba2fb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_62c97a9e6ec8f348987af910da0b783e076a224a413d9dbcb47b4adb5ba2fb38->leave($__internal_62c97a9e6ec8f348987af910da0b783e076a224a413d9dbcb47b4adb5ba2fb38_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
