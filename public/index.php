<?php

// Namespace
require_once '../vendor/autoload.php';
$namespace = 'DSW\\ifriend\\';

// Router
$router = new AltoRouter();
require_once '../src/routers/router.php'; // List of routes

$match = $router->match();
if ($match) {
  $target = $match['target'];
  if (is_string($target) && strpos($target, '#') !== false) {
    list($controller, $action) = explode('#', $target);
    $controller = $namespace . 'Controllers\\' . $controller;
    $controller = new $controller($router);
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