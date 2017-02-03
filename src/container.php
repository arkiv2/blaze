<?php

use League\Container\Container;
use Arki\Blaze\ServiceProvider\ConfigServiceProvider;

$container = new Container();

/**
 * Register All Service Providers
 */
$container->addServiceProvider(ConfigServiceProvider::class);

return $container;