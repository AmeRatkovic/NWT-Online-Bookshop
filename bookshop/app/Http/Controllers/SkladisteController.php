<?php

namespace App\Http\Controllers;
use App\Skladiste;
use Illuminate\Http\Request;
use App\Http\Requests;use Illuminate\Support\Facades\App;

class SkladisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Index fajl za prikaz knjiga
        return Skladiste::find($id);
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
        $skladiste = new Skladiste;
        $skladiste->idKnjiga = $request->input('idKnjiga');
        $skladiste->Kolicina = $request->input('Kolicina');
        $skladiste ->save();
        return 'Knjiga u skladiste dodana';
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Skladiste::find($id);
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
        $skladiste = Skladiste::find($id);

        if ($request->has('idKnjiga')) {
            $skladiste->idKnjiga = $request->input('idKnjiga');
        }

        if ($request->has('Kolicina')) {
            $skladiste->Kolicina = $request->input('Kolicina');
        }

        $skladiste ->save();

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
        Skladiste::find($id)->delete();
        return 'Knjiga iz skladista izbrisana';
    }
}