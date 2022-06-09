<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(CartController $request){
        $cart = new Cart($request->all());
        $cart->save();
        return redirect('/home')->with('Success', 'Account created successfully');
    }

    public function delete($id){
        $cart = Cart::find($id);
        $cart->delete();
        return back();
    }
}
