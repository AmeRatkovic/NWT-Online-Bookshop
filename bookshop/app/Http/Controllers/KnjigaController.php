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
        return Knjiga::all();
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
        return 'Knjiga dodana1';
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
        //
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
        $knjiga = Knjiga::find($id);

        if ($request->has('Naslov')) {
            $knjiga->Naslov = $request->input('Naslov');
        }

        if ($request->has('Izdavac')) {
            $knjiga->Izdavac = $request->input('Izdavac');
        }

        if ($request->has('Datum')) {
            $knjiga->Datum = $request->input('Datum');
        }

        if ($request->has('Kategorija')) {
            $knjiga->Kategorija = $request->input('Kategorija');
        }

        if ($request->has('ISBN')) {
            $knjiga->ISBN = $request->input('ISBN');
        }
        if ($request->has('Opis')) {
            $knjiga->Opis = $request->input('Opis');
        }
        if ($request->has('Slika')) {
            $knjiga->Slika = $request->input('Slika');
        }
        if ($request->has('Cijena')) {
            $knjiga->Cijena = $request->input('Cijena');
        }
        if ($request->has('BrojStrana')) {
            $knjiga->BrojStrana = $request->input('BrojStrana');
        }

        $knjiga ->save();

        return 'Update uspio.';
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


    public function AddBook()
    {
        
          //return 'Knjiga dodanaw';
        if (Auth::user())
        
     return view('addbook');
 else
    return Redirect::to('/');
    }
}
