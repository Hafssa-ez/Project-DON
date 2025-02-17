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

/* accueil/index.html.twig */
class __TwigTemplate_27287eb7df557c2c188efc4e066dd7a7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    Accueil - Project DON
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 12
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                yield "        <!-- Modal -->
        <div class=\"modal fade\" id=\"flashModal\" tabindex=\"-1\" aria-labelledby=\"flashModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content shadow-lg border-0\">
                    <div class=\"modal-header text-white ";
                // line 17
                if (($context["type"] == "success")) {
                    yield "bg-success";
                } elseif (($context["type"] == "danger")) {
                    yield "bg-danger";
                } elseif (($context["type"] == "warning")) {
                    yield "bg-warning";
                } else {
                    yield "bg-primary";
                }
                yield "\">
                        <h5 class=\"modal-title fw-bold\" id=\"flashModalLabel\">Notification</h5>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>
                    <div class=\"modal-body text-center fs-5\">
                        ";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                    <div class=\"modal-footer border-0 d-flex justify-content-center\">
                        <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">OK</button>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            document.addEventListener(\"DOMContentLoaded\", function() {
                var flashModal = new bootstrap.Modal(document.getElementById('flashModal'));
                flashModal.show();
            });
        </script>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "

  <!-- Secondary Navbar -->
<div class=\"nav-container\">
    <nav class=\"nav nav-pills justify-content-between align-items-center\">
        



        <!-- Menu déroulant pour la Ville -->
        <div class=\"dropdown\">
            <a class=\"nav-link btn btn-secondary dropdown-toggle\" href=\"#\" id=\"villeDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                ";
        // line 51
        yield (((array_key_exists("selectedVille", $context) && ($context["selectedVille"] ?? null))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedVille"] ?? null), "html", null, true)) : ("Ville"));
        yield "
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"villeDropdown\">
                <li><a class=\"dropdown-item\" href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["ville" => null, "categorie" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 54), "get", ["categorie"], "method", false, false, false, 54)]), "html", null, true);
        yield "\">Toutes les villes</a></li>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 56
            yield "                    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "ville", [], "any", false, false, false, 56))) {
                // line 57
                yield "                        <li><a class=\"dropdown-item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["ville" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "ville", [], "any", false, false, false, 57), "categorie" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 57), "get", ["categorie"], "method", false, false, false, 57)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "ville", [], "any", false, false, false, 57), "html", null, true);
                yield "</a></li>
                    ";
            }
            // line 59
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "            </ul>
        </div>

        <!-- Menu déroulant pour la Catégorie -->
        <div class=\"dropdown\">
            <a class=\"nav-link btn btn-secondary dropdown-toggle\" href=\"#\" id=\"categoryDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                ";
        // line 66
        yield (((array_key_exists("selectedCategorie", $context) && ($context["selectedCategorie"] ?? null))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCategorie"] ?? null), "html", null, true)) : ("Catégorie"));
        yield "
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"categoryDropdown\">
                <li><a class=\"dropdown-item\" href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["ville" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 69), "get", ["ville"], "method", false, false, false, 69), "categorie" => null]), "html", null, true);
        yield "\">Toutes les catégories</a></li>
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 71
            yield "                    <li><a class=\"dropdown-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["categorie" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 71), "ville" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "get", ["ville"], "method", false, false, false, 71)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 71), "html", null, true);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "            </ul>
        </div>

        <!-- Bouton Tous les Articles (Réinitialisation des filtres) -->
        <a class=\"nav-link btn btn-secondary\" href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">Tous les Articles</a>
    </nav>
</div>


    <!-- Slogan Section -->
    <section class=\"slogan-container\">
        <img src=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slogan.png"), "html", null, true);
        yield "\" alt=\"Slogan\" class=\"slogan-image\">
        <div class=\"slogan-text\">Donner une seconde vie à vos objets</div>
    </section>

    <!-- Section Nouveaux Articles -->
    <h3 class=\"section-title\">Nouveaux Articles</h3>
    <div class=\"container mt-4 new-items-section\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 93
            yield "                <div class=\"col\">
                    <div class=\"card h-100\">
                       <img src=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "images", [], "any", false, false, false, 95))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 95), "html", null, true);
            yield "\">


                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 99), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 100), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>État :</strong> ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "etat", [], "any", false, false, false, 101), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Date d'ajout :</strong> ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "dateAjout", [], "any", false, false, false, 102), "d M Y"), "html", null, true);
            yield "</p>
                           <a href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" class=\"btn btn-custom\">Demander</a>

                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 109
            yield "                <p>Aucun article disponible pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "        </div>
    </div>

    <!-- Section Articles Réservés -->
    <h3 class=\"section-title\">Articles Réservés</h3>
    <div class=\"container mt-4 reserved-items-section\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reserved_articles"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 119
            yield "                <div class=\"col\">
                    <div class=\"card h-100\">
                       <img src=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "images", [], "any", false, false, false, 121))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 121), "html", null, true);
            yield "\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 123), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 124), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>État :</strong> ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "etat", [], "any", false, false, false, 125), "html", null, true);
            yield "</p>
                
                            <button class=\"btn btn-secondary\" disabled>Réservé</button>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 132
            yield "                <p>Aucun article réservé pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "        </div>
    </div>

    <!-- Section Contact -->
    <section id=\"contact\" class=\"container\">
        <div class=\"title\">Contactez-nous</div>
        <div class=\"content\">
            <!-- Affichage des messages flash -->
            ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 143
            yield "                <div class=\"alert alert-success mt-3\">
                    ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 148
            yield "                <div class=\"alert alert-danger mt-3\">
                    ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "             
            <!-- Formulaire de contact -->

            <form method=\"post\" action=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_submit");
        yield "\">
                <div class=\"user-details\">
                    <div class=\"input-box\">
                        <span class=\"details\">Nom</span>
                        <input type=\"text\" name=\"nom\" placeholder=\"Votre nom\" required>
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Email</span>
                        <input type=\"email\" name=\"email\" placeholder=\"Votre email\" required>
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Sujet</span>
                        <input type=\"text\" name=\"sujet\" placeholder=\"Sujet de votre message\" required>
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Message</span>
                        <textarea name=\"message\" placeholder=\"Écrivez votre message ici...\" required></textarea>
                    </div>
                </div>
                <div class=\"button\">
                    <input type=\"submit\" value=\"Envoyer\">
                </div>
            </form>
        </div>
    </section>




";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "accueil/index.html.twig";
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
        return array (  390 => 155,  385 => 152,  376 => 149,  373 => 148,  368 => 147,  359 => 144,  356 => 143,  352 => 142,  342 => 134,  335 => 132,  323 => 125,  319 => 124,  315 => 123,  308 => 121,  304 => 119,  299 => 118,  290 => 111,  283 => 109,  272 => 103,  268 => 102,  264 => 101,  260 => 100,  256 => 99,  247 => 95,  243 => 93,  238 => 92,  227 => 84,  217 => 77,  211 => 73,  200 => 71,  196 => 70,  192 => 69,  186 => 66,  178 => 60,  172 => 59,  164 => 57,  161 => 56,  157 => 55,  153 => 54,  147 => 51,  133 => 39,  107 => 22,  91 => 17,  85 => 13,  80 => 12,  76 => 11,  72 => 9,  65 => 8,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "accueil/index.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\accueil\\index.html.twig");
    }
}
