<?php

namespace App\Http\Controllers\Site\Product;



use App\Http\Controllers\Admin\Ad\BaseController;
use App\Models\Ad;

class  ShowController extends BaseController
{
    public function __invoke(Ad $product)
    {
        $seller = $product->user;
        return view('site.ad.show', compact('product', 'seller'));
    }
}
