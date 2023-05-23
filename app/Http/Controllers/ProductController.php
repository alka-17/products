<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Method to fetch data from database and send to view
     **/
    public function index()
    {
        $lists = Product::with('categories')->get();

        return view('products.index', compact('lists'));
    }

    /**
     * Method to fetch data from category table database  and send to view
     **/
    public function detail(Request $request, $id)
    {
        $product = Product::with('categories:name')->withCount('cart')->find($id);

        return view('products.detail', compact('product'));
    }
}
