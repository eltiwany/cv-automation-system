<?php

namespace App\Http\Controllers;

use App\EducationBackGround;
use App\Hobby;
use App\Language;
use App\PersonalInformation;
use App\ProjectAndResearch;
use App\Referee;
use App\Template;
use App\UserTemplate;
use App\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserTemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->get_all_user_data('user-templates.index');
    }

    public function get_all_user_data($return_route) {
        $user_id = auth()->user()->id;
        $user_exist = false;
        if (PersonalInformation::where('user_id', $user_id)->exists()) {
            $user_exist = true;
            $personal_information = PersonalInformation::where('user_id', $user_id)->first();
        }else
            $personal_information = [];
        
        $education_backgrounds = EducationBackGround::where('user_id', auth()->user()->id)->get();
        $work_experiences = WorkExperience::where('user_id', auth()->user()->id)->get();
        $project_researches = ProjectAndResearch::where('user_id', auth()->user()->id)->get();
        $hobbies = Hobby::where('user_id', auth()->user()->id)->get();
        $languages = Language::where('user_id', auth()->user()->id)->get();
        $referees = Referee::where('user_id', auth()->user()->id)->get();
        $user_templates = UserTemplate::all();

        return view($return_route, compact(
            'personal_information',
            'user_exist', 
            'education_backgrounds',
            'work_experiences',
            'project_researches',
            'hobbies',
            'languages',
            'referees',
            'user_templates'
        ));
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
        $user_template = UserTemplate::find($id);
        if ($user_template->user_id === auth()->user()->id)
            UserTemplate::destroy($id);
        else
            return "Unauthorized action blocked.";
        return redirect()->route('user-templates.index')->with('success', 'Template deleted.');
    }
}
