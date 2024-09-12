<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SocailmediaController;
use App\Http\Controllers\WorkExpController;
use App\Http\Resources\BlogController;
use App\Models\Project;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

});

Route::get('user/logout',[UserController::class,'logout'])->name('userlogout');
Route::get('/maindashboard',[UserController::class,'maindashboard'])->name('portifolio');
Route::get('/portifolio',[UserController::class,'User'])->name('portfolioDashboard');
Route::get('/userprofile',[UserController::class,'userprofile'])->name('userProfile');

Route::get('userr/allusers',[UserController::class,'allUsers'])->name('allUsers');
// Route::post('user/store',[UserController::class,'store'])->name('storeuser');
Route::get('user/{id}/edit',[UserController::class,'edit'])->name('edituser');
Route::get('user/{id}/editprofile',[UserController::class,'editprofile'])->name('editprofile');


Route::put('user/{id}',[UserController::class,'update'])->name('Userupdate');
Route::put('users/{id}',[UserController::class,'updateprofile'])->name('updateprofile');
Route::get('user/{id}',[UserController::class,'destory'])->name('deleteUser');
Route::get('active/{id}',[UserController::class,'activeuser'])->name('activeuser');
Route::get('inactive/{id}',[UserController::class,'inactiveuser'])->name('inactiveuser');

//routing for categories


Route::match(['get', 'post'], 'category',[CategoryController::class,'categories'])->name('category');
Route::match(['get', 'put'], 'category/categories/{id}',[CategoryController::class,'edit'])->name('categories');
Route::get('category/create',[CategoryController::class,'create'])->name('create_category');
Route::get('category/{id}',[CategoryController::class,'destory'])->name('deletecategory');
Route::get('category/active/{id}',[CategoryController::class,'activecategory'])->name('activecategory');
Route::get('category/inactive/{id}',[CategoryController::class,'inactivecategory'])->name('inactivecategory');

//routing for services
Route::match(['get', 'post'], 'service/all',[ServiceController::class,'services'])->name('allservice');
Route::match(['get', 'put'], 'service/services/{id}',[ServiceController::class,'edit'])->name('services');
Route::get('service/create',[ServiceController::class,'create'])->name('create_service');
Route::get('service/{id}',[ServiceController::class,'destory'])->name('deleteservice');
Route::get('service/active/{id}',[ServiceController::class,'activeservice'])->name('activeservice');
Route::get('service/inactive/{id}',[ServiceController::class,'inactiveservice'])->name('inactiveservice');


//routing for services
Route::match(['get', 'post'], 'skill/all',[SkillController::class,'skills'])->name('allskills');
Route::match(['get', 'put'], 'skill/skills/{id}',[SkillController::class,'edit'])->name('skill');
Route::get('skill/create',[SkillController::class,'create'])->name('create_skill');
Route::get('skill/{id}',[SkillController::class,'destory'])->name('deleteskill');
Route::get('skill/active/{id}',[SkillController::class,'activeskill'])->name('activeskill');
Route::get('skill/inactive/{id}',[SkillController::class,'inactiveskill'])->name('inactiveskill');

//routing for projects
Route::get('project/create',[ProjectController::class,'create'])->name('project_create');
Route::get('project/all',[ProjectController::class,'index'])->name('all_projects');
Route::post('project/save',[ProjectController::class,'store'])->name('save_project');
Route::get('project/edit/{id}',[ProjectController::class,'edit'])->name('edit_project');
Route::put('project/update',[ProjectController::class,'update'])->name('update_project');
Route::get('project/{id}', [ProjectController::class, 'destroy']);

//routing for fontend webpages
Route::get('portfolio',[FontendController::class,'portfolio'])->name('fondend_portfolio');
Route::get('resume',[FontendController::class,'resume'])->name('resume');
Route::get('blog',[FontendController::class,'blog'])->name('blog');
Route::get('contact',[FontendController::class,'contact'])->name('contact');
Route::get('service',[FontendController::class,'service'])->name('service');
Route::get('/',[FontendController::class,'index'])->name('myportfolio');

// Route::get('pdfview',array('as'=>'pdfview','uses'=>'ItemController@pdfview'));

Route::get('pdfview', [ItemController::class, 'pdfview'])->name('pdfview');

Route::resource('blogs', BlogsController::class);

Route::resource('education',EducationController::class);
Route::resource('award', AwardsController::class);
Route::resource('language', LanguageController::class);
Route::resource('resumes', ResumeController::class);
Route::resource('social_meda',SocailmediaController::class);
Route::resource('work_experience',WorkExpController::class);