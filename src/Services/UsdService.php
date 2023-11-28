<?php
 
namespace Ivanp86\LaraPackageNew\Services;

use Illuminate\Support\Facades\Cache;

class UsdService
{
	public function getUsd()
	{
        $usd = Cache::remember('usd', 1000, function () {
            return $this->parse(file_get_contents('https://mainfin.ru/currency/usd/ufa'), '<td class="mark-text">', '</td>');
        });
			return $usd;
	}
	public function parse($site, $tag1, $tag2)
	{
	    $pos1 = strpos($site, $tag1);
	    $substr = substr($site, $pos1);
	    return strip_tags(substr($substr, 0, strpos($substr, $tag2)));
	}
 }
 