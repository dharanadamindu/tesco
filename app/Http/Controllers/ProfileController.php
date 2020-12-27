<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use DB;
use Hash;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function dashboard()
    {
        $users = user::all();
        return \view('/dashboard')->with('users', $users);
    }


    public function index()
    {
        $users = user::all();
        return \view('pages.profiles.index')->with('users', $users);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $users = User::find($id);
//        return \view('pages.profiles.edit')->with('users', $users);
        $userdata = User::find($id);
        return view('pages.profiles.edit')->with('userdata',$userdata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $this->validate($request, array(// 'name' => 'required',
//        ));

        //store data
        $userSave = User::find($id);

        //db colom name -> request name
        $userSave->name = $request->name;
        $userSave->email = $request->email;
        $userSave->eno = $request->eno;
        $userSave->project_name = $request->project_name;

//        $userSave->password = Hash::make($request->password);
//        $userSave->password = bcrypt(Request::input('password'));
//        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);

        $userSave->password = Hash::make($request->password);

//        dd($userSave);
        // dd($routeSave);
        $userSave->save();

        //redirect to index
        $userdata = User::find($id);
        return view('pages.profiles.edit')->with('userdata',$userdata);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
