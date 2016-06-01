<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

   

    public function index()
    {
        return User::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'Ime' => 'required|min:3',
            'Prezime' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'username' => 'required|min:5',
            'password' => 'required|min:6',
            'Tip' => 'required|min:4',
        );
        $validator = Validator::make($request->all(),  $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            echo $errors;
        }
        else
        {
            $user = new User;
            $user->Ime = $request->input('Ime');
            $user->Prezime = $request->input('Prezime');
            $user->email = $request->input('email');
            $user->username = $request->input('username');
            $user->password = $request->input('password');
            $user->Tip = $request->input('Tip');
            $user ->save();
            return 'User dodan';
        }


    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $rules = array(
            'Ime' => 'required|min:3',
            'Prezime' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'username' => 'required|min:5',
            'password' => 'required|min:6',
            'Tip' => 'required|min:4',
        );
        $validator = Validator::make($request->all(),  $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            echo $errors;
        }
        else
        {



        if ($request->has('Ime')) {
            $user->Ime = $request->input('Ime');
        }

        if ($request->has('Prezime')) {
            $user->Prezime = $request->input('Prezime');
        }
        if ($request->has('email')) {
            $user->Email = $request->input('Email');
        }

        if ($request->has('username')) {
            $user->Username = $request->input('Username');
        }
        if ($request->has('password')) {
            $user->Password = $request->input('Password');
        }

        if ($request->has('Tip')) {
            $user->Tip = $request->input('Tip');
        }
        $user ->save();

        return 'Update uspio.';
    }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return 'User izbrisan';
    }
}