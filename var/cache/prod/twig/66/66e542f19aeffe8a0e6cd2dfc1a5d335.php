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
class __TwigTemplate_ca51669bdf13bfa07b49faa69b362f22 extends Template
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
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

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
        // line 19
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 59
        yield "     ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 62
        yield "
    <!-- Content -->
    <div class=\"container\">
        ";
        // line 65
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 67
        yield "
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 69
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 70
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">
            ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "
    </div>

    <!-- Footer -->
    ";
        // line 79
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 90
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"
        crossorigin=\"anonymous\"></script>
</body>

</html>
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Project DON";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
        <div class=\"container-fluid\">
            <img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo1.png"), "html", null, true);
        yield "\" alt=\"logo\" width=\"60\" height=\"60\">
            <a class=\"navbar-brand\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">DON</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <form class=\"d-flex align-items-center w-90 gap-2\" role=\"search\" method=\"GET\" action=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">
        <input 
            class=\"form-control large-search-bar me-2\" 
            type=\"search\" 
            name=\"q\" 
            placeholder=\"Rechercher un article...\" 
            value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 37), "query", [], "any", false, false, false, 37), "get", ["q"], "method", false, false, false, 37), "html", null, true);
        yield "\" 
            aria-label=\"Search\"
        >
        <button class=\"btn btn-custom\" type=\"submit\">Rechercher</button>
    </form>
</div>

               
                <div class=\"d-flex btn-group-custom ms-auto\">
                    <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_article");
        yield "\"><button class=\"btn btn-custom\" type=\"button\"><i class=\"bi bi-plus-circle\"></i> Ajouter
                            un article</button></a>
                    <div class=\"d-flex btn-account-group\">
                        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_create");
        yield "\"><button class=\"btn btn-custom\" type=\"button\"><i class=\"bi bi-person-plus\"></i>
                                S'inscrire</button></a>
                        <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"><button class=\"btn btn-custom\" type=\"button\"><i class=\"bi bi-box-arrow-in-right\"></i>
                                Se connecter</button></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    ";
        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 60
        yield "
    ";
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "        ";
        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 80
        yield "    <div id=\"hr\" ></div>
    <footer>
        <div>&copy; 2024 Project DON. Tous droits réservés.</div>
        <div>
            <a href=\"#\" class=\"footer-a\"><i class=\"bi bi-info-circle\"></i> À propos</a> |
            <a href=\"#\" class=\"footer-a\"><i class=\"bi bi-lock\"></i> Confidentialité</a> |
            <a href=\"#\" class=\"footer-a\"><i class=\"bi bi-file-earmark-text\"></i> Conditions d'utilisation</a>
        </div>
    </footer>
    ";
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
        return array (  247 => 80,  240 => 79,  235 => 66,  228 => 65,  222 => 60,  215 => 59,  202 => 51,  197 => 49,  191 => 46,  179 => 37,  170 => 31,  159 => 23,  155 => 22,  151 => 20,  144 => 19,  133 => 7,  123 => 90,  121 => 79,  115 => 75,  102 => 71,  97 => 70,  92 => 69,  88 => 68,  85 => 67,  83 => 65,  78 => 62,  75 => 59,  73 => 19,  61 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\base.html.twig");
    }
}
