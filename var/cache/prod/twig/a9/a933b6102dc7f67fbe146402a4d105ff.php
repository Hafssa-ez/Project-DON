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
class __TwigTemplate_b00b99dd34efeb488c96d015f4081d98 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/profil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Profil de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
    <div class=\"container mt-4\">
        <h2 class=\"mb-4 text-primary\">Profil de ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "nom", [], "any", false, false, false, 8), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "prenom", [], "any", false, false, false, 8), "html", null, true);
        yield "</h2>

        <!-- Coordonnées utilisateur -->
        <div class=\"card mb-4 shadow-sm border-0\">
            <div class=\"card-header bg-primary text-white\">
                <h4>Coordonnées</h4>
            </div>
            <div class=\"card-body\">
                <p><strong>Nom :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
                <p><strong>Prénom :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "prenom", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
                <p><strong>Pseudo :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "pseudo", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                <p><strong>Email :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "email", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
                <p><strong>Téléphone :</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "telephone", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                <a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"btn btn-custom\">Modifier mon profil</a>
            </div>
        </div>

        <!-- Articles publiés -->
        ";
        // line 26
        if (CoreExtension::inFilter("ROLE_DONNEUR", CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "roles", [], "any", false, false, false, 26))) {
            // line 27
            yield "            <div class=\"card mb-4 shadow-sm border-0\">
                <div class=\"card-header bg-info text-white\">
                    <h4>Articles publiés</h4>
                </div>
                <div class=\"card-body\">
                    ";
            // line 32
            if (Twig\Extension\CoreExtension::testEmpty(($context["articlesPublies"] ?? null))) {
                // line 33
                yield "                        <p>Aucun article publié.</p>
                    ";
            } else {
                // line 35
                yield "                        <table class=\"table table-striped table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Titre</th>
                                    <th>État</th>
                                    <th>Ville</th>
                                    <th>Date d'ajout</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["articlesReserves"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                    // line 47
                    yield "    <tr>
        <td>";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getArticle", [], "method", false, false, false, 48), "titre", [], "any", false, false, false, 48), "html", null, true);
                    yield "</td>
        <td>";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getUtilisateur", [], "method", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getUtilisateur", [], "method", false, false, false, 49), "email", [], "any", false, false, false, 49), "html", null, true);
                    yield ")</td>
        <td>";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getCreatedAt", [], "method", false, false, false, 50), "d/m/Y H:i"), "html", null, true);
                    yield "</td>
        <td>
            <a href=\"";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getArticle", [], "method", false, false, false, 52), "getId", [], "method", false, false, false, 52)]), "html", null, true);
                    yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
            <a href=\"";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getArticle", [], "method", false, false, false, 53), "getId", [], "method", false, false, false, 53)]), "html", null, true);
                    yield "\" class=\"btn btn-danger btn-sm\">Supprimer</a>
        </td>
    </tr>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 60
            yield "                </div>
            </div>
        ";
        }
        // line 63
        yield "
        <!-- Articles en attente de confirmation -->
        ";
        // line 65
        if (CoreExtension::inFilter("ROLE_DONNEUR", CoreExtension::getAttribute($this->env, $this->source, ($context["utilisateur"] ?? null), "roles", [], "any", false, false, false, 65))) {
            // line 66
            yield "            <div class=\"card mb-4 shadow-sm border-0\">
                <div class=\"card-header bg-warning text-dark\">
                    <h4>Articles en attente de confirmation</h4>
                </div>
                <div class=\"card-body\">
                    ";
            // line 71
            if (Twig\Extension\CoreExtension::testEmpty(($context["articlesEnCours"] ?? null))) {
                // line 72
                yield "                        <p>Aucun article en attente de confirmation.</p>
                    ";
            } else {
                // line 74
                yield "                        <table class=\"table table-striped table-hover\">
                            <thead class=\"table-light\">
                                <tr>
                                    <th>Titre</th>
                                    <th>Demandeur</th>
                                    <th>Date de demande</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["articlesEnCours"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                    // line 85
                    yield "                                    <tr>
                                        <td>";
                    // line 86
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getArticle", [], "method", false, false, false, 86), "titre", [], "any", false, false, false, 86), "html", null, true);
                    yield "</td>
                                        <td>";
                    // line 87
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getUtilisateur", [], "method", false, false, false, 87), "nom", [], "any", false, false, false, 87), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getUtilisateur", [], "method", false, false, false, 87), "email", [], "any", false, false, false, 87), "html", null, true);
                    yield ")</td>
                                        <td>";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "getCreatedAt", [], "method", false, false, false, 88), "d/m/Y H:i"), "html", null, true);
                    yield "</td>
                                        <td>
                                            <form method=\"post\" action=\"";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_confirmer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                    yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Confirmer</button>
                                            </form>
                                            <form method=\"post\" action=\"";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_annuler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                    yield "\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Annuler</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 102
            yield "                </div>
            </div>
        ";
        }
        // line 105
        yield "    </div>

";
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
        return array (  271 => 105,  266 => 102,  261 => 99,  249 => 93,  243 => 90,  238 => 88,  232 => 87,  228 => 86,  225 => 85,  221 => 84,  209 => 74,  205 => 72,  203 => 71,  196 => 66,  194 => 65,  190 => 63,  185 => 60,  180 => 57,  170 => 53,  166 => 52,  161 => 50,  155 => 49,  151 => 48,  148 => 47,  144 => 46,  131 => 35,  127 => 33,  125 => 32,  118 => 27,  116 => 26,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  75 => 8,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "utilisateur/profil.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\utilisateur\\profil.html.twig");
    }
}
