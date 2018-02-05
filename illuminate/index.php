<?php

require 'vendor/autoload.php';
use Carbon\Carbon;

 $path = parse_url( trim($_SERVER['REQUEST_URI'], '/'), PHP_URL_PATH);

 $routes = [
  '' => 'controllers/index.php',
  'about' => 'controllers/about.php',
 ];

 if (array_key_exists($path, $routes)) {
  require $routes[$path];
 }else {
  require 'views/notfound.php';
 }
