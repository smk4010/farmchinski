<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_1920a15178989a06aa45aa879ea06979eef43ec989b0730f0f65e49e5719384a extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.category" => "sidebar"), "order" => array("by" => "default", "dir" => "asc"))), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 2
            echo "  ";
            if ($this->getAttribute($context["module"], "template", array())) {
                // line 3
                echo "    ";
                $this->loadTemplate((("sidebar/" . $this->getAttribute($context["module"], "template", array())) . ".html.twig"), "partials/sidebar.html.twig", 3)->display($context);
                // line 4
                echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 8
            echo "<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">";
            // line 9
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SEARCH");
            echo "</h2>
    ";
            // line 10
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 10)->display($context);
            // line 11
            echo "</aside>
";
        }
        // line 13
        echo "
";
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 15
            echo "<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">";
            // line 16
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RANDOM_ARTICLE");
            echo "</h2>
    <a class=\"button\" href=\"";
            // line 17
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</aside>
";
        }
        // line 20
        echo "
";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 22
            echo "<aside class=\"widget widget_tag_cloud\">
  <h2 class=\"widget-title\">";
            // line 23
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("POPULAR_TAGS");
            echo "</h2>
    ";
            // line 24
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 24)->display(array_merge($context, array("base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag")));
            // line 25
            echo "</aside>
";
        }
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 29
            echo "<aside class=\"widget widget_recent_entries\">
  <h2 class=\"widget-title\">";
            // line 30
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("LATEST_RECIPES");
            echo "</h2>
    ";
            // line 31
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 31)->display($context);
            // line 32
            echo "</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  123 => 31,  119 => 30,  116 => 29,  114 => 28,  111 => 27,  107 => 25,  105 => 24,  101 => 23,  98 => 22,  96 => 21,  93 => 20,  87 => 17,  83 => 16,  80 => 15,  78 => 14,  75 => 13,  71 => 11,  69 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  42 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for module in page.collection({'items':{'@taxonomy.category': 'sidebar'},'order': {'by': 'default', 'dir': 'asc'}}) %}
  {% if module.template %}
    {% include 'sidebar/' ~ module.template ~ '.html.twig' %}
  {% endif %}
{% endfor %}

{% if config.plugins.simplesearch.enabled %}
<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">{{ 'SEARCH'|t }}</h2>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</aside>
{% endif %}

{% if config.plugins.random.enabled %}
<aside class=\"widget HTML\">
  <h2 class=\"widget-title\">{{ 'RANDOM_ARTICLE'|t }}</h2>
    <a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</aside>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
<aside class=\"widget widget_tag_cloud\">
  <h2 class=\"widget-title\">{{ 'POPULAR_TAGS'|t }}</h2>
    {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}
</aside>
{% endif %}

{% if config.plugins.archives.enabled %}
<aside class=\"widget widget_recent_entries\">
  <h2 class=\"widget-title\">{{ 'LATEST_RECIPES'|t }}</h2>
    {% include 'partials/archives.html.twig' %}
</aside>
{% endif %}
", "partials/sidebar.html.twig", "C:\\laragon\\www\\farmchinski\\user\\themes\\receptar\\templates\\partials\\sidebar.html.twig");
    }
}
