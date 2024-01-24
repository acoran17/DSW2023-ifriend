<?php

namespace DSW\Ifriend\Controllers;

use DSW\Ifriend\Models\UserGame;

require_once('../src/Connection.php');

class UserGameController extends Controller{
  public function index() {
    $games = UserGame::all();

  }

}