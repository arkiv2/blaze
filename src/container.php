<?php

use League\Container\Container;
use Arki\Blaze\ServiceProvider\ConfigServiceProvider;
use Arki\Blaze\ServiceProvider\HttpMessageServiceProvider;

$container = new Container();

/**
 * Register All Service Providers
 */
$container->addServiceProvider(ConfigServiceProvider::class);
$container->addServiceProvider(HttpMessageServiceProvider::class);

return $container;