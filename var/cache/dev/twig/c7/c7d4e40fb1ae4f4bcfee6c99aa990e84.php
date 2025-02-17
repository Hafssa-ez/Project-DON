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

/* article/ajoutarticle.html.twig */
class __TwigTemplate_5979b6b6681c523607722c532f626ea4 extends Template
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
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/ajoutarticle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/ajoutarticle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/ajoutarticle.html.twig", 1);
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

        yield "Ajouter un Article";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "    <div class=\"container-article\">
        <div class=\"title\">Ajouter un Article</div>
        <div class=\"content\">
            <form action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_article");
        yield "\" method=\"POST\" enctype=\"multipart/form-data\">
                
                <div class=\"input-box\">
                    <span class=\"details\">Titre de l'Article</span>
                    <input type=\"text\" id=\"titre\" name=\"titre\" placeholder=\"Ex: Canapé en cuir\" required>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">Ajouter une Image</span>
                    <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\" required>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">Petite Description</span>
                    <textarea id=\"description\" name=\"description\"
                        placeholder=\"Ex: Canapé confortable en cuir, pratiquement neuf...\" required></textarea>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">État de l'Article</span>
                    <select id=\"etat\" name=\"etat\" required>
                        <option value=\"excellent\">Excellent état</option>
                        <option value=\"bon état\">Bon état</option>
                        <option value=\"État moyen\">État moyen</option>
                        <option value=\"État médicore\">État médiocre</option>
                    </select>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">Ville</span>
                    <input type=\"text\" id=\"ville\" name=\"ville\" placeholder=\"Ex: Paris\" required>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">Catégorie</span>
                    <select id=\"categorie\" name=\"categorie\" required>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 46
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 46), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 46), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                    </select>
                </div>

                <div class=\"button\">
                    <input type=\"submit\" value=\"Ajouter l'Article\">
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
        return "article/ajoutarticle.html.twig";
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
        return array (  159 => 48,  148 => 46,  144 => 45,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter un Article{% endblock %}

{% block content %}
    <div class=\"container-article\">
        <div class=\"title\">Ajouter un Article</div>
        <div class=\"content\">
            <form action=\"{{ path('ajouter_article') }}\" method=\"POST\" enctype=\"multipart/form-data\">
                
                <div class=\"input-box\">
                    <span class=\"details\">Titre de l'Article</span>
                    <input type=\"text\" id=\"titre\" name=\"titre\" placeholder=\"Ex: Canapé en cuir\" required>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">Ajouter une Image</span>
                    <input type=\"file\" id=\"image\" name=\"image\" accept=\"image/*\" required>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">Petite Description</span>
                    <textarea id=\"description\" name=\"description\"
                        placeholder=\"Ex: Canapé confortable en cuir, pratiquement neuf...\" required></textarea>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">État de l'Article</span>
                    <select id=\"etat\" name=\"etat\" required>
                        <option value=\"excellent\">Excellent état</option>
                        <option value=\"bon état\">Bon état</option>
                        <option value=\"État moyen\">État moyen</option>
                        <option value=\"État médicore\">État médiocre</option>
                    </select>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">Ville</span>
                    <input type=\"text\" id=\"ville\" name=\"ville\" placeholder=\"Ex: Paris\" required>
                </div>

                <div class=\"input-box\">
                    <span class=\"details\">Catégorie</span>
                    <select id=\"categorie\" name=\"categorie\" required>
                        {% for categorie in categories %}
                            <option value=\"{{ categorie.id }}\">{{ categorie.nom }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"button\">
                    <input type=\"submit\" value=\"Ajouter l'Article\">
                </div>
            </form>
        </div>
    </div>
{% endblock %}
", "article/ajoutarticle.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\article\\ajoutarticle.html.twig");
    }
}
