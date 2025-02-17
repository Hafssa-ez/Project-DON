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
class __TwigTemplate_5db742d459a0fa77173adf697b5b7e95 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/ajoutarticle.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Ajouter un Article";
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
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
        return array (  129 => 48,  118 => 46,  114 => 45,  75 => 9,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "article/ajoutarticle.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\article\\ajoutarticle.html.twig");
    }
}
