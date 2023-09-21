<?php

namespace App\Http\Controllers\Categories;


use App\Models\Category;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }
}
