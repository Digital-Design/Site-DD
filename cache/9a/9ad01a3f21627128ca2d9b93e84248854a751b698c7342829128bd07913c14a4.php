<?php

/* base.html.twig */
class __TwigTemplate_6fd9fc7e6300b444742d9867e2402e99adbd776390baf48bb49a375df40a5170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Digital Design</title>

    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 11
        echo "
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>

    <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <ul>
          <li><a href=\".\">Accueil</a></li>
          <li><a href=\"projets\">Projets</a></li>
          <li><a href=\"contact\">Contact</a></li>
        </ul>
      </div>
    </nav>

    <br/><br/><br/>

    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>

    ";
        // line 36
        $this->displayBlock('js', $context, $blocks);
        // line 37
        echo "
  </body>
</html>
";
    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
    }

    // line 36
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  79 => 31,  74 => 10,  67 => 37,  65 => 36,  59 => 32,  57 => 31,  35 => 11,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>Digital Design</title>*/
/* */
/*     <link href="css/bootstrap.min.css" rel="stylesheet">*/
/*     {% block css %}{% endblock %}*/
/* */
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body>*/
/* */
/*     <nav class="navbar navbar-default navbar-fixed-top">*/
/*       <div class="container">*/
/*         <ul>*/
/*           <li><a href=".">Accueil</a></li>*/
/*           <li><a href="projets">Projets</a></li>*/
/*           <li><a href="contact">Contact</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <br/><br/><br/>*/
/* */
/*     {% block body %}{% endblock %}*/
/* */
/*     <script src="js/jquery.min.js"></script>*/
/*     <script src="js/bootstrap.min.js"></script>*/
/* */
/*     {% block js %}{% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
