<?php

declare(strict_types=1);

use Surreal\Surreal;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Bramus\Monolog\Formatter\ColoredLineFormatter;

$db = new Surreal();
$url = "http://127.0.0.1:8000";

$db->connect($url, [
    'namespace' => 'test',
    'database' => 'test'
]);

$db->signin([
    "user" => "root",
    "pass" => "root"
]);

$logger = new Logger('migrate');

$stream_handler = new StreamHandler('php://stdout');
$stream_handler->setFormatter(new ColoredLineFormatter());
$logger->pushHandler($stream_handler);