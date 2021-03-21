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

/* cart/cart_list.html.twig */
class __TwigTemplate_ae262aa24a301c8634ea74c60a94dd08974e05a1007737f840c254b1ea6b4a1c extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/cart_list.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Votre panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container\">
 ";
        // line 9
        echo twig_include($this->env, $context, "_flash_messages.html.twig");
        echo "

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <tr class=\"table-dark\">
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prix unitaire</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix total</th>
            </tr>
        </thead>
        <tbody>
             
               ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["booksList"]) || array_key_exists("booksList", $context) ? $context["booksList"] : (function () { throw new RuntimeError('Variable "booksList" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 24
            echo "             <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "price", [], "any", false, false, false, 26), "html", null, true);
            echo "&euro;</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["book"], "price", [], "any", false, false, false, 28) * (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 28, $this->source); })())), "html", null, true);
            echo "&euro;</p>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <hr>

    <form action=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove");
        echo "\" method=\"post\" onsubmit=\"return confirm('Voulez - vous vraiment vider le panier ?')\">
        <button type=\"submit\" class=\"btn btn-warning\">Vider le panier</button>
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/cart_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 36,  136 => 31,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  112 => 24,  108 => 23,  91 => 9,  88 => 8,  78 => 7,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("  
{% extends 'base.html.twig' %}

{% block title %}Votre panier{% endblock %}


{% block body %}
<div class=\"container\">
 {{ include('_flash_messages.html.twig') }}

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <tr class=\"table-dark\">
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prix unitaire</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Prix total</th>
            </tr>
        </thead>
        <tbody>
             
               {% for book in booksList %}
             <tr>
                <td>{{book.title }}</td>
                <td>{{book.price }}&euro;</td>
                <td>{{quantity}}</td>
                <td>{{book.price * quantity }}&euro;</p>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <hr>

    <form action=\"{{path('cart_remove')}}\" method=\"post\" onsubmit=\"return confirm('Voulez - vous vraiment vider le panier ?')\">
        <button type=\"submit\" class=\"btn btn-warning\">Vider le panier</button>
    </form>
</div>
{% endblock %}", "cart/cart_list.html.twig", "/var/www/html/projets/eLibrairie/eLibrairie/templates/cart/cart_list.html.twig");
    }
}
