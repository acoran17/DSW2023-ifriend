<?php

namespace DSW\Ifriend\Controllers;

use Jenssegers\Blade\Blade;

class Controller {
  protected \AltoRouter $router;
  protected $blade;

  public function __construct(\AltoRouter $router, $blade) {
    $this->router = $router;
    $this->blade = $blade;
  }
}