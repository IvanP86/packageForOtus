<?php

use Illuminate\Support\Facades\Route;
use Ivanp86\LaraPackageNew\Controllers\UsdController;

Route::get('/lib', function (){
	return "<h1>New package 12</h1>";
});

Route::get('/usd', [UsdController::class, 'index']);
