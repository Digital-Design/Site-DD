<?php

/* contact.html.twig */
class __TwigTemplate_06b4f123daf32874b17933517737e51e6625f8a0cedee3f0b63b57d8c6563fef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 1);
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
        echo "<section>
  <div class=\"row\">
    <div class=\"col-xs-offset-3 col-xs-6 col-xs-offset-3 col-sm-offset-3 col-sm-6 col-sm-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-lg-offset-3 col-lg-6 col-lg-offset-3 \">
    <h1 class=\"centre\">Nous <strong>contacter</strong></h1>
    <form class=\"form-horizontal\" role=\"form\" action=\"mailto:digital-design@isen-bretagne.fr?Subject=[Portefolio]%20Message\">
      <div class=\"form-group\">
        <label for=\"nom\">Prénom Nom</label>
        <input required type=\"text\" class=\"form-control\" id=\"name\" name=\"name\">
      </div>
      <div class=\"form-group\">
        <label for=\"email\">Adresse mail</label>
        <input required type=\"email\" class=\"form-control\" id=\"email\" name= \"email\">
      </div>
      <div class=\"form-group\">
        <label for=\"message\">Message</label>
        <textarea required class=\"form-control\" id=\"textarea\" name=\"textarea\"></textarea>
      </div>
      <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-default center-block\">ENVOYER</button>
      </div>
    </form>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
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
/* <section>*/
/*   <div class="row">*/
/*     <div class="col-xs-offset-3 col-xs-6 col-xs-offset-3 col-sm-offset-3 col-sm-6 col-sm-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-lg-offset-3 col-lg-6 col-lg-offset-3 ">*/
/*     <h1 class="centre">Nous <strong>contacter</strong></h1>*/
/*     <form class="form-horizontal" role="form" action="mailto:digital-design@isen-bretagne.fr?Subject=[Portefolio]%20Message">*/
/*       <div class="form-group">*/
/*         <label for="nom">Prénom Nom</label>*/
/*         <input required type="text" class="form-control" id="name" name="name">*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label for="email">Adresse mail</label>*/
/*         <input required type="email" class="form-control" id="email" name= "email">*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label for="message">Message</label>*/
/*         <textarea required class="form-control" id="textarea" name="textarea"></textarea>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <button type="submit" class="btn btn-default center-block">ENVOYER</button>*/
/*       </div>*/
/*     </form>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
