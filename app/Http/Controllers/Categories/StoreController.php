<?php

namespace App\Http\Controllers\Categories;

use App\Http\Requests\Category\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);

        return redirect(route('categories.index'));

    }
}
