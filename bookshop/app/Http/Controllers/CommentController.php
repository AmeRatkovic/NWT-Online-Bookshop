<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests;

class CommentController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return Response
     */
     public function index()
    {
        return Comment::all();
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
    	 $com = new Comment;
            $com->username = $request->input('username');
            $com->komentar = $request->input('komentar');
             $com->idKnjiga = $request->input('idKnjiga');
            $com ->save();
            return 'Komentar dodan';
        
    }

    public function show($id)
    {
        //return Autor::find($id);
        $com = Comment::findOrFail($id);

            return Comment::find($id);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
         Comment::find($id)->delete();
        return 'Autor izbrisan';
    }
    
}
