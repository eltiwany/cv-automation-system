<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\PersonalInformation;
use Illuminate\Support\Facades\Validator;

class PersonalInformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        return $this->middleware('auth');
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $user_exist = false;
        if (PersonalInformation::where('user_id', $user_id)->exists()) {
            $user_exist = true;
            $personal_information = PersonalInformation::where('user_id', $user_id)->first();
        }
        return view('user-information.personal-information', compact('personal_information', 'user_exist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('user-information.personal-information');
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
            'Email' => 'required|email',
            'Phone_Number' => 'required|min:10|max:10',
            'DateOf_Birth' => 'required',
            'Martial_Status' => 'required',
            'Gender'=>'required',
            'Address'=>'required'
        ])->validate();

        $user_id = auth()->user()->id;

        $x=new PersonalInformation;
        $x->Email=$request->Email;
        $x->Phone_Number=$request->Phone_Number;
        $x->DateOf_Birth=$request->DateOf_Birth;
        $x->Martial_Status=$request->Martial_Status;
        $x->Gender=$request->Gender;
        $x->Address=$request->Address;
        $x->user()->associate($request->user());

        $x->save();
        return redirect()->route('personal-informations.index')->with('success', 'Personal Informations Saved.');
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
        Validator::make($request->all(), [
            'Email' => 'required|email',
            'Phone_Number' => 'required|min:10|max:10',
            'DateOf_Birth' => 'required',
            'Martial_Status' => 'required',
            'Gender'=>'required',
            'Address'=>'required'
        ])->validate();

        $x= PersonalInformation::find($id);
        $x->Email=$request->Email;
        $x->Phone_Number=$request->Phone_Number;
        $x->DateOf_Birth=$request->DateOf_Birth;
        $x->Martial_Status=$request->Martial_Status;
        $x->Gender=$request->Gender;
        $x->Address=$request->Address;
        $x->save();
        return redirect()->route('personal-informations.index')->with('success', 'Personal Informations Saved.');
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

    /** 
    * Upload/Update user profile
    * @param Request $request
    * @return \Illuminate\Http\Responce 
    */
    public function upload_image(Request $request) {

        $this->validate($request, [
            'image' => 'image|nullable|max:1999'
        ]);

        $image = 'null';

        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $image = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/profile_images', $image);
        }

        $user = User::find(auth()->user()->id);
        if (!empty($user->logo_url))
            unlink(public_path('storage/profile_images/' . $user->logo_url));
        $user->logo_url = $image == 'null' ? '' : $image;
        $user->save();

        return redirect()->route('home')->with('success', 'Profile Image Updated.');
    }
}
