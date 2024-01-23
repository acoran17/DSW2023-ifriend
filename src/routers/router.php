<?php

$router->map('GET', '/', 'DefaultController#index', 'index');

// Login
$router->map('POST', '/login', 'LoginController#validate', 'validate');
$router->map('GET', '/logout', 'LoginController#logout', 'logout');

// -> User
if (isset($_SESSION['id'])) {
  $router->map('GET', '/users', 'UserController#index', 'user_index');

  $router->map('GET', '/users/[i:id]/delete', 'UserController#delete', 'user_delete');

  $router->map('GET', '/users/create', 'UserController#create', 'user_create');
  $router->map('POST', '/users', 'UserController#post', 'user_post');

  $router->map('GET', '/users/[i:id]', 'UserController#edit', 'user_edit');
  $router->map('POST', '/users/[i:id]', 'UserController#update', 'user_update');
}

// Order by
// $router->map('GET', '/users/[w:order]', 'UserController#', 'user_index');