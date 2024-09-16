<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\FontendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//Clear Cache facade value:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});


Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('social_media',[ApiController::class,'social_media'])->name('soial_media.api');
Route::get('service',[ApiController::class,'service'])->name('service.api');
Route::get('blog',[ApiController::class,'blog'])->name('blog.api');
Route::get('blog_detail/{id}',[ApiController::class,'blog_detail'])->name('blog_detail.api');
Route::get('resume',[ApiController::class,'first_resume'])->name('resume.api');
Route::get('projects',[ApiController::class,'projeccts'])->name('projeccts.api');
Route::get('project_category',[ApiController::class,'project_category'])->name('project_category.api');
Route::get('project/detail/{id}',[ApiController::class,'project_detail'])->name('project_detail.api');

Route::get('awards',[ApiController::class,'awards'])->name('awards.api');
Route::get('skills',[ApiController::class,'skills'])->name('skills.api');
Route::get('work_exp',[ApiController::class,'work_exp'])->name('work_exp.api');
Route::get('language',[ApiController::class,'language'])->name('language.api');
Route::get('education',[ApiController::class,'education'])->name('education.api');