<?php

$router->map('GET', '/', 'DefaultController#index', 'index');

// Login
$router->map('POST', '/login', 'LoginController#validate', 'validate');
$router->map('GET', '/logout', 'LoginController#logout', 'logout');


if (isset($_SESSION['id'])) {
  // -> User
  $router->map('GET', '/users', 'UserController#index', 'user_index');

  $router->map('GET', '/users/[i:id]/delete', 'UserController#delete', 'user_delete');

  $router->map('GET', '/users/create', 'UserController#create', 'user_create');
  $router->map('POST', '/users', 'UserController#post', 'user_post');

  $router->map('GET', '/users/[i:id]', 'UserController#edit', 'user_edit');
  $router->map('POST', '/users/[i:id]', 'UserController#update', 'user_update');

  // -> Game
  $router->map('GET', '/games', 'GameController#index', 'game_index');

  $router->map('GET', '/games/[i:id]/delete', 'GameController#delete', 'game_delete');

  $router->map('POST', '/games', 'GameController#post', 'game_post');

  $router->map('GET', '/games/[i:id]', 'GameController#edit', 'game_edit');
  $router->map('POST', '/games/[i:id]', 'GameController#update', 'game_update');

  // -> User_Game
  $router->map('GET', '/usergames', 'UserGameController#index', 'usergame_index');
}

// Order by
// $router->map('GET', '/users/[w:order]', 'UserController#', 'user_index');