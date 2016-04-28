<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$app->group('/', function() use ($app) {

  $app->get('', function($request, $response) {
    $projets = Capsule::table('PROJET')->get();
    return $this->view->render($response, 'index.html.twig');
  });

});
