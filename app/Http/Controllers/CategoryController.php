<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(CategoryRequest $request){
        $person = new Category($request->all());
        $person->save();
        return redirect('/admin')->with('Success', 'Account created successfully');
    }

    public function delete($id){
        $person = Category::find($id);
        $person->delete();
        return back();
    }

    public function edit($id){
        $person = Category::find($id);
        return view('edit',compact('person'));
    }

    public function update(Request $request,$id){
        $person = Category::find($id);
        $person->update($request->all());
        
        return back();
    }
}
