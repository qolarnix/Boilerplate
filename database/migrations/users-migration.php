<?php

declare(strict_types=1);

global $logger;

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../bootstrap.php';

use Surreal\Exceptions\SurrealException;

$table = '
    remove table users;
    define table if not exists users schemafull;
    define field username on table users type string;
    define field email on table users type string
        assert string::is::email($value);
    define index emailIndex on table users columns email unique;
';

try {
    $result = $db->query($table);
    $logger->info('table created: ');
    print_r($result);
}
catch(SurrealException $e) {
    $logger->error('unable to create table: ' . $e);
}