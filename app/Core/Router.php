<?php

namespace AlBuldaniOnline\Core;

class Router {
    private static array $routes = [];
  
    public static function add(string $method, string $path, string $controller, string $function): void {
      self::$routes[] = [
        'method' => strtoupper($method),
        'path' => $path,
        'controller' => $controller,
        'function' => $function
      ];
    }
  
    public static function run(): void {
      $path = "/";
      $method = $_SERVER['REQUEST_METHOD'];
      
      if (isset($_SERVER['PATH_INFO'])) {
        $path = $_SERVER['PATH_INFO'];
      }
  
      foreach (self::$routes as $route) {
        $pattern = '#^' . $route['path'] . '$#';

        if (preg_match($pattern, $path, $variables) && $method == $route['method']) {
          $controller = new $route['controller'];
          $function = $route['function'];
          // $controller->$function();

          array_shift($variables);
          call_user_func_array([$controller, $function], $variables);
          return;
        }
      }
  
      http_response_code(404);
      require __DIR__ . "/../Views/404.php";
    }
  }
