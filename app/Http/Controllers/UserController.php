<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        $person = new User($request->all());
        $person->save();
        return back();
    }

    public function delete($id){
        $person = User::find($id);
        $person->delete();

        return back();
    }

    public function edit($id){
        $person = User::find($id);
        return view('edit',compact('person'));
    }

    public function update(UserRequest $request,$id){
        $person = User::find($id);
        $person->update($request->all());
        
        return back();
    }
}
