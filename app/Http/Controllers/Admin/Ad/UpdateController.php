<?php

namespace App\Http\Controllers\Admin\Ad;


use App\Http\Requests\Ad\UpdateRequest;
use App\Models\Ad;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Ad $ad)
    {
        $data = $request->validated();
        $this->service->update($ad, $data);

        return redirect(route('ads.show', $ad->id));

    }
}
