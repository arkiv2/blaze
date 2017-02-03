<?php

namespace Emblazoned\Blaze;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);

$environment = 'development';

/**
 * Register error handler
 */

$whoops = new \Whoops\Run;
if ($environment !== 'production') {
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
}
else {
	$whoops->pushHandler(function ($e) {
		echo 'Todo: Friendly error page. Send mail to admin';
	});
}
$whoops->register();

$request = Request::createFromGlobals();
