<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(ProductRequest $request){
        $product = new Product($request->all());
        $product->save();
        return redirect('/admin')->with('Success', 'Account created successfully');
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return back();
    }

    public function edit($id){
        $product = Product::find($id);
        return request($product);
        // return view('auth.edit_product',compact('product'));
    }

    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->update($request->all());
        
        return back();
    }
}
