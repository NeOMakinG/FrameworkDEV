<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_f381686e9f135954a41e6c6423501385815336c2414dad0e6366fedc8f10154f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : null))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            ";
            // line 18
            echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
            echo "
        </a>
    </div>
    <style>
        ";
            // line 22
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar.css.twig", array("position" => (isset($context["position"]) ? $context["position"] : null), "floatable" => true));
            echo "
    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "\" style=\"clear: both; height: 36px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : null));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute(            // line 30
(isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>             // line 31
(isset($context["profiler_url"]) ? $context["profiler_url"] : null), "token" => $this->getAttribute(            // line 32
(isset($context["profile"]) ? $context["profile"] : null), "token", array()), "name" =>             // line 33
$context["name"], "profiler_markup_version" =>             // line 34
(isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : null))), "method"), "html", null, true);
            // line 36
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
    ";
        // line 39
        if (("normal" != (isset($context["position"]) ? $context["position"] : null))) {
            // line 40
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \">
            ";
            // line 47
            echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
            echo "
        </a>
    ";
        }
        // line 50
        echo "</div>
<!-- END of Symfony Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  115 => 47,  109 => 44,  103 => 40,  101 => 39,  98 => 38,  91 => 36,  89 => 34,  88 => 33,  87 => 32,  86 => 31,  85 => 30,  83 => 29,  79 => 28,  75 => 27,  72 => 26,  67 => 24,  62 => 22,  55 => 18,  46 => 12,  42 => 11,  36 => 8,  32 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- START of Symfony Web Debug Toolbar -->*/
/* {% if 'normal' != position %}*/
/*     <div id="sfMiniToolbar-{{ token }}" class="sf-minitoolbar" data-no-turbolink>*/
/*         <a href="javascript:void(0);" title="Show Symfony toolbar" tabindex="-1" accesskey="D" onclick="*/
/*             var elem = this.parentNode;*/
/*             if (elem.style.display == 'none') {*/
/*                 document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'none';*/
/*                 document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'none';*/
/*                 elem.style.display = 'block';*/
/*             } else {*/
/*                 document.getElementById('sfToolbarMainContent-{{ token }}').style.display = 'block';*/
/*                 document.getElementById('sfToolbarClearer-{{ token }}').style.display = 'block';*/
/*                 elem.style.display = 'none'*/
/*             }*/
/* */
/*             Sfjs.setPreference('toolbar/displayState', 'block');*/
/*         ">*/
/*             {{ include('@WebProfiler/Icon/symfony.svg') }}*/
/*         </a>*/
/*     </div>*/
/*     <style>*/
/*         {{ include('@WebProfiler/Profiler/toolbar.css.twig', { 'position': position, 'floatable': true }) }}*/
/*     </style>*/
/*     <div id="sfToolbarClearer-{{ token }}" style="clear: both; height: 36px;"></div>*/
/* {% endif %}*/
/* */
/* <div id="sfToolbarMainContent-{{ token }}" class="sf-toolbarreset clear-fix" data-no-turbolink>*/
/*     {% for name, template in templates %}*/
/*         {{ template.renderblock('toolbar', {*/
/*             'collector': profile.getcollector(name),*/
/*             'profiler_url': profiler_url,*/
/*             'token': profile.token,*/
/*             'name': name,*/
/*             'profiler_markup_version': profiler_markup_version*/
/*           })*/
/*         }}*/
/*     {% endfor %}*/
/* */
/*     {% if 'normal' != position %}*/
/*         <a class="hide-button" title="Close Toolbar" tabindex="-1" accesskey="D" onclick="*/
/*             var p = this.parentNode;*/
/*             p.style.display = 'none';*/
/*             (p.previousElementSibling || p.previousSibling).style.display = 'none';*/
/*             document.getElementById('sfMiniToolbar-{{ token }}').style.display = 'block';*/
/*             Sfjs.setPreference('toolbar/displayState', 'none');*/
/*         ">*/
/*             {{ include('@WebProfiler/Icon/close.svg') }}*/
/*         </a>*/
/*     {% endif %}*/
/* </div>*/
/* <!-- END of Symfony Web Debug Toolbar -->*/
/* */
