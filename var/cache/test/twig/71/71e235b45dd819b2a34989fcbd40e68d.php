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
class __TwigTemplate_37eb05516095a6b7b4fb947ebac03274 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/inscription.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/inscription.html.twig", 1);
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
        yield "    Formulaire d'inscription - Project DON
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<div id=\"hr\" ></div>
<div class=\"container-inscription\">
    <div class=\"title\">Formulaire d'Inscription</div>

    ";
        // line 13
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["error"], "method", false, false, false, 13));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", ["success"], "method", false, false, false, 16));
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
        <form id=\"form-inscription\"  action=\"";
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  217 => 87,  211 => 83,  188 => 61,  180 => 54,  173 => 48,  166 => 42,  159 => 36,  152 => 30,  145 => 24,  140 => 21,  136 => 19,  127 => 17,  122 => 16,  113 => 14,  108 => 13,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Formulaire d'inscription - Project DON
{% endblock %}

{% block content %}
<div id=\"hr\" ></div>
<div class=\"container-inscription\">
    <div class=\"title\">Formulaire d'Inscription</div>

    {# Affichage des messages de notification (erreurs ou succès) #}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger\">{{ message }}</div>
    {% endfor %}
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">{{ message }}</div>
    {% endfor %}

    <div class=\"content\">
        <form id=\"form-inscription\"  action=\"{{ path('utilisateur_create') }}\" method=\"post\">
            <div class=\"user-details\">
                {# Nom #}
                <div class=\"input-box\">
                    <span class=\"details\">Votre Nom</span>
                    <input type=\"text\" name=\"nom\" placeholder=\"EX: Kany\" required>
                </div>

                {# Prénom #}
                <div class=\"input-box\">
                    <span class=\"details\">Votre Prénom</span>
                    <input type=\"text\" name=\"prenom\" placeholder=\"EX: Jane\" required>
                </div>

                {# Email #}
                <div class=\"input-box\">
                    <span class=\"details\">Votre Email</span>
                    <input type=\"email\" name=\"email\" placeholder=\"EX: kanyjane@gmail.com\" required>
                </div>

                {# Pseudo #}
                <div class=\"input-box\">
                    <span class=\"details\">Votre Pseudo</span>
                    <input type=\"text\" name=\"pseudo\" placeholder=\"EX: Kany_Jane\" required>
                </div>

                {# Téléphone #}
                <div class=\"input-box\">
                    <span class=\"details\">Votre Téléphone</span>
                    <input type=\"tel\" name=\"telephone\" placeholder=\"EX: 0612131415\" pattern=\"[0-9]{10}\" required>
                </div>

                {# Mot de Passe #}
                <div class=\"input-box\">
                    <span class=\"details\">Votre Mot de Passe</span>
                    <input type=\"password\" name=\"password\" placeholder=\"********\" required>
                </div>
            </div>

            {# Rôle (Boutons Radio) #}
            <div class=\"gender-details\">

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

            {# Bouton Soumettre #}
            <div class=\"button\">
                <input type=\"submit\" value=\"S'inscrire\">
            </div>

            <p>Avez-vous déjà un compte ? <a href=\"{{ path('app_login') }}\">Se connecter</a></p>
        </form>
    </div>
</div>
{% endblock %}
", "utilisateur/inscription.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\utilisateur\\inscription.html.twig");
    }
}
