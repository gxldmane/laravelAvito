<?php

namespace App\Http\Controllers\Admin\City;

use App\Models\Category;
use App\Models\City;

class EditController extends BaseController
{
    public function __invoke(City $city)
    {
        return view('admin.cities.edit', compact('city'));

    }
}
