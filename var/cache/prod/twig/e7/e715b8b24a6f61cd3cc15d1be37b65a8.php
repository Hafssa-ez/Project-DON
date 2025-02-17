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

/* security/login.html.twig */
class __TwigTemplate_4e9f4f2e5b556bd4f822d0c0b4ca2821 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        yield "    Page de connexion - Project DON
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "

<div id=\"hr\" ></div>
    <!-- Formulaire de connexion -->
    <div class=\"container\" style=\"min-height: 500px;\">
        <div class=\"title\">Connectez-vous</div>
        <div class=\"content\">
            <form method=\"post\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                ";
        // line 15
        if (($context["error"] ?? null)) {
            // line 16
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 17), "security"), "html", null, true);
            yield "
                    </div>
                ";
        }
        // line 20
        yield "
                <div class=\"user-details\">
                    <div class=\"input-box\">
                        <span class=\"details\"> Pseudo</span>
                        <input type=\"text\" name=\"_username\" placeholder=\"EX: pseudo\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pseudo"] ?? null), "html", null, true);
        yield "\" required>
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Mot de passe</span>
                        <input type=\"password\" name=\"_password\" placeholder=\"********\" required>
                    </div>
                </div>

                <div class=\"button\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                    <input type=\"submit\" value=\"Se connecter\">
                </div>

                <p>Vous n'avez pas de compte ? <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_create");
        yield "\">S'inscrire</a></p>
            </form>
        </div>
    </div>
    <div id=\"hr\" ></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  121 => 37,  114 => 33,  102 => 24,  96 => 20,  90 => 17,  87 => 16,  85 => 15,  81 => 14,  72 => 7,  65 => 6,  59 => 4,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\security\\login.html.twig");
    }
}
