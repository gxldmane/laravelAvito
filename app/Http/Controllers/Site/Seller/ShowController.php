<?php

namespace App\Http\Controllers\Site\Seller;



use App\Http\Controllers\Admin\Ad\BaseController;
use App\Models\Ad;
use App\Models\User;

class  ShowController extends BaseController
{
    public function __invoke(User $seller)
    {
        $ads = $seller->ads;
        return view('site.seller.show', compact('seller', 'ads'));
    }
}
