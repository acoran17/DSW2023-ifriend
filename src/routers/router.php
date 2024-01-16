<?php

$router->map('GET', '/', 'DefaultController#index', 'index');
$router->map('GET', '/users', 'UserController#index', 'user_index');