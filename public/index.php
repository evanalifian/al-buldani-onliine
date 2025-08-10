<?php

require_once __DIR__ . "/../vendor/autoload.php";

use AlBuldaniOnline\Controllers\BlogController;
use AlBuldaniOnline\Core\Router;
use AlBuldaniOnline\Controllers\HomeController;

Router::add("GET", "/", HomeController::class, "index");
Router::add("GET", "/blogs", BlogController::class, "index");
Router::add("GET", "/blogs/([0-9a-zA-Z-]*)", BlogController::class, "category");

Router::run();