<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
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
        $category2 = Category::all();
        return view('auth.edit_product',compact('product','category2'));
    }

    public function update(ProductRequest $request,$id){
        $product = Product::find($id);
        $product->update($request->all());
        return back();
    }
}
