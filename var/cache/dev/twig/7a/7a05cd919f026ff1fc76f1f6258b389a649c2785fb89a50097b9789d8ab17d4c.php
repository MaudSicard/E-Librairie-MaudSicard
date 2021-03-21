<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* book/book_show_search.html.twig */
class __TwigTemplate_57308ef071e24cb5822d4af8d4b252928050f00c66137f78f5e94a260fdab93e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/book_show_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/book_show_search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/book_show_search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Un livre";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main>

";
        // line 8
        if ((0 !== twig_compare(null, (isset($context["groupBooks"]) || array_key_exists("groupBooks", $context) ? $context["groupBooks"] : (function () { throw new RuntimeError('Variable "groupBooks" does not exist.', 8, $this->source); })())))) {
            // line 9
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupBooks"]) || array_key_exists("groupBooks", $context) ? $context["groupBooks"] : (function () { throw new RuntimeError('Variable "groupBooks" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["groupBook"]) {
                // line 10
                echo "  <h1> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
                echo "</h1>
      <div>
        <img src=\"./../../assets/css/images/polar.png\" alt=\"\">
        <h3>Titre du livre : ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
                echo "</h3>
        <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 14), "image", [], "any", false, false, false, 14), "html", null, true);
                echo "\" alt=\"random image\">
        <p>Résumé : ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 15), "content", [], "any", false, false, false, 15), "html", null, true);
                echo "</p>
        <p>Auteur : ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "author", [], "any", false, false, false, 16), "firstname", [], "any", false, false, false, 16), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "author", [], "any", false, false, false, 16), "lastname", [], "any", false, false, false, 16), "html", null, true);
                echo "</p>
        <p>Editeur : ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "editor", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
        <p>Prix : ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 18), "price", [], "any", false, false, false, 18), "html", null, true);
                echo "  &#8364;</p>
        
        <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">Cliquez ici pour lire les commentaires</a>
        <a href=\"\">Ajoutez au panier</a>
        <a href=\"\">Voir mon panier</a>
      </div>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupBook'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  ";
        } else {
            // line 26
            echo "      <p>Il n'y a pas encore le livre que vous demandez.</p>
  ";
        }
        // line 28
        echo "  </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "book/book_show_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 28,  147 => 26,  144 => 25,  133 => 20,  128 => 18,  124 => 17,  118 => 16,  114 => 15,  110 => 14,  106 => 13,  99 => 10,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Un livre{% endblock %}

{% block body %}
<main>

{% if null != groupBooks %}
    {% for groupBook in groupBooks %}
  <h1> {{groupBook.book.title}}</h1>
      <div>
        <img src=\"./../../assets/css/images/polar.png\" alt=\"\">
        <h3>Titre du livre : {{ groupBook.book.title }}</h3>
        <img src=\"{{ groupBook.book.image }}\" alt=\"random image\">
        <p>Résumé : {{ groupBook.book.content }}</p>
        <p>Auteur : {{ groupBook.author.firstname }} {{ groupBook.author.lastname }}</p>
        <p>Editeur : {{ groupBook.editor.name }}</p>
        <p>Prix : {{ groupBook.book.price }}  &#8364;</p>
        
        <a href=\"{{ path('show_review', {id: groupBook.book.id}) }}\">Cliquez ici pour lire les commentaires</a>
        <a href=\"\">Ajoutez au panier</a>
        <a href=\"\">Voir mon panier</a>
      </div>
     {% endfor %}
  {% else %}
      <p>Il n'y a pas encore le livre que vous demandez.</p>
  {% endif %}
  </main>
{% endblock %}
", "book/book_show_search.html.twig", "/var/www/html/projets/eLibrairie/eLibrairie/templates/book/book_show_search.html.twig");
    }
}
