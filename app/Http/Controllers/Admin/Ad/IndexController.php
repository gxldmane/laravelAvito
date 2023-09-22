<?php

namespace App\Http\Controllers\Admin\Ad;



use App\Models\Ad;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $ads = Ad::paginate(10);
        return view('admin.ads.index', compact('ads'));
    }
}
