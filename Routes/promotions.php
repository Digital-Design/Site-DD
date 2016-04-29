<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$app->group('/promotions', function() use ($app) {
  $app->get('', function($request, $response) {
    $promotions = Capsule::table('PROMOTION')->get();
    foreach ($promotions as $key => $promotion) {
      //ajout du membre à la promotion
      $promotions[$key]->membre = Capsule::table('MEMBRE')->where('id',$promotion->id_membre)->first();
    }
    return $this->view->render($response, 'promotions.html.twig', array('promotions' => $promotions));
  });
});
