<?php

use App\Http\Controllers\FontendController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use Monolog\Handler\RotatingFileHandler;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('User.dashboard');
    })->name('dashboard');
});

Route::get('user/logout',[UserController::class,'logout'])->name('userlogout');
//this routing is display the main dashboard
Route::get('/maindashboard',[UserController::class,'maindashboard'])->name('portifolio');
Route::get('/portifolio',[UserController::class,'User'])->name('portfolioDashboard');
// this routing for display user profile 
Route::get('/userprofile',[UserController::class,'userprofile'])->name('userProfile');

// this routing is for add user 
Route::get('user/add',[UserController::class,'addUser'])->name('addUser');
//this routing is for display all users
Route::get('userr/allusers',[UserController::class,'allUsers'])->name('allUsers');

// User Crud Operation

Route::post('user/store',[UserController::class,'store'])->name('storeuser');
Route::get('user/{id}/edit',[UserController::class,'edit'])->name('edituser');
Route::get('user/{id}/editprofile',[UserController::class,'editprofile'])->name('editprofile');


Route::put('user/{id}',[UserController::class,'update'])->name('Userupdate');
Route::put('users/{id}',[UserController::class,'updateprofile'])->name('updateprofile');

Route::get('user/{id}',[UserController::class,'destory'])->name('deleteUser');

Route::get('active/{id}',[UserController::class,'activeuser'])->name('activeuser');
Route::get('inactive/{id}',[UserController::class,'inactiveuser'])->name('inactiveuser');


//routing for fontend webpages

Route::get('portfolio',[FontendController::class,'index'])->name('fondend_portfolio');