<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryComposer
{
    public function compose(View $view)
    {
        $view->with('categories', Category::paginate(10))
                ->with('categoryList', Category::pluck('name', 'id')->toArray());
    }
}


