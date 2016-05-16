<?php

/* projets.html.twig */
class __TwigTemplate_c0137b75a1837ac27faac8d81892f6f2e377792924fb3a0be7763e7456f4df0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "projets.html.twig", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'css' => array($this, 'block_css'),
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
    public function block_js($context, array $blocks = array())
    {
        // line 4
        echo "\t<script src=\"js/flickity.pkgd.min.js\"></script>
";
    }

    // line 7
    public function block_css($context, array $blocks = array())
    {
        // line 8
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/flickity.css\">
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
\t\t<section id=\"divProjet\">
\t\t\t<h1 class=\"centre\">Nos <strong>projets</strong>\tà venir</h1>
\t\t\t<div class=\"gallery js-flickity\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 17
            echo "          ";
            if (($this->getAttribute($context["projet"], "fini", array()) == 0)) {
                // line 18
                echo "           ";
                if ($this->getAttribute($context["projet"], "media", array())) {
                    // line 19
                    echo "      \t\t\t\t<div class=\"gallery-cell\">
      \t\t\t\t\t<img src=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "media", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
                    echo "\"/>
      \t\t\t\t</div>
            ";
                } else {
                    // line 23
                    echo "              ";
                    // line 24
                    echo "            ";
                }
                // line 25
                echo "          ";
            }
            // line 26
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t</div>
\t\t</section>

    <section id=\"divRea\">
  \t\t\t<div class=\"row\">
  \t\t\t\t<div class=\"col-md-12\">
  \t\t\t\t<h1 class=\"centre\">Nos <strong>réalisations</strong></h1>
  \t\t\t\t<div class=\"grid\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 36
            echo "              ";
            if (($this->getAttribute($context["projet"], "fini", array()) == 1)) {
                // line 37
                echo "               ";
                if ($this->getAttribute($context["projet"], "media", array())) {
                    // line 38
                    echo "                 <figure class=\"effect-steve\">
                   <img src=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "media", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
                    echo "\"/>
                   <figcaption>
                     <h2>";
                    // line 41
                    echo $this->getAttribute($context["projet"], "titre", array());
                    echo "</h2>
                     <p>";
                    // line 42
                    echo $this->getAttribute($context["projet"], "description", array());
                    echo "</p>
                     <!--<a href=\"projets/";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
                    echo "\">Voir plus</a>-->
                   </figcaption>
                 </figure>
                ";
                } else {
                    // line 47
                    echo "                  ";
                    // line 48
                    echo "                ";
                }
                // line 49
                echo "              ";
            }
            // line 50
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  \t\t\t\t\t</div>
  \t\t\t\t</div>
  \t\t\t</div>
  \t\t\t</section>





  <h1>Projets</h1>
  ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 62
            echo "    ";
            // line 63
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "titre", array()), "html", null, true);
            echo "</h2>
    <p>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</p>
    <p>type:";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "type", array()), "html", null, true);
            echo "</p>
    <p>media ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "media", array()), "html", null, true);
            echo " </p>
    <p>date ";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "date", array()), "m/d/Y"), "html", null, true);
            echo " </p>
    <p>Membres:
    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "membres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
                // line 70
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
            // line 72
            echo "    </p>
    <p>Languages:
    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "languages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 75
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["language"], "language", array()), "html", null, true);
                echo ",
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
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
        return array (  221 => 77,  212 => 75,  208 => 74,  204 => 72,  193 => 70,  189 => 69,  184 => 67,  180 => 66,  176 => 65,  172 => 64,  167 => 63,  165 => 62,  161 => 61,  149 => 51,  143 => 50,  140 => 49,  137 => 48,  135 => 47,  128 => 43,  124 => 42,  120 => 41,  113 => 39,  110 => 38,  107 => 37,  104 => 36,  100 => 35,  90 => 27,  84 => 26,  81 => 25,  78 => 24,  76 => 23,  68 => 20,  65 => 19,  62 => 18,  59 => 17,  55 => 16,  49 => 12,  46 => 11,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block js %}*/
/* 	<script src="js/flickity.pkgd.min.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block css %}*/
/* 	<link rel="stylesheet" type="text/css" href="css/flickity.css">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 		<section id="divProjet">*/
/* 			<h1 class="centre">Nos <strong>projets</strong>	à venir</h1>*/
/* 			<div class="gallery js-flickity">*/
/*         {% for projet in projets %}*/
/*           {% if projet.fini == 0 %}*/
/*            {% if projet.media %}*/
/*       				<div class="gallery-cell">*/
/*       					<img src="{{ projet.media }}" alt="{{ projet.titre }}"/>*/
/*       				</div>*/
/*             {% else %}*/
/*               {# lien youtube #}*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         {% endfor %}*/
/* 			</div>*/
/* 		</section>*/
/* */
/*     <section id="divRea">*/
/*   			<div class="row">*/
/*   				<div class="col-md-12">*/
/*   				<h1 class="centre">Nos <strong>réalisations</strong></h1>*/
/*   				<div class="grid">*/
/*             {% for projet in projets %}*/
/*               {% if projet.fini == 1 %}*/
/*                {% if projet.media %}*/
/*                  <figure class="effect-steve">*/
/*                    <img src="{{ projet.media }}" alt="{{ projet.titre }}"/>*/
/*                    <figcaption>*/
/*                      <h2>{{ projet.titre|raw }}</h2>*/
/*                      <p>{{ projet.description|raw }}</p>*/
/*                      <!--<a href="projets/{{ projet.id }}">Voir plus</a>-->*/
/*                    </figcaption>*/
/*                  </figure>*/
/*                 {% else %}*/
/*                   {# lien youtube #}*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*   					</div>*/
/*   				</div>*/
/*   			</div>*/
/*   			</section>*/
/* */
/* */
/* */
/* */
/* */
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
/*     <p>Languages:*/
/*     {% for language in projet.languages %}*/
/*       {{ language.language }},*/
/*     {% endfor %}*/
/*     </p>*/
/*   {% endfor %}*/
/* {% endblock %}*/
/* */
