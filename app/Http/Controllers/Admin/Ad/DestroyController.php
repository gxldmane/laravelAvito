<?php

namespace App\Http\Controllers\Admin\Ad;


use App\Models\Ad;

class DestroyController extends BaseController
{
    public function __invoke(Ad $ad)
    {
        $ad->delete();

        return redirect(route('ads.index'));

    }
}
