<?php

namespace AlBuldaniOnline\Core;

class View {
  public static function render(string $view, $model) {
    require_once __DIR__ . "/../Views/templates/header.php";
    require_once __DIR__ . "/../Views/" . $view . ".php";
    require_once __DIR__ . "/../Views/templates/footer.php";
  }
}