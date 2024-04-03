<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    public function profil(){
        return view('admin.profile.view');
    }
    public function update(Request $request){

        $validated = $request->validate([
            "name"=>"required|max:255",
            "phone"=>"reuired|max:255",
            "file"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ]);

        $image = $request->file('file');
        $name = time().'.'.$image->getClientOriginalExtension();
        $image->storeAs('public/images', $name);

        User::create($validated);
        return redirect()->back();
    }
}
