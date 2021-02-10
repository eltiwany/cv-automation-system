<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobby;
use Illuminate\Database\Eloquent\Model;

class HobbiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$hobby = new Model();

        $hobby->name = request('firsthobby');
        $hobby->name = request('sechobby');

        $hobby->save(); 
        */

       // print_r($request->input());
        if (Hobby::where('user_id', auth()->user()->id)->exists())
            $hobby = Hobby::find(auth()->user()->id);
        else
            $hobby = new Hobby; 

        $hobby->name= $request->firsthobby;
       
        $hobby->user_id = auth()->user()->id;
        $hobby->save(); 
        
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
