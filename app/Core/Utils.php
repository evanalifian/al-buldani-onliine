<?php

namespace AlBuldaniOnline\Core;

class Utils {
  public static function parseTitle(string $title): string {
    $strs = explode("-", $title);
    $texts = [];
    foreach ($strs as $key => $str) {
      $chars = str_split($str);
      $chars[0] = strtoupper($chars[0]);
      $texts[] = join("", $chars);
    }
    return join(" ", $texts);
  }
}