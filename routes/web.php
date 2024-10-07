<?php declare(strict_types=1);

$template = glacialEngine();

$router->get('/', function() use($template) {
    echo $template->render('glacial');
});

$router->get('/demo', function() use($template) {
    echo $template->render('demo', [
        'items' => ['burger', 'pizza', 'sandwich']
    ]);
});