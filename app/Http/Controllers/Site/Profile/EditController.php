<?php

namespace App\Http\Controllers\Site\Profile;



use App\Http\Controllers\Admin\Ad\BaseController;
use App\Models\Ad;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditController extends BaseController
{
    public function __invoke()
    {
        $user = Auth::user();
        $ads = Ad::all();
        $categories = Category::all();
        $cities = City::all();
        return view('site.profile.edit', compact('user', 'ads', 'categories', 'cities'));
    }
}
