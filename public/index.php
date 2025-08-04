<?php

require_once __DIR__ . "/../vendor/autoload.php";

use AlBuldaniOnline\Core\Router;
use AlBuldaniOnline\Controllers\HomeController;

Router::add("GET", "/", HomeController::class, "index");

Router::run();