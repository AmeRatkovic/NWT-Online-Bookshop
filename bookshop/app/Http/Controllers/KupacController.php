<?php

namespace App\Http\Controllers;
use App\Kupac;
use Illuminate\Http\Request;

use App\Http\Requests;

class KupacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Kupac::all();
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
        $kupac = new Kupac;
        $kupac->Adresa = $request->input('Adresa');
        $kupac->ZipCode = $request->input('ZipCode');
        $kupac->Grad = $request->input('Grad');
        $kupac->Drzava = $request->input('Drzava');
        $kupac->BrojTelefona = $request->input('BrojTelefona');

        $kupac ->save();
        return 'Kupac dodan';
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Kupac::find($id);
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
        $kupac = Kupac::find($id);

        if ($request->has('Adresa')) {
            $kupac->Adresa = $request->input('Adresa');
        }

        if ($request->has('ZipCode')) {
            $kupac->ZipCode = $request->input('ZipCode');
        }
        if ($request->has('Grad')) {
            $kupac->Grad = $request->input('Grad');
        }

        if ($request->has('Drzava')) {
            $kupac->Drzava = $request->input('Drzava');
        }
        if ($request->has('BrojTelefona')) {
            $kupac->BrojTelefona = $request->input('BrojTelefona');
        }
        $kupac ->save();

        return 'Update uspio.';
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Kupac::find($id)->delete();
        return 'Kupac izbrisan';
    }
}