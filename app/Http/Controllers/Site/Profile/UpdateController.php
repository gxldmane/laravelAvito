<?php

namespace App\Http\Controllers\Site\Profile;


use App\Http\Controllers\Admin\User\BaseController;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update(Auth::user(), $data);

        return redirect(route('profile.index'));

    }
}
