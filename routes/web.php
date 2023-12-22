<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BackEnd\HomeController as BackEndHomeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\GoogleController;
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

Route::get('/home', function () {
    return view('login');
});



Route::get('/',[HomeController::class,'index']);

Route::get('/register',[AuthController::class,'index'])->middleware('guest');
Route::post('/register',[AuthController::class,'store']);

Route::get('/login',[AuthController::class,'login'])->middleware('guest');
Route::post('/login',[AuthController::class,'validate_login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/shre',function(){
     return "success";
});
Route::get('/shrey',function(){
     return "success";
});

// Route::get('/clear-cache',function(){
//     $run = Artisan::call('config:clear');
//     $run = Artisan::call('cache:clear');
//     $run = Artisan::call('config:cache');
//     $run = Artisan::call('optimize:cache');
//     return "Finished";
// });


Route::get('/hello',[AuthController::class,'index2'])->middleware('guest')->name('hello');

Route::get('/admin',[BackEndHomeController::class,'index'])->middleware(['auth','Admin_middleware']);


Route::patch('',[BackEndHomeController::class,'']);

// Route::get('/login', function () {
//     return redirect(route('filament.admin.auth.login'));
// })->name('login');   

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('callback/google', [GoogleController::class, 'handleCallback']);







