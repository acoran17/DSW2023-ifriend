<?php

// Classes
require_once '../vendor/autoload.php';
use Jenssegers\Blade\Blade;

// Data
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

$views = '../src/views';
$cache = '../cache';
$blade = new Blade($views, $cache);

// Router
$router = new AltoRouter();
require_once '../src/routers/router.php'; // List of routes

$match = $router->match();
if ($match) {
  $target = $match['target'];
  if (is_string($target) && strpos($target, '#') !== false) {
    list($controller, $action) = explode('#', $target);
    $controller = "{$_ENV['NAMESPACE']}Controllers\\$controller";
    $controller = new $controller($router, $blade);
    $controller->$action($match['params']);
  } else {
    if (is_callable($match['target'])) {
      call_user_func_array($match['target'], $match['params']);
    } else require $match['target'];
  }
} else {
  echo 'Ruta no valida';
  die();
}