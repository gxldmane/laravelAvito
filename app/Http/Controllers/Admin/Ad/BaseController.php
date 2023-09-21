<?php

namespace App\Http\Controllers\Admin\Ad;

use App\Http\Controllers\Controller;
use App\Services\Ad\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
