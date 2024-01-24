<?php

namespace DSW\Ifriend\Controllers;

use DSW\Ifriend\Models\Game;

require_once('../src/Connection.php');

class GameController extends Controller{
  public function index() {
    $games = Game::where([
      'id_admin' => $_SESSION['id']
    ])->get();
    $router = $this->router;
    echo $this->blade->make('game.list', compact('router', 'games'))->render();
  }

  public function delete($params) {
    $id = $params['id'];
    $game = Game::find($id);
    $game->delete();
    header("Location: {$this->router->generate('game_index')}");
  }

  public function post() {
    $game = new Game();
    $game->name = $_POST['inputName'];
    $game->id_admin = $_SESSION['id'];
    $game->save();
    header("Location: {$this->router->generate('game_index')}");
  }

  public function edit($params) {
    $id = $params['id'];
    $game = Game::find($id);

    $router = $this->router;
    echo $this->blade->make('game.edit', compact('router', 'game'))->render();
  }

  public function update($params) {
    $game = Game::find($params['id']);
    $game->name = $_POST['inputName'];
    $game->id_admin = $_SESSION['id'];
    $game->save();
    header("Location: {$this->router->generate('game_index')}");
  }
}