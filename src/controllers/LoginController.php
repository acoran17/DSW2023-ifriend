<?php

namespace DSW\Ifriend\Controllers;

use DSW\Ifriend\Models\User;

require_once('../src/Connection.php');

class LoginController extends Controller{
  public function validate() {
    $user = User::where([
      ['name', $_POST['inputName']],
      ['password', $_POST['inputPassword']]
    ])->first();
    if ($user) {
      $_SESSION['id'] = $user->id;
      $_SESSION['user'] = $user->name;
    }
    header("Location: {$this->router->generate('index')}");
  }

  public function logout() {
    session_destroy();
    header("Location: {$this->router->generate('index')}");
  }
}