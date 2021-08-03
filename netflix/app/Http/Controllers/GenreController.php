<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index(){
        $all_genres = Genre::all();
        return view('admin.genre',compact('all_genres'));
    }


    public function add(Request $req){
        $valid =  $req->validate([
            'name' => ['required', 'string', 'max:255','unique:genres'],
            'description' => ['required', 'string'],
        ]);
        
        $genre = new Genre;
        $genre->name = $req->name;
        $genre->description = $req->description;

        $result = $genre->save();
        if($result)
        {
            $req->session()->flash('success','true');
            return redirect()->route('/admin/genre');
        }
    }

    
    public function delete($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return redirect('/admin/genre');
    }

}
