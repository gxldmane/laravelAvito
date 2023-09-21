<?php

namespace App\Http\Controllers\Admin\City;


use App\Models\Category;
use App\Models\City;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $cities = City::all();
        return view('admin.cities.create', compact('cities'));
    }
}
