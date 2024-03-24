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
    public function create_personal()
    {
        return redirect('candidate-details/employment');
    }
    public function create_employment()
    {
        return redirect('candidate-details/education');
    }
    public function create_eduction()
    {
        return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        print_r($request);
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
