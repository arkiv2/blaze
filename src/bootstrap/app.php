<?php

namespace Emblazoned\Blaze;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Instantiate \Symfony\Component\HttpFoundation\Request 
 */
$request = Request::createFromGlobals();


error_reporting(E_ALL);

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
$route
