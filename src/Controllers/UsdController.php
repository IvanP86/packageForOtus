<?php

namespace Ivanp86\LaraPackageNew\Controllers;
use Ivanp86\LaraPackageNew\Services\UsdService;

class UsdController
{
	public function __construct(public UsdService $usdService)
	{

	}
	public function index()
	{
		$usd = $this->usdService->getUsd();
		return 'Курс USD = ' . $usd;
	}
}
