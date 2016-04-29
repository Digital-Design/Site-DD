<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$app->group('/', function() use ($app) {
  $app->get('', function($request, $response) {
    $promotions = Capsule::table('PROMOTION')->get();
    foreach ($promotions as $key => $promotion) {
      //ajout du membre à la promotion
      $promotions[$key]->membre = Capsule::table('MEMBRE')->where('id',$promotion->id_membre)->first();
    }
    return $this->view->render($response, 'index.html.twig', array('promotions' => $promotions));
  });
});
