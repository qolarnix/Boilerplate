<?php declare(strict_types=1);

$router = new \Bramus\Router\Router();

/**
 * Web Routes
 */
require_once __DIR__ . '/web.php';

/**
 * API Routes
 */
require_once __DIR__ . '/api.php';

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
});

$router->run();