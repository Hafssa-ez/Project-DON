<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* article/modifierarticle.html.twig */
class __TwigTemplate_222babc344ea49b641797fa91d5657ff extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/modifierarticle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/modifierarticle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/modifierarticle.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Modifier un Article";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container\">
        <div class=\"title\">Modifier l'Article</div>
        <div class=\"content\">
            <form action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\" method=\"POST\">

                <div class=\"input-box\">
                    <label for=\"titre\" class=\"details\">Titre de l'Article</label>
                    <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "titre", [], "any", false, false, false, 13), "html", null, true);
        yield "\" required>
                </div>

                <div class=\"input-box\">
                    <label for=\"description\" class=\"details\">Petite Description</label>
                    <textarea id=\"description\" name=\"description\" class=\"form-control\" required>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), "html", null, true);
        yield "</textarea>
                </div>

                <div class=\"input-box\">
                    <label for=\"etat\" class=\"details\">État de l'Article</label>
                    <select id=\"etat\" name=\"etat\" class=\"form-select\" required>
                        <option value=\"excellent\" ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "etat", [], "any", false, false, false, 24) == "excellent")) {
            yield "selected";
        }
        yield ">Excellent état</option>
                        <option value=\"good\" ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "etat", [], "any", false, false, false, 25) == "good")) {
            yield "selected";
        }
        yield ">Bon état</option>
                        <option value=\"fair\" ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "etat", [], "any", false, false, false, 26) == "fair")) {
            yield "selected";
        }
        yield ">État moyen</option>
                        <option value=\"poor\" ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "etat", [], "any", false, false, false, 27) == "poor")) {
            yield "selected";
        }
        yield ">État médiocre</option>
                    </select>
                </div>

                <div class=\"button\">
                    <button type=\"submit\" class=\"btn btn-primary\">Modifier l'Article</button>
                </div>

            </form>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "article/modifierarticle.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  147 => 27,  141 => 26,  135 => 25,  129 => 24,  120 => 18,  112 => 13,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un Article{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"title\">Modifier l'Article</div>
        <div class=\"content\">
            <form action=\"{{ path('article_modifier', {'id': article.id}) }}\" method=\"POST\">

                <div class=\"input-box\">
                    <label for=\"titre\" class=\"details\">Titre de l'Article</label>
                    <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" value=\"{{ article.titre }}\" required>
                </div>

                <div class=\"input-box\">
                    <label for=\"description\" class=\"details\">Petite Description</label>
                    <textarea id=\"description\" name=\"description\" class=\"form-control\" required>{{ article.description }}</textarea>
                </div>

                <div class=\"input-box\">
                    <label for=\"etat\" class=\"details\">État de l'Article</label>
                    <select id=\"etat\" name=\"etat\" class=\"form-select\" required>
                        <option value=\"excellent\" {% if article.etat == 'excellent' %}selected{% endif %}>Excellent état</option>
                        <option value=\"good\" {% if article.etat == 'good' %}selected{% endif %}>Bon état</option>
                        <option value=\"fair\" {% if article.etat == 'fair' %}selected{% endif %}>État moyen</option>
                        <option value=\"poor\" {% if article.etat == 'poor' %}selected{% endif %}>État médiocre</option>
                    </select>
                </div>

                <div class=\"button\">
                    <button type=\"submit\" class=\"btn btn-primary\">Modifier l'Article</button>
                </div>

            </form>
        </div>
    </div>
{% endblock %}
", "article/modifierarticle.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\article\\modifierarticle.html.twig");
    }
}
