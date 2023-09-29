<?php

namespace App\Http\Controllers\Site\Seller;



use App\Http\Controllers\Admin\Ad\BaseController;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class  SendMessageController extends BaseController
{
    public function __invoke(Request $request, $id)
    {
        $data = $request->validated();
        return view('site.seller.show', compact('seller', 'ads'));
    }
}
