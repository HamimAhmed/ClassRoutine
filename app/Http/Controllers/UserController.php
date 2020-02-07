<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller

{

    public function userProfile(){

        return view('admin.dashboard.profile');
    }




    public function profileUpdate(){

        return view('admin.dashboard.update');
    }

    public  function processUpdate( Request $request){

        $request ->validate([
            'name' => 'required',
            'password' => 'required | min:6',
            'image' => 'required|image|mimes:jpeg,bmp,png'
        ]);


            $file = $request->file('image');
        $file_name = uniqid('image_', true) . Str::random(10) . '.' . $file->getClientOriginalExtension();
//        dd($file_name);
        if ($file->isValid()) {
            $file->storeAs('images', $file_name);
        }

         $updateinformation = User::find(auth()->user()->id);
        $updateinformation->update([
            'name' => $request->input('name'),
            'password'=> bcrypt($request->input('password')) ,
            'image'=> $file_name,

        ]);


        session()->flash('type', 'success');
        session()->flash('message', 'Updated successfully');
        return redirect()->back();


    }


}
