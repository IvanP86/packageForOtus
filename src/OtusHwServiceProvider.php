<?php

namespace Ivanp86\LaraPackage;

use Illuminate\Support\ServiceProvider;

class OtusHwServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes.php');
	}
}