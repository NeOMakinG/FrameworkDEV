<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_3dab2033c26a6bb4196a8cd7a5da091fc6e9b6c913f3217d3bcc8dd3ddbd75f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["helper"] = $this;
        // line 5
        if ( !array_key_exists("colors", $context)) {
            // line 6
            $context["colors"] = array("default" => "#999", "section" => "#444", "event_listener" => "#00B8F5", "event_listener_loading" => "#00B8F5", "template" => "#66CC00", "doctrine" => "#FF6633", "propel" => "#FF6633");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_toolbar($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $context["total_time"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()))) ? (sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "duration", array()))) : ("n/a"));
        // line 19
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()))) ? (sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "inittime", array()))) : ("n/a"));
        // line 20
        echo "    ";
        $context["status_color"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array())) && ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "duration", array()) > 1000))) ? ("yellow") : (""));
        // line 21
        echo "
    ";
        // line 22
        ob_start();
        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["total_time"]) ? $context["total_time"] : null), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        ob_start();
        // line 29
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["total_time"]) ? $context["total_time"] : null), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["initialization_time"]) ? $context["initialization_time"] : null), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
    ";
        // line 39
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null), "status" => (isset($context["status_color"]) ? $context["status_color"] : null)));
        echo "
";
    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        // line 43
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 44
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
    }

    // line 49
    public function block_panel($context, array $blocks = array())
    {
        // line 50
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 54
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "duration", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 59
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "inittime", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 63
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array())) > 0)) {
            // line 64
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 65
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Requests</span>
            </div>

            ";
            // line 69
            $context["subrequests_time"] = 0;
            // line 70
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 71
                echo "                ";
                $context["subrequests_time"] = ((isset($context["subrequests_time"]) ? $context["subrequests_time"] : null) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), "__section__", array()), "duration", array()));
                // line 72
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["subrequests_time"]) ? $context["subrequests_time"] : null), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Requests time</span>
            </div>
        ";
        }
        // line 79
        echo "
        ";
        // line 80
        if ($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "collectors", array()), "memory", array())) {
            // line 81
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 82
            echo twig_escape_filter($this->env, sprintf("%.2f", (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "collectors", array()), "memory", array()), "memory", array()) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 86
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 90
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()))) {
            // line 91
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    ";
        } else {
            // line 95
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
    }

    // line 99
    public function block_panelContent($context, array $blocks = array())
    {
        // line 100
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 107
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array())) {
            // line 108
            echo "        <h3>
            Sub-Request ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method"), "html", null, true);
            echo "
            <small>
                ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "parent", array()), "token", array()), "panel" => "time")), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 115
(isset($context["profile"]) ? $context["profile"] : null), "children", array())) > 0)) {
            // line 116
            echo "        <h3>
            Main Request <small>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 120
        echo "
    ";
        // line 121
        echo $context["helper"]->getdisplay_timeline(("timeline_" . (isset($context["token"]) ? $context["token"] : null)), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()), (isset($context["colors"]) ? $context["colors"] : null));
        echo "

    ";
        // line 123
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array()))) {
            // line 124
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 126
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array())), "html", null, true);
            echo ")</small></h3>

        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array());
                // line 130
                echo "            <h4>
                <a href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>
                <small>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), "__section__", array()), "duration", array()), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 135
                echo $context["helper"]->getdisplay_timeline(("timeline_" . $this->getAttribute($context["child"], "token", array())), (isset($context["events"]) ? $context["events"] : null), (isset($context["colors"]) ? $context["colors"] : null));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "    ";
        }
        // line 138
        echo "
    <script>";
        // line 139
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = ";
        // line 181
        echo twig_jsonencode_filter((isset($context["colors"]) ? $context["colors"] : null));
        echo ",
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 454
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()), "__section__", array()), "endtime", array())), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 456
        echo $context["helper"]->getdump_request_data((isset($context["token"]) ? $context["token"] : null), (isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()), "__section__", array()), "origin", array()));
        echo "

";
        // line 458
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array()))) {
            // line 459
            echo "                ,
";
            // line 460
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 461
                echo $context["helper"]->getdump_request_data($this->getAttribute($context["child"], "token", array()), $context["child"], $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "events", array()), "__section__", array()), "origin", array()));
                echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 464
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 496
        echo "</script>
";
    }

    // line 499
    public function getdump_request_data($__token__ = null, $__profile__ = null, $__events__ = null, $__origin__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $__token__,
            "profile" => $__profile__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 501
            $context["__internal_a3a82fe91c1121284667547f2545b111ba63ff435401d22faecab3bdda9d4920"] = $this;
            // line 502
            echo "                {
                    \"id\": \"";
            // line 503
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : null), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 504
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), "__section__", array()), "origin", array()) - (isset($context["origin"]) ? $context["origin"] : null))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 506
            echo $context["__internal_a3a82fe91c1121284667547f2545b111ba63ff435401d22faecab3bdda9d4920"]->getdump_events((isset($context["events"]) ? $context["events"] : null));
            echo "
                    ]
                }
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 512
    public function getdump_events($__events__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $__events__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 514
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 515
                if (("__section__" != $context["name"])) {
                    // line 516
                    echo "                        {
                            \"name\": \"";
                    // line 517
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 518
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 519
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "origin", array())), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 520
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "starttime", array())), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 521
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "endtime", array())), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 522
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "duration", array())), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 523
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($context["event"], "memory", array()) / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 525
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "periods", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 526
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "starttime", array())), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "endtime", array())), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 528
                    echo "]
                        }";
                    // line 529
                    echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 535
    public function getdisplay_timeline($__id__ = null, $__events__ = null, $__colors__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "events" => $__events__,
            "colors" => $__colors__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 536
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 538
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : null));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 539
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 541
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 542
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  934 => 542,  931 => 541,  920 => 539,  916 => 538,  912 => 536,  898 => 535,  868 => 529,  865 => 528,  846 => 526,  829 => 525,  825 => 523,  821 => 522,  817 => 521,  813 => 520,  809 => 519,  805 => 518,  801 => 517,  798 => 516,  796 => 515,  779 => 514,  767 => 512,  748 => 506,  743 => 504,  739 => 503,  736 => 502,  734 => 501,  719 => 499,  714 => 496,  680 => 464,  662 => 461,  645 => 460,  642 => 459,  640 => 458,  635 => 456,  630 => 454,  354 => 181,  310 => 139,  307 => 138,  304 => 137,  296 => 135,  290 => 132,  284 => 131,  281 => 130,  278 => 129,  274 => 128,  269 => 126,  265 => 124,  263 => 123,  258 => 121,  255 => 120,  249 => 117,  246 => 116,  244 => 115,  238 => 112,  234 => 111,  229 => 109,  226 => 108,  224 => 107,  215 => 100,  212 => 99,  204 => 95,  198 => 91,  196 => 90,  190 => 86,  183 => 82,  180 => 81,  178 => 80,  175 => 79,  168 => 75,  164 => 73,  158 => 72,  155 => 71,  150 => 70,  148 => 69,  141 => 65,  138 => 64,  136 => 63,  129 => 59,  121 => 54,  115 => 50,  112 => 49,  104 => 44,  101 => 43,  98 => 42,  92 => 39,  89 => 38,  83 => 35,  76 => 31,  72 => 29,  70 => 28,  67 => 27,  61 => 24,  56 => 23,  54 => 22,  51 => 21,  48 => 20,  45 => 19,  42 => 18,  39 => 17,  35 => 1,  32 => 6,  30 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* {% if colors is not defined %}*/
/*     {% set colors = {*/
/*         'default':                '#999',*/
/*         'section':                '#444',*/
/*         'event_listener':         '#00B8F5',*/
/*         'event_listener_loading': '#00B8F5',*/
/*         'template':               '#66CC00',*/
/*         'doctrine':               '#FF6633',*/
/*         'propel':                 '#FF6633',*/
/*     } %}*/
/* {% endif %}*/
/* */
/* {% block toolbar %}*/
/*     {% set total_time = collector.events|length ? '%.0f'|format(collector.duration) : 'n/a' %}*/
/*     {% set initialization_time = collector.events|length ? '%.0f'|format(collector.inittime) : 'n/a' %}*/
/*     {% set status_color = collector.events|length and collector.duration > 1000 ? 'yellow' : '' %}*/
/* */
/*     {% set icon %}*/
/*         {{ include('@WebProfiler/Icon/time.svg') }}*/
/*         <span class="sf-toolbar-value">{{ total_time }}</span>*/
/*         <span class="sf-toolbar-label">ms</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Total time</b>*/
/*             <span>{{ total_time }} ms</span>*/
/*         </div>*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <b>Initialization time</b>*/
/*             <span>{{ initialization_time }} ms</span>*/
/*         </div>*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/time.svg') }}</span>*/
/*         <strong>Performance</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Performance metrics</h2>*/
/* */
/*     <div class="metrics">*/
/*         <div class="metric">*/
/*             <span class="value">{{ '%.0f'|format(collector.duration) }} <span class="unit">ms</span></span>*/
/*             <span class="label">Total execution time</span>*/
/*         </div>*/
/* */
/*         <div class="metric">*/
/*             <span class="value">{{ '%.0f'|format(collector.inittime) }} <span class="unit">ms</span></span>*/
/*             <span class="label">Symfony initialization</span>*/
/*         </div>*/
/* */
/*         {% if profile.children|length > 0 %}*/
/*             <div class="metric">*/
/*                 <span class="value">{{ profile.children|length }}</span>*/
/*                 <span class="label">Sub-Requests</span>*/
/*             </div>*/
/* */
/*             {% set subrequests_time = 0 %}*/
/*             {% for child in profile.children %}*/
/*                 {% set subrequests_time = subrequests_time + child.getcollector('time').events.__section__.duration %}*/
/*             {% endfor %}*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ subrequests_time }} <span class="unit">ms</span></span>*/
/*                 <span class="label">Sub-Requests time</span>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% if profile.collectors.memory %}*/
/*             <div class="metric">*/
/*                 <span class="value">{{ '%.2f'|format(profile.collectors.memory.memory / 1024 / 1024) }} <span class="unit">MB</span></span>*/
/*                 <span class="label">Peak memory usage</span>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <h2>Execution timeline</h2>*/
/* */
/*     {% if collector.events is empty %}*/
/*         <div class="empty">*/
/*             <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>*/
/*         </div>*/
/*     {% else %}*/
/*         {{ block('panelContent') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block panelContent %}*/
/*     <form id="timeline-control" action="" method="get">*/
/*         <input type="hidden" name="panel" value="time">*/
/*         <label for="threshold">Threshold</label>*/
/*         <input type="number" size="3" name="threshold" id="threshold" value="3" min="0"> ms*/
/*         <span class="help">(timeline only displays events with a duration longer than this threshold)</span>*/
/*     </form>*/
/* */
/*     {% if profile.parent %}*/
/*         <h3>*/
/*             Sub-Request {{ profile.getcollector('request').requestattributes.get('_controller') }}*/
/*             <small>*/
/*                 {{ collector.events.__section__.duration }} ms*/
/*                 <a class="newline" href="{{ path('_profiler', { token: profile.parent.token, panel: 'time' }) }}">Return to parent request</a>*/
/*             </small>*/
/*         </h3>*/
/*     {% elseif profile.children|length > 0 %}*/
/*         <h3>*/
/*             Main Request <small>{{ collector.events.__section__.duration }} ms</small>*/
/*         </h3>*/
/*     {% endif %}*/
/* */
/*     {{ helper.display_timeline('timeline_' ~ token, collector.events, colors) }}*/
/* */
/*     {% if profile.children|length %}*/
/*         <p class="help">Note: sections with a striped background correspond to sub-requests.</p>*/
/* */
/*         <h3>Sub-requests <small>({{ profile.children|length }})</small></h3>*/
/* */
/*         {% for child in profile.children %}*/
/*             {% set events = child.getcollector('time').events %}*/
/*             <h4>*/
/*                 <a href="{{ path('_profiler', { token: child.token, panel: 'time' }) }}">{{ child.getcollector('request').requestattributes.get('_controller') }}</a>*/
/*                 <small>{{ events.__section__.duration }} ms</small>*/
/*             </h4>*/
/* */
/*             {{ helper.display_timeline('timeline_' ~ child.token, events, colors) }}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     <script>{% autoescape 'js' %}//<![CDATA[*/
/*         /***/
/*          * In-memory key-value cache manager*/
/*          *//* */
/*         var cache = new function() {*/
/*             "use strict";*/
/*             var dict = {};*/
/* */
/*             this.get = function(key) {*/
/*                 return dict.hasOwnProperty(key)*/
/*                     ? dict[key]*/
/*                     : null;*/
/*                 };*/
/* */
/*             this.set = function(key, value) {*/
/*                 dict[key] = value;*/
/* */
/*                 return value;*/
/*             };*/
/*         };*/
/* */
/*         /***/
/*          * Query an element with a CSS selector.*/
/*          **/
/*          * @param {string} selector - a CSS-selector-compatible query string*/
/*          **/
/*          * @return DOMElement|null*/
/*          *//* */
/*         function query(selector)*/
/*         {*/
/*             "use strict";*/
/*             var key = 'SELECTOR: ' + selector;*/
/* */
/*             return cache.get(key) || cache.set(key, document.querySelector(selector));*/
/*         }*/
/* */
/*         /***/
/*          * Canvas Manager*/
/*          *//* */
/*         function CanvasManager(requests, maxRequestTime) {*/
/*             "use strict";*/
/* */
/*             var _drawingColors = {{ colors|json_encode|raw }},*/
/*                 _storagePrefix = 'timeline/',*/
/*                 _threshold = 1,*/
/*                 _requests = requests,*/
/*                 _maxRequestTime = maxRequestTime;*/
/* */
/*             /***/
/*              * Check whether this event is a child event.*/
/*              **/
/*              * @return true if it is*/
/*              *//* */
/*             function isChildEvent(event)*/
/*             {*/
/*                 return '__section__.child' === event.name;*/
/*             }*/
/* */
/*             /***/
/*              * Check whether this event is categorized in 'section'.*/
/*              **/
/*              * @return true if it is*/
/*              *//* */
/*             function isSectionEvent(event)*/
/*             {*/
/*                 return 'section' === event.category;*/
/*             }*/
/* */
/*             /***/
/*              * Get the width of the container.*/
/*              *//* */
/*             function getContainerWidth()*/
/*             {*/
/*                 return query('#collector-content h2').clientWidth;*/
/*             }*/
/* */
/*             /***/
/*              * Draw one canvas.*/
/*              **/
/*              * @param request   the request object*/
/*              * @param max       <subjected for removal>*/
/*              * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)*/
/*              * @param width     the width of the canvas*/
/*              *//* */
/*             this.drawOne = function(request, max, threshold, width)*/
/*             {*/
/*                 "use strict";*/
/*                 var text,*/
/*                     ms,*/
/*                     xc,*/
/*                     drawableEvents,*/
/*                     mainEvents,*/
/*                     elementId = 'timeline_' + request.id,*/
/*                     canvasHeight = 0,*/
/*                     gapPerEvent = 38,*/
/*                     colors = _drawingColors,*/
/*                     space = 10.5,*/
/*                     ratio = (width - space * 2) / max,*/
/*                     h = space,*/
/*                     x = request.left * ratio + space, // position*/
/*                     canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),*/
/*                     ctx = canvas.getContext("2d"),*/
/*                     scaleRatio,*/
/*                     devicePixelRatio;*/
/* */
/*                 // Filter events whose total time is below the threshold.*/
/*                 drawableEvents = request.events.filter(function(event) {*/
/*                     return event.duration >= threshold;*/
/*                 });*/
/* */
/*                 canvasHeight += gapPerEvent * drawableEvents.length;*/
/* */
/*                 // For retina displays so text and boxes will be crisp*/
/*                 devicePixelRatio = window.devicePixelRatio == "undefined" ? 1 : window.devicePixelRatio;*/
/*                 scaleRatio = devicePixelRatio / 1;*/
/* */
/*                 canvas.width = width * scaleRatio;*/
/*                 canvas.height = canvasHeight * scaleRatio;*/
/* */
/*                 canvas.style.width = width + 'px';*/
/*                 canvas.style.height = canvasHeight + 'px';*/
/* */
/*                 ctx.scale(scaleRatio, scaleRatio);*/
/* */
/*                 ctx.textBaseline = "middle";*/
/*                 ctx.lineWidth = 0;*/
/* */
/*                 // For each event, draw a line.*/
/*                 ctx.strokeStyle = "#CCC";*/
/* */
/*                 drawableEvents.forEach(function(event) {*/
/*                     event.periods.forEach(function(period) {*/
/*                         var timelineHeadPosition = x + period.start * ratio;*/
/* */
/*                         if (isChildEvent(event)) {*/
/*                             /* create a striped background dynamically *//* */
/*                             var img = new Image();*/
/*                             img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';*/
/*                             var pattern = ctx.createPattern(img, 'repeat');*/
/* */
/*                             ctx.fillStyle = pattern;*/
/*                             ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);*/
/*                         } else if (isSectionEvent(event)) {*/
/*                             var timelineTailPosition = x + period.end * ratio;*/
/* */
/*                             ctx.beginPath();*/
/*                             ctx.moveTo(timelineHeadPosition, 0);*/
/*                             ctx.lineTo(timelineHeadPosition, canvasHeight);*/
/*                             ctx.moveTo(timelineTailPosition, 0);*/
/*                             ctx.lineTo(timelineTailPosition, canvasHeight);*/
/*                             ctx.fill();*/
/*                             ctx.closePath();*/
/*                             ctx.stroke();*/
/*                         }*/
/*                     });*/
/*                 });*/
/* */
/*                 // Filter for main events.*/
/*                 mainEvents = drawableEvents.filter(function(event) {*/
/*                     return !isChildEvent(event)*/
/*                 });*/
/* */
/*                 // For each main event, draw the visual presentation of timelines.*/
/*                 mainEvents.forEach(function(event) {*/
/* */
/*                     h += 8;*/
/* */
/*                     // For each sub event, ...*/
/*                     event.periods.forEach(function(period) {*/
/*                         // Set the drawing style.*/
/*                         ctx.fillStyle = colors['default'];*/
/*                         ctx.strokeStyle = colors['default'];*/
/* */
/*                         if (colors[event.name]) {*/
/*                             ctx.fillStyle = colors[event.name];*/
/*                             ctx.strokeStyle = colors[event.name];*/
/*                         } else if (colors[event.category]) {*/
/*                             ctx.fillStyle = colors[event.category];*/
/*                             ctx.strokeStyle = colors[event.category];*/
/*                         }*/
/* */
/*                         // Draw the timeline*/
/*                         var timelineHeadPosition = x + period.start * ratio;*/
/* */
/*                         if (!isSectionEvent(event)) {*/
/*                             ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);*/
/*                             ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);*/
/*                         } else {*/
/*                             var timelineTailPosition = x + period.end * ratio;*/
/* */
/*                             ctx.beginPath();*/
/*                             ctx.moveTo(timelineHeadPosition, h);*/
/*                             ctx.lineTo(timelineHeadPosition, h + 11);*/
/*                             ctx.lineTo(timelineHeadPosition + 8, h);*/
/*                             ctx.lineTo(timelineHeadPosition, h);*/
/*                             ctx.fill();*/
/*                             ctx.closePath();*/
/*                             ctx.stroke();*/
/* */
/*                             ctx.beginPath();*/
/*                             ctx.moveTo(timelineTailPosition, h);*/
/*                             ctx.lineTo(timelineTailPosition, h + 11);*/
/*                             ctx.lineTo(timelineTailPosition - 8, h);*/
/*                             ctx.lineTo(timelineTailPosition, h);*/
/*                             ctx.fill();*/
/*                             ctx.closePath();*/
/*                             ctx.stroke();*/
/* */
/*                             ctx.beginPath();*/
/*                             ctx.moveTo(timelineHeadPosition, h);*/
/*                             ctx.lineTo(timelineTailPosition, h);*/
/*                             ctx.lineTo(timelineTailPosition, h + 2);*/
/*                             ctx.lineTo(timelineHeadPosition, h + 2);*/
/*                             ctx.lineTo(timelineHeadPosition, h);*/
/*                             ctx.fill();*/
/*                             ctx.closePath();*/
/*                             ctx.stroke();*/
/*                         }*/
/*                     });*/
/* */
/*                     h += 30;*/
/* */
/*                     ctx.beginPath();*/
/*                     ctx.strokeStyle = "#E0E0E0";*/
/*                     ctx.moveTo(0, h - 10);*/
/*                     ctx.lineTo(width, h - 10);*/
/*                     ctx.closePath();*/
/*                     ctx.stroke();*/
/*                 });*/
/* */
/*                 h = space;*/
/* */
/*                 // For each event, draw the label.*/
/*                 mainEvents.forEach(function(event) {*/
/* */
/*                     ctx.fillStyle = "#444";*/
/*                     ctx.font = "12px sans-serif";*/
/*                     text = event.name;*/
/*                     ms = "  " + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + " ms / " + event.memory + " MB";*/
/*                     if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {*/
/*                         ctx.textAlign = "end";*/
/*                         ctx.font = "10px sans-serif";*/
/*                         ctx.fillStyle = "#777";*/
/*                         xc = x + event.endtime * ratio - 1;*/
/*                         ctx.fillText(ms, xc, h);*/
/* */
/*                         xc -= ctx.measureText(ms).width;*/
/*                         ctx.font = "12px sans-serif";*/
/*                         ctx.fillStyle = "#222";*/
/*                         ctx.fillText(text, xc, h);*/
/*                     } else {*/
/*                         ctx.textAlign = "start";*/
/*                         ctx.font = "13px sans-serif";*/
/*                         ctx.fillStyle = "#222";*/
/*                         xc = x + event.starttime * ratio + 1;*/
/*                         ctx.fillText(text, xc, h);*/
/* */
/*                         xc += ctx.measureText(text).width;*/
/*                         ctx.font = "11px sans-serif";*/
/*                         ctx.fillStyle = "#777";*/
/*                         ctx.fillText(ms, xc, h);*/
/*                     }*/
/* */
/*                     h += gapPerEvent;*/
/*                 });*/
/*             };*/
/* */
/*             this.drawAll = function(width, threshold)*/
/*             {*/
/*                 "use strict";*/
/* */
/*                 width = width || getContainerWidth();*/
/*                 threshold = threshold || this.getThreshold();*/
/* */
/*                 var self = this;*/
/* */
/*                 _requests.forEach(function(request) {*/
/*                     self.drawOne(request, _maxRequestTime, threshold, width);*/
/*                 });*/
/*             };*/
/* */
/*             this.getThreshold = function() {*/
/*                 var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');*/
/* */
/*                 if (null === threshold) {*/
/*                     return _threshold;*/
/*                 }*/
/* */
/*                 _threshold = parseInt(threshold);*/
/* */
/*                 return _threshold;*/
/*             };*/
/* */
/*             this.setThreshold = function(threshold)*/
/*             {*/
/*                 _threshold = threshold;*/
/* */
/*                 Sfjs.setPreference(_storagePrefix + 'threshold', threshold);*/
/* */
/*                 return this;*/
/*             };*/
/*         }*/
/* */
/*         function canvasAutoUpdateOnResizeAndSubmit(e) {*/
/*             e.preventDefault();*/
/*             canvasManager.drawAll();*/
/*         }*/
/* */
/*         function canvasAutoUpdateOnThresholdChange(e) {*/
/*             canvasManager*/
/*                 .setThreshold(query('input[name="threshold"]').value)*/
/*                 .drawAll();*/
/*         }*/
/* */
/*         var requests_data = {*/
/*             "max": {{ "%F"|format(collector.events.__section__.endtime) }},*/
/*             "requests": [*/
/* {{ helper.dump_request_data(token, profile, collector.events, collector.events.__section__.origin) }}*/
/* */
/* {% if profile.children|length %}*/
/*                 ,*/
/* {% for child in profile.children %}*/
/* {{ helper.dump_request_data(child.token, child, child.getcollector('time').events, collector.events.__section__.origin) }}{{ loop.last ? '' : ',' }}*/
/* {% endfor %}*/
/* {% endif %}*/
/*             ]*/
/*         };*/
/* */
/*         var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);*/
/* */
/*         query('input[name="threshold"]').value = canvasManager.getThreshold();*/
/*         canvasManager.drawAll();*/
/* */
/*         // Update the colors of legends.*/
/*         var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');*/
/* */
/*         for (var i = 0; i < timelineLegends.length; ++i) {*/
/*             var timelineLegend = timelineLegends[i];*/
/* */
/*             timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');*/
/*         }*/
/* */
/*         // Bind event handlers*/
/*         var elementTimelineControl = query('#timeline-control'),*/
/*             elementThresholdControl = query('input[name="threshold"]');*/
/* */
/*         window.onresize = canvasAutoUpdateOnResizeAndSubmit;*/
/*         elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;*/
/* */
/*         elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;*/
/*         elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;*/
/*         elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;*/
/* */
/*         window.setTimeout(function() {*/
/*             canvasAutoUpdateOnThresholdChange(null);*/
/*         }, 50);*/
/* */
/*     //]]>{% endautoescape %}</script>*/
/* {% endblock %}*/
/* */
/* {% macro dump_request_data(token, profile, events, origin) %}*/
/* {% autoescape 'js' %}*/
/* {% from _self import dump_events %}*/
/*                 {*/
/*                     "id": "{{ token }}",*/
/*                     "left": {{ "%F"|format(events.__section__.origin - origin) }},*/
/*                     "events": [*/
/* {{ dump_events(events) }}*/
/*                     ]*/
/*                 }*/
/* {% endautoescape %}*/
/* {% endmacro %}*/
/* */
/* {% macro dump_events(events) %}*/
/* {% autoescape 'js' %}*/
/* {% for name, event in events %}*/
/* {% if '__section__' != name %}*/
/*                         {*/
/*                             "name": "{{ name }}",*/
/*                             "category": "{{ event.category }}",*/
/*                             "origin": {{ "%F"|format(event.origin) }},*/
/*                             "starttime": {{ "%F"|format(event.starttime) }},*/
/*                             "endtime": {{ "%F"|format(event.endtime) }},*/
/*                             "duration": {{ "%F"|format(event.duration) }},*/
/*                             "memory": {{ "%.1F"|format(event.memory / 1024 / 1024) }},*/
/*                             "periods": [*/
/*                                 {%- for period in event.periods -%}*/
/*                                     {"start": {{ "%F"|format(period.starttime) }}, "end": {{ "%F"|format(period.endtime) }}}{{ loop.last ? '' : ', ' }}*/
/*                                 {%- endfor -%}*/
/*                             ]*/
/*                         }{{ loop.last ? '' : ',' }}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% endautoescape %}*/
/* {% endmacro %}*/
/* */
/* {% macro display_timeline(id, events, colors) %}*/
/*     <div class="sf-profiler-timeline">*/
/*         <div class="legends">*/
/*             {% for category, color in colors %}*/
/*                 <span data-color="{{ color }}">{{ category }}</span>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <canvas width="680" height="" id="{{ id }}" class="timeline"></canvas>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
