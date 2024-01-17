<?php

namespace DSW\Ifriend\Controllers;

use DSW\Ifriend\Models\User;

require_once('../src/Connection.php');

class UserController extends Controller{
  public function index() {
    $users = User::all();
    $router = $this->router;
    echo $this->blade->make('user.list', compact('router', 'users'))->render();
  }

  public function delete($params) {
    $id = $params['id'];
    $user = User::find($id);
    $user->delete();
    header('Location: /users');
  }

  public function create() {
    $router = $this->router;
    echo $this->blade->make('user.create', compact('router'))->render();
  }

  public function post($params) {
    var_dump($params);
  }
}