<?php

namespace Arki\Blaze;

use Dotenv\Dotenv;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Register error handler
 */

$whoops = new Run;
if ($config['ENVIRONMENT'] !== 'production') {
	$whoops->pushHandler(new PrettyPageHandler);
}
else {
	$whoops->pushHandler(function ($e) {
		echo 'Todo: Friendly error page. Send mail to admin';
	});
}

$whoops->register();



/**
 * Register dotenv
 */
$dotenv = new Dotenv(__DIR__ . '/../../');
$dotenv->load();


/**
 * Register the container the container 
 */
$container = include __DIR__ . '/../container.php';
$config = $container->get('config');


/**
 * Register route handler
 */

$router = include __DIR__ . '/../routes.php';