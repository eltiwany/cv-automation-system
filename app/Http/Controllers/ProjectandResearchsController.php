<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectAndResearch;
use Illuminate\Support\Facades\Validator;

class ProjectandResearchsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pandr = ProjectAndResearch::where('user_id', auth()->user()->id)->paginate(10);
        return view('user-information.project-researches.index', compact('pandr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user-information.project-researches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*
        $pr= new ProjectAndResearch;
        $pr->name= $request->projectname;
        $pr->TimeStarted= $request->timestarted;
        $pr->TimeEnded= $request->timeended;
        $pr->user_id = auth()->user()->id;
        $pr->save(); 
        */

        
        $validator = Validator::make($request->all(), [
            'name' => 'required',]
            /*'second_name' => 'required',
            'phone_number' => 'required|min:12',
            'email' => 'required|email',
        ], [
            'phone_number.min' => 'Phone number must be exactly 12 charachers format 255777111222'
        ]
        */
    );
        $validator->validate();
        
        $pandr = new ProjectAndResearch;
        $pandr->name = $request->get('name');
        $pandr->TimeStarted = $request->get('time_started');
        $pandr->TimeEnded = $request->get('time_ended');
        //$pandr->Email = $request->get('email');
        $pandr->user_id = auth()->user()->id;
        $pandr->save();

        return redirect()->route('project-researches.index')->with('success', 'Project/Research has been added!');
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
        $pandr = ProjectAndResearch::find($id);
        if ($pandr->user_id === auth()->user()->id)
            return view('user-information.project-researches.edit', compact('pandr'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',]
            /*
            'second_name' => 'required',
            'phone_number' => 'required|min:12',
            'email' => 'required|email',
        ],
        
        [
            'phone_number.min' => 'Phone number must be exactly 12 charachers format 255777111222'
        ]
        */
    );

        $validator->validate();
        
        $pandr = ProjectAndResearch::find($id);
        if ($pandr->user_id === auth()->user()->id) {
            $pandr->name = $request->get('name');
            $pandr->TimeStarted = $request->get('time_started');
            $pandr->TimeEnded = $request->get('time_ended');
            /*
            $referees->Email = $request->get('email');
            */
        

            $pandr->save();
        
        }else
            return "Unauthorized action blocked.";
        return redirect()->route('project-researches.index')->with('success', 'Project/Research has been updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pandr = ProjectAndResearch::find($id);
        if ($pandr->user_id === auth()->user()->id)
        ProjectAndResearch::destroy($id);
        else
            return "Unauthorized action blocked.";
        return redirect()->route('project-researches.index')->with('success', 'Project/Research deleted.');
    }
}
