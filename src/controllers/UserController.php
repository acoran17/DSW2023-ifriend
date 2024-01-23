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
    header("Location: {$this->router->generate('user_index')}");
  }

  public function create() {
    $router = $this->router;
    echo $this->blade->make('user.create', compact('router'))->render();
  }

  public function post() {
    $user = new User();
    $user->name = $_POST['inputName'];
    $user->password = $_POST['inputPassword'];
    $user->mail = $_POST['inputEmail'];
    $user->save();
    header("Location: {$this->router->generate('user_index')}");
  }

  public function edit($params) {
    $id = $params['id'];
    $user = User::find($id);

    $router = $this->router;
    echo $this->blade->make('user.edit', compact('router', 'user'))->render();
  }

  public function update($params) {
    $user = User::find($params['id']);
    $user->name = $_POST['inputName'];
    $user->password = $_POST['inputPassword'];
    $user->mail = $_POST['inputEmail'];
    $user->save();
    header("Location: {$this->router->generate('user_index')}");
  }
}