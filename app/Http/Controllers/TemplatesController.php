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

class TemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->get_all_data("templates.index");
    }

    public function get_all_data($return_route) {
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
        $templates = Template::all();

        return view($return_route, compact(
            'personal_information',
            'user_exist', 
            'education_backgrounds',
            'work_experiences',
            'project_researches',
            'hobbies',
            'languages',
            'referees',
            'templates'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->get_all_data("templates.create");
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
            'heading_class' => 'required',
            'body_class' => 'required'
        ])->validate();

        if (!(UserTemplate::where([
                'name' => $request->get('name'),
                'selected_heading_class' => $request->get('heading_class'),
                'selected_body_class' => $request->get('body_class')
            ])->exists())) {
                UserTemplate::where([
                    'user_id' => auth()->user()->id
                ])->update(['is_selected' => false]);

                $user_template = new UserTemplate;
                $user_template->name = $request->get('name');
                $user_template->is_selected = true;
                $user_template->selected_heading_class = $request->get('heading_class');
                $user_template->selected_body_class = $request->get('body_class');
                $user_template->user_id = auth()->user()->id;
                $user_template->save();
        }else {
            UserTemplate::where([
                'user_id' => auth()->user()->id
            ])->update(['is_selected' => false]);

            $$user_template = UserTemplate::where([
                'name' => $request->get('name'),
                'selected_heading_class' => $request->get('heading_class'),
                'selected_body_class' => $request->get('body_class')
            ])->first();
            $user_template->is_selected = true;
        }

        return redirect()->route('user-templates.index')->with('success', 'Template has been saved.');

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
