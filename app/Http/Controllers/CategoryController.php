<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(CategoryRequest $request){
        $category = new Category($request->all());
        $category->save();
        return redirect('/admin')->with('Success', 'Account created successfully');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return back();
    }

    public function edit($id){
        $category = Category::find($id);
        return view('auth.edit_category',compact('category'));
    }

    public function update(CategoryRequest $request,$id){
        $category = Category::find($id);
        $category->update($request->all());
        return back();
    }
}
