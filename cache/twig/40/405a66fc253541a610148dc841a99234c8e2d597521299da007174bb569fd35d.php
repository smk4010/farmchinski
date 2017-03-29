<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_26db9d0ca6fb0aa238719a01cd964c76c6a51c1d4eb4cd305639520c2341a2c8 extends Twig_Template
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
        echo "<div class=\"search-wrapper\">
    <input class=\"search-input\" type=\"text\" placeholder=\"";
        // line 2
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER");
        echo "\" value=\"";
        echo ($context["query"] ?? null);
        echo "\" data-search-input=\"";
        echo ($context["base_url"] ?? null);
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array()) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array()) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array())))));
        echo "/query\" />
    ";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "display_button", array())) {
            // line 4
            echo "        <button class=\"search-submit\"><img src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://simplesearch/assets/search.svg");
            echo "\" /></button>
    ";
        }
        // line 6
        echo "    <script>

        var i, el;
        var input = document.getElementsByClassName('search-input');
        var searchInput = input[0].dataset.searchInput;

        for(i=0; i<input.length; i++) {
            el = input[i];
            el.addEventListener('keypress', function(event){
                if (event.keyCode == 13 && this.value.length >= ";
        // line 15
        echo $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.simplesearch.min_query_length", 1 => 3), "method");
        echo ") {
                    event.preventDefault();
                    window.location.href = searchInput + '";
        // line 17
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
        echo "' + this.value;
                }
            }, false);
        }

        ";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "display_button", array())) {
            // line 23
            echo "        var button = document.getElementsByClassName('search-submit');
        for(i=0; i<input.length; i++) {
            el = button[i];
            el.addEventListener('click', function(event){
                event.preventDefault();
                window.location.href = searchInput + '";
            // line 28
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
            echo "' + input[0].value;
            });
        }
        ";
        }
        // line 32
        echo "
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 32,  72 => 28,  65 => 23,  63 => 22,  55 => 17,  50 => 15,  39 => 6,  33 => 4,  31 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"search-wrapper\">
    <input class=\"search-input\" type=\"text\" placeholder=\"{{\"PLUGIN_SIMPLESEARCH.SEARCH_PLACEHOLDER\"|t}}\" value=\"{{ query }}\" data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route == '@self' ? '' : (config.plugins.simplesearch.route == '/' ? '' : config.plugins.simplesearch.route) }}/query\" />
    {% if config.plugins.simplesearch.display_button %}
        <button class=\"search-submit\"><img src=\"{{ url('plugin://simplesearch/assets/search.svg') }}\" /></button>
    {% endif %}
    <script>

        var i, el;
        var input = document.getElementsByClassName('search-input');
        var searchInput = input[0].dataset.searchInput;

        for(i=0; i<input.length; i++) {
            el = input[i];
            el.addEventListener('keypress', function(event){
                if (event.keyCode == 13 && this.value.length >= {{ config.get('plugins.simplesearch.min_query_length', 3) }}) {
                    event.preventDefault();
                    window.location.href = searchInput + '{{ config.system.param_sep }}' + this.value;
                }
            }, false);
        }

        {% if config.plugins.simplesearch.display_button %}
        var button = document.getElementsByClassName('search-submit');
        for(i=0; i<input.length; i++) {
            el = button[i];
            el.addEventListener('click', function(event){
                event.preventDefault();
                window.location.href = searchInput + '{{ config.system.param_sep }}' + input[0].value;
            });
        }
        {% endif %}

    </script>
</div>
", "partials/simplesearch_searchbox.html.twig", "C:\\laragon\\www\\farmchinski\\user\\plugins\\simplesearch\\templates\\partials\\simplesearch_searchbox.html.twig");
    }
}
