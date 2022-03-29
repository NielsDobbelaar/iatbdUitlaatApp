<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class OppasserController extends Controller
{

    public function index()
    {
        return view('oppassers.index' ,[ 'oppassers' => \App\Models\Oppasser::all()]);
    }

    public function show($id)
    {
        return view('oppassers.show' ,[ 'oppasser' => \App\Models\Oppasser::find($id)]);
    }

    public function create()
    {
        return view('oppassers.create');
    }

    public function store(Request $request, \App\Models\Oppasser $oppasser){
        $oppasser->naam = $request->input('naam');
        $oppasser->email = $request->input('email');
        $oppasser->foto = $request->input('foto');
        $oppasser->beschrijving = $request->input('beschrijving');

        $oppasser->save();
        return redirect('/oppassers');

        // try{
        //     $oppasser->save();
        //     return redirect('/oppassers');
        // }catch(Exception $e){
        //     return redirect('/oppassers/create');
        // }
    }
}
