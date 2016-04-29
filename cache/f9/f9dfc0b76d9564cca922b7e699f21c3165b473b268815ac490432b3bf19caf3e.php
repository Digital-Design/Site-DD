<?php

/* base.html.twig */
class __TwigTemplate_1077b0d000fa242f51fe7caa7e47433d8dfd63108f2f0fc24b67461488e6e295 extends Twig_Template
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
    ";
        // line 18
        $this->displayBlock('css', $context, $blocks);
        // line 19
        echo "
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>

    ";
        // line 27
        $this->loadTemplate("menu.html.twig", "base.html.twig", 27)->display($context);
        // line 28
        echo "
    <br/><br/><br/>

    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
    <script src=\"js/jquery.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    ";
        // line 35
        $this->displayBlock('js', $context, $blocks);
        // line 36
        echo "
  </body>
</html>
";
    }

    // line 18
    public function block_css($context, array $blocks = array())
    {
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
    }

    // line 35
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
        return array (  86 => 35,  81 => 31,  76 => 18,  69 => 36,  67 => 35,  62 => 32,  60 => 31,  55 => 28,  53 => 27,  43 => 19,  41 => 18,  22 => 1,);
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
/*     {% block js %}{% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
