<?php

namespace App\Http\View\Composers;

use App\Models\Product;
use Illuminate\View\View;

class ProductComposer
{
    public function compose(View $view)
    {
        $view->with('products', Product::all())->with('paginateProducts', Product::paginate(12));
    }

}


