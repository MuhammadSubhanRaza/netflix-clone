<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieList;

class MovieListController extends Controller
{
    

    public function AddToList(Request $request,$id)
    {
        $record = auth()->user()->movieList()->where("movie_id","=",$id)->first();
        if($record==="null")
        {

        }
        else
        {
            auth()->user()->movieList()->create([
            'movie_id'=>$id
            ]);
        }

        
        return redirect($request->session()->get('movie_watch_url'));
    }

    public function Index()
    {
        foreach(auth()->user()->movieList() as $value){
            echo($value);
        }
    }

}
