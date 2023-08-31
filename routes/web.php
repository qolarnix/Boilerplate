<?php declare(strict_types=1);

$router->get('/', function() use($env, $template) {
    $env->load();

    echo $template->render('test.php', [
        'domain' => $_ENV['DOMAIN'],
        'port' => $_ENV['PORT']
    ]);
});

$router->get('/test', function() use($env) {
    $env->load();
    echo $_ENV['DOMAIN'] . ':' . $_ENV['PORT'];
});