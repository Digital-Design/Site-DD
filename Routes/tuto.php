<?php

$app->group('/tuto', function() use ($app) {

  $app->get('', function($request, $response) {
    return $this->view->render($response, 'tuto.html.twig');
  });

});
