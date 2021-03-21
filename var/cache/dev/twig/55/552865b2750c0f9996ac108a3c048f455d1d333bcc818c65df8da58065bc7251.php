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

/* mentions.html.twig */
class __TwigTemplate_76c346d0c668340fae5ff3ed6d4611656c738f7fbfbedcc6bad08a4e12041047 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mentions.html.twig", 1);
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
        echo "
<main>
  <div>
  <h3>Mentions légales</h3>
  <p>Taleggio cow cauliflower cheese. Bavarian bergkase swiss cheese triangles stilton cauliflower cheese port-salut lancashire rubber cheese. Red leicester babybel danish fontina manchego feta fromage bocconcini parmesan. Airedale babybel lancashire swiss bavarian bergkase cheesy grin lancashire.

Mascarpone cow fondue. Bocconcini roquefort cow fromage frais cut the cheese hard cheese melted cheese cheese triangles. Monterey jack gouda pepper jack rubber cheese roquefort bocconcini mozzarella goat. Cheese slices macaroni cheese cream cheese squirty cheese paneer squirty cheese.

Cheese and wine feta camembert de normandie. Cheese and wine cheeseburger when the cheese comes out everybody's happy melted cheese the big cheese cheese and wine danish fontina cauliflower cheese. Cheesy feet cauliflower cheese cheddar fromage cheesy grin paneer fromage frais bavarian bergkase. Bavarian bergkase.

Chalk and cheese when the cheese comes out everybody's happy queso. Brie everyone loves cheesecake croque monsieur pecorino edam stinking bishop stinking bishop. Fromage frais edam roquefort danish fontina cottage cheese squirty cheese parmesan mozzarella. Halloumi macaroni cheese cheese on toast babybel cheesy feet cottage cheese cheese and wine fondue. The big cheese red leicester roquefort.

Caerphilly red leicester cream cheese. When the cheese comes out everybody's happy fromage cheese triangles cheesy feet queso blue castello paneer brie. Gouda halloumi cheesecake squirty cheese port-salut babybel lancashire feta. Airedale fromage cheese triangles roquefort.</p>

  </div>
  
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des livres{% endblock %}

{% block body %}

<main>
  <div>
  <h3>Mentions légales</h3>
  <p>Taleggio cow cauliflower cheese. Bavarian bergkase swiss cheese triangles stilton cauliflower cheese port-salut lancashire rubber cheese. Red leicester babybel danish fontina manchego feta fromage bocconcini parmesan. Airedale babybel lancashire swiss bavarian bergkase cheesy grin lancashire.

Mascarpone cow fondue. Bocconcini roquefort cow fromage frais cut the cheese hard cheese melted cheese cheese triangles. Monterey jack gouda pepper jack rubber cheese roquefort bocconcini mozzarella goat. Cheese slices macaroni cheese cream cheese squirty cheese paneer squirty cheese.

Cheese and wine feta camembert de normandie. Cheese and wine cheeseburger when the cheese comes out everybody's happy melted cheese the big cheese cheese and wine danish fontina cauliflower cheese. Cheesy feet cauliflower cheese cheddar fromage cheesy grin paneer fromage frais bavarian bergkase. Bavarian bergkase.

Chalk and cheese when the cheese comes out everybody's happy queso. Brie everyone loves cheesecake croque monsieur pecorino edam stinking bishop stinking bishop. Fromage frais edam roquefort danish fontina cottage cheese squirty cheese parmesan mozzarella. Halloumi macaroni cheese cheese on toast babybel cheesy feet cottage cheese cheese and wine fondue. The big cheese red leicester roquefort.

Caerphilly red leicester cream cheese. When the cheese comes out everybody's happy fromage cheese triangles cheesy feet queso blue castello paneer brie. Gouda halloumi cheesecake squirty cheese port-salut babybel lancashire feta. Airedale fromage cheese triangles roquefort.</p>

  </div>
  
 {% endblock %}", "mentions.html.twig", "/var/www/html/projets/eLibrairie/eLibrairie/templates/mentions.html.twig");
    }
}
