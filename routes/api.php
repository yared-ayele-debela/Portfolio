<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\FontendController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('social_media',[ApiController::class,'social_media'])->name('soial_media.api');
Route::get('service',[ApiController::class,'service'])->name('service.api');
Route::get('blog',[ApiController::class,'blog'])->name('blog.api');
Route::get('blog_detail/{id}',[ApiController::class,'blog_detail'])->name('blog_detail.api');
Route::get('resume',[ApiController::class,'first_resume'])->name('resume.api');
Route::get('projects',[ApiController::class,'projeccts'])->name('projeccts.api');
Route::get('awards',[ApiController::class,'awards'])->name('awards.api');
Route::get('skills',[ApiController::class,'skills'])->name('skills.api');
Route::get('work_exp',[ApiController::class,'work_exp'])->name('work_exp.api');
Route::get('language',[ApiController::class,'language'])->name('language.api');
Route::get('education',[ApiController::class,'education'])->name('education.api');