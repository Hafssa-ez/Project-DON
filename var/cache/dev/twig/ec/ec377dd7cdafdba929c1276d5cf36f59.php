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
class __TwigTemplate_b7514d2a3d12254c193565d0c9dd4465 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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

        // line 4
        yield "    Accueil - Project DON
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "


";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 13
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "        <!-- Modal -->
        <div class=\"modal fade\" id=\"flashModal\" tabindex=\"-1\" aria-labelledby=\"flashModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content shadow-lg border-0\">
                    <div class=\"modal-header text-white ";
                // line 18
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
                // line 23
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
        // line 40
        yield "

  <!-- Secondary Navbar -->
<div class=\"nav-container\">
    <nav class=\"nav nav-pills justify-content-between align-items-center\">
        



        <!-- Menu déroulant pour la Ville -->
        <div class=\"dropdown\">
            <a class=\"nav-link btn btn-secondary dropdown-toggle\" href=\"#\" id=\"villeDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                ";
        // line 52
        yield (((array_key_exists("selectedVille", $context) && (isset($context["selectedVille"]) || array_key_exists("selectedVille", $context) ? $context["selectedVille"] : (function () { throw new RuntimeError('Variable "selectedVille" does not exist.', 52, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedVille"]) || array_key_exists("selectedVille", $context) ? $context["selectedVille"] : (function () { throw new RuntimeError('Variable "selectedVille" does not exist.', 52, $this->source); })()), "html", null, true)) : ("Ville"));
        yield "
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"villeDropdown\">
                <li><a class=\"dropdown-item\" href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["ville" => null, "categorie" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "get", ["categorie"], "method", false, false, false, 55)]), "html", null, true);
        yield "\">Toutes les villes</a></li>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 57
            yield "                    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "ville", [], "any", false, false, false, 57))) {
                // line 58
                yield "                        <li><a class=\"dropdown-item\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["ville" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "ville", [], "any", false, false, false, 58), "categorie" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "get", ["categorie"], "method", false, false, false, 58)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "ville", [], "any", false, false, false, 58), "html", null, true);
                yield "</a></li>
                    ";
            }
            // line 60
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "            </ul>
        </div>

        <!-- Menu déroulant pour la Catégorie -->
        <div class=\"dropdown\">
            <a class=\"nav-link btn btn-secondary dropdown-toggle\" href=\"#\" id=\"categoryDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                ";
        // line 67
        yield (((array_key_exists("selectedCategorie", $context) && (isset($context["selectedCategorie"]) || array_key_exists("selectedCategorie", $context) ? $context["selectedCategorie"] : (function () { throw new RuntimeError('Variable "selectedCategorie" does not exist.', 67, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedCategorie"]) || array_key_exists("selectedCategorie", $context) ? $context["selectedCategorie"] : (function () { throw new RuntimeError('Variable "selectedCategorie" does not exist.', 67, $this->source); })()), "html", null, true)) : ("Catégorie"));
        yield "
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"categoryDropdown\">
                <li><a class=\"dropdown-item\" href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["ville" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "get", ["ville"], "method", false, false, false, 70), "categorie" => null]), "html", null, true);
        yield "\">Toutes les catégories</a></li>
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 72
            yield "                    <li><a class=\"dropdown-item\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["categorie" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 72), "ville" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "get", ["ville"], "method", false, false, false, 72)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 72), "html", null, true);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "            </ul>
        </div>

        <!-- Bouton Tous les Articles (Réinitialisation des filtres) -->
        <a class=\"nav-link btn btn-secondary\" href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">Tous les Articles</a>
    </nav>
</div>


    <!-- Slogan Section -->
    <section class=\"slogan-container\">
        <img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/slogan.png"), "html", null, true);
        yield "\" alt=\"Slogan\" class=\"slogan-image\">
        <div class=\"slogan-text\">Donner une seconde vie à vos objets</h1>
    </section>

    <!-- Section Nouveaux Articles -->
    <h3 class=\"section-title\">Nouveaux Articles</h3>
    <div class=\"container mt-4 new-items-section\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 93, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 94
            yield "                <div class=\"col\">
                    <div class=\"card h-100\">
                       <img src=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "images", [], "any", false, false, false, 96))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 96), "html", null, true);
            yield "\">


                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 100), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 101), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>État :</strong> ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "etat", [], "any", false, false, false, 102), "html", null, true);
            yield "</p>
                            <p class=\"card-text\"><strong>Date d'ajout :</strong> ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "dateAjout", [], "any", false, false, false, 103), "d M Y"), "html", null, true);
            yield "</p>
                           <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" class=\"btn btn-custom\">Demander</a>

                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            yield "                <p>Aucun article disponible pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "        </div>
    </div>

    <!-- Section Articles Réservés -->
    <h3 class=\"section-title\">Articles Réservés</h3>
    <div class=\"container mt-4 reserved-items-section\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
      ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reserved_articles"]) || array_key_exists("reserved_articles", $context) ? $context["reserved_articles"] : (function () { throw new RuntimeError('Variable "reserved_articles" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 120
            yield "    <div class=\"col\">
        <div class=\"card h-100\">
            <img src=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "images", [], "any", false, false, false, 122))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 122), "html", null, true);
            yield "\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 124), "html", null, true);
            yield "</h5>
                <p class=\"card-text\">";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 125), "html", null, true);
            yield "</p>
                <p class=\"card-text\"><strong>État :</strong> ";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "etat", [], "any", false, false, false, 126), "html", null, true);
            yield "</p>

                <!-- Bouton Réservé désactivé -->
                <button class=\"btn btn-secondary\" disabled>Réservé</button>

                <!-- Bouton “Commenter” s’affiche uniquement si l’utilisateur est le receveur -->                
                ";
            // line 132
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132) && CoreExtension::inFilter("ROLE_RECEVEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "roles", [], "any", false, false, false, 132)))) {
                // line 133
                yield "                    ";
                // line 134
                yield "                    ";
                // line 135
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                yield "#section_commentaires\" 
                       class=\"btn btn-primary\">Commenter</a>
                ";
            }
            // line 138
            yield "            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "
    </div>

    <!-- Section Contact -->
    <section id=\"contact\" class=\"container\">
        <div class=\"title\">Contactez-nous</div>
        <div class=\"content\">
            <!-- Affichage des messages flash -->
            ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "flashes", ["success"], "method", false, false, false, 150));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 151
            yield "                <div class=\"alert alert-success mt-3\">
                    ";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "flashes", ["error"], "method", false, false, false, 155));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 156
            yield "                <div class=\"alert alert-danger mt-3\">
                    ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "             
            <!-- Formulaire de contact -->

            <form method=\"post\" action=\"";
        // line 163
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  432 => 163,  427 => 160,  418 => 157,  415 => 156,  410 => 155,  401 => 152,  398 => 151,  394 => 150,  384 => 142,  375 => 138,  368 => 135,  366 => 134,  364 => 133,  362 => 132,  353 => 126,  349 => 125,  345 => 124,  338 => 122,  334 => 120,  330 => 119,  321 => 112,  314 => 110,  303 => 104,  299 => 103,  295 => 102,  291 => 101,  287 => 100,  278 => 96,  274 => 94,  269 => 93,  258 => 85,  248 => 78,  242 => 74,  231 => 72,  227 => 71,  223 => 70,  217 => 67,  209 => 61,  203 => 60,  195 => 58,  192 => 57,  188 => 56,  184 => 55,  178 => 52,  164 => 40,  138 => 23,  122 => 18,  116 => 14,  111 => 13,  107 => 12,  102 => 9,  89 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Accueil - Project DON
{% endblock %}


{% block content %}



{% for type, messages in app.flashes %}
    {% for message in messages %}
        <!-- Modal -->
        <div class=\"modal fade\" id=\"flashModal\" tabindex=\"-1\" aria-labelledby=\"flashModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content shadow-lg border-0\">
                    <div class=\"modal-header text-white {% if type == 'success' %}bg-success{% elseif type == 'danger' %}bg-danger{% elseif type == 'warning' %}bg-warning{% else %}bg-primary{% endif %}\">
                        <h5 class=\"modal-title fw-bold\" id=\"flashModalLabel\">Notification</h5>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>
                    <div class=\"modal-body text-center fs-5\">
                        {{ message }}
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
    {% endfor %}
{% endfor %}


  <!-- Secondary Navbar -->
<div class=\"nav-container\">
    <nav class=\"nav nav-pills justify-content-between align-items-center\">
        



        <!-- Menu déroulant pour la Ville -->
        <div class=\"dropdown\">
            <a class=\"nav-link btn btn-secondary dropdown-toggle\" href=\"#\" id=\"villeDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                {{ selectedVille is defined and selectedVille ? selectedVille : 'Ville' }}
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"villeDropdown\">
                <li><a class=\"dropdown-item\" href=\"{{ path('accueil', {'ville': null, 'categorie': app.request.get('categorie')}) }}\">Toutes les villes</a></li>
                {% for article in articles %}
                    {% if article.ville is not empty %}
                        <li><a class=\"dropdown-item\" href=\"{{ path('accueil', {'ville': article.ville, 'categorie': app.request.get('categorie')}) }}\">{{ article.ville }}</a></li>
                    {% endif %}
                {% endfor %}
            </ul>
        </div>

        <!-- Menu déroulant pour la Catégorie -->
        <div class=\"dropdown\">
            <a class=\"nav-link btn btn-secondary dropdown-toggle\" href=\"#\" id=\"categoryDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                {{ selectedCategorie is defined and selectedCategorie ? selectedCategorie : 'Catégorie' }}
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"categoryDropdown\">
                <li><a class=\"dropdown-item\" href=\"{{ path('accueil', {'ville': app.request.get('ville'), 'categorie': null}) }}\">Toutes les catégories</a></li>
                {% for categorie in categories %}
                    <li><a class=\"dropdown-item\" href=\"{{ path('accueil', {'categorie': categorie.id, 'ville': app.request.get('ville')}) }}\">{{ categorie.nom }}</a></li>
                {% endfor %}
            </ul>
        </div>

        <!-- Bouton Tous les Articles (Réinitialisation des filtres) -->
        <a class=\"nav-link btn btn-secondary\" href=\"{{ path('accueil') }}\">Tous les Articles</a>
    </nav>
</div>


    <!-- Slogan Section -->
    <section class=\"slogan-container\">
        <img src=\"{{ asset('images/slogan.png') }}\" alt=\"Slogan\" class=\"slogan-image\">
        <div class=\"slogan-text\">Donner une seconde vie à vos objets</h1>
    </section>

    <!-- Section Nouveaux Articles -->
    <h3 class=\"section-title\">Nouveaux Articles</h3>
    <div class=\"container mt-4 new-items-section\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
            {% for article in articles %}
                <div class=\"col\">
                    <div class=\"card h-100\">
                       <img src=\"{{ asset('uploads/' ~ article.images) }}\" class=\"card-img-top\" alt=\"{{ article.titre }}\">


                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ article.titre }}</h5>
                            <p class=\"card-text\">{{ article.description }}</p>
                            <p class=\"card-text\"><strong>État :</strong> {{ article.etat }}</p>
                            <p class=\"card-text\"><strong>Date d'ajout :</strong> {{ article.dateAjout|date('d M Y') }}</p>
                           <a href=\"{{ path('details', {'id': article.id}) }}\" class=\"btn btn-custom\">Demander</a>

                        </div>
                    </div>
                </div>
            {% else %}
                <p>Aucun article disponible pour le moment.</p>
            {% endfor %}
        </div>
    </div>

    <!-- Section Articles Réservés -->
    <h3 class=\"section-title\">Articles Réservés</h3>
    <div class=\"container mt-4 reserved-items-section\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">
      {% for article in reserved_articles %}
    <div class=\"col\">
        <div class=\"card h-100\">
            <img src=\"{{ asset('uploads/' ~ article.images) }}\" class=\"card-img-top\" alt=\"{{ article.titre }}\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ article.titre }}</h5>
                <p class=\"card-text\">{{ article.description }}</p>
                <p class=\"card-text\"><strong>État :</strong> {{ article.etat }}</p>

                <!-- Bouton Réservé désactivé -->
                <button class=\"btn btn-secondary\" disabled>Réservé</button>

                <!-- Bouton “Commenter” s’affiche uniquement si l’utilisateur est le receveur -->                
                {% if app.user and 'ROLE_RECEVEUR' in app.user.roles %}
                    {# Vérifier si c’est vraiment réservé par app.user ou juste un article en 'reserve' #}
                    {# Si vous n’avez pas la distinction, vous pourriez juste vérifier 'statut == \"reserve\"' #}
                    <a href=\"{{ path('details', { id: article.id }) }}#section_commentaires\" 
                       class=\"btn btn-primary\">Commenter</a>
                {% endif %}
            </div>
        </div>
    </div>
{% endfor %}

    </div>

    <!-- Section Contact -->
    <section id=\"contact\" class=\"container\">
        <div class=\"title\">Contactez-nous</div>
        <div class=\"content\">
            <!-- Affichage des messages flash -->
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success mt-3\">
                    {{ message }}
                </div>
            {% endfor %}
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger mt-3\">
                    {{ message }}
                </div>
            {% endfor %}
             
            <!-- Formulaire de contact -->

            <form method=\"post\" action=\"{{ path('contact_submit') }}\">
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




{% endblock %}
", "accueil/index.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\accueil\\index.html.twig");
    }
}
