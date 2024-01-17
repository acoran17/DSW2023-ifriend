<?php

namespace DSW\Ifriend\Controllers;

use DSW\Ifriend\Models\User;

require_once('../src/Connection.php');

class UserController {
  public function index() {
    $users = User::all();
    
    global $blade;
    echo $blade->make('user.list')->render();
  }
}