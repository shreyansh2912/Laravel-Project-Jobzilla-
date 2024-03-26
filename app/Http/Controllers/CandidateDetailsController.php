<?php

namespace App\Http\Controllers;

use App\Models\EducationDetails;
use App\Models\PersonalDetails;
use App\Models\User;
use Filament\Forms\Components\KeyValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function create_personal(Request $request ,PersonalDetails $personalDetails )
    {
        $name = session('name');
        $email = session('email');
        if($request->name == $name && $request->email == $email){
            // @dd("hello");
            $request->validate([
                "name"=>"required",
                'email'=>"required",
                "phone"=>'required | min:10',
                'city'=>'required'
            ]);  
            // @dd("pass");
            $id = DB::table('users')->where('email',$request->email)->get('id');
            // @dd($id[0]);
            $id = $id[0]->{'id'};
            $request->session()->put('id',$id);
            $personalDetails = new PersonalDetails;
            $personalDetails->name = $request->name;
            $personalDetails->email = $request->email;
            $personalDetails->phone = $request->phone;
            $personalDetails->city = $request->city;
            $personalDetails->user_id = session('id') ;
            $personalDetails->save();
            return redirect('candidate-details/employment');
        }else{
            // @dd($request->name." " . $name." ".$request->email." ".$email );
        }
    }
    public function create_employment(Request $request , EducationDetails $educationDetails)
    {  
        $request->validate([
            "name"=>"required",
            'email'=>"required",
            "phone"=>'required | min:10',
            'city'=>'required'
        ]);  
        $EducationDetails = new EducationDetails;
        $EducationDetails->name = $request->name;
        $EducationDetails->email = $request->email;
        $EducationDetails->phone = $request->phone;
        $EducationDetails->city = $request->city;
        $EducationDetails->user_id = session('id') ;
        $EducationDetails->save();
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
