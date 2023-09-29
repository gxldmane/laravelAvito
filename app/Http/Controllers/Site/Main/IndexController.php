<?php

namespace App\Http\Controllers\Site\Main;



use App\Http\Controllers\Admin\Ad\BaseController;
use App\Models\Ad;
use App\Models\Category;
use App\Models\City;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $cities = City::all();
        $categories = Category::all();
        $ads = Ad::paginate(12);
        return view('site.main.index', compact('ads', 'cities', 'categories'));
    }
}
