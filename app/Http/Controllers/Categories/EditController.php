<?php

namespace App\Http\Controllers\Categories;

use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class EditController extends BaseController
{
    public function __invoke(Category $category)
    {
        return view('admin.categories.edit', compact('category'));

    }
}
