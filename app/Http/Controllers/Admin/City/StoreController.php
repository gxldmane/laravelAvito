<?php

namespace App\Http\Controllers\Admin\City;


use App\Http\Requests\City\StoreRequest;
class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect(route('cities.index'));

    }
}
