<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function LoginForm(){
        return view('admin.dashboard.login');
    }

    public function LoginProcess(Request $request){

//        $request ->validate([
//            'password' => 'required',
//            'email' => 'required ',
//            'mobile_no' =>'required',
//
//        ]);

        $login = $request->except('_token');

        if (auth()->attempt($login))
        {

           return redirect()->route('index');
        }

        session()->flash('type', 'danger');
        session()->flash('message', 'invalid credential');
        return redirect()->back();


    }

    public function logout(){
        auth()->logout();
        session()->flash('type', 'warning');
        session()->flash('message','you have been logged out');
        return redirect()->route('login');

    }

    public function RegistrationForm(){
        return view('admin.dashboard.register');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function RegistrationProcess(Request $request){

//        $request ->validate([
//            'name' => 'required',
//            'email' => 'required | email | unique:users',
//            'mobile_no' =>'required',
//            'password' => 'required | min:6',
//            'image' => 'required|image|mimes:jpeg,bmp,png'
//        ]);


        $file = $request->file('image');
        $file_name = uniqid('image_', true) . Str::random(10) . '.' . $file->getClientOriginalExtension();
//        dd($file_name);
        if ($file->isValid()) {
            $file->storeAs('images', $file_name);
        }


        User::create([
            'name' => $request->input('name'),
            'email'=> $request->input('email'),
            'password'=> bcrypt($request->input('password')) ,
            'mobile_no'=> $request->input('mobile_no'),
            'image'=> $file_name,

        ]);


        session()->flash('type', 'success');
        session()->flash('message', 'registered successfully');
        return redirect()->back();


    }
}
