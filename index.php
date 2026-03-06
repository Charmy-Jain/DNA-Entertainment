<?php

// Check if a static file was requested (for local built-in server)
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if ($path && is_file($path) && strpos($path, realpath(__DIR__)) === 0 && $path !== __FILE__) {
        return false;
    }
}

// Ensure the directory structure restricts direct access if possible
// Map routes directly
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
if ($uri !== '/' && substr($uri, -1) === '/') {
    $uri = rtrim($uri, '/');
}

$routes = [
    '/' => 'home.php',
    '/home' => 'home.php',
    '/index' => 'home.php',
    '/about' => 'about.php',
    '/careers' => 'careers.php',
    '/clientele' => 'clientele.php',
    '/contact' => 'contact.php',
    '/corporate-events' => 'corporate-events.php',
    '/music-events' => 'music-events.php',
    '/news' => 'news.php',
    '/services' => 'services.php',
    '/special-events' => 'special-events.php',
    '/sports-events' => 'sports-events.php',
    '/tickets' => 'tickets.php',
    '/contact_process.php' => '../contact_process.php'
];

if (array_key_exists($uri, $routes)) {
    $view = $routes[$uri];
    if ($uri === '/contact_process.php') {
        require_once __DIR__ . '/contact_process.php';
    } else {
        require_once __DIR__ . '/pages/' . $view;
    }
} else {
    // Check for backward compatible `.php` URIs or simply stripping them.
    $uriBase = '/' . basename($uri, '.php');
    if (array_key_exists($uriBase, $routes)) {
        $view = $routes[$uriBase];
        require_once __DIR__ . '/pages/' . $view;
    } else {
        http_response_code(404);
        if (file_exists(__DIR__ . '/pages/404.php')) {
            require_once __DIR__ . '/pages/404.php';
        } else {
            echo "404 Not Found";
        }
    }
}
