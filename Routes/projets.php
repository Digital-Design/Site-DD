<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$app->group('/projets', function() use ($app) {
  $app->get('', function($request, $response) {
    $projets = Capsule::table('PROJET')->where('active',1)->orderBy('date', 'desc')->get();
    foreach ($projets as $key => $projet) {

      //ajout du type au projet
      $projets[$key]->type = Capsule::table('TYPE')->where('id',$projet->id_type)->first()->type;

      //ajout des membres au projet
      $projet_membres = Capsule::table('PROJET_MEMBRE')->where('id_projet',$projet->id)->get();
      $projets[$key]->membres = array();
      foreach ($projet_membres as $projet_membre) {
        $projets[$key]->membres[] = Capsule::table('MEMBRE')->where('id',$projet_membre->id_membre)->first();
      }

      //ajout des langages au projet
      $projet_langages = Capsule::table('PROJET_LANGAGE')->where('id_projet',$projet->id)->get();
      $projets[$key]->langages = array();
      foreach ($projet_langages as $projet_langage) {
        $projets[$key]->langages[] = Capsule::table('LANGAGE')->where('id',$projet_langage->id_langage)->first();
      }
    }
    return $this->view->render($response, 'projets.html.twig', array('projets' => $projets));
  });
});
