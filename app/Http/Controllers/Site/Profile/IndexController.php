<?php

namespace App\Http\Controllers\Site\Profile;



use App\Http\Controllers\Admin\Ad\BaseController;
use App\Models\Ad;
use App\Models\Category;
use App\Models\City;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $user = auth()->user();
        $ads = $user->ads; // Получите объявления пользователя

        return view('site.profile.index', compact('user', 'ads'));
    }
}
