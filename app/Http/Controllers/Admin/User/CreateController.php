<?php

namespace App\Http\Controllers\Admin\User;


use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use App\Models\User;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $users = User::all();
        $categories = Category::all();
        $cities = City::all();
        $ads = Ad::all();
        return view('admin.users.create', compact('users', 'categories', 'cities','ads'));
    }
}
