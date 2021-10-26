<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileImageController;
use App\Http\Controllers\MovieListController;

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

Route::get('/admin/home',function(){return view('admin.index');});
Route::get('/admin/login',function(){return view('admin.login');});
Route::get('/admin/users',function(){return view('admin.applicationusers');});
Route::get('/admin/movie/add',[MoviesController::class,'addNewMovie']);
Route::get('/admin/allmovies',function(){return view('admin.allmovies');});
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

Route::get('/movie/addtolist/{id}',[MovieListController::class,'AddToList']);
Route::get('/myList',[MovieListController::class,'Index']);

