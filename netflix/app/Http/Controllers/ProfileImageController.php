<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileImageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function ProfileImage()
    {
        return view('ProfileImage.imageUpload');
    }

    public function SaveProfile()
    {
        $imagePath = request('image')->store('uploads','public');
        // dd($imagePath);
        auth()->user()->prfileImage()->create([
            'image'=>$imagePath
        ]);
        return view('auth.plan');
    }

    public function Offers()
    {
        return view('auth.offers');
    }

    
    public function Plan()
    {
        return view('auth.plan');
    }

}
