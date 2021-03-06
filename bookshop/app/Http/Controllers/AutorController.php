<?php

namespace App\Http\Controllers;
use App\Autor;
//use Gate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Requests;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return Autor::all();


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
        );
        $validator = Validator::make($request->all(),  $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            echo $errors;
            }

        else
        {
            $autor = new Autor;
            $autor->Ime = $request->input('Ime');
            $autor->Prezime = $request->input('Prezime');
            $autor ->save();
            return 'Autor dodan';
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
        //return Autor::find($id);
      

            return Autor::find($id);
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

        $rules = array(
            'Ime' => 'required|min:3',
            'Prezime' => 'required|min:3',
        );
        $validator = Validator::make($request->all(),  $rules);

        if ($validator->fails()) {
            $errors = $validator->errors();
            echo $errors;
        }
        else
        {

        $autor = Autor::find($id);

        if ($request->has('Ime')) {
            $autor->Ime = $request->input('Ime');
        }

        if ($request->has('Prezime')) {
            $autor->Prezime = $request->input('Prezime');
        }
        $autor ->save();

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
        Autor::find($id)->delete();
        return 'Autor izbrisan';
    }
}