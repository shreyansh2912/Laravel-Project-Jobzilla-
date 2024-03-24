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

    public function login()
    {
        return view ('login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|unique:users,email',
            'name'=>'required',
            'username'=>'required|unique:users,username',
            'password'=>'required|max:8|min:6'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();             
        $request->session()->put("name",$request->name);
        $request->session()->put("email",$request->email);
        $response = response($request->name);
        $response->withCookie('name',$request->name,6000);
        $sessionName = session('name');
        $sessionEmail = session('email');
        // @dd($sessionName,$sessionEmail);
        return redirect('/candidate-details/personal');
    }

    public function validate_login(Request $request)
    {       
        $request->validate(['email'=>'required','password'=>'required']);
        $credential = $request->only('email','password','roll_as');

        if(Auth::attempt($credential))
        {
            $roll_as = User::select('roll_as');
            if (Auth::user()->roll_as == 1)
            {
                return redirect('admin');
            }
            else if(Auth::user()->roll_as == 0)
            {
                return redirect('/')->with('message','Login success');
            }
        }
        else{
            echo "<script>alert('Invalid Username or Password')</script>";
            return view('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}