<?php

/* tuto.html.twig */
class __TwigTemplate_2d197eef42dcc1ee3f4ed32e7357011ee30ece0f65de6dafbf9a456de5202984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tuto.html.twig", 1);
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
        echo "<h1>Tuto</h1>
https://www.youtube.com/channel/UCGSNBV7l9lUefwb4KOS4NOA
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tutos"]) ? $context["tutos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tuto"]) {
            // line 7
            echo "  ";
            // line 8
            echo "  <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tuto"], "titre", array()), "html", null, true);
            echo "</h2>
  <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["tuto"], "description", array()), "html", null, true);
            echo "</p>
  <p>type:";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["tuto"], "type", array()), "html", null, true);
            echo "</p>
  <p>media ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["tuto"], "media", array()), "html", null, true);
            echo " </p>
  <p>date ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tuto"], "date", array()), "m/d/Y"), "html", null, true);
            echo " </p>
  <p>Membres:
  ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tuto"], "membres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 15
                echo "    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "nom", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["membre"], "prenom", array()), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "  </p>
  <p>Languages:
  ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tuto"], "languages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 20
                echo "    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "language", array()), "html", null, true);
                echo ",
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  </p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tuto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "tuto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  86 => 20,  82 => 19,  78 => 17,  67 => 15,  63 => 14,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  41 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* <h1>Tuto</h1>*/
/* https://www.youtube.com/channel/UCGSNBV7l9lUefwb4KOS4NOA*/
/* {% for tuto in tutos %}*/
/*   {# dump(tuto) #}*/
/*   <h2>{{ tuto.titre }}</h2>*/
/*   <p>{{ tuto.description }}</p>*/
/*   <p>type:{{ tuto.type }}</p>*/
/*   <p>media {{ tuto.media }} </p>*/
/*   <p>date {{ tuto.date|date("m/d/Y") }} </p>*/
/*   <p>Membres:*/
/*   {% for membre in tuto.membres %}*/
/*     {{ membre.nom }} - {{ membre.prenom }}*/
/*   {% endfor %}*/
/*   </p>*/
/*   <p>Languages:*/
/*   {% for language in tuto.languages %}*/
/*     {{ language.language }},*/
/*   {% endfor %}*/
/*   </p>*/
/* {% endfor %}*/
/* {% endblock %}*/
/* */
