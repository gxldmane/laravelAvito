<?php

namespace App\Http\Controllers\Categories;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $this->service->update($category, $data);

        return redirect(route('categories.show', $category->id));

    }
}
