<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Priceplan;
use App\Models\User;
use Auth;

class PricePlanController extends Controller
{

    public function index()
    {
    

    }

     public function create()
    {
        
         return view('priceplan.create');

    }

    
    public function store(Request $req)
    {
    
        //dd($request);
        $id=Auth::id();
//        dd($id);

        $priceplan = new priceplan;
        $priceplan->FirstName = $req->firstname;
        $priceplan->LastName = $req->lastname;
        $priceplan->CardNumber = $req->cardnumber;
        $priceplan->ExpirationDate = $req->expiration;
        $priceplan->SecurityCode = $req->security;
        $priceplan->PricePlan = $req->plan;
        $priceplan->save();



       
       //Update Price Plan Work

        $data=User::find($id);
        $data->PriceplanId=$req->plan;
        $data->save();

        return redirect('/movies');
        
        


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
}
