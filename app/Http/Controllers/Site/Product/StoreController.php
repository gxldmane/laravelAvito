<?php

namespace App\Http\Controllers\Site\Product;


use App\Http\Requests\Ad\StoreRequest;
use Illuminate\Support\Facades\Auth;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data,Auth::user());

        return redirect(route('profile.index'));
    }
}
