<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Frontend

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/services',[HomeController::class, 'services'])->name('services');
Route::get('/our-team',[HomeController::class, 'our_team'])->name('our_team');
Route::get('/our-team-details',[HomeController::class, 'team_details'])->name('team_details');
Route::get('/error',[HomeController::class, 'error'])->name('error');
Route::get('/fabric-printing',[HomeController::class, 'fabric_printing'])->name('fabric_printing');
Route::get('/fabric-dyeing',[HomeController::class, 'fabric_dyeing'])->name('fabric_dyeing');
Route::get('/engineering',[HomeController::class, 'engineering'])->name('engineering');
Route::get('/manufacture',[HomeController::class, 'manufacture'])->name('manufacture');
Route::get('/stich-fabric',[HomeController::class, 'stich_fabric'])->name('stich_fabric');
Route::get('/design-fabric',[HomeController::class, 'design_fabric'])->name('design_fabric');
Route::get('/project-one',[HomeController::class, 'project_one'])->name('project_one');
Route::get('/project-two',[HomeController::class, 'project_two'])->name('project_two');
Route::get('/blog-classic',[HomeController::class, 'blog_classic'])->name('blog_classic');
Route::get('/blog-grid',[HomeController::class, 'blog_grid'])->name('blog_grid');
Route::get('/blog-single',[HomeController::class, 'blog_single'])->name('blog_single');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');




// Backend

Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/chart',[DashboardController::class,'chart'])->name('chart');
Route::get('/static-layout',[DashboardController::class,'static_layout'])->name('static_layout');
Route::get('/light-sidenav',[DashboardController::class,'light_sidenav'])->name('light_sidenav');
Route::get('/table',[DashboardController::class,'table'])->name('table');
Route::get('/authentication',[DashboardController::class,'authentication'])->name('authentication');