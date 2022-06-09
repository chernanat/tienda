<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(CartRequest $request){
        $cart = new Cart($request->all());
        $cart->save();
        return redirect('/home')->with('Success', 'Account created successfully');
    }

    public function delete($id){
        $cart = Cart::find($id);
        // return request($cart);
        $cart->delete();
        return back();
    }
}
