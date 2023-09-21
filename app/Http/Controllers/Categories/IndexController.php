<?php

namespace App\Http\Controllers\Categories;


use App\Models\Category;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
}
