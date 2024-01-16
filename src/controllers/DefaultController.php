<?php

namespace DSW\Ifriend\Controllers;

class DefaultController {
  public function index() {
    //echo 'Estoy en index de DefaultController';
    global $blade;
    echo $blade->make('index')->render();
  }
}