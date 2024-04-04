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
    }

}
