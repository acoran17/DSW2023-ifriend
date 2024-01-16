<?php

namespace DSW\Ifriend\Controllers;

use DSW\Ifriend\Models\User;

require_once('../src/Connection.php');

class UserController {
  public function index() {
    $users = User::all();
    echo '<h1>Estoy en index de UserController</h1>';
    echo "<pre>$users</pre>";
  }
}