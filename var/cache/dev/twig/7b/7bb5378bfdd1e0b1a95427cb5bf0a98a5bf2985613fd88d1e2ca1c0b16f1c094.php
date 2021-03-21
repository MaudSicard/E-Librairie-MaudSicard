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

/* author/author_show_book.html.twig */
class __TwigTemplate_6d0cd4ac40fc49cacffb5b7245dea4d233c0fec58b7e31cd966920bde53928a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/author_show_book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author/author_show_book.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "author/author_show_book.html.twig", 1);
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

        echo "Liste des livres";
        
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
<div class = \"container_cards\">
  <h1> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 8, $this->source); })()), "firstname", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 8, $this->source); })()), "lastname", [], "any", false, false, false, 8), "html", null, true);
        echo " </h1>
  <p class=\"text-center\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 9, $this->source); })()), "content", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 9, $this->source); })()), "content", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>

 ";
        // line 11
        if ((0 !== twig_compare(null, (isset($context["groupBooks"]) || array_key_exists("groupBooks", $context) ? $context["groupBooks"] : (function () { throw new RuntimeError('Variable "groupBooks" does not exist.', 11, $this->source); })())))) {
            // line 12
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupBooks"]) || array_key_exists("groupBooks", $context) ? $context["groupBooks"] : (function () { throw new RuntimeError('Variable "groupBooks" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["groupBook"]) {
                // line 13
                echo "    <div class=\"card\">
      <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 14), "image", [], "any", false, false, false, 14), "html", null, true);
                echo "\" alt=\"random image\">
      <h3>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
                echo "</h3>
      <p>Résumé : ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 16), "content", [], "any", false, false, false, 16), "html", null, true);
                echo "</p>
      <p>Genre : ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "gender", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</p>
      <p>Editeur : ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "editor", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</p>
      <p>Prix : ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 19), "price", [], "any", false, false, false, 19), "html", null, true);
                echo "  &#8364;</p>
      
      <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_review", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">Cliquez ici pour lire les commentaires</a>
       <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "book", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">Ajoutez au panier</a>
        <a href=\"";
                // line 23
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
                echo "\">Voir mon panier</a>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupBook'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo " ";
        } else {
            // line 27
            echo "      <p>Il n'y a pas encore de livres écrit par cet auteur.</p>
  ";
        }
        // line 29
        echo "  </div>
  </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "author/author_show_book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 29,  160 => 27,  157 => 26,  148 => 23,  144 => 22,  140 => 21,  135 => 19,  131 => 18,  127 => 17,  123 => 16,  119 => 15,  115 => 14,  112 => 13,  107 => 12,  105 => 11,  98 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des livres{% endblock %}

{% block body %}
<main>
<div class = \"container_cards\">
  <h1> {{author.firstname}} {{author.lastname}} </h1>
  <p class=\"text-center\">{{author.content }} {{author.content }}</p>

 {% if null != groupBooks %}
  {% for groupBook in groupBooks %}
    <div class=\"card\">
      <img src=\"{{ groupBook.book.image }}\" alt=\"random image\">
      <h3>{{ groupBook.book.title }}</h3>
      <p>Résumé : {{ groupBook.book.content }}</p>
      <p>Genre : {{ groupBook.gender.name }}</p>
      <p>Editeur : {{ groupBook.editor.name }}</p>
      <p>Prix : {{ groupBook.book.price }}  &#8364;</p>
      
      <a href=\"{{ path('show_review', {id: groupBook.book.id}) }}\">Cliquez ici pour lire les commentaires</a>
       <a href=\"{{ path('cart_add', {id: groupBook.book.id}) }}\">Ajoutez au panier</a>
        <a href=\"{{ path('cart') }}\">Voir mon panier</a>
    </div>
  {% endfor %}
 {% else %}
      <p>Il n'y a pas encore de livres écrit par cet auteur.</p>
  {% endif %}
  </div>
  </main>
{% endblock %}
", "author/author_show_book.html.twig", "/var/www/html/projets/eLibrairie/eLibrairie/templates/author/author_show_book.html.twig");
    }
}
