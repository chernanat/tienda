<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request){
        $product = new Product($request->all());
        $product->save();
        return redirect('/admin')->with('Success', 'Account created successfully');
    }

    public function delete($id){
        $person = Product::find($id);
        $person->delete();
        return back();
    }

    public function edit($id){
        $person = Product::find($id);
        return view('edit',compact('person'));
    }

    public function update(Request $request,$id){
        $person = Product::find($id);
        $person->update($request->all());
        
        return back();
    }
}
