<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

use App\Models\Language;

use App\Services\Search;

class AirController extends Controller
{

    public function index(Request $request)
    {

        return View::make('index');
    }
    public function Search(Request $request)
    {

        return Search::fulltext(Language::class, $request);
    }
}
