<?php

/* index.html.twig */
class __TwigTemplate_1be4ee93928e6a98a24885b14f9a5bd14fb5e0226b1b8a00047e2706d0ea30ff extends Twig_Template
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
        echo "<section id=\"accueil\">
  <div class=\"accueil\">
    <div id=\"pc\" class=\"mockupDD\"><img src=\"img/mockup_pc.png\" /></div>
    <div id=\"tab\" class=\"mockupDD\"><img src=\"img/mockup_tab.png\" /></div>
    <div id=\"tel\" class=\"mockupDD\"><img src=\"img/mockup_tel.png\" /></div>
  </div>
</section>

<section id=\"presentation\">
  <div class=\"presentation container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-10 col-md-offset-1\">
        <div class=\"row txtcenter\">
          <div class=\"col-md-12\">
            <h1>Digital Design <b>c'est quoi&nbsp;?</b></h1>
        </div>
        <div class=\"row txtcenter\">
          <div class=\"col-md-12\">
            <p>Digital Design est un club de l'ISEN Brest.</p>
          </div>
        </div>
        <div class=\"row centreVerticalement\">
          <div class=\"col-md-4\">
            <img src=\"img/design.png\"/>
          </div>
          <div class=\"col-md-8\">
            <h2>DESIGN</h2>
            <p>(n.m.) Le design consiste à réaliser. Digital Design, comme son nom l'indique est orienté design, que ce soit une réalisation de logo (<a href>à voir ici</a>) ou une maquette de site web, nous pouvons subvenir à tous vos besoins !</p>
          </div>
        </div>
        <div class=\"row centreVerticalement\">
          <div class=\"col-md-8\"> <!--col-md-push-4\"-->
            <h2>WEB</h2>
            <p>(n.m.) Le Web est un système d'accès aux ressources du réseau internet. Digital Design se veut une association du web, que ce soit par le biais de conférence, de réalisation de site web, d'aide au référencements, nous pouvons tout faire, et si l'on ne peux pas, nous apprendrons à le faire !
            </p>
          </div>
          <div class=\"col-md-4\"> <!--col-md-push-8\"-->
            <img src=\"img/web.png\"/>
          </div>

        </div>
        <div class=\"row centreVerticalement\">
          <div class=\"col-md-4\">
            <img src=\"img/dev.png\"/>
          </div>
          <div class=\"col-md-8\">
            <h2>DÉVELOPPEMENT</h2>
            <p>(n.m.) Le Web est un système d'accès aux ressources du réseau internet. Digital Design se veut une association du web, que ce soit par le biais de conférence, de réalisation de site web, d'aide au référencements, nous pouvons tout faire, et si l'on ne peux pas, nous apprendrons à le faire !
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id=\"services\">
  <div class=\"services container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <h1><b>Services</b> proposés</h1>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"img/ecran.png\"/>
            </div>
            <div class=\"txtServices row\">
              <h2>Sites <b>WEB</b></h2>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"img/lunettes.png\"/>
            </div>
            <div class=\"txtServices row\">
              <h2><b>Visuels</b></h2>
              <p>(Logos, Affiches, ...)</p>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"img/prof.png\"/>
            </div>
            <div class=\"txtServices row\">
              <h2><b>Cours</b> & <b>Tutos</b></h2>
            </div>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"img/tel.png\"/>
            </div>
            <div class=\"txtServices row\">
              <h2>Applications <b>Mobile</b></h2>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"imgServices row\">
              <img src=\"img/cle.png\"/>
            </div>
            <div class=\"txtServices row\">
              <h2><b>Soutien</b></h2>
              <p>(Portfolio, Design, ...)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id=\"equipe\">
  <div class=\"equipe container-fluid\">
    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <h1>L'<b>équipe</b></h1>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"imgTrombi col-md-12\">
          <img src=\"img/trombi.png\"/>
        </div>
      </div>
    </div>
  </div>
</section>
";
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block body %}*/
/* <section id="accueil">*/
/*   <div class="accueil">*/
/*     <div id="pc" class="mockupDD"><img src="img/mockup_pc.png" /></div>*/
/*     <div id="tab" class="mockupDD"><img src="img/mockup_tab.png" /></div>*/
/*     <div id="tel" class="mockupDD"><img src="img/mockup_tel.png" /></div>*/
/*   </div>*/
/* </section>*/
/* */
/* <section id="presentation">*/
/*   <div class="presentation container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-md-10 col-md-offset-1">*/
/*         <div class="row txtcenter">*/
/*           <div class="col-md-12">*/
/*             <h1>Digital Design <b>c'est quoi&nbsp;?</b></h1>*/
/*         </div>*/
/*         <div class="row txtcenter">*/
/*           <div class="col-md-12">*/
/*             <p>Digital Design est un club de l'ISEN Brest.</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row centreVerticalement">*/
/*           <div class="col-md-4">*/
/*             <img src="img/design.png"/>*/
/*           </div>*/
/*           <div class="col-md-8">*/
/*             <h2>DESIGN</h2>*/
/*             <p>(n.m.) Le design consiste à réaliser. Digital Design, comme son nom l'indique est orienté design, que ce soit une réalisation de logo (<a href>à voir ici</a>) ou une maquette de site web, nous pouvons subvenir à tous vos besoins !</p>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row centreVerticalement">*/
/*           <div class="col-md-8"> <!--col-md-push-4"-->*/
/*             <h2>WEB</h2>*/
/*             <p>(n.m.) Le Web est un système d'accès aux ressources du réseau internet. Digital Design se veut une association du web, que ce soit par le biais de conférence, de réalisation de site web, d'aide au référencements, nous pouvons tout faire, et si l'on ne peux pas, nous apprendrons à le faire !*/
/*             </p>*/
/*           </div>*/
/*           <div class="col-md-4"> <!--col-md-push-8"-->*/
/*             <img src="img/web.png"/>*/
/*           </div>*/
/* */
/*         </div>*/
/*         <div class="row centreVerticalement">*/
/*           <div class="col-md-4">*/
/*             <img src="img/dev.png"/>*/
/*           </div>*/
/*           <div class="col-md-8">*/
/*             <h2>DÉVELOPPEMENT</h2>*/
/*             <p>(n.m.) Le Web est un système d'accès aux ressources du réseau internet. Digital Design se veut une association du web, que ce soit par le biais de conférence, de réalisation de site web, d'aide au référencements, nous pouvons tout faire, et si l'on ne peux pas, nous apprendrons à le faire !*/
/*             </p>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* <section id="services">*/
/*   <div class="services container-fluid">*/
/*     <div class="row">*/
/*       <div class="col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">*/
/*         <div class="row">*/
/*           <div class="col-md-12">*/
/*             <h1><b>Services</b> proposés</h1>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="img/ecran.png"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2>Sites <b>WEB</b></h2>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="img/lunettes.png"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2><b>Visuels</b></h2>*/
/*               <p>(Logos, Affiches, ...)</p>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="img/prof.png"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2><b>Cours</b> & <b>Tutos</b></h2>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="img/tel.png"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2>Applications <b>Mobile</b></h2>*/
/*             </div>*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <div class="imgServices row">*/
/*               <img src="img/cle.png"/>*/
/*             </div>*/
/*             <div class="txtServices row">*/
/*               <h2><b>Soutien</b></h2>*/
/*               <p>(Portfolio, Design, ...)</p>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* <section id="equipe">*/
/*   <div class="equipe container-fluid">*/
/*     <div class="col-md-8 col-md-offset-2">*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           <h1>L'<b>équipe</b></h1>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row">*/
/*         <div class="imgTrombi col-md-12">*/
/*           <img src="img/trombi.png"/>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
