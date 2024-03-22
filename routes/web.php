<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackEnd\HomeController as BackEndHomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Fav_resumeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\JobsController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Auth\GoogleSocialiteController;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\Frontend\HomeController;
// use Illuminate\Routing\Route;
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


Route::get('/',[HomeController::class,'index']);

Route::get('/register',[AuthController::class,'index'])->middleware('guest');
Route::post('/register',[AuthController::class,'store']);

Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'validate_login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/company-register',[CompanyController::class,'index']);
Route::get('/company-login',[CompanyController::class,'login']);

//  Artisan::call('config:clear');
//  Artisan::call('cache:clear');
//  Artisan::call('config:cache');
//  Artisan::call('optimize:cache');


Route::get('/hello',[AuthController::class,'index2'])->middleware('guest')->name('hello');

// Route::get('/admin',[BackEndHomeController::class,'index'])->middleware(['auth','Admin_middleware']);


// Route::patch('',[BackEndHomeController::class,'']);

// Route::get('/login', function () {
//     return redirect(route('filament.admin.auth.login'));
// })->name('login');   

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('callback/google', [GoogleController::class, 'handleCallback']);

Route::prefix('employee')->group(function(){

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



