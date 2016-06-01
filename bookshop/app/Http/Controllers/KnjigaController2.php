<?php

namespace App\Http\Controllers;
use App\Knjiga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Auth;
use App\Http\Requests;
use Validator, Redirect, Session;
class KnjigaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knjiga = Knjiga::all();
        $items = Knjiga::paginate(10);

        return response()->json($knjiga->toArray());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $knjiga = new Knjiga;
        $knjiga->Naslov = $request->input('Naslov');
         $knjiga->Izdavac = $request->input('Izdavac');
         $knjiga->Datum = $request->input('Datum');
         $knjiga->Kategorija = $request->input('Kategorija');
         $knjiga->ISBN = $request->input('ISBN');
         $knjiga->Opis = $request->input('Opis');
         $knjiga->Slika = $request->input('Slika');
         $knjiga->Cijena = $request->input('Cijena');
         $knjiga->BrojStrana = $request->input('BrojStrana');
        $knjiga ->save();
        return 'Dodana nova knjiga'. $knjiga->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Knjiga::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $knjiga=Knjiga::find($id);
        return $knjiga;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $knjiga = Knjiga::find($id);

        $knjiga->Naslov = $request->input('Naslov');
        $knjiga->Izdavac = $request->input('Izdavac');
        $knjiga->Datum = $request->input('Datum');
        $knjiga->Kategorija = $request->input('Kategorija');
        $knjiga->ISBN = $request->input('ISBN');
        $knjiga->Opis = $request->input('Opis');
        $knjiga->Slika = $request->input('Slika');
        $knjiga->Cijena = $request->input('Cijena');
        $knjiga->BrojStrana = $request->input('BrojStrana');
        $knjiga ->save();

        return "Usjesno izmjenjena knjiga #" . $knjiga->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Knjiga::find($id)->delete();
        return 'Knjiga izbrisana';
    }

}
