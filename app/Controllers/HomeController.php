<?php

namespace AlBuldaniOnline\Controllers;

use AlBuldaniOnline\Core\View;

class HomeController {
  public function index(): void {
    View::render("home/index", [
      "title" => "Al-Buldani Online",
      "content" => "Website portal berita Pondok Pesantren Al-Buldani Pamekasan."
    ]);
  }
}