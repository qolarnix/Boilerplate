<?php declare(strict_types=1);

$router = new \Bramus\Router\Router();

/**
 * App Routes
 */
require_once __DIR__ . '/app.php';

/**
 * API Routes
 */
require_once __DIR__ . '/api.php';

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
});

$router->run();