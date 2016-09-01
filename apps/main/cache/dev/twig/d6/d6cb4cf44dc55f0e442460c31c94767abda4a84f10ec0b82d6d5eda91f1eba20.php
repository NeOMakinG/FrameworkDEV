<?php

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_17c7986e503afea3decb411599591fd9e003c61f777f086f6db78af40f14e696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "file", array()), $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "line", array()));
            // line 7
            echo "            ";
            if ((isset($context["link"]) ? $context["link"] : null)) {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "file", array()), "html", null, true);
                echo "\">";
            } else {
                echo "<span>";
            }
            // line 8
            echo "
                ";
            // line 9
            echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "class", array()))), "html", null, true);
            // line 11
            if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "method", array())) {
                // line 12
                echo "&nbsp;::&nbsp;";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "method", array()), "html", null, true);
            }
            // line 15
            if ((isset($context["link"]) ? $context["link"] : null)) {
                echo "</a>";
            } else {
                echo "</span>";
            }
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 19
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    ";
        // line 21
        $context["request_status_code_color"] = ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()) >= 400)) ? ("red") : (((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()) >= 300)) ? ("yellow") : ("green"))));
        // line 22
        echo "
    ";
        // line 23
        ob_start();
        // line 24
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) ? $context["request_status_code_color"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()), "html", null, true);
        echo "</span>
        ";
        // line 25
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array())) {
            // line 26
            echo "            <span class=\"sf-toolbar-label\">@</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 29
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
    ";
        // line 31
        ob_start();
        // line 32
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>HTTP status</b>
            <span>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statuscode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "statustext", array()), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Controller</b>
            <span>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) ? $context["request_handler"] : null), "html", null, true);
        echo "</span>
        </div>

        ";
        // line 42
        if ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 43
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Controller class</b>
                <span>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "controller", array()), "class", array()), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 48
        echo "
        <div class=\"sf-toolbar-info-piece\">
            <b>Route name</b>
            <span>";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "route", array()), "NONE")) : ("NONE")), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>Has session</b>
            <span>";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionmetadata", array()))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "
    ";
        // line 60
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null)));
        echo "
";
    }

    // line 63
    public function block_menu($context, array $blocks = array())
    {
        // line 64
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 65
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
    }

    // line 70
    public function block_panel($context, array $blocks = array())
    {
        // line 71
        echo "    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 78
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestquery", array()), "all", array()))) {
            // line 79
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 83
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestquery", array())), false);
            echo "
                ";
        }
        // line 85
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 88
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestrequest", array()), "all", array()))) {
            // line 89
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 93
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestrequest", array())), false);
            echo "
                ";
        }
        // line 95
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 98
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestattributes", array()), "all", array()))) {
            // line 99
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 103
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestattributes", array())), false);
            echo "
                ";
        }
        // line 105
        echo "
                <h3>Cookies</h3>

                ";
        // line 108
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestcookies", array()), "all", array()))) {
            // line 109
            echo "                    <div class=\"empty\">
                        <p>No cookies</p>
                    </div>
                ";
        } else {
            // line 113
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestcookies", array())), false);
            echo "
                ";
        }
        // line 115
        echo "
                <h3>Request Headers</h3>
                ";
        // line 117
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestheaders", array()), "labels" => array(0 => "Header", 1 => "Value")), false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 121
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "content", array()) == false)) {
            // line 122
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif ($this->getAttribute(        // line 125
(isset($context["collector"]) ? $context["collector"] : null), "content", array())) {
            // line 126
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "content", array()), "html", null, true);
            echo "</pre>
                    </div>
                ";
        } else {
            // line 130
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 134
        echo "
                <h3>Server Parameters</h3>
                ";
        // line 136
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "requestserver", array())), false);
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 146
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "responseheaders", array()), "labels" => array(0 => "Header", 1 => "Value")), false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 150
        echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionmetadata", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 156
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionmetadata", array()))) {
            // line 157
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 161
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionmetadata", array())), false);
            echo "
                ";
        }
        // line 163
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 166
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionattributes", array()))) {
            // line 167
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 171
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "sessionattributes", array()), "labels" => array(0 => "Attribute", 1 => "Value")), false);
            echo "
                ";
        }
        // line 173
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 176
        echo ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "flashes", array()))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 182
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "flashes", array()))) {
            // line 183
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 187
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "flashes", array())), false);
            echo "
                ";
        }
        // line 189
        echo "            </div>
        </div>

        ";
        // line 192
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array())) {
            // line 193
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array()), "token", array()))), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array()), "token", array()), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 202
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array()), "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
            echo "
            </div>
        </div>
        ";
        }
        // line 206
        echo "
        ";
        // line 207
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array()))) {
            // line 208
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 209
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array())), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 213
                echo "                    <h3>
                        <a href=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()))), "html", null, true);
                echo "\">";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method"), "html", null, true);
                // line 216
                echo "</a>
                        <small>(token = ";
                // line 217
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "token", array()), "html", null, true);
                echo ")</small>
                    </h3>

                    ";
                // line 220
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", array("bag" => $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array())), false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "            </div>
        </div>
        ";
        }
        // line 225
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 225,  481 => 222,  473 => 220,  467 => 217,  464 => 216,  462 => 215,  459 => 214,  456 => 213,  452 => 212,  446 => 209,  443 => 208,  441 => 207,  438 => 206,  431 => 202,  425 => 199,  421 => 198,  414 => 193,  412 => 192,  407 => 189,  401 => 187,  395 => 183,  393 => 182,  384 => 176,  379 => 173,  373 => 171,  367 => 167,  365 => 166,  360 => 163,  354 => 161,  348 => 157,  346 => 156,  337 => 150,  330 => 146,  317 => 136,  313 => 134,  307 => 130,  301 => 127,  298 => 126,  296 => 125,  291 => 122,  289 => 121,  282 => 117,  278 => 115,  272 => 113,  266 => 109,  264 => 108,  259 => 105,  253 => 103,  247 => 99,  245 => 98,  240 => 95,  234 => 93,  228 => 89,  226 => 88,  221 => 85,  215 => 83,  209 => 79,  207 => 78,  198 => 71,  195 => 70,  187 => 65,  184 => 64,  181 => 63,  175 => 60,  172 => 59,  162 => 56,  154 => 51,  149 => 48,  143 => 45,  139 => 43,  137 => 42,  131 => 39,  121 => 34,  117 => 32,  115 => 31,  112 => 30,  109 => 29,  104 => 27,  101 => 26,  99 => 25,  92 => 24,  90 => 23,  87 => 22,  85 => 21,  82 => 20,  79 => 19,  73 => 17,  70 => 16,  64 => 15,  60 => 12,  58 => 11,  56 => 9,  53 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/*     {% set request_handler %}*/
/*         {% if collector.controller.class is defined %}*/
/*             {% set link = collector.controller.file|file_link(collector.controller.line) %}*/
/*             {% if link %}<a href="{{ link }}" title="{{ collector.controller.file }}">{% else %}<span>{% endif %}*/
/* */
/*                 {{ collector.controller.class|abbr_class|striptags }}*/
/* */
/*                 {%- if collector.controller.method -%}*/
/*                     &nbsp;::&nbsp;{{ collector.controller.method }}*/
/*                 {%- endif -%}*/
/* */
/*             {% if link %}</a>{% else %}</span>{% endif %}*/
/*         {% else %}*/
/*             <span>{{ collector.controller }}</span>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}*/
/* */
/*     {% set icon %}*/
/*         <span class="sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}">{{ collector.statuscode }}</span>*/
/*         {% if collector.route %}*/
/*             <span class="sf-toolbar-label">@</span>*/
/*             <span class="sf-toolbar-value sf-toolbar-info-piece-additional">{{ collector.route }}</span>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>HTTP status</b>*/
/*             <span>{{ collector.statuscode }} {{ collector.statustext }}</span>*/
/*         </div>*/
/* */
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Controller</b>*/
/*             <span>{{ request_handler }}</span>*/
/*         </div>*/
/* */
/*         {% if collector.controller.class is defined %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Controller class</b>*/
/*                 <span>{{ collector.controller.class }}</span>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Route name</b>*/
/*             <span>{{ collector.route|default('NONE') }}</span>*/
/*         </div>*/
/* */
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Has session</b>*/
/*             <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/request.svg') }}</span>*/
/*         <strong>Request / Response</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <div class="sf-tabs">*/
/*         <div class="tab">*/
/*             <h3 class="tab-title">Request</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>GET Parameters</h3>*/
/* */
/*                 {% if collector.requestquery.all is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No GET parameters</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>POST Parameters</h3>*/
/* */
/*                 {% if collector.requestrequest.all is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No POST parameters</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>Request Attributes</h3>*/
/* */
/*                 {% if collector.requestattributes.all is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No attributes</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>Cookies</h3>*/
/* */
/*                 {% if collector.requestcookies.all is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No cookies</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>Request Headers</h3>*/
/*                 {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'] }, with_context = false) }}*/
/* */
/*                 <h3>Request Content</h3>*/
/* */
/*                 {% if collector.content == false %}*/
/*                     <div class="empty">*/
/*                         <p>Request content not available (it was retrieved as a resource).</p>*/
/*                     </div>*/
/*                 {% elseif collector.content %}*/
/*                     <div class="card">*/
/*                         <pre class="break-long-words">{{ collector.content }}</pre>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     <div class="empty">*/
/*                         <p>No content</p>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <h3>Server Parameters</h3>*/
/*                 {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestserver }, with_context = false) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="tab">*/
/*             <h3 class="tab-title">Response</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>Response Headers</h3>*/
/* */
/*                 {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'] }, with_context = false) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="tab {{ collector.sessionmetadata is empty ? 'disabled' }}">*/
/*             <h3 class="tab-title">Session</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>Session Metadata</h3>*/
/* */
/*                 {% if collector.sessionmetadata is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No session metadata</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}*/
/*                 {% endif %}*/
/* */
/*                 <h3>Session Attributes</h3>*/
/* */
/*                 {% if collector.sessionattributes is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No session attributes</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="tab {{ collector.flashes is empty ? 'disabled' }}">*/
/*             <h3 class="tab-title">Flashes</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>Flashes</h3>*/
/* */
/*                 {% if collector.flashes is empty %}*/
/*                     <div class="empty">*/
/*                         <p>No flash messages were created.</p>*/
/*                     </div>*/
/*                 {% else %}*/
/*                     {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% if profile.parent %}*/
/*         <div class="tab">*/
/*             <h3 class="tab-title">Parent Request</h3>*/
/* */
/*             <div class="tab-content">*/
/*                 <h3>*/
/*                     <a href="{{ path('_profiler', { token: profile.parent.token }) }}">Return to parent request</a>*/
/*                     <small>(token = {{ profile.parent.token }})</small>*/
/*                 </h3>*/
/* */
/*                 {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if profile.children|length %}*/
/*         <div class="tab">*/
/*             <h3 class="tab-title">Sub Requests <span class="badge">{{ profile.children|length }}</span></h3>*/
/* */
/*             <div class="tab-content">*/
/*                 {% for child in profile.children %}*/
/*                     <h3>*/
/*                         <a href="{{ path('_profiler', { token: child.token }) }}">*/
/*                             {{- child.getcollector('request').requestattributes.get('_controller') -}}*/
/*                         </a>*/
/*                         <small>(token = {{ child.token }})</small>*/
/*                     </h3>*/
/* */
/*                     {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
