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

/* gender/gender_show_book.html.twig */
class __TwigTemplate_00a8cae73a5c51ba4ac16b02d56e1358c7720baad97ef7f3b6da875ce330a45d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gender/gender_show_book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gender/gender_show_book.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gender/gender_show_book.html.twig", 1);
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
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gender"]) || array_key_exists("gender", $context) ? $context["gender"] : (function () { throw new RuntimeError('Variable "gender" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo " </h1>
  ";
        // line 11
        if ((0 !== twig_compare(null, (isset($context["groupBooks"]) || array_key_exists("groupBooks", $context) ? $context["groupBooks"] : (function () { throw new RuntimeError('Variable "groupBooks" does not exist.', 11, $this->source); })())))) {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupBooks"]) || array_key_exists("groupBooks", $context) ? $context["groupBooks"] : (function () { throw new RuntimeError('Variable "groupBooks" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["groupBook"]) {
                // line 13
                echo "      <div class =\" card\">
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
        <p>Auteur : ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "author", [], "any", false, false, false, 17), "firstname", [], "any", false, false, false, 17), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["groupBook"], "author", [], "any", false, false, false, 17), "lastname", [], "any", false, false, false, 17), "html", null, true);
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
            echo "  ";
        } else {
            // line 27
            echo "      <p>Il n'y a pas encore de livres associé à ce genre littéraire.</p>
  ";
        }
        // line 29
        echo "</div>
  </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gender/gender_show_book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 29,  155 => 27,  152 => 26,  143 => 23,  139 => 22,  135 => 21,  130 => 19,  126 => 18,  120 => 17,  116 => 16,  112 => 15,  108 => 14,  105 => 13,  100 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des livres{% endblock %}

{% block body %}
<main>

<div class = \"container_cards\">

  <h1> {{gender.name}} </h1>
  {% if null != groupBooks %}
    {% for groupBook in groupBooks %}
      <div class =\" card\">
        <img src=\"{{ groupBook.book.image }}\" alt=\"random image\">
        <h3>{{ groupBook.book.title }}</h3>
        <p>Résumé : {{ groupBook.book.content }}</p>
        <p>Auteur : {{ groupBook.author.firstname }} {{ groupBook.author.lastname }}</p>
        <p>Editeur : {{ groupBook.editor.name }}</p>
        <p>Prix : {{ groupBook.book.price }}  &#8364;</p>
        
        <a href=\"{{ path('show_review', {id: groupBook.book.id}) }}\">Cliquez ici pour lire les commentaires</a>
         <a href=\"{{ path('cart_add', {id: groupBook.book.id}) }}\">Ajoutez au panier</a>
        <a href=\"{{ path('cart') }}\">Voir mon panier</a>
      </div>
    {% endfor %}
  {% else %}
      <p>Il n'y a pas encore de livres associé à ce genre littéraire.</p>
  {% endif %}
</div>
  </main>
{% endblock %}
", "gender/gender_show_book.html.twig", "/var/www/html/projets/eLibrairie/eLibrairie/templates/gender/gender_show_book.html.twig");
    }
}
