<?php

namespace Arki\Blaze;

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Register the container the container 
 */
$container = include __DIR__ . '/../container.php';

$config = $container->get('config');


$environment = 'development';

/**
 * Register error handler
 */

$whoops = new Run;
if ($environment !== 'production') {
	$whoops->pushHandler(new PrettyPageHandler);
}
else {
	$whoops->pushHandler(function ($e) {
		echo 'Todo: Friendly error page. Send mail to admin';
	});
}
$whoops->register();

/**
 * Register route handler
 */
