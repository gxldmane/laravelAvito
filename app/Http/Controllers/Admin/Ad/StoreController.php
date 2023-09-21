<?php

namespace App\Http\Controllers\Admin\Ad;


use App\Http\Requests\Ad\StoreRequest;
class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect(route('ads.index'));
    }
}
