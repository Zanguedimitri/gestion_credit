<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AllUserController extends Controller
{
    //
    public function index(){

        $users = User::all();
        return view('admin.allusers.view', compact('users'));
    }

    public function deleteUser(string $id){

        $delete = User::find($id);
        $delete->delete();
        toastr()->success('User has been delete successfully!');
        return redirect()->route('admin.all.user');
    }
    public function detailUser(string $id){
        $user = User::find($id);
        return view('admin.detailusers.view',compact('user'));
    }
    public function toggleRole(Request $request, string $id){
        $user = User::find($id);

        $user->role = $request->has('role') ? "admin" : "user" ;
        $user->save();
        toastr()->success('User has been change the role successfully!');
        return redirect()->back();
    }
    public function toggleStatus(Request $request, string $id){
        $user = User::find($id);

        $user->statuts = $request->has('status') ? "active" : "inactive" ;
        $user->save();
        toastr()->success('Status has been change the role successfully!');
        return redirect()->back();
    }

}
