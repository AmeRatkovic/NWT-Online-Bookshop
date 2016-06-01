<?php

namespace App\Http\Controllers;
use App\Izdavac;
use Illuminate\Http\Request;

use App\Http\Requests;

class IzdavacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($idizdavac = null) {
        if ($idizdavac == null) {
            return Izdavac::orderBy('idIzdavac', 'asc')->get();
        } else {
            return $this->show($idizdavac);
        }
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
        $izdavac = new Izdavac;
        $izdavac->Ime = $request->input('Ime');
        $izdavac->Lokacija = $request->input('Lokacija');
        $izdavac->Email = $request->input('Email');
        $izdavac->Telefon = $request->input('Telefon');
        $izdavac ->save();
        return 'Izdavac dodan';
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Izdavac::find($id);
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
        $izdavac = Izdavac::find($id);
        $izdavac->Ime = $request->input('Ime');
        $izdavac->Lokacija = $request->input('Lokacija');
        $izdavac->Email = $request->input('Email');
        $izdavac->Telefon = $request->input('Telefon');
        $izdavac ->save();

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
        Izdavac::find($id)->delete();
        return 'Izdavac izbrisan';
    }
}