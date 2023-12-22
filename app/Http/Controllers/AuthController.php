<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Termwind\Components\Dd;

class AuthController extends Controller
{
    public function index()
    {
        return view ('register');
    }
    public function index2()
    {
        return view ('welcome');
    }
    public function login()
    {
        return view ('login');
    }
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($_REQUEST);
        // echo "</pre>";
        // dd($request);
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        return redirect('/login');
    }

    public function validate_login(Request $request)
    {        
        $request->validate(['username'=>'required','email','password'=>'required']);

        $credential = $request->only('username','password','roll_as');
        // dd($credential);
        if(Auth::attempt($credential))
        {
            // dd($credential);
            $roll_as = User::select('roll_as');
            // $roll_as = User::all();
            // dd($roll_as);
            // echo"hello";
            if ( auth::user()-> roll_as == 1)
            {
                return redirect('admin');
            }
            else
            {
                return redirect('/')->with('message','Login success');
            }
            // dd("login success");
        }
        else
        {
            return redirect('/login')->with('message','Login Failed');
            // dd("login fail");
        }


    }

    public function logout()
    {
        
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}