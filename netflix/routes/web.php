<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileImageController;
use App\Http\Controllers\MoviesListController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUser;
use App\Http\Controllers\PricePlanController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signup',function(){return view('auth.signup');});
Route::get('/plan',[ProfileImageController::class,'Plan']);
Route::get('/offers',[ProfileImageController::class,'Offers']);
Route::get('/movies',[MoviesController::class,'showAllMovies']);


// ------------ ADMIN SIDE ------------

Route::get('/admin/home',[AdminController::class,'index']);
Route::get('/admin/login',[AdminController::class,'AdminLogin']);
Route::post('/Post/AdminLogin',[AdminController::class,'PostLogin']);
Route::get('/Admin/logout',[AdminController::class,'Logout']);
Route::get('/admin/users',[AdminUser::class,'AdminUser']);
Route::get('/admin/movie/add',[MoviesController::class,'addNewMovie']);
Route::get('/admin/allmovies',[MoviesController::class,'adminMovie']);
Route::get('/admin/genre',[GenreController::class,'index'])->name('/admin/genre');
Route::post('/admin/genre/add',[GenreController::class,'add']);

Route::post('/admin/movie/create',[MoviesController::class,'addMovie']);
Route::get('/movie/watch/{id}',[MoviesController::class,'watch']);
Route::get('/genre/delete/{id}',[GenreController::class,'delete']);

Route::get('movies/genre/{id}',[MoviesController::class,'genreBased']);
Route::get('/admin/movie/list',[MoviesController::class,'moviesList']);

Route::get('/admin/movie/delete/{id}',[MoviesController::class,'movieDelete']);

// ------------ REGISTER -------------

Route::post('/registerUser',[RegisterController::class,'registerUser']);

//-------------- PROFILE IMAGE ---------

Route::get('/profileimage',[ProfileImageController::class,'ProfileImage']);
Route::post('/saveprofile',[ProfileImageController::class,'SaveProfile']);

//-------------- Movie List----------------

// Route::get('/myList',[MovieListController::class,'Index']);



// PricePlan Controller


Route::get('/plancreate',[PricePlanController::class,'create']);
Route::post('/priceplan/post',[PricePlanController::class,'store']);



//Movielist Controller
Route::post('/AddMovielist',[MoviesListController::class,'AddtoList']);
Route::get('/mymovieList',[MoviesListController::class,'showlist']);
Route::get('/listdelete/{id}', [MoviesListController::class,'destroy']);


