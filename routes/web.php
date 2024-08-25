<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CandidateDetailsController;
use App\Http\Controllers\CandidateProfileController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Fav_resumeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ResumeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;

// use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',[HomeController::class,'index']);

Route::get('/',[HomeController::class,'index']);

Route::get('/register',[AuthController::class,'index'])->middleware('guest');
Route::post('/register',[AuthController::class,'store']);

Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'validate_login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/company-register',[CompanyController::class,'index']);
Route::get('/company-login',[CompanyController::class,'login']);

Route::get('authorized/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleController::class, 'handleCallback']);

Route::prefix('candidate')->middleware('isCandidate')->group(function(){

    Route::get('dashboard',[CandidateProfileController::class,'index']);
    Route::get('profile',[CandidateProfileController::class,'profile']);
    Route::resource('resume',ResumeController::class);
});

Route::prefix('/candidate-details')->middleware('guest')->group(function(){

    Route::get('/personal',[CandidateDetailsController::class,'index'])->name('personal');
    Route::post('/personal',[CandidateDetailsController::class,'create_personal']);
    
    Route::get('/employment',[CandidateDetailsController::class,'employment'])->name('employment');
    Route::post('/employment',[CandidateDetailsController::class,'create_employment']);
    
    Route::get('/education',[CandidateDetailsController::class,'eduction'])->name('education');
    Route::post('/education',[CandidateDetailsController::class,'create_education']);
});

Route::prefix('employee')->middleware('isComapany')->group(function(){

    Route::get('/dashboard',[EmployeeController::class,'index']);
    Route::get('/company_profile',[EmployeeController::class,'profile']);
    Route::get('/Add-jobs',[JobsController::class,'index']);
    Route::get('/candidate-list',[CandidateController::class,'profile']);
    Route::get('/change_password',[EmployeeController::class,'profile']);
    Route::get('/fav_resumes',[Fav_resumeController::class,'index']);
    Route::get('/job-list',[EmployeeController::class,'profile']);
    Route::get('/messages',[ChatController::class,'index']);
    Route::get('/my_profile',[EmployeeController::class,'profile']);
    Route::get('/resume_alert',[Fav_resumeController::class,'resume_alert']);

});

route::get('/job',function(){
    dispatch(function(){
        return redirect('/');
    })->delay(now()->addSecond(20));
});


//  Artisan::call('config:clear');
//  Artisan::call('cache:clear');
//  Artisan::call('config:cache');
//  Artisan::call('optimize:cache');

