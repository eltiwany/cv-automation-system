<?php

namespace App\Http\Controllers;

use App\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkExperiencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work_experiences = WorkExperience::where('user_id', auth()->user()->id)->paginate(10);
        return view('user-information.work-experiences.index', compact('work_experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user-information.work-experiences.create');
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
            'time_started' => 'required',
            'time_ended' => 'required',
            'description' => 'required|email',
        ])->validate();
        
        $work_experience = new WorkExperience;
        $work_experience->name = $request->get('name');
        $work_experience->Time_Started = $request->get('time_started');
        $work_experience->Time_Ended = $request->get('time_ended');
        $work_experience->Description = $request->get('description');
        $work_experience->user_id = auth()->user()->id;
        $work_experience->save();

        return redirect()->route('work_experiences.index')->with('success', 'Woek experience has been added!');
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
        $work_experience = WorkExperience::find($id);
        if ($work_experience->user_id === auth()->user()->id)
            return view('user-information.work-experiences.edit', compact('work_experience'));
        else
            return "Unauthorized action blocked.";
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
            'time_started' => 'required',
            'time_ended' => 'required',
            'description' => 'required|email',
        ])->validate();
        
        $work_experience = WorkExperience::find($id);
        if ($work_experience->user_id === auth()->user()->id) {
            $work_experience->name = $request->get('name');
            $work_experience->Time_Started = $request->get('time_started');
            $work_experience->Time_Ended = $request->get('time_ended');
            $work_experience->Description = $request->get('description');
            $work_experience->user_id = auth()->user()->id;
            $work_experience->save();
        }else
            return "Unauthorized action blocked.";
        return redirect()->route('work-experiences.index')->with('success', 'Work Experience has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work_experience = WorkExperience::find($id);
        if ($work_experience->user_id === auth()->user()->id)
            WorkExperience::destroy($id);
        else
            return "Unauthorized action blocked.";
        return redirect()->route('work-experiences.index')->with('success', 'Work experience deleted.');
    }
}
