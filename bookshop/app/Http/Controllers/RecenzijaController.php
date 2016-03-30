<?php

namespace App\Http\Controllers;
use App\Recenzija;
use Illuminate\Http\Request;

use App\Http\Requests;

class RecenzijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Index fajl za prikaz recenzije
        return Recenzija::all();
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
    $recenzija = new Recenzija;
    $recenzija->Ocjena = $request->input('Ocjena');
    $recenzija->Komentar = $request->input('Komentar');
    $recenzija->Datum = $request->input('Datum');
    $recenzija ->save();
    return 'Recenzija dodana';
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Recenzija::find($id);
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
        $recenzija = Recenzija::find($id);

        if ($request->has('Ocjena')) {
            $recenzija->Ocjena = $request->input('Ocjena');
        }

        if ($request->has('Komentar')) {
            $recenzija->Komentar = $request->input('Komentar');
        }
        if ($request->has('Datum')) {
            $recenzija->Datum = $request->input('Datum');
        }
        $recenzija ->save();

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
        Recenzija::find($id)->delete();
        return 'Recnzija izbrisana';
    }
}