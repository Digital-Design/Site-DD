<?php

$app->group('/projets', function() use ($app) {

  $app->get('', function($request, $response) {
    return $this->view->render($response, 'projets.html.twig');
  });

});
