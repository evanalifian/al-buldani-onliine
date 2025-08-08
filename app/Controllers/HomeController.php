<?php

namespace AlBuldaniOnline\Controllers;

use AlBuldaniOnline\Core\View;
use AlBuldaniOnline\Models\BlogModel;

class HomeController {
  public function index(): void {
    View::render("home/index", [
      "title" => "Al-Buldani Online",
      "top_blog" => BlogModel::getTopBlog(),
      "top_two_blog" => BlogModel::getSomeBlogs(2),
      "recent_posts" => BlogModel::getSomeBlogs(3),
    ]);
  }
}