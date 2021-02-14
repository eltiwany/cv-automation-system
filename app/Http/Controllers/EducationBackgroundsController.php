<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationBackGround;
use Illuminate\Support\Facades\Validator;

class EducationBackgroundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education_backgrounds = EducationBackGround::where('user_id', auth()->user()->id)->paginate(10);
        return view('user-information.education-backgrounds.index', compact('education_backgrounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user-information.education-backgrounds.create');
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
            'type' => 'required',
            'TimeStarted' => 'required',
            'TimeEnded' => 'required'
        ])->validate();

        $y=new EducationBackGround;
        $y->name=$request->name;
        $y->type=$request->type;
        $y->TimeStarted=$request->TimeStarted;
        $y->TimeEnded=$request->TimeEnded;
        $y->user()->associate($request->user());
        $y->save();

        return redirect()->route('education-backgrounds.index')->with('success', 'Education Background Added.');
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
        $education_background = EducationBackground::find($id);
        if ($education_background->user_id === auth()->user()->id)
            $education_background = EducationBackground::find($id);
        else
            return "Unauthorized action blocked.";
        return view('user-information.education-backgrounds.edit', compact('education_background'));
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
            'type' => 'required',
            'TimeStarted' => 'required',
            'TimeEnded' => 'required'
        ])->validate();

        $y=EducationBackGround::find($id);
        $y->name=$request->name;
        $y->type=$request->type;
        $y->TimeStarted=$request->TimeStarted;
        $y->TimeEnded=$request->TimeEnded;
        $y->save();

        return redirect()->route('education-backgrounds.index')->with('success', 'Education Background Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education_backgrounds = EducationBackground::find($id);
        if ($education_backgrounds->user_id === auth()->user()->id)
            EducationBackground::destroy($id);
        else
            return "Unauthorized action blocked.";
        return redirect()->route('education-backgrounds.index')->with('success', 'Education Background deleted.');
    }
}
