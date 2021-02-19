<?php

namespace App\Http\Controllers;

use App\Referee;
use Illuminate\Http\Request;
//use App\Referee;
use Illuminate\Support\Facades\Validator;

class RefereesController extends Controller
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
        $referees = Referee::where('user_id', auth()->user()->id)->paginate(10);
        return view('user-information.referees.index', compact('referees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user-information.referees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'second_name' => 'required',
            'phone_number' => 'required|min:12',
            'email' => 'required|email',
        ], [
            'phone_number.min' => 'Phone number must be exactly 12 charachers format 255777111222'
        ]);
        $validator->validate();
        
        $referees = new Referee;
        $referees->First_Name = $request->get('first_name');
        $referees->Second_Name = $request->get('second_name');
        $referees->Phone_Number = $request->get('phone_number');
        $referees->Email = $request->get('email');
        $referees->user_id = auth()->user()->id;
        $referees->save();

        return redirect()->route('referees.index')->with('success', 'Referee has been added!');
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
        $referee = Referee::find($id);
        if ($referee->user_id === auth()->user()->id)
            return view('user-information.referees.edit', compact('referee'));
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
            'first_name' => 'required',
            'second_name' => 'required',
            'phone_number' => 'required|min:12',
            'email' => 'required|email',
        ], [
            'phone_number.min' => 'Phone number must be exactly 12 charachers format 255777111222'
        ]);
        $validator->validate();
        
        $referees = Referee::find($id);
        if ($referees->user_id === auth()->user()->id) {
            $referees->First_Name = $request->get('first_name');
            $referees->Second_Name = $request->get('second_name');
            $referees->Phone_Number = $request->get('phone_number');
            $referees->Email = $request->get('email');
            $referees->save();
        }else
            return "Unauthorized action blocked.";
        return redirect()->route('referees.index')->with('success', 'Referee has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $referees = Referee::find($id);
        if ($referees->user_id === auth()->user()->id)
            Referee::destroy($id);
        else
            return "Unauthorized action blocked.";
        return redirect()->route('referees.index')->with('success', 'Referee deleted.');
    }
}
