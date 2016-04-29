<?php

/* projets.html.twig */
class __TwigTemplate_72f22771ed57e1df01eadaa70af15556760d535290a36ebd7704d2efae967f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets.html.twig", 1);
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
        echo "  <h1>Projets</h1>
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 6
            echo "    ";
            // line 7
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
            echo "</h2>
    <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</p>
    <p>type:";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "type", array()), "html", null, true);
            echo "</p>
    <p>media ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "media", array()), "html", null, true);
            echo " </p>
    <p>date ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "date", array()), "m/d/Y"), "html", null, true);
            echo " </p>
    <p>Membres:
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "membres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 14
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nom", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenom", array()), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </p>
    <p>Langages:
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "langages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
                // line 19
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["langage"], "langage", array()), "html", null, true);
                echo ",
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  85 => 19,  81 => 18,  77 => 16,  66 => 14,  62 => 13,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  40 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/*   <h1>Projets</h1>*/
/*   {% for projet in projets %}*/
/*     {# dump(projet) #}*/
/*     <h2>{{ projet.titre }}</h2>*/
/*     <p>{{ projet.description }}</p>*/
/*     <p>type:{{ projet.type }}</p>*/
/*     <p>media {{ projet.media }} </p>*/
/*     <p>date {{ projet.date|date("m/d/Y") }} </p>*/
/*     <p>Membres:*/
/*     {% for membre in projet.membres %}*/
/*       {{ membre.nom }} - {{ membre.prenom }}*/
/*     {% endfor %}*/
/*     </p>*/
/*     <p>Langages:*/
/*     {% for langage in projet.langages %}*/
/*       {{ langage.langage }},*/
/*     {% endfor %}*/
/*     </p>*/
/*   {% endfor %}*/
/* {% endblock %}*/
/* */
