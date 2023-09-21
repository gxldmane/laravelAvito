<?php

namespace App\Http\Controllers\Admin\Ad;


use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(Ad $ad)
    {
        $users = User::all();
        $categories = Category::all();
        $cities = City::all();
        return view('admin.ads.edit', compact('ad', 'users', 'categories', 'cities'));

    }
}
