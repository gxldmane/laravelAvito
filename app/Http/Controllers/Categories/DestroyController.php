<?php

namespace App\Http\Controllers\Categories;

use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class DestroyController extends BaseController
{
    public function __invoke(Category $category)
    {
        $category->delete();

        return redirect(route('categories.index'));

    }
}
