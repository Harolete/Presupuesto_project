<?php

use Config\Container\ContainerFactory;
use DI\Bridge\Slim\Bridge;
use Src\Controllers\People\PersonalVehiclesController;
use Src\Controllers\People\PersonRegisterController;
use Src\Controllers\Vehicles\VehiclesController;
use Src\Controllers\TestController;

require __DIR__ . '/../vendor/autoload.php';

// PHP-CLI
if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

// Containers
$container = ContainerFactory::create();
$app = Bridge::create($container);

require __DIR__.'/../routes/Routes.php';

$app->run();