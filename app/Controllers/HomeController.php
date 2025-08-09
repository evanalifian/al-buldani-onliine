<?php

namespace AlBuldaniOnline\Controllers;

use AlBuldaniOnline\Core\View;

class HomeController {
  public function index(): void {
    View::render("home/index", [
      "title" => "Al-Buldani Online"
    ]);
  }
}