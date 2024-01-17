<?php

$router->map('GET', '/', 'DefaultController#index', 'index');
$router->map('GET', '/users', 'UserController#index', 'user_index');

$router->map('GET', '/users/[i:id]/delete', 'UserController#delete', 'user_delete');

$router->map('GET', '/users/create', 'UserController#create', 'user_create');
$router->map('POST', '/users', 'UserController#post', 'user_post');