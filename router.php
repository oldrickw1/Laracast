<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
'/' => 'controllers/index.php',
'/contact' => 'controllers/contact.php',
'/about' => 'controllers/about.php'
];


function abort($code)
{
http_response_code($code);
require "views/{$code}.php";
die();
}


function routeToController($uri, $routes)
{
if (array_key_exists($uri, $routes)) {
require $routes[$uri];
} else {
abort(404);
}
}

routeToController($uri, $routes);
