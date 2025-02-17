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

/* utilisateur/inscription.html.twig */
class __TwigTemplate_272a1821db3397fcd0efcc4d96caa63b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/inscription.html.twig", 1);
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
        yield "    Formulaire d'inscription - Project DON
";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div id=\"hr\" ></div>
<div class=\"container-inscription\">
    <div class=\"title\">Formulaire d'Inscription</div>

    ";
        // line 13
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            yield "        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            yield "        <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
    <div class=\"content\">
        <form action=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_create");
        yield "\" method=\"post\">
            <div class=\"user-details\">
                ";
        // line 24
        yield "                <div class=\"input-box\">
                    <span class=\"details\">Votre Nom</span>
                    <input type=\"text\" name=\"nom\" placeholder=\"EX: Kany\" required>
                </div>

                ";
        // line 30
        yield "                <div class=\"input-box\">
                    <span class=\"details\">Votre Prénom</span>
                    <input type=\"text\" name=\"prenom\" placeholder=\"EX: Jane\" required>
                </div>

                ";
        // line 36
        yield "                <div class=\"input-box\">
                    <span class=\"details\">Votre Email</span>
                    <input type=\"email\" name=\"email\" placeholder=\"EX: kanyjane@gmail.com\" required>
                </div>

                ";
        // line 42
        yield "                <div class=\"input-box\">
                    <span class=\"details\">Votre Pseudo</span>
                    <input type=\"text\" name=\"pseudo\" placeholder=\"EX: Kany_Jane\" required>
                </div>

                ";
        // line 48
        yield "                <div class=\"input-box\">
                    <span class=\"details\">Votre Téléphone</span>
                    <input type=\"tel\" name=\"telephone\" placeholder=\"EX: 0612131415\" pattern=\"[0-9]{10}\" required>
                </div>

                ";
        // line 54
        yield "                <div class=\"input-box\">
                    <span class=\"details\">Votre Mot de Passe</span>
                    <input type=\"password\" name=\"password\" placeholder=\"********\" required>
                </div>
            </div>

            ";
        // line 61
        yield "            <div class=\"gender-details\">

                <input type=\"radio\" name=\"role\" value=\"ROLE_DONNEUR\" id=\"dot-1\" checked>
                <input type=\"radio\" name=\"role\" value=\"ROLE_RECEVEUR\" id=\"dot-2\">

                <span class=\"gender-title\">Votre Rôle</span>
                <div class=\"category\">

                    <label for=\"dot-1\">
                        <span class=\"dot one\"></span>
                        <span class=\"gender\">Donneur</span>
                    </label>
                    <!-- Label for Female -->
                    <label for=\"dot-2\">
                        <span class=\"dot two\"></span>
                        <span class=\"gender\">Receveur</span>
                    </label>

                </div>
            </div>

            ";
        // line 83
        yield "            <div class=\"button\">
                <input type=\"submit\" value=\"S'inscrire\">
            </div>

            <p>Avez-vous déjà un compte ? <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter</a></p>
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
        return "utilisateur/inscription.html.twig";
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
        return array (  187 => 87,  181 => 83,  158 => 61,  150 => 54,  143 => 48,  136 => 42,  129 => 36,  122 => 30,  115 => 24,  110 => 21,  106 => 19,  97 => 17,  92 => 16,  83 => 14,  78 => 13,  72 => 8,  65 => 7,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "utilisateur/inscription.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\utilisateur\\inscription.html.twig");
    }
}
