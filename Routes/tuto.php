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

      //ajout des langages au tuto
      $tuto_langages = Capsule::table('TUTO_LANGAGE')->where('id_langage',$tuto->id)->get();
      $tutos[$key]->langages = array();
      foreach ($tuto_langages as $tuto_langage) {
        $tutos[$key]->langages[] = Capsule::table('LANGAGE')->where('id',$tuto_langage->id_langage)->first();
      }
    }
    return $this->view->render($response, 'tuto.html.twig', array('tutos' => $tutos));
  });
});
