<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Requests\City\UpdateRequest;
use App\Models\Category;
use App\Models\City;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, City $city)
    {
        $data = $request->validated();
        $this->service->update($city, $data);

        return redirect(route('cities.show', $city->id));

    }
}
