<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart()
    {
        $lists = Cart::with('product')->get();

        return view('cart.index', compact('lists'));
    }

    public function addToCart(Request $request)
    {
        if (!blank($request->type)) {
            $data = [
                'quantity' => $request->type == 'plus' ? DB::raw('quantity + 1') : DB::raw('quantity - 1') ,
            ];
        }
        else{
            $data = [
                'quantity' => 1,
            ];
        }

        Cart::updateOrCreate(
            [
                'product_id' => $request->product_id
            ],
            $data
        );

        if (!blank($request->type)){
            $lists = Cart::with('product')->where('quantity', '>', 0)->get();
            
            return view('cart.ajax', compact('lists'))->render();
        }
        else{
            return true;
        }
    }
}
