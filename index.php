<?php
require 'vendor/autoload.php';

use Symfony\Component\Yaml\Parser;
use Illuminate\Database\Capsule\Manager as Capsule;

//connexion db
$yaml = new Parser();
$config = $yaml->parse(file_get_contents('Config/config.yml'));
$capsule = new Capsule;
$capsule->addConnection($config['parameters']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

//compilation du scss
SassCompiler::run("Views/scss/", "Views/css/");

$container = new \Slim\Container([
  'settings' => [
    'displayErrorDetails' => $config['parameters']['displayErrorDetails']
  ]
]);

//modification de la page 404
$container['notFoundHandler'] = function ($container) {
  return function ($request, $response) use ($container) {
    $view = new \Slim\Views\Twig('Views');
    return $view->render($response, '404.html.twig');
  };
};

// Register View component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('Views', [
      'debug'=> true,
      'cache' => 'cache'
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));
    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};

$app = new Slim\App($container);

//Add routes
foreach (glob("Routes/*.php") as $filename){
    include $filename;
}

$app->run();
