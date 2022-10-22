<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUser extends Controller
{
    
    public function AdminUser(){
        
        $users = User::all();
            return view('admin.applicationusers',compact('users'));


    }
}
