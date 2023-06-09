<?php
// router.php

// Define the routes
$routes = [
    '/' => 'HomeController@index',
    '/about' => 'AboutController@index',
    '/users' => 'UsersController@index',
    '/user' => 'UsersController@show',
];

// Get the requested URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Find the corresponding route
$route = $routes[$url] ?? false;

// Dispatch the route
if ($route) {
    [$controller, $action] = explode('@', $route);
    require_once 'controllers/' . $controller . '.php';
    $controller = new $controller();
    $controller->$action();
} else {
    // Show a 404 error page if the route doesn't exist
    header('HTTP/1.1 404 Not Found');
    echo '404 Not Found That page';
}
?>
