<?php

namespace AlBuldaniOnline\Controllers;

use AlBuldaniOnline\Core\View;

class BlogController {
  public static function index(): void {
    View::render("blog/index", []);
  }

  public static function category(string $category): void {
    View::render("blog/category", [
      "category" => $category
    ]);
    // echo $category;
  }
}