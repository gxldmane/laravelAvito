<?php

namespace App\Http\Controllers\Admin\City;


use App\Models\Category;
use App\Models\City;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $cities = City::paginate(10);
        return view('admin.cities.index', compact('cities'));
    }
}
