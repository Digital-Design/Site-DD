<?php

$app->group('/contact', function() use ($app) {
  $app->get('', function($request, $response) {
    return $this->view->render($response, 'contact.html.twig');
  });
  $app->post('', function($request, $response) {
    return $this->view->render($response, 'contact.html.twig', [
      'post' => true
    ]);
  });
});
