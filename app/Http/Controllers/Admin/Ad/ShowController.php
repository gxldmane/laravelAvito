<?php

namespace App\Http\Controllers\Admin\Ad;



use App\Models\Ad;

class ShowController extends BaseController
{
    public function __invoke(Ad $ad)
    {
        return view('admin.ads.show', compact('ad'));

    }
}
