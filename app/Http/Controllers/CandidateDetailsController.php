<?php

namespace App\Http\Controllers;

use App\Models\EducationDetails;
use App\Models\EmploymentDetails;
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
    public function create_employment(Request $request , EmploymentDetails $employmentDetails)
    {  

        $request->validate([
            'current_job'=> 'required',
            'current_company' => 'required',
            'salary'=> 'required',
            'experiance'=>'required',
            'current_location'=> 'required',
            'skills'=> 'required',
            'industry'=> 'required',
            'role'=> 'required',
        ]);  
        $employmentDetails = new EmploymentDetails;
        $employmentDetails->current_job = $request->current_job;
        $employmentDetails->current_company = $request->current_company;
        $employmentDetails->salary = $request->salary;
        $employmentDetails->current_location = $request->current_location;
        $employmentDetails->skills = $request->skills;
        $employmentDetails->experiance = $request->experiance;
        $employmentDetails->industry = $request->industry;
        $employmentDetails->role = $request->role;
        $employmentDetails->user_id = session('id') ;
        $employmentDetails->save();
        return redirect('candidate-details/education');
    }
    public function create_education(Request $request,EducationDetails $educationDetails)
    {
        $request->validate([
            'highest_qualification'=>"required",
            'course'=>'required',
            'specialization'=>'required',
            'university'=>'required',
            'education'=>'required'
        ]);
        $educationDetails = new EducationDetails;
        $educationDetails->highest_qualification = $request->highest_qualification;
        $educationDetails->course = $request->course;
        $educationDetails->specialization = $request->specialization;
        $educationDetails->university = $request->university;
        $educationDetails->education = $request->education;
        $educationDetails->save();
        return redirect('/login');
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
