<?php

namespace Ivanp86\LaraPackage\Controllers;
use Ivanp86\LaraPackage\Services\UsdService;

class UsdController
{
	public function __construct(public UsdService $usdService)
	{

	}
	public function index()
	{
		// $String = file_get_contents('https://mainfin.ru/currency/usd/ufa');
		// $usd = $this->usdService->parse($String, '<td class="mark-text">', '</td>');
		$usd = $this->usdService->getUsd();
		return 'Курс USD = ' . $usd;
	}
}