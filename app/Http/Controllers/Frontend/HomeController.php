<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PersonalDetails;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // public function test(){
    //     $user = PersonalDetails::with('user')->first();
    //     dd( $user->toArray());
    //     // return "hello";
    // }
    
}
