<?php

/* promotions.html.twig */
class __TwigTemplate_d793091c1b5537b9f8f70f8cad47eef23e6dcc929f4ff1996adb5f65ed57cf91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "promotions.html.twig", 1);
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
        echo "<section id=\"divProjet\">
  <h1 class=\"centre\">Les <strong>promotions</strong></h1>
  <div>
    <h2>20<strong>16</strong> - 20<strong>17</strong></h2>
    <img src=\"/promotions/2016_2017.png\" alt=\"Promotion 2016/2017 - Digital Design - ISEN Brest\"/>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "promotions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* <section id="divProjet">*/
/*   <h1 class="centre">Les <strong>promotions</strong></h1>*/
/*   <div>*/
/*     <h2>20<strong>16</strong> - 20<strong>17</strong></h2>*/
/*     <img src="/promotions/2016_2017.png" alt="Promotion 2016/2017 - Digital Design - ISEN Brest"/>*/
/*   </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
