<?php

// $request_uri = explode('?', $_SERVER['SCRIPT_NAME'], 2);
// $url=explode('/',$_SERVER['SCRIPT_NAME']);
$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
// print_r($uri);
// require 'views/home.php';
// echo "Route it up!".
// echo $uri;
switch ($uri) {
    // Home page
    case '':
        require 'views/home.php';
        break;

     case 'home':
        require 'views/home.php';
        break;    
    // About page
    case 'about':
        require 'views/about.php';
        break;

    // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require 'views/404.php';
        break;
}
