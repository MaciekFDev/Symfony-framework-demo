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

/* blog/post_show.html.twig */
class __TwigTemplate_eacf3cf3c813a23c16efb7c9750cb432d348c5a00fba14c353337a14a00cf530 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/post_show.html.twig", 1);
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

        echo "blog_post_show";
        
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
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "publishedAt", [], "any", false, false, false, 9), "long", "medium", "", "UTC"), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "author", [], "any", false, false, false, 10), "fullName", [], "any", false, false, false, 10), "html", null, true);
        echo "</span>
        <span class=\"metadata\"><i class=\"fa fa-heart\"></i>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "viewcounter", [], "any", false, false, false, 11), "html", null, true);
        echo "</span>
    </p>

    ";
        // line 14
        echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14)));
        echo "

    ";
        // line 16
        echo twig_include($this->env, $context, "blog/_post_tags.html.twig");
        echo "

    <div id=\"post-add-comment\" class=\"well\">
        ";
        // line 25
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BlogController::commentForm", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]));
            echo "
        ";
        } else {
            // line 28
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login", ["redirect_to" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "pathInfo", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.to_publish_a_comment"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 35
        echo "    </div>

    <h3>
        <i class=\"fa fa-comments\" aria-hidden=\"true\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.num_comments", ["count" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 38, $this->source); })()), "comments", [], "any", false, false, false, 38))]), "html", null, true);
        echo "
    </h3>

    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 41, $this->source); })()), "comments", [], "any", false, false, false, 41));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 42
            echo "        <div class=\"row post-comment\">
            <a name=\"comment_";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\"></a>
            <h4 class=\"col-sm-3\">
                <strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 45), "fullName", [], "any", false, false, false, 45), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.commented_on"), "html", null, true);
            echo "
                ";
            // line 49
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "publishedAt", [], "any", false, false, false, 49), "medium", "short", "", "UTC"), "html", null, true);
            echo "</strong>
            </h4>
            <div class=\"col-sm-9\">
                ";
            // line 52
            echo $this->extensions['HtmlSanitizer\Bundle\Twig\TwigExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 52)));
            echo "
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "        <div class=\"post-comment\">
            <p>";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_comments"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 63
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 63, $this->source); })()))) {
            // line 64
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit_post"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 70
        echo "
    ";
        // line 74
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 76
        echo $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        echo "
    ";
        // line 77
        echo twig_include($this->env, $context, "blog/_rss.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 77,  250 => 76,  244 => 74,  241 => 70,  234 => 66,  230 => 65,  227 => 64,  224 => 63,  214 => 62,  197 => 57,  194 => 56,  185 => 52,  178 => 49,  172 => 45,  167 => 43,  164 => 42,  159 => 41,  153 => 38,  148 => 35,  142 => 32,  137 => 30,  133 => 29,  130 => 28,  124 => 26,  121 => 25,  115 => 16,  110 => 14,  104 => 11,  100 => 10,  96 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_post_show' %}

{% block main %}
    <h1>{{ post.title }}</h1>

    <p class=\"post-metadata\">
        <span class=\"metadata\"><i class=\"fa fa-calendar\"></i> {{ post.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}</span>
        <span class=\"metadata\"><i class=\"fa fa-user\"></i> {{ post.author.fullName }}</span>
        <span class=\"metadata\"><i class=\"fa fa-heart\"></i>{{ post.viewcounter }}</span>
    </p>

    {{ post.content|markdown_to_html|sanitize_html }}

    {{ include('blog/_post_tags.html.twig') }}

    <div id=\"post-add-comment\" class=\"well\">
        {# The 'IS_AUTHENTICATED_FULLY' role ensures that the user has entered
        their credentials (login + password) during this session. If they
        are automatically logged via the 'Remember Me' functionality, they won't
        be able to add a comment.
        See https://symfony.com/doc/current/security/remember_me.html#forcing-the-user-to-re-authenticate-before-accessing-certain-resources
        #}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ render(controller('App\\\\Controller\\\\BlogController::commentForm', {'id': post.id})) }}
        {% else %}
            <p>
                <a class=\"btn btn-success\" href=\"{{ path('security_login', {'redirect_to': app.request.pathInfo}) }}\">
                    <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                </a>
                {{ 'post.to_publish_a_comment'|trans }}
            </p>
        {% endif %}
    </div>

    <h3>
        <i class=\"fa fa-comments\" aria-hidden=\"true\"></i> {{ 'post.num_comments'|trans({ 'count': post.comments|length }) }}
    </h3>

    {% for comment in post.comments %}
        <div class=\"row post-comment\">
            <a name=\"comment_{{ comment.id }}\"></a>
            <h4 class=\"col-sm-3\">
                <strong>{{ comment.author.fullName }}</strong> {{ 'post.commented_on'|trans }}
                {# it's not mandatory to set the timezone in localizeddate(). This is done to
                   avoid errors when the 'intl' PHP extension is not available and the application
                   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
                <strong>{{ comment.publishedAt|format_datetime('medium', 'short', '', 'UTC') }}</strong>
            </h4>
            <div class=\"col-sm-9\">
                {{ comment.content|markdown_to_html|sanitize_html }}
            </div>
        </div>
    {% else %}
        <div class=\"post-comment\">
            <p>{{ 'post.no_comments'|trans }}</p>
        </div>
    {% endfor %}
{% endblock %}

{% block sidebar %}
    {% if is_granted('edit', post) %}
        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"{{ path('admin_post_edit', {id: post.id}) }}\">
                <i class=\"fa fa-edit\" aria-hidden=\"true\"></i> {{ 'action.edit_post'|trans }}
            </a>
        </div>
    {% endif %}

    {# the parent() function includes the contents defined by the parent template
      ('base.html.twig') for this block ('sidebar'). This is a very convenient way
      to share common contents in different templates #}
    {{ parent() }}

    {{ show_source_code(_self) }}
    {{ include('blog/_rss.html.twig') }}
{% endblock %}
", "blog/post_show.html.twig", "C:\\Users\\Veteran\\symfony_task\\Symfony-framework-demo\\templates\\blog\\post_show.html.twig");
    }
}
