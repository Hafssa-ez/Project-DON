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

/* utilisateur/profil.html.twig */
class __TwigTemplate_d97a20a8c9834a6e9e862d1888833c30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/profil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Profil de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 2, $this->source); })()), "nom", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<div class=\"container mt-5\">
    <h2 class=\"text-center profil-titre mb-4\">
        <i class=\"fas fa-user-circle\"></i>
        Profil de ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 8, $this->source); })()), "prenom", [], "any", false, false, false, 8), "html", null, true);
        yield "
    </h2>

    <!-- Coordonnées utilisateur -->
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header profil-header\">
            <h4><i class=\"fas fa-id-card\"></i> Coordonnées</h4>
        </div>
        <div class=\"card-body\">
            <p><strong>Nom :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
            <p><strong>Prénom :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
            <p><strong>Email :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
            <p><strong>Téléphone :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 20, $this->source); })()), "telephone", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
            <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\"
               class=\"btn profil-btn-primary\">
                <i class=\"fas fa-edit\"></i> Modifier mon profil
            </a>
        </div>
    </div>

    ";
        // line 28
        if (CoreExtension::inFilter("ROLE_DONNEUR", CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 28, $this->source); })()), "roles", [], "any", false, false, false, 28))) {
            // line 29
            yield "        ";
            // line 30
            yield "        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header profil-header\">
                <h4><i class=\"fas fa-box-open\"></i> Articles disponibles</h4>
            </div>
            <div class=\"card-body\">
                ";
            // line 35
            $context["articlesDisponibles"] = [];
            // line 36
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articlesPublies"]) || array_key_exists("articlesPublies", $context) ? $context["articlesPublies"] : (function () { throw new RuntimeError('Variable "articlesPublies" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
                // line 37
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["art"], "statut", [], "any", false, false, false, 37) == "disponible")) {
                    // line 38
                    yield "                        ";
                    $context["articlesDisponibles"] = Twig\Extension\CoreExtension::merge((isset($context["articlesDisponibles"]) || array_key_exists("articlesDisponibles", $context) ? $context["articlesDisponibles"] : (function () { throw new RuntimeError('Variable "articlesDisponibles" does not exist.', 38, $this->source); })()), [$context["art"]]);
                    // line 39
                    yield "                    ";
                }
                // line 40
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['art'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "
                ";
            // line 42
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["articlesDisponibles"]) || array_key_exists("articlesDisponibles", $context) ? $context["articlesDisponibles"] : (function () { throw new RuntimeError('Variable "articlesDisponibles" does not exist.', 42, $this->source); })()))) {
                // line 43
                yield "                    <p class=\"text-muted\">Aucun article disponible.</p>
                ";
            } else {
                // line 45
                yield "                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>État</th>
                                <th>Ville</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articlesDisponibles"]) || array_key_exists("articlesDisponibles", $context) ? $context["articlesDisponibles"] : (function () { throw new RuntimeError('Variable "articlesDisponibles" does not exist.', 56, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 57
                    yield "                            <tr>
                                <td>";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 58), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "etat", [], "any", false, false, false, 59), "html", null, true);
                    yield "</td>
                                <td>";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "ville", [], "any", false, false, false, 60), "html", null, true);
                    yield "</td>
                                <td><span class=\"profil-badge-secondary\">";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 61), "html", null, true);
                    yield "</span></td>
                                <td>
                                    <a href=\"";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                    yield "\"
                                       class=\"btn profil-btn-warning btn-sm\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                    ";
                    // line 68
                    yield "                                    <form action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    yield "\"
                                          method=\"post\"
                                          style=\"display:inline;\"
                                          onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet article ?');\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"fas fa-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                yield "                        </tbody>
                    </table>
                ";
            }
            // line 82
            yield "            </div>
        </div>

        ";
            // line 86
            yield "        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header profil-header\">
                <h4><i class=\"fas fa-clock\"></i> Articles en attente de confirmation</h4>
            </div>
            <div class=\"card-body\">
                ";
            // line 91
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["articlesDemandes"]) || array_key_exists("articlesDemandes", $context) ? $context["articlesDemandes"] : (function () { throw new RuntimeError('Variable "articlesDemandes" does not exist.', 91, $this->source); })()))) {
                // line 92
                yield "                    <p class=\"text-muted\">Aucun article en attente de confirmation.</p>
                ";
            } else {
                // line 94
                yield "                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Demandeur</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articlesDemandes"]) || array_key_exists("articlesDemandes", $context) ? $context["articlesDemandes"] : (function () { throw new RuntimeError('Variable "articlesDemandes" does not exist.', 103, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
                    // line 104
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "article", [], "any", false, false, false, 104), "utilisateur", [], "any", false, false, false, 104) == (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 104, $this->source); })()))) {
                        // line 105
                        yield "                                <tr>
                                    <td>";
                        // line 106
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "article", [], "any", false, false, false, 106), "titre", [], "any", false, false, false, 106), "html", null, true);
                        yield "</td>
                                    <td>";
                        // line 107
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "utilisateur", [], "any", false, false, false, 107), "nom", [], "any", false, false, false, 107), "html", null, true);
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "utilisateur", [], "any", false, false, false, 107), "email", [], "any", false, false, false, 107), "html", null, true);
                        yield ")</td>
                                    <td>
                                        <form method=\"post\"
                                              action=\"";
                        // line 110
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_confirmer", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "article", [], "any", false, false, false, 110), "id", [], "any", false, false, false, 110)]), "html", null, true);
                        yield "\"
                                              style=\"display:inline;\">
                                            <button type=\"submit\" class=\"btn btn-success btn-sm\">Confirmer</button>
                                        </form>

                                        <form method=\"post\"
                                              action=\"";
                        // line 116
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_annuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "article", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116)]), "html", null, true);
                        yield "\"
                                              style=\"display:inline;\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                                        </form>
                                    </td>
                                </tr>
                            ";
                    }
                    // line 123
                    yield "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['demande'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                yield "                        </tbody>
                    </table>
                ";
            }
            // line 127
            yield "            </div>
        </div>

        ";
            // line 131
            yield "        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header profil-header\">
                <h4><i class=\"fas fa-check-circle\"></i> Articles réservés</h4>
            </div>
            <div class=\"card-body\">
                ";
            // line 136
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["articlesReserves"]) || array_key_exists("articlesReserves", $context) ? $context["articlesReserves"] : (function () { throw new RuntimeError('Variable "articlesReserves" does not exist.', 136, $this->source); })()))) {
                // line 137
                yield "                    <p class=\"text-muted\">Aucun article réservé.</p>
                ";
            } else {
                // line 139
                yield "                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articlesReserves"]) || array_key_exists("articlesReserves", $context) ? $context["articlesReserves"] : (function () { throw new RuntimeError('Variable "articlesReserves" does not exist.', 147, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 148
                    yield "                            <tr>
                                <td>";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 149), "html", null, true);
                    yield "</td>
                                <td><span class=\"profil-badge-secondary\">";
                    // line 150
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 150), "html", null, true);
                    yield "</span></td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                yield "                        </tbody>
                    </table>
                ";
            }
            // line 156
            yield "            </div>
        </div>
    ";
        }
        // line 159
        yield "</div>

";
        // line 162
        yield "<button id=\"back-to-top\" title=\"Revenir en haut\">
    <i class=\"fas fa-arrow-up\"></i>
</button>
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
        return "utilisateur/profil.html.twig";
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
        return array (  398 => 162,  394 => 159,  389 => 156,  384 => 153,  375 => 150,  371 => 149,  368 => 148,  364 => 147,  354 => 139,  350 => 137,  348 => 136,  341 => 131,  336 => 127,  331 => 124,  325 => 123,  315 => 116,  306 => 110,  298 => 107,  294 => 106,  291 => 105,  288 => 104,  284 => 103,  273 => 94,  269 => 92,  267 => 91,  260 => 86,  255 => 82,  250 => 79,  232 => 68,  225 => 63,  220 => 61,  216 => 60,  212 => 59,  208 => 58,  205 => 57,  201 => 56,  188 => 45,  184 => 43,  182 => 42,  179 => 41,  173 => 40,  170 => 39,  167 => 38,  164 => 37,  159 => 36,  157 => 35,  150 => 30,  148 => 29,  146 => 28,  136 => 21,  132 => 20,  128 => 19,  124 => 18,  120 => 17,  106 => 8,  101 => 5,  88 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Profil de {{ utilisateur.nom }}{% endblock %}

{% block content %}
<div class=\"container mt-5\">
    <h2 class=\"text-center profil-titre mb-4\">
        <i class=\"fas fa-user-circle\"></i>
        Profil de {{ utilisateur.nom }} {{ utilisateur.prenom }}
    </h2>

    <!-- Coordonnées utilisateur -->
    <div class=\"card shadow-sm mb-4\">
        <div class=\"card-header profil-header\">
            <h4><i class=\"fas fa-id-card\"></i> Coordonnées</h4>
        </div>
        <div class=\"card-body\">
            <p><strong>Nom :</strong> {{ utilisateur.nom }}</p>
            <p><strong>Prénom :</strong> {{ utilisateur.prenom }}</p>
            <p><strong>Email :</strong> {{ utilisateur.email }}</p>
            <p><strong>Téléphone :</strong> {{ utilisateur.telephone }}</p>
            <a href=\"{{ path('utilisateur_modifier', { id: utilisateur.id }) }}\"
               class=\"btn profil-btn-primary\">
                <i class=\"fas fa-edit\"></i> Modifier mon profil
            </a>
        </div>
    </div>

    {% if 'ROLE_DONNEUR' in utilisateur.roles %}
        {# ---------------- Articles disponibles ---------------- #}
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header profil-header\">
                <h4><i class=\"fas fa-box-open\"></i> Articles disponibles</h4>
            </div>
            <div class=\"card-body\">
                {% set articlesDisponibles = [] %}
                {% for art in articlesPublies %}
                    {% if art.statut == 'disponible' %}
                        {% set articlesDisponibles = articlesDisponibles|merge([art]) %}
                    {% endif %}
                {% endfor %}

                {% if articlesDisponibles is empty %}
                    <p class=\"text-muted\">Aucun article disponible.</p>
                {% else %}
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>État</th>
                                <th>Ville</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for article in articlesDisponibles %}
                            <tr>
                                <td>{{ article.titre }}</td>
                                <td>{{ article.etat }}</td>
                                <td>{{ article.ville }}</td>
                                <td><span class=\"profil-badge-secondary\">{{ article.statut }}</span></td>
                                <td>
                                    <a href=\"{{ path('article_modifier', { id: article.id }) }}\"
                                       class=\"btn profil-btn-warning btn-sm\">
                                        <i class=\"fas fa-edit\"></i> Modifier
                                    </a>
                                    {# Formulaire POST pour supprimer #}
                                    <form action=\"{{ path('article_supprimer', { id: article.id }) }}\"
                                          method=\"post\"
                                          style=\"display:inline;\"
                                          onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet article ?');\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                            <i class=\"fas fa-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>

        {# ---------------- Articles en attente (EN_COURS) ---------------- #}
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header profil-header\">
                <h4><i class=\"fas fa-clock\"></i> Articles en attente de confirmation</h4>
            </div>
            <div class=\"card-body\">
                {% if articlesDemandes is empty %}
                    <p class=\"text-muted\">Aucun article en attente de confirmation.</p>
                {% else %}
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Demandeur</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for demande in articlesDemandes %}
                            {% if demande.article.utilisateur == utilisateur %}
                                <tr>
                                    <td>{{ demande.article.titre }}</td>
                                    <td>{{ demande.utilisateur.nom }} ({{ demande.utilisateur.email }})</td>
                                    <td>
                                        <form method=\"post\"
                                              action=\"{{ path('article_confirmer', { id: demande.article.id }) }}\"
                                              style=\"display:inline;\">
                                            <button type=\"submit\" class=\"btn btn-success btn-sm\">Confirmer</button>
                                        </form>

                                        <form method=\"post\"
                                              action=\"{{ path('article_annuler', { id: demande.article.id }) }}\"
                                              style=\"display:inline;\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                                        </form>
                                    </td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>

        {# ---------------- Articles réservés ---------------- #}
        <div class=\"card shadow-sm mb-4\">
            <div class=\"card-header profil-header\">
                <h4><i class=\"fas fa-check-circle\"></i> Articles réservés</h4>
            </div>
            <div class=\"card-body\">
                {% if articlesReserves is empty %}
                    <p class=\"text-muted\">Aucun article réservé.</p>
                {% else %}
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for article in articlesReserves %}
                            <tr>
                                <td>{{ article.titre }}</td>
                                <td><span class=\"profil-badge-secondary\">{{ article.statut }}</span></td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>
    {% endif %}
</div>

{# Bouton \"Retour en haut\" si nécessaire #}
<button id=\"back-to-top\" title=\"Revenir en haut\">
    <i class=\"fas fa-arrow-up\"></i>
</button>
{% endblock %}
", "utilisateur/profil.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\utilisateur\\profil.html.twig");
    }
}
