<?php

namespace App\Http\Controllers\Admin\Ad;


use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use App\Models\User;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $ads = Ad::all();
        $categories = Category::all();
        $cities = City::all();
        $users = User::all();
        return view('admin.ads.create', compact('ads', 'categories', 'cities','users'));
    }
}
