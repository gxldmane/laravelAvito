<?php

namespace App\Http\Controllers\Admin\Ad;



use App\Http\Filters\AdFilter;
use App\Http\Requests\Ad\FilterRequest;
use App\Models\Ad;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(AdFilter::class, ['queryParams' => array_filter($data)]);
        $ads = Ad::filter($filter)->paginate(12);
        return view('admin.ads.index', compact('ads'));
    }
}
