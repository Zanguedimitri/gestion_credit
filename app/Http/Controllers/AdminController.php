<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    public function profil(){
        return view('admin.profile.view');
    }
    public function update(Request  $request){

        $validated = $request->validate([
            'name'=> 'required|max:255',
            'phone'=> 'required|max:255',
            'image' => 'required|mimes:jpeg,png,jpg,gif',
        ]);

        $user = Auth::user();

        if ($request->hasFile('image')) {

            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }
            $image = $request->image;
            $imageName = rand().'_'.$image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $path = '/images/'.$imageName;
            $user->image = $path;
        }

        // Stockage de l'image dans la base de données (à adapter en fonction de votre modèle)
        $user->image = $path;
        $user->name =$request->name;
        $user->phone =$request->phone;
        $user->save();
        // Display an error toast with no title

        toastr()->success('Profil has been saved successfully!');
        return redirect()->back();
    }

    public function storepassword(){
        return view('admin.password.view');
    }

    public function updatepassword(Request $request){
        $request->validate([
            'phone'=>'required|max:255',
            'password'=>'required|max:255',
        ]);

        if ($request->phone !== $request->password) {
            toastr()->error('Oops! Something went wrong!');
        }else{
            $user = Auth::user();
            $user->password = \bcrypt($request->phone);
            $user->update();
            toastr()->success('Profil has been update successfully!');
        }
        return redirect()->back();
    }
}
