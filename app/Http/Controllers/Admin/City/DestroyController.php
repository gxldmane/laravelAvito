<?php

namespace App\Http\Controllers\Admin\City;

use App\Models\Category;
use App\Models\City;

class DestroyController extends BaseController
{
    public function __invoke(City $city)
    {
        $city->delete();

        return redirect(route('cities.index'));

    }
}
