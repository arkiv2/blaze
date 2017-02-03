<?php

namespace Arki\Blaze\ServiceProvider;

use League\Container\ServiceProvider\AbstractServiceProvider;

class ConfigServiceProvider extends AbstractServiceProvider 
{

	/**
	 * @var array
	 */
	protected $provides = ['config'];

	/**
	 * @{inheritDoc}
	 */
	public function register()
	{
		$this->getContainer()->share('config', function() {
			return [
				'environment' => $_ENV['ENVIRONMENT'],
			];
		});
	}

}