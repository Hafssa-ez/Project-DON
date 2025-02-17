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

/* commentaire/liste.html.twig */
class __TwigTemplate_6a2e3fdb527f6b8be300c0b6134ba908 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commentaire/liste.html.twig", 1);
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

        yield "Liste des commentaires";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container mt-4\">
        <h2>Commentaires pour l’article : ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), "html", null, true);
        yield "</h2>

        ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <p>Aucun commentaire pour l’instant.</p>
        ";
        } else {
            // line 12
            yield "            <ul>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comm"]) {
                // line 14
                yield "                    <li>
                        <strong>";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "utilisateur", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
                yield " :</strong>
                        ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "message", [], "any", false, false, false, 16), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "date", [], "any", false, false, false, 16), "d/m/Y H:i"), "html", null, true);
                yield ")

                        ";
                // line 18
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "utilisateur", [], "any", false, false, false, 18) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18)))) {
                    // line 19
                    yield "                            ";
                    // line 20
                    yield "                            <form method=\"post\"
                                  action=\"";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_supprimer_render", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                    yield "\"
                                  style=\"display:inline;\"
                                  onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">X</button>
                            </form>

                            ";
                    // line 28
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_modifier_render", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comm"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                    yield "\"
                               class=\"btn btn-warning btn-sm\">
                                Modifier
                            </a>
                        ";
                }
                // line 33
                yield "                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comm'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "            </ul>
        ";
        }
        // line 37
        yield "    </div>
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
        return "commentaire/liste.html.twig";
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
        return array (  171 => 37,  167 => 35,  160 => 33,  151 => 28,  142 => 21,  139 => 20,  137 => 19,  135 => 18,  128 => 16,  124 => 15,  121 => 14,  117 => 13,  114 => 12,  110 => 10,  108 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des commentaires{% endblock %}

{% block content %}
    <div class=\"container mt-4\">
        <h2>Commentaires pour l’article : {{ article.titre }}</h2>

        {% if commentaires is empty %}
            <p>Aucun commentaire pour l’instant.</p>
        {% else %}
            <ul>
                {% for comm in commentaires %}
                    <li>
                        <strong>{{ comm.utilisateur.nom }} :</strong>
                        {{ comm.message }} ({{ comm.date|date('d/m/Y H:i') }})

                        {% if is_granted('ROLE_ADMIN') or comm.utilisateur == app.user %}
                            {# Formulaire de suppression #}
                            <form method=\"post\"
                                  action=\"{{ path('commentaire_supprimer_render', {id: comm.id}) }}\"
                                  style=\"display:inline;\"
                                  onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">X</button>
                            </form>

                            {# Lien de modification #}
                            <a href=\"{{ path('commentaire_modifier_render', {id: comm.id}) }}\"
                               class=\"btn btn-warning btn-sm\">
                                Modifier
                            </a>
                        {% endif %}
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    </div>
{% endblock %}
", "commentaire/liste.html.twig", "C:\\Users\\ezzou\\projet_Don\\templates\\commentaire\\liste.html.twig");
    }
}
