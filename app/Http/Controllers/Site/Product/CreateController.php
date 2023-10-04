<?php

namespace App\Http\Controllers\Site\Product;


use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $ads = Ad::all();
        $categories = Category::all();
        $cities = City::all();
        return view('site.ad.create', compact('ads', 'categories', 'cities',));
    }
}
