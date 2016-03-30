<?php

namespace App\Http\Controllers;
use App\Kolekcija;
use Illuminate\Http\Request;

use App\Http\Requests;

class KolekcijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Kolekcija::all();
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
        $kolekcija = new Kolekcija;
        $kolekcija->idKnjiga1 = $request->input('idKnjiga1');
        $kolekcija->Cijena = $request->input('Cijena');
         $kolekcija->Popust = $request->input('Popust');

        $kolekcija ->save();
        return 'Kolekcija dodana';
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       return Kolekcija::find($id);
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
        $kolekcija =  Kolekcija::find($id);

        if ($request->has('idKnjiga1')) {
            $kolekcija->idKnjiga1 = $request->input('idKnjiga1');
        }

        if ($request->has('Cijena')) {
            $kolekcija->Cijena = $request->input('Cijena');
        }
        if ($request->has('Popust')) {
            $kolekcija->Popust = $request->input('Popust');
        }
        $kolekcija ->save();

        return 'Kolekcija updateovana.';
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Kolekcija::find($id)->delete();
        return 'Kolekcija izbrisana';
    }
}