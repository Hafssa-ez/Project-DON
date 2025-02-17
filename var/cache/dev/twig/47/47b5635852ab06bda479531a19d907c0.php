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

/* base.html.twig */
class __TwigTemplate_6f668a60e0fc70e1b0a1400b64a3570d extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    ";
        // line 10
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("style");
        yield "
    <link rel=\"stylesheet\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css\">
</head>

<body>
    <!-- Navbar -->
    ";
        // line 17
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 102
        yield "
    ";
        // line 103
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 104
        yield "
    <!-- Content -->
    <div class=\"container\">
        ";
        // line 107
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 108
        yield "
        <!-- Messages flash -->
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "flashes", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 111
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 112
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                    ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        yield "    </div>

    <!-- Footer -->
    ";
        // line 120
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 131
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
        crossorigin=\"anonymous\"></script>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "Project DON";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 18
        yield "    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
        <div class=\"container-fluid\">
            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        yield "\" alt=\"logo\" width=\"60\" height=\"60\">
            <a class=\"navbar-brand\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">DON</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                
                <!-- Barre de recherche -->
                <form class=\"d-flex align-items-center w-90 gap-2\" role=\"search\" method=\"GET\" action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">
                    <input 
                        class=\"form-control large-search-bar me-2\" 
                        type=\"search\" 
                        name=\"q\" 
                        placeholder=\"Rechercher un article...\" 
                        value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "query", [], "any", false, false, false, 36), "get", ["q"], "method", false, false, false, 36), "html", null, true);
        yield "\" 
                        aria-label=\"Search\"
                    >
                    <button class=\"btn btn-custom\" type=\"submit\">Rechercher</button>
                </form>

                <div class=\"d-flex btn-group-custom ms-auto\">
                    <!-- Bouton Ajouter un article -->
                    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_article");
        yield "\">
                        <button class=\"btn btn-custom\" type=\"button\">
                            <i class=\"bi bi-plus-circle\"></i> Ajouter un article
                        </button>
                    </a>

                    <!-- Boutons de connexion / Profil -->
                    <div class=\"d-flex btn-account-group\">
                        ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            yield "                            <!-- Dropdown contenant le nom de l'utilisateur -->
                            <div class=\"dropdown\">
                               <button class=\"btn btn-custom dropdown-toggle\" type=\"button\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                         <i class=\"bi bi-person-circle\"></i> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "nom", [], "any", false, false, false, 56), "html", null, true);
            yield "
                               </button>

                                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                                    <!-- Section Nom de l'utilisateur -->
                                    <li class=\"dropdown-header text-center fw-bold\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true);
            yield "</li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    
                                    <!-- Lien vers le profil -->
                                    <li>
                                        <a class=\"dropdown-item \" href=\"";
            // line 66
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_profil");
            yield "\">
                                            <i class=\"bi bi-person\"></i> Mon Profil
                                        </a>
                                    </li>

                                    <li><hr class=\"dropdown-divider\"></li>

                                    <!-- Bouton de déconnexion -->
                                    <li>
                                        <a class=\"dropdown-item text-danger\" href=\"";
            // line 75
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                            <i class=\"bi bi-box-arrow-left\"></i> Se Déconnecter
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        ";
        } else {
            // line 82
            yield "                            <!-- Bouton S'inscrire -->
                            <a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_create");
            yield "\">
                                <button class=\"btn btn-custom\" type=\"button\">
                                    <i class=\"bi bi-person-plus\"></i> S'inscrire
                                </button>
                            </a>
                            
                            <!-- Bouton Se connecter -->
                            <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                                <button class=\"btn btn-custom\" type=\"button\">
                                    <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                                </button>
                            </a>
                        ";
        }
        // line 96
        yield "                    </div>
                </div>
            </div>
        </div>
    </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 103
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 107
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 121
        yield "    <div id=\"hr\"></div>
    <footer>
        <div>&copy; 2024 Project DON. Tous droits réservés.</div>
        <div>
            <a href=\"#\" class=\"footer-a\"><i class=\"bi bi-info-circle\"></i> À propos</a> |
            <a href=\"#\" class=\"footer-a\"><i class=\"bi bi-lock\"></i> Confidentialité</a> |
            <a href=\"#\" class=\"footer-a\"><i class=\"bi bi-file-earmark-text\"></i> Conditions d'utilisation</a>
        </div>
    </footer>
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
        return "base.html.twig";
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
        return array (  375 => 121,  362 => 120,  340 => 107,  318 => 103,  302 => 96,  293 => 90,  283 => 83,  280 => 82,  270 => 75,  258 => 66,  250 => 61,  242 => 56,  237 => 53,  235 => 52,  224 => 44,  213 => 36,  204 => 30,  192 => 21,  188 => 20,  184 => 18,  171 => 17,  148 => 7,  131 => 131,  129 => 120,  124 => 117,  118 => 116,  109 => 113,  104 => 112,  99 => 111,  95 => 110,  91 => 108,  89 => 107,  84 => 104,  82 => 103,  79 => 102,  77 => 17,  67 => 10,  61 => 7,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Project DON{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    {{ encore_entry_link_tags('style') }}
    <link rel=\"stylesheet\"
        href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css\">
</head>

<body>
    <!-- Navbar -->
    {% block navbar %}
    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
        <div class=\"container-fluid\">
            <img src=\"{{ asset('images/logo1.png') }}\" alt=\"logo\" width=\"60\" height=\"60\">
            <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">DON</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                
                <!-- Barre de recherche -->
                <form class=\"d-flex align-items-center w-90 gap-2\" role=\"search\" method=\"GET\" action=\"{{ path('accueil') }}\">
                    <input 
                        class=\"form-control large-search-bar me-2\" 
                        type=\"search\" 
                        name=\"q\" 
                        placeholder=\"Rechercher un article...\" 
                        value=\"{{ app.request.query.get('q') }}\" 
                        aria-label=\"Search\"
                    >
                    <button class=\"btn btn-custom\" type=\"submit\">Rechercher</button>
                </form>

                <div class=\"d-flex btn-group-custom ms-auto\">
                    <!-- Bouton Ajouter un article -->
                    <a href=\"{{ path('ajouter_article') }}\">
                        <button class=\"btn btn-custom\" type=\"button\">
                            <i class=\"bi bi-plus-circle\"></i> Ajouter un article
                        </button>
                    </a>

                    <!-- Boutons de connexion / Profil -->
                    <div class=\"d-flex btn-account-group\">
                        {% if app.user %}
                            <!-- Dropdown contenant le nom de l'utilisateur -->
                            <div class=\"dropdown\">
                               <button class=\"btn btn-custom dropdown-toggle\" type=\"button\" id=\"userDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                         <i class=\"bi bi-person-circle\"></i> {{ app.user.nom }}
                               </button>

                                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                                    <!-- Section Nom de l'utilisateur -->
                                    <li class=\"dropdown-header text-center fw-bold\">{{ app.user.nom }}</li>
                                    <li><hr class=\"dropdown-divider\"></li>
                                    
                                    <!-- Lien vers le profil -->
                                    <li>
                                        <a class=\"dropdown-item \" href=\"{{ path('utilisateur_profil') }}\">
                                            <i class=\"bi bi-person\"></i> Mon Profil
                                        </a>
                                    </li>

                                    <li><hr class=\"dropdown-divider\"></li>

                                    <!-- Bouton de déconnexion -->
                                    <li>
                                        <a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\">
                                            <i class=\"bi bi-box-arrow-left\"></i> Se Déconnecter
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        {% else %}
                            <!-- Bouton S'inscrire -->
                            <a href=\"{{ path('utilisateur_create') }}\">
                                <button class=\"btn btn-custom\" type=\"button\">
                                    <i class=\"bi bi-person-plus\"></i> S'inscrire
                                </button>
                            </a>
                            
                            <!-- Bouton Se connecter -->
                            <a href=\"{{ path('app_login') }}\">
                                <button class=\"btn btn-custom\" type=\"button\">
                                    <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                                </button>
                            </a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {% endblock %}

    {% block body %}{% endblock %}

    <!-- Content -->
    <div class=\"container\">
        {% block content %}{% endblock %}

        <!-- Messages flash -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <!-- Footer -->
    {% block footer %}
    <div id=\"hr\"></div>
    <footer>
        <div>&copy; 2024 Project DON. Tous droits réservés.</div>
        <div>
            <a href=\"#\" class=\"footer-a\"><i class=\"bi bi-info-circle\"></i> À propos</a> |
            <a href=\"#\" class=\"footer-a\"><i class=\"bi bi-lock\"></i> Confidentialité</a> |
            <a href=\"#\" class=\"footer-a\"><i class=\"bi bi-file-earmark-text\"></i> Conditions d'utilisation</a>
        </div>
    </footer>
    {% endblock %}

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
        crossorigin=\"anonymous\"></script>
</body>

</html>
", "base.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\base.html.twig");
    }
}
