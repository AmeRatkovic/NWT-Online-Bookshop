<?php

namespace App\Http\Controllers;

use App\Narudzba;
use Illuminate\Http\Request;

use App\Http\Requests;

class NarudzbaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Index fajl za prikaz narudzbe
        return Narudzba::find($id);
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
        $narudzba = new Narudzba;
        $narudzba->Kolicina = $request->input('Kolicina');
        $narudzba->TotalCijena = $request->input('TotalCijena');
        $narudzba->Datum = $request->input('Datum');
        $narudzba->Popust = $request->input('Popust');
        $narudzba ->save();
        return 'Narudzba dodana';
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
        $narudzba =  Narudzba::find($id);

        if ($request->has('Kolicina')) {
            $narudzba->Kolicina = $request->input('Kolicina');
        }

        if ($request->has('TotalCijena')) {
            $narudzba->TotalCijena = $request->input('TotalCijena');
        }
        if ($request->has('Datum')) {
            $narudzba->Popust = $request->input('Datum');
        }
        if ($request->has('Popust')) {
            $narudzba->Popust = $request->input('Popust');
        }
        $narudzba ->save();

        return 'Narudzba updateovana.';
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Narudzba::find($id)->delete();
        return 'Narudzba izbrisana';
    }
}