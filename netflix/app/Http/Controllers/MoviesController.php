<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Genre;

use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public function showAllMovies()
    {
        // $allMovies = Movie::all();
        $allMovies = Movie::orderby('created_at','DESC')->get();
        $lastRecord = $allMovies[0];
        $allGenres = Genre::all();
        return view('home.index',compact('allMovies','lastRecord','allGenres'));
    }

    public function watch(Request $request,$id)
    {
        // Session::put('movie_watch_url',request()->fullUrl());
        $request->session()->put('movie_watch_url',request()->fullUrl());
        $movie = Movie::findOrFail($id);
        return view('Movies.watch',compact('movie'));
    }

    public function genreBased($id)
    {
        $allMovies = Movie::where('category',$id)->get();
        // dd($allMovies);
        $allGenres = Genre::all();
        // $genre = $id;
        return view('Movies.GenreBased',compact('allGenres','allMovies','id'));
    }


    public function addMovie(Request $req)
    {
        $data = request()->validate([
            'movieName'=>'required',
            'category'=>'required',
            'description'=>'required',
            'coverImage'=>'required',
            'trailer'=>'required',
            'movie'=>'required'
        ]);

        $imagePath = request('coverImage')->store('uploads','public');
        $trailerPath = request('trailer')->store('uploads','public');
        $moviePath = request('movie')->store('uploads','public');

        $movie = new Movie;
        $movie->name = $data['movieName'];
        $movie->category = $data['category'];
        $movie->description = $data['description'];
        $movie->coverImage =$imagePath ;
        $movie->trailer =$trailerPath ;
        $movie->movie =$moviePath ;

        $result = $movie->save();

        if($result)
        {
            return redirect('/admin/movie/add');
        }

    }


    public function addNewMovie()
    {
        $genres = Genre::all();
        return view('admin.movie',compact('genres'));
    }

    public function moviesList()
    {
        $allMovies = Movie::all();
        return view('admin.allmovies',compact('allMovies'));
    }

    public function movieDelete($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/admin/movie/list');
    }
}

