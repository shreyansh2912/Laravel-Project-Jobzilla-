<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("candidate_details.information");
    }

    public function employment(){
        return view('candidate_details.employment');
    }

    public function eduction(){
        return view('candidate_details.education');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create_personal(Request $request)
    {
        // print_r($request);
        // @dd($request);
        $name = session('name');
        $email = session('email');
        if($request->name == $name && $request->email == $email){
            // @dd("hello");
            $request->validate([
                "name"=>"required|",
                'email'=>"required|",
                "phone"=>'required|regex:/(01)[0-9]{9}/'
            ]);
            return redirect('candidate-details/employment');
        }
    }
    public function create_employment(Request $request)
    {
        return redirect('candidate-details/education');
    }
    public function create_eduction(Request $request)
    {
        return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
