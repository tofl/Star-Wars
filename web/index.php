<?php

require('../vendor/Autoload.php');

use Silex\Application;

$app = new Application();

$app['debug'] = true;

$app->get('/hello/{name}', function($name) {
    return 'Hello ' . $name;
})->value('name', 'world');

$app->get('/', function() {
    return 'Index';
});

$app->run();