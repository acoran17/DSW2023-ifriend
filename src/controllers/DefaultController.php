<?php

namespace DSW\Ifriend\Controllers;

class DefaultController extends Controller{
  public function index() {
    $router = $this->router;
    echo $this->blade->make('index', compact('router'))->render();
  }
}