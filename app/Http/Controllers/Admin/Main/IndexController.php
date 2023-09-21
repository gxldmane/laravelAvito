<?php

namespace App\Http\Controllers\Admin\Main;

use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function __invoke()
    {
        return view('admin.main.index');
    }
}
