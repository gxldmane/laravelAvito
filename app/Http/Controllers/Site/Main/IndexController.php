<?php

namespace App\Http\Controllers\Site\Main;



use App\Http\Controllers\Admin\Ad\BaseController;
use App\Http\Filters\AdFilter;
use App\Http\Requests\Ad\FilterRequest;
use App\Models\Ad;
use App\Models\Category;
use App\Models\City;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $cities = City::all();
        $categories = Category::all();
        $data = $request->validated();


        $filter = app()->make(AdFilter::class, ['queryParams' => array_filter($data)]);
        $ads = Ad::filter($filter)->paginate(12);
        return view('site.main.index', compact('ads', 'cities', 'categories'));
    }
}
