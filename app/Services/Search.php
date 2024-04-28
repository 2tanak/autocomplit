<?php

namespace App\Services;

use App\Models\Language;

use App\Models\ModelParent;

use Illuminate\Http\Request;

class Search
{

	static function fulltext($model, Request $request)
	{

		$items = $model::filter($request)->get();

		return $items;
	}
}
