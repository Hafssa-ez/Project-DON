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

/* article/details.html.twig */
class __TwigTemplate_3d76e006f14efb5eedb08b648666352a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/details.html.twig", 1);
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

        yield "Détail de l'Article";
        
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
        yield "    <div class=\"container mt-4\">
        <div class=\"row\">
            <!-- Image de l'article -->
            <div class=\"col-md-6\">
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "images", [], "any", false, false, false, 10))), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
            </div>

            <!-- Informations sur l'article -->
            <div class=\"col-md-6\">
                <h2>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        yield "</h2>
                <p><strong>Description :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
                <p><strong>Ville :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "ville", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
                <p><strong>État :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "etat", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                <p><strong>Date d'ajout :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "dateAjout", [], "any", false, false, false, 19), "d M Y"), "html", null, true);
        yield "</p>

                <!-- Coordonnées du donneur -->
                <h3>Coordonnées du Donneur :</h3>
                <p><strong>Nom :</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "utilisateur", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                <p><strong>Téléphone :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "utilisateur", [], "any", false, false, false, 24), "telephone", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
                <p><strong>Email :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "utilisateur", [], "any", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>

                <!-- Bouton réserver -->
                <div class=\"mt-3\">
                ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            yield "    ";
            if (!CoreExtension::inFilter("ROLE_DONNEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "roles", [], "any", false, false, false, 30))) {
                // line 31
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_demander", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">
            Demander l'article
        </a>
    ";
            } else {
                // line 35
                yield "        <p class=\"text-muted\"> En tant que donneur, vous ne pouvez pas demander un article.</p>
    ";
            }
        } else {
            // line 38
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary\">Connectez-vous pour demander</a>
";
        }
        // line 40
        yield "
            </div>
                    
                 
                        
                   
                
        </div>
 </div>

<hr id=\"section_commentaires\">

<h4>Commentaires</h4>

<!-- Liste des commentaires -->
";
        // line 55
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 55, $this->source); })()), "commentaires", [], "any", false, false, false, 55))) {
            // line 56
            yield "    <p>Aucun commentaire pour l’instant.</p>
";
        } else {
            // line 58
            yield "    <ul>
    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 59, $this->source); })()), "commentaires", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
                // line 60
                yield "        <li>
            <strong>";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "utilisateur", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true);
                yield " :</strong>
            ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "message", [], "any", false, false, false, 62), "html", null, true);
                yield "
            <small>(le ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "date", [], "any", false, false, false, 63), "d/m/Y H:i"), "html", null, true);
                yield ")</small>

            ";
                // line 66
                yield "            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66) == CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "utilisateur", [], "any", false, false, false, 66)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                    // line 67
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_modifier_render", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                    yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>

                <form method=\"post\"
                      action=\"";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_supprimer_render", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                    yield "\"
                      style=\"display:inline;\"
                      onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                </form>
            ";
                }
                // line 76
                yield "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comm'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "    </ul>
";
        }
        // line 80
        yield "
<!-- Formulaire ajouter un commentaire -->
";
        // line 82
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82) && CoreExtension::inFilter("ROLE_RECEVEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "roles", [], "any", false, false, false, 82)))) {
            // line 83
            yield "    <!-- Vérifiez si article est “reserve” par app.user si vous voulez restreindre encore plus -->
    <a href=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_ajouter_render", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Ajouter un commentaire</a>
";
        } else {
            // line 86
            yield "    <p>Connectez-vous en tant que receveur pour commenter.</p>
";
        }
        // line 88
        yield "
       
   

      
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
        return "article/details.html.twig";
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
        return array (  272 => 88,  268 => 86,  263 => 84,  260 => 83,  258 => 82,  254 => 80,  250 => 78,  243 => 76,  234 => 70,  227 => 67,  224 => 66,  219 => 63,  215 => 62,  211 => 61,  208 => 60,  204 => 59,  201 => 58,  197 => 56,  195 => 55,  178 => 40,  172 => 38,  167 => 35,  159 => 31,  156 => 30,  154 => 29,  147 => 25,  143 => 24,  139 => 23,  132 => 19,  128 => 18,  124 => 17,  120 => 16,  116 => 15,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détail de l'Article{% endblock %}

{% block content %}
    <div class=\"container mt-4\">
        <div class=\"row\">
            <!-- Image de l'article -->
            <div class=\"col-md-6\">
                <img src=\"{{ asset('uploads/' ~ article.images) }}\" class=\"img-fluid rounded\" alt=\"{{ article.titre }}\">
            </div>

            <!-- Informations sur l'article -->
            <div class=\"col-md-6\">
                <h2>{{ article.titre }}</h2>
                <p><strong>Description :</strong> {{ article.description }}</p>
                <p><strong>Ville :</strong> {{ article.ville }}</p>
                <p><strong>État :</strong> {{ article.etat }}</p>
                <p><strong>Date d'ajout :</strong> {{ article.dateAjout|date('d M Y') }}</p>

                <!-- Coordonnées du donneur -->
                <h3>Coordonnées du Donneur :</h3>
                <p><strong>Nom :</strong> {{ article.utilisateur.nom }}</p>
                <p><strong>Téléphone :</strong> {{ article.utilisateur.telephone }}</p>
                <p><strong>Email :</strong> {{ article.utilisateur.email }}</p>

                <!-- Bouton réserver -->
                <div class=\"mt-3\">
                {% if app.user %}
    {% if 'ROLE_DONNEUR' not in app.user.roles %}
        <a href=\"{{ path('article_demander', { id: article.id }) }}\" class=\"btn btn-primary\">
            Demander l'article
        </a>
    {% else %}
        <p class=\"text-muted\"> En tant que donneur, vous ne pouvez pas demander un article.</p>
    {% endif %}
{% else %}
    <a href=\"{{ path('app_login') }}\" class=\"btn btn-primary\">Connectez-vous pour demander</a>
{% endif %}

            </div>
                    
                 
                        
                   
                
        </div>
 </div>

<hr id=\"section_commentaires\">

<h4>Commentaires</h4>

<!-- Liste des commentaires -->
{% if article.commentaires is empty %}
    <p>Aucun commentaire pour l’instant.</p>
{% else %}
    <ul>
    {% for comm in article.commentaires %}
        <li>
            <strong>{{ comm.utilisateur.nom }} :</strong>
            {{ comm.message }}
            <small>(le {{ comm.date|date('d/m/Y H:i') }})</small>

            {# Boutons modifier/supprimer si c’est l’auteur ou l’admin #}
            {% if app.user == comm.utilisateur or is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('commentaire_modifier_render', { id: comm.id }) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>

                <form method=\"post\"
                      action=\"{{ path('commentaire_supprimer_render', { id: comm.id }) }}\"
                      style=\"display:inline;\"
                      onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                </form>
            {% endif %}
        </li>
    {% endfor %}
    </ul>
{% endif %}

<!-- Formulaire ajouter un commentaire -->
{% if app.user and 'ROLE_RECEVEUR' in app.user.roles %}
    <!-- Vérifiez si article est “reserve” par app.user si vous voulez restreindre encore plus -->
    <a href=\"{{ path('commentaire_ajouter_render', { id: article.id }) }}\" class=\"btn btn-primary\">Ajouter un commentaire</a>
{% else %}
    <p>Connectez-vous en tant que receveur pour commenter.</p>
{% endif %}

       
   

      
{% endblock %}
", "article/details.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\article\\details.html.twig");
    }
}
