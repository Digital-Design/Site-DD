<?php

/* index.html.twig */
class __TwigTemplate_9f57610605f90c42f2b4a317899d6d6ef0852da5e354518ddbbe63b81e7b71ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Index</h1>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) ? $context["promotions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 6
            echo "  ";
            echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, $context["promotion"]), "html", null, true);
            echo "
  ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["promotion"], "membre", array()), "nom", array()), "html", null, true);
            echo "
  ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["promotion"], "membre", array()), "prenom", array()), "html", null, true);
            echo "
  ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["promotion"], "membre", array()), "site", array()), "html", null, true);
            echo "
  ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["promotion"], "role", array()), "html", null, true);
            echo "
  ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["promotion"], "date", array()), "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* <h1>Index</h1>*/
/* {% for promotion in promotions %}*/
/*   {{ dump(promotion) }}*/
/*   {{ promotion.membre.nom }}*/
/*   {{ promotion.membre.prenom }}*/
/*   {{ promotion.membre.site }}*/
/*   {{ promotion.role }}*/
/*   {{ promotion.date }}*/
/* */
/* {% endfor %}*/
/* {% endblock %}*/
/* */
