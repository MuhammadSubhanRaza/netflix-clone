<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
    
        if(Session('aid')==null){
            return redirect('/admin/login');

        }
        else{
         
            return view('admin.index');

        }
    
            }

     
    public function AdminMovies(){

        return view('admin.movie');
    }
            
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function AdminLogin(){
        if(Session('aid')!=null){
            return redirect('/admin/home');

        }
        else{
     
            return view('admin.login'); 
        }

    }

    public function PostLogin(Request $req)
    {

        $admin=Admin::where('Email','=',$req->email)->first();
        // dd($admin);
        if($admin){
            if(Admin::where($req->password, $admin->Password)){
                Session(['aid'=>$admin->id]);
                Session(['aname'=>$admin->Name]);
                Session(['aemail'=>$admin->Email]);
                $req->session()->put('Id',$admin);
                return redirect('/admin/home');
            }
        }
        else {
            return back()->with('fail','this email is not recognized');
        }
    }
    public function Logout(Request $request){

        $request->session()->forget('aid');       
        $request->session()->forget('aname');
        return redirect('/admin/login');
        
    }

    
}
