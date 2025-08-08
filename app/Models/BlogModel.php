<?php

namespace AlBuldaniOnline\Models;

class BlogModel {
  const URL = "https://jsonplaceholder.org/posts";
  
  private static function getData() {
    $json = file_get_contents(self::URL);
    $data = json_decode($json, true);
    return $data;
  }

  public static function getBlogs() {
    return self::getData();
  }

  public static function getTopBlog() {
    return self::getData()[0];
  }

  public static function getSomeBlogs(int $amount) {
    return array_slice(self::getData(), 0, $amount);
  }
}