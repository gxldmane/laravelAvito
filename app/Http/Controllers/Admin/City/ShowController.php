<?php

namespace App\Http\Controllers\Admin\City;

use App\Models\Category;
use App\Models\City;

class ShowController extends BaseController
{
    public function __invoke(City $city)
    {
        return view('admin.cities.show', compact('city'));

    }
}
