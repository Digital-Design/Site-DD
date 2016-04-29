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

      //ajout des languages au projet
      $projet_languages = Capsule::table('PROJET_LANGUAGE')->where('id_projet',$projet->id)->get();
      $projets[$key]->languages = array();
      foreach ($projet_languages as $projet_language) {
        $projets[$key]->languages[] = Capsule::table('LANGUAGE')->where('id',$projet_language->id_language)->first();
      }
    }
    return $this->view->render($response, 'projets.html.twig', array('projets' => $projets));
  });
});
