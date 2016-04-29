<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$app->group('/tuto', function() use ($app) {
  $app->get('', function($request, $response) {
    $tutos = Capsule::table('TUTO')->where('active',1)->orderBy('date', 'desc')->get();
    foreach ($tutos as $key => $tuto) {

      //ajout du type au tuto
      $tutos[$key]->type = Capsule::table('TYPE')->where('id',$tuto->id_type)->first()->type;

      //ajout des membres au tuto
      $tuto_membres = Capsule::table('TUTO_MEMBRE')->where('id_tuto',$tuto->id)->get();
      $tutos[$key]->membres = array();
      foreach ($tuto_membres as $tuto_membre) {
        $tutos[$key]->membres[] = Capsule::table('MEMBRE')->where('id',$tuto_membre->id_membre)->first();
      }

      //ajout des languages au tuto
      $tuto_languages = Capsule::table('TUTO_LANGUAGE')->where('id_language',$tuto->id)->get();
      $tutos[$key]->languages = array();
      foreach ($tuto_languages as $tuto_language) {
        $tutos[$key]->languages[] = Capsule::table('LANGUAGE')->where('id',$tuto_language->id_language)->first();
      }
    }
    return $this->view->render($response, 'tuto.html.twig', array('tutos' => $tutos));
  });
});
