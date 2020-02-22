<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.shop.index');
    }

    public function show(Product $product)
    {
        return view('pages.shop.show', compact('product'));
    }
}
