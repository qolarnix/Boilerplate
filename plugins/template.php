<?php declare(strict_types=1);

use Symfony\Component\Templating\Loader\FilesystemLoader as Loader;
use Symfony\Component\Templating\PhpEngine as Engine;
use Symfony\Component\Templating\Helper\SlotsHelper;
use Symfony\Component\Templating\TemplateNameParser;

$fs_loader = new Loader([
    __DIR__ . '/components/%name%',
    __DIR__ . '/pages/%name%'
]);

$template = new Engine(new TemplateNameParser(), $fs_loader);
$template->set(new SlotsHelper());