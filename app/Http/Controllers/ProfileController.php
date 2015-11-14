<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileCreateRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profileUsr.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profileUsr.profileRegister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileCreateRequest $request)
    {
        $profile = new Profile([
            'nombre'    => $request['nombre'],
            'apP'       => $request['apP'],
            'apM'       => $request['apM'],
            'telefono'  => $request['telefono'],
            'fechaNac'  => $request['telefono'],
            'user_id'   =>$request['id'],
        ]);
        $profile->save();
        $user = User::find($request['id']);

        Session::flash('message','Datos ingresados Correctamente');
        return view('profileUsr.profile',compact('user','profile'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $profile = User::find($id)->Profile;
        /*$profile = DB::table('profiles')
            ->where('users.id',$id)
            ->leftJoin('users','profiles.user_id','=','users.id')
            ->select('name','email','type','nombre','apP','apM','telefono','fechaNac')
            ->get();
        */
        //return  $user."\n". $profile;
        if($profile== null){
            return view('profileUsr.profileNull');
        }else{
            return view('profileUsr.profile',compact('user','profile'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //deberia ir con ajax esta huevada
    {
        $user = User::find($id);
        $profile = User::find($id)->Profile;
        return view('profileUsr.edit',compact('user','profile'));
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
