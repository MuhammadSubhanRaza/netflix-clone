<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovieList;
use App\Models\Genre;
use Auth;

class MoviesListController extends Controller
{
    
    public function showlist(){


        $id=Auth::id();

        $allGenres = Genre::all();

        $movielist=MovieList::where('user_id','=',$id)->get();
        if($movielist==null){
            $msg="No Movie Added In Your List";
        }
        return view('movieslist.index',compact('movielist','allGenres'));
    }

    public function AddtoList(Request $req){




        $movielist = new MovieList;
        $movielist->user_id=$req->userid;
        $movielist->name=$req->moviename;
        $movielist->category=$req->category;
        $movielist->description=$req->description;
        $movielist->coverImage=$req->coverimage;
        $movielist->trailer=$req->trailer;
        $movielist->movie=$req->movie;
        $movielist->movie_id=$req->movieid;
        $movielist->save();

        return redirect('movies');


        

        
    }

    public function destroy($id){

        $list=MovieList::find($id);

        $list->delete();
  
        return redirect('/mymovieList');
    }

   
}
