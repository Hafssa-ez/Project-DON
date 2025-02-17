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

/* article/modifierarticle.html.twig */
class __TwigTemplate_c96af098250896f67aad77e37e708fa1 extends Template
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
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/modifierarticle.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier un Article";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <div class=\"container\">
        <div class=\"title\">Modifier l'Article</div>
        <div class=\"content\">
            <form action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\" method=\"POST\">

                <div class=\"input-box\">
                    <label for=\"titre\" class=\"details\">Titre de l'Article</label>
                    <input type=\"text\" id=\"titre\" name=\"titre\" class=\"form-control\" value=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 13), "html", null, true);
        yield "\" required>
                </div>

                <div class=\"input-box\">
                    <label for=\"description\" class=\"details\">Petite Description</label>
                    <textarea id=\"description\" name=\"description\" class=\"form-control\" required>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "description", [], "any", false, false, false, 18), "html", null, true);
        yield "</textarea>
                </div>

                <div class=\"input-box\">
                    <label for=\"etat\" class=\"details\">État de l'Article</label>
                    <select id=\"etat\" name=\"etat\" class=\"form-select\" required>
                        <option value=\"excellent\" ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "etat", [], "any", false, false, false, 24) == "excellent")) {
            yield "selected";
        }
        yield ">Excellent état</option>
                        <option value=\"good\" ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "etat", [], "any", false, false, false, 25) == "good")) {
            yield "selected";
        }
        yield ">Bon état</option>
                        <option value=\"fair\" ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "etat", [], "any", false, false, false, 26) == "fair")) {
            yield "selected";
        }
        yield ">État moyen</option>
                        <option value=\"poor\" ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "etat", [], "any", false, false, false, 27) == "poor")) {
            yield "selected";
        }
        yield ">État médiocre</option>
                    </select>
                </div>

                <div class=\"button\">
                    <button type=\"submit\" class=\"btn btn-primary\">Modifier l'Article</button>
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
        return "article/modifierarticle.html.twig";
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
        return array (  117 => 27,  111 => 26,  105 => 25,  99 => 24,  90 => 18,  82 => 13,  75 => 9,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "article/modifierarticle.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\article\\modifierarticle.html.twig");
    }
}
