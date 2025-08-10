<?php

namespace AlBuldaniOnline\Controllers;

use AlBuldaniOnline\Core\Utils;
use AlBuldaniOnline\Core\View;

class BlogController {
  public static function index(): void {
    View::render("blog/index", []);
  }

  public static function category(string $category): void {
    $cond = strtolower(Utils::parseTitle($category)) == "kabar pesantren" || strtolower(Utils::parseTitle($category)) == "kajian islami" || strtolower(Utils::parseTitle($category)) == "cerita islami";
    if ($cond) {
      View::render("blog/category", [
        "category" => Utils::parseTitle($category)
      ]);
    } else {
      http_response_code(404);
      require __DIR__ . "/../Views/404.php";
    }
    
  }

  public static function blog(string $category, string $blogTitle): void {
    View::render("blog/blog", [
      "category" => Utils::parseTitle($category),
      "blogTitle" => Utils::parseTitle($blogTitle)
    ]);
  }
}