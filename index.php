<?php

// Main Router

// Get the current request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Define routes
$routes = [
    '/' => 'home.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php'
];

// Match the request URI to the defined routes
if (array_key_exists($requestUri, $routes)) {
    include $routes[$requestUri];
} else {
    http_response_code(404);
    include '404.php';
}