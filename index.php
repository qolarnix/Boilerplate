<?php declare(strict_types=1);

/**
 * Composer Autoloader
 */
require __DIR__ . '/vendor/autoload.php';

/**
 * Declare Dotenv
 */
$env = Dotenv\Dotenv::createImmutable(__DIR__);

/**
 * Load Plugins
 */
require_once __DIR__ . '/plugins/plugins.php';

/**
 * Web Routes
 */
require_once __DIR__ . '/routes/router.php';