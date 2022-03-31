<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DierController extends Controller
{

    public function index()
    {
        return view('dieren.index' ,[ 'dieren' => \App\Models\Dier::all()]);;
    }

    public function show($id)
    {
        return view('dieren.show' ,[
            'dier' => \App\Models\Dier::find($id),
            'aanvragen' => \App\Models\Aanvraag::where('dier', $id)->get(),
            'user' => Auth::user()->id
        ]);
    }

    public function create()
    {
        return view('dieren.create', ['dierSoorten' => \App\Models\Soorten::all()]);
    }

    public function store(Request $request, \App\Models\Dier $dier){
        $dier->naam = $request->input('naam');
        $dier->diersoort = $request->input('diersoort');
        $dier->startDatum = $request->input('startdatum');
        $dier->eindDatum = $request->input('einddatum');
        $dier->uurtarief = $request->input('uurtarief');
        $dier->beschrijving = $request->input('beschrijving');
        $dier->foto = $request->input('foto');
        $dier->eigenaar = Auth::user()->id;

        $dier->save();

        return redirect('/dieren');

        // try{
        //     $oppasser->save();
        //     return redirect('/oppassers');
        // }catch(Exception $e){
        //     return redirect('/oppassers/create');
        // }
    }
}
