<?php declare(strict_types=1);

define('PROJECT_ROOT', realpath(__DIR__ . '/../'));

use Glacial\Template\TemplateEngine;

function glacialEngine() {
    $config = [
        PROJECT_ROOT . '/components',
        PROJECT_ROOT . '/pages'
    ];

    return new TemplateEngine($config);
}