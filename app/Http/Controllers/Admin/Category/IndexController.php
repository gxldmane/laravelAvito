<?php

namespace App\Http\Controllers\Admin\Category;


use App\Models\Category;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::paginate(10);
        return view('admin.categories.index', compact('categories'));
    }
}
