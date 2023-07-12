<?php declare(strict_types=1);

$router->get('/api', function() use($env) {
    $env->load();
    $data = [
        'domain' => $_ENV['DOMAIN'],
        'port' => $_ENV['PORT']
    ];

    echo res_json($data);
});