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
class __TwigTemplate_63039eef8d02b412ca330cfe6ad75f33 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Détail de l'Article";
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
        yield "    <div class=\"container mt-4\">
        <div class=\"row\">
            <!-- Image de l'article -->
            <div class=\"col-md-6\">
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "images", [], "any", false, false, false, 10))), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
            </div>

            <!-- Informations sur l'article -->
            <div class=\"col-md-6\">
                <h2>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 15), "html", null, true);
        yield "</h2>
                <p><strong>Description :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "description", [], "any", false, false, false, 16), "html", null, true);
        yield "</p>
                <p><strong>Ville :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "ville", [], "any", false, false, false, 17), "html", null, true);
        yield "</p>
                <p><strong>État :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "etat", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                <p><strong>Date d'ajout :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "dateAjout", [], "any", false, false, false, 19), "d M Y"), "html", null, true);
        yield "</p>

                <!-- Coordonnées du donneur -->
                <h3>Coordonnées du Donneur :</h3>
                <p><strong>Nom :</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "utilisateur", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</p>
                <p><strong>Téléphone :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "utilisateur", [], "any", false, false, false, 24), "telephone", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
                <p><strong>Email :</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "utilisateur", [], "any", false, false, false, 25), "email", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>

                <!-- Bouton réserver -->
                <div class=\"mt-3\">
                ";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29)) {
            // line 30
            yield "                  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_demander", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                      Demander l'article
                  </a>
                ";
        } else {
            // line 34
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-primary\">Connectez-vous pour demander</a>
               ";
        }
        // line 36
        yield "            </div>
                    
                 
                        
                   
                
        </div>
 </div>

       
   

      
";
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
        return array (  140 => 36,  134 => 34,  126 => 30,  124 => 29,  117 => 25,  113 => 24,  109 => 23,  102 => 19,  98 => 18,  94 => 17,  90 => 16,  86 => 15,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "article/details.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\article\\details.html.twig");
    }
}
