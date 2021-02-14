<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use Illuminate\Support\Facades\Validator;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::where('user_id', auth()->user()->id)->paginate(10);
        return view('user-information.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user-information.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
           
        ])->validate();

        $y=new Language;
        $y->name=$request->name;
        $y->user()->associate($request->user());
        $y->save();

        return redirect()->route('languages.index')->with('success', 'languages Added.');
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
        $languages = Language::find($id);
        if ($languages->user_id === auth()->user()->id)
            $education_background = Language::find($id);
        else
            return "Unauthorized action blocked.";
        return view('user-information.languages.edit', compact('language'));
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
        Validator::make($request->all(), [
            'name' => 'required',
            
        ])->validate();

        $y=Language::find($id);
        $y->name=$request->name;
        
        $y->save();

        return redirect()->route('languages.index')->with('success', 'Languages Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $languages = Language::find($id);
        if ($languages->user_id === auth()->user()->id)
            Language::destroy($id);
        else
            return "Unauthorized action blocked.";
        return redirect()->route('languages.index')->with('success', 'Languages deleted.');
    }
}
