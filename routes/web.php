<?php declare(strict_types=1);

global $template;

$router->get('/', function() use($template) {
    echo $template->render('glacial');
});

$router->get('/demo', function() use($template) {
    echo $template->render('demo', [
        'items' => ['burger', 'pizza', 'sandwich']
    ]);
});