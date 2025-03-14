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
   <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
    <div class=\"container-fluid\">
        ";
        // line 20
        yield "        <div class=\"d-flex align-items-center\">
            <img 
                src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        yield "\" 
                alt=\"logo\" 
                width=\"60\" 
                height=\"60\"
                class=\"me-2\"
            >
            <a class=\"navbar-brand\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">DON</a>
        </div>

        ";
        // line 33
        yield "        <form 
            class=\"d-flex align-items-center ms-3 me-auto gap-2\" 
            role=\"search\" 
            method=\"GET\" 
            action=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\"
        >
            <input
                class=\"form-control large-search-bar\" 
                type=\"search\" 
                name=\"q\" 
                placeholder=\"Rechercher un article...\"
                value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "query", [], "any", false, false, false, 44), "get", ["q"], "method", false, false, false, 44), "html", null, true);
        yield "\"
                aria-label=\"Search\"
            >
            <button class=\"btn btn-custom\" type=\"submit\">
                Rechercher
            </button>
        </form>

        ";
        // line 53
        yield "        <button 
            class=\"navbar-toggler\" 
            type=\"button\" 
            data-bs-toggle=\"collapse\"
            data-bs-target=\"#navbarSupportedContent\" 
            aria-controls=\"navbarSupportedContent\" 
            aria-expanded=\"false\"
            aria-label=\"Toggle navigation\"
        >
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        ";
        // line 66
        yield "        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            
            ";
        // line 69
        yield "            <div class=\"d-flex flex-column flex-lg-row align-items-start ms-auto btn-group-custom\">
                
                ";
        // line 72
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_article");
        yield "\" class=\"btn btn-custom my-1\">
                    <i class=\"bi bi-plus-circle\"></i> Ajouter un article
                </a>

                ";
        // line 77
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) {
            // line 78
            yield "                    <div class=\"dropdown my-1\">
                        <button 
                            class=\"btn btn-custom dropdown-toggle\" 
                            type=\"button\" 
                            id=\"userDropdown\" 
                            data-bs-toggle=\"dropdown\" 
                            aria-expanded=\"false\"
                        >
                            <i class=\"bi bi-person-circle\"></i> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "pseudo", [], "any", false, false, false, 86), "html", null, true);
            yield "
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                            <li class=\"dropdown-header text-center fw-bold\">
                                ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "pseudo", [], "any", false, false, false, 90), "html", null, true);
            yield "
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"";
            // line 94
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_profil");
            yield "\">
                                    <i class=\"bi bi-person\"></i> Mon Profil
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item text-danger\" href=\"";
            // line 100
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"bi bi-box-arrow-left\"></i> Se Déconnecter
                                </a>
                            </li>
                        </ul>
                    </div>
                ";
        } else {
            // line 107
            yield "                    ";
            // line 108
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_create");
            yield "\" class=\"btn btn-custom my-1\">
                        <i class=\"bi bi-person-plus\"></i> S'inscrire
                    </a>
                    <a href=\"";
            // line 111
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-custom my-1\">
                        <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                    </a>
                ";
        }
        // line 115
        yield "            </div>
        </div>
    </div>
    </nav>


    ";
        // line 121
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 123
        yield "
    <!-- Content -->
    <div class=\"container\">
        ";
        // line 126
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 127
        yield "
        <!-- Messages flash -->
        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "flashes", [], "any", false, false, false, 129));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 130
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 131
                yield "                <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
                    ";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "    </div>

    <!-- Footer -->
    ";
        // line 139
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 151
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

    // line 121
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

        // line 122
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
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

    // line 139
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

        // line 140
        yield "    <div id=\"hr\"></div>
    <footer>
        <div>&copy; 2024 Project DON. Tous droits réservés.</div>
        <div>
           <a href=\"";
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions_legales");
        yield "\" class=\"footer-a\"><i class=\"bi bi-info-circle\"></i> Mentions Légales</a> |
           <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("politique_confidentialite");
        yield "\" class=\"footer-a\"><i class=\"bi bi-shield-lock\"></i> Politique de Confidentialité</a> |
           <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conditions_utilisation");
        yield "\" class=\"footer-a\"><i class=\"bi bi-file-earmark-text\"></i> CGU</a> |

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
        return array (  386 => 146,  382 => 145,  378 => 144,  372 => 140,  359 => 139,  337 => 126,  326 => 122,  313 => 121,  290 => 7,  273 => 151,  271 => 139,  266 => 136,  260 => 135,  251 => 132,  246 => 131,  241 => 130,  237 => 129,  233 => 127,  231 => 126,  226 => 123,  224 => 121,  216 => 115,  209 => 111,  202 => 108,  200 => 107,  190 => 100,  181 => 94,  174 => 90,  167 => 86,  157 => 78,  154 => 77,  146 => 72,  142 => 69,  138 => 66,  124 => 53,  113 => 44,  103 => 37,  97 => 33,  91 => 28,  82 => 22,  78 => 20,  66 => 10,  60 => 7,  52 => 1,);
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
   <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
    <div class=\"container-fluid\">
        {# Logo + nom du site #}
        <div class=\"d-flex align-items-center\">
            <img 
                src=\"{{ asset('images/logo1.png') }}\" 
                alt=\"logo\" 
                width=\"60\" 
                height=\"60\"
                class=\"me-2\"
            >
            <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">DON</a>
        </div>

        {# Barre de recherche en dehors du collapse, 
           pour qu’elle reste toujours visible #}
        <form 
            class=\"d-flex align-items-center ms-3 me-auto gap-2\" 
            role=\"search\" 
            method=\"GET\" 
            action=\"{{ path('accueil') }}\"
        >
            <input
                class=\"form-control large-search-bar\" 
                type=\"search\" 
                name=\"q\" 
                placeholder=\"Rechercher un article...\"
                value=\"{{ app.request.query.get('q') }}\"
                aria-label=\"Search\"
            >
            <button class=\"btn btn-custom\" type=\"submit\">
                Rechercher
            </button>
        </form>

        {# Bouton burger #}
        <button 
            class=\"navbar-toggler\" 
            type=\"button\" 
            data-bs-toggle=\"collapse\"
            data-bs-target=\"#navbarSupportedContent\" 
            aria-controls=\"navbarSupportedContent\" 
            aria-expanded=\"false\"
            aria-label=\"Toggle navigation\"
        >
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        {# Contenu qui se replie dans le menu burger (boutons, etc.) #}
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            
            {# On empile en colonne en mobile, et en ligne (row) en desktop #}
            <div class=\"d-flex flex-column flex-lg-row align-items-start ms-auto btn-group-custom\">
                
                {# Bouton \"Ajouter un article\" #}
                <a href=\"{{ path('ajouter_article') }}\" class=\"btn btn-custom my-1\">
                    <i class=\"bi bi-plus-circle\"></i> Ajouter un article
                </a>

                {# Si l'utilisateur est connecté, on affiche son dropdown #}
                {% if app.user %}
                    <div class=\"dropdown my-1\">
                        <button 
                            class=\"btn btn-custom dropdown-toggle\" 
                            type=\"button\" 
                            id=\"userDropdown\" 
                            data-bs-toggle=\"dropdown\" 
                            aria-expanded=\"false\"
                        >
                            <i class=\"bi bi-person-circle\"></i> {{ app.user.pseudo }}
                        </button>
                        <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userDropdown\">
                            <li class=\"dropdown-header text-center fw-bold\">
                                {{ app.user.pseudo }}
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item\" href=\"{{ path('utilisateur_profil') }}\">
                                    <i class=\"bi bi-person\"></i> Mon Profil
                                </a>
                            </li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li>
                                <a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"bi bi-box-arrow-left\"></i> Se Déconnecter
                                </a>
                            </li>
                        </ul>
                    </div>
                {% else %}
                    {# Sinon, boutons S'inscrire / Se connecter #}
                    <a href=\"{{ path('utilisateur_create') }}\" class=\"btn btn-custom my-1\">
                        <i class=\"bi bi-person-plus\"></i> S'inscrire
                    </a>
                    <a href=\"{{ path('app_login') }}\" class=\"btn btn-custom my-1\">
                        <i class=\"bi bi-box-arrow-in-right\"></i> Se connecter
                    </a>
                {% endif %}
            </div>
        </div>
    </div>
    </nav>


    {% block body %}
    {% endblock %}

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
           <a href=\"{{ path('mentions_legales') }}\" class=\"footer-a\"><i class=\"bi bi-info-circle\"></i> Mentions Légales</a> |
           <a href=\"{{ path('politique_confidentialite') }}\" class=\"footer-a\"><i class=\"bi bi-shield-lock\"></i> Politique de Confidentialité</a> |
           <a href=\"{{ path('conditions_utilisation') }}\" class=\"footer-a\"><i class=\"bi bi-file-earmark-text\"></i> CGU</a> |

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
