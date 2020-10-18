<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/index.html.twig */
class __TwigTemplate_b567699c840719c6f8ed04fe96c5bd74b4eff2d76aca8a75a0291a90b47da875 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 6, $this->source); })()), "results", [], "any", false, false, false, 6));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 15), "long", "medium", "", "UTC"), "html", null, true);
            echo "</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16), "html", null, true);
            echo "</span>
                <span class=\"metadata\"><i class=\"fa fa-heart\"></i>";
            // line 17
            echo 1;
            echo "</span>
            </p>

            <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>

            ";
            // line 22
            echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
            echo "
        </article>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 25
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 28, $this->source); })()), "hasToPaginate", [], "any", false, false, false, 28)) {
            // line 29
            echo "        <div class=\"navigation text-center\">
            <ul class=\"pagination\">
                ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 31, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 31)) {
                // line 32
                echo "                    <li class=\"prev\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "previousPage", [], "any", false, false, false, 32), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 32, $this->source); })())]), "html", null, true);
                echo "\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</a></li>
                ";
            } else {
                // line 34
                echo "                    <li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
                echo "</span></li>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "lastPage", [], "any", false, false, false, 37)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "                    ";
                if ((0 === twig_compare($context["i"], twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 38, $this->source); })()), "currentPage", [], "any", false, false, false, 38)))) {
                    // line 39
                    echo "                        <li class=\"active\"><span>";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo " <span class=\"sr-only\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.current"), "html", null, true);
                    echo "</span></span></li>
                    ";
                } elseif ((((((((0 === twig_compare(                // line 40
$context["i"], 1)) || (0 === twig_compare($context["i"], 2))) || (0 === twig_compare($context["i"], twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 40, $this->source); })()), "lastPage", [], "any", false, false, false, 40)))) || (0 === twig_compare($context["i"], (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 40, $this->source); })()), "lastPage", [], "any", false, false, false, 40) - 1)))) || (0 === twig_compare($context["i"], (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 40, $this->source); })()), "lastPage", [], "any", false, false, false, 40) / 2)))) || (0 === twig_compare($context["i"], (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 40, $this->source); })()), "currentPage", [], "any", false, false, false, 40) - 1)))) || (0 === twig_compare($context["i"], (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 40, $this->source); })()), "currentPage", [], "any", false, false, false, 40) + 1))))) {
                    // line 41
                    echo "                        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => $context["i"], "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 41, $this->source); })())]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</a></li>
                    ";
                }
                // line 43
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
                ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 45, $this->source); })()), "hasNextPage", [], "any", false, false, false, 45)) {
                // line 46
                echo "                    <li class=\"next\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 46, $this->source); })()), "nextPage", [], "any", false, false, false, 46), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 46, $this->source); })())]), "html", null, true);
                echo "\" rel=\"next\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></a></li>
                ";
            } else {
                // line 48
                echo "                    <li class=\"next disabled\"><span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
                echo " <i class=\"fa fw fa-arrow-right\"></i></span></li>
                ";
            }
            // line 50
            echo "            </ul>
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 56
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 58
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
    ";
        // line 59
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 59,  274 => 58,  268 => 56,  258 => 55,  245 => 50,  239 => 48,  231 => 46,  229 => 45,  226 => 44,  220 => 43,  212 => 41,  210 => 40,  203 => 39,  200 => 38,  196 => 37,  193 => 36,  187 => 34,  179 => 32,  177 => 31,  173 => 29,  171 => 28,  168 => 27,  159 => 25,  143 => 22,  138 => 20,  132 => 17,  128 => 16,  124 => 15,  116 => 10,  112 => 9,  108 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}
    {% for post in paginator.results %}
        <article class=\"post\">
            <h2>
                <a href=\"{{ path('blog_post', {slug: post.slug}) }}\">
                    {{ post.title }}
                </a>
            </h2>

            <p class=\"post-metadata\">
                <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}</span>
                <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
                <span class=\"metadata\"><i class=\"fa fa-heart\"></i>{{ 1 }}</span>
            </p>

            <p>{{ post.summary }}</p>

            {{ include('blog/_post_tags.html.twig') }}
        </article>
    {% else %}
        <div class=\"well\">{{ 'post.no_posts_found'|trans }}</div>
    {% endfor %}

    {% if paginator.hasToPaginate %}
        <div class=\"navigation text-center\">
            <ul class=\"pagination\">
                {% if paginator.hasPreviousPage %}
                    <li class=\"prev\"><a href=\"{{ path('blog_index_paginated', {page: paginator.previousPage, tag: tagName}) }}\" rel=\"previous\"><i class=\"fa fw fa-long-arrow-left\"></i> {{ 'paginator.previous'|trans }}</a></li>
                {% else %}
                    <li class=\"prev disabled\"><span><i class=\"fa fw fa-arrow-left\"></i> {{ 'paginator.previous'|trans }}</span></li>
                {% endif %}

                {% for i in 1..paginator.lastPage %}
                    {% if i == paginator.currentPage %}
                        <li class=\"active\"><span>{{ i }} <span class=\"sr-only\">{{ 'paginator.current'|trans }}</span></span></li>
                    {% elseif (i == 1) or (i == 2) or (i == paginator.lastPage) or (i == paginator.lastPage -1) or (i == paginator.lastPage /2) or (i == paginator.currentPage -1) or (i == paginator.currentPage +1) %}
                        <li><a href=\"{{ path('blog_index_paginated', {page: i, tag: tagName}) }}\">{{ i }}</a></li>
                    {% endif %}
                {% endfor %}

                {% if paginator.hasNextPage %}
                    <li class=\"next\"><a href=\"{{ path('blog_index_paginated', {page: paginator.nextPage, tag: tagName}) }}\" rel=\"next\">{{ 'paginator.next'|trans }} <i class=\"fa fw fa-arrow-right\"></i></a></li>
                {% else %}
                    <li class=\"next disabled\"><span>{{ 'paginator.next'|trans }} <i class=\"fa fw fa-arrow-right\"></i></span></li>
                {% endif %}
            </ul>
        </div>
    {% endif %}
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/index.html.twig", "C:\\Users\\Veteran\\symfony_task\\Symfony-framework-demo\\templates\\blog\\index.html.twig");
    }
}
