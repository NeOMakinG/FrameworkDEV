<?php

/* base.html.twig */
class __TwigTemplate_90d4e02dff0480d2a20a96d5bc5f01a802b0083cbd3339d4f4c7db262a8c87ae extends Twig_Template
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
        $__internal_1654b98f41f588733e241b10291f243613cac8ffaad774ebad35160e203637de = $this->env->getExtension("native_profiler");
        $__internal_1654b98f41f588733e241b10291f243613cac8ffaad774ebad35160e203637de->enter($__internal_1654b98f41f588733e241b10291f243613cac8ffaad774ebad35160e203637de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1654b98f41f588733e241b10291f243613cac8ffaad774ebad35160e203637de->leave($__internal_1654b98f41f588733e241b10291f243613cac8ffaad774ebad35160e203637de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_24d12eb978a2ec2760b34b2563473908d52fb9ea368b5177b85da03d7955b3bd = $this->env->getExtension("native_profiler");
        $__internal_24d12eb978a2ec2760b34b2563473908d52fb9ea368b5177b85da03d7955b3bd->enter($__internal_24d12eb978a2ec2760b34b2563473908d52fb9ea368b5177b85da03d7955b3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_24d12eb978a2ec2760b34b2563473908d52fb9ea368b5177b85da03d7955b3bd->leave($__internal_24d12eb978a2ec2760b34b2563473908d52fb9ea368b5177b85da03d7955b3bd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f1c47e1905280f7e9c68bbdb4093cd12d09c7b022e769793aae6408319a88a5 = $this->env->getExtension("native_profiler");
        $__internal_5f1c47e1905280f7e9c68bbdb4093cd12d09c7b022e769793aae6408319a88a5->enter($__internal_5f1c47e1905280f7e9c68bbdb4093cd12d09c7b022e769793aae6408319a88a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5f1c47e1905280f7e9c68bbdb4093cd12d09c7b022e769793aae6408319a88a5->leave($__internal_5f1c47e1905280f7e9c68bbdb4093cd12d09c7b022e769793aae6408319a88a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b131ae715c901cb907227b3e1ae2275c0a4c70d002fa7cfa1aecea43b50eb38a = $this->env->getExtension("native_profiler");
        $__internal_b131ae715c901cb907227b3e1ae2275c0a4c70d002fa7cfa1aecea43b50eb38a->enter($__internal_b131ae715c901cb907227b3e1ae2275c0a4c70d002fa7cfa1aecea43b50eb38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b131ae715c901cb907227b3e1ae2275c0a4c70d002fa7cfa1aecea43b50eb38a->leave($__internal_b131ae715c901cb907227b3e1ae2275c0a4c70d002fa7cfa1aecea43b50eb38a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2981262addffa37c2a4885c1d8a0a7993629d417ff79cda48d880370afe2596e = $this->env->getExtension("native_profiler");
        $__internal_2981262addffa37c2a4885c1d8a0a7993629d417ff79cda48d880370afe2596e->enter($__internal_2981262addffa37c2a4885c1d8a0a7993629d417ff79cda48d880370afe2596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2981262addffa37c2a4885c1d8a0a7993629d417ff79cda48d880370afe2596e->leave($__internal_2981262addffa37c2a4885c1d8a0a7993629d417ff79cda48d880370afe2596e_prof);

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
