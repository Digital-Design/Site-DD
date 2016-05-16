<?php

/* base.html.twig */
class __TwigTemplate_6d2a651cf61e13a3ef1336b02fc109ce73a3e648b86b5d6b9f723a26db317fc2 extends Twig_Template
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
  \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
  \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

  \t<title>Digital Design | ISEN Brest</title>

  \t<meta name=\"description\" content=\"Site web de Digital Design, association étudiante de l'ISEN Brest\" />
  \t<meta name=\"keywords\" content=\"design, isen, brest, association, web, css\" />
  \t<meta name=\"author\" content=\"Digital Design\" />

  \t<link rel=\"shortcut icon\" href=\"img/favicon.png\">

    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/menu.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/spop.css\">
    ";
        // line 21
        $this->displayBlock('css', $context, $blocks);
        // line 22
        echo "
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>

    ";
        // line 30
        $this->loadTemplate("menu.html.twig", "base.html.twig", 30)->display($context);
        // line 31
        echo "
    <br/><br/><br/>

    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/modernizr.custom.js\"></script>
    <script src=\"js/classie.js\"></script>
    <script src=\"js/borderMenu.js\"></script>
    <script src=\"js/spop.min.js\"></script>
    <script src=\"js/script.js\"></script>
    ";
        // line 43
        $this->displayBlock('js', $context, $blocks);
        // line 44
        echo "
  </body>
</html>
";
    }

    // line 21
    public function block_css($context, array $blocks = array())
    {
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 43
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 43,  89 => 34,  84 => 21,  77 => 44,  75 => 43,  65 => 35,  63 => 34,  58 => 31,  56 => 30,  46 => 22,  44 => 21,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*   	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*   	<meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/* */
/*   	<title>Digital Design | ISEN Brest</title>*/
/* */
/*   	<meta name="description" content="Site web de Digital Design, association étudiante de l'ISEN Brest" />*/
/*   	<meta name="keywords" content="design, isen, brest, association, web, css" />*/
/*   	<meta name="author" content="Digital Design" />*/
/* */
/*   	<link rel="shortcut icon" href="img/favicon.png">*/
/* */
/*     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">*/
/*     <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/*     <link rel="stylesheet" type="text/css" href="css/menu.css">*/
/*     <link rel="stylesheet" type="text/css" href="css/style.css">*/
/*     <link rel="stylesheet" type="text/css" href="css/spop.css">*/
/*     {% block css %}{% endblock %}*/
/* */
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body>*/
/* */
/*     {% include "menu.html.twig" %}*/
/* */
/*     <br/><br/><br/>*/
/* */
/*     {% block body %}{% endblock %}*/
/* */
/*     <script src="js/jquery.min.js"></script>*/
/*     <script src="js/bootstrap.min.js"></script>*/
/*     <script src="js/modernizr.custom.js"></script>*/
/*     <script src="js/classie.js"></script>*/
/*     <script src="js/borderMenu.js"></script>*/
/*     <script src="js/spop.min.js"></script>*/
/*     <script src="js/script.js"></script>*/
/*     {% block js %}{% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
