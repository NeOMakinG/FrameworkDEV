<?php

/* base.html.twig */
class __TwigTemplate_66bfa73b577531ff6b2c7d99a157b4283d3380a89e33185db926b14328db40d1 extends Twig_Template
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
        $__internal_95c68bbdb6071f6686b6b44f4d05f1409650f1b9bc201d5ebf4b47a462ece58b = $this->env->getExtension("native_profiler");
        $__internal_95c68bbdb6071f6686b6b44f4d05f1409650f1b9bc201d5ebf4b47a462ece58b->enter($__internal_95c68bbdb6071f6686b6b44f4d05f1409650f1b9bc201d5ebf4b47a462ece58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_95c68bbdb6071f6686b6b44f4d05f1409650f1b9bc201d5ebf4b47a462ece58b->leave($__internal_95c68bbdb6071f6686b6b44f4d05f1409650f1b9bc201d5ebf4b47a462ece58b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_14dd4f31e9ab06a393f83d78609f09d26b2ea0fe9cec50b5a5292a572a3aec59 = $this->env->getExtension("native_profiler");
        $__internal_14dd4f31e9ab06a393f83d78609f09d26b2ea0fe9cec50b5a5292a572a3aec59->enter($__internal_14dd4f31e9ab06a393f83d78609f09d26b2ea0fe9cec50b5a5292a572a3aec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_14dd4f31e9ab06a393f83d78609f09d26b2ea0fe9cec50b5a5292a572a3aec59->leave($__internal_14dd4f31e9ab06a393f83d78609f09d26b2ea0fe9cec50b5a5292a572a3aec59_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53f2af318077f23910cc12527662bf8f48d30387426de5a51268367a3970f21b = $this->env->getExtension("native_profiler");
        $__internal_53f2af318077f23910cc12527662bf8f48d30387426de5a51268367a3970f21b->enter($__internal_53f2af318077f23910cc12527662bf8f48d30387426de5a51268367a3970f21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_53f2af318077f23910cc12527662bf8f48d30387426de5a51268367a3970f21b->leave($__internal_53f2af318077f23910cc12527662bf8f48d30387426de5a51268367a3970f21b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_36ebff7ff28849f754530434ba5a5dee82df017abc1a7525d0e0de39a1bba116 = $this->env->getExtension("native_profiler");
        $__internal_36ebff7ff28849f754530434ba5a5dee82df017abc1a7525d0e0de39a1bba116->enter($__internal_36ebff7ff28849f754530434ba5a5dee82df017abc1a7525d0e0de39a1bba116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_36ebff7ff28849f754530434ba5a5dee82df017abc1a7525d0e0de39a1bba116->leave($__internal_36ebff7ff28849f754530434ba5a5dee82df017abc1a7525d0e0de39a1bba116_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbe9bee78672eb1f26282061b186e003ee60e00a34d45a06dc4c1b3e0281d5c1 = $this->env->getExtension("native_profiler");
        $__internal_fbe9bee78672eb1f26282061b186e003ee60e00a34d45a06dc4c1b3e0281d5c1->enter($__internal_fbe9bee78672eb1f26282061b186e003ee60e00a34d45a06dc4c1b3e0281d5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fbe9bee78672eb1f26282061b186e003ee60e00a34d45a06dc4c1b3e0281d5c1->leave($__internal_fbe9bee78672eb1f26282061b186e003ee60e00a34d45a06dc4c1b3e0281d5c1_prof);

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
