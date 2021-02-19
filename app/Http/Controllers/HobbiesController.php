<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobby;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class HobbiesController extends Controller
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
        $hobby = Hobby::where('user_id', auth()->user()->id)->paginate(10);
        return view('user-information.hobbies.index', compact('hobby'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user-information.hobbies.create');
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
       /* if (Hobby::where('user_id', auth()->user()->id)->exists())
            $hobby = Hobby::find(auth()->user()->id);
        else
            $hobby = new Hobby; 

        $hobby->name= $request->firsthobby;
       
        $hobby->user_id = auth()->user()->id;
        $hobby->save();
        */ 
        

        $validator = Validator::make($request->all(), [
            'name' => 'required',]
            /*
            'second_name' => 'required',
            'phone_number' => 'required|min:12',
            'email' => 'required|email',
        ]
        */
        , [
            'phone_number.min' => 'Phone number must be exactly 12 charachers format 255777111222'
        ]);
        $validator->validate();
        
        $hobby = new Hobby;
        $hobby->name = $request->get('name');
        /*$referees->Second_Name = $request->get('second_name');
        $referees->Phone_Number = $request->get('phone_number');
        $referees->Email = $request->get('email');
        */
        $hobby->user_id = auth()->user()->id;
        
        $hobby->save();
        

        return redirect()->route('hobbies.index')->with('success', 'Hobby has been added!');
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
        $hobby = Hobby::find($id);
        if ($hobby->user_id === auth()->user()->id)
            return view('user-information.hobbies.edit', compact('hobby'));
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
        
        $hobby = Hobby::find($id);
        if ($hobby->user_id === auth()->user()->id) {
            $hobby->name = $request->get('name');
           /* $referees->First_Name = $request->get('first_name');
            $referees->Second_Name = $request->get('second_name');
            $referees->Phone_Number = $request->get('phone_number');
            $referees->Email = $request->get('email');
            */
            $hobby->save();
        }else
            return "Unauthorized action blocked.";
        return redirect()->route('hobbies.index')->with('success', 'Hobby has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hobby = Hobby::find($id);
        if ($hobby->user_id === auth()->user()->id)
            Hobby::destroy($id);
        else
            return "Unauthorized action blocked.";
        return redirect()->route('hobbies.index')->with('success', 'Hobby deleted.');
    }
}
